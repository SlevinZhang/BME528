<?php defined('SYSPATH') or die('No direct script access.');
//
// application/classes/policy/edit/page.php
//
class Policy_Edit_Pages extends Policy {

    public function execute(Model_ACL_User $user, array $array = NULL)
    {
        // Do whatevere needed to find out if the current user
        // is allowed to edit the page...
        // Desicions can be made based on
        // - user roles
        // - user id
        // - data passed from the controller as $array parameter to this method...
        //
        // Return TRUE if user is allowed to do whatever asked for, FALSE if not...
        // 
        // if ($user->id == 1) 
        // {
        //        return TRUE;
        // }
        // else
        // {
              return FALSE;
        // };
    }   
}