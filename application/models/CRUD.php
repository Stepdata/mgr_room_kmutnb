<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CRUD extends CI_Model {

    function _addUser($data){
        $this->db->insert('manage_user',$data);
    }
    function _callStatus(){
        return $this->db->get('classroom')->result();
    }
    function _callStatusBydate($date, $time){
        return $this->db
		->where('date_start >=',$date)
        ->where('time_start >=', $time)
        ->get('classroom')
        ->result();
    }
    function _userdelete($manage_user_id){
		$this->db->where('manage_user_id',$manage_user_id)->delete('manage_user');
    }
    function _callHistory(){
        $query = $this->db->get('history')->result();
        return $query;
    }
    function _callHistoryNow(){
        $query = $this->db
        ->where('date_time =',date("Y-m-d"))
        ->get('history')
        ->result();
        return $query;
    }
    function _callHistoryBy($date_start, $time_start, $time_end, $date_end){
        $query = $this->db
        ->where('date_time >=',$date_start)
        ->where('start_time >=',$time_start)
        ->where('end_time <=',$time_end)
        ->where('date_time <=',$date_end)
        ->get('history')
        ->result();
        if($query){
            return $query;
        }else{
            return false;
        }
    }
}