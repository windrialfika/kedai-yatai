<?php

if (! defined('BASEPATH')) exit('No direct scipt access allowed');

class Jadwal extends CI_controller {
    public $model = NULL;
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('admin/jadwal_model');
    }
    
    public function index() {
        $query = $this->jadwal_model->data_jadwal();
        $data = array('title'=>'Manajemen Jadwal', 'jadwal'=>$query, 'isi'=>'admin/jadwal/jadwal_view');
        
        $this->load->view('admin/layout/wrapper', $data);
    }
    
    public function tambah() {
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $data=array('title'=>'Menambah Jadwal', 'isi'=>'admin/jadwal/tambah_jadwal');
            $this->load->view('admin/layout/wrapper',$data);
        } else {
            $data = array(
            'nim'=> $this->input->post('nim'),
            'nama'=> $this->input->post('nama'),
            'hari'=> $this->input->post('hari'),
            'tanggal'=> $this->input->post('tanggal'),
            'sesi'=>$this->input->post('sesi')
            );
            $this->jadwal_model->tambah($data);
            redirect(base_url().'admin/jadwal/');
        }
    }
    
    public function edit($id) {
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $data['jadwal'] = $this->jadwal_model->detail_jadwal();
            $data['detail'] = $this->jadwal_model->detail_jadwal($id);
            $data = array('title'=> 'Mengubah Data Jadwal : '.$data['detail']['nama'], 'jadwal'=> $this->jadwal_model->detail_jadwal(), 'detail'=> $this->jadwal_model->detail_jadwal($id), 'isi'=>'admin/jadwal/edit_jadwal');
            
            $this->load->view('admin/layout/wrapper',$data);
        
        } else {
        
            $data = array(
                'no'=> $this->input->post('no'),
                'nim'=> $this->input->post('nim'),
                'nama'=> $this->input->post('nama'),
                'hari'=> $this->input->post('hari'),
                'tanggal'=> $this->input->post('tanggal'),
                'sesi'=>$this->input->post('sesi')
                );
        
            $this->jadwal_model->edit_jadwal($data);
            redirect(base_url().'admin/jadwal/');
        }
    }
    
    public function delete($id) {
        $this->jadwal_model->delete_jadwal($id);
        redirect(base_url().'admin/jadwal/');
    }
    
}