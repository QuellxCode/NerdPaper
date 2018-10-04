<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

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
        public function __construct()
    {
        parent::__construct();
       $this->load->model('client_model');
      
        $this->load->library('session');

        if ($this->session->userdata('user_name') === NULL)
    {
  
      redirect('admin/login','refresh');
    }

    }

   public function index()
   {

    $data['clients'] = $this->client_model->gell_all_clients_details();


       $data['title'] = 'Client Accounts';
    $data['breadcrumb'] = 'Roles';
      $data['body_title'] = 'Regions';
		$data['mainview'] = 'admin/pages/client/client';
		$this->load->view('admin/shared/layout',$data);
   }


   public function account()
   {
   // $clientid = $this->uri->segment(4);
    $clientid = $this->input->post('clientid');
    $clientstatus = $this->client_model->get_client_status($clientid);

    if($clientstatus == 1)
    {

     $result =  $this->client_model->change_client_status(0,$clientid);

     if($result)
     {
      $this->session->set_flashdata('clientblocked', 'Blocked successfully');
       echo 'success';
     // redirect('admin/client','refresh');
     }

    }else if($clientstatus == 0)
    {
       $result =$this->client_model->change_client_status(1,$clientid);

       if($result)
     {
      $this->session->set_flashdata('clientunblocked', 'Unblocked successfully');
       echo 'success';
     // redirect('admin/client','refresh');
     }
    }

   }

   public function editclient()
   {
    $clientid = $this->uri->segment(4);

     $data['clientinfo'] =  $this->client_model->edit_client_info($clientid);

      $data['breadcrumb'] = 'Client';
      $data['body_title'] = 'Client Info';
    $data['mainview'] = 'admin/pages/client/edit_client';
    $this->load->view('admin/shared/layout',$data);
    
   }

    public function update_client($clientid)
    {
        

        $data = array(
          'client_name'=>$this->input->post('client_name'),
          'client_email'=>$this->input->post('client_email'),
          'contact'=>$this->input->post('client_number'),
          'password'=>$this->input->post('client_password'),
        );

       $result =  $this->client_model->update_client_info($clientid , $data);
       if($result)
       {
        $this->session->set_flashdata('clientupdated', 'Client Updated successfully');
       redirect('admin/client','refresh');
       }
    }


    public function delete_client()
    {
      $clientid = $this->uri->segment(4);

      $deleted = $this->client_model->delete_client_info($clientid);
      if($deleted)
      {
         $this->session->set_flashdata('clientdeleted', 'Client Deleted successfully');
       redirect('admin/client','refresh');
      }
    }


}
