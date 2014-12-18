<?php
class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$newdata = array(
                   			'Rated'  =>  0
              			 );

			$this->session->set_userdata($newdata);
		
 if (isset($_SERVER['HTTP_REFERER']))
 {
 $this->session->set_userdata('previous_page', $_SERVER['HTTP_REFERER']);
 }
 else
 {
 $this->session->set_userdata('previous_page', base_url());
 }
     
	}

 
  public function news()
    {
    	$this->load->library('grocery_CRUD'); 
    	 $crud = new grocery_CRUD();
    	$crud->set_table('news');
        $crud->columns('Date','title','text','catchphrase','rating');
        $crud->fields('Date','title','text','catchphrase','rating');
        $output = $crud->render();
       $this->load->view('news/crudform',$output);  
    }

	public function index()
	{
		
		$data['news'] = $this->news_model->get_news();
		$data['latestnews'] = $this->news_model->get_latest_news();	
		$data['title'] = 'Info bites';


		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer', $data);
	}

	#Method to go to previous page
function goback()
{
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}

	public function singlenews()
	{
		$data['news'] = $this->news_model->get_news();

		$data['title'] = 'News Item';

		$this->load->view('templates/header', $data);
		$this->load->view('news/singlenews', $data);
		
	}

	

	public function view($slug)
	{
		$data['news_item'] = $this->news_model->get_news($slug);

			$this->load->helper('form');
			$this->load->library('form_validation');

		if (empty($data['news_item']))
		{
			show_404();
		}

		$data['title'] = $data['news_item']['title'];
		$this->form_validation->set_rules('rating', 'Rating', 'required|greater_than[0]');

		if($this->form_validation->run() === FALSE)
		{
			$this->news_model->get_user_ratings();
		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);

		
		}
		else
		{
			print_r($this->news_model->averageRating($slug));
			echo '<br>';
			$this->session->set_flashdata('feedback', $addeditem . "Thank you for rating!");
			// $this->load->view('templates/header');
			$name = $slug;
			$add = "news/".$name; 
			// $this->load->view('store/success');
			redirect(base_url()."index.php/". $add);
		}
		
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('upload');


		$data['title'] = 'Create an Infobyte';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('news/create',array('error' => ' ' ));
			

		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('news/success');
		}
	}

}