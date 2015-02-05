<?php  ob_start(); if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User extends CI_Controller {

  public function __construct()
  {
   parent::__construct();
			// $this->load->library(array('session', 'lib_login'));


}

public function cart(){
    $data['title'] = 'My Cart';
    $this->load->view('templates/header', $data);
    $this->load->view('user/cart', $data);
    $this->load->view('templates/footer');
    $this->load->model('Model_users');
    $data['me'] = $this->Model_users->getme();
}

public function graph_Products()
{
    $this->load->model('store_model');
      $this->load->model('Model_users');
      $data['me'] = $this->Model_users->getme();

}

public function sellerdetails(){
    $this->load->helper('array'); 
    $this->load->model('Model_users');
    $this->load->model('store_model');  
    $data['me'] = $this->Model_users->getme();
    $data['seller'] = $this->store_model->seller_details();
    $data['title'] = 'My Store';
    $this->load->view('templates/sellerHeader', $data);
    $this->load->view('user/sellerdetails', $data);
}

public function submitseller(){
$this->load->model('store_model');  
$this->store_model->Add_seller_details();
}

public function myStore(){
 $this->load->model('Model_users');
 $data['me'] = $this->Model_users->getme();
 $this->load->helper('array');
 $this->load->model('store_model');	
 $data['title'] = 'My Store';
 $data['products'] = $this->store_model->get_data();
 $pname1=$this->store_model->product_name1();
$data['product1_name']=$pname1[0];

 $pname2=$this->store_model->product_name2();
$data['product2_name']=$pname2[1];

 $pname3=$this->store_model->product_name3();
$data['product3_name']=$pname3[2];

 $data['graph_data0'] = $this->store_model->graph_products1();
 $data['graph_data1'] = $this->store_model->graph_products2();
 $data['graph_data2'] = $this->store_model->graph_products3();
 $prodCount=0;
 foreach ($data['products'] as $product['product_id']) {
     $prodCount++;
             # code...
 }
 $data['product_count']=$prodCount;
 $data['product_comments'] = $this->store_model->get_product_comments();
 $comment_count=0;
 echo element('message', $data['product_comments']);
 foreach ($data['product_comments'] as $p) {
           //    implode("[",$p);
     $comment_count++;
            // echo ("Ok".$p["user_id"]);

             # code...
 }
 $data['comment_count']=$comment_count;

 $this->load->view('templates/sellerHeader', $data);
 $this->load->view('user/myStore', $data);
		//$this->load->view('templates/footer2');

        //$data('products')= $this->store_model->get_all_products();
}
public function get_views(){
    $this->load->model('store_model');  
    $data['products'] = $this->store_model->get_data();

    foreach ($data['products'] as $product) {

      $data['products'] = $this->store_model->get_product_views($product['id']);

  }
  foreach ($data['products'] as $key ) {
    echo $key['id'];
}

        $this->load->view('templates/sellerHeader', $data);
        $this->load->view('user/views', $data);

}

public function edititem(){
 $this->load->model('store_model');
 $this->store_model->Update_UserItem();
 $this->load->model('Model_users');
 $data['me'] = $this->Model_users->getme();
}

public function editUser(){
 $this->load->model('model_users');
 $this->model_users->Update_User();
 $this->load->model('Model_users');
 $data['me'] = $this->Model_users->getme();
}

public function editUserPass(){
   $this->load->library('form_validation');
   $this->form_validation->set_error_delimiters('', '');

   $this->form_validation->set_rules('NewPAss','Password','required|trim');
   $this->form_validation->set_rules('ConfirmPass','Passconfirm','required|trim|matches[NewPAss]');

   if ($this->form_validation->run()) {

     $this->load->model('model_users');
     $this->model_users->Update_UserPass();
     $this->load->model('Model_users');
     $data['me'] = $this->Model_users->getme();
 }
}

public function deleteItem(){
    $this->load->model('store_model');
    $this->store_model->delete_UserItem();
    $this->load->model('Model_users');
    $data['me'] = $this->Model_users->getme();
}

public function delete_Pic(){
    $this->load->model('store_model');
    if(isset($_POST['delete_pic'])){
      if (is_array($_POST['delete_pic'])) {
        foreach($_POST['delete_pic'] as $value){
     // echo $value.'m';
          $this->store_model->delete_Pic($value);
      }
  } else {
    $value = $_POST['delete_pic'];
    echo $value;
}
}

$this->load->model('store_model');

$data = array();

$data['title'] = 'Item View';
$data['list'] = $this->store_model->get_data();
$data['products'] = $this->store_model->get_data();
$data['product_count'] = count($data['products']);
$data['product_comments'] = $this->store_model->get_product_comments();
$data['comment_count'] = count($data['product_comments']);
$data['product_images']= $this->store_model->getProductPics();
$this->load->view('templates/sellerHeader', $data);
$this->load->view('user/itemview',$data);     
$this->load->model('Model_users');
$data['me'] = $this->Model_users->getme();   
}

function reciever(){
  //  $getme=$_POST['log_user'];
    if(!$getme){
        $getme=$this->input->post('log_user');
    }
    $this->load->model('Model_users');
    $data['me'] = $this->Model_users->insert_view($getme);  
}

public function user_data_submit() {
    $date = date('d.m.y');
    $data = array(
        'username' => $this->input->post('log_user'),
        'event_id'=>$this->input->post('log_url'),
        'date'=>$date
        );

    $id=$_POST['log_user'];
    $data['username']=$id;
    $this->load->model('Model_users');
    $returned = $this->Model_users->insert_view($data);  

//Either you can print value or you can send value to database
    echo json_encode($data);
}



function get_item_view(){
    $productId=$this->uri->segment(3);

    if($productId){
      $this->load->model('store_model');

      $data = array();
      $this->load->model('Model_users');
      $data['me'] = $this->Model_users->getme();
      $data['title'] = 'Item View';
      $data['list'] = $this->store_model->getProductbyId($productId);
      $data['products'] = $this->store_model->get_data();
      $data['product_count'] = count($data['products']);
      $data['product_comments'] = $this->store_model->get_product_comments();
      $data['comment_count'] = count($data['product_comments']);
      $data['product_images']= $this->store_model->getProductPics();
      $this->load->view('templates/sellerHeader', $data);
      $this->load->view('user/itemview',$data);

  }
  else
  {
   $this->load->model('store_model');

   $data = array();
   $this->load->model('Model_users');
   $data['me'] = $this->Model_users->getme();
   $data['title'] = 'Item View';
   $data['list'] = $this->store_model->get_data();
   $data['products'] = $this->store_model->get_data();
   $data['product_count'] = count($data['products']);
   $data['product_comments'] = $this->store_model->get_product_comments();
   $data['comment_count'] = count($data['product_comments']);
   $data['product_images']= $this->store_model->getProductPics();
   $this->load->view('templates/sellerHeader', $data);
   $this->load->view('user/itemview',$data);
}
}


function get_comments(){

 $this->load->model('store_model');

 $data = array();
 $user_id=$this->session->userdata('id');
 $data['title'] = 'Comments View';
 $data['list'] = $this->store_model->get_data();
 $data['products'] = $this->store_model->get_data();
 $data['product_count'] = count($data['products']);
 $data['product_comments'] = $this->store_model->get_product_comments();
 $data['comment_count'] = count($data['product_comments']);
 $data['product_comment_pics']= $this->store_model->getProductPics();
 $data['comment_user']= $this->store_model->get_comment_users();
 $this->load->view('templates/sellerHeader', $data);
 $this->load->view('user/commentView',$data);
 $this->load->model('Model_users');
 $data['me'] = $this->Model_users->getme();

}

function deletePic(){

}

function get_item_pics( array $product_id){

    foreach ($product_id as $product ) {
        $this->load->model('store_model');
        $id=$product['id'];
        $product_images=$this->store_model->getProductPics($id);
        $product_image_array= array();
        foreach ($product_images as $product_image) {

         $product_url='C:/xampp/htdocs/Iteration2v2/thriftIteration2/uplods/'.$product_image['pic_id'];           

           // $image_data['product_ref']= $id;
            //$image_data['product_ref']['product_url']= $product_url;
         $image_array= array($id,$product_url);
                  # code...
     }
     array_push($product_image_array,$image_array);

            # code...
 }
 return $product_image_array;
}

public function index()
{
    $this->load->model('Model_users');
    $data['me'] = $this->Model_users->getme();

    $this->login();
    $this->load->view('templates/header');
    $this->load->model('store_model');
}

public function profile()
{
   $this->load->model('Model_users');
   $data['title'] = 'Profile';
   $data['me'] = $this->Model_users->getme();

   $this->load->view('templates/header2',$data);
   $this->load->view('user/profile',$data);
   $this->load->view('templates/footer2');
}

public function login1()
{
   $fb_data = $this->lib_login->facebook();



        // check login data
   if (isset($fb_data['me'])) {
    var_dump($fb_data);

} else {
    echo '<a href="' . $fb_data['loginUrl'] . '">Login</a>';
}
}

public function login2()
{
   $data['title'] = 'FB Login';
   $data['user'] = $this->lib_login->user();
   $data['userinfo'] = $this->lib_login->facebook();

   $this->load->view('user/login',$data);
   $this->load->view('templates/header');


}

private function email_exists($email)
{
    $this->db->get_where('fbusers', array('Femail' => $email));
    $query = $this->db->get('fbusers');
    if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }
}

