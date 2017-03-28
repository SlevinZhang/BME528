<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Crontab extends Controller {

	public function before()
	{
		//parent::before();
		$this->request->action(str_replace('-', '_', $this->request->action()));
	}
	
	public function action_worklist()
	{
		/*
		$cache = Model_PACS::instance('Cache');
		
		// Search all databases
		foreach (Kohana::config('database.sites') as $site_code => $settings)
		{
			$results = array();
			
			// Finding out the name of the model to use
			$pacs = Model_PACS::instance($settings['vendor'].'_'.$settings['product'], $site_code);

			// Add sitename and append to results array
			foreach ($pacs->_worklist() as $result)
			{
				$result['SITE'] = $site_code;
				$results[] = $result;
			}
			echo count($results).' results'.PHP_EOL;
			//break;
			$cache->_update($results);
		}
		$cache->_purge();
		*/
	}

} // End Crontab
