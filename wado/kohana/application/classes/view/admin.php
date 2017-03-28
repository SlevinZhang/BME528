<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin extends View_Public {

	public $navigation = FALSE;

	public $index = 0;
	
	public function init()
	{
	}

	protected $_partials = array(
		'options'	=> 'partials/options',
		'navigation' => 'partials/navigation',
		'search' => 'partials/search',
	);

	public function logout_href()
	{
		return 'admin/logout';
	}
	
	public function navigation()
	{
		$data = array();
		$last_page = (int) ($this->navigation['total']/$this->navigation['limit']) + 1;
		
		// "First"
		$data['navs'][] = array(
			'last' => FALSE,
			'url' => ($this->navigation['page'] == 1) 
				? FALSE
				: 'admin'.URL::query(array('page' => 1)),
			'name' => '« First',
		);

		// Prev
		$data['navs'][] = array(
			'first' => TRUE,
			'last' => FALSE,
			'url' => ($this->navigation['page'] == 1) 
				? FALSE 
				: 'admin'.URL::query(array('page' => $this->navigation['page'] - 1)),
			'name' => '< Prev',
		);

		// Next
		$data['navs'][] = array(
			'first' => FALSE,
			'last' => TRUE,
			'url' => ($this->navigation['page'] >= $last_page) 
				? FALSE 
				: 'admin'.URL::query(array('page' => $this->navigation['page'] + 1)),
			'name' => 'Next >', //»',
		);

		// Items per page
		$items = array(100, 50, 25, 10);
		$total = count($items);
		
		foreach ($items as $index => $item)
		{
			$data['results_per_page'][] = array(
				'first' => (bool) ($index + 1 == $total),
				'last' => (bool) ($index == 0),
				'url' => ($this->navigation['limit'] == $item)
					? FALSE
					: 'admin'.URL::query(array('count' => $item)),
				'name' => $item,
			);
		}

		return $data;
	}

	public function proper_name()
	{
		$view = $this;
		return function($string) use ($view)
		{
			$string = strtolower($string);
			$string = preg_replace('/\^\^+/', '\^', $str);
			$string = str_replace('^', ', ', $string);
			$string = ucwords($string);
		
			return $string;
		};
	}

	public function increment()
	{
		$this->index++;
	}
	
	public function odd()
	{
		return (bool) ($this->index % 2 == 0);
	}
	
} // End Admin
