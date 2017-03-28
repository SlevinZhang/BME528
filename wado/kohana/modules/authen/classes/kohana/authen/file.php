<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * File Auth driver.
 * [!!] this Auth driver does not support roles nor autologin.
 *
 * @package    Kohana/Auth
 * @author     Kohana Team
 * @copyright  (c) 2007-2010 Kohana Team
 * @license    http://kohanaframework.org/license
 */
class Kohana_Authen_File extends Authen {

	// User list
	protected $_users;

	/**
	 * Constructor loads the user list into the class.
	 */
	public function __construct($config = array())
	{
		parent::__construct($config);

		// Load user list. Username => Hashed password
		$this->_users = Arr::get($config, 'users', array());
	}

	/**
	 * Logs a user in.
	 *
	 * @param   string   username
	 * @param   string   Plain text password
	 * @param   boolean  enable autologin (not supported)
	 * @return  boolean
	 */
	protected function _login($username, $password, $remember)
	{
		// Password is Plain text
		$password = $this->_hashing->hash($password);
		
		if (isset($this->_users[$username]) AND $this->_users[$username] === $password)
		{
			// Complete the login
			return $this->complete_login($username);
		}

		// Login failed
		return FALSE;
	}

	/**
	 * Forces a user to be logged in, without specifying a password.
	 *
	 * @param   mixed    username
	 * @return  boolean
	 */
	public function force_login($username)
	{
		// Complete the login
		return $this->complete_login($username);
	}

	/**
	 * Get the stored password for a username.
	 *
	 * @param   mixed   username
	 * @return  string
	 */
	public function password($username)
	{
		return Arr::get($this->_users, $username, FALSE);
	}

	/**
	 * Compare password with original (hashed). Works for current (logged in) user
	 *
	 * @param   string  $password
	 * @return  boolean
	 */
	public function check_password($password)
	{
		$username = $this->get_user();

		if ($username === FALSE)
		{
			return FALSE;
		}

		// Compare hashed passwords
		return ($password === $this->password($username));
	}

} // End Auth File