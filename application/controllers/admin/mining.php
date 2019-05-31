<?php	

if (! defined('BASEPATH')) exit('No direct scipt access allowed');

class mining extends CI_controller {
    public $model = NULL;
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('admin/mining_model');
    }
    
    public function index() {
        $query = $this->mining_model->data_makanan();
        $data = array('title'=>'Pengelompokan Fuzzy C-Means Dari Pemesanan', 'mining'=>$query, 'isi'=>'admin/mining/mining_view');
        $this->load->view('admin/layout/wrapper', $data);
    }
    
}