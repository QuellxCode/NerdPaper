<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing extends CI_Controller {

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
	    $data['title'] = 'Pricing - NerdPapers';
		 $data["current_view"] = array("current_view" =>"pricing");
		$data["mainview"] = 'clientweb/pages/pricing';

		$this->load->view('clientweb/shared/layout',$data);
	}

    public function order_academic(){
        $academicLevel = $this->uri->segment('3');
        $data['academicLevel'] = array("academicLevel" =>$academicLevel);
       
        $data["current_view"] = array("current_view" =>"order");
		$data["mainview"] = 'clientweb/pages/order';

		$this->load->view('clientweb/shared/layout',$data);

    }
}
