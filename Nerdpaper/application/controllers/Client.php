<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class client extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
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
                redirect('/Client/'.$this->session->userdata("current_view"));
            }
            else
                redirect('/Home');
        }
        else
            $this->load->view('/Home');
    }

        public function getuser()
    {
        // echo "<pre>";
        // print_r($_POST);
        // die();

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

           public function createClientWeb()
    {
        
        $email = $this->input->post('uemail');
        $pass= $this->input->post('upassword');
        $pass2= $this->input->post('upassword2');
        // echo $pass;
        // echo '<br>';
        // echo $pass2;
        // die();
        if($pass != $pass2)
        {
        //     echo "workings";
        // die();
            $this->session->set_flashdata('wrongpassword', 'This is my message');
            redirect('/Home');
        }
        $this->db->where('client_email',$email);
        $query = $this->db->get('clients');
        if ($query->num_rows() > 0) {
        $this->session->set_flashdata('warning',"Sorry! Email already Exists");
         redirect('/Home');
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

         // Auto responder //
       $bodyHeaderHead = "<b>Welcome to Nerdpapers.com</b>";
       $bodyBodyHead = "<br>
            <br> Your account has been successfully registered.
            <br>
            <p>You can place your order anytime by visiting the <a href="."https://nerdpapers.com/index.php/Order "." >Order Now</a> Page and our expert writers will provide you with a premium quality work.</p>
           <p>If you have any queries please do not hesistate to reach out at <a href="."https://nerdpapers.com/index.php/Contactus "." >Contact Us </a> page on our website.</p>
            
            <p>Thanks,
            <br />NerdPapers Team</p>";

      $to_head_email = $_SESSION['uemail'];
      
      if($this->send_email($to_head_email,"noreply@nerdpapers.com","Welcome to Nerdpapers.com",$bodyHeaderHead.$bodyBodyHead)){
           $this->session->set_flashdata('success',"Congrats ! You are Registered Successfully");
           redirect('Client/orderList');
        }
       else{
        $this->session->set_flashdata('warning',"An Error Occured");
       redirect('Home');
       }

                    
       }
    }

     public function createClient()
    {
        $email = $this->input->post('uemail');
        $pass= $this->input->post('upassword');
        $this->db->where('client_email',$email);
       $query = $this->db->get('clients');
       if ($query->num_rows() > 0) {
        $this->session->set_flashdata('warning',"Sorry! Email already Exists");
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
                    
 // Auto responder //
         $bodyHeaderHead = "<b>Welcome to Nerdpapers.com</b>";
       $bodyBodyHead = "<br>
            <br> Your account has been successfully registered.
            <br>
            <p>You can place your order anytime by visiting the <a href="."https://nerdpapers.com/index.php/Order"." >Order Now</a> Page and our expert writers will provide you with a premium quality work.</p>
           <p>If you have any queries please do not hesistate to reach out at <a href="."https://nerdpapers.com/index.php/Contactus"." >Contact Us </a> page on our website.</p>
            
            <p>Thanks,
            <br />NerdPapers Team</p>";

      $to_head_email = $email;
      
    //  $this->send_email($to_head_email,"noreply@nerdpapers.com","Welcome to Nerdpapers.com",$bodyHeaderHead.$bodyBodyHead);   
     
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

                        $this->session->set_flashdata('success',"You are logged-in Successfully");
                        redirect('Client/orderList');
                        
                    }
                    else
                    {
                         $this->session->set_flashdata('warning',"Email OR Password is incorrect");
                        redirect('Home');
                    }
                //}

            } else {

                // login failed
                 $this->session->set_flashdata('warning',"Email OR Password is incorrect");

                // send error to the view
               redirect('/Home/');
            }
        //}
    }

// Client login during order placed in after step 2

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
            $this->session->set_flashdata('success',"Logged-out successfully");
            redirect('/Home/');

        } else {

            // there user was not logged in, we cannot logged him out,
            // redirect him to site root
            $this->session->set_flashdata('warning',"Sorry! Error Occured");
            redirect('/index/1');

        }
    }

