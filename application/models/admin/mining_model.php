<?php

class mining_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
    public function data_makanan() {
        $query = $this->db->query('SELECT order_detail.orderid, order_detail.id_menu, daftar_menu.nama_menu, order_detail.quantity, order_detail.price, orders.date 
		FROM order_detail order_detail INNER JOIN 
		orders orders ON orders.id = order_detail.orderid INNER JOIN 
		daftar_menu daftar_menu ON order_detail.id_menu = daftar_menu.id_menu ORDER BY orderid');
        return $query->result_array();
    }
    
    public function tambah($data) {
        return $this->db->insert('daftar_menu', $data);
    }
    
    public function detail_makanan($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('daftar_menu');
            return $query->result_array();
        }
        $query = $this->db->get_where('daftar_menu', array('id_menu' =>$id));
        return $query->row_array();
    }
    
    public function edit_makanan($data) {
        $this->db->where('id_menu', $data['id_menu']);
        return $this->db->update('daftar_menu', $data);
    }
    
    public function delete_makanan($id) {
        $this->db->where('id_menu',$id);
        return $this->db->delete('daftar_menu');
    }
    
}