public function login(){

   $this->load->library('facebook'); 

   $user = $this->facebook->getUser();

   $data['title'] = 'FB Login';
   if ($user) {
    try {
     $data['user_profile'] = $this->facebook->api('/me');
     $userinfo = $this->facebook->api('/me');

 } catch (FacebookApiException $e) {
     $user = null;
 }
}else {
    $this->facebook->destroySession();
}

if ($user) {

            $data['logout_url'] = site_url('user/fblogout'); // Logs off application
            $this->load->model('FB_model');

            if ( $this->email_exists($userinfo['email']) == FALSE ) {
            	$this->FB_model->set_FBusers($userinfo);
            }

            $this->load->view('templates/header',$data);
            $this->load->view('pages/home',$data);
            // OR 
            // Logs off FB!
            // $data['logout_url'] = $this->facebook->getLogoutUrl();

        } else {
        	$data['login_url'] = $this->facebook->getLoginUrl(array(
        		'redirect_uri' => site_url('user/login'), 
                'scope' => array("email") // permissions here
                ));
        	$this->load->view('templates/header',$data);
        	$this->load->view('user/login',$data);
        }



    }

    public function fblogout(){

    	$this->load->library('facebook');

        // Logs off session from website
    	$this->session->sess_destroy();
        $this->session_start();
        // Make sure you destory website session as well.
        $this->session->set_userdata('fancy', 'You have been logged out');
        redirect('');
    }



		#Method to go to previous page


    public function login_validation()
    {
    	$this->load->library('form_validation');
    	$this->form_validation->set_error_delimiters('', '');
    	
    	$this->form_validation->set_rules('email','Email','required|trim|xss_clean|callback_validate_creditentials');
    	$this->form_validation->set_rules('password','Password','required|md5');



    	if($this->form_validation->run()){

    		$data = array(
    			'email' => $this->input->post('email'),
    			'is_logged_in'=> 1
    			);
    		$this->session->set_userdata($data);
            $this->session->set_flashdata('fancy', 'You are now logged in');
            redirect('');

        }else{
          $data['title'] = 'Login';
          $data['errors'] = validation_errors();

          $this->load->view('templates/header2',$data);
          $this->load->view('user/signup',$data);
          $this->load->view('templates/footer2');
      }




  }

  public function Forget_validation(){
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('', '');
    $this->load->view('templates/header');

    $this->form_validation->set_rules('email','Email','required|trim|valid_email');


    $this->form_validation->set_message('is_unique',"That email address already exists");
    $this->form_validation->set_message('matches',"Passwords do not match");
    $this->form_validation->set_message('required',"This field is required");

    if ($this->form_validation->run()) {

                //generate random key
        $key = md5(uniqid());



        $this->load->library('email', array('mailtype'=>'html'));
        $this->load->model('model_users');

        $newpass= $this->model_users->getpass();

        $this->email->from('support@thethriftshop.co.za',"ThriftShop");
        $this->email->to($this->input->post('email'));
        $this->email->subject("Recover Password");

        $message = "<p>Your Current Password is: </p>";
        $message .= "<p >".$newpass."</p>";

        $this->email->message($message);
            //send amd email to the user

        if ($this->email->send()){
           $this->session->set_userdata('fancy', 'Check your email for the Registration Confirmation (could be in the spam folder)');
           redirect('');
       } else echo "could not send the email";




   }else{      
    $data['title'] = 'Sign up';
    $this->session->set_userdata('fancy', 'failed');
    redirect('thriftshop');

}
}

