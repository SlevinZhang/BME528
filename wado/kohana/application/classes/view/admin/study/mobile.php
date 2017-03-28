<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Study_Mobile extends View_Admin {

	public function study()
	{
		// Get the metadata information (using __call)
		$study = $this->pacs->study();
		
		$study['StudyDescription'] = (trim($study['StudyDescription']) == '') ? 'No Description' : $study['StudyDescription'];
		$study['PatientName']      = Model_PACS::name($study['PatientName']);

		return $study;
	}
	
	public function ajax_video()
	{
		$js = 
			"<script type='text/javascript'>
			function ajax_video(type, index, frames, device, poster)
			{
				var video  = document.getElementById(type+index);
				if (document.getElementById(type+index+'-status').innerHTML == 'Video is ready')
				{
					video.play();
				}
				else if (document.getElementById(type+index+'-status').innerHTML == 'Generating Video...')
				{
					alert('A video compatible to your device is being generated. Please wait for the process to finish.');
				}
				else
				{
					document.getElementById(type+index+'-status').innerHTML = 'Generating Video...';
					// Call Ajax here
					//alert('admin/ajax/mmovie?site=".$this->pacs->exam['site']."&type='+type+'&study=".$this->pacs->exam['study_uid']."&index='+index+'&frames='+frames+'&device='+device);
					$.ajax({
						url: 'admin/ajax/mmovie?site=".$this->pacs->exam['site']."&type='+type+'&study=".$this->pacs->exam['study_uid']."&index='+index+'&frames='+frames+'&device='+device,
						success: function(data)
						{
							//alert( 'Data Sent: ' + data );
							if (data == 1)
								{
								if (type == 'Movie')
								{
									document.getElementById(type+index+'-html').innerHTML = '<video id=\"'+type+index+'\" controls=\"controls\" width=\"150\" height=\"100\" onclick=\"this.play();\" poster=\"'+poster+'\" src=\"../files/img-".$this->pacs->exam['study_uid']."-'+index+'/video.mp4\" />';
								}
								else
								{
									document.getElementById(type+index+'-html').innerHTML = '<video id=\"'+type+index+'\" controls=\"controls\" width=\"150\" height=\"100\" onclick=\"this.play();\" src=\"../files/doc-".$this->pacs->exam['study_uid']."-'+index+'/video.mp4\" />';
								}
								//document.getElementById(type+index+'-html').innerHTML = '<video id=\"'+type+index+'\" controls=\"controls\" width=\"150\" height=\"100\" onclick=\"this.play();\" src=\"../files/img-'".$this->pacs->exam['study_uid']."-'+index+'/video.mp4\" />';
								document.getElementById(type+index+'-status').innerHTML = 'Video is ready';
								video.load();
							}
							else
							{
								alert('Your session has expired. Please log in again.');
								document.getElementById(type+index+'-status').innerHTML = 'Failed to generate video';
								location.href = 'admin/logout';
							}
						},
						error: function(data)
						{
							//alert( 'Failed: ' + data );
							document.getElementById(type+index+'-status').innerHTML = 'Failed to generate video';
						}
					});
				}
			}
		</script>";
		return $js;
	}

	public function series()
	{
		// Get the study and series info here
		$study     = $this->pacs->study();
		$documents = $this->pacs->documents();
		$images    = $this->pacs->images();
		$study_uid = $this->pacs->study_uid();
		
		$series = array();

		// Present the documents
		if (count($documents) > 0)
		{
			$device = '';
			
			foreach ($documents as $index => $document)
			{
				$path_parts = pathinfo($document['FILENAME']);
				
				switch ($path_parts['extension'])
				{
					case 'txt':
					case 'htm':
					case 'html':
						$type = 'Report';
						$icon = 'document.jpg';
					break;
					case 'tiff':
					case 'tif':
					case 'pdf':
					case 'jpg':
						$type = 'Document';
						$icon = 'attach.png';
					break;
					case 'wmv':
						$type = 'Video';
						$icon = 'video.gif';
					break;
					default:
						$type = $icon = '';
					break;
				}

				if ($document['NAME'] == 'Structured Report')
				{
					$type = "Structured Report";
					$icon = "document.jpg";
				}
				
				$bookmark = '';
				if ($type !== NULL)
				{
					$icon = '<img src="media/img/'.$icon.'" />';
					if ($type == 'Video')
					{
						if (file_exists(Mnode::$DIR_FILES.'doc-'.$study_uid.'-'.$index.DIRECTORY_SEPARATOR.'video'.Mnode::$MP4))
						{
							$bookmark = 'Video is ready';
							$href = 'ajax_video(\''.$type.'\', '.$index.', 1, \''.$device.'\', \'\');';
							$icon = '<video id="'.$type.$index.'" controls="controls" width="150" 
							onclick="this.play();" src="../files/doc-'.$study_uid.'-'.$index.'/video'.Mnode::$MP4.' />';
						}
						else
						{
							// TODO: Ajax function to create the movie and replace the img element with the video element
							$href = 'ajax_video(\''.$type.'\', '.$index.', 1, \''.$device.'\', \'\');';
							$icon = '<img src="media/img/video.gif" />';
						}
					}
					else
					{
						$href = 'location.href=\'admin/attachment?site='.$document['site'].'&study_uid='.$study_uid.'&index='.$index.'&type='.$type.'\';';
					}
					$series[] = array(
						'item' => '1 '.$type,
						'type' => $type.$index,
						'description' => $document['NAME'],
						'bookmark' => $bookmark,
						'icon' => $icon,
						'href' => $href,
					);
				}
			}
		}

		// Present series with thumbnails of first images
		// For US study, detect video frames (SOP=16), post thumbnails for each video while generating jpg for video generation
		if (count($images) > 0)
		{
			$series_number = $sop = $cid = $image_count = $bookmark_count = $series_index = 0;
			$thumbnails = array();
			foreach ($images as $index => $image)
			{
				// get first image of each series for thumbnails
				if ( ! isset($image['SOPClassUID'])
					OR $image['SOPClassUID'] != '10' AND $image['SOPClassUID'] != '16') // all the conditions to exclude video clips
				{
					if ($image['SeriesInstanceUID'] !== $series_number)
					{
						if ($image_count > 0)
						{
							$thumbnails[$series_index - 1]['count']    = $image_count;
							$thumbnails[$series_index - 1]['bookmark'] = $bookmark_count;
						}
						$series_number = $image['SeriesInstanceUID'];
						
						$thumbnails[$series_index] = array(
							'index' => $index,
							'count' => 0,
							'bookmark' => -1,
							'description' => $image['SeriesDescription'],
							'type' => 'Images',
						);
						$image_count = 0;
						$bookmark_count = 0;
						$series_index++;
					}
				}
				else
				{
					// get first of multiframe segments for thumbnails
					if ($image['CID'] != $cid)
					{
						if ($image_count > 0)
						{
							$thumbnails[$series_index - 1]['count']    = $image_count;
							$thumbnails[$series_index - 1]['bookmark'] = $bookmark_count;
						}
						$thumbnails[$series_index] = array(
							'index' => $index,
							'count' => 0,
							'bookmark' => 0,
							'description' => $image['SeriesDescription'],
							'type' => 'Movie',
						);
						$image_count = 0;
						$series_index++;
					}
				}
				
				$image_count++;
				if ($image['BOOKMARK'] == 'Y')
				{
					$bookmark_count++;
				}
			}
			
			$cid = $this->cid;
			$sop = $this->sop;
			
			$thumbnails[$series_index - 1]['count']    = $image_count;
			$thumbnails[$series_index - 1]['bookmark'] = $bookmark_count;
			
			foreach ($thumbnails as $thumbnail)
			{
				$dir = Mnode::$DIR_IMG.$study_uid.DIRECTORY_SEPARATOR.$images[$thumbnail['index']]['SeriesInstanceUID'].DIRECTORY_SEPARATOR;
				if ( ! file_exists($dir))
				{
					mkdir($dir, 0755, TRUE);
				}
				
				$dcm_file = $dir.$images[$thumbnail['index']]['SOPInstanceUID'].Mnode::$DCM;
				
				if ( ! file_exists($dcm_file)) 
				{
					// the local file should only be used if the file is not being copied in the background
					$src_file = $images[$thumbnail['index']]['FILENAME'];
					// Generate the dicom image file
					$this->pacs->extract_binary($src_file, $images[$thumbnail['index']]['OFFSET'],
						$images[$thumbnail['index']]['LENGTH'], $dcm_file);
				}
				// After creating the local dicom file, get the dicom windowing information to correctly display the thumbnails
				/*$dir_info  = Mnode::$DIR_INFO.$study_uid.DIRECTORY_SEPARATOR.$images[$thumbnail['index']]['SeriesInstanceUID'].DIRECTORY_SEPARATOR;
				$info_file = $dir_info.$images[$thumbnail['index']]['SOPInstanceUID'].Mnode::$TXT;
				
				if ( ! file_exists($dir_info))
				{
					mkdir($dir_info, 0755, TRUE);
				}*/
				$info_key = 'info.'.$study_uid.'-'.$images[$thumbnail['index']]['SeriesInstanceUID'].'-'.$images[$thumbnail['index']]['SOPInstanceUID'];
								
				//$info = Mnode::collect_info($dcm_file, $info_file, TRUE, FALSE, FALSE);
				$info = Mnode::collect_info($dcm_file, $info_key, TRUE, FALSE, FALSE);
				$window_width  = ($info['window_width'] == NULL) ? '' : '&windowWidth='.$info['window_width'];
				$window_center = ($info['window_center'] == NULL) ? '' : '&windowCenter='.$info['window_center'];
				
				$bookmark = '';
				$href = '';
				$icon = '';
				if ($thumbnail['type'] == 'Images')
				{
					if ($thumbnail['bookmark'] == 0)
					{
						$bookmark = '<i>0 Bookmarks</i>';
					}
					else
					{
						$bookmark = '<i><a href="admin/series?site='.$this->site.'&study_uid='.$study_uid
							.'&index='.$thumbnail['index'].'&frames='.$thumbnail['count']
							.'&bookmark='.$thumbnail['bookmark'].'">'
							.(($thumbnail['bookmark'] == 1) ? '1 Bookmark' : $thumbnail['bookmark'].' Bookmarks').'</a></i>';
					}

					$href = 'admin/series?site='.$this->site.'&study_uid='.$study_uid.'&series_uid='
						.$images[$thumbnail['index']]['SeriesInstanceUID'].'&index='.$thumbnail['index']
						.'&frames='.$thumbnail['count'];
					$icon = '<img src="admin/'.$this->site.'/wado?requestType=WADO&studyUID='.$study_uid.'&seriesUID='
						.$images[$thumbnail['index']]['SeriesInstanceUID'].'&objectUID='.$images[$thumbnail['index']]['SOPInstanceUID']
						.$window_center.$window_width.'&columns=150" />';
				}
				else if ($thumbnail['type'] == 'Movie')
				{
					$bookmark = 'Video';
					if (file_exists(Mnode::$DIR_FILES.'img-'.$study_uid.'-'.$thumbnail['index'].DIRECTORY_SEPARATOR.'video'.Mnode::$MP4))
					{
						$bookmark = 'Video is ready';
						$href = 'ajax_video(\'Movie\', '.$thumbnail['index'].', '.$thumbnail['count'].', \''.$device.'\', 
							\'admin/'.$this->site.'/wado?requestType=WADO&studyUID='.$study_uid.'&seriesUID='.$images[$thumbnail['index']]['SeriesInstanceUID']
							.'&objectUID='.$images[$thumbnail['index']]['SOPInstanceUID'].$window_width.$window_center.'&columns=150\');';
						$icon = '<video id="'.$thumbnail['type'].$thumbnail['index'].'" controls="controls" width="150" 
							height="'.round(150*($info['height']/$info['width'])).'" onclick="this.play();" 
							src="../files/img-'.$study_uid.'-'.$thumbnail['index'].'/video'.Mnode::$MP4.'" />';
					}
					else
					{
						// TODO: Ajax function to create the movie and replace the img element with the video element
						$href = 'ajax_video(\'Movie\', '.$thumbnail['index'].', '.$thumbnail['count'].', \''.$device.'\', 
						\'admin/'.$this->site.'/wado?requestType=WADO&studyUID='.$study_uid.'&seriesUID='.$images[$thumbnail['index']]['SeriesInstanceUID']
						.'&objectUID='.$images[$thumbnail['index']]['SOPInstanceUID'].'&columns=150\');';
						$icon = '<img src="admin/wado?requestType=WADO&studyUID='.$study_uid
							.'&seriesUID='.$images[$thumbnail['index']]['SeriesInstanceUID']
							.'&objectUID='.$images[$thumbnail['index']]['SOPInstanceUID']
							.$window_center.$window_width.'&columns=150" />';
					}
				}
				$series[] = array(
					'item' => ($thumbnail['count'] == 1) ? '1 Image' : $thumbnail['count'].' Images',
					'type' => $thumbnail['type'].$thumbnail['index'],
					'description' => $thumbnail['description'],
					'bookmark' => $bookmark,
					'icon' => $icon,
					'href' => $href,
				);
			}
		}

		return $series;
	}
	
} // End Admin_Study_Mobile
