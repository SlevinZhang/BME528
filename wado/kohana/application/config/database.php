<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'default_site' => 'IPILab',
	'sites' => array(
		/*'IPILab' => array(
			'connection' => '(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST = 10.100.6.77)(PORT = 1521))(CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME = food.world)))',
			'user'		 => 'fujiadmin',
			'password'	 => 'butterfly',
			'name'		 => 'PACS @ IPILab',
			'vendor'	 => 'fuji',
			'product'	 => 'synapse',
			'version'	 => '3.1.1.1',
			'connection' => 'oracle',
		),*/
		'IPILab' => array(
			//'connection' => '(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST = 10.100.6.77)(PORT = 1521))(CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME = food.world)))',
			//'user'		 => 'fujiadmin',
			//'password'	 => 'butterfly',
			'name'		 => 'iCare',
			'vendor'	 => 'standalone',
			'product'	 => 'pacs',
			'version'	 => '1',
			'connection' => 'default',
		),
	),
	'default' => array
	(
		'type'       => 'mysql',
		'connection' => array(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => 'localhost',
			'database'   => 'doseimg',
			'username'   => 'root',
			'password'   => '$mysql',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
	'oracle' => array
	(
		'type'       => 'oracle',
		'connection' => array(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => '10.100.6.77',
			'database'   => 'food.world',
			'username'   => 'fujiadmin',
			'password'   => 'butterfly',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
	'alternate' => array(
		'type'       => 'pdo',
		'connection' => array(
			/**
			 * The following options are available for PDO:
			 *
			 * string   dsn         Data Source Name
			 * string   username    database username
			 * string   password    database password
			 * boolean  persistent  use persistent connections?
			 */
			'dsn'        => 'mysql:host=localhost;dbname=kohana',
			'username'   => 'root',
			'password'   => 'r00tdb',
			'persistent' => FALSE,
		),
		/**
		 * The following extra options are available for PDO:
		 *
		 * string   identifier  set the escaping identifier
		 */
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
);
