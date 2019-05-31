<?php

class Presensi_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
    public function data_presensi() {
        $query = $this->db->query('SELECT jadwal.no, jadwal.nim, jadwal.nama, jadwal.tanggal, jadwal.tanggal_presensi, jadwal.sesi, jadwal.jam_presensi, jadwal.keterangan FROM jadwal');
        return $query->result_array();
    }
    
    public function tambah($data) {
        return $this->db->insert('jadwal', $data);
    }
    
    public function detail_presensi($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('jadwal');
            return $query->result_array();
        }
        $query = $this->db->get_where('jadwal', array('no' =>$id));
        return $query->row_array();
    }
    
    public function edit_presensi($data) {
        $this->db->where('no', $data['no']);
        return $this->db->update('jadwal', $data);
    }
    
    public function delete_presensi($id) {
        $this->db->where('no',$id);
        return $this->db->delete('jadwal');
    }
    
}