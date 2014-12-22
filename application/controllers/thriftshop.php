<?php  ob_start(); if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	class thriftshop extends CI_Controller {

		public function __construct()
		{
			parent::__construct();		
			
		}

        public function index(){
        $data['title'] = 'thriftshop';
        $this->load->view('templates/header', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer');
        }
		
		 

}