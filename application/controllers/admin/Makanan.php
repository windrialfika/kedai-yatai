<?php

if (! defined('BASEPATH')) exit('No direct scipt access allowed');

class Makanan extends CI_controller {
    public $model = NULL;
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('admin/makanan_model');
    }
    
    public function index() {
        $query = $this->makanan_model->data_makanan();
        $data = array('title'=>'Manajemen Makanan', 'makanan'=>$query, 'isi'=>'admin/makanan/makanan_view');
        
        $this->load->view('admin/layout/wrapper', $data);
    }
    
    /*public function tambah() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $data=array('title'=>'Menambah Pendaftar', 'isi'=>'admin/pendaftar/tambah_pendaftar');
            $this->load->view('admin/layout/wrapper',$data);
        } else {
            $data = array(
            'nim'=> $this->input->post('nim'),
            'nama'=> $this->input->post('nama'),
            'jk'=> $this->input->post('jk'),
            'kelas'=>$this->input->post('kelas'),
            'notelp'=> $this->input->post('notelp'),
            'email'=> $this->input->post('email'),
            'tanggal'=> $this->input->post('tanggal'),
            'jam'=> $this->input->post('jam')
            );
            $this->pendaftar_model->tambah($data);
            redirect(base_url().'admin/pendaftar/');
        }
    }
    
    public function edit($id) {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $data['pendaftar'] = $this->pendaftar_model->detail_pendaftar();
            $data['detail'] = $this->pendaftar_model->detail_pendaftar($id);
            $data = array('title'=> 'Mengubah Data Pendaftar : '.$data['detail']['nama'], 'pendaftar'=> $this->pendaftar_model->detail_pendaftar(), 'detail'=> $this->pendaftar_model->detail_pendaftar($id), 'isi'=>'admin/pendaftar/edit_pendaftar');
            
            $this->load->view('admin/layout/wrapper',$data);
        
        } else {
        
            $data = array(
                'nim'=> $this->input->post('nim'),
                'nama'=> $this->input->post('nama'),
                'jk'=> $this->input->post('jk'),
                'kelas'=>$this->input->post('kelas'),
                'notelp'=> $this->input->post('notelp'),
                'email'=> $this->input->post('email'),
                'tanggal'=> $this->input->post('tanggal'),
                'jam'=> $this->input->post('jam')
            );
        
            $this->pendaftar_model->edit_pendaftar($data);
            redirect(base_url().'admin/pendaftar/');
        }
    }
    
    public function delete($id) {
        $this->pendaftar_model->delete_pendaftar($id);
        redirect(base_url().'admin/pendaftar/');
    }*/
    
}