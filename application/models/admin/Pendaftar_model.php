<?php

class Pendaftar_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
    public function data_pendaftar() {
        $query = $this->db->query('SELECT pendaftar.nama, pendaftar.nim, pendaftar.jk, pendaftar.kelas, pendaftar.tanggal, pendaftar.jam FROM pendaftar ORDER BY nama');
        return $query->result_array();
    }
    
    public function tambah($data) {
        return $this->db->insert('pendaftar', $data);
    }
    
    public function detail_pendaftar($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('pendaftar');
            return $query->result_array();
        }
        $query = $this->db->get_where('pendaftar', array('nim' =>$id));
        return $query->row_array();
    }
    
    public function edit_pendaftar($data) {
        $this->db->where('nim', $data['nim']);
        return $this->db->update('pendaftar', $data);
    }
    
    public function delete_pendaftar($id) {
        $this->db->where('nim',$id);
        return $this->db->delete('pendaftar');
    }
    
}