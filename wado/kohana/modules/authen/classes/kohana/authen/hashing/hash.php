<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Handles hashing for Authen library
 *
 * @package    Authen
 * @category   Hashing
 * @author     Nano Documet
 * @copyright  (c) 2011 Nano Documet
 * @license    MIT
 */
abstract class Kohana_Authen_Hashing_Hash {

	// Auth instance
	protected static $_instance;

	/**
	 * @param  string  default key, cannot be NULL
	 */
	public $key = NULL;
	
	/**
	 * @param  string  default method
	 */
	public $method = 'sha256';

	/**
	 * Get a Hash instance. If the instance has not yet been created,
	 * a new instance will be created with the specified configuration.
	 *
	 * @param   string  instance name
	 * @param   array   additional configuration settings
	 * @return  Authen_Hashing_Hash
	 */
	public static function instance(array $config = NULL)
	{
		if ( ! isset(Authen_Hashing_Hash::$_instance))
		{
			// Create a new session instance
			Authen_Hashing_Hash::$_instance = new Authen_Hashing_Hash($config);
		}

		return Authen_Hashing_Hash::$instance;
	}

	/**
	 * Applies configuration variables
	 *
	 * @param  array  configuration
	 */
	public function __construct(array $config = NULL)
	{
		if ($config)
		{
			foreach ($config as $name => $value)
			{
				if (property_exists($this, $name))
				{
					$this->$name = $value;
				}
			}
		}
	}

	/**
	 * Check a plaintext password against the hash of that password. 
	 *
	 * [!!] To increase security, use a unique salt and a random iteration
	 * count for every user!
	 *
	 * @param   string   plaintext password
	 * @param   string   hashed password
	 * @param   string   appended salt, should be unique per user
	 * @param   integer  number of iterations to run
	 * @return  boolean
	 */
	public function check($password, $hash, $salt = NULL, $iterations = NULL)
	{
		return ($hash === $this->hash($password, $salt, $iterations));
	}
	
	/**
	 * Perform a hmac hash, using the configured method.
	 *
	 * @param   string   plaintext password
	 * @param   string   appended salt, should be unique per user. Not used
	 * @param   integer  number of iterations to run. Not used
	 * @return  string
	 */
	public function hash($password, $salt = NULL, $iterations = NULL)
	{
		return hash_hmac($this->method, $password, $this->key);
	}
}