<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('billing_model');
                $this->load->library('cart');
	}

	public function index()
	{	
                //Get all data from database
		$data['products'] = $this->billing_model->get_all();
                //send all product data to "menu_view", which fetch from database.		
		$this->load->view('menu', $data);
	}
	
	
	 function add()
	{
              // Set array for send data.
		$insert_data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => 1
		);		

                 // This function add items into cart.
		$this->cart->insert($insert_data);
	      
                // This will show insert data in cart.
		redirect('menu');
	     }
	
		function remove($rowid) {
                    // Check rowid value.
		if ($rowid==="all"){
                       // Destroy data which store in  session.
			$this->cart->destroy();
		}else{
                    // Destroy selected rowid in session.
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
                     // Update cart data, after cancle.
			$this->cart->update($data);
		}
		
                 // This will show cancle data in cart.
		redirect('menu/pemesanan');
	}
	
	    function update_cart(){
                
                // Recieve post values,calcute them and update
                $cart_info =  $_POST['cart'] ;
 		foreach( $cart_info as $id => $cart)
		{			$grand_total = $total;
                    $rowid = $cart['rowid'];
                    $price = $cart['price'];
                    $amount = $price * $cart['qty'];
                    $qty = $cart['qty'];
                    
                    	$data = array(
				'rowid'   => $rowid,
                                'price'   => $price,
                                'amount' =>  $amount,
				'qty'     => $qty
			);
             
			$this->cart->update($data);
		}
		redirect('menu/pemesanan');        
	}	
		function pemesanan(){
                // Load "pemesanan".
		$this->load->view('pemesanan');
        }

        function informasi(){
                // Load "pemesanan".
		$this->load->view('informasi');
        }
        
        	public function berhasil()
	{
          // This will store all values which inserted  from user.
		$customer = array(
			'Nama' 		=> $this->input->post('Nama'),
			'Alamat' 	=> $this->input->post('Alamat'),
			'No_Handphone' 	=> $this->input->post('No_Handphone')
		);		
                 // And store user imformation in database.
		$cust_id = $this->billing_model->insert_customer($customer);

		$order = array(
			'date' 			=> date('Y-m-d H:i:s',time()),
			'id_customer' 	=> $cust_id,
		);		

		$ord_id = $this->billing_model->insert_order($order);
		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'orderid' 		=> $ord_id,
					'id_menu' 	=> $item['id'],
					'quantity' 	=> $item['qty'],
					'price' 	=> $item['price'],
					'sub_total' => $item['subtotal']
				);		

                            // Insert product imformation with order detail, store in cart also store in database. 
                
		         $cust_id = $this->billing_model->insert_order_detail($order_detail);
			endforeach;
		endif;
	      
                // After storing all imformation in database load "berhasil".
                $this->load->view('berhasil');
	}
}