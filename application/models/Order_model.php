<?php


class Order_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // public function insert($data) {
    //     if ($this->db->insert("employee", $data)) {
    //         return true;
    //     }
    // }
    // public function get_user($user_email) {

    //     $this->db->from('users');
    //     $where = "(user_email='$user_email')";
    //     $this->db->where($where);
    //     return $this->db->get()->row();


    // }

    // public function orderDelete($orderid) {
    //     if ($this->db->delete("order_details", "order_detail_id = ".$orderid)) {
    //         return true;
    //     }
    // }


    public function get_all_orders()
    {
         // $this->db->where('order_status',0);
         // $data = $this->db->get('order_details');

         // echo "<pre>";
         // print_r($data->result());
         // die();
         // return $data->result();



        $this->db->select('order_details.*', false);
        $this->db->select('order_details.order_id as u_order_id', false);
        $this->db->select('order_details.created_at as ordercreation_date', false);
       $this->db->select('order_assign.*', false);
      
     
       
       $this->db->from('order_details');

        $this->db->where('order_details.order_status',0);
       $this->db->join('order_assign', 'order_assign.order_id  =  order_details.order_detail_id ', 'left');
       //   // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


      $this->db->order_by('order_details.end_date', ' AESC');
       $query_result = $this->db->get();
       $result = $query_result->result();
       // echo "<pre>";
       // print_r($result);
       // die();
       return $result;

       

    }

    public function chanage_order_status($orderid,$order_status)
    {

        $column = array('order_status' => 1);    
        $this->db->where('order_detail_id', $orderid);
        $this->db->update('order_details', $column); 
        return true;

    }

    public function order_verified_by($verified_by, $verified_at, $order_id)
    {
       $column = array('verified_by' => $verified_by,'verified_at'=>$verified_at);    
       $this->db->where('order_detail_id', $order_id);
       $this->db->update('order_details', $column); 
       return true;

   }




   public function get_single_order($id)
   {
     $this->db->where('order_detail_id',$id);
     $data = $this->db->get('order_details');
     
  //  echo "<pre"

     return $data->row();
    //  $this->db->select('order_files.file_name', false);
    //    $this->db->select('order_files.file_path', false);
     
    // $this->db->select('order_details.*', false);
      
       
    //    $this->db->from('order_files');
    //    //$this->db->where('revisions.status',0);

    //    $this->db->join('order_details', 'order_details.order_detail_id  =  order_files.order_id_fk ', 'right');
    //      // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


    //    $this->db->order_by('order_details.order_detail_id', ' AESC');
    //    $query_result = $this->db->get();
    //    $result = $query_result->result();

    //    echo "<pre>";
    //    print_r($result);
    //    die();
    //    return $result;



 }


 public function get_single_order_notes($orderdetailid)
 {
    $this->db->where('order_id',$orderdetailid);
    $data = $this->db->get('order_notes');
    // echo "<pre>";
    // print_r($data->result());
    // die();
    return $data->result();
    
 }

 public function get_single_order_files($orderdetailid)
 {
    $this->db->where('order_id_fk',$orderdetailid);
    $data = $this->db->get('order_files');
    // echo "<pre>";
    // print_r($data->result());
    // die();
    return $data->result();
 }



 public function assign_order_to_writer($data)
 {
    $this->db->insert('order_assign',$data);
    return true;
}


public function assign_order_to_region($data)
 {
    $this->db->insert('order_assign',$data);
    return true;
}


public function update_payment_status($orderid, $paymentstatus)
{
    $column = array('payment_status' => $paymentstatus);    
    $this->db->where('order_detail_id', $orderid);
    $this->db->update('order_details', $column); 
    return true;
}

public function update_order_status($orderid, $orderstatus)
{
    $column = array('order_status' => $orderstatus);    
    $this->db->where('order_detail_id', $orderid);
    $this->db->update('order_details', $column); 
    return true;
}

public function update_assign_order_status($orderid)
{
    $column = array('status' => 0,'region_id'=> '-1', 'writer_id'=>'-1');    
    $this->db->where('order_id', $orderid);
    $this->db->update('order_assign', $column); 
    return true;
}



public function add_note($data)
{
    $this->db->insert('order_notes',$data);
    return true;
}
public function add_note_inprogess($data)
{
    $this->db->insert('order_notes',$data);
    return true;
}

