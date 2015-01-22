<?php ob_start();
class Store_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function deletefromwish(){
		$id = $this->input->post('theproductid');
		$this->db->where('product_id', $id);
		$this->db->delete('wishlist'); 
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

	public function get_seller($id)
	{
		$this->db->where('product.id ',$id);
		$query = $this->db->select()->from('sellers');	
		$query = $this->db->join('product', 'product.seller_id = sellers.seller_id','left');
		$this->db->group_by('sellers.seller_id');
		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_categories()
	{
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id ','left');
		$this->db->group_by('product.category');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_data(){

		$type = $this->input->post('type');


		$this->db->where('seller_id',$this->session->userdata('id'));
		$query = $this->db->select()->from('product')->get();

		return $query->result_array();
	}

	public function get_wishlist(){
		$user = $this->session->userdata('id');

		$this->db->select('*');

		$this->db->from('product a'); 
		$this->db->join('wishlist c', 'c.product_id=a.id', 'left');
		$this->db->join('product_images b', 'b.product_id=a.id', 'inner');

		$this->db->where('c.user_id',$user);
		$this->db->order_by('c.wishlist_id','desc');   
		$this->db->group_by('a.id');      
		$query = $this->db->get(); 

		if($query->num_rows() != 0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}


	}

	
	public function addWish(){

		$productid = $this->input->post('productid');
		$userid = $this->session->userdata('id');

		$data = array(
			'user_id' => $userid ,
			'product_id' => $productid 
			);

		$this->db->insert('wishlist', $data); 


	}

	public function get_product($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$this->db->order_by("id", "desc");
			$query = $this->db->get('product');			
			return $query->result_array();
		}

		$this->db->where('product.slug ',$slug);

		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
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


	function get_filterSearchHD(){
		$searchterm = $this->input->post('search-hd');
		$this->db->like('name',$searchterm);
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}


	function get_filterflats(){
		$this->db->where('category','accomodation');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterMiscellaneous(){
		$this->db->where('category','Miscellaneous');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterJobs(){
		$this->db->where('category','jobs');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterBooks(){
		$this->db->where('category','books');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterTutoring(){
		$this->db->where('category','tutoring');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterfurniture(){
		$this->db->where('category','furniture');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterSportingGoods(){
		$this->db->where('category','SportingGoods');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filterelectronics(){
		$this->db->where('category','electronics');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filtervehicles(){
		$this->db->where('category','vehicles');
		$this->db->order_by("product.id", "desc");		
		$query = $this->db->select()->from('product');	
		$query = $this->db->join('product_images', 'product.id = product_images.product_id','left');
		$this->db->group_by('product.id');
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_filtercompetitions(){
		$this->db->where('category','competitions');
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

	public function get_theproduct_comments($id){

		$this->db->where('comment.product_id ',$id);

		$this->db->order_by("comment.comment_id", "desc");		
		$query = $this->db->select()->from('comment');	
		$query = $this->db->join('userprofile', 'comment.user_id = userprofile.id','left');
		$this->db->group_by('comment.comment_id');
		$query = $this->db->get();
		return $query->result_array();



		
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
			'message'=>$data['name']
			);



		$this->session->set_userdata($newdata);
		return  $insert_id;
	}

	public function set_ProductPicture($data)
	{


//echo "HEY!!". $data['product_id'];


		$this->db->insert('product_images',$data);
		//get prod pics


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
