<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValidLogin extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('html','url','form','date'));
            $this->load->model('Login','model');
            $this->load->library(array('form_validation','session'));
    }
    // login from login page
    public function Login(){
            // $this->session->sess_destroy();
            $Username = $this->input->post('username'); 
            $Password = $this->input->post('password');
            $check = $this->model->_checkUser($Username, $Password);
            if($check){
                $this->session->set_userdata('Logged',TRUE);
                redirect('dashboard');
            }else{
                $this->session->set_flashdata('msg_error', 'Username หรือ Password ไม่ถูกต้อง');
                $this->load->view('login');
            }
    }
}