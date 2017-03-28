<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Extended controller class to render profiler
 *
 */
class Controller extends Kohana_Controller
{
	public function before()
	{
		parent::before();
		
		if (strpos($this->request->action(), '_') !== FALSE)
		{
			// An _ was found in action, redirect to the right URL
			$uri = Request::detect_uri();
			$uri = str_replace('_', '-', $uri);
			$this->request->redirect($uri);
		}
		
		$this->request->action(str_replace('-', '_', $this->request->action()));

		//if (Request::current()->is_ajax())
		//{
		//	$this->template = new View_Ajax;
		//	return;
		//}

		// Get the directory
		$directory = Request::current()->directory() ? Request::current()->directory().'_' : '';
		// Create full name
		$view_name = 'View_'.$directory.Request::current()->controller().'_'.Request::current()->action();
		// Lowercase and make it look like a path
		$view_name = strtolower(str_replace('_', '/', $view_name));

		if (FALSE !== Kohana::find_file('classes', $view_name))
		{
			// Back to underscores
			$view_name = str_replace('/', '_', $view_name);
			// Assign to template
			$this->template = new $view_name;
			// Call init() from template
			$this->template->init();
		}
		else
		{
			$this->template = new View_Public_Index;
		}
		
		$this->get = $this->request->query();
		$this->post = $this->request->post();
	}

	public function after()
	{
		$this->response->body($this->template);
	}
}