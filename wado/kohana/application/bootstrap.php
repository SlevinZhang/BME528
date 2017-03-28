<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/kohana/core'.EXT;

if (is_file(APPPATH.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('America/Los_Angeles');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 */
if (getenv('KOHANA_ENV') !== FALSE)
{
	Kohana::$environment = getenv('KOHANA_ENV');
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url'   => '/wado/www',
	'index_file' => FALSE,
	'errors'	 => TRUE,
    'profile'    => Kohana::$environment !== Kohana::PRODUCTION,
    'caching'    => Kohana::$environment == Kohana::PRODUCTION,
));
/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	// 'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	// 'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	// 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'oauth'      => MODPATH.'oauth',      // OAuth authentication
	// 'pagination' => MODPATH.'pagination', // Paging of results
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	//'pagination'	=> MODPATH.'kloopko-kohana-pagination-d1c34df',
	'authen'		=> MODPATH.'authen',     // Basic authentication
	'bonadife'		=> MODPATH.'bonafide',   // Hashing
	'cache'			=> MODPATH.'cache',
	'database'		=> MODPATH.'database',
	'hint'			=> MODPATH.'hint',
	'acl'			=> MODPATH.'vendo-acl-8ea5ab6',
	'mnode'			=> MODPATH.'mnodepre',
	'kostache'		=> MODPATH.'zombor-KOstache-d1d766d',
	'automodeler'	=> MODPATH.'zombor-Auto-Modeler-955e95d',
	'wado'			=> MODPATH.'wadopre',
	));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
	Route::set('auth', 'auth(/<action>)')
		->defaults(array(
			'controller' => 'auth',
			'action'     => 'login',
		));
Route::set('scripts', 'scripts(/<action>(/<id>))', array('action' => '([a-zA-Z0-9_-]++)', 'id' => '([0-9.]++)'))
	->defaults(array(
		'controller' => 'scripts',
		'action'     => 'index',
	));
Route::set('crontab', 'crontab(/<action>)', array('action' => '([a-zA-Z0-9_-]++)'))
	->defaults(array(
		'controller' => 'crontab',
		'action'     => 'index',
	));
Route::set('ajax', 'admin/ajax(/<action>(/<id>))', array('action' => '([a-zA-Z0-9_-]++)', 'id' => '([0-9.]++)'))
	->defaults(array(
		'controller' => 'ajax',
		'action'     => 'index',
	));
Route::set('admin', 'admin(/<action>(/<id>))')
	->defaults(array(
		'controller' => 'admin',
		'action'     => 'index',
	));
Route::set('error', 'error/<action>(/<message>)', array('action' => '[0-9]++', 'origuri' => '.+', 'message' => '.+')) 
	->defaults(array( 
		'controller' => 'error_handler',
		'action'     => 'index' 
));
Route::set('public', '')
	->defaults(array(
		'controller' => 'public',
		'action'     => 'index',
	));	
Route::set('test', '<action>')
	->defaults(array(
		'controller' => 'public',
		'action'     => 'index',
	));	
Route::set('default', '<page>', array('page' => '.+'))
	->defaults(array(
		'controller' => 'none',
	));	
$_SERVER['HTTPS'] = 'on';
