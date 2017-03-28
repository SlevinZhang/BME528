<?php defined('SYSPATH') or die('No direct script access.');
/**
* Patient Model
*
* @package AutoModeler
* @author Jeremy Bush
* @copyright (c) 2010 Jeremy Bush
* @license http://www.opensource.org/licenses/isc-license.txt
*/
class Model_Patient extends AutoModeler_ORM {

	protected $_table_name = 'patients';

	protected $_data = array(
		'id' => '',
		'name' => '',
		'first_name' => '',
		'last_name' => '',
		'birth_date' => '',
		'gender' => '',
	);

	protected $_rules = array(
		'name' => array(
			array('not_empty'),
		),
	);

	protected $_has_many = array(
		'patientIDs',
	);

}