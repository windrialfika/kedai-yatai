<?php

class Panitia_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
    public function data_panitia() {
        $query = $this->db->query('SELECT panitia.nim, panitia.nama, panitia.kelas, panitia.notelp, panitia.jabatan FROM panitia ORDER BY nama');
        return $query->result_array();
    }
    
    public function tambah($data) {
        return $this->db->insert('panitia', $data);
    }
    
    public function detail_panitia($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('panitia');
            return $query->result_array();
        }
        $query = $this->db->get_where('panitia', array('nim' =>$id));
        return $query->row_array();
    }
    
    public function edit_panitia($data) {
        $this->db->where('nim', $data['nim']);
        return $this->db->update('panitia', $data);
    }
    
    public function delete_panitia($id) {
        $this->db->where('nim',$id);
        return $this->db->delete('panitia');
    }
    
}