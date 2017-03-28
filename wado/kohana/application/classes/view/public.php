<?php defined('SYSPATH') or die('No direct script access.');

class View_Public extends View_Base {

	protected $_layout = 'public';

	public $message = FALSE;
	
	public $is_logged_in = FALSE;
	
	public $title = 'WADO Server';

	public function current_year()
	{
		return date('Y');
	}

	public function base()
	{
		return URL::base(TRUE);
	}
	
	public function title()
	{
		return $this->site().' Server';
	}
	
	public function site()
	{
		switch (Mnode::$INSTANCE_NAME)
		{
		case 'researchpacs' :
			return 'Research PACS';
		case 'pacsproxy' :
			return 'PACS Proxy';
		case 'icare' :
			return 'iCare';
		}
		
		return 'Wado Server';
	}
	
} // End Public
