<?php defined('SYSPATH') or die('No direct script access.');

class View_Ajax extends Kostache_Layout {

	protected $_layout = 'ajax';
	
	public function init()
	{
		// Query the model for patient_studies.
		//$this->pacs->patient_studies();
	}

}
