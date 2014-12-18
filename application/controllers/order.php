<?php
class order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('orders_model');


		if (isset($_SERVER['HTTP_REFERER']))
		{
			$this->session->set_userdata('previous_page', $_SERVER['HTTP_REFERER']);
		}
		else
		{
			$this->session->set_userdata('previous_page', base_url());
		}
	}

public function index()
	{
		$data['order'] = $this->orders_model->get_orders();

		$data['title'] = 'Your Order';

		
		$this->load->view('templates/header', $data);
		$this->load->view('order/index', $data);
	}

public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '');
		$this->load->library('upload');

		$data['name'] = 'Create a Order';


		$this->form_validation->set_rules('fname', 'Name', 'required');
		$this->form_validation->set_rules('lname', 'Price', 'required');
		$this->form_validation->set_rules('cont', 'Contact', 'required');		
		$this->form_validation->set_rules('gender', 'Gender', 'required');

		$this->form_validation->set_rules('company', 'Company');
		$this->form_validation->set_rules('vat', 'Vat');
		$this->form_validation->set_rules('post', 'Post', 'required');
		$this->form_validation->set_rules('suburb', 'Suburb', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('prov', 'Prov', 'required');
		$this->form_validation->set_rules('countries', 'Countries', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('order/index');
		

		}
		else
		{
			$this->orders_model->set_orders();
			redirect('');
		}
	}

}