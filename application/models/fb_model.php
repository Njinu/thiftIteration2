	<?php
	class fb_model extends CI_Model {

		public function __construct()
	{
		$this->load->database();
	}

function set_FBusers($userinfo) {

	$this->load->helper('url');

	$data = array(
		'Fuid' => $userinfo['id'],
		'Ffname' =>  $userinfo['first_name'],
		'Flname' => $userinfo['last_name'],
		
		'Fgender' =>  $userinfo['gender']
		);

	return $this->db->insert('fbusers', $data);
}


	
		
		

	}