// Add order
    public function addOrder()
    {
        // echo "working";
        // die();
               
                $this->db->select("order_detail_id");
                $this->db->from("order_details");
                $query_recordnum = $this->db->get();
                $row = $query_recordnum->last_row();// To get last record form the table
                $lastId =  $row->order_detail_id +1; 
                $orderId = "NDP-$lastId" ;
                $pstatus = $this->input->post("paymentStatus");
             if($pstatus ==  1 || $pstatus == 'on'){
                $paymentStatus = -1;
              }else{
                 $paymentStatus = 2;
              }
              if($this->input->post('document_type1') !=''){
               $documentType = $this->input->post('document_type1');
              }else if($this->input->post('document_type') !=''){
                 $documentType = $this->input->post('document_type');
              }else{
                  $documentType = '';
              }
              
            $leadId          = $_SESSION['leadId'];
            $clientName      = $this->input->post('clientName');
            $clientEmail     = $this->input->post('email');
            $clientPhone     = $this->input->post('phone');
            $acedamicLevel   = $this->input->post('acedamic_level');
            $orderDueDate    = $this->input->post('end_date');
            $orderDueTime    = $this->input->post('end_time');
            $orderPages      = $this->input->post("no_of_pages");
            $orderWords      = $this->input->post("no_of_words");
            $orderTitle      = $this->input->post('title');
            $orderSubject    = $this->input->post('changeSubject12');
            $orderCitation   = $this->input->post('citation_style');
            $orderSources    = $this->input->post("name_of_sources");
            $orderDescription  = $this->input->post("description");
            $orderPrice      = $this->input->post("order_price");
            $orderBy         = $this->input->post('clientName');
              
       date_default_timezone_set('America/Los_Angeles');
       $current_date = date('Y-m-d H:i:s');
        $data = array(
            'order_id' => $orderId,
            'lead_id' => $leadId,
            'client_name' => $clientName,
            'client_email' => $clientEmail,
            'phone' => $clientPhone,
            'acedamic_level' => $acedamicLevel,
            'document_type' => $documentType,
            'end_date' => $orderDueDate ,
            'end_time' => $orderDueTime,
            'no_of_pages' => $orderPages,
            'no_of_words' => $orderWords,
            'title' => $orderTitle,
            'subject' => $orderSubject,
            'citation_style' => $orderCitation,
            'name_of_sources' => $orderSources,
            'description' => $orderDescription,
            'order_note' => $orderDescription,
            'file' => '' ,
            'order_price' => $orderPrice,
            'payment_status' => $paymentStatus,
            'order_status' => 6,
            'created_at'=> $current_date,
            'created_by' => $clientName
        ); 
        
      $orderID = $this->Order_model->addOrder($data);

      $file_path = realpath(APPPATH . '../../subdomains/admin.writersverge/documents');
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++)
            {
                      $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                      $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                      $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                      $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                      $_FILES['file']['size']     = $_FILES['files']['size'][$i];

                      $file_name  = $_FILES['file']['name'];
                      if($filesCount >0 )
                     {


                        // File upload configuration
                        $uploadPath = $file_path;
                        $config['upload_path'] = $uploadPath;
                        $config['allowed_types'] = '*';
                        $config['overwrite'] = TRUE;
                        
                        // Load and initialize upload library
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        
                        // Upload file to server
                        if(!$this->upload->do_upload('file')){
                        
                            // Uploaded file data
                           $this->session->set_flashdata('warning',$this->upload->display_errors());
                        }else{
                        $fileData =$this->upload->data();
                        $uploadData[$i]['file_name'] = $fileData['file_name'];
                              $dataFile = array(
                                'file_name' => $file_name,
                                  'file_path' => $uploadData[$i]['file_name'],
                                   'order_id_fk' =>  $orderID
                              );

                              $this->Order_model->addOrderFile($dataFile);
                      // if end
                            }
                            // if(filescount) end
                        }
             // foreach end
             }
      
