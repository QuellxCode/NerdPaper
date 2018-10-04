<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

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

    $this->load->model('master_model');
    $this->load->model('order_model');
    $this->load->model('writer_model');
    $this->load->library('session');
    if ($this->session->userdata('user_name') === NULL)
    {

      redirect('admin/login','refresh');
    }

  }

  
  public function master_search()
  {
    $data['title'] = 'Master Search';
    $data['writers'] = $this->writer_model->get_all_writers();
    $data['agents'] = $this->writer_model->get_all_agents();
    $data['body_title'] = 'Master Search';
    $data['mainview'] = 'admin/pages/master_search';
    $this->load->view('admin/shared/layout',$data);
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
    $data['mainview'] = 'admin/pages/edit_new_order';
    $this->load->view('admin/shared/layout',$data);
  }

  public function search_term()
  {
    // $search_name = $this->input->post('search_name');
    // $order_filter = $this->input->post('order_status_filter');

    
    // $data['writers'] = $this->writer_model->get_all_writers();
    //    $data['agents'] = $this->writer_model->get_all_agents();
    //    $data['ordername'] =  $this->master_model->testdata($search_name,$order_filter);

    //    echo json_encode($data);

    // die();
    
    $order_id = $this->input->post('order_id');
    $search_name = $this->input->post('search_name');
    $search_email = $this->input->post('search_email');
    $search_phone = $this->input->post('search_phone');
    $order_filter = $this->input->post('order_status_filter');
    $writer_filter = $this->input->post('writer_filter');
    $agent_filter = $this->input->post('agent_filter');

    

    if(!empty($order_id) && empty($search_name)  && empty($search_email) && empty($search_phone) && empty($order_filter) && empty($writer_filter) && empty($agent_filter))
    {
      //get order by order id
      // echo 'working';
      // die();
      // $data['ordername'] = $this->master_model->get_order_by_id($order_id);
      $data['writers'] = $this->writer_model->get_all_writers();
       $data['agents'] = $this->writer_model->get_all_agents();
      $data['ordername'] = $this->master_model->get_order_by_id($order_id);

      // echo '<Pre>';
      // print_r($data['ordername']);
      // die();

      // echo json_encode($data);
     echo json_encode($data);

    } elseif (!empty($order_id) && !empty($search_name)  && empty($search_email) && empty($search_phone) && empty($order_filter) && empty($writer_filter) && empty($agent_filter)) {

      //get order by order id and name
      //$this->master_model->get_order_by_name($order_id,$search_name);
    }elseif (!empty($order_id) && !empty($search_name)  && !empty($search_email) && empty($search_phone) && empty($order_filter) && empty($writer_filter) && empty($agent_filter)) {

      //get order by order id, name, email
      //$this->master_model->get_order_by_name($order_id,$search_name,$search_email);
      
    }elseif (!empty($order_id) && !empty($search_name)  && !empty($search_email) && !empty($search_phone) && empty($order_filter) && empty($writer_filter) && empty($agent_filter)) {

      //get order by order id, name, email,phone
      //$this->master_model->get_order_by_name($order_id,$search_name,$search_email,$search_phone);
      
    }elseif (!empty($order_id) && !empty($search_name)  && !empty($search_email) && !empty($search_phone) && !empty($order_filter) && empty($writer_filter) && empty($agent_filter)) {

      //get order by order id, name, email,phone
      //$this->master_model->get_order_by_name($order_id,$search_name,$search_email,$search_phone,$order_filter);
      
    }elseif (!empty($order_id) && !empty($search_name)  && !empty($search_email) && !empty($search_phone) && !empty($order_filter) && !empty($writer_filter) && empty($agent_filter)) {

      //get order by order id, name, email,phone
      //$this->master_model->get_order_by_name($order_id,$search_name,$search_email,$search_phone,$writer_filter);
      
    }elseif (!empty($order_id) && !empty($search_name)  && !empty($search_email) && !empty($search_phone) && !empty($order_filter) && !empty($writer_filter) && !empty($agent_filter)) {

      //get order by order id, name, email,phone
      //$this->master_model->get_order_by_name($order_id,$search_name,$search_email,$search_phone,$writer_filter,$agent_filter);
      
    }elseif(empty($order_id) && !empty($search_name)  && empty($search_email) && empty($search_phone) && empty($order_filter) && empty($writer_filter) && empty($agent_filter))
    {
       $data['writers'] = $this->writer_model->get_all_writers();
       $data['agents'] = $this->writer_model->get_all_agents();
       $data['ordername'] =  $this->master_model->get_order_by_name($search_name);
      //  echo '<pre>';
      //  print_r($data['ordername']);
      //  die();
      // $data['ordername'] =  $this->master_model->get_order_by_name($search_name);

     // $ordername[] = $writers;

      echo json_encode($data);

    }elseif(empty($order_id) && !empty($search_name)  && !empty($search_email) && empty($search_phone) && empty($order_filter) && empty($writer_filter) && empty($agent_filter))
    {
       $data['writers'] = $this->writer_model->get_all_writers();
       $data['agents'] = $this->writer_model->get_all_agents();
      $data['ordername'] = $this->master_model->get_order_by_name_and_email($search_name,$search_email);

       echo json_encode($data);

    }elseif(empty($order_id) && !empty($search_name)  && !empty($search_email) && !empty($search_phone) && empty($order_filter) && empty($writer_filter) && empty($agent_filter))
    {
      
       $data['writers'] = $this->writer_model->get_all_writers();
       $data['agents'] = $this->writer_model->get_all_agents();

         $data['ordername'] = $this->master_model->get_order_by_name_and_email_phone($search_name,$search_email,$search_phone);

       echo json_encode($data);


       
    }elseif(empty($order_id) && !empty($search_name)  && !empty($search_email) && !empty($search_phone) && !empty($order_filter) && empty($writer_filter) && empty($agent_filter))
    {
      // echo "working";
      // die();

      $data['ordername'] = $this->master_model->getorder_by_name_email_phone_order_filter($search_name,$search_email,$search_phone,$order_filter);
      // echo "<pre>";
      // print_r($data['ordername']);
      // die();
      $data['writers'] = $this->writer_model->get_all_writers();
       $data['agents'] = $this->writer_model->get_all_agents();

       

       echo json_encode($data);


       
    }elseif(empty($order_id) && !empty($search_name)  && !empty($search_email) && !empty($search_phone) && !empty($order_filter) && !empty($writer_filter) && empty($agent_filter))
    {

       $data['ordername'] =  $this->master_model->get_order_by_nep_of_wf($order_filter,$writer_filter);
      $data['writers'] = $this->writer_model->get_all_writers();
       $data['agents'] = $this->writer_model->get_all_agents();
      echo json_encode($data);


       
    }elseif(empty($order_id) && !empty($search_name)  && !empty($search_email) && !empty($search_phone) && !empty($order_filter) && !empty($writer_filter) && !empty($agent_filter))
    {

      $data['ordername'] =  $this->master_model->get_order_by_nep_of_wf_af($order_filter,$writer_filter,$agent_filter);
      $data['writers'] = $this->writer_model->get_all_writers();
       $data['agents'] = $this->writer_model->get_all_agents();
      echo json_encode($data);


       
    }elseif(empty($order_id) && empty($search_name)  && !empty($search_email) && empty($search_phone) && empty($order_filter) &&empty($writer_filter) && empty($agent_filter))
    {


       $data['ordername'] =  $this->master_model->get_order_by_email($search_email);
      $data['writers'] = $this->writer_model->get_all_writers();
       $data['agents'] = $this->writer_model->get_all_agents();
     

      echo json_encode($data);


       
    }elseif(empty($order_id) && empty($search_name)  && !empty($search_email) && !empty($search_phone) && empty($order_filter) &&empty($writer_filter) && empty($agent_filter))
    {


      // $ordername =  $this->master_model->get_order_by_email($search_email,$search_phone);

     

      $data['ordername'] =  $this->master_model->get_order_by_email_phone($search_email,$search_phone);
      $data['writers'] = $this->writer_model->get_all_writers();
       $data['agents'] = $this->writer_model->get_all_agents();

       echo json_encode($data);


       
    }else if(empty($order_id) && empty($search_name)  && empty($search_email) && !empty($search_phone) && empty($order_filter) &&empty($writer_filter) && empty($agent_filter))
    {
      $data['ordername'] =  $this->master_model->get_order_by_phone($search_phone);
      $data['writers'] = $this->writer_model->get_all_writers();
       $data['agents'] = $this->writer_model->get_all_agents();

       echo json_encode($data);
    }else if(empty($order_id) && empty($search_name)  && !empty($search_email) && empty($search_phone) && !empty($order_filter) &&empty($writer_filter) && empty($agent_filter))
    {
      $data['ordername'] =  $this->master_model->get_order_by_email_order_filter($search_email,$order_filter);
      $data['writers'] = $this->writer_model->get_all_writers();
       $data['agents'] = $this->writer_model->get_all_agents();
       echo json_encode($data);
     }else if(empty($order_id) && !empty($search_name)  && empty($search_email) && empty($search_phone) && !empty($order_filter) &&empty($writer_filter) && empty($agent_filter))
     {
      
      $data['ordername'] =  $this->master_model->get_order_by_name_order_filter($search_name,$order_filter);
      $data['writers'] = $this->writer_model->get_all_writers();
       $data['agents'] = $this->writer_model->get_all_agents();
       echo json_encode($data);
     }else if(empty($order_id) && !empty($search_name)  && empty($search_email) && empty($search_phone) && !empty($order_filter) && !empty($writer_filter) && empty($agent_filter))
     {
      
      $data['ordername'] =  $this->master_model->get_order_by_name_order_filter_writer_filter($search_name,$order_filter,$writer_filter);
      $data['writers'] = $this->writer_model->get_all_writers();
       $data['agents'] = $this->writer_model->get_all_agents();
       echo json_encode($data);
     }
      // else if(empty($order_id) && !empty($search_name)  && !empty($search_email) && !empty($search_phone) && !empty($order_filter) &&!empty($writer_filter) && empty($agent_filter))

    // {
      

      
    // }









    // if(!empty($search_name) && empty($search_email)  && empty($search_phone))
    // {

    //  $ordername =  $this->master_model->get_order_by_name($search_name);

    //   echo json_encode($ordername);

    // }else if (!empty($search_name) && !empty($search_email)  && empty($search_phone)){

    //   $order_name_email = $this->master_model->get_order_by_name_and_email($search_name,$search_email);

    //    echo json_encode($order_name_email);
    // } else if(!empty($search_name) && !empty($search_email)  && !empty($search_phone))
    // {

    //   $order_name_email_phone = $this->master_model->get_order_by_name_and_email_phone($search_name,$search_email,$search_phone);

    //    echo json_encode($order_name_email_phone);

    // } elseif (empty($search_name) && !empty($search_email)  && empty($search_phone)) {
      
    //   echo "name and phone empty";

    // } elseif (empty($search_name) && !empty($search_email)  && !empty($search_phone)) {
    //   # code...
    // }
  }
  


}
