<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'cookie' => array(
		'encrypted' => TRUE,
		'name' => 'wado',
		'lifetime' => 1800, //30*60,
	),
	'native' => array(
		'encrypted' => TRUE,
		'name' => 'username',
	),
);