//   $this->session->set_flashdata('success',"Thanks For your Order, Please checkout it immediately");
      
        redirect('/Order/reviewOrder/'.$orderID);
    }

    // Edit Client Order

        public function updateClientOrder()
  {
        include "checkSession.php";
        
        $orderId = $this->uri->segment('3');
        $img = $this->input->post('img');
        if(!empty($_FILES['files']['tmp_name']))
        {
           $this->Order_model->deleteOrderFiles($orderId);
           $file_path = realpath(APPPATH . '../../subdomains/admin.writersverge/documents');
           $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++)
            {
                      $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                      $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                      $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                      $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                      $_FILES['file']['size']     = $_FILES['files']['size'][$i];

                      $file_name  = $_FILES['file']['name'];
                      if($filesCount >0 )
                     {
                        // File upload configuration
                        $uploadPath = $file_path;
                        $config['upload_path'] = $uploadPath;
                        $config['allowed_types'] = '*';
                        $config['overwrite'] = TRUE;
                        
                        // Load and initialize upload library
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        
                        // Upload file to server
                        if(!$this->upload->do_upload('file')){
                            // Uploaded file data
                           $this->session->set_flashdata('warning',$this->upload->display_errors());
                        }else{
                        $fileData =$this->upload->data();
                        $uploadData[$i]['file_name'] = $fileData['file_name'];
                              $dataFile = array(
                                'file_name' => $file_name,
                                  'file_path' => $uploadData[$i]['file_name'],
                                   'order_id_fk' =>  $orderId
                              );

                              $this->Order_model->addOrderFile($dataFile);
                      // if end
                            }
                            // if(filescount) end
                        }
             // foreach end
             }

         }
   
               
                            $pstatus = $this->input->post("paymentStatus");
                            if($pstatus ==  1 || $pstatus == 'on'){
                              $paymentStatus = -1;
                            }else{
                               $paymentStatus = 2;
                            }

                           if(($this->input->post('document_type1')) !=''){
                             $documentType = $this->input->post('document_type1');
                            }else{
                               $documentType = $this->input->post('document_type');
                            }
                            
                     date_default_timezone_set('America/Los_Angeles');
                     $current_date = date('Y-m-d H:i:s');
                      $data = array(
                          'lead_id' => $this->input->post('lead_id'),
                          'client_name' => $this->input->post('clientName'),
                          'client_email' => $this->input->post('email'),
                          'phone' => $this->input->post('phone'),
                          'acedamic_level' => $this->input->post('acedamic_level'),
                          'document_type' => $documentType,
                          'end_date' => $this->input->post('end_date'),
                          'end_time' => $this->input->post("end_time"),
                          'no_of_pages' => $this->input->post("no_of_pages"),
                          'no_of_words' => $this->input->post("no_of_words"),
                          'title' => $this->input->post('title'),
                          'subject' => $this->input->post('changeSubject12'),
                          'citation_style' => $this->input->post('citation_style'),
                          'name_of_sources' => $this->input->post("name_of_sources"),
                          'description' => $this->input->post("description"),
                          'order_note' => $this->input->post("description"),
                          'file' => '' ,
                          'order_price' => $this->input->post("order_price"),
                          'payment_status' => $paymentStatus,
                          'order_status' => 6,
                          'updated_at' => $current_date,
                          'updated_by' => $_SESSION['uname']
                      );  
                      $data1 = array(
                          'client_name' => $this->input->post('clientName')
                          
                      );  
                    $orderId = $this->uri->segment('3');
                    $this->Order_model->updateOrder($data,$orderId);

                      $cemail = $this->input->post('email');
                      $this->db->set($data1);
                      $this->db->where("client_email", $cemail);
                      $this->db->update("clients", $data1);
                 
                     $this->session->set_flashdata('success',"Order Updated successfully");
                     redirect('/Order/reviewOrder/'.$orderId);



    }



        public function orderList()
    {
        $data["title"] = 'Order History - NerdPapers';
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
        $orderId = $this->uri->segment('3');
    }else{
        $orderId = $this->input->post('orderid');
    }
        $this->db->select("*");
        $this->db->from("order_details");
        $this->db->join("order_files","order_details.order_detail_id= order_files.order_id_fk");
        $this->db->where('order_detail_id',$orderId);
        $this->db->group_by("order_details.order_detail_id");
        $query_orderlist = $this->db->get();
        $data['order_details'] = $query_orderlist->row();

        //$data['files'] = $this->Order_model->get_single_order_files($orderId);

        //$this->load->view('clientdashboard/shared/layout',$data);
        header('Content-Type: application/json');
       echo json_encode($data['order_details']);

    }



        public function deleteOrder()
    {
       
        $order_id = $this->input->post('orderId');
        $this->Order_model->orderDelete($order_id);
        $this->session->set_flashdata('success',"Order Deleted successfully");
        redirect('/index.php/Home/orderList');
    }

        public function requestRevisions()
    {
        $data["title"] = 'Revised Work - NerdPapers';
        include "checkSession.php";
        $clientEmail = $_SESSION['uemail'];
        $this->db->select("*");
        $this->db->from("revised_work");
        $this->db->join('order_details', 'order_details.order_detail_id = revised_work.order_id');
        $this->db->join('revised_work_files', 'revised_work_files.revised_work_id = revised_work.revised_work_id');
        $this->db->group_by('revised_work.revision_id');
        $this->db->order_by('revised_work.revised_work_id', 'DESC');
        $this->db->where('order_details.client_email',$clientEmail);
        $this->db->where('revised_work.status',1);
        $query_orderlist = $this->db->get();
        $data['requestRevisions'] = $query_orderlist->result();

        $this->db->select("*");
        $this->db->from("order_details");
        $this->db->where('client_email',$clientEmail);
        $this->db->where('payment_status',1);
        $query_revorder = $this->db->get();
        $data['rev_order'] = $query_revorder->result();

        $this->db->select("*");
        $this->db->from("order_details");
        $this->db->join('order_assign', 'order_details.order_detail_id = order_assign.order_id');
        $this->db->join('users', 'users.user_id = order_assign.writer_id');
        $query_assignOrder = $this->db->get();
        $data['assign_order'] = $query_assignOrder->result();

        $data["current_view"] = array("current_view" => "Revisions");
        $data['title'] = 'Mark Revision';
        $data['body_title'] = '';
        $data['mainview'] = 'clientdashboard/pages/request_revisions';
        $this->load->view('clientdashboard/shared/layout',$data);
    }
    

        public function requestRevisionOrder()  // revision for order-> insert in revisions table
    {
       include "checkSession.php";
        $orderId = $this->input->post('orderId');
        $writerId = $this->input->post('writerId');
         $dataStatus = array(
            'show_submission_client' => 1
        );  

        $orderStatus = array(
            'order_status' => 1
        ); 
        $this->db->set($orderStatus);
        $this->db->where("order_detail_id", $orderId);
        $this->db->update("order_details", $orderStatus);
        
        $this->db->set($dataStatus);
        $this->db->where("order_id", $orderId);
        $this->db->update("submissions", $dataStatus);

        if($writerId == ''){
            $this->db->select("*");
        $this->db->from("order_details");
        $this->db->join('order_assign', 'order_details.order_detail_id = order_assign.order_id');
        $this->db->where('order_assign.order_id',$orderId);
        $query_writerId = $this->db->get();
        $writerassign = $query_writerId->row();
        $writerId = $writerassign->writer_id;
        }

        $this->db->select("*");
        $this->db->from("revisions");
        $this->db->where('order_id',$orderId);
        $query_revisions = $this->db->get();
        $num = $query_revisions->num_rows();
        $revisions_id = $num+1;  // get next revision #
        
       date_default_timezone_set('America/Los_Angeles');
       $current_date = date('Y-m-d H:i:s');
            $data = array(
            'order_id' => $orderId ,
            'revision_no' => $revisions_id ,
            'writer_id' =>$writerId, 
            'revision_note' => $this->input->post('revNote'),
            'created_at_pacific' => $current_date,
            'status' =>0
        );  

        $r_id = $this->Order_model->requestRevisionOrder($data);
        
   // Uploading Files 
           $file_path = realpath(APPPATH . '../../subdomains/admin.writersverge/documents');
            $filesCount = count($_FILES['revFile']['name']);
            for($i = 0; $i < $filesCount; $i++)
            {
                $_FILES['file']['name']     = $_FILES['revFile']['name'][$i];
                $_FILES['file']['type']     = $_FILES['revFile']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['revFile']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['revFile']['error'][$i];
                $_FILES['file']['size']     = $_FILES['revFile']['size'][$i];

                $file_name  = $_FILES['file']['name'];
                if($filesCount >0 )
               {


                // File upload configuration
                $uploadPath = $file_path;
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = '*';
                $config['overwrite'] = TRUE;
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if(!$this->upload->do_upload('file')){
                    // Uploaded file data
                   $this->session->set_flashdata('warning',$this->upload->display_errors());
                }else{
                  $fileData =$this->upload->data();
                  $uploadData[$i]['file_name'] = $fileData['file_name'];
                      $data = array(
                          'revision_file_name' =>$file_name,
                           'revision_file_path' => $uploadData[$i]['file_name'],
                           'revision_id' => $r_id
                        );

                    $this->Order_model->save_revision_data($data);
                   
                    }
                  }

                }

       
    

         // Auto responder //
        $bodyHeaderHead = "<b>Hello ,</b>";
        $bodyBodyHead = "<br>
            <br> Your request for revision regarding your work has been successfully placed at nerdpapers.com. We are going through your revision request and we will get back to you as soon as possible. .
            <br>
            <br>
          
            <p>We pride ourselves on customer satisfaction and your patience is appreciated. Thanks for placing your trust in nerdpapers.com</p>
            <br/>
            
            <p>Regards,
            <br/>NerdPapers.com Team</p>";

      $to_head_email =$_SESSION['uemail'];

      
      $this->send_email($to_head_email,"info@nerdpapers.com","NDP-".$orderId." - Revision Request Received.",$bodyHeaderHead.$bodyBodyHead);
        $this->session->set_flashdata('success',"Revision Marked successfully");
        redirect('Client/requestRevisions');

    }
            
            public function requestsingleRevision()
    {
        $data["title"] = 'Request Revision - NerdPapers';
        include "checkSession.php";
        $clientEmail = $_SESSION['uemail'];
        
        $this->db->select("*");
        $this->db->from("order_details");
        $this->db->join('order_assign', 'order_details.order_detail_id = order_assign.order_id');
        $this->db->where('client_email',$clientEmail);
        $this->db->where('payment_status',1);
        $this->db->group_by('order_details.order_id');
        $query_revorder = $this->db->get();
        $data['rev_order'] = $query_revorder->result();


        $data["current_view"] = array("current_view" => "RevisedWork");
        $data['title'] = 'Mark Revision';
        $data['body_title'] = '';
        $data['mainview'] = 'clientdashboard/pages/requestRevision';
        $this->load->view('clientdashboard/shared/layout',$data);
    }


        public function downloadWork()
        {
            $data["title"] = 'Download Work - NerdPapers';
            
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
            $writerId = $this->uri->segment('4');

         $data["orderId"] =  array("orderId" => $orderId) ;
         $data["writerId"] =  array("writerId" => $writerId) ;
 

            $data["current_view"] = array("current_view" => "RevisedWork");
             $data['title'] = 'Mark Revision';
            $data['body_title'] = '';
            $data['mainview'] = 'clientdashboard/pages/markRevision';
            $this->load->view('clientdashboard/shared/layout',$data);
        }
       }

        public function myAccount()
    {
        $data["title"] = 'My Account - NerdPapers';
        
        $uemail= $this->session->userdata('uemail');
        $account = $this->Client_model->get_user($uemail);
        $data["account"] = array("account" => $account);
        $data['title'] = 'Mark Revision';
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

        $this->session->set_flashdata('success',"Record Updated successfully");
        redirect('/Client/myAccount');
    }

             public function updatePassword()
    {
       
       $oldpassword = $this->input->post('oldpassword');
        $password = $this->input->post('password');
        $repassword = $this->input->post('repassword');
        $userid = $this->input->post('userid');

        if($password != $repassword)
        {
            $this->session->set_flashdata('password','password do not match');
            redirect('/Client/myAccount');
        }else{
            $pwd = $this->Client_model->getoldpassword($userid);

            if($pwd == $oldpassword)
            {
               $updated = $this->Client_model->update_password($password,$userid);
               if($updated)
               {
                $this->session->set_flashdata('updatepassword','password do not match');
                redirect('/Client/myAccount');
               }
            }else{
                $this->session->set_flashdata('oldpassword','password do not match');
                redirect('/Client/myAccount');
            }
            
        }
    }


        public function generate_lead()
    {
        
      date_default_timezone_set('America/Los_Angeles');
       $current_date = date('Y-m-d H:i:s');
        $data = array(
            'user_name' => $this->input->post('name'),
            'user_email' => $this->input->post('email'),
            'user_phone' => $this->input->post('phone'),
            'document_type' => $this->input->post('documentType'),
            'academic_level' => $this->input->post('academicLevel'),
            'due_date' => $this->input->post('duedate'),
            'lead_due_time'=> $this->input->post('duetime'),
            'no_of_pages' => $this->input->post("no_of_page"),
            'quoted_price' => $this->input->post("quotedPrice"),
            'lead_status' => 0,
            'created_at' => $current_date,
            'created_by' => $this->input->post("name")
        );

       if(isset($_SESSION['leadId'])){

          $leadId1 = $this->Client_model->updatelead($data,$_SESSION['leadId']);
       echo $leadId1;
        }else{
          $leadId = $this->Client_model->addlead($data);
          echo $leadId;
        }
        

    }


    function recoveryPassword() {
        $recovEmail =$this->input->post("recEmail");
        $userrec = $this->Client_model->get_user_data($recovEmail);
        if($userrec != ''){
       $recPass = (string)$userrec->password;
        $userName = (string)$userrec->client_name;
         // Auto responder //
       $bodyHeaderHead = "<b>Welcome to Nerdpapers.com</b>";
       $bodyBodyHead = "<br>Hello , <br/>
            <br> We have recovered your account at  <a href="."http://nerdpapers.com"." >NerdPapers.com </a>. Your credentials are as follows:
            <br/>
            <p>Username :  <u>".$recovEmail." </u><br/>  Password : <u>".$recPass."</u>
                <br/><br/>
            Please do not share your credentials with anyone.
            <br/>
            <br/>
            <p>Regards,
            <br />NerdPapers Team</p>";
      $to_head_email = $recovEmail;
      
      if($this->send_email($to_head_email,"noreply@nerdpapers.com","Nerdpapers.com - Forgot Password?",$bodyHeaderHead.$bodyBodyHead)){
           $this->session->set_flashdata('success',"Congrats ! Your Password has been Successfully Recovered. Check Your Email.");
           redirect('Home');
        }
       else{
        $this->session->set_flashdata('warning',"An Error Occured");
       redirect('Home');
       }
   }else {

                // login failed
                 $this->session->set_flashdata('warning',"Email is incorrect");

                // send error to the view
               redirect('/Home/');
            }




    }



