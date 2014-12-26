
<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
/**
 *
 * @author http://www.roytuts.com
 */
class UploadFiles extends CI_Controller {
 
    private $error;
    private $success;
 
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('file_model', 'file');
    }
 
    private function handle_error($err) {
        $this->error .= $err . "\r\n";
    }
 
    private function handle_success($succ) {
        $this->success .= $succ . "\r\n";
    }
 
    function index() {
        if ($this->input->post('file_upload')) {
         $valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$max_file_size = 1024*100; //100 kb
$path = "uploads/"; // Upload directory
$count = 0;


    // Loop $_FILES to exeicute all files
    foreach ($_FILES['files']['name'] as $f => $name) {     
        if ($_FILES['files']['error'][$f] == 4) {
            continue; // Skip file if any error found
        }          
        if ($_FILES['files']['error'][$f] == 0) {              
            if ($_FILES['files']['size'][$f] > $max_file_size) {
                $message[] = "$name is too large!.";
                continue; // Skip large files
            }
            elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
                $message[] = "$name is not a valid format";
                continue; // Skip invalid file formats
            }
            else{ // No error found! Move uploaded files 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
                $count++; // Number of successfully uploaded file
            }
        }
    }

        }
    
        $this->load->view('uploadfiles/index');
       
    }
 
}
 
/* End of file uploadfiles.php */
/* Location: ./application/controllers/uploadfiles.php */   