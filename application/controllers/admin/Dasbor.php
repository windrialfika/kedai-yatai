<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dasbor extends CI_Controller {
    public function index() {
        $data = array('title'=>'WELCOME TO CONTROL PANEL', 'isi'=>'admin/dasbor/dasbor_view');
        
        $this->load->view('admin/layout/wrapper', $data);
    }
}