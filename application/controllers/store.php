<?php 
class Store extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('store_model');
		$this->load->helper(array('form', 'url'));



 if (isset($_SERVER['HTTP_REFERER']))
 {
 $this->session->set_userdata('previous_page', $_SERVER['HTTP_REFERER']);
 }
 else
 {
 $this->session->set_userdata('previous_page', base_url());
 }
	}

public function product()

    {
    	$this->load->library('grocery_CRUD'); 
    	 $crud = new grocery_CRUD();
    	$crud->set_table('product');
        $crud->columns('name','price','category','vibe');
        $crud->fields('name','price','category','vibe');

        $output = $crud->render();
       $this->load->view('store/crudform',$output);  

    }
    
   


	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$newdata = array(
                   'sort'  =>   $this->input->post('cat')            
               );

			$this->session->set_userdata($newdata);

			$category = $this->session->userdata('sort');
			if($category != "")
			{
				$data['product'] = $this->store_model->get_products();
				$data['product2'] = $this->store_model->get_products_ByCategory();
				$data['title'] = 'LE Store';
				$this->load->view('templates/header', $data);
				$this->load->view('store/index', $data);
				$this->load->view('templates/footer', $data);
			}
			else{

		$data['product2'] = $this->store_model->get_products();
		$data['product'] = $this->store_model->get_products();

		$data['title'] = 'LE Store';


		$this->load->view('templates/header', $data);
		$this->load->view('store/index', $data);
		$this->load->view('templates/footer', $data);
	}
	}

	// public function sort()
	// {
	// 	$this->load->helper('form');
	// 	$this->load->library('form_validation');

	// 	$newdata = array(
 //                   'sort'  =>   $this->input->post('cat')            
 //               );

	// 		$this->session->set_userdata($newdata);

		

	// 	$this->form_validation->set_rules('cat', 'Cat', 'required');
		
	// 	if ($this->form_validation->run() === FALSE)
	// 	{
	// 		$this->load->view('templates/header', $data);
	// 		$this->load->view('store/index');
	// 	}
	// 	else
	// 	{
	// 	$data['product'] = $this->store_model->get_products_ByCategory();

	// 	$data['title'] = 'LE Store';
	// 		$this->load->view('templates/header', $data);
	// 	$this->load->view('store/index', $data);
	// 	$this->load->view('templates/footer', $data);
	// 	}


		
	// }

	#Method to go to previous page


	public function singleproduct()
	{
		$data['product'] = $this->store_model->get_products();

		$data['title'] = 'Single Product';


		$this->load->view('templates/header', $data);
		$this->load->view('store/singleproduct', $data);
		
	}

	public function viewcart()
	{
		$data['product'] = $this->store_model->get_products();

		$data['title'] = 'Your Cart';


		$this->load->view('templates/header', $data);
		$this->load->view('store/viewcart', $data);
		
	}


public function order()
	{
		$data['product'] = $this->store_model->get_products();

		$data['title'] = 'Your Order';

		
		$this->load->view('templates/header', $data);
		$this->load->view('store/order', $data);
		
	}

	public function carousel()
	{
		$data['product'] = $this->store_model->get_products();

		$data['title'] = 'Carousel';


		$this->load->view('templates/header', $data);
		$this->load->view('store/carousel', $data);
		
	}

public function additem(){
		$data=array();
		$checkup =$this->session->userdata('email');
	if($checkup == ""){
		$this->session->set_flashdata('feedback', 'You have to be logged in to use the shopping cart feature');
      redirect(base_url()."index.php/". "user");
    }else{
	$data = array(
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'id' => $this->input->post('id'),
			'qty' => $this->input->post('quantity')
		);
}

	return $this->cart->insert($data);
}



	public function createItem(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('upload');
		
		$this->form_validation->set_rules('ItemName', 'Name', 'required');
		$this->form_validation->set_rules('ItemPrice', 'Price', 'required');
		$this->form_validation->set_rules('ItemCategory', 'Category', 'required');
		$this->form_validation->set_rules('ItemDescription', 'Description', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('store/create',array('error' => ' ' ));			
		}
		else
		{		
			$this->store_model->set_UserItem();
			$this->load->view('store/success');
		}	
	}

	

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('upload');

		$data['title'] = 'Create a Product';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('vibe', 'Vibe', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('store/create',array('error' => ' ' ));
			

		}
		else
		{
			
			$this->store_model->set_products();
			$this->load->view('store/success');
		}
	}

}