public function signup_validation(){
 $this->load->library('form_validation');
 $this->form_validation->set_error_delimiters('', '');

 $this->form_validation->set_rules('fname','First Name','required|trim');
 $this->form_validation->set_rules('lname','Last Name','required|trim');
 $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[userprofile.email]');

 $this->form_validation->set_rules('username','Username','required|trim');
 $this->form_validation->set_rules('password','Password','required|trim');
 $this->form_validation->set_rules('passconfirm','Password Confirmation','required|trim|matches[password]');

 $this->form_validation->set_rules('cellnumber','Cellnumber','required|trim');
 $this->form_validation->set_rules('address1','Address1','required|trim'); 
 $this->form_validation->set_rules('address2','Address2','required|trim'); 
 $this->form_validation->set_rules('pcode','Postal Code','required|trim'); 


 $this->form_validation->set_message('is_unique',"That email address already exists");
 $this->form_validation->set_message('matches',"Passwords do not match");


 if ($this->form_validation->run()) {

				//generate random key
  $key = md5(uniqid());

  $this->load->library('email', array('mailtype'=>'html'));
  $this->load->model('model_users');

  $this->email->from('support@thethriftshop.co.za',"ThriftShop");
  $this->email->to($this->input->post('email'));
  $this->email->subject("Confirm your account.");

  $message = "<p>Thank you for signing up </p>";
  $message .= "<p><a href='".base_url()."index.php/"."user/register_user/$key'>Click Here</a> to confirm your account </p>";

  $this->email->message($message);
			//send amd email to the user
  if($this->model_users->add_temp_user($key)){
   if ($this->email->send()){

       $this->session->set_flashdata('fancy', 'Check your email for the Registration Confirmation (could be in the spam folder)');
       redirect('');
   } else echo "could not send the email";
}else echo "problem adding to database";



}else{		
  $data['title'] = 'Sign up';
  $data['errors'] = validation_errors();

  $this->load->view('templates/header2',$data);
  $this->load->view('user/signup',$data);
  $this->load->view('templates/footer2'); 

}
}

