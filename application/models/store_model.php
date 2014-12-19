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
			'picturePath' =>$this->session->userdata('picturepath'),
			'date_created' => $date,
			'likes' => 0, 
			'seller_id' => $this->session->userdata('id'),
			'status' => "Inactive"
		

		);

		return $this->db->insert('product', $data);
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
