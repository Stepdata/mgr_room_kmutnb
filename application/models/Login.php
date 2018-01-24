<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Model {
    function __construct(){
		parent::__construct();
	}
    // Check username password
    function _checkUser($Username,$Password){
        $result =	$this->db
                    ->where('staff_username', $Username)
                    ->where('staff_password', $Password)
                    ->count_all_results('staff');
        return $result > 0 ? TRUE : FALSE;
    }
}