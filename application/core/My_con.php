<?php 

class MY_con extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
    }

$this->session->set_userdata('refered_from', $_SERVER['HTTP_REFERER']); 

}

?>