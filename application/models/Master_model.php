<?php


class Master_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    
    public function get_order_by_name($name)
    {
        // $this->db->select('order_details.*');
        // $this->db->select('order_details.*');
        // $this->db->from('order_details');
        // $this->db->where('client_name', $name);
        // $res = $this->db->get()->result();

        // return $res;

         $this->db->select('order_details.*', false);
         $this->db->select('order_details.created_at, DATE_FORMAT(order_details.created_at, "%d-%m-%Y %h:%i:%s")  AS added_date ');
       $this->db->select('order_assign.writer_id', false);
       $this->db->select('order_assign.order_id', false);
       $this->db->select('order_assign.writer_due_date', false);
       $this->db->select('users.user_id', false);
       $this->db->select('users.user_name', false);
     
        $this->db->from('order_details');
       $this->db->where('order_details.client_name',$name);
      // $this->db->where('users.user_id',$writer_status);
     //  $this->db->where('revisions.status',0);

       //$this->db->where('')

       $this->db->join('order_assign', 'order_assign.order_id  =  order_details.order_detail_id ', 'left');
       $this->db->join('users', 'users.user_id  =  order_assign.writer_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


       $this->db->order_by('order_details.order_detail_id', ' AESC');

       $query_result = $this->db->get();
       $result = $query_result->result();

       // echo "<pre>";
       // print_r($result);
       // die();
       return $result;
    }

    public function get_order_by_name_and_email($name,$email)
    {
        // $this->db->where('client_name', $name);
        // $this->db->where('client_email', $email);
        // $res = $this->db->get('order_details')->result();

        // return $res;

       $this->db->select('order_details.*', false);
         $this->db->select('order_details.created_at, DATE_FORMAT(order_details.created_at, "%d-%m-%Y %h:%i:%s")  AS added_date ');
       $this->db->select('order_assign.writer_id', false);
       $this->db->select('order_assign.order_id', false);
       $this->db->select('order_assign.writer_due_date', false);
       $this->db->select('users.user_id', false);
       $this->db->select('users.user_name', false);
       $this->db->from('order_details');
       $this->db->where('order_details.client_name',$name);
       $this->db->where('order_details.client_email',$email);
       $this->db->join('order_assign', 'order_assign.order_id  =  order_details.order_detail_id ', 'left');
       $this->db->join('users', 'users.user_id  =  order_assign.writer_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


       $this->db->order_by('order_details.order_detail_id', ' AESC');

       $query_result = $this->db->get();
       $result = $query_result->result();

       // echo "<pre>";
       // print_r($result);
       // die();
       return $result;


    }

    public function get_order_by_name_and_email_phone($name,$email,$phone)
    {
        // $this->db->where('client_name', $name);
        // $this->db->where('client_email', $email);
        // $this->db->where('phone', $phone);
        // $res = $this->db->get('order_details')->result();

        // return $res;
      $this->db->select('order_details.*', false);
         $this->db->select('order_details.created_at, DATE_FORMAT(order_details.created_at, "%d-%m-%Y %h:%i:%s")  AS added_date ');
       $this->db->select('order_assign.writer_id', false);
       $this->db->select('order_assign.order_id', false);
       $this->db->select('order_assign.writer_due_date', false);
       $this->db->select('users.user_id', false);
       $this->db->select('users.user_name', false);
       $this->db->from('order_details');
       $this->db->where('order_details.client_name',$name);
       $this->db->where('order_details.client_email',$email);
       $this->db->where('order_details.phone',$phone);
       $this->db->join('order_assign', 'order_assign.order_id  =  order_details.order_detail_id ', 'left');
       $this->db->join('users', 'users.user_id  =  order_assign.writer_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


       $this->db->order_by('order_details.order_detail_id', ' AESC');

       $query_result = $this->db->get();
       $result = $query_result->result();

       // echo "<pre>";
       // print_r($result);
       // die();
       return $result;

    }

    public function getorder_by_name_email_phone_order_filter($search_name,$search_email,$search_phone,$order_filter)
    {

        $this->db->where('client_name', $search_name);
        $this->db->where('client_email', $search_email);
        $this->db->where('phone', $search_phone);
        $this->db->where_in('order_status', $order_filter);
        $res = $this->db->get('order_details')->result();
        return $res;

    }
    // public function getorder_by_name_email_phone_order_filter($search_name,$search_email,$search_phone,$order_filter)
    // {

    // }

    public function get_order_by_email($search_email)
    {

        // $this->db->where('client_email', $search_email);

        // $res = $this->db->get('order_details')->result();

        // return $res;

      $this->db->select('order_details.*', false);
         $this->db->select('order_details.created_at, DATE_FORMAT(order_details.created_at, "%d-%m-%Y %h:%i:%s")  AS added_date ');
       $this->db->select('order_assign.writer_id', false);
       $this->db->select('order_assign.order_id', false);
       $this->db->select('order_assign.writer_due_date', false);
       $this->db->select('users.user_id', false);
       $this->db->select('users.user_name', false);
       $this->db->from('order_details');
       $this->db->where('order_details.client_email',$search_email);
       $this->db->join('order_assign', 'order_assign.order_id  =  order_details.order_detail_id ', 'left');
       $this->db->join('users', 'users.user_id  =  order_assign.writer_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


       $this->db->order_by('order_details.order_detail_id', ' AESC');

       $query_result = $this->db->get();
       $result = $query_result->result();

       // echo "<pre>";
       // print_r($result);
       // die();
       return $result;

    }

    public function get_order_by_email_phone($search_email,$search_phone)
    {

        // $this->db->where('client_email', $search_email);
        // $this->db->where('phone', $search_phone);

        // $res = $this->db->get('order_details')->result();

        // return $res;

      $this->db->select('order_details.*', false);
         $this->db->select('order_details.created_at, DATE_FORMAT(order_details.created_at, "%d-%m-%Y %h:%i:%s")  AS added_date ');
       $this->db->select('order_assign.writer_id', false);
       $this->db->select('order_assign.order_id', false);
       $this->db->select('order_assign.writer_due_date', false);
       $this->db->select('users.user_id', false);
       $this->db->select('users.user_name', false);
       $this->db->from('order_details');
       $this->db->where('order_details.client_email',$search_email);
       $this->db->where('order_details.phone',$search_phone);
       $this->db->join('order_assign', 'order_assign.order_id  =  order_details.order_detail_id ', 'left');
       $this->db->join('users', 'users.user_id  =  order_assign.writer_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


       $this->db->order_by('order_details.order_detail_id', ' AESC');

       $query_result = $this->db->get();
       $result = $query_result->result();

       // echo "<pre>";
       // print_r($result);
       // die();
       return $result;

    }

    public function get_order_by_phone($search_phone)
    {

        // $this->db->where('phone', $search_phone);

        // $res = $this->db->get('order_details')->result();

        // return $res;

        $this->db->select('order_details.*', false);
         $this->db->select('order_details.created_at, DATE_FORMAT(order_details.created_at, "%d-%m-%Y %h:%i:%s")  AS added_date ');
       $this->db->select('order_assign.writer_id', false);
       $this->db->select('order_assign.order_id', false);
       $this->db->select('order_assign.writer_due_date', false);
       $this->db->select('users.user_id', false);
       $this->db->select('users.user_name', false);
       $this->db->from('order_details');
      // $this->db->where('order_details.client_email',$search_email);
       $this->db->where('order_details.phone',$search_phone);
       $this->db->join('order_assign', 'order_assign.order_id  =  order_details.order_detail_id ', 'left');
       $this->db->join('users', 'users.user_id  =  order_assign.writer_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


       $this->db->order_by('order_details.order_detail_id', ' AESC');

       $query_result = $this->db->get();
       $result = $query_result->result();

       // echo "<pre>";
       // print_r($result);
       // die();
       return $result;
    }

    public function get_order_by_email_order_filter($search_email,$order_filter)
    {

        $this->db->where('client_email', $search_email);
     
        $this->db->where_in('order_status', $order_filter);
        $res = $this->db->get('order_details')->result();

        

        return $res;
    }

    public function get_order_by_name_order_filter($search_name,$order_filter)
    {

        // $this->db->where('client_name', $search_name);
     
        // $this->db->where_in('order_status', $order_filter);
        // $res = $this->db->get('order_details')->result();       

        // return $res;

       $this->db->select('order_details.*', false);
         $this->db->select('order_details.created_at, DATE_FORMAT(order_details.created_at, "%d-%m-%Y %h:%i:%s")  AS added_date ');
       $this->db->select('order_assign.writer_id', false);
       $this->db->select('order_assign.order_id', false);
       $this->db->select('order_assign.writer_due_date', false);
       $this->db->select('users.user_id', false);
       $this->db->select('users.user_name', false);
     
        $this->db->from('order_details');
        $this->db->where('order_details.client_name',$search_name);
        $this->db->where_in('order_details.order_status',$order_filter);
      // $this->db->where('users.user_id',$writer_status);
     //  $this->db->where('revisions.status',0);

       //$this->db->where('')

       $this->db->join('order_assign', 'order_assign.order_id  =  order_details.order_detail_id ', 'left');
       $this->db->join('users', 'users.user_id  =  order_assign.writer_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


       $this->db->order_by('order_details.order_detail_id', ' AESC');

       $query_result = $this->db->get();
       $result = $query_result->result();

       // echo "<pre>";
       // print_r($result);
       // die();
       return $result;






    }


//name, email , phone, orderfilter, writerfilter
    public function get_order_by_nep_of_wf($order_status,$writer_status)
    {

        $this->db->select('order_details.*', false);
       $this->db->select('order_assign.writer_id', false);
       $this->db->select('order_assign.order_id', false);
       $this->db->select('users.user_id', false);
       $this->db->select('users.user_name', false);
     
        $this->db->from('order_details');
       $this->db->where_in('order_details.order_status',$order_status);
       $this->db->where('users.user_id',$writer_status);
     //  $this->db->where('revisions.status',0);

       //$this->db->where('')

       $this->db->join('order_assign', 'order_assign.order_id  =  order_details.order_detail_id ', 'left');
       $this->db->join('users', 'users.user_id  =  order_assign.writer_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


       $this->db->order_by('order_details.order_detail_id', ' AESC');

       $query_result = $this->db->get();
       $result = $query_result->result();

      //  echo "<pre>";
      //  print_r($result);
      //  die();
       return $result;

    }

    public function get_order_by_nep_of_wf_af($order_status,$writer_status,$agent_filter)
    {
      $this->db->select('order_details.*', false);
       $this->db->select('order_assign.writer_id', false);
       $this->db->select('order_assign.order_id', false);
       $this->db->select('users.user_id', false);
       $this->db->select('users.user_name', false);
     
        $this->db->from('order_details');
       $this->db->where_in('order_details.order_status',$order_status);
       $this->db->where('users.user_id',$writer_status);
      $this->db->where('users.user_id',$agent_filter);

       //$this->db->where('')

       $this->db->join('order_assign', 'order_assign.order_id  =  order_details.order_detail_id ', 'left');
       $this->db->join('users', 'users.user_id  =  order_assign.writer_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


       $this->db->order_by('order_details.order_detail_id', ' AESC');

       $query_result = $this->db->get();
       $result = $query_result->result();

      //  echo "<pre>";
      //  print_r($result);
      //  die();
       return $result;

    }

    public function get_order_by_name_order_filter_writer_filter($name,$order_status,$writer_status)
    {
      $this->db->select('order_details.*', false);
         $this->db->select('order_details.created_at, DATE_FORMAT(order_details.created_at, "%d-%m-%Y %h:%i:%s")  AS added_date ');
       $this->db->select('order_assign.writer_id', false);
       $this->db->select('order_assign.order_id', false);
       $this->db->select('order_assign.writer_due_date', false);
       $this->db->select('users.user_id', false);
       $this->db->select('users.user_name', false);
     
        $this->db->from('order_details');
        $this->db->where('order_details.client_name',$name);
        $this->db->where_in('order_details.order_status',$order_status);
        $this->db->where('users.user_id',$writer_status);
      // $this->db->where('users.user_id',$writer_status);
     //  $this->db->where('revisions.status',0);

       //$this->db->where('')

       $this->db->join('order_assign', 'order_assign.order_id  =  order_details.order_detail_id ', 'left');
       $this->db->join('users', 'users.user_id  =  order_assign.writer_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


       $this->db->order_by('order_details.order_detail_id', ' AESC');

       $query_result = $this->db->get();
       $result = $query_result->result();

       // echo "<pre>";
       // print_r($result);
       // die();
       return $result;
    }

    public function get_order_by_id($orderid)
    {
      
      $this->db->select('order_details.*', false);
      $this->db->select('order_details.created_at, DATE_FORMAT(order_details.created_at, "%d-%m-%Y %h:%i:%s")  AS added_date ');
    $this->db->select('order_assign.writer_id', false);
    $this->db->select('order_assign.order_id', false);
    $this->db->select('order_assign.writer_due_date', false);
    $this->db->select('users.user_id', false);
    $this->db->select('users.user_name', false);
  
     $this->db->from('order_details');
    $this->db->where('order_details.order_detail_id',$orderid);
   // $this->db->where('users.user_id',$writer_status);
  //  $this->db->where('revisions.status',0);

    //$this->db->where('')

    $this->db->join('order_assign', 'order_assign.order_id  =  order_details.order_detail_id ', 'left');
    $this->db->join('users', 'users.user_id  =  order_assign.writer_id ', 'left');
      // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


    $this->db->order_by('order_details.order_detail_id', ' AESC');

    $query_result = $this->db->get();
    $result = $query_result->result();

    // echo "<pre>";
    // print_r($result);
    // die();
    return $result;
    }


    public function testdata($search_name,$order_filter)
    {

        
        $this->db->where('client_name', $search_name);
     
        $this->db->where_in('order_status', $order_filter);

        $res = $this->db->get('order_details')->result();

        // echo "<pre>";
        // print_r($res);
        // die();

        

        return $res;
    }





}