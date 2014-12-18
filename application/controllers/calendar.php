<?php
class calendar extends CI_Controller {

	function index($year = null, $month = null){
		$this->showcal($year,$month);
	}


	function showcal($year = null, $month = null){

		
		$this->session->set_userdata('item', $year);

		if($this->input->post('month') != "")
		{
			$month = $this->input->post('month');
			
		}

		$this->load->model('calendar_model');
		$data['title'] = 'My Calendar';
		$data['calendar'] = $this->calendar_model->generate_calendar($year,$month);
		$data['years'] = $this->calendar_model->geteventyears();
		$data['months'] = $this->calendar_model->geteventmonths($year);
		$this->load->view('templates/header',$data);
		$this->load->view('calendar/index',$data);
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('calendar_model');
		
		$data['title'] = 'Create Calendar Event';

		$this->form_validation->set_rules('date', 'date', 'required');
		$this->form_validation->set_rules('event', 'event', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('calendar/create',array('error' => ' ' ));
			

		}
		else
		{
			$this->calendar_model->set_calendarEvent();
			$this->load->view('news/success');
		}
	}
	
}

