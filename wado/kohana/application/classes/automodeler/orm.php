<?php
/**
* AutoModelerORM
*
* @package        AutoModeler
* @author         Jeremy Bush
* @copyright      (c) 2010 Jeremy Bush
* @license        http://www.opensource.org/licenses/isc-license.txt
*/

class AutoModeler_ORM extends AutoModeler_ORM_Core
{

	/**
	 * Tests if a many to many relationship exists
	 * 
	 * Model must have a _has_many relationship with the other model, which is
	 * passed as the first parameter in singular form without the Model_ prefix.
	 * 
	 * The second parameter is the id of the related model to test the relationship of.
	 * 
	 * 	$role = new Model_Role(1);
	 * 	$role->belongs_to('user', 1);
	 *
	 * @param string $key   the model name to look for (singular)
	 * @param string $value an id to search for
	 *
	 * @return bool
	 */
	public function belongs_to($key, $value)
	{
		$related_table = AutoModeler::factory($key)->get_table_name();
		$join_table = $related_table.'_'.$this->_table_name;
		$f_key = inflector::singular($related_table).'_id';
		$this_key = inflector::singular($this->_table_name).'_id';

		if (in_array(inflector::plural($key), $this->_belongs_to))
		{
			return (bool) db::select($related_table.'.id')->
			                  from(AutoModeler::factory($key)->get_table_name())->
			                  where($join_table.'.'.$this_key, '=', $this->_data['id'])->
			                  where($join_table.'.'.$f_key, '=', $value)->
			                  join($join_table)->on($join_table.'.'.$f_key, '=', $related_table.'.id')->
			                  execute($this->_db)->count();
		}
		return FALSE;
	}

	/**
	 * Performs mass relations
	 *
	 * @param string $key    the key to set (in singular)
	 * @param array  $values an array of values to relate the model with
	 *
	 * @return none
	 */
	public function add($key, array $values)
	{
		if (in_array(inflector::plural($key), $this->_belongs_to))
		{
			$related_table = AutoModeler::factory($key)->get_table_name();
			$this_key = inflector::singular($this->_table_name).'_id';
			$f_key = inflector::singular($related_table).'_id';
			foreach ($values as $value)
				// See if this is already in the join table
				if ( ! count(db::select('*')->from($related_table.'_'.$this->_table_name)->where($f_key, '=', $value)->where($this_key, '=', $this->_data['id'])->execute($this->_db)))
				{
					// Insert
					db::insert($related_table.'_'.$this->_table_name)->columns(array($f_key, $this_key))->values(array($value, $this->_data['id']))->execute($this->_db);
				}
		}
	}

	/**
	 * Removes a has_many relationship if you aren't using innoDB (shame on you!)
	 * 
	 * Model must have a _has_many relationship with the other model, which is
	 * passed as the first parameter in plural form without the Model_ prefix.
	 * 
	 * The second parameter is the id of the related model to remove.
	 *
	 * @param string $key the model name to look for
	 * @param string $id  an id to search for
	 *
	 * @return integer
	 */
	public function remove($key, $id)
	{
		if (in_array(inflector::plural($key), $this->_belongs_to))
		{
			return db::delete(AutoModeler::factory(inflector::singular($key))->get_table_name().'_'.$this->_table_name)->where($key.'_id', '=', $id)->where(inflector::singular($this->_table_name).'_id', '=', $this->_data['id'])->execute($this->_db);
		}

		if (in_array(inflector::plural($key), $this->_has_many))
		{
			return db::delete($this->_table_name.'_'.AutoModeler::factory(inflector::singular($key))->get_table_name())->where($key.'_id', '=', $id)->where(inflector::singular($this->_table_name).'_id', '=', $this->_data['id'])->execute($this->_db);
		}
	}
	
	/**
	 * Sets values for DICOM fields obtained from a parsed $dicom object (from Nanodicom)
	 *
	 * @param Nanodicom $dicom the Nanodicom object parsed
	 *
	 * @return this
	 */
	public function set_dicom_fields($dicom)
	{
		foreach ($this->_data as $key => $value)
		{
			if (substr($key, 0, 3) == 'dcm')
			{
				$dicom_key = substr($key, 4);
				$this->{$key} = trim($dicom->{$dicom_key});
			}
		}
		
		return $this;
	}
}