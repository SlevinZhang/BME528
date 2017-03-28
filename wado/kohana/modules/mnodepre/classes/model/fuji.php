<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fuji extends Model_PACS {

	public static function extract_info($dcm_file, $info_file, $modality = '')
	{
		
		if (file_exists($info_file))
		{
			return file_get_contents($info_file);
		}
		else
		{
			$dcm_file = Mnode::get_file_share($dcm_file);
			
			// Add Nanodicom library
			require_once(Kohana::find_file('vendor', 'nanodicom/nanodicom'));
			
			$dicom = Nanodicom::factory($dcm_file);
			$dicom->parse(array(array(0x0028, 0x0010), array(0x0028, 0x0011), array(0x0028, 0x1050), array(0x0028, 0x1051)));
		
			$window_center = ((int) $dicom->value(0x0028,0x1050) == 0) ? '' : (int) $dicom->value(0x0028,0x1050);
			$window_width  = ((int) $dicom->value(0x0028,0x1051) == 0) ? '' : (int) $dicom->value(0x0028,0x1051);
			$height = ((int) $dicom->value(0x0028,0x0010) == 0) ? '' : (int) $dicom->value(0x0028,0x0010);
			$width  = ((int) $dicom->value(0x0028,0x0011) == 0) ? '' : (int) $dicom->value(0x0028,0x0011);

			file_put_contents($info_file, $width.",".$height.",".$window_center.",".$window_width);
			return $width.','.$height.','.$window_center.','.$window_width;
		}
	}
	
	public function loaded()
	{
		return $this->_loaded;
	}

	/*
	public function patient_studies()
	{
		$search		 = Arr::get($_GET, 'search', '');
		$site		 = Arr::get($_GET, 'site', Kohana::config('database.default_site'));
		$current	 = Arr::get($_GET, 'current', '');

		// Search all databases
		$results = array();
		foreach (Kohana::config('database.sites') as $site_code => $settings)
		{
			// Finding out the name of the model to use
			$pacs = Model_PACS::instance('Fuji_'.$settings['product'], $site_code);

			$results[$site_code] = $pacs->_patient_studies();
		}
			
		$this->_patient_studies = $results;
		
		$this->_loaded = TRUE;
		return $this;
	}
	*/
	
	public function __get($name)
	{
		return Mnode::$$name;
	}
	
} // End Fuji
