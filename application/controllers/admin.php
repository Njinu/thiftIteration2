<?php
class admin extends CI_Controller {

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

		if($this->session->userdata('email')!= 'melony')
		{
			 redirect(base_url()."index.php/". "user");
		}
	}


	public function index()
	{
		$data['order'] = $this->orders_model->get_orders();

		$data['title'] = 'Admin';

		
		$this->load->view('templates/header', $data);
		$this->load->view('admin/index', $data);
	}

	public function vieworders()
	{
		$data['order'] = $this->orders_model->get_orders();

		$data['title'] = 'View Orders';

		
		$this->load->view('templates/header', $data);
		$this->load->view('admin/vieworders', $data);
	}

}