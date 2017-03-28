<?php defined('SYSPATH') or die('No direct script access.');
/**
* User Model
*
* @package AutoModeler
* @author Jeremy Bush
* @copyright (c) 2010 Jeremy Bush
* @license http://www.opensource.org/licenses/isc-license.txt
*/
class Model_User extends AutoModeler_ORM implements Model_ACL_User {

	protected $_relations_data = array();
	
	protected $_table_name = 'users';

	const STATUS_NEW		= 'new';
	const STATUS_ACTIVE  	= 'active';
	const STATUS_DELETED	= 'deleted';

	// Lists available states for this model
	public static $user_status = array(
		Model_User::STATUS_NEW,
		Model_User::STATUS_ACTIVE,
		Model_User::STATUS_DELETED,
	);
	
	protected $_data = array('id' => '',
						'username' => '',
						'first_name' => '',
						'last_name' => '',
						'email' => '',
						'password' => '',
						'salt'	=> '',
						'iterations' => 3,
						'last_login' => '',
						'last_ip_address' => '',
						'logins' => '',
						'status' => Model_User::STATUS_ACTIVE);

	protected $_rules = array(
		'username' => array(
			array('not_empty'),
			array('min_length', array(':value', 4)),
			array('max_length', array(':value', 32)),
			array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
			array(array('Model_User', 'username_available'), array(':validation', ':field', ':model')),
		),
		'first_name' => array(
			array('not_empty'),
		),
		'last_name' => array(
			array('not_empty'),
		),
		'email' => array(
			array('not_empty'),
			array('min_length', array(':value', 4)),
			array('max_length', array(':value', 127)),
			array('email'),
			array(array('Model_User', 'email_available'), array(':validation', ':field', ':model')),
		),
		/*
		'password' => array(
			array('not_empty'),
		),*/
	);

	protected $_has_many = array(
		'roles',
		'tokens',
		'comments',
		'logs',
	);

	/**
	 * Sets a value to this object. Used for hashing passwords for the user
	 * 
	 * @param string $key   the key to set
	 * @param mixed  $value the value to set
	 * 
	 * @return null
	 */
	public function __set($key, $value)
	{
		if ('password' == $key AND $value)
		{
			$this->salt = sha1(uniqid(Text::random('alnum', 32), TRUE));
			$this->iterations = 10;
			$value = Authen::instance()->hash($value, $this->salt, $this->iterations);
		}

		parent::__set($key, $value);
	}

	/**
	 * Constructor to load the object by an email address
	 * 
	 * @param mixed $id the id to load by. A numerical ID or an email address or username
	 * 
	 * @return null
	 */
	public function __construct($id = NULL)
	{
		if ( ! is_numeric($id) AND $id !== NULL)
		{
			$id = strtolower($id);
			
			// try and get a row with this ID
			$data = db::select_array(array_keys($this->_data))
				->from($this->_table_name)
				// where below searches either at email or username
				->where(self::unique_key($id), '=', $id)
				->execute($this->_db);

			// try and assign the data
			if (count($data) == 1 AND $data = $data->current())
			{
				foreach ($data as $key => $value)
				{
					$this->_data[$key] = $value;
				}
			}
			
			$this->_state = AutoModeler::STATE_LOADED;
		}
		else
		{
			parent::__construct($id);
		}
	}

	/**
	 * Does the reverse of unique_key_exists() by triggering error if username exists.
	 * Validation callback.
	 *
	 * @param Validation Validation object
	 * @param string Field name
	 * @param Model_User User object
	 * @return void
	 */
	public static function username_available(Validation $validation, $field, $model)
	{
		if ($model->unique_key_exists($validation[$field], 'username'))
		{
			$validation->error($field, 'username_available', array($validation[$field]));
		}
	}

	/**
	 * Does the reverse of unique_key_exists() by triggering error if email exists.
	 * Validation callback.
	 *
	 * @param Validation Validation object
	 * @param string Field name
	 * @param Model_User User object
	 * @return void
	 */
	public static function email_available(Validation $validation, $field, $model)
	{
		if ($model->unique_key_exists($validation[$field], 'email'))
		{
			$validation->error($field, 'email_available', array($validation[$field]));
		}
	}

	/**
	 * Tests if a unique key value exists in the database.
	 *
	 * @param mixed the value to test
	 * @param string field name
	 * @return boolean
	 */
	public function unique_key_exists($value, $field = NULL)
	{
	    // Only check if this is a new model
		if ($this->state() === AutoModeler::STATE_NEW)
		{

			if ($field === NULL)
			{
				// Automatically determine field by looking at the value
				$field = self::unique_key($value);
			}

			return (bool) db::select(array('COUNT("*")', 'total_count'))
				->from($this->_table_name)
				->where($field, '=', $value)
				->execute($this->_db)
				->get('total_count');
		}
		
		return FALSE;
	}