public function get_singleorder_notes($orderid)
{
    $this->db->order_by("status", "AESC");
    $this->db->where('order_id',$orderid);

    $data = $this->db->get('order_notes');

   
    return $data->result();
}

public function delete_neworder($orderid)
{
    $this->db->where('order_detail_id',$orderid);
    $this->db->delete();
    return true;

}


public function neworder_update($id,$data)
{
   $this->db->where('order_detail_id',$id);
   $this->db->update('order_details',$data);
   return true;
}


public function check_order_in_assign($orderid)
{
    $this->db->where('order_id',$orderid);
    $this->db->where('status',0);
    $result = $this->db->get('order_assign');
    return $result->num_rows();
}


public function update_assign_order($orderid,$data)
{

    $this->db->where('order_id', $orderid);
    $this->db->update('order_assign', $data); 
    return true;

}

public function get_previous_order_assign_detail($orderid)
{
    $this->db->where('order_id',$orderid);
    $result = $this->db->get('order_assign')->row();
    return $result;
}

// public function get_all_unpaidorders()
// {
//     // $this->db->where('payment_status','0');
//     // // $unpaid_count = $this->db->count_all_results('order_details');
//     // $unpaid_data = $this->db->get('order_details');
//     // $data =  $unpaid_data->result();


//     // return $data;
//     // // $myarray = array('count' => $unpaid_count ,'unpaid_data'=>$unpaid_data );
//     // // return $myarray;

// }

public function get_order_inprocess()
{
    $this->db->where('order_status','1');
    $this->db->order_by('order_details.writer_date','ASC');
    // $unpaid_count = $this->db->count_all_results('order_details');
    $inprocess_orders = $this->db->get('order_details');
    $data =  $inprocess_orders->result();

    // echo "<pre>";
    // print_r($data);
    // die();


    return $data;
}

public function change_order_status_inprocess($orderid)
{

    $column = array('order_status' => 1);    
    $this->db->where('order_detail_id', $orderid);
    $this->db->update('order_details', $column); 
    return true;
}


public function update_order_files($data)
{
     $this->db->insert('order_files',$data);
    return true;
}


public function get_writer_due_date($orderid)
{
    $this->db->where('order_id',$orderid);
    $w_due_date = $this->db->get('order_assign')->row()->writer_due_date;

    return $w_due_date;

}

//********************* Unpaid Orders start ********************//

public function get_all_unpaidorders()
{
//     $this->db->order_by("order_detail_id", "DESC");
//     $this->db->where('order_status',6);
//    $data=  $this->db->get('order_details');
//    return $data->result();


   $this->db->select('order_details.*', false);
   //$this->db->select('order_details.order_id as u_order_id', false);
 //  $this->db->select('order_details.created_at as ordercreation_date', false);
  $this->db->select('leads.*', false);
 

  
  $this->db->from('order_details');

   $this->db->where('order_details.order_status',6);
  $this->db->join('leads', 'leads.lead_id  =  order_details.lead_id ', 'left');
  //   // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


  $this->db->order_by('order_details.order_detail_id', ' DESC');
  $query_result = $this->db->get();
  $result = $query_result->result();
//   echo "<pre>";
//   print_r($result);
//   die();
  return $result;

   

}

public function get_date_and_time($orderid)
{
    $this->db->where('order_detail_id',$orderid);
    $end_date = $this->db->get('order_details')->row()->end_date;
    return $end_date;
   // $end_time = $this->db->get('order_details')->row()->end_time;
   // return $end_time;
   // return $end_date.''.$end_time;

}

public function get_date_and_time_two($orderid)
{
     $this->db->where('order_detail_id',$orderid);
    $end_time = $this->db->get('order_details')->row()->end_time;
    return $end_time;
}

public function get_writer_due_date_and_time($orderid)
{
    $this->db->where('order_id',$orderid);
    return $this->db->get('order_assign')->row();

}

public function get_date_and_time_inprocess($orderid)
{
    $this->db->where('order_id',$orderid);
    return $this->db->get('order_assign')->row();
   

}

public function remove_file($file_id)
{
    $this->db->where('order_files_id',$file_id);
    $this->db->delete('order_files');
    return true;
}

public function update_writer_due_date($orderid,$data)
{
    
    
    $this->db->where('order_id', $orderid);
    $this->db->update('order_assign', $data); 
    return true;
    
}

