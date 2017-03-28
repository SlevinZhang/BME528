<?php defined('SYSPATH') or die('No direct script access.');
/**
* PatientID Model
*
* @package AutoModeler
* @author Jeremy Bush
* @copyright (c) 2010 Jeremy Bush
* @license http://www.opensource.org/licenses/isc-license.txt
*/
class Model_PatientID extends AutoModeler_ORM {

	protected $_table_name = 'patientIDs';

	protected $_data = array(
		'id' => '',
		'patient_id' => '',
		'dcm_PatientID' => '',
		'dcm_PatientName' => '',
		'dcm_PatientBirthDate' => '',
		'dcm_PatientSex' => '',
		'dcm_InstitutionName' => '',
		'status' => 'ACTIVE',
	);

	protected $_rules = array(
		'patient_id' => array(
			array('not_empty'),
		),
	);

	protected $_belongs_to = array(
		'patient',
	);

	/**
	 * Constructor to load the object by a patient id
	 * 
	 * @param mixed $id the id to load by or the patientID
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
				// where below by PatientID
				->where('dcm_PatientID', '=', $id)
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
}