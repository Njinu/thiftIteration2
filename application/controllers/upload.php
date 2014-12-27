<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		// $data['upload_data']['full_path'];
	}

	public function getfilepath(){
		$filepath =  $upload_data['full_path'];

		return  $filepath;
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}
	
	public function upload_file()
{
    $status = "";
    $msg = "";
    $file_element_name = 'userfile';
     
    if (emptyC)
    {
        $status = "error";
        $msg = "Please enter a title";
    }
     
    if ($status != "error")
    {
        $config['upload_path'] = './files/';
        $config['allowed_types'] = 'gif|jpg|png|doc|txt';
        $config['max_size'] = 1024 * 8;
        $config['encrypt_name'] = TRUE;
 
        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload($file_element_name))
        {
            $status = 'error';
            $msg = $this->upload->display_errors('', '');
        }
        else
        {
            $data = $this->upload->data();
            $file_id = $this->files_model->insert_file($data['file_name'], $_POST['title']);
            if($file_id)
            {
                $status = "success";
                $msg = "File successfully uploaded";
            }
            else
            {
                unlink($data['full_path']);
                $status = "error";
                $msg = "Something went wrong when saving the file, please try again.";
            }
        }
        @unlink($_FILES[$file_element_name]);
    }
    echo json_encode(array('status' => $status, 'msg' => $msg));
}
public function complete_pic()
	{


}
	public function do_upload()
	{


  if (isset($_POST['complete'])) {
$data['pic_progress'] = '';
$data['product_id'] = '';

$this->load->view('templates/sellerHeader', $data);
		$this->load->view('user/myStore', $data);
		$this->load->view('templates/footer2');


        // btnDelete
    } else {
        //assume btnSubmit
    


		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '3500';
		$config['max_width']  = '3500';
		$config['max_height']  = '3500';

		

		$this->load->library('upload', $config);
		$image_data = $this->upload->data();

		

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
			$this->load->view('templates/header');
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
	if($data['pic_progress']='N'){
  			$product_id=$this->session->userdata('p_id');
  			  		$product_id = $_POST['product_id'] ;
  		}


			$upload_data = $this->upload->data(); 
  		
  		$file_name =   $upload_data['file_name'];

  	

		$seller_id=$this->session->userdata('id');

		$this->session->set_userdata('filename', $file_name);
			
			$this->session->set_userdata('p_id', $product_id);
			$data['pic_progress'] = 'Y';
			$data['product_id'] = $product_id;

			//$this->load->view('upload_success', $data);

  $date = date('d.m.y');
         $in_data= array (
         	'product_id'=>$product_id,
         	'seller_id'=>$seller_id,
 			'pic_id'=>$file_name,
 			'date_created'=>$date);


       $this->load->model('store_model');
		$this->store_model->set_ProductPicture($in_data);
	$this->load->view('templates/sellerHeader', $data);
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
		$this->load->view('user/myStore', $data);
		$this->load->view('templates/footer2');

		}

		return $image_data;
	}
	}
}
?>