	/**
	 * Allows a model use both email and username as unique identifiers for login
	 *
	 * @param   string  unique value
	 * @return  string  field name
	 */
	public static function unique_key($value)
	{
		return Valid::email($value) ? 'email' : 'username';
	}
	
	/**
	 * Complete the login for a user by incrementing the logins and saving login timestamp
	 * 
	 * @return null
	 */
	public function complete_login()
	{
		if ( ! $this->loaded())
		{
			// nothing to do
			return;
		}

		// Update the number of logins
		$this->logins++;

		// Set the last login date
		$this->last_login = time();

		// Save the IP address of the client
		$this->last_ip_address = Request::$client_ip;
		
		// Save the user
		$this->save();
	}
	
	/**
	 * Wrapper method to execute ACL policies. Only returns a boolean, if you
	 * need a specific error code, look at Policy::$last_code
	 * 
	 * @param string $policy_name the policy to run
	 * @param array  $args        arguments to pass to the rule
	 *
	 * @return boolean
	 */
	public function can($policy_name, $args = array())
	{
		$status = FALSE;

		try
		{
			$refl = new ReflectionClass('Policy_' . $policy_name);
			$class = $refl->newInstanceArgs();
			$status = $class->execute($this, $args);

			if (TRUE === $status)
				return TRUE;
		}
		catch (ReflectionException $ex) // try and find a message based policy
		{
			// Try each of this user's roles to match a policy
			foreach ($this->find_related('roles') as $role)
			{
				$status = Kohana::message('policy', $policy_name.'.'.$role->id);
				if ($status)
					return TRUE;
			}
		}

		// We don't know what kind of specific error this was
		if (FALSE === $status)
		{
			$status = Policy::GENERAL_FAILURE;
		}

		Policy::$last_code = $status;

		return TRUE === $status;
	}

	/**
	 * Wrapper method for self::can() but throws an exception instead of bool
	 * 
	 * @param string $policy_name the policy to run
	 * @param array  $args        arguments to pass to the rule
	 * 
	 * @throws Policy_Exception
	 *
	 * @return null
	 */
	public function assert($policy_name, $args = array())
	{
		$status = $this->can($policy_name, $args);

		if (TRUE !== $status)
		{
			throw new Policy_Exception(
				'Could not authorize policy :policy',
				array(':policy' => $policy_name),
				Policy::$last_code
			);
		}
	}

	/**
	 * Saves the model to your database. If $data['id'] is empty, it will do a
	 * database INSERT and assign the inserted row id to $data['id'].
	 * If $data['id'] is not empty, it will do a database UPDATE.
	 *
	 * @param mixed $validation a manual validation object to combine the model properties with
	 *
	 * @return int
	 */
	public function save($validation = NULL)
	{
		$result = parent::save($validation);
		
		foreach ($this->_relations_data as $entry)
		{
			// This works on the roles relationships (coming from set_fields)
			list($method, $key, $data) = $entry;
			$related_action = $this->$method($key, $data);
		}
		
		$this->_relations_data = array();
		
		return $result;
	}

	/**
	 * Returns standard password validation for this object for use in the
	 * controller
	 * 
	 * @param array $user_post an array of user parameters
	 *
	 * @return Validate
	 */
	public static function get_password_validation($user_post)
	{
		return Validation::factory(
			array(
				'password' => Arr::get($user_post, 'password'),
				'confirm_password' => Arr::get($user_post, 'confirm_password'),
			)
		)	->rule('password', 'not_empty')
			->rule('confirm_password', 'not_empty')
			->rule('password', 'matches', array(':validation', 'password', 'confirm_password'));
	}

	/**
	 * Mass sets object properties. Never pass $_POST into this method directly.
	 * Always use something like array_intersect_key() to filter the array.
	 *
	 * @param array $data the data to set
	 * 
	 * @return null
	 *
	 */
	public function set_fields(array $data)
	{
		parent::set_fields($data);
		
		// Save any roles relation
		// Grab all roles
		$roles = Model::factory('role')->load(NULL, NULL);

		// Iterate the roles
		foreach($roles as $role)
		{
			$value = (bool) Arr::get($data, 'role_'.$role->id, FALSE);
			$belongs_to_user = $role->belongs_to('user', $this->id);
			if ($value !== $belongs_to_user)
			{
				if ($value)
				{
					// Adding
					$this->_relations_data[] = array('relate', 'roles', array($role->id));
				}
				else
				{
					// Removing
					$this->_relations_data[] = array('remove', 'role', $role->id);
				}
			}
		}
	}
}