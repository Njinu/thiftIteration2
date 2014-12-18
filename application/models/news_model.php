<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_latest_news()
	{

		$this->db->order_by("id", "asc");
		$query = $this->db->get('news');	

		return $query->result_array();		
	}

	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$this->db->order_by("id", "desc");
			$query = $this->db->get('news');			
			return $query->result_array();
		}

		$query = $this->db->get_where('news', array('slug' => $slug));

		return $query->row_array();
	}

	public function get_newsSearch($search)
	{		$this->db->select("title");
	$whereCondition = array("title" =>$search);
	$this->db->where($whereCondition);
	$this->db->from('news');
	$query = $this->db->get();			
	return $query->result();

}

public function get_user_ratings()
{
	$emailArray = array();
	$this->db->order_by("id", "asc");
	$query = $this->db->select('email')->from('rated')->get();	
	$query = $query->result();
	foreach ($query as $row) {
		$emailArray[] = $row->email;					
	}
	$this->session->set_userdata('item2', $emailArray);
	return $emailArray;		
}

public function averageRating($slug)
{		

	$rated = $this->session->userdata('Rated');		


	$data=array();
	$data2=array();
	$checkup =$this->session->userdata('email');
	if($checkup == ""){
		$this->session->set_flashdata('feedback', 'You have to be logged in before you can rate');
		redirect(base_url()."index.php/". "user");
	}else{
		$this->load->helper('url');
		$this->load->helper('array');

		$query = $this->news_model->get_news($slug);				

		$currentRating = $query['rating'];					

		$currentTotNumberRatings = element('totalratings', $query);

		$updateTotNumberRatings = $currentTotNumberRatings + 1;

		$CurrentRatingAdjust = $currentRating * $currentTotNumberRatings;

		$addedRating = $this->input->post('rating');

		$addNewRating = $CurrentRatingAdjust + $addedRating;

		$AvgRating = $addNewRating / $updateTotNumberRatings;

		$data = array(			
			'rating' => $AvgRating,	
			'totalratings' => $updateTotNumberRatings
			);

		$data2 = array(			
			'email' => $this->session->userdata('email')
			);

		$ratingArray = $this->get_user_ratings();

		$confirm=0;

		foreach ($ratingArray as $rating) {
			if($rating = $this->session->userdata('email')){
				$confirm=1;
			}
		}
		
		if($confirm = 0){
			$this->db->where('slug', $slug);
			$result = $this->db->update('news', $data);
			$result = $this->db->insert('rated', $data2);
		}
		else{
			$this->session->set_flashdata('feedback', 'You have already rated');
			redirect(base_url()."index.php/". "user");
		}
		
					// $this->session->set_userdata('Rated', '2');				

		return $AvgRating;
	}

}

public function set_news()
{
	$this->load->helper('url');

	$slug = url_title($this->input->post('title'), 'dash', TRUE);

	$data = array(
		'title' => $this->input->post('title'),
		'slug' => $slug,
		'text' => $this->input->post('text'),
		'catchphrase' => $this->input->post('catchphrase'),
		'Date' => $this->input->post('date'),
		'location' =>  $this->session->userdata('filename'),
		'picture' =>$this->session->userdata('picturepath')

		);

	return $this->db->insert('news', $data);
}



}

