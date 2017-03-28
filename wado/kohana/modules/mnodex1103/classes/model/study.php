<?php defined('SYSPATH') or die('No direct script access.');
/**
* Study Model
*
* @package AutoModeler
* @author Jeremy Bush
* @copyright (c) 2010 Jeremy Bush
* @license http://www.opensource.org/licenses/isc-license.txt
*/
class Model_Study extends AutoModeler_ORM {

	protected $_table_name = 'studies';

	protected $_data = array(
		'id' => '',
		'dcm_PatientID' => '',
		'dcm_StudyInstanceUID' => '',
		'dcm_StudyDate' => '',
		'dcm_StudyTime' => '',
		'dcm_StudyDescription' => '',
		'dcm_ReferringPhysicianName' => '',
		'dcm_AccessionNumber' => '',
		'total_series' => 0,
		'patientID_id' => '',
	);

	protected $_rules = array(
		'dcm_StudyInstanceUID' => array(
			array('not_empty'),
		),
	);

	protected $_has_many = array(
		'series',
	);

	protected $_belongs_to = array(
		'patientID',
	);
}