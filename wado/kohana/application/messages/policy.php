<?php defined('SYSPATH') or die('No direct script access.');
//
return array(
	'delete_study' => array(
        Model_Role::LOGIN => FALSE,
        Model_Role::ADMIN => TRUE,
    ),
);