// Contact us controller

       function contactUs() {
        $cname =$this->input->post("cname");
        $cemail =$this->input->post("cemail");
        $csubject =$this->input->post("csubject");
        $cmessage =$this->input->post("cmessage");
        

         // Auto responder //
       $bodyHeaderHead = "<b>Welcome To Nerdpapers.com</b>";
       $bodyBodyHead = "<p>
       <ul>
       <li>Name: ".$cname." </li>
       <li>Email: ".$cemail." </li>
       <li>Subject: ".$csubject." </li>
       <li> Message: ".$cmessage."</li>
       </ul>
       </p>
       <br/>

<p>Thanks for contacting us with your details, We will try to resolve your query as soon as possible. If it is something urgent, do not hesitate to contact us through Live Chat on our website.</p>
<br/>
<p>Thanks, <br/>NerdPapers Team</p>";

      $bodyBodyHead1 = "<p>
       <ul>
       <li>Name: ".$cname." </li>
       <li>Email: ".$cemail." </li>
       <li>Subject: ".$csubject." </li>
       <li> Message: ".$cmessage."</li>
       </ul>
       </p>";

       $to_head_email = $cemail;
       $to_head2_email = "info@nerdpapers.com";

     $this->send_email($to_head_email,"noreply@nerdpapers.com","We've received your message at NerdPapers",$bodyHeaderHead.$bodyBodyHead);

    $this->send_email($to_head2_email,"info@nerdpapers.com","Nerdpapers.com - Message Received",$bodyHeaderHead.$bodyBodyHead1);

    $this->session->set_flashdata('success',"Thank You for your message. We've received your message and our respondants will reply soon.");

           redirect('Home');
        
  
    }

