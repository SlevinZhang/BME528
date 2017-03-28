<?php defined('SYSPATH') or die('No direct script access.');

class View_Auth extends View_Base {

	protected $_layout = 'auth';

    public $title = 'PACSProxy';
	public $keywords = '';
	public $messages = array();

	public function base()
	{
		return URL::base(TRUE);
	}
	
	protected $_partials = array(
		'footer'  => 'partials/auth/footer',
		'header' => 'partials/auth/header',
		'body'    => 'partials/auth/login',
	);	
	
} // End Auth
