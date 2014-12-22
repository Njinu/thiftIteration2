<?php
class Cart extends CI_Controller {

function index() {


    $data['title'] = 'Your Cart';


    $this->load->view('templates/header', $data);
	 $this->load->helper('form');
	 $this->load->view('user/cart');
	
}

function update() {
	$this->cart->update($_POST);
	redirect(base_url()."index.php/"."cart");
}

function add_variables(){
	$data = array(
               array(
                       'id'      => 'sku_123ABC',
                       'qty'     => 1,
                       'price'   => 39.95,
                       'name'    => 'T-Shirt',
                       'options' => array('Size' => 'L', 'Color' => 'Red')
                    ),
               array(
                       'id'      => 'sku_567ZYX',
                       'qty'     => 1,
                       'price'   => 9.95,
                       'name'    => 'Coffee Mug'
                    ),
               array(
                       'id'      => 'sku_965QRS',
                       'qty'     => 1,
                       'price'   => 29.95,
                       'name'    => 'Shot Glass'
                    )
            );

$this->cart->insert($data);
}

}