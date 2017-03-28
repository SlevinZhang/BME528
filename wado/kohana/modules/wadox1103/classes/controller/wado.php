<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Wado extends Controller_Admin {

	public function before()
	{
		if (Request::user_agent('mobile') == '')
		{
			set_time_limit(5);
		}
		parent::before();
	}
	
	public function action_new()
	{
		$id = $this->request->param('id');
		$encrypt = Encrypt::instance();
		echo $encrypt(time());
		exit;
	}
	
	public function action_index()
	{
		$query = md5($_SERVER['QUERY_STRING']);
		//$query = $_SERVER['QUERY_STRING'];
		$temp_file = Mnode::$DIR_TEMP.$query;
		//$mycache = Cache::instance('apc');
		//$mycache->delete_all();
		//$data = $mycache->get($query);
		if (file_exists($temp_file))
		{
			Wado::send_header('image/jpeg', $temp_file);
			header('X-Accel-Redirect: /wadofiles/'.$query);
			exit;
			//Wado::send_header('image/jpeg', $data);
			//echo file_get_contents($temp_file);
			//echo file_get_contents($data['contents']);
			//echo $data;
			//exit;
		}

		$wado = new Wado();
		$wado->query = $query;
		$wado->get = $this->request->query();
		$wado->temp_file = $temp_file;
		$wado->show();
		exit;
	}

} // End Wado

