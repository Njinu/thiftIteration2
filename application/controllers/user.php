<?php  ob_start(); if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	class User extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->library(array('session', 'lib_login'));
			
			
		}

        public function cart(){
        $data['title'] = 'My Cart';
        $this->load->view('templates/header', $data);
        $this->load->view('user/cart', $data);
        $this->load->view('templates/footer');
        }
		
		 public function myStore(){
        $this->load->helper('array');
    	$this->load->model('store_model');	
		$data['title'] = 'My Store';
         $data['products'] = $this->store_model->get_data();
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
		$this->load->view('templates/footer');
       
        //$data('products')= $this->store_model->get_all_products();
    }

    public function edititem(){
         $this->load->model('store_model');
        $this->store_model->Update_UserItem();
    }

    public function deleteItem(){
        $this->load->model('store_model');
        $this->store_model->delete_UserItem();
 }

    function get_item_view(){

       $this->load->model('store_model');

        $data = array();

        $data['title'] = 'Item View';
        $data['list'] = $this->store_model->get_data();

        $this->load->view('user/itemview',$data);

    }
		
		public function index()
		{
			$this->login();
			$this->load->view('templates/header');
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
        // Make sure you destory website session as well.

    	redirect('');
    }



		#Method to go to previous page


    public function login_validation()
    {
    	$this->load->library('form_validation');
    	$this->form_validation->set_error_delimiters('', '');
    	$this->load->view('templates/header');
    	$this->form_validation->set_rules('email','Email','required|trim|xss_clean|callback_validate_creditentials');
    	$this->form_validation->set_rules('password','Password','required|md5');



    	if($this->form_validation->run()){

    		$data = array(
    			'email' => $this->input->post('email'),
    			'is_logged_in'=> 1
    			);
    		$this->session->set_userdata($data);

 	redirect('');

    	}else{
    		$data['title'] = 'Login';
    		$this->load->view('user/login',$data);
    	}


    

    }

    public function signup_validation(){
    	$this->load->library('form_validation');
    	$this->form_validation->set_error_delimiters('', '');
    	$this->load->view('templates/header');

        $this->form_validation->set_rules('fname','Fname','required|trim');
        $this->form_validation->set_rules('lname','Lname','required|trim');
    	$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[userprofile.email]');

        $this->form_validation->set_rules('username','Username','required|trim');
    	$this->form_validation->set_rules('password','Password','required|trim');
    	$this->form_validation->set_rules('passconfirm','Passconfirm','required|trim|matches[password]');

        $this->form_validation->set_rules('cellnumber','Cellnumber','required|trim');
        $this->form_validation->set_rules('address1','Address1','required|trim'); 
         $this->form_validation->set_rules('address2','Address2','required|trim'); 
          $this->form_validation->set_rules('pcode','Pcode','required|trim'); 

       
    	$this->form_validation->set_message('is_unique',"That email address already exists");
    	$this->form_validation->set_message('matches',"Passwords do not match");
    	$this->form_validation->set_message('required',"This field is required");

    	if ($this->form_validation->run()) {

				//generate random key
    		$key = md5(uniqid());

    		$this->load->library('email', array('mailtype'=>'html'));
    		$this->load->model('model_users');

    		$this->email->from('emirgluhbegovic@gmail.com',"ThriftShop");
    		$this->email->to($this->input->post('email'));
    		$this->email->subject("Confirm your account.");

    		$message = "<p>Thank you for signing up </p>";
    		$message .= "<p><a href='".base_url()."index.php/"."user/register_user/$key'>Click Here</a> to confirm your account </p>";

    		$this->email->message($message);
			//send amd email to the user
    		if($this->model_users->add_temp_user($key)){
    			if ($this->email->send()){
                   $this->session->set_userdata('fancy', 'Check your email for the Registration Confirmation (could be in the spam folder)');
    				      redirect('');
    			} else echo "could not send the email";
    		}else echo "problem adding to database";



    	}else{		
    		$data['title'] = 'Sign up';
             $this->session->set_userdata('fancy', 'failed');
    		redirect('');
    		
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
    	$this->load->view('templates/header');
    	if($this->model_users->can_log_in()){
    		return true;
    	}else{
    		$this->form_validation->set_message('validate_creditentials','Incorrect username/password.');
    		return false;
    	}

    }

    public function logout() {
    	$this->session->sess_destroy();
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
			$this->load->view('templates/header', $data);
			$this->load->view('store/create',array('error' => ' ' ));			
		}
		else
		{
                $data['products'] = $this->store_model->get_data();
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
            $data['product_id'] = '19';
            $this->load->view('templates/sellerHeader', $data);
		  $product_id=	$this->store_model->set_UserItem();
          echo 
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