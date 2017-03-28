<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Error_Handler extends Controller_Admin {

	public function before()
	{
		parent::before();

		// Set the Admin homepage as template
		$this->template = new View_Admin_Index;
		
		// Sub requests only!
		if (Request::initial() !== Request::current())
		{
			if ($message = rawurldecode($this->request->param('message')))
			{
				$this->template->message = $message;
			}

			if ($requested_page = rawurldecode($this->request->param('origuri')))
			{
				$this->template->page = $requested_page;
			}
		}
		else
		{
			// This one was directly requested, don't allow
			$this->request->action(404);

			// Set the requested page accordingly
			$this->template->message = Arr::get($_SERVER, 'REQUEST_URI');;
		}

		$this->response->status((int) $this->request->action());
	}

	public function action_404() 
	{
		$this->template->title = '404 Not Found';

		// Here we check to see if a 404 came from our website. This allows the
		// webmaster to find broken links and update them in a shorter amount of time.
		if (isset ($_SERVER['HTTP_REFERER']) AND strstr($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) !== FALSE)
		{
			// Set a local flag so we can display different messages in our template.
			$this->template->local = TRUE;
		}
	}	
	
	public function action_503()
	{
		$this->template->title = 'Maintenance Mode';
	}

	public function action_500() 
	{
		$this->template->title = 'Internal Server Error';
	}

} // End Error_Handler
