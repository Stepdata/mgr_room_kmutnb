<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CRUD extends CI_Model {

    function _addUser($data){
        $this->db->insert('manage_user',$data);
    }

}