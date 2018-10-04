<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class client extends CI_Controller {

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
        $this->load->model('Client_model');
        $this->load->model('Order_model');
        $this->load->library('session');
        $this->load->library('form_validation');

    }

        public function index()
    {
        if (isset($_SESSION['logged_in'])) {
            if(isset($_SESSION["current_view"]))
            {
                redirect('/client/'.$this->session->userdata("current_view"));
            }
            else
                redirect('/home');
        }
        else
            $this->load->view('/home');
    }

        public function getuser()
    {
         $useremail = $this->input->post('email');
         $this->db->where('client_email',$useremail);
       $query = $this->db->get('clients');
       if ($query->num_rows() > 0) {
                 echo 1;
                }
                else
                {
                    echo 0;
                }
        
        
    }

     public function createClient()
    {
        $email = $this->input->post('uemail');
        $pass= $this->input->post('upassword');
        $this->db->where('client_email',$email);
       $query = $this->db->get('clients');
       if ($query->num_rows() > 0) {
        $this->session->set_flashdata('Error', 'username or password required.');
       echo "failed";
     } else {
      // Insert new user
        $data = array(
            'client_name' => $this->input->post('uname'),
            'client_email' => $email,
            'contact' => $this->input->post('ucontact'),
            'password' => $pass,
            'created_at' => date("Y-m-d"),
            'created_by' => $this->input->post('uname')
        );

        $this->Client_model->registerClient($data);
        $user = $this->Client_model->get_user_login($email,$pass);
                    $_SESSION['clientId'] = (string)$user->client_id;
                    $_SESSION['uname'] = (string)$user->client_name;
                    $_SESSION['uemail'] = (string)$user->client_email;
                    $_SESSION['upassword'] = (string)$user->password;
                    $_SESSION['clientId'] = (string)$user->client_id;
                    $_SESSION['clientContact'] = (string)$user->contact;
                    $_SESSION['logged_in'] = (bool)true;

        echo $email;

                    
       }
    }

        public function webclient_login()
    {
        $this->load->library('form_validation');

            $useremail = $this->input->post('uemail');
            $password = $this->input->post('upassword');

            if ($this->Client_model->get_user_login($useremail,$password) !="") {

                //$user_id = $this->user_model->get_user_id_from_username($username);
                $user = $this->Client_model->get_user_login($useremail,$password);
                    
                    $_SESSION['clientId'] = (string)$user->client_id;
                    $_SESSION['uname'] = (string)$user->client_name;
                    $_SESSION['uemail'] = (string)$user->client_email;
                    $_SESSION['upassword'] = (string)$user->password;
                    $_SESSION['clientId'] = (string)$user->client_id;
                    $_SESSION['clientContact'] = (string)$user->contact;
                    $_SESSION['logged_in'] = (bool)true;

                    // user login ok
                    if(!isset($_SESSION["current_view"])) {
                        $data["message"] = 'Successfully logged in';
                        $data["current_view"] = array("current_view" => "home");
                        redirect('/client/orderList');
                    }
                    else
                    {
                        redirect('/Home');
                    }
                //}

            } else {

                // login failed
                $this->session->set_flashdata('Error', 'Wrong username or password .');

                // send error to the view
               redirect('/Home/');
            }
        //}
    }

        public function loginOrder()
    {
        $this->load->library('form_validation');

            $useremail = $this->input->post('uemail');
            $password = $this->input->post('upassword');

            if ($this->Client_model->get_user_login($useremail,$password) !="") {

                //$user_id = $this->user_model->get_user_id_from_username($username);
                $user = $this->Client_model->get_user_login($useremail,$password);
                    
                    $_SESSION['uname'] = (string)$user->client_name;
                    $_SESSION['uemail'] = (string)$user->client_email;
                    $_SESSION['upassword'] = (string)$user->password;
                    $_SESSION['clientId'] = (string)$user->client_id;
                    $_SESSION['clientContact'] = (string)$user->contact;
                    $_SESSION['logged_in'] = (bool)true;

                    // user login ok
                   echo (string)$user->client_email;
                //}

            } else {

                 echo 0;
            }
        //}
    }

        public function logout() {

        // create the data object
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

            // remove session datas
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }

            // user logout ok
            $data["message"] = 'You are logged out.';
            redirect('/Home/');

        } else {

            // there user was not logged in, we cannot logged him out,
            // redirect him to site root
            redirect('/index/1');

        }
    }

    public function addOrder()
    {

        $img = $_FILES['file']['name'];
        $image_path = realpath(APPPATH.'../files/');
        $config = array(
                    'upload_path' => $image_path,
                    'allowed_types' => "gif|jpg|png|jpeg|pdf|doc",
                    'overwrite' => TRUE,
                    'file_name' => $img
                    );
                 // print_r($config);
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('file'))
                    {
                   $this->upload->display_errors();
                   redirect('/order/');
                   }
                   else{
                  $this->upload->do_upload('file');

                  $this->db->select("order_detail_id");
                $this->db->from("order_details");
                $query_recordnum = $this->db->get();
                $row = $query_recordnum->last_row();// To get last record form the table
                $lastId =  $row->order_detail_id +1; 
               $orderId = "NDP-$lastId" ;
              $pstatus = $this->input->post("paymentStatus");
              if($pstatus == 1){
                $paymentStatus = 1;
              }else{
                 $paymentStatus = 0;
              }
              if($this->input->post('document_type1') !=''){
               $documentType = $this->input->post('document_type1');
              }else{
                 $documentType = $this->input->post('document_type');
              }

        $data = array(
            'order_id' => $orderId,
            'lead_id' => $this->input->post('lead_id'),
            'client_email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'acedamic_level' => $this->input->post('acedamic_level'),
            'document_type' => $documentType,
            'end_date' => $this->input->post('end_date'),
            'end_time' => $this->input->post("end_time"),
            'no_of_pages' => $this->input->post("no_of_pages"),
            'no_of_words' => $this->input->post("no_of_words"),
            'title' => $this->input->post('title'),
            'subject' => $this->input->post('changeSubject1'),
            'citation_style' => $this->input->post('citation_style'),
            'name_of_sources' => $this->input->post("name_of_sources"),
            'description' => $this->input->post("description"),
            'order_note' => $this->input->post("description"),
            'file' => $img ,
            'order_price' => $this->input->post("order_price"),
            'payment_status' => $paymentStatus
        );  

      $orderID = $this->Order_model->addOrder($data);
       
      $dataFile = array(
            'file_name' => $img,
            'file_path' => $image_path,
            'order_id_fk' =>  $orderID
            
        );  

      if($this->Order_model->addOrderFile($dataFile)){
        redirect('/Order/reviewOrder/'.$orderID);

      }
    
    }


    }

    public function updateClientOrder()
    {
       $img = $this->input->post('img');
        $image_path = realpath(APPPATH.'../files/');
        $config = array(
                    'upload_path' => $image_path,
                    'allowed_types' => "gif|jpg|png|jpeg|pdf|doc",
                    'overwrite' => TRUE,
                    'file_name' => $img
                    );
                 // print_r($config);
                $this->load->library('upload', $config);
                
                  $this->upload->do_upload('file');
               
              $pstatus = $this->input->post("paymentStatus");
              if($pstatus == 1){
                $paymentStatus = 1;
              }else{
                 $paymentStatus = 0;
              }

             if(($this->input->post('document_type1')) !=''){
               $documentType = $this->input->post('document_type1');
              }else{
                 $documentType = $this->input->post('document_type');
              }
        $data = array(
            'lead_id' => $this->input->post('lead_id'),
            'client_email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'acedamic_level' => $this->input->post('acedamic_level'),
            'document_type' => $documentType,
            'end_date' => $this->input->post('end_date'),
            'end_time' => $this->input->post("end_time"),
            'no_of_pages' => $this->input->post("no_of_pages"),
            'no_of_words' => $this->input->post("no_of_words"),
            'title' => $this->input->post('title'),
            'subject' => $this->input->post('changeSubject1'),
            'citation_style' => $this->input->post('citation_style'),
            'name_of_sources' => $this->input->post("name_of_sources"),
            'description' => $this->input->post("description"),
            'order_note' => $this->input->post("description"),
            'file' => $img ,
            'order_price' => $this->input->post("order_price"),
            'payment_status' => $paymentStatus
        );  

      $orderId = $this->uri->segment('3');
      $this->Order_model->updateOrder($data,$orderId);
   
       redirect('/Order/reviewOrder/'.$orderId);



    }



		public function orderList()
	{
        include "checkSession.php";
        $this->db->select("*");
        $this->db->from("order_details");
        // $this->db->join('clients', 'order_details.client_email = clients.client_email');
        $this->db->where('client_email', $_SESSION['uemail']);
        $this->db->order_by('order_detail_id','DESC');
        $query_orderlist = $this->db->get();
        $data['order_lists'] = $query_orderlist->result();
        // $data['title'] = ucfirst($page);
        $data["current_view"] = array("current_view" => "Dashboard");
        $data['body_title'] = '';
        $data['mainview'] = 'clientdashboard/pages/my_orders';
        $this->load->view('clientdashboard/shared/layout',$data);

	}

		public function orderdetails()
	{
        include "checkSession.php";
       if($this->uri->segment('3')){
        $listId = $this->uri->segment('3');
    }else{
        $listId = $this->input->post('orderid');
    }
        $this->db->select("*");
        $this->db->from("order_details");
        $this->db->where('order_detail_id',$listId);
        $query_orderlist = $this->db->get();
        $data['order_details'] = $query_orderlist->row();

        $data['files'] = $this->Order_model->get_single_order_files($listId);
        
        //$this->load->view('clientdashboard/shared/layout',$data);
        header('Content-Type: application/json');
       echo json_encode($data['order_details']);

	}



	    public function deleteOrder()
    {
       
        $order_id = $this->input->post('orderId');
        $this->Order_model->orderDelete($order_id);
        redirect('/index.php/Home/orderList');
    }

        public function requestRevisions()
    {
        include "checkSession.php";
        $clientEmail = $_SESSION['uemail'];
        $this->db->select("*");
        $this->db->from("revisions");
        $this->db->join('order_details', 'order_details.order_id = revisions.order_id');
        $this->db->join('revision_files', 'revision_files.revision_id = revisions.revision_id','left');
        $this->db->where('order_details.client_email',$clientEmail);
        $query_orderlist = $this->db->get();
        $data['requestRevisions'] = $query_orderlist->result();

        $this->db->select("*");
        $this->db->from("order_details");
        $this->db->where('client_email',$clientEmail);
        $query_revorder = $this->db->get();
        $data['rev_order'] = $query_revorder->result();

        $this->db->select("*");
        $this->db->from("order_details");
        $this->db->join('order_assign', 'order_details.order_detail_id = order_assign.order_id');
        $this->db->join('users', 'users.user_id = order_assign.writer_id');
        $query_assignOrder = $this->db->get();
        $data['assign_order'] = $query_assignOrder->result();

        $data["current_view"] = array("current_view" => "Revisions");
        // $data['title'] = ucfirst($page);
        $data['body_title'] = '';
        $data['mainview'] = 'clientdashboard/pages/request_revisions';
        $this->load->view('clientdashboard/shared/layout',$data);
    }

        public function requestRevisionOrder()  // revision for order-> insert in revisions table
    {
       include "checkSession.php";
        $orderId = $this->input->post('orderId');
        $img = $_FILES['revFile']['name'];
        $image_path = realpath(APPPATH.'../assets/img/files/revisions/');
        $config = array(
                    'upload_path' => $image_path,
                    'allowed_types' => "gif|jpg|png|jpeg|pdf",
                    'overwrite' => TRUE,
                    'file_name' => $img
                    );
                 // print_r($config);
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('revFile'))
                    {
                   $this->upload->display_errors();
                    // $this->load->view('pages/order');
                   }
                   else{
                  $this->upload->do_upload('revFile');
            $data = array(
            'order_id' => $orderId ,
            'writer_id' =>$this->input->post('writerId'), 
            'revision_note' => $this->input->post('revNote'),
             'revision_file' => $img
        );  

        $this->Order_model->requestRevisionOrder($data);
        redirect('/client/requestRevisions');
      }
    }
            public function requestsingleRevision()
    {
        include "checkSession.php";
        $clientEmail = $_SESSION['uemail'];
        
        $this->db->select("*");
        $this->db->from("order_details");
        $this->db->where('client_email',$clientEmail);
        $query_revorder = $this->db->get();
        $data['rev_order'] = $query_revorder->result();


        $data["current_view"] = array("current_view" => "RevisedWork");
        // $data['title'] = ucfirst($page);
        $data['body_title'] = '';
        $data['mainview'] = 'clientdashboard/pages/requestRevision';
        $this->load->view('clientdashboard/shared/layout',$data);
    }


        public function downloadWork()
        {
         include "checkSession.php";

        if($this->session->userdata('uemail'))
        {
           $clientEmail = $this->session->userdata('uemail');

         $data["getDownloadWork"] = $this->Order_model->show_submission_to_client($clientEmail);


            $data["current_view"] = array("current_view" => "downloadWork");
            // $data['title'] = ucfirst($page);
            $data['body_title'] = '';
            $data['mainview'] = 'clientdashboard/pages/downloadWork';
            $this->load->view('clientdashboard/shared/layout',$data);
        }
       }

       public function markRevision()
        {
         include "checkSession.php";

        if($this->session->userdata('uemail'))
        {
            $orderId = $this->uri->segment('3');

         $data["orderId"] =  array("orderId" => $orderId) ;
 

            $data["current_view"] = array("current_view" => "RevisedWork");
            // $data['title'] = ucfirst($page);
            $data['body_title'] = '';
            $data['mainview'] = 'clientdashboard/pages/markRevision';
            $this->load->view('clientdashboard/shared/layout',$data);
        }
       }

        public function myAccount()
    {
        
        $uemail= $this->session->userdata('uemail');
        $account = $this->Client_model->get_user($uemail);
        $data["account"] = array("account" => $account);

        $data["current_view"] = array("current_view" => "myAccount");
        $data['body_title'] = '';
        $data['mainview'] = 'clientdashboard/pages/my_account';
        $this->load->view('clientdashboard/shared/layout',$data);
    }
            public function editAccount()
    {
        
        $data = array(
            'client_name' => $this->input->post('uname'),
            'client_email' => $this->input->post('uemail'),
            'contact' => $this->input->post('contact'),
            'password' => $this->input->post('password'),
            'modified_at' => date("Y-m-d"),
            'modified_by' => $this->input->post('uname')
        );
        $email = $this->input->post('uemail');
        $this->Client_model->update($data,$email);

        redirect('/client/myAccount');
    }

             public function updatePassword()
    {
        
        $data = array(
            'password' => $this->input->post('newpassword'),
            'modified_at' => date("Y-m-d"),
            'modified_by' => $this->input->post('uname')
        );

        $email = $this->input->post('uemail');
        $this->Client_model->update($data,$email);
        redirect('/client/myAccount');
    }


        public function generate_lead()
    {
        
        $data = array(
            'user_name' => $this->input->post('name'),
            'user_email' => $this->input->post('email'),
            'user_phone' => $this->input->post('phone'),
            'document_type' => $this->input->post('documentType'),
            'academic_level' => $this->input->post('academicLevel'),
            'due_date' => $this->input->post('duedate'),
            'no_of_pages' => $this->input->post("no_of_page"),
            'quoted_price' => $this->input->post("quotedPrice"),
            'lead_status' => 0,
            'created_at' => date("Y-m-d"),
            'created_by' => $this->input->post("name")
        );

        $leadId = $this->Client_model->addlead($data);

        echo $leadId;
        // if($result)
        // {
        //     echo "success";
        // }else{
        //     echo "no";
        // }
    }



	
}
