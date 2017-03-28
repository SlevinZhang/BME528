<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public extends Controller {

	public function before()
	{
		parent::before();

		// Apply the redirect if set
//		$this->template->redirect = Arr::get($this->get, 'redirect', 'admin');
		
		// Set message if any
//		$this->template->message  = Arr::get($this->get, 'message', FALSE);
	}
	
	public function action_index()
	{
		
	}
	
	public function action_testing()
	{
		$directory = APPPATH.'data'.DIRECTORY_SEPARATOR.'upload';
		session_start();
//		print_r($_SESSION);
		$id = strtoupper($_SESSION['StudyID']);
		
//		echo $name;
		require_once(Kohana::find_file('vendor', 'nanodicom/nanodicom'));
		//var_dump(Mnode::parse_directory($directory));
		Mnode::parse_directory($directory,$id);
		$this->request->redirect('redirect.php');
	}
	
} // End Public
