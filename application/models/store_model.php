<?php ob_start();
class Store_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

		public function get_products($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$this->db->order_by("id", "desc");
			$query = $this->db->get('product');			
			return $query->result_array();
		}

		$query = $this->db->get_where('product', array('slug' => $slug));
	
		return $query->row_array();
	}

	public function get_data(){

        $type = $this->input->post('type');
 			
     	
        	$this->db->where('seller_id',$this->session->userdata('id'));
			$query = $this->db->select()->from('product')->get();

			return $query->result_array();
    }

	public function getProductbyId(){
		$productId=$this->uri->segment(3);
 		$this->db->where('product_id',$this->session->userdata('id'));
     	

	}

	public function get_product_comments(){
$this->load->helper('array');
        $type = $this->input->post('type');
 			
     	
        	$this->db->where('seller_id',$this->session->userdata('id'));
        	$query1 = $this->db->select()->from('comment')->get();
        	$prodCount=0;

			// $query = $this->db->select('date,event')->from('calendar')->like('date',"$type")->get();	
			//$query = $this->db->select()->from('product')->get();	
		
			//$this->db->from('comments');
			//$this->db->where('product_id',$this->session->userdata('id'));
			//$this->db->join('products', 'product.product_id = comments.product_id');
						//$query = $this->db->get();
			return $query1->result_array();
    }


	public function get_product_images(){
$this->load->helper('array');
        $type = $this->input->post('type');
 			
     	
        	$this->db->where('product_id',$product_id);
        	$query1 = $this->db->select()->from('product_images')->get();
        	$prodCount=0;

			// $query = $this->db->select('date,event')->from('calendar')->like('date',"$type")->get();	
			//$query = $this->db->select()->from('product')->get();	
		
			//$this->db->from('comments');
			//$this->db->where('product_id',$this->session->userdata('id'));
			//$this->db->join('products', 'product.product_id = comments.product_id');
						//$query = $this->db->get();
			return $query1->result_array();
    }

	public function get_products_ByCategory($slug = FALSE)
	{

		$category = $this->session->userdata('sort');
		if ($slug === FALSE)
		{
			$this->db->order_by("id", "desc");
			$this->db->where('category', $category); 
			$query = $this->db->get('product');			
			return $query->result_array();
		}

		$query = $this->db->get_where('product', array('slug' => $slug));
	
		return $query->row_array();
	}
	
	public function set_UserItem(){
		$this->load->helper('url');
		$date = date('d.m.y');

		$slug = url_title($this->input->post('ItemName'), 'dash', TRUE);
		$data = array(
			'name' => $this->input->post('ItemName'),
			'slug' => $slug,
			'price' => $this->input->post('ItemPrice'),
			'category' => $this->input->post('ItemCategory'),
			'description' => $this->input->post('ItemDescription'),
			'picturepath' =>$this->session->userdata('picturepath'),
			'date_created' => $date,
			'likes' => 0, 
			'seller_id' => $this->session->userdata('id'),
			'status' => "Inactive"
		

		);
		 $this->db->trans_start();
   $this->db->insert('product',$data);
   $insert_id = $this->db->insert_id();
   $this->db->trans_complete();
   // echo "Yo". $insert_id;
   return  $insert_id;
	}

	public function set_ProductPicture($data)
	{
echo "HEY!!". $data['product_id'];

		$this->db->insert('product_images',$data);
	}



	public function delete_UserItem(){
		$id = $this->input->post('type');
		$this->db->where('product_id', $id);
		$this->db->delete('product'); 
		
	}

	public function Update_UserItem(){
		$id = $this->input->post('itemid');

		$data = array(
               'name' => $this->input->post('itemname2'),
               'description' => $this->input->post('itemdescription2'),
               'price' => $this->input->post('itemprice2'),
               'status' => $this->input->post('itemstatus2'),
               'category' => $this->input->post('itemcat2')
            );

$this->db->where('product_id', $id);
$this->db->update('product', $data); 
	}

			

	public function set_products()
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('name'), 'dash', TRUE);
		$myVar = $this->session->flashdata('item');
		$data = array(
			'name' => $this->input->post('name'),
			'slug' => $slug,
			'price' => $this->input->post('price'),
			'category' => $this->input->post('category'),
			'description' => $this->input->post('description'),
			'vibe' => $this->input->post('vibe'),
			'picture' =>$this->session->userdata('picturepath'),
			'location' =>  $this->session->userdata('filename')

		);

		return $this->db->insert('product', $data);
	}

	

}
