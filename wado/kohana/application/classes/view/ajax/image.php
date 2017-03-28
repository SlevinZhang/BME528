<?php defined('SYSPATH') or die('No direct script access.');

class View_Ajax_Image extends View_Ajax {

	public function init()
	{
	}
	
	public function image()
	{
		// Prepare the study files and video clips by a windows background process
		Mnode::execute_command(Mnode::$KOHANA_CLI.' --uri=scripts/prepare-dicom/'.$this->study_uid);

		//TODO: can we avoid reading the JSON file?
		$images = Mnode::read_file('meta', 'img-'.$this->study_uid);
		
		// Get the image id
		$image_index = $this->settings['image'];
		
		$path = $this->study_uid.DIRECTORY_SEPARATOR.$images[$this->settings['image']]['SeriesInstanceUID']
			.DIRECTORY_SEPARATOR.$images[$image_index]['SOPInstanceUID'];

		$dcm_file  = Mnode::$DIR_IMG.$path.Mnode::$DCM;
		//$info_file = Mnode::$DIR_INFO.$path.Mnode::$TXT;
		$info_key = 'info.'.$this->study_uid.'-'.$images[$image_index]['SeriesInstanceUID'].'-'.$images[$image_index]['SOPInstanceUID'];
		
		$info = Mnode::collect_info($dcm_file, $info_key, TRUE, TRUE);
		return json_encode(array(
			'w' => $info['width'],
			'h' => $info['height'],
			'wCenter' => $info['window_center'],
			'wWidth' => $info['window_width'],
			'xSpace' => $info['col_spacing'],
			'ySpace' => $info['row_spacing']
		));
	}
	
} // End Ajax_Image
