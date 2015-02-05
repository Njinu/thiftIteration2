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
 $this->session->set_userdata('categorytype', '');
        $data['filterslatest'] = $this->store_model->get_filtersLatest();
        $data['maxprice'] = $this->store_model->get_pricemax();
        $data['minprice'] = $this->store_model->get_pricemin();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

 public function indexFlat(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
         $this->session->set_userdata('categorytype', 'Accomodation');
        $data['filterslatest'] = $this->store_model->get_filterflats();
         $data['maxprice'] = $this->store_model->get_pricemax();
        $data['minprice'] = $this->store_model->get_pricemin();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indexFurn(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
         $this->session->set_userdata('categorytype', 'Furniture');
        $data['filterslatest'] = $this->store_model->get_filterfurniture();
         $data['maxprice'] = $this->store_model->get_pricemax();
        $data['minprice'] = $this->store_model->get_pricemin();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}
public function indexVeh(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
         $this->session->set_userdata('categorytype', 'Vehicles');
        $data['filterslatest'] = $this->store_model->get_filtervehicles();
         $data['maxprice'] = $this->store_model->get_pricemax();
        $data['minprice'] = $this->store_model->get_pricemin();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indexEle(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
         $this->session->set_userdata('categorytype', 'Electronics');
        $data['filterslatest'] = $this->store_model->get_filterelectronics();
         $data['maxprice'] = $this->store_model->get_pricemax();
        $data['minprice'] = $this->store_model->get_pricemin();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}
public function indexSG(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
         $this->session->set_userdata('categorytype', 'Sporting-Goods');
        $data['filterslatest'] = $this->store_model->get_filterSportingGoods();
         $data['maxprice'] = $this->store_model->get_pricemax();
        $data['minprice'] = $this->store_model->get_pricemin();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indexjobs(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
         $this->session->set_userdata('categorytype', 'Jobs');
        $data['filterslatest'] = $this->store_model->get_filterJobs();
         $data['maxprice'] = $this->store_model->get_pricemax();
        $data['minprice'] = $this->store_model->get_pricemin();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indextutors(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
         $this->session->set_userdata('categorytype', 'Tutotoring');
        $data['filterslatest'] = $this->store_model->get_filterTutoring();
         $data['maxprice'] = $this->store_model->get_pricemax();
        $data['minprice'] = $this->store_model->get_pricemin();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indexbooks(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
         $this->session->set_userdata('categorytype', 'Books');
        $data['filterslatest'] = $this->store_model->get_filterBooks();
         $data['maxprice'] = $this->store_model->get_pricemax();
        $data['minprice'] = $this->store_model->get_pricemin();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indexMis(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $this->session->set_userdata('categorytype', 'Miscellaneous');
        $data['filterslatest'] = $this->store_model->get_filterMiscellaneous();
         $data['maxprice'] = $this->store_model->get_pricemax();
        $data['minprice'] = $this->store_model->get_pricemin();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function indexComp(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
         $this->session->set_userdata('categorytype', 'Competitions');
        $data['filterslatest'] = $this->store_model->get_filtercompetitions();
         $data['maxprice'] = $this->store_model->get_pricemax();
        $data['minprice'] = $this->store_model->get_pricemin();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
        $this->load->view('templates/footer2');
}

public function deletefromwish(){
  $this->store_model->deletefromwish();
  redirect('thriftshop/wishlist');
}

public function wishlist(){
$user = $this->session->userdata('id');
if( $user == null) {
redirect('user/signup');
} else{

        $data['title'] = 'wishlist';
        $data['wishlist'] = $this->store_model->get_wishlist();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/wishlist', $data);
        $this->load->view('templates/footer2');
      }
}

public function singleview(){
        $data['title'] = 'Item view';
       $data['test'] = $this->store_model->getratedlist('test2');
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/singleview', $data);
        $this->load->view('templates/footer2');
}

public function view($slug,$id)
  {
    $data['filter'] = $this->store_model->get_product($slug);
    $data['comments'] = $this->store_model->get_theproduct_comments($id);
       $data['seller'] = $this->store_model->get_seller($id);
 $data['test'] = $this->store_model->getratedlist('test2');
      $this->load->helper('form');
      $this->load->library('form_validation');

    if (empty($data['filter']))
    {
      show_404();
    }

    $data['title'] = 'Item';
    $this->form_validation->set_rules('rating', 'Rating', 'required|greater_than[0]');

    if($this->form_validation->run() === FALSE)
    {
    $this->load->view('templates/header2', $data);
    $this->load->view('thriftshop/singleview', $data);
    $this->load->view('templates/footer2', $data);
    
    }
    else
    {
      
     
      $this->session->set_flashdata('feedback', $addeditem . "Thank you for rating!");
      // $this->load->view('templates/header');
      $name = $slug;
      $add = "thriftshop/".$name; 
      // $this->load->view('store/success');
      redirect(base_url()."index.php/". $add);
    }
    
    
    
  }

  public function likeup(){
      $this->load->model('store_model');
      $this->store_model->likeup();
     redirect('');
  }

  public function dislikedown(){
      $this->load->model('store_model');
      $this->store_model->dislikedown();
    
  }

public function get_LocFilter(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
        $data['filterslatest'] = $this->store_model->get_filtersLoc();
        $data['maxprice'] = $this->store_model->get_pricemax();
        $data['minprice'] = $this->store_model->get_pricemin();
        $this->load->view('thriftshop/locFilter', $data);
     
}
 

  public function ShopSearch(){
        $data['title'] = 'thriftshop';
        $this->load->model('store_model');
         $data['maxprice'] = $this->store_model->get_pricemax();
        $data['minprice'] = $this->store_model->get_pricemin();
        $data['filterslatest'] = $this->store_model->get_filterSearchHD();
        $this->load->view('templates/header2', $data);
        $this->load->view('thriftshop/index', $data);
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

public function Add_toWishlist(){

$this->load->model('store_model');
$data = array();
$this->store_model->addWish();
$this->session->set_userdata('fancy', 'item has been added to your wishlist');
redirect('thriftshop');


}



}