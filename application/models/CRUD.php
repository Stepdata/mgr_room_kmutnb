<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CRUD extends CI_Model {

    function _addUser($data){
        $this->db->insert('manage_user',$data);
    }

    function _userdelete($manage_user_id){
		$this->db->where('manage_user_id',$manage_user_id)->delete('manage_user');
    }

}