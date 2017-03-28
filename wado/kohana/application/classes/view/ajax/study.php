<?php defined('SYSPATH') or die('No direct script access.');

class View_Ajax_Study extends View_Admin_Study {

	protected $_layout = 'ajax';
	
	public function init()
	{
	}
	
	public function items()
	{
		$this->pacs->process_study();
		return $this->menu();
	}
	
}