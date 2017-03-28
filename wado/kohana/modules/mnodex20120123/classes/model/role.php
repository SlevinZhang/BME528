<?php

/**
 * Role model
 *
 * @package   Vendo
 * @author    Jeremy Bush <contractfrombelow@gmail.com>
 * @copyright (c) 2010-2011 Jeremy Bush
 * @license   ISC License http://github.com/zombor/Vendo/raw/master/LICENSE
 */
class Model_Role extends AutoModeler_ORM
{
	protected $_relations_data = array();

	const LOGIN = 1;
	const ADMIN = 2;

	protected $_table_name = 'roles';

	protected $_data = array(
		'id' => '',
		'name' => '',
		'description' => '',
	);

	protected $_rules = array(
		'name' => array(
			array('not_empty'),
		),
	);

	protected $_belongs_to = array(
		'users',
	);
	
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
		$result = parent::save($validation = NULL);
		
		foreach ($this->_relations_data as $entry)
		{
			list($method, $key, $data) = $entry;
			$related_action = $this->$method($key, $data);
		}
		
		$this->_relations_data = array();
		
		return $result;
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
		
		// Save any user relation
		// Grab all users
		$users = Model::factory('user')->load(NULL, NULL);

		// Iterate the users
		foreach($users as $user)
		{
			$value = (bool) Arr::get($data, 'user_'.$user->id, FALSE);
			$has_role = $user->has('roles', $this->id);
			if ($value !== $has_role)
			{
				if ($value)
				{
					// Adding
					$this->_relations_data[] = array('add', 'user', array($user->id));
				}
				else
				{
					// Removing
					$this->_relations_data[] = array('remove', 'user', $user->id);
				}
			}
		}
	}
}