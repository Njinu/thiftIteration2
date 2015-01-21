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

	public function get_product($slug = FALSE)
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

	public function get_filters(){


		$max = $this->input->post('maxVal');
		$min = $this->input->post('minVal');
		$this->db->where('product.price >=',$min);
		$this->db->where('product.price <=',$max);
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		 $this->db->group_by('product.id');
		 $query = $this->db->get();
		return $query->result_array();

	}

	public function get_filters2(){


		$max = $this->input->post('maxValue');
		$min = $this->input->post('minValue');
		$this->db->where('product.price >=',$min);
		$this->db->where('product.price <=',$max);
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		 $this->db->group_by('product.id');
		 $query = $this->db->get();
		return $query->result_array();

	}


	public function get_filters3(){


		
		$this->db->order_by("product.price", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		 $this->db->group_by('product.id');
		 $query = $this->db->get();
		return $query->result_array();

	}

	public function get_filters4(){


		
		$this->db->order_by("product.price", "asc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		 $this->db->group_by('product.id');
		 $query = $this->db->get();
		return $query->result_array();

	}

	public function get_filters5(){


		
		$this->db->order_by("product.name", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		 $this->db->group_by('product.id');
		 $query = $this->db->get();
		return $query->result_array();

	}

	public function get_filters6(){


		
		$this->db->order_by("product.name", "asc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		 $this->db->group_by('product.id');
		 $query = $this->db->get();
		return $query->result_array();

	}

	public function get_filters7(){
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		 $this->db->group_by('product.id');
		 $query = $this->db->get();
		return $query->result_array();
	}

	function get_filtersLatest(){

		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		 $this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	public function getProductbyId($product_id){
		//$productId=$this->uri->segment(3);
		$this->db->where('id',$product_id);
		$query = $this->db->select()->from('product')->get();
		return $query->result_array();

	}

	public function getProductPics(){

		$this->db->where('seller_id',$this->session->userdata('id'));
		$query = $this->db->select()->from('product_images')->get();

		return $query->result_array();     	

	}
	public function getProductPic($product_id){

		$this->db->where('id',$product_id);
		$query = $this->db->select()->from('product_images')->get();

		return $query->result_array();

	}

	public function get_product_comments(){
		$this->load->helper('array');
		$type = $this->input->post('type');
		$this->db->where('seller_id',$this->session->userdata('id'));
		$query1 = $this->db->select()->from('comment')->get();
		return $query1->result_array();
	}


	public function get_comment_users()
	{
		$this->load->helper('array');

		$query1 = $this->db->select()->from('userprofile')->get();


		return  $query1->result_array();
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
$Name=$this->input->post('ItemName');
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


$this->session->set_flashdata('fancy', 'Successfully created');

$notify_message = array(
                   'message'  => $data['name'],
                   
               );

$this->session->set_userdata($newdata);

$data['notify_message'] =array(
'message'=>$data['name'] +'succesfully created.'

	);



$this->session->set_userdata($newdata);
   return  $insert_id;
}

public function insert_view($data){
	$id=$_POST['anonymousId'];
	


		$this->db->trans_start();
		$this->db->insert('viewtest',$data);
		$insert_id = $this->db->insert_id();
		$this->db->trans_complete();


}
	public function set_ProductPicture($data)
	{

		$this->db->insert('product_images',$data);

        	$this->db->where('product_id',$data['product_id']);
        	$query1 = $this->db->select()->from('product_images')->get();
        	return $query1->result_array();


	}



	public function delete_UserItem(){
		$id = $this->input->post('type');
		$this->db->where('product_id', $id);
		$this->db->delete('product'); 
		
	}


	public function delete_Pic($img_id){
		$this->db->where('id', $img_id);
		$this->db->delete('product_images'); 
		
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

$this->db->where('id', $id);
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
