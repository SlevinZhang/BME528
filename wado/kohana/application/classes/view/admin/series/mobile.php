<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Series_Mobile extends View_Admin {

	protected $_layout = 'mobile';

	public function study_link()
	{
		$study = $this->pacs->study();
		return 'admin/study?site='.$this->site.'&study_uid='.$study['StudyInstanceUID'];
	}

	public function patient_link()
	{
		$study = $this->pacs->study();
		return 'admin/patient?patientID='.$study['PatientID'].'&patient_id='.$study['PatientID'];
	}

	public function images()
	{
		$study = $this->pacs->study();
		
		$data = array(
			'name' => Model_PACS::name($study['PatientName']),
			'javascript' => $this->precache(),
			'status' => $study['STATUS'],
		);
		
		return $data;
	}

	public function styles()
	{
		return HTML::style('media/css/handheld.css');
	}
	
	
	public function presets()
	{
		$study = $this->pacs->study();
		
		if (in_array($study['Modality'], array('CT', 'MR')))
			return $study['Modality'];
		
		return FALSE;
	}
	
	public function precache()
	{
		$study     = $this->pacs->study();
		$images    = $this->pacs->images();

		$site      = $study['site'];
		$study_uid = $study['StudyInstanceUID'];

		$index      = $this->settings['index'];
		$series_uid = $this->settings['series_uid'];
		
		$total_images = count($images);
		
		if ($index == '' AND $series_uid != '')
		{
			// Go through study until the desired series is detected
			$index = 0;
			
			while ($index < $total_images)
			{
				if ($series_uid == $images[$index]['SeriesInstanceUID'])
					break;
				$index ++;
			}
		}

		$series_uid   = $images[$index]['SeriesInstanceUID'];
		$instance_uid = $images[$index]['SOPInstanceUID'];
		$modality     = $study['Modality'];

		$count = 0;
		$js = '';
		$js_var = '';
		$js_var .= 'var imageURL = new Array('.$this->settings['frames'].');';
		$js_var .= 'var images = new Array('.$this->settings['frames'].');';
		
		for ($i = $index; $i < $total_images AND array_key_exists($i, $images) 
			AND $series_uid == $images[$i]['SeriesInstanceUID'] AND $images[$i]['SOPClassUID'] != 16; $i++)
		{
			if ($this->settings['bookmark'] > 0 AND $images[$i]['BOOKMARK'] == NULL)
				continue;
			
			//Precache
			$js .= 'imageURL['.$count.'] = "admin/wado?requestType=WADO&studyUID='
				.$study_uid.'&seriesUID='.$images[$i]['SeriesInstanceUID'].'&objectUID='
				.$images[$i]['SOPInstanceUID'].";";
			
			$js .= 'images['.$count.'] = new Image();';
			$count++;
		}
		
		// Generate the dicom image files
		Mnode::execute_command(Mnode::$KOHANA_CLI.' --uri=scripts/prepare-dicom/'.$study_uid.' --get=series_uid='.$series_uid);
		
		$dir       = Mnode::$DIR_IMG.$study_uid.DIRECTORY_SEPARATOR.$series_uid.DIRECTORY_SEPARATOR;
		
		$dcm_file  = $dir.$instance_uid.Mnode::$DCM;
		//$info_file = $dir.$instance_uid.Mnode::$TXT;
		$info_key = 'info.'.$study_uid.'-'.$series_uid.'-'.$instance_uid;

		//$data = Mnode::collect_info($dcm_file, $info_file, FALSE, TRUE , FALSE);
		$data = Mnode::collect_info($dcm_file, $info_key, FALSE, TRUE , FALSE);
		
		$window_width  = $this->settings['WindowWidth'];
		$window_center = $this->settings['WindowCenter'];
		
		if ($this->settings['WindowWidth'] == 0)
		{
			$window_center = $data['window_center'];
			$window_width  = $data['window_width'];
		}
		
		$js_var .= 'var wWindow = '.$window_width.';';
		$js_var .= 'var cWindow = '.$window_center.';';
		$js_var .= 'cWindowArray[0] = '.$window_center.';';
		$js_var .= 'wWindowArray[0] = '.$window_width.';';
		$js_var .= 'var Height  = '.$images[$index]['Rows'].';';
		$js_var .= 'var Width  = '.$images[$index]['Columns'].';';
		$js_var .= 'var studyUID = "'.$study_uid.'";';
		$js_var .= 'var seriesUID = "'.$series_uid.'";';
		$js_var .= 'var objectUID = "'.$instance_uid.'";';
		$js_var .= 'var index = '.$index.';';
		$js_var .= 'var frames = '.($this->settings['bookmark'] > 0 
			? $this->settings['bookmark']
			: $this->settings['frames']).';';
		$js_var .= 'var image = '.$this->settings['image'].';';
		$js_var .= 'var scale = '.$this->settings['scale'].';';
		$js_var .= 'var iLeft = '.$this->settings['iLeft'].';';
		$js_var .= 'var iTop = '.$this->settings['iTop'].';';
		$js_var .= 'var modality = "'.$modality.'";';
		
		if ($this->settings['region'] == '0,0,1,1')
		{
			$js_var .= 'var zParameters = "";';
		}
		else
		{
			$js_var .= 'var zParameters = "&region='.$this->settings['region'].'";';
		}
		if ($window_width == 0 OR $modality == 'US' OR $modality == 'PE')
		{
			$js_var .= 'var wParameters = "";';
		}
		else
		{
			$js_var .= 'var wParameters = "&windowCenter='.$window_center.'&windowWidth='.$window_width.'";';
		}
		
		//$js_var .= 'var dParameters = "&rows="+rows+"&columns="+columns;';

		return $js_var . $js;
	}
	
} // End Admin_Series_Mobile