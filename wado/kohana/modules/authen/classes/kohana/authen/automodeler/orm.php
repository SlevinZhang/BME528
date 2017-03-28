<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Automodeler_ORM Authen driver.
 *
 * @package    Authen
 * @author     Kohana Team
 * @copyright  (c) 2007-2008 Kohana Team
 * @license    http://kohanaphp.com/license.html
 */
class Kohana_Authen_AutoModeler_ORM extends Authen {

	/**
	 * Checks if a session is active.
	 *
	 * @param   mixed    role name string, role object, or array with role names
	 * @return  boolean
	 */
	public function logged_in($role = NULL)
	{
		$status = FALSE;

		// Get the user from the session
		$user = $this->get_user();

		if (is_object($user) AND $user instanceof Model_User AND $user->id)
		{
			// Everything is okay so far
			$status = TRUE;

			if ( ! empty($role))
			{
				// Multiple roles to check
				if (is_array($role))
				{
					// Check each role
					foreach ($role as $_role)
					{
						if ( ! is_numeric($_role))
						{
							$_role = AutoModeler_ORM::factory('role')->load(db::select()->where('name', '=', $role))->id;
						}

						// If the user doesn't have the role
						if ( ! $user->has('roles', $_role))
						{
							// Set the status false and get outta here
							$status = FALSE;
							break;
						}
					}
				}
				// Single role to check
				else
				{
					if ( ! is_numeric($role))
					{
						// Load the role
						$role = AutoModeler_ORM::factory('role')->load(db::select()->where('name', '=', $role))->id;
					}

					// Check that the user has the given role
					$status = $user->has('roles', $role);
				}
			}
		}

		return $status;
	}

	/**
	 * Logs a user in.
	 *
	 * @param   string   username or password (depends on implementation)
	 * @param   string   password
	 * @param   boolean  enable autologin
	 * @return  boolean
	 */
	protected function _login($user, $password, $remember)
	{
		if ( ! is_object($user))
		{
			$username = $user;

			// Load the user
			$user = new Model_User($username);
		}
		
		$password = $this->hash($password, $user->salt, $user->iterations);

		// If the passwords match, perform a login (role 1 is login)
		if ($user->has('roles', Model_Role::LOGIN) AND $user->password === $password)
		{
			if ($remember === TRUE)
			{
				// Create a new autologin token
				$token = AutoModeler_ORM::factory('user_token');

				// Set token data
				$token->user_id    = $user->id;
				$token->expires	   = time() + $this->_config['lifetime'];
				$token->user_agent = sha1(Request::$user_agent);
				$token->save();

				// Set the autologin cookie
				Cookie::set('authautologin', $token->token, $this->_config['lifetime']);
			}

			// Finish the login
			$this->complete_login($user);

			return TRUE;
		}

		// Login failed
		return FALSE;
	}

	/**
	 * Forces a user to be logged in, without specifying a password.
	 *
	 * @param   mixed    username string, email string or user object
	 * @param   boolean  mark the session as forced
	 * @return  boolean
	 */
	public function force_login($user, $mark_session_as_forced = FALSE)
	{
		if ( ! is_object($user))
		{
			$username = $user;

			// Load the user
			$user = AutoModeler_ORM::factory('user');
			// It loads it either via email or username
			$user = $user->load(db::select()->where($user->unique_key($username), '=', $username));
		}

		if ($mark_session_as_forced === TRUE)
		{
			// Mark the session as forced, to prevent users from changing account information
			$this->_session->set('auth_forced', TRUE);
		}

		// Run the standard completion
		$this->complete_login($user);
	}

	/**
	 * Logs a user in, based on the authautologin cookie.
	 *
	 * @return  mixed
	 */
	public function auto_login()
	{
		if ($token = Cookie::get('authautologin'))
		{
			// Load the token and user
			$token = AutoModeler_ORM::factory('user_token')->load(db::select()->where('token', '=', $token));

			if ($token->loaded() AND $token->user->loaded())
			{
				if ($token->user_agent === sha1(Request::$user_agent))
				{
					// Save the token to create a new unique token
					$token->save();

					// Set the new token
					Cookie::set('authautologin', $token->token, $token->expires - time());

					// Complete the login with the found data
					$this->complete_login($token->user);

					// Automatic login was successful
					return $token->user;
				}

				// Token is invalid
				$token->delete();
			}
		}

		return FALSE;
	}

	/**
	 * Gets the currently logged in user from the session (with auto_login check).
	 * Returns FALSE if no user is currently logged in.
	 *
	 * @return  mixed
	 */
	public function get_user($default = FALSE)
	{
		$user = parent::get_user($default);

		if ( ! $user)
		{
			// check for "remembered" login
			$user = $this->auto_login();
		}

		return $user;
	}

	/**
	 * Log a user out and remove any autologin cookies.
	 *
	 * @param   boolean  completely destroy the session
	 * @param	boolean  remove all tokens for user
	 * @return  boolean
	 */
	public function logout($destroy = FALSE, $logout_all = FALSE)
	{
		// Set by force_login()
		$this->_session->delete('auth_forced');

		if ($token = Cookie::get('authautologin'))
		{
			// Delete the autologin cookie to prevent re-login
			Cookie::delete('authautologin');

			// Clear the autologin token from the database
			$token = AutoModeler_ORM::factory('user_token')->load(db::select()->where('token', '=', $token));

			if ($token->loaded() AND $logout_all)
			{
				AutoModeler_ORM::factory('user_token')->load(db::select()->where('user_id', '=', $token->user_id))->remove_all();
			}
			elseif ($token->loaded())
			{
				$token->delete();
			}
		}

		return parent::logout($destroy);
	}

	/**
	 * Get the stored password for a username.
	 *
	 * @param   mixed   username string, or email string or user object
	 * @return  string
	 */
	public function password($user)
	{
		if ( ! is_object($user))
		{
			$username = $user;

			// Load the user
			$user = new Model_User($username);
		}

		return $user->password;
	}

	/**
	 * Complete the login for a user by incrementing the logins and setting
	 * session data: user_id, username, roles.
	 *
	 * @param   object  user object
	 * @return  void
	 */
	protected function complete_login($user)
	{
		$user->complete_login();

		return parent::complete_login($user);
	}

} // End Auth Automodeler ORM
