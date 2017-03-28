<?php defined('SYSPATH') or die('No direct script access.');
/**
* Study Model
*
* @package AutoModeler
* @author Jeremy Bush
* @copyright (c) 2010 Jeremy Bush
* @license http://www.opensource.org/licenses/isc-license.txt
*/
class Model_Series extends AutoModeler_ORM {

	protected $_table_name = 'series';

	protected $_data = array(
		'id' => '',
		'dcm_SeriesInstanceUID' => '',
		'dcm_SeriesDate' => '',
		'dcm_SeriesTime' => '',
		'dcm_SeriesDescription' => '',
		'dcm_Modality' => '',
		'total_images' => 0,
		'study_id' => '',
		'status' => 'ACTIVE',
	);

	protected $_rules = array(
		'dcm_SeriesInstanceUID' => array(
			array('not_empty'),
		),
	);

	protected $_has_many = array(
		'images',
	);

	protected $_belongs_to = array(
		'study',
	);
}