public function insert_write_due_date($data)
{
    
    //  $column = array('writer_date'=>$date);    
    // $this->db->where('order_detail_id', $id);
    // $this->db->update('order_details', $column); 

    $this->db->insert('order_assign',$data);
    return true;
}

public function insert_writer_date($orderid,$date)
{
    // echo $date.'   '.$orderid;
    // die();
    $column = array('writer_date'=>$date);    
    $this->db->where('order_detail_id', $orderid);
    $this->db->update('order_details', $column);
    return true;
}

public function update_write_date($date2,$id)
{
    $column = array('writer_date'=>$date2);    
    $this->db->where('order_detail_id', $id);
    $this->db->update('order_details', $column);
    return true;
}
//********************* Unpaid Orders end ********************//

///********* comment**********////////////




public function completed_orders()
{

}



public function unpaid_order_count()
{
    $this->db->where('payment_status','0');
    $unpaid_count = $this->db->count_all_results('order_details');
    return $unpaid_count;
}



public function get_orders_by_region($writer_region_id)
{
    $multiple = array('region_id' => $writer_region_id,'status' =>'0');
    $this->db->where($multiple);
    $data = $this->db->get('order_assign');
    $result = $data->result();
    return $result;

        // echo "<pre>";
        // print_r($result);
        // die();


}

public function accepted_order_writer($id,$writer_id)
{
      //  $this->db->where('order_assign_id',$id);

        //$appointment_id = 0;
    $column = array('status' => 1,'writer_id'=>$writer_id);    
    $this->db->where('order_assign_id', $id);
    $this->db->update('order_assign', $column); 
    return true;
}

public function get_accepted_task($writerid)
{
    $multiple = array('writer_id' => $writerid,'status' =>'1');
    $this->db->where($multiple);
    $data = $this->db->get('order_assign');
    $result = $data->result();

    return $result;
}

public function view_order_for_writer($orderid)
{

    $this->db->where('order_detail_id',$orderid);
    $data = $this->db->get('order_details');
    $result =  $data->row();
    return $result;

}



public function single_order_detail($orderid)
{
    $this->db->where('order_detail_id',$orderid);
    $data = $this->db->get('order_details');
    $result = $data->result();
    return $result;
}

public function update_order_details($orderid, $order_note)
{
    $column = array('order_note' => $order_note);    
    $this->db->where('order_detail_id', $orderid);
    $this->db->update('order_details', $column); 
    return true;

}

public function change_order_status_to_assigned($order_detail_id)
{
    $column = array('status' => 1);    
    $this->db->where('order_detail_id', $order_detail_id);
    $this->db->update('order_details', $column); 
    return true;

}

public function delete_unpaid_order($order_id)
{
    
     $this->db->where('order_detail_id',$order_id);
    $this->db->delete('order_details');
    return true;
    
}


public function getorderdetail($orderid)
{
    $this->db->where('order_detail_id',$orderid);
   return $this->db->get('order_details')->row();
}

public function change_fullpiad_order_to_neworder($paymentstatus,$orderstatus,$orderid)
{
    $updated = array('payment_status' => $paymentstatus,'order_status'=>$orderstatus);
    $this->db->where('order_detail_id',$orderid);
    $this->db->update('order_details',$updated);
    return true;
}


public function change_halfpiad_order_to_neworder($paymentstatus,$orderstatus,$orderid)
{
    $updated = array('payment_status' => $paymentstatus,'order_status'=>$orderstatus);
    $this->db->where('order_detail_id',$orderid);
    $this->db->update('order_details',$updated);
    return true;
}

public function update_payment($orderid,$payment)
{
    $updated = array('order_price' => $payment);
    $this->db->where('order_detail_id',$orderid);
    $this->db->update('order_details',$updated);
    return true;
}

public function get_unpaid_order_count()
{
    $this->db->where('order_status', 6);
    return $this->db->get('order_details')->num_rows();
}

public function get_new_order_count()
{
    $this->db->where('order_status', 0);
    return $this->db->get('order_details')->num_rows();
}

public function get_inprocess_order_count()
{
    $this->db->where('order_status', 1);
    return $this->db->get('order_details')->num_rows();
}



    // public function update($data,$eid) {
    //     $this->db->set($data);
    //     $this->db->where("eid", $eid);
    //     $this->db->update("employee", $data);
    // }


}