// email send controller
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

// downloadwork notifications
        public function downloadworkNotifications()
        {
          $clientEmail = $this->session->userdata('uemail');
         $dworkcount = $this->Order_model->total_submissions($clientEmail);
         echo  $dworkcount ;
        }

           public function updateWorkNotification()
        {
          $dataStatus = array(
            'show_submission_client' => 1
        ); 
         $submission_id = $this->input->post('submissionID');
         $this->Order_model->update_total_submissions($submission_id,$dataStatus);
         echo $submission_id;
        }
// Revisedwork notifications
        public function revisedworkNotifications()
        {
         $clientEmail = $this->session->userdata('uemail');
         $rworkcount = $this->Order_model->total_revisions($clientEmail);
         echo  $rworkcount ;
        }
  public function updaterevisedWorkNotification()
        {
          $dataStatus = array(
            'status' => 1
        ); 
         $revision_id = $this->input->post('revisionID');
         $this->Order_model->update_total_rivisions($revision_id,$dataStatus);
         echo $revision_id;
        }
    public function orderFiles()
        {
        // get order files
          $orderId = $this->input->post('orderid');
        $this->db->where('order_id_fk',$orderId);
        $query_file = $this->db->get('order_files');
        $data['files'] = $query_file->result();
        header('Content-Type: application/json');
       echo json_encode($data['files']);
        //print_r($data['files']);
      }

    
}
