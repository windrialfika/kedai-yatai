<?php

if (! defined('BASEPATH')) exit('No direct scipt access allowed');

class customer extends CI_controller {
    public $model = NULL;
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('admin/customer_model');
    }

    public function index() {
        $query = $this->customer_model->data_customer();
        $data = array('title'=>'Manajemen Data Customer', 'data_customer'=>$query, 'isi'=>'admin/customer/customer_view');
        
        $this->load->view('admin/layout/wrapper', $data);
    }

    public function tambah() {
        $this->form_validation->set_rules('id_customer', 'Id Customer', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data=array('title'=>'Menambah Customer', 'isi'=>'admin/customer/tambah_customer');
            $this->load->view('admin/layout/wrapper',$data);
        } else {
            $data = array(
            'id_customer'=> $this->input->post('id_customer'),
            'nama'=> $this->input->post('nama'),
            'alamat'=> $this->input->post('alamat'),
            'no_handphone'=> $this->input->post('no_handphone'),
            );
            $this->customer_model->tambah($data);
            redirect(base_url().'admin/customer/');
        }
}
        public function edit($id) {
        $this->form_validation->set_rules('id_customer', 'id customer', 'required');
        $this->form_validation->set_rules('Nama', 'nama', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $data['data_customer'] = $this->customer_model->detail_customer();
            $data['detail'] = $this->customer_model->detail_customer($id);
            $data = array('title'=> 'Mengubah Data customer : '.$data['detail']['Nama'],'data_customer'=> $this->customer_model->detail_customer(), 'detail'=> $this->customer_model->detail_customer($id), 'isi'=>'admin/customer/edit_customer');
            
            $this->load->view('admin/layout/wrapper',$data);
        
        } else {
        
            $data = array(
            'id_customer'=> $this->input->post('id_customer'),
            'nama'=> $this->input->post('Nama'),
            'alamat'=> $this->input->post('Alamat'),
            'no_handphone'=> $this->input->post('No_Handphone'),
            );
            $this->customer_model->edit_customer($data);
            redirect(base_url().'admin/customer');
        }
    }
        public function delete($id) {
        $this->customer_model->delete_customer($id);
        redirect(base_url().'admin/customer/');
    }
    
}
