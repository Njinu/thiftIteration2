<?php

class Gfp extends CI_Controller
{
      function __construct()
      {
            parent::__construct();
            $this->load->database();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
      }

      public function index()
      {
       
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');
 
       if ($this->form_validation->run() == FALSE)
      {
             $this->load->view('email_check');
       }
       else
      {
         $email= $this->input->post('email');

$this->load->helper('string');
$rs= random_string('alnum', 12);

$data = array(
               'rs' => $rs
            );
$this->db->where('email', $email);
$this->db->update('user', $data);
print_r($data);
//now we will send an email

  $config['protocol'] = 'smtp';
              $config['smtp_host'] = 'ssl://smtp.googlemail.com';
             $config['smtp_port'] = 465;
              $config['smtp_user'] = 'e.gluhbegovic@gmail.com';
              $config['smtp_pass'] = '#Wonder-Land#';
       
          
              $this->load->library('email', $config);

$this->email->from('e.gluhbegovic@gmail.com', 'ThriftShop');
$this->email->to($email);

$this->email->subject('Get your forgotten Password');
$this->email->message('Please go to this link to get your password.
       http://localhost:82/codeignita/get_password/index/'.$rs );

$this->email->send();
echo "Please check your email address.";
       }
 }

      public function email_check($str)
      {
$query = $this->db->get_where('user', array('email' => $str), 1);
 
      if ($query->num_rows()== 1)
      {
             return true;
            }
            else
            {    
             $this->form_validation->set_message('email_check', 'This Email does not exist.');
       return false;

      }
   }    
}