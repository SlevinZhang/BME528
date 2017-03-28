<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * User authorization library. Handles user login and logout, as well as secure
 * password hashing. Based on Auth from Kohana
 *
 * @package    Authen
 * @category   Authentication
 * @author     Nano Documet
 * @copyright  (c) 2011 Nano Documet
 * @copyright  (c) 2007-2010 Kohana Team
 * @license    http://kohanaframework.org/license
 * @license    MIT
 */
abstract class Kohana_Authen {

	// Auth instance
	protected static $_instance;

	/**
	 * Singleton pattern
	 *
	 * @return Authen
	 */
	public static function instance()
	{
		if ( ! isset(Authen::$_instance))
		{
			// Load the configuration for this type
			$config = Kohana::$config->load('authen');

			if ( ! $type = $config['driver']['class'])
			{
				$type = 'file';
			}

			// Set the session class name
			$class = 'Authen_'.ucfirst($type);

			// Create a new session instance
			Authen::$_instance = new $class($config);
		}

		return Authen::$_instance;
	}

	/**
	* @param The session to be used
	*/
	protected $_session;

	/**
	* @param The configuration
	*/
	protected $_config;

	/**
	* @param The class used for hashing
	*/
	protected $_hashing;

	/**
	* Loads Session and configuration options.
	*
	* @return void
	*/
	public function __construct($config = array())
	{
		// Save the config in the object
		$this->_config = $config;

		if ($config['session']['type'] == 'cookie')
		{
			Cookie::$salt = $config['session']['cookie']['salt'];
		}
		
		$this->_session = Session::instance($config['session']['type']);

		$this->_hashing = $config['hashing']::instance();

	}


	/**
	 * Logs a user in. Called by the Authen implementations
	 *
	 * @param   string   username
	 * @param   string   password
	 * @param   boolean  enable autologin
	 * @return  boolean
	 */
	abstract protected function _login($username, $password, $remember);

	/**
	 * Get the stored password for a username. Called by the Authen implementations
	 *
	 * @param   mixed   username string, or email or User Model object. Depends on implementation
	 * @return  string
	 */
	abstract public function password($username);

	/**
	 * Gets the currently logged in user from the session.
	 * Creates a non-saved user object if no user is currently logged in.
	 *
	 * @return User model from config
	 */
	public function get_user($default = FALSE)
	{
		$value = $this->_session->get($this->_config['session']['key'], $default);
		
		return new $this->_config['driver']['model']($value);
	}

	
	/**
	 * Check if plain password matches stored password.
	 *
	 * @param   string   plaintext password
	 * @param   string   appended salt, should be unique per user
	 * @param   integer  number of iterations to run
	 * @return  string
	 */
	public function check($password, $hash, $salt = NULL, $iterations = NULL)
	{
		$user = $this->get_user();

		if ($user === FALSE)
		{
			// nothing to compare
			return FALSE;
		}

		return $this->_hashing->check($password, $hash, $salt, $iterations);
	}

	/**
	 * Let the hashing mechanism create a hash.
	 *
	 * @param   string   plaintext password
	 * @param   string   appended salt, should be unique per user
	 * @param   integer  number of iterations to run
	 * @return  string
	 */
	public function hash($password, $salt = NULL, $iterations = NULL)
	{
		return $this->_hashing->hash($password, $salt, $iterations);
	}

	/**
	 * Attempt to log in a user by using a User Model object and plain-text password.
	 *
	 * @param   mixed    username or email to log in OR the User Model
	 * @param   string   password to check against
	 * @param   boolean  enable autologin
	 * @return  boolean
	 */
	public function login($username, $password, $remember = FALSE)
	{
		if (empty($password))
			return FALSE;

		// Send the password in clear
		return $this->_login($username, $password, $remember);
	}

	/**
	 * Log out a user by removing the related session variables.
	 *
	 * @param   boolean  completely destroy the session
	 * @param   boolean  remove all tokens for user
	 * @return  boolean
	 */
	public function logout($destroy = FALSE, $logout_all = FALSE)
	{
		if ($destroy === TRUE)
		{
			// Destroy the session completely
			$this->_session->destroy();
		}
		else
		{
			// Remove the user from the session
			$this->_session->delete($this->_config['session']['key']);

			// Regenerate session_id
			$this->_session->regenerate();
		}

		// Double check
		return ! $this->logged_in();
	}

	/**
	 * Check if there is an active session. Optionally allows checking for a
	 * specific role.
	 *
	 * @param   string   role name
	 * @return  mixed
	 */
	public function logged_in($role = NULL)
	{
		return ($this->get_user() !== FALSE);
	}

	/**
	 * Complete the login for a user by regenerating the session
	 *
	 * @param   object  user object
	 * @return  boolean TRUE
	 */
	protected function complete_login($user)
	{
		// Regenerate session_id
		$this->_session->regenerate();

		$id = $this->_config['driver']['id_column'];
		
		// Store username in session
		$this->_session->set($this->_config['session']['key'], $user->$id);

		return TRUE;
	}

} // End Authen
