<?php ob_start();

class Pages extends CI_Controller {



	public function view($page = 'home')
	{
		
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
		// Whoops, we don't have a page for that!
		show_404();
		}
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
  $this->load->model('fb_model');
		$this->load->library('facebook');
        $data['login_url'] = $this->facebook->get_login_url();
        $data['user_me'] =  $this->facebook->get_user();
        $userinfo = $this->facebook->get_user();
        $data['logout_url'] = $this->facebook->get_logout_url();
        
        $data['get_picture'] =  $this->facebook->get_pic();
        
        if( $userinfo  != null){
        if ( $this->email_exists($userinfo['name']) == FALSE ) {
            	$this->fb_model->set_FBusers($userinfo);
            }
        }
			
		$this->load->view('templates/header2', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer2', $data);


	}
	
	
	
	private function email_exists($email)
		{
			 $this->db->get_where('fbusers', array('Femail' => $email));
			$query = $this->db->get('fbusers');
			if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }
		}



	public function AboutPage()
	{
		// $data['news'] = $this->news_model->get_news();

		$data['title'] = 'About';

		$this->load->view('templates/header', $data);
		$this->load->view('pages/AboutPage', $data);
		
	}

	public function TestPage()
	{
		// $data['news'] = $this->news_model->get_news();

		$data['title'] = 'Test';

		
		$this->load->view('pages/TestPage', $data);
		
		
	}
}