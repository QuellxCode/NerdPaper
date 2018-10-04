<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {

  public function __construct()
  {
    parent::__construct();


  }


  public function pdf()
  {
      //$download_file = $this->uri->segment(4);
     
  	$file_path = $this->uri->segment(4);
    $this->load->helper('download');
    $download_file = $file_path;
  force_download($file_path,base_url("/documents/".$download_file));
    
  }

}
