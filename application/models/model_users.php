<?php
class Model_users extends CI_Model {

	public function can_log_in(){
		$this->db->where('email',$this->input->post('email'));
		$this->db->where('password',md5($this->input->post('password')));

		$query = $this ->db->get('userprofile');
		
		$results= $query->result_array();

		if($query->num_rows() == 1 ) {
		$this->session->set_userdata('id', $results[0]['id']);
			return true;
		} else {
			return false;
		}
	}
	
	public function getme(){
			$UserID=  $this->session->userdata('id');

			$this->db->where('id',$this->session->userdata('id'));
			$query = $this->db->select()->from('userprofile')->get();
			
			$query = $query->result();
			
			$query= $query[0];
                        $query= (array) $query;
			
		return $query ;
	}

	public function add_temp_user($key){

		$data = array(
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'cellnumber' => $this->input->post('cellnumber'),
			'address1' => $this->input->post('address1'),
			'address2' => $this->input->post('address2'),
			'pcode' => $this->input->post('pcode'),
			'key' => $key
			);
	
	$query = $this->db->insert('temp_users',$data);
	if ($query){
		return true;
	}else{
		return false;
	}
}

public function is_key_valid($key){
	$this->db->where('key',$key);
	$query = $this->db->get('temp_users');

	if ($query->num_rows() == 1) {
		return true;
	} else return false;
}

public function add_user($key) {

$this->db->where('key',$key);
$temp_user = $this->db->get('temp_users');

if($temp_user){
	$row = $temp_user->row();

	$data = array(
		'firstname' => $row->fname,
			'lastname' => $row->lname,
			'email' => $row->email,
			'username' => $row->username,
			'password' => $row->password,
			'cell' => $row->cellnumber,
			'address1' => $row->address1,
			'address2' => $row->address2,
			'postalcode' => $row->pcode
			
		);

	$did_add_user = $this->db->insert('userprofile',$data);
}

if ($did_add_user){
	$this->db->where('key',$key);
	$this->db->delete('temp_users');
	return $data['email'];
} return false;

}

}