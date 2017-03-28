<?php defined('SYSPATH') or die('No direct script access.');
/**
* Frame Model
*
* @package AutoModeler
* @author Jeremy Bush
* @copyright (c) 2010 Jeremy Bush
* @license http://www.opensource.org/licenses/isc-license.txt
*/
class Model_Frame extends AutoModeler_ORM {

	protected $_table_name = 'frames';

	protected $_data = array(
		'id' => '',
		'dcm_Rows' => '',
		'dcm_Columns' => '',
		'smallest_image_pixel_value' => '',
		'largest_image_pixel_value' => '',
		'image_id' => '',
		'status' => 'ACTIVE',
	);

	protected $_rules = array(
	);

	protected $_belongs_to = array(
		'image',
	);
}