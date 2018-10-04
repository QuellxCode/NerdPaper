<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    

class Payment extends CI_Controller {



public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	        
	        
	//	if($this->session->userdata('uemail') == NULL)
	//	{
		  //  echo '<pre>';
		  //  print_r($_SESSION);
		  //  die();
		   // redirect('/Home');
	//	}

// 		if ($this->session->userdata('user_name') === NULL)
// 		{
// 			redirect('/Home');
// 		}
		
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
       

        public function index()
	{
	    $scus = $this->uri->segment(3);
	    
	    if($scus == 'done')
	    {
	        $data["title"] = 'Thank You - NerdPapers';
        $data["current_view"] = array("current_view" =>"order");
		$data["mainview"] = 'clientweb/pages/paymentsuccess';

		$this->load->view('clientweb/shared/layout',$data);
	    }else{
	        	redirect('/Home');
	    }
        
	}

      



	
}
