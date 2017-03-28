<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'driver'        => array(
		'class'		=> 'AutoModeler_ORM',
		'id_column' => 'id',
		'model'		=> 'Model_User',
	),
	'hashing'	    => 'bonafide',
	'session'  		=> array(
		'key' 		=> 'authen_user',
		'type' 		=> 'cookie',
		'cookie'	=> array(
		'salt'	=> 'w43#vcd.,?452ERa%3m@5sm,s',
		),
	),

);
