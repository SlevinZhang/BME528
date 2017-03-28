<?php defined('SYSPATH') or die('No direct script access.');

// The wado route
Route::set('wado', 'admin/wado(/<action>(/<id>))', array('action' => '([a-zA-Z0-9_-]++)', 'id' => '([0-9.]++)'))
	->defaults(array(
		'controller' => 'wado',
		'action'     => 'index',
	));
