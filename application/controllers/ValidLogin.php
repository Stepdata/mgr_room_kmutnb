<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValidLogin extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Login','model');
            $this->load->library(array('form_validation','session'));
    }
    // login from login page
    public function Login(){
            $Username = $this->input->post('username');
            $Password = $this->input->post('password');
            $check = $this->model->_checkUser($Username, $Password);
            if($check){
                ?><script>`
                    console.log(sadasd);
                </script><?php
                $data = array(
                    'username' => $Username,
                    'Logged' => TRUE,
                );
                $this->session->set_userdata($data);
                redirect('welcome');
            }else{
                $this->session->set_flashdata('msg_error', 'E-mail หรือ Password ไม่ถูกต้อง');
                $this->load->view('login');
                
            }
    }   
}