<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Service_genjson extends CI_Model {
    function __construct(){
		parent::__construct();
	}
    // Check username password
    function getUser(){
        $query = $this->db->get('manage_user')->result_array();
        return json_encode($query);
    }
    function getHist(){
        $query = $this->db->get('history')->result_array();
        return json_encode($query);
    }
    function getStatus(){
        $query = $this->db->get('classroom')->result_array();
        return json_encode($query);
    }
}