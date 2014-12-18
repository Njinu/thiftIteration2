<?php
class orders_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_orders()
	{
			$this->db->order_by("id", "desc");
			$query = $this->db->get('order');			
			return $query->result_array();	
	}


	public function set_orders()
	{
		$this->load->helper('url');
?>
		<?php
$cartcontents = $this->cart->contents();

$NameArray = array();
$QtyArray = array();
$pricearray = array();
$totalcost = 0;

   foreach ($cartcontents as $cart_item):

$names =  $cart_item['name'];
$qty =  $cart_item['qty'];
$price = $cart_item['price'];


// echo $cart_item['qty'] . ";";

// echo $cart_item['price'] . ";";
  $NameArray[] = $names;
  $pricearray[] = $price ;
  $QtyArray[] = $qty;
  $totalcost += $price;

    ?>

<?php endforeach ?>

 <?php


$namesep = implode(",",$NameArray);
$pricesep = implode(",",$pricearray);
$qtysep = implode(",",$QtyArray);

 echo $namesep;
 ?><br> <?php
 echo $pricesep;
 ?><br> <?php
  echo $qtysep;
     ?>
		<?php

		$data = array(
			'firstName' => $this->input->post('fname'),
			'lastName' => $this->input->post('lname'),
			'contact' => $this->input->post('cont'),
			'gender' => $this->input->post('gender'),
			'companyName' => $this->input->post('company'),
			'vatNumber' => $this->input->post('vat'),
			'postCode' => $this->input->post('post'),
			'suburb' => $this->input->post('suburb'),
			'city' => $this->input->post('city'),
			'province' => $this->input->post('prov'),
			'streetAddress' => $this->input->post('address'),
			'country' => $this->input->post('countries'),
			'email' => $this->session->userdata('email'),
			'quantity' => $qtysep,
			'product' => $namesep,
			'totalcost' => $totalcost
			

		);
	$this->cart->destroy();
		return $this->db->insert('order', $data);
	
	}

}