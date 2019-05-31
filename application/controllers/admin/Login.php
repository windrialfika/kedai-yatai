<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    //index login
    public function index() {
        // Fungsi Login
        $valid = $this->form_validation;
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $valid->set_rules('username', 'Username', 'required');
        $valid->set_rules('password', 'Password', 'required');

        if($valid->run()) {
            $this->simple_login->login($username,$password,base_url('admin/dasbor'), base_url('admin/login'));
        }
        // End fungsi login
        
        $data = array('title'=>'Administrator Page');
        $this->load->view('admin/login_view', $data);
    }
    
    //logout
    public function logout() {
        $this->simple_login->logout();
    }
}