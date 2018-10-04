<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neworder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('order_model');
		$this->load->model('region_model');
		$this->load->model('writer_model');
		$this->load->library('session');

		if ($this->session->userdata('user_name') === NULL)
		{
			redirect('admin/login','refresh');
		}
	}

	public function index()
	{
	    $data['title'] = 'Neworder';
		$data['neworders']  = $this->order_model->get_all_orders();
		$data['writers'] = $this->writer_model->get_all_writers();
		$data['regions'] = $this->region_model->get_region();
		$data['body_title'] = 'New Orders';
		$data['mainview'] = 'admin/pages/new_order';
		$this->load->view('admin/shared/layout',$data);
	}

	public function change_payment_status()
	{
		
		$orderid = $this->input->post('orderid');
		$payment_status = $this->input->post('status');

		$result = $this->order_model->update_payment_status($orderid,$payment_status);

		if($result)
		{
			echo "status updated";
		}else{
			echo "note updated";
		}
	}

	public function neworder_verification()
	{	
		date_default_timezone_set('America/Los_Angeles');
		$verified_at = date('Y-m-d H-i-s');
		$orderid = $this->uri->segment(4);
		$writerid = $this->uri->segment(5);
		$username = $this->writer_model->get_single_writer($writerid);
		if($username)
		{
			$result = $this->order_model->order_verified_by($username,$verified_at,$orderid);

			if($result)
			{
				redirect('admin/neworder','refresh');
			}
		}
		
	}

	public function add_orderin_progress_note()
	{
		if($this->session->userdata("user_name"))
		{
			$note_creater = $this->session->userdata('user_name');		
			$ordernote = $this->input->post('ordernote');
			$orderid = $this->input->post('myorder_id');
			date_default_timezone_set('America/Los_Angeles');
		$created_date = date('d-m-Y H:i:s');

			$data = array(
				'order_id' => $orderid,
				'note_description' => $ordernote,
				'created_at' => $created_date,
				'created_by' => $note_creater, 
				'status'=> 1
			);
			$result = $this->order_model->add_note_inprogess($data);

			if($result)
			{
				redirect('admin/neworder/order_inprocess','refresh');
			//echo "<script>$.notify('Note Addess Successfully', 'success')   </script>";
			}else{
			//echo "note not added";
			}
		}

	}

	public function order_detail()
	{
		$orderdetail_id = $this->uri->segment(4);
		$data['neworder_detail'] = $this->order_model->get_single_order($orderdetail_id);
		$data['ordernotes'] = $this->order_model->get_single_order_notes($data['neworder_detail']->order_detail_id);
		$data['files'] = $this->order_model->get_single_order_files($data['neworder_detail']->order_detail_id);
		$data['body_title'] = 'Order Detail';
		$data['mainview'] = 'admin/pages/single_order_detail';
		$this->load->view('admin/shared/layout',$data);
	}

	public function assign_order()
	{
		if($this->session->userdata('user_id'))
		{
			

			$assignedby = $this->session->userdata('user_name');
			date_default_timezone_set('America/Los_Angeles');
			$assignedat = date('Y-m-d H:i:s');
			$orderid = $this->input->post('orderid');
			$regionid = $this->input->post('regionid');
			$writerid = $this->input->post('writerid');
			$dateval = $this->input->post('date');
			date_default_timezone_set('America/Los_Angeles');
			$newtime = date("H:i:s",strtotime($dateval));
			$newdate = date("m/d/Y",strtotime($dateval));
			
			$data = array(

				'order_id' => $orderid,
				'region_id' => $regionid,
				'writer_id' => $writerid,
				'writer_due_date' => $dateval,
				'status' => 0,
				'created_at' => $assignedat,
				'created_by' => $assignedby
			);

			// echo "<pre>";
			// print_r($data);
			// die();
			$count = $this->order_model->check_order_in_assign($orderid);

			if($count == 1)
			{
				//echo "working";

				$this->order_model->update_assign_order($orderid,$data);
				$this->session->set_flashdata('assignedtoregion', 'Order Assigned to Region successfully');

				$arr = array('message' => 'Order Assigned Successfully');
				echo json_encode($arr);

			}else{
				//echo "working in else";
				
				$this->order_model->assign_order_to_region($data);

				if(!empty($writerid)  && $writerid  > 0)
				{
					$this->order_model->change_order_status_inprocess($orderid);

				}

				$this->session->set_flashdata('assignedtoregion', 'Order Assigned to Region successfully');
			}

			//$this->session->set_flashdata('msg','Order Assigned Successfully');

		}
		
	}


	public function assign_order_writer()
	{

		if($this->session->userdata('user_id'))
		{
			

			$assignedby = $this->session->userdata('user_name');
			date_default_timezone_set('America/Los_Angeles');
			$assignedat = date('Y-m-d H:i:s');

			


			$orderid = $this->input->post('orderid');
			$regionid = $this->input->post('regionid');
			$writerid = $this->input->post('writerid');
			$wrdate = $this->input->post('date');
		//$time = $this->input->post('time');

			//$duedate = strftime('%Y-%m-%d %H:%M:%S', strtotime($date));


			$data = array(

				'order_id' => $orderid,
				'region_id' => -1,
				'writer_id' => $writerid,
				'writer_due_date' => $wrdate,
				'status'=>1,
				'created_at' => $assignedat,
				'created_by' => $assignedby
			);

			// echo "<pre>";
			// print_r($data);
			// die();
			$count = $this->order_model->check_order_in_assign($orderid);

			if($count == 1)
			{
				//echo "working";

				$updated = $this->order_model->update_assign_order($orderid,$data);
				$this->session->set_flashdata('assignedtowriter', 'Order Assigned to Writer successfully');

				if($updated)
				{
					if(!empty($writerid)  && $writerid  > 0)
					{
						$this->order_model->change_order_status_inprocess($orderid);

					}
				}

				

			}else{
				//echo "working in else";
				
				$this->order_model->assign_order_to_region($data);
				$this->session->set_flashdata('assignedtowriter', 'Order Assigned to Writer successfully');

				if(!empty($writerid)  && $writerid  > 0)
				{
					$this->order_model->change_order_status_inprocess($orderid);

				}

				
			}

			//$this->session->set_flashdata('msg','Order Assigned Successfully');

		}
		
	}

	public function save_writer_due_date()
	{

		if($this->session->userdata('user_id'))
		{
			$dd_writerduedate = $this->input->post('writerduedate');
			date_default_timezone_set('America/Los_Angeles');
			$new_writer_due_date = date("Y-m-d H:i:s", strtotime($dd_writerduedate));
			// echo $dd_writerduedate;
			// die();

			$assignedby = $this->session->userdata('user_name');
			date_default_timezone_set('America/Los_Angeles');
			$assignedat = date('Y-m-d H:i:s');
			$writerduedate = $this->input->post('writerduedate');
			$orderid = $this->input->post('orderid');


			$data = array(

				'order_id' => $orderid,
				'region_id' => -1,
				'writer_id' => -1,
				'writer_due_date' => $writerduedate,
				'status' => 0,
				'created_at' => $assignedat,
				'created_by' => $assignedby
			);

			// echo "<pre>";
			// print_r($data);
			// die();
			$count = $this->order_model->check_order_in_assign($orderid);

			if($count == 1)
			{
				//echo "working";
				$orderassign_row = $this->order_model->get_previous_order_assign_detail($orderid);

				$update_region_or_writer = array(
					'order_id' => $orderid,
					'region_id' => $orderassign_row->region_id,
					'writer_id' => $orderassign_row->writer_id,
					'writer_due_date' => $writerduedate,
					'status' => $orderassign_row->status,
					'created_at' => $orderassign_row->created_at,
					'created_by' => $orderassign_row->created_by
				);

				$val_update= $this->order_model->update_writer_due_date($orderid,$update_region_or_writer);
				//echo $val_update;
				
				if($val_update)
				{
					$this->order_model->insert_writer_date($orderid, $new_writer_due_date);
					
					$arr = array('message' => 'Writer Due date Updated Successfully');
				echo json_encode($arr);
				}

				// $arr = array('message' => 'Writer Due date Updated Successfully');
				// echo json_encode($arr);

			}else{
				echo "working in else";
				
				$updated = $this->order_model->insert_write_due_date($data);

				if($updated)
				{
					$this->order_model->insert_writer_date($orderid, $new_writer_due_date);
				}

				// if(!empty($writerid)  && $writerid  > 0)
				// {
				// 	$this->order_model->change_order_status_inprocess($orderid);

				// }

				
			}

			$this->session->set_flashdata('msg','Writer Due date Selected Successfully');



		}
	}

	public function change_order_status()
	{

		

		$orderid = $this->input->post('orderid');
		$order_status = $this->input->post('status');

		//echo $orderid.' '.$payment_status.'<br>';
		//echo $payment_status.'<br>';

		//die();

		$result = $this->order_model->update_order_status($orderid,$order_status);

		if($result)
		{
			$assign_updated = $this->order_model->update_assign_order_status($orderid);
			if($assign_updated)
			{
				echo 'success';
			}
		}else{
			echo "no";
		}
	}

	public function add_order_note()
	{
		$ordernote = $this->input->post('ordernote');
		$orderid = $this->input->post('myorder_id');
		$note_creater = $this->input->post('note_writer');
		date_default_timezone_set('America/Los_Angeles');
		$created_date = date('d-m-Y H:i:s');

		$data = array(
			'order_id' => $orderid,
			'note_description' => $ordernote,
			'created_at'=>$created_date,
			'created_by' => $note_creater 
		);
		$result = $this->order_model->add_note($data);

		if($result)
		{
			redirect('admin/neworder','refresh');
			//echo "<script>$.notify('Note Addess Successfully', 'success')   </script>";
		}else{
			//echo "note not added";
		}
	}

	public function get_notes()
	{
		$orderid = $this->input->post('orderid');
		$notes = $this->order_model->get_singleorder_notes($orderid);
		// echo "<pre>";
		// print_r($notes);
		// die();


		echo json_encode($notes);
	}

	public function delete_neworder()
	{
		//$val = $this->uri->segment(4);
		$orderid = $this->input->post('orderid');
		$deleted = $this->order_model->delete_unpaid_order($orderid);
		if($deleted)
		{
		    echo 'success';
		}
		//echo $val;

		//$this->order_model->
	}

	public function edit_neworder()
	{
		$orderid = $this->uri->segment(4);
		// echo $myid;
		// die();

		//$this->load->view('admin/pages/edit_new_order');()
		$data['order'] = $this->order_model->get_single_order($orderid);
		// echo "<pre>";
		// print_r($result);
		// die();
		$data['body_title'] = 'Edit Order';
		$data['title'] = 'Unpaid Order';
		$data['mainview'] = 'admin/pages/edit_new_order';
		$this->load->view('admin/shared/layout',$data);
	}

	public function update_neworder()
	{
	
		
// 		echo "<pre>";
// 		print_r($_POST);
// 		die();
		$myVar = '';
		$mySubVar = '';

		$hiddenText2 = $this->input->post('hiddentext2');
		$selectSubject = $this->input->post('subject');

		if ($selectSubject == 'Other') {
			$mySubVar = $hiddenText2;
			# code...
		}
		else{

			$mySubVar = $selectSubject;
		}

		$hiddenText = $this->input->post('hiddentext');
		$citationStyle = $this->input->post('citation_style');

		if($citationStyle == 'Other')
		{
			$myVar = $hiddenText;
		}
		else
		{
			$myVar = $citationStyle;
		}

		$payment = $this->input->post('payment');
		$orderprice = 0;

		if (array_key_exists("halfpaid",$_POST))
		{
			$paymentstatus = 0;
		}
		else
		{
			$paymentstatus = 1;
		}
		
		$checked = $this->input->post('mycheckbox');
if(isset($checked) == 1)
{
$paymentstatus = 0;
}
else
{
$paymentstatus = 1;
}

		$orderid = $this->input->post('order_id');
		$data = array(
			'client_name' => $this->input->post('name'),
			'client_email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'acedamic_level' =>$this->input->post('academic_level'), 
			'document_type' => $this->input->post('document_type'),
			'no_of_pages' => $this->input->post('no_of_pages'),
			'title' => $this->input->post('title'),
			'subject' => $mySubVar,
			'end_date' => $this->input->post('client_due_date'),
			'end_time' => $this->input->post('client_due_time'),
			'no_of_words' => $this->input->post('no_of_words'),
			'citation_style' => $myVar,
			'name_of_sources' => $this->input->post('name_of_sources'),
			'description' => $this->input->post('description'),
			'subject_other' => $hiddenText2,
			'order_price' => $payment,
			'payment_status' => $paymentstatus,
			'citation_other' => $hiddenText


		);

		$result = $this->order_model->neworder_update($orderid,$data);

		if(isset($_FILES['userFiles']) && !empty($_FILES['userFiles']))

{

		if($result)
		{
	
			$filesCount = count($_FILES['userFiles']['name']);
            //echo $filesCount;
			for($i = 0; $i < $filesCount; $i++){
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
				$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
				$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
				$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
				$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

				$uploadPath = '../admin.writersverge/documents';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png|doc|docx|txt|pdf|csv|jpeg|xlsx|rar|zip';

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				date_default_timezone_set('America/Los_Angeles');
				if($this->upload->do_upload('userFile')){
					$fileData = $this->upload->data();
					$uploadData[$i]['file_name'] = $fileData['file_name'];
					$uploadData[$i]['created'] = date("Y-m-d H:i:s");
					$uploadData[$i]['modified'] = date("Y-m-d H:i:s");

					$data = array(

						'file_name'=> $uploadData[$i]['file_name'],
						'file_path'=> $_FILES['userFile']['name'],
						'order_id_fk'=> $orderid
					);


					$this->order_model->update_order_files($data);
				}
			}
			

		}else{
			echo "note updated";
		}

}
		redirect('admin/neworder','refresh');
	}

	public function get_date_time()
	{
		$orderid = $this->input->post('order_detail_id');


		$duedate = $this->order_model->get_date_and_time($orderid);
		if($duedate)
		{
			$duetime = $this->order_model->get_date_and_time_two($orderid);

			$date_time = $duedate.' '.$duetime;
			if(isset($date_time))
			{
			//$result = date('M d,Y H:i:s', strtotime($date_time));
				date_default_timezone_set('America/Los_Angeles');
				$date_time = date("M d,Y h:i:s", strtotime($date_time));

				$data['order_id'] = $orderid;
				$data['order_datetime'] = $date_time;


				echo json_encode($data);
			}
		}

		
		//$yrdata= ;
		
		
	}

	public function get_writer_duedate_and_time()
	{
		$orderid = $this->input->post('order_detail_id');

		$order_assign_row = $this->order_model->get_writer_due_date_and_time($orderid);

		// print_r($order_assign_row);

		// die();
		if(!empty($order_assign_row) && $order_assign_row != null)
		{
			date_default_timezone_set('America/Los_Angeles');
			$yrdata= strtotime($order_assign_row->writer_due_date);

			$result = date('M d,Y H:i:s', $yrdata);
		//echo $result;
			$data['order_id'] = $orderid;
			$data['order_datetime'] = $result;
			echo json_encode($data);
		}else{
			echo "notfound";
		}

		

	}

	public function get_date_time_inprocess()
	{
		$orderid = $this->input->post('order_detail_id');
		$writer_d_d = $this->order_model->get_date_and_time_inprocess($orderid);
		if(isset($writer_d_d))
		{
			$writerduedate = $writer_d_d->writer_due_date;
			date_default_timezone_set('America/Los_Angeles');

			$writerdue_d_t = date("M d,Y H:i:s", strtotime($writerduedate));

			$data['order_id'] = $orderid;
			$data['order_datetime'] = $writerdue_d_t;


			echo json_encode($data);
		}

		// echo $date_time;
		// die();

		
		

	}


	public function remove_neworder_file()
	{
		// echo "<pre>";
		// print_r($_POST);
		// die();

		$orderfile_id = $this->input->post('order_file_id');
		$deleted = $this->order_model->remove_file($orderfile_id);

		if($deleted)
		{
			echo 'success';
		}else{
			echo 'not deleted';
		}
	}


	public function getwriterduedate()
	{
		$orderid = $this->input->post('orderid');

		$wr_due_date = $this->order_model->get_writer_due_date($orderid);

		date_default_timezone_set('America/Los_Angeles');
		$yrdata= strtotime($wr_due_date);
		$result = date('M d,Y H:i:s', $yrdata);
		echo $result;


		//echo json_encode($result);
	}


	



	//*********** Unpaid Orders Start ************* ///

	public function unpaid_orders()
	{
		//$this->order_model->get_all_unpaidorders();
		$data['title'] = 'Unpaid Order';

		$data['unpaidorders']  = $this->order_model->get_all_unpaidorders();
		$data['agents'] = $this->writer_model->get_all_agents();

		 // echo "<pre>";
		 // print_r($data['agents']);
		 // die();

		$data['body_title'] = 'Unpaid Orders';
		$data['mainview'] = 'admin/pages/unpaid_order';
		$this->load->view('admin/shared/layout',$data);
	}

	public function order_inprocess()
	{
	    $data['title'] = 'Order in Process';
		$data['order_inprocess'] = $this->order_model->get_order_inprocess();

		// echo '<pre>';
		// print_r($data['order_inprocess']);
		// die();

		$data['body_title'] = 'Order in Process';
		$data['mainview'] = 'admin/pages/order_in_progress';
		$this->load->view('admin/shared/layout',$data);
	}

	// public function update_neworder()
	// {
	// 	echo "<pre>";
	// 	print_r($_POST);
	// 	die();
	// }

    public function neworder_priceupdate()
{
	// echo "<pre>";
	// print_r($_POST);
	// die();
    
	$orderid = $this->input->post('orderid');
	$payment = $this->input->post('order_price');
	$trimmed = trim($payment);

	$result = $this->order_model->update_payment($orderid,$trimmed);


	if($result)
	{
		echo "payment updated";
		}
	else{
		echo "not updated";
		}
}

	public function test()
	{

		$this->load->view('admin/test');
	}


	public function convert_to_neworder()
	{
	    $data['title'] = 'Change to Neworder';
		// echo "<pre>";
		// print_r($_POST);
		// die();
		$orderid = $this->input->post('orderid');
		

		$order_detail = $this->order_model->getorderdetail($orderid);
		
		
		//$order_detail = $this->order_model->get_order_details($orderid);

        $Name =(string)$order_detail->client_name;
        $Email =  (string)$order_detail->client_email;
        $PhoneNo  = (string)$order_detail->phone;
        $DocumentType  = (string)$order_detail->document_type;
        $AcademicLevel  = (string)$order_detail->acedamic_level;
        $DueDate  = (string)$order_detail->end_date;
        $DueTime  = (string)$order_detail->end_time;
        $NumberofPages  = (string)$order_detail->no_of_pages;
        $NumberofWords = (string)$order_detail->no_of_words;
        $Subject = (string)$order_detail->subject;
        $Title = (string)$order_detail->title;
        $Citation = (string)$order_detail->citation_style;
        $NameOfSources = (string)$order_detail->name_of_sources;
        $Description = (string)$order_detail->description;


        // get order files
        $this->db->where('order_id_fk',$orderid);
        $query_file = $this->db->get('order_files');
        $datafiles= $query_file->result();
        
        $abc = '';
foreach($datafiles as $file)
        {
            $abc .= $file->file_name.' | ';
        }

$bodyHeaderHead = "<b>Welcome to Nerdpapers.com</b>";
     $bodyBodyHead = "<p>&nbsp;</p>
<p>Nerdpapers.com - Thanks for your order!</p>
<p>Your order has been placed successfully.</p>
<p>Our professional writing team is already at work on your project. Here are the order details:<br />
<ul>
<li> Name: <b>" .$Name."</b></li><br/>
<li>Email: <b>" .$Email."</b></li><br/>
<li> Phone No :<b> " .$PhoneNo."</b></li><br/>
<li> Document Type :<b> " .$DocumentType." </b></li><br/>
<li> Academic Level :<b> " .$AcademicLevel."</b></li><br/>
<li>Due Date Time :<b> " .$DueDate." ". $DueTime."</b></li><br/>
<li> Number of Pages <b>:" .$NumberofPages ."pages ~". $NumberofWords."words </b></li><br/>
<li> Subject :<b> " .$Subject."</b></li><br/>
<li>Title :<b> " .$Title."</b></li><br/>
<li>Citation :<b> " .$Citation."</b> </li><br/>
<li>Name of Sources <b>: " .$NameOfSources."</b></li><br/>
<li>Description :<b> " .$Description." </b></li><br/>
<li>Attachments :<b> " .$abc." </b></li><br/>
<br>
<br>

<p>If you have any other requirements or changes, please notify us immediately, as we are now working to deliver great writing that exceeds your expectations!<br />Hard at work,
<br /><br />Nerdpapers.com Team</p>";



      $to_head_email = $Email;
      
      if($this->send_email($to_head_email,"","NDP-".$orderid." - Order Confirmation!",$bodyHeaderHead.$bodyBodyHead)){
           
           if($order_detail->payment_status == 2)
		{
			$updated = $this->order_model->change_fullpiad_order_to_neworder(1,0,$orderid);

			if($updated)
			{
				
				echo 'success';	
				
			}
		}else if($order_detail->payment_status == -1)
		{
			$updated = $this->order_model->change_halfpiad_order_to_neworder(0 , 0,$orderid);
			
			if($updated)
			{
				
			echo 'success';				
			}
		}
           
        }
		
		
		
		// echo '<pre>';
		// print_r($or_data);
		// die();
	}
	
	public function unpaidorders_count()
	{
		$mycount =  $this->order_model->get_unpaid_order_count();
		echo $mycount;
	}
	
	
public function neworders_count()
	{
		$mycount =  $this->order_model->get_new_order_count();
		echo $mycount;
	}
	
	public function inprocessorders_count()
	{
		$mycount =  $this->order_model->get_inprocess_order_count();
		echo $mycount;
	}
	
	function send_email($to,$from,$sub,$body) {
        if($from=="")
        $from = "info@nerdpapers.com";
        $to_email = $to;
        //Load email library
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $this->email->from($from, 'no-reply');
        $this->email->to($to_email);
        $this->email->subject($sub);
        $this->email->message($body);
        //Send mail
        if($this->email->send()) {
            //$this->session->set_flashdata("success", "Email Send Successfully.");
            return 1;
        }
        else{
            $this->session->set_flashdata("warning","You have encountered an error");
        echo    $this->email->print_debugger(array('headers'));
        exit;
        return 0;
        }
    }


}
