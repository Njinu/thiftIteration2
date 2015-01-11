<?php  ob_start(); if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class thriftshop extends CI_Controller {

      public function __construct()
      {
             parent::__construct();		
              $this->load->database();
              $this->load->model('store_model');
              $this->load->helper('url');

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

public function singleview(){
        $data['title'] = 'Item view';
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/singleview', $data);
        $this->load->view('templates/footer2');
}

public function view($slug)
  {
    $data['filter'] = $this->store_model->get_product($slug);

      $this->load->helper('form');
      $this->load->library('form_validation');

    if (empty($data['filter']))
    {
      show_404();
    }

    $data['title'] = $data['filter']['title'];
    

    
    $this->load->view('templates/header2', $data);
    $this->load->view('thriftshop/singleview', $data);
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

public function get_filteredpage2(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters2();
 $this->load->view('thriftshop/filteredpage',$data);
}

public function get_filteredpage3(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters3();
 $this->load->view('thriftshop/filteredpage',$data);
}

public function get_filteredpage4(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters4();
 $this->load->view('thriftshop/filteredpage',$data);
}

public function get_filteredpage5(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters5();
 $this->load->view('thriftshop/filteredpage',$data);
}

public function get_filteredpage6(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters6();
 $this->load->view('thriftshop/filteredpage',$data);
}

public function get_filteredpage7(){
 $this->load->model('store_model');
 $data = array();
 $data['title'] = 'Lorem ipsum';
 $data['list'] = $this->store_model->get_filters7();
 $this->load->view('thriftshop/filteredpage',$data);
}



}