<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');

class Simple_login {
    // SET SUPER GLOBAL
    var $CI = NULL;
    public function __construct() {
    $this->CI =& get_instance();
}

// Fungsi login
public function login($username, $password) {
    $query = $this->CI->db->get_where('admin', array('username'=>$username,'password'=>md5($password)));
    if($query->num_rows() == 1) {
        $row = $this->CI->db->query('SELECT uid FROM admin where username = "'.$username.'"');
        $admin = $row->row();
        $id = $admin->uid;
        $this->CI->session->set_userdata('username', $username);
        $this->CI->session->set_userdata('id_login', uniqid(rand()));
        $this->CI->session->set_userdata('id', $id);
        redirect(base_url('admin/dasbor'));
    }else{
        $this->CI->session->set_flashdata('sukses','Username / Password tidak cocok');
        redirect(base_url('admin/login'));
    }
    return false;
}

// Proteksi halaman
public function cek_login() {
    if($this->CI->session->userdata('username') == '') {
        $this->CI->session->set_flashdata('sukses','Anda belum login. Silahkan login terlebih dahulu');
        redirect(base_url('admin/login'));
    }
}

// Fungsi logout
public function logout() {
    $this->CI->session->unset_userdata('username');
    $this->CI->session->unset_userdata('id_login');
    $this->CI->session->unset_userdata('id');
    $this->CI->session->set_flashdata('sukses','Anda telah logout.');
    redirect(base_url('admin/login'));
    }
}