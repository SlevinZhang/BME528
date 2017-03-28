<?php defined('SYSPATH') or die('No direct script access.');
/**
* Image Model
*
* @package AutoModeler
* @author Jeremy Bush
* @copyright (c) 2010 Jeremy Bush
* @license http://www.opensource.org/licenses/isc-license.txt
*/
class Model_Image extends AutoModeler_ORM {

	protected $_table_name = 'images';

	protected $_data = array(
		'id' => '',
		'dcm_SOPInstanceUID' => '',
		'dcm_SOPClassUID' => '',
		'dcm_AcquisitionDatetime' => '',
		'dcm_AcquisitionTime' => '',
		'dcm_InstanceNumber' => '',
		'dcm_ImageNumber' => '',
		'dcm_NumberOfFrames' => '',
		'total_frames' => 1,
		'series_id' => '',
		'multiframe' => FALSE,
		'status' => 'ACTIVE',
	);

	protected $_rules = array(
		'dcm_SOPInstanceUID' => array(
			array('not_empty'),
		),
	);

	protected $_has_many = array(
		'frames',
	);

	protected $_belongs_to = array(
		'study',
	);
}