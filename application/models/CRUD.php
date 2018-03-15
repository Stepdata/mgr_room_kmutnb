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
    public function _checkUid_User($room, $uid){

        $check_status_classroom_retrun_status =$this->db->query("SELECT c.`status` FROM classroom c WHERE room =".$room)->row();
        $check_uid_retune_name = $this->db->query("SELECT name FROM manage_user WHERE card_id =".'"'.$uid.'"')->row();   
        if($check_uid_retune_name->name != ""){
            $now = unix_to_human(now('+7'),TRUE,'eu');
            if($check_status_classroom_retrun_status->status == "OFF"){
                $this->db->set('status', "ON");
                $this->db->set('date_start', date("Y-m-d"));
                // $this->db->set('time_start', date('H:i:s'));
                $this->db->set('time_start', $now);
                $this->db->set('user', $check_uid_retune_name->name);
                $this->db->where('room', $room);
                $this->db->update('classroom');

                $this->_insertHistory($check_uid_retune_name->name, $room);

                // response
                $data['statu_error'] = 0;
                $data['statu_id_pass'] = $this->getPass($uid)->password;
                $this->load->view("json/debug",$data );
            }else if($this->_check_uid_retune_name($room) == $check_uid_retune_name->name){
                $this->db->set('status', "OFF");
                $this->db->set('user', "-");
                $this->db->set('time_start');
                $this->db->set('date_start');
                $this->db->where('room', $room);
                $this->db->update('classroom');

                $this->_updateHistory($check_uid_retune_name->name, $room);

                // response
                $data['statu_error'] = 1;
                $data['statu_id_pass'] = $this->getPass($uid)->password;
                $this->load->view("json/debug",$data );
            }else{
                // response
                $data['statu_error'] = 3;
                $data['statu_id_pass'] = $this->getPass($uid)->password;
                $this->load->view("json/debug",$data );
            } // else
        } // end if
    }// end func
    
    private function _check_uid_retune_name($room){
        $query = $this->db->where("room", $room)->get("classroom")->row();
        return $query->user;
    }

    private function _insertHistory($name, $room){
        $now = unix_to_human(now('+7'),TRUE,'eu');

        $this->db->set('name_user', $name); 
        $this->db->set('date_time', date("Y-m-d")); 
        $this->db->set('start_time', $now);
        $this->db->set('room', $room); 
        $this->db->insert('history');
    }

    private function _updateHistory($name, $room){
        $now = unix_to_human(now('+7'),TRUE,'eu');
        $ids = $this->_getStartTimeOfLastInsert($name, $room);
        $this->db->set('end_time', $now);
        $this->db->where('name_user', $name);
        $this->db->where('room', $room);
        $this->db->where('history_id', $ids->history_id);
        $this->db->update('history');
    }
    private function _getStartTimeOfLastInsert($name, $room){
        return $this->db->select("history_id")
        ->where('name_user', $name)
        ->where('room', $room)
        ->limit(1)
        ->order_by('history_id',"DESC")->get("history")->row();
    }
    private function getPass($uid){
        return $this->db
        ->select('password')
        ->where('card_id',$uid)
        ->get('manage_user')->row();
    }
}