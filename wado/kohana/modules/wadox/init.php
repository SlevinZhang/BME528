<?php defined('SYSPATH') or die('No direct script access.');

// The wado route
Route::set('wado', 'admin/<site>/wado', array('site' => '([a-zA-Z0-9_-]++)'))
	->defaults(array(
		'controller' => 'wado',
		'action'     => 'index',
	));
