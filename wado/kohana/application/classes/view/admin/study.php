<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Study extends View_Admin {

	protected $_layout = 'desktop';
	
	protected $_partials = array(
		'menu' => 'ajax/study',
	);
	
	//public $title = 'Desktop Viewer';
	public $is_desktop = TRUE;
	
	public $panes = array(
		array('id' => 'vTL', 'top' => 'pt0', 'left' => 'pl0', 'right' => '', 'bottom' => '', 'classes' => 'hhalf size1of2'),
		array('id' => 'vTR', 'top' => 'pt0', 'left' => '', 'right' => 'pr0', 'bottom' => '', 'classes' => 'hhalf size1of2'),
		array('id' => 'vBL', 'top' => '', 'left' => 'pl0', 'right' => '', 'bottom' => 'pb0', 'classes' => 'hhalf size1of2'),
		array('id' => 'vBR', 'top' => '', 'left' => '', 'right' => 'pr0', 'bottom' => 'pb0', 'classes' => 'hhalf size1of2'),
	);	

	public function panes()
	{
		$panes = array();
		
		if ($this->is_desktop)
		{
			$panes = $this->panes;
		}
		else
		{
			$panes = array(
				array('id' => 'vTL', 'top' => 'pt0', 'left' => 'pl0', 'right' => '', 'bottom' => '', 'classes' => 'h100 full')
			);
		}
		
		return $panes;
		
	}
/*
	public function worklist()
	{
		if (strpos(Request::$initial->referrer(), URL::base(Request::$current, FALSE).'admin') === 0)
		{
			return Request::$initial->referrer();
		}
		else
		{
			return 'admin';
		}
	}
/*
	public function is_desktop()
	{
		//return TRUE;
		return (Request::user_agent('mobile') == '');
	}
	
	public function is_tablet()
	{
		//return FALSE;
		return (Request::user_agent('mobile') != '');
	}
*/
	public function shared_path()
	{
		return Kohana::$base_url;
	}

	public function servers()
	{
		$server = (Mnode::get_domain() == '') ? '' : 'https://'.Mnode::$INSTANCE_NAME;
		$servers = 
		//"var servers = [];servers['vHalfL'] = ['".$server."'];servers['vHalfR'] = ['".$server."'];";
		"var servers = [];servers['vTL'] = ['".$server."'];servers['vTR'] = ['".$server."'];
		servers['vBL'] = ['".$server."'];servers['vBR'] = ['".$server."'];";
		$servers .= "var shared_path = '".Mnode::get_domain().Kohana::$base_url."';\n";

		return $servers;
	}
	
	public function _servers()
	{
		$server = (Mnode::get_domain() == '') ? '' : 'https://'.Mnode::$INSTANCE_NAME;
		$servers = 
		//"var servers = [];servers['vHalfL'] = ['".$server."'];servers['vHalfR'] = ['".$server."'];";
		"var servers = [];servers['vTL'] = ['https://researchpacs','https://researchpacs1','https://researchpacs2'];
		servers['vTR'] = ['https://researchpacs','https://researchpacs1','https://researchpacs2'];
		servers['vBL'] = ['https://researchpacs','https://researchpacs1','https://researchpacs2'];
		servers['vBR'] = ['https://researchpacs','https://researchpacs1','https://researchpacs2'];";
		$servers .= "var shared_path = '".Mnode::get_domain().Kohana::$base_url."';\n";

		return $servers;
	}

	public function study()
	{
		static $done = FALSE;
		static $study;
		
		if ( ! $done)
		{
			$study = $this->pacs->study();
			$study['PatientName'] = Model_PACS::name($study['PatientName']);
			$study['items'] = ($this->is_desktop) ? $this->menu() : $this->menu($this->settings['series_uid']);
			
			$done = TRUE;
		}
		
		return $study;
	}
	
	public function menu($series_uid = '')
	{
		$study = $this->pacs->study();
		$documents = $this->pacs->documents();
		$images = array_values($this->pacs->images());
		$study_uid = $this->pacs->study_uid();

		$items = $thumbnails = array();
		if (count($documents) > 0 AND empty($series_uid))
		{
			foreach ($documents as $index => $document)
			{
				// Present attachments with representative icons
				// At this point the thumbnail images should be generated from the source file directly
				$item = array();
				$type = NULL;

				if (strtolower(substr($document['FILENAME'], -4)) == '.txt') 
				{
					$type = 'Report';
					$icon = 'document.jpg';
				}
				elseif (strtolower(substr($document['FILENAME'], -5)) == '.tiff'
				   OR strtolower(substr($document['FILENAME'], -4)) == '.tif'
				   OR strtolower(substr($document['FILENAME'], -4)) == '.pdf'
				   OR strtolower(substr($document['FILENAME'], -4)) == '.jpg')
				{
					$type = 'Attachment';
					$icon = 'attach.png';
				}
				elseif (strtolower(substr($document['FILENAME'], -4)) == '.wmv')
				{
					$type = 'Video';
					$icon = 'video.gif';
				}
				
				if ($type !== NULL)
				{
					$item['class'] = $type.' attachment';
					$item['type']  = $document['NAME'];
					$item['image_class'] = 'center';
					$item['href']  = 'admin/ajax/attachment?site='.$this->site.'&study_uid='.$study_uid
									.'&index='.$index.'&type='.$type;
					$item['src']   = 'media/img/'.$icon;
					$item['text']  = '1 '.$type;
					$item['is_attachment'] = TRUE;
					$items[] = $item;
				}
			}
		}

		if (count($images) > 0)
		{
			$series = $sop_class_uid = $cid = $image_count = $bookmark_count = $series_index = 0;

			foreach ($images as $index => $image)
			{
				if ( ! empty($series_uid) AND $image['SeriesInstanceUID'] != $series_uid)
					continue;
					
				if ( ! isset($image['SOPClassUID']) // all the conditions to exclude video clips
					OR $image['SOPClassUID'] != '10' && $image['SOPClassUID'] != '16')
				{
					// It is an image
					if ($image['SeriesInstanceUID'] != $series)
					{
						if ($image_count > 0)
						{
							$thumbnails[$series_index - 1]['image_count'] = $image_count;
							$thumbnails[$series_index - 1]['bookmark_count'] = $bookmark_count;
						}
						$series = $image['SeriesInstanceUID'];
						$thumbnails[$series_index] = array(
							'index' => $index,
							'image_count' => 0,
							'series_description' => $image['SeriesDescription'],
							'link' => 'series',
						);
						$image_count = 0;
						$bookmark_count = 0;
						$series_index++;
					}
				}
				else
				{
					// It is a video!
					if ($image['CID'] != $cid)
					{
						// Get first of multiframe segments for thumbnailss
						if ($image_count > 0)
						{
							$thumbnails[$series_index - 1]['image_count'] = $image_count;
							$thumbnails[$series_index - 1]['bookmark_count'] = $bookmark_count;
						}
						$thumbnails[$series_index] = array(
							'index' => $index,
							'image_count' => 0,
							'bookmark_count' => 0,
							'series_description' => 'Video Clip',
							'link' => 'series video',
						);

						$image_count = 0;
						$series_index++;
					}
				}
				
				$sop_class_uid = Arr::get($image, 'SOPClassUID', '');
				$cid = Arr::get($image, 'CID', '');
				$image_count++;
				if ($image['BOOKMARK'] == 'Y')
				{
					$bookmark_count++;
				}
			}
			
			$thumbnails[$series_index - 1]['image_count'] = $image_count;
			$thumbnails[$series_index - 1]['bookmark_count'] = $bookmark_count;

			foreach ($thumbnails as $series)
			{
				$item = array();
				$dir = Mnode::$DIR_IMG.$study_uid.DIRECTORY_SEPARATOR.$images[$series['index']]['SeriesInstanceUID'].DIRECTORY_SEPARATOR;
				if ( ! is_dir($dir) AND ! file_exists($dir))
				{
					mkdir($dir, 0755, TRUE);
				}
				$dcm_file = $dir.$images[$series['index']]['SOPInstanceUID'].Mnode::$DCM;
				
				if ( ! file_exists($dcm_file)) {
					// the local file should only be used if the file is not being copied in the background
					$src_file  = $images[$series['index']]['FILENAME'];
					// Generate the dicom image file
					$this->pacs->extract_binary($src_file, $images[$series['index']]['OFFSET'],
												$images[$series['index']]['LENGTH'], $dcm_file);
				}
				
				// After creating the local dicom file, get the dicom windowing information to correctly display the thumbnails
				/*
				$info_dir = Mnode::$DIR_INFO.$study_uid.DIRECTORY_SEPARATOR.$images[$series['index']]['SeriesInstanceUID']
					.DIRECTORY_SEPARATOR;

				if ( ! is_dir($info_dir) AND ! file_exists($info_dir))
				{
					mkdir($info_dir, 0755, TRUE);
				}*/
				
				//$info_file = Mnode::$DIR_INFO.$study_uid.DIRECTORY_SEPARATOR.$images[$series['index']]['SeriesInstanceUID']
				//	.DIRECTORY_SEPARATOR.$images[$series['index']]['SOPInstanceUID'].Mnode::$TXT;
				
				$info_key = 'info.'.$study_uid.'-'.$images[$series['index']]['SeriesInstanceUID'].'-'.$images[$series['index']]['SOPInstanceUID'];
				
				$info = Mnode::collect_info($dcm_file, $info_key, TRUE, FALSE, FALSE);
				$window_width  = ($info['window_width'] === NULL) ? '' : '&windowWidth='.$info['window_width'];
				$window_center = ($info['window_center'] === NULL) ? '' : '&windowCenter='.$info['window_center'];
				
				if ($series['link'] == 'series')
				{
					$item['bookmarks']  = $series['bookmark_count'];
					if ($series['bookmark_count'] > 1)
					{
						$item['has_bookmarks']  = TRUE;
						$item['has_1_bookmark']  = ($series['bookmark_count'] == 1) ? TRUE : FALSE;
						$item['bookmarks_href']	= 'admin/ajax/'.$series['link'].'?site='.$this->site
							.'&study_uid='.$study_uid.'&index='.$series['index'].'&frames='.$series['image_count']
							.'&bookmark='.$series['bookmark_count'];
					}
				}

				$item['class'] = $series['link'];
				$item['href']  = 'admin/ajax/'.$series['link'].'?site='.$this->site.'&study_uid='.$study_uid.
								'&index='.$series['index'].'&frames='.$series['image_count'];
				$item['src']   = 'admin/'.$this->site.'/wado?requestType=WADO&studyUID='.$study_uid
					.'&seriesUID='.$images[$series['index']]['SeriesInstanceUID']
					.'&objectUID='.$images[$series['index']]['SOPInstanceUID'].$window_center.$window_width.'&columns=256';
				$item['image_class'] = 'liquid full';
				$item['images']		 = $series['image_count'];
				$item['has_1_image'] = (bool) ($series['image_count'] == 1);
				$item['description'] = $series['series_description'];
				$item['is_dicom']	 = TRUE;
				
				$items[] = $item;
			}
		}
			
		return $items;
	}

} // End Admin_Study
