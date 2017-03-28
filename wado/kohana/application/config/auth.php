<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'driver'       => 'ldap',
	'hash_method'  => 'sha256',
	'hash_key'     => 'pacsproxy',
	'lifetime'     => 1209600,
	'session_type' => 'cookie',
	'session_key'  => 'usc_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		// 'admin' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
	),
	
	// The next is configuration for ldap
	'ldap'	=> array(
		'server' => '10.100.6.5',
		'domain_ldap' => '',
		'domain' => 'ipilab',
	),

);
