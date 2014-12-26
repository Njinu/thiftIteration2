<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Dropzone extends CI_Controller {
  
public function __construct() {
   parent::__construct();
   $this->load->helper(array('url','html','form'));
}
 
public function index() {
//$this->load->view('dropzone_view');
 $this->load->view('dropzone/dropzone_view');
}

    public function upload(){
      if (!empty($_FILES)) {
        $tempFile = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $targetPath = getcwd() .'/uploads/';
        $targetFile = $targetPath .substr(uniqid(rand()),0,4).'_'.$fileName ;
        move_uploaded_file($tempFile, $targetFile);
        $config['image_library'] = 'gd2';
        $config['source_image'] = $targetFile;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']     = 75;
        $config['height']   = 50;
        $this->image_lib->clear();
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $imgName = substr(uniqid(rand()),0,4).'_'.$fileName;
        /* If you wanna save to database image url 
        
        $this->adminproperty_model->save_image($imgName);
        */
   

       }
            $product_id  = $this->uri->segment(3);

        $date = date('d.m.y');
         $data= array ('product_id'=>$product_id,
 		'pic_id'=>$imgName,
 		'date_created'=>$date);

       $this->load->model('store_model');
$this->store_model->set_ProductPicture($data);
$this->load->view('dropzone/success', $data);
    }

public function uploade() {
//$this->load->helper('url');

$pic_id = $_FILES['file']['name'];

 $data= array ('product_id'=>$product_id,
 		'pic_id'=>$pic_id,
 		'date_created'=>$date);

if (!empty($_FILES)) {

	//echo "yes";echo "Ja" ;
	
$tempFile = $_FILES['file']['tmp_name'];
$fileName = $_FILES['file']['name'];
$targetPath = getcwd() . '/uploads/';
$targetFile = $targetPath . $fileName ;
move_uploaded_file($tempFile, $targetFile);
echo "Yopp".$pic_id;
}

//echo 
    }
}