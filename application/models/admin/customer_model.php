<?php

class customer_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
    public function data_customer() {
    $query = $this->db->query('SELECT data_customer.id_customer, data_customer.Nama, data_customer.Alamat, data_customer.No_Handphone FROM data_customer ORDER BY  id_customer');
        return $query->result_array();
    }
    
    public function tambah($data) {
        return $this->db->insert('data_customer', $data);
    }
    
    public function detail_customer($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('data_customer');
            return $query->result_array();
        }
        $query = $this->db->get_where('data_customer', array('id_customer' =>$id));
        return $query->row_array();
    }
    
    public function edit_customer($data) {
        $this->db->where('id_customer', $data['id_customer']);
        return $this->db->update('data_customer', $data);
    }
    
    public function delete_customer($id) {
        $this->db->where('id_customer',$id);
        return $this->db->delete('data_customer');
    }
    
}
