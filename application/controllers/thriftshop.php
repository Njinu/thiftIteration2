<?php  ob_start(); if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class thriftshop extends CI_Controller {

      public function __construct()
      {
             parent::__construct();		

     }

     public function index(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filtersLatest();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function wishlist(){
        $data['title'] = 'wishlist';
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/wishlist', $data);
        $this->load->view('templates/footer2');
}

public function shop(){
        $data['title'] = 'filter';
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/shop', $data);
        $this->load->view('templates/footer2');
}

public function support(){
        $data['title'] = 'support';
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/support', $data);
        $this->load->view('templates/footer2');
}

public function get_filteredpage(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters();
 $this->load->view('thriftshop/filteredpage',$data);
}



}