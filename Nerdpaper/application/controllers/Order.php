<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Order_model');
		
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
	    $data['title'] =  'Order Now - NerdPapers';
		 $data["current_view"] = array("current_view" =>"order");
		$data["mainview"] = 'clientweb/pages/order';

		$this->load->view('clientweb/shared/layout',$data);
	}

	public function reviewOrder()
	{
	    $data['title'] =  'Review Order - NerdPapers';
		$orderId = $this->uri->segment('3');
        $this->db->select("*");
        $this->db->from("order_details");
        $this->db->join("clients",'clients.client_email = order_details.client_email');
        $this->db->where('order_detail_id',$orderId);
        $query_orderlist = $this->db->get();
        $data['order_details'] = $query_orderlist->result();

        // get order files
        $this->db->where('order_id_fk',$orderId);
        $query_file = $this->db->get('order_files');
        $data['files'] = $query_file->result();

		 $data["current_view"] = array("current_view" =>"order");
		$data["mainview"] = 'clientweb/pages/order';

		$this->load->view('clientweb/shared/layout',$data);
	}
	
// 	edit order request from dashboard 
			public function editOrder()
	{
	     $data["title"] = 'Edit - NerdPapers';
		$orderId = $this->uri->segment('3');
        $this->db->select("*");
        $this->db->from("order_details");
        $this->db->join("clients",'clients.client_email = order_details.client_email');
        $this->db->where('order_detail_id',$orderId);
        $query_orderlist = $this->db->get();
        $data['order_details_edit'] = $query_orderlist->result();

        // get order files
        $this->db->where('order_id_fk',$orderId);
        $query_file = $this->db->get('order_files');
        $data['files'] = $query_file->result();

		 $data["current_view"] = array("current_view" =>"order");
		$data["mainview"] = 'clientweb/pages/order';

		$this->load->view('clientweb/shared/layout',$data);
	}
	public function save_payment_data()
	{
	    unset($_SESSION['leadId']);   // unset lead session
	    $orderid = $this->input->post('myorderid');
		$paymentst = $this->Order_model->getorder_with_id($orderid);	
		
		if($paymentst == 2)
		{
			$column = array('order_status' => 0, 'payment_status' => 1);    
    $this->db->where('order_detail_id', $orderid);
    $this->db->update('order_details', $column); 
    echo 'done';

		}else{
			$column = array('order_status' => 0, 'payment_status' => 0);    
    $this->db->where('order_detail_id', $orderid);
	$this->db->update('order_details', $column);
	echo 'done';

		}
	    
	    $data = array(
	            'recipient_name'=>$this->input->post('recipient_name'),
	            'line1'=>$this->input->post('line1'),
	            'city'=>$this->input->post('city'),
	            'state'=>$this->input->post('state'),
	            'postal_code'=>$this->input->post('postal_code'),
	            'country_code'=>$this->input->post('country_code'),
	            'paid_amount'=>$this->input->post('paidamount'),
	            'client_id'=>$this->input->post('sessionid')
	            
	        );
	        
	        $this->db->insert('tbl_payments',$data);
            echo 'success';
            
 $order_detail = $this->Order_model->get_order_details($orderid);

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
                <p>OOur professional writing team is already at work on your project. Here are the order details:<br />
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
          $this->session->set_flashdata('success',"Congrats ! You order has been placed successfully");
           
        }
      else{
        $this->session->set_flashdata('warning',"An Error Occured");
      
      }  
            
            
            
	}


	    public function order_doctype(){
	         $data["title"] = 'Order Doctype - NerdPapers';
        $doctype = $this->uri->segment('3');
        $data['documenttype'] = array("documenttype" =>$doctype);
       
        $data["current_view"] = array("current_view" =>"order");
		$data["mainview"] = 'clientweb/pages/order';

		$this->load->view('clientweb/shared/layout',$data);

    }
    
    
  //   public function payment_done()
  //   {
  //       $data["current_view"] = array("current_view" =>"order");
		// $data["mainview"] = 'clientweb/pages/payment_success';
		// $this->load->view('clientweb/shared/layout');
  //   }

    public function payment()
    {
    	$data['currnet_view'] = array('current_view'=>'paymentsuccess');
    	$data['mainview'] = 'clientweb/pages/paymentsuccess';
    	$this->load->view('clientweb/shared/layout',$data);
    }
    
    public function get_checkbox_bit()
	{
		// echo "<pre>";
		// print_r($_POST);
		// die();
		$orderid = $this->input->post('orderid');
		$this->db->where('order_detail_id',$orderid);
		$paymentstatus = $this->db->get('order_details')->row()->payment_status;
		echo $paymentstatus;

	}
    
    public function update_payment_status()
    {
        // echo "<pre>";
        // print_r($_POST);
        // die();
        $orderdetailid = $this->input->post('order_detail_id');
        
        //$orderprice = $this->input->post('price');
        
        $column = array('payment_status' => 1);    
       $this->db->where('order_detail_id', $orderdetailid);
       $this->db->update('order_details', $column); 
       echo 'full paid';
        
        //echo "working";
    }
    
    public function update_payment_status_to_fullpaid()
    {
        $orderdetailid = $this->input->post('order_detail_id');
       // $orderprice = $this->input->post('price');
        
        $this->db->where('order_detail_id',$orderdetailid);
        
        $column = array('payment_status' => 1);    
       $this->db->where('order_detail_id', $orderdetailid);
       $this->db->update('order_details', $column); 
       echo 'full paid';
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
