<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends CI_Controller {

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
		$this->load->model('leads_model');
		$this->load->model('writer_model');
		$this->load->library('session');
		if ($this->session->userdata('user_name') === NULL)
		{

			redirect('admin/login','refresh');
		}
	}


	public function index()
	{
	    $data['title'] = 'Leads';
		$data['leads'] =  $this->leads_model->all_leads();
		$data['agents'] = $this->writer_model->get_all_agents();

		// echo "<pre>";
		// print_r($data['leads']);
		// die();

		//$this->load->view('admin/pages/leads/show_all_leads',$data);

		$data['breadcrumb'] = 'Leads';
		$data['body_title'] = 'Leads';
		$data['mainview'] = 'admin/pages/leads/show_all_leads';
		$this->load->view('admin/shared/layout',$data);
	}

	public function change_lead_status()
	{

		$leadid = $this->input->post('leadid');
		$leadstatus = $this->input->post('status');

		$result = $this->leads_model->lead_statu_db($leadid , $leadstatus);
		if($result)
		{
			return $leadstatus;
		}

		// if($leadstatus == 0)
		// {



		// }
		// else if($leadstatus == 1)
		// { 
		// 	$result =$this->leads_model->lead_statu_db($leadid , $leadstatus);

		// 	if($result)
		// 	{
		// 		return 1;
		// 	}
		// }else if($leadstatus == 2)
		// {
		// 	$result = $this->leads_model->lead_statu_db($leadid , $leadstatus);

		// 	if($result)
		// 	{
		// 		return 2;
		// 	}
		// }else if($leadstatus == 3)
		// {
		// 	$result = $this->leads_model->lead_statu_db($leadid , $leadstatus);

		// 	if($result)
		// 	{
		// 		return 3;
		// 	}
		// }
		// echo "<pre>";
		// print_r($_POST);
		// die();
	}

	public function add_lead_note()
	{
		// echo "<pre>";
		// print_r($_POST);
		// die();

		if($this->session->userdata('user_id'))
		{

            date_default_timezone_set('America/Los_Angeles');
		    $current_pacific_time = date('d-m-Y H:i:s'); 

			$leadid = $this->input->post('leadnoteid');
			$leadstatus = $this->input->post('leadstatus');
			$result = $this->leads_model->lead_statu_db($leadid , $leadstatus);
			if($result)
			{
				$data = array(
					'lead_id' => $leadid,
					'lead_note' => trim($this->input->post('ordernote')),
					'lead_status'=>$leadstatus,
					'created_at'=>$current_pacific_time,
					'created_by'=>$this->session->userdata('user_name')
				);

				$data = $this->leads_model->insert_lead_note($data);

				if($data)
				
				{
					redirect('admin/leads','refresh');
				}else{
					echo "not inserted";
				}

			}

		// $data = array(
		// 	'lead_id' => $this->input->post('leadnoteid'),
		// 	'lead_note' => trim($this->input->post('ordernote'))
		// );

		}


	}

	public function add_lead_comment()
	{
		// echo "<pre>";
		// print_r($_POST);
		// die();
		if($this->session->userdata('user_id'))
		{
			$leadid = $this->input->post('leadnoteid_two');
			$ordercomment = $this->input->post('ordernote');
			$leadstatus = $this->leads_model->check_lead_status($leadid);
            date_default_timezone_set('America/Los_Angeles');
		    $created_date = date('d-m-Y H:i:s');
			$data = array(
				'lead_id' => $leadid,
				'lead_note' => $ordercomment,
				'lead_status'=>$leadstatus,
				'created_at' => $created_date, 
				'created_by'=>$this->session->userdata('user_name')
			);

			$data = $this->leads_model->insert_lead_note($data);

			if($data)
			{
				redirect('index.php/admin/leads','refresh');
			}else{
				echo "not inserted";
			}

		}
	}

	public function get_comments()
	{
		$leadid = $this->input->post('leadid');
		$notes = $this->leads_model->get_singlead_comments($leadid);
		// echo "<pre>";
		// print_r($notes);
		// die();


		echo json_encode($notes);
	}

	public function showcommentmodal()
	{
		echo 'success';
	}

	public function edit_lead()
	{
		$editleadid = $this->uri->segment(4);
		//echo $editleadid;

		$data['leads']= $this->leads_model->edit_user_lead($editleadid);

		$data['breadcrumb'] = 'Leads';
		$data['body_title'] = 'Leads';
		$data['mainview'] = 'admin/pages/leads/edit_leads';
		$this->load->view('admin/shared/layout',$data);

	}

	public function update_lead()
	{
		// echo "<pre>";
		// print_r($_POST);
		// die();
		$leadid = $this->input->post('lead_id');
		
		

		$data = array(

			'user_email' => $this->input->post('email'),
			'user_phone' => $this->input->post('phone'),
			'document_type' => $this->input->post('document_type'),
			'no_of_pages' => $this->input->post('no_of_pages'),
			'due_date' => $this->input->post('client_due_date'),

		);

		$result = $this->leads_model->updatelead($leadid,$data);

		if($result)
		{
			$this->session->set_flashdata('leadupdate', 'Lead Updated successfully');
			redirect('admin/leads','refresh');
		}

		

	// public function change_payment_status()
	// {

	// 	$orderid = $this->input->post('orderid');
	// 	$orderstatus = $this->input->post('status');

	// 	$this->
	// }
	}

	public function assign_to_agent()
	{
		// echo '<Pre>';
		// print_r($_POST);
		// die();
		$agentid = $this->input->post('agentid');
		$leadid = $this->input->post('leadid');



		$assigned = $this->leads_model->assign_lead_to_agent($agentid,$leadid);

		if($assigned)
		{
			$this->leads_model->change_lead_status_to_incontact($leadid);
		}

	}
	
	public function add_assignagent_comment()
	{
		// echo '<pre>';
		// print_r($_POST);
		// die();

		if ($this->session->userdata('user_id')) 
		{
			# code...
			$assignednote = $this->input->post('agentassignnote');
			$noteid_three = $this->input->post('leadnoteid_three');

			$addcoment = array(
				'lead_note' => $assignednote,
				'lead_id' => $noteid_three,
				'lead_status' => 2,
				'created_by' => $this->session->userdata('user_name')
			);

			$added = $this->leads_model->addassign_lead_comment($addcoment);

			if ($added) 
			{
				# code...
				redirect('admin/leads','refresh');
			}
		}
	}
	
	public function callfunc()
	{
		//echo 'working';
		$mycount =  $this->leads_model->get_new_leads_count();
		echo $mycount;
	}
	
	


// 	public function add_assignagent_comment()
// 	{
// 		echo '<pre>';
// 		print_r($_POST);
// 		die();
// 	}

}