<?php
class Auth_Kohana_Auth_Ldap extends Auth {

	const DEFAULT_PASSWORD = 'l23kj4l2s23534ffssj423kj4j2hnlmn1h3';

	public $error_message;
	protected $_server = 'localhost';
	protected $_domain_ldap = '';
	protected $_domain = 'localhost';
	
	/**
	 * Class Definition.
	 * 
	 */
	function __construct($config = array()) 
	{
		// Save the config in the object
		$this->_config = $config;

		$this->_session = Session::instance($config['session_type']);

		$ldap = $config->get('ldap');
		$this->_server		= $ldap['server'];
		$this->_domain_ldap = $ldap['domain_ldap'];
		$this->_domain		= $ldap['domain'];
	}

	/**
	 * Get the stored password for a username.
	 *
	 * NOT AVAILABLE FOR LDAP
	 *
	 * @param   mixed   username
	 * @return  string
	 */
	public function password($username)
	{
		return NULL;
	}

	/**
	 * Compare password with original (plain text). Works for current (logged in) user
	 *
	 * Does an authentication to verify if password is correct for LDAP.
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

		return $this->authenticate($username, $password);
	}
	
	/**
	 * Logs a user in.
	 *
	 * @param   string   username
	 * @param   string   password
	 * @param   boolean  enable autologin (not supported)
	 * @return  boolean
	 */
	protected function _login($username, $password, $remember)
	{
		if ($this->authenticate($username, $password))
		{
			// Complete the login
			return $this->complete_login($username);
		}

		// Login failed
		return FALSE;
	}

	public function authenticate($username = 'WRONG_USERNAME_NO_EXISTS', $password = 'WRONG_PASSWORD') 
	{
		if ($username == ''  OR $password == '')
			return FALSE;
		
		return $this->try_bind($username, $password);
	}
	
	// BECAREFUL!!!! THIS INFORMATION IS GOING IN PLAINTEXT! NOT GOOD FOR SECURITY!!!
	private function try_bind($username, $password) 
	{
		$ds = @ldap_connect($this->_server);  // must be a valid LDAP server!
		if ($ds) 
		{
			$response = @ldap_bind($ds, $username.'@'.$this->_domain, $password);
			if ($response)
				return TRUE;
		}

		return FALSE;
	}
	
} // End Auth_Kohana_Auth_Ldap
