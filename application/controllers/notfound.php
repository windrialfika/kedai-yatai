<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
    class Notfound extends CI_Controller { 
 
 public function __construct() { 
  parent::__construct();

  $this->load->model('billing_model');
  $this->load->library('cart'); 
  $this->load->helper('url'); 
 }
 
 public function index() {
  $this->load->view('notfound_view');
 }
    }
?>