public function Send_Message(){
 $this->load->library('form_validation');
 $this->load->view('templates/header');
 $this->form_validation->set_rules('name','Name','required|trim|valid_email');
 $this->form_validation->set_rules('email','Email','required|trim');
 $this->form_validation->set_rules('message','Message','required');

 if ($this->form_validation->run()) {

  $this->load->library('email', array('mailtype'=>'html'));
  $this->load->model('model_users');

  $this->email->from('emirgluhbegovic@gmail.com',"ThriftShop");
  $this->email->to($this->input->post('email'));
  $this->email->subject("User Message");

  $message = "<p>Thank you for signing up </p>";
  $message .= "<p><a href='".base_url()."index.php/"."user/register_user/$key'>Click Here</a> to confirm your account </p>";

  $this->email->message($message);
			//send amd email to the user
  if($this->model_users->add_temp_user($key)){
   if ($this->email->send()){
    echo "the email has been sent!";			
} else echo "could not send the email";
}else echo "problem adding to database";



}else{		
  $this->load->view('user/signup');
}
}


public function members () {

 if($this->session->userdata('is_logged_in'))
 {
  $this->load->view('user/members');
} else {
  redirect('user/restricted');
}

$this->load->view('templates/header');
}

public function restricted() {
 $this->load->view('user/restricted');
 $this->load->view('templates/header');
}

public function signup() {
 $data['title'] = 'Signup';
 $this->load->view('templates/header2',$data);
 $this->load->view('user/signup', $data);   
 $this->load->view('templates/footer2');

}

public function validate_creditentials () {
 $this->load->model('model_users');

 if($this->model_users->can_log_in()){
  return true;
}else{
  $this->form_validation->set_message('validate_creditentials','Incorrect username/password.');
  return false;
}


}

public function logout() {


 $this->session->sess_destroy();
 $this->session->sess_create();
 $this->session->set_flashdata('fancy', 'You have been logged out');

 redirect('');

}


    
    public function createItem(){
        if($_POST):
    $this->load->model('store_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('upload');
		
		$this->form_validation->set_rules('ItemName', 'Name', 'required');
		$this->form_validation->set_rules('ItemPrice', 'Price', 'required');
	$this->form_validation->set_rules('ItemCategory', 'Category', 'required');
		$this->form_validation->set_rules('ItemDescription', 'Description', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header2', $data);
			$this->load->view('store/create',array('error' => ' ' ));			
		}
		else
		{
                $data['products'] = $this->store_model->get_data();
         $prodCount=0;
         foreach ($data['products'] as $product['product_id']) {
             $prodCount++;

 }

 $data['product_count']=$prodCount;
 $data['product_comments'] = $this->store_model->get_product_comments();

 $comment_count=0;
 echo element('message', $data['product_comments']);
 foreach ($data['product_comments'] as $p) {
           //    implode("[",$p);
     $comment_count++;
            // echo ("Ok".$p["user_id"]);

             # code...
 }
 $data['comment_count']=$comment_count;
 $data['product_id'] = '19';
 $this->load->view('templates/sellerHeader', $data);
 $product_id=	$this->store_model->set_UserItem();
 $message= $this->store_model->getProductbyId($product_id);
 foreach ($message as $notify) {
    $notify_message= $notify['name'];
              # code...
}

$data['notify_message'] =  $notify_message;
$data['product_id'] =  $product_id;


$this->load->view('user/myStore', $data);
          //addPics($product_id);

}	
return true;
endif;
}

public function addPics(){

  $this->load->model('store_model');
  $this->load->view('user/addPics');

  $data['title'] = 'AddPics';
  $data['product_id'] = '$product_id';

  $this->load->view('templates/header', $data);
  $this->load->view('user/addPics');
}

public function register_user($key) {
 $this->load->model('model_users');
 $this->load->view('templates/header');
 if ($this->model_users->is_key_valid($key)){
  if($newemail = $this->model_users->add_user($key)){
   $data = array (
    'email'=> $newemail,
    'is_logged_in' => 1
    );
   $this->session->set_userdata($data);
   redirect('user/members');
} else echo "failed to add";
} else echo "invalid key";
}

}