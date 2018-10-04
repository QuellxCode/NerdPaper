<?php


class Submission_model extends CI_Model
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

    public function get_submission_detail()
 {
    // $this->db->select('submissions.*', false);
   
    
     $this->db->select('submissions.submission_id', false);
     $this->db->select('submissions.writer_id', false);
     $this->db->select('submissions.order_id as order_id_in_submission', false);
     $this->db->select('submissions.work_file', false);
     $this->db->select('submissions.report_file', false);
     $this->db->select('submissions.updated_at as sentat', false);
     $this->db->select('submissions.created_at as submittedat', false);
     $this->db->select('submissions.created_by as submittedby', false);
     $this->db->select('submissions.updated_by as sentby', false);
    $this->db->select('submissions.created_at as submission_date', false);
     $this->db->select('submissions.status as submission_status', false);
     $this->db->select('submissions.writer_note as writer_submission_note', false);
    
     $this->db->select('order_details.*', false);
     $this->db->select('order_assign.writer_due_date', false);
     $this->db->select('order_assign.created_at as assignedat', false);
     $this->db->select('order_assign.created_by as assignedby', false);
      // $this->db->select('GROUP_CONCAT(submission_files.submission_file_path) as files',FALSE);
     // $this->db->select('submission_files.submission_file_path', false);
      
  //  $this->db->select('order_assign as orderassing', false);
        // $this->db->select('users.user_name', false);
        // $this->db->select('users.user_email', false);
    $this->db->from('submissions');
   // $this->db->from('order_assign');

    //$this->db->where('submissions.status', 0);
    
    $this->db->join('order_details', 'order_details.order_detail_id  =  submissions.order_id ', 'left');
    $this->db->join('order_assign', 'order_assign.order_id  =  submissions.order_id ', 'left');
    // $this->db->join('submission_files', 'submission_files.submission_id  =  submissions.submission_id ', 'left');

      // $this->db->join('order_assign', 'order_assign.order_id  =  order_details.order_detail_id ', 'inner');
   
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


         $this->db->order_by('submissions.sort_status', ' ASC');
         $this->db->order_by('submissions.submit_on', ' DESC');
         $this->db->order_by('submissions.upload_date', ' DESC');
    $query_result = $this->db->get();
    $result = $query_result->result();

    

   // echo "<pre>";
   // print_r($result);
   // die();

    return $result;
}

public function get_user_email($orderid)
{
    $this->db->where('order_detail_id',$orderid);
    return $this->db->get('order_details')->row();
}

public function show_submission_to_client($submissionid,$submissionname, $current_datetime)
{
    date_default_timezone_set('Asia/Karachi');
    $now = date('Y-m-d H:i:s');
    $column = array('status' => 1,'updated_at'=>$current_datetime, 'updated_by'=>$submissionname, 'submit_on' => $now, 'sort_status' => 1); 
    $this->db->where('submission_id', $submissionid);
    $this->db->update('submissions', $column); 
    return true;

}

public function get_order_id_in_submission($submissionid)
{
    $this->db->where('submission_id',$submissionid);
    return $this->db->get('submissions')->row();
}

public function update_order_status_in_assignorder($orderid)
{
    $column = array('status' => 3);    
    $this->db->where('order_id', $orderid);
    $this->db->update('order_assign', $column); 
    return true;
}

public function update_order_status_in_order_detail($orderid)
{
    $column = array('order_status' => 2);    
    $this->db->where('order_detail_id', $orderid);
    $this->db->update('order_details', $column); 
    return true;
}

public function delete_submission($submissionid)
{
    $this->db->where('submission_id',$submissionid);
    $this->db->delete('submissions');
    return true;
}

public function get_orderid_from_submission($submissionid)
{
    $this->db->where('submission_id',$submissionid);
    return $this->db->get('submissions')->row()->order_id;
}


public function set_order_in_progress_writer($orderid)
{
     $column = array('status' => 1);    
    $this->db->where('order_id', $orderid);
    $this->db->update('order_assign', $column); 
    return true;
}

public function set_order_in_progress_admin($orderid)
{
     $column = array('order_status' => 1);    
    $this->db->where('order_detail_id', $orderid);
    $this->db->update('order_details', $column); 
    return true;
}

// public function send_half_file($submissionid,$half_file,$submission_datetime)
// {

// $column = array('status' => 2,'half_file'=>$half_file,'updated_at'=>$submission_datetime, 'updated_by' => 'ali');    
//     $this->db->where('submission_id', $submissionid);
//     $this->db->update('submissions', $column); 
//     return true;
// }

public function send_half_file($submissionid,$half_file,$submission_datetime,$submitted_by)
{
    
    date_default_timezone_set('Asia/Karachi');
    $now = date('Y-m-d H:i:s');

    $column = array('status' => 2,'half_file'=>$half_file,'updated_at'=>$submission_datetime, 'updated_by' => $submitted_by, 'submit_on' => $now, 'sort_status' =>1); 
    $this->db->where('submission_id', $submissionid);
    $this->db->update('submissions', $column); 
    return true;
}

public function edit_submission_note_file($submissionid)
{
    
   $this->db->where('submission_id',$submissionid);
   $data = $this->db->get('submissions')->row()->writer_note;
   
  return $data;

 

}


public function edit_submission_files($id)
{
    $this->db->where('submission_id',$id);
   $data =  $this->db->get('submission_files')->result();
   return $data;
   // echo "<pre>";
   // print_r($data);
   // die();

}

public function get_writer_submission_files($submissionid)
{
  $this->db->where('submission_id',$submissionid);
  $this->db->where('submission_status',0);
    $data = $this->db->get('submission_files')->result();

  
    return $data;

}

public function get_writer_submission_report_files($submissionid)
{
  $this->db->where('submission_id_fk',$submissionid);
  
    $data = $this->db->get('submission_report_files')->result();

  
    return $data;

}


public function remove_single_submission_file($submissionfile_id)
{
     $this->db->where('submission_file_id',$submissionfile_id);
    $this->db->delete('submission_files');
    return true;
}

public function remove_single_submission_report_file($submissionfile_id)
{
     $this->db->where('submission_report_file_id',$submissionfile_id);
    $this->db->delete('submission_report_files');
    return true;
}
// public function edit_submission_note_file($submissionid)
// {
//     echo $submissionid;
//     die();
//    $this->db->where('submission_id',$submissionid);
//    $data = $this->db->get('submissions')->row()->writer_note;
//    $data1 = $this->db->get('submissions')->row()->submission_id;

//    echo $data1;
//    die();

//   $result = $this->myfunc($data1);
//   $result[] = $data;
//   return $result;

 

// }
// public function myfunc($id)
// {
  
//   $this->db->where('submission_id',$id);
//   $data = $this->db->get('submission_files')->result();
//   return $data;

// }



public function update_writernote_on_submission($submissionid , $writernote)
{
    $column = array('writer_note' => $writernote);    
    $this->db->where('submission_id', $submissionid);
    $this->db->update('submissions', $column); 
    return true;

}

public function update_submission_files_admin($data)
{
    $this->db->insert('submission_files',$data);
    return true;

}

public function update_submission_report_files_admin($data)
{
    $this->db->insert('submission_report_files',$data);
    return true;

}


public function first_revision_marked_in_submission($submissionid)
{
    $column = array('status' => 3);    
    $this->db->where('submission_id', $submissionid);
    $this->db->update('submissions', $column); 
    return true;
}

// public function change_quality_submission($submissionid)
// {
//     $column = array('submission_quality' => 0);    
//     $this->db->where('submission_id', $submissionid);
//     $this->db->update('submissions', $column); 
//     return true;
// }

public function get_user_detail($writer_id)
{
    $this->db->where('user_id',$writer_id);
    return $this->db->get('users')->row()->writer_rate_perpage;

}

public function get_no_of_pages($orderid)
{
     $this->db->where('order_detail_id',$orderid);
    return $this->db->get('order_details')->row()->no_of_pages;
}

public function set_submission_quality($submission_id)
{
    //    $column = array('submission_quality' => 1);    
    // $this->db->where('submission_id', $submission_id);
    // $this->db->update('submissions', $column); 
    // return true;
    $this->db->where('submission_id',$submission_id);
    $submission_quality = $this->db->get('submissions')->row();
    return $submission_quality;
}

public function changesubmissionid($submissionid)
{
    $this->db->where('submission_id',$submissionid);
    $submission_quality = $this->db->get('submissions')->row()->submission_quality;
    

    if($submission_quality == 0 )
    {
        $column = array('submission_quality' => 1);    
    $this->db->where('submission_id', $submissionid);
    $this->db->update('submissions', $column); 
    return true;
}elseif($submission_quality == 1){
    $column = array('submission_quality' => 0);    
    $this->db->where('submission_id', $submissionid);
    $this->db->update('submissions', $column); 
    return true;
}

        

}

public function add_quality_note($qualitynote,$note_created_by,$note_created_at, $submissionid)
{
    $column = array('submission_quality_note' => $qualitynote,'qualitynote_created_at'=>$note_created_at,'qualitynote_created_by'=>$note_created_by);    
    $this->db->where('submission_id', $submissionid);
    $this->db->update('submissions', $column); 
    return true;

}

public function get_submission_quality_note($submissionid)
{
    $this->db->where('submission_id',$submissionid);
    $result = $this->db->get('submissions');
    // echo '<Pre>';
    // print_r($result->row());
    // die();
    return $result->row();

}


public function get_submissions_count()
{
    $this->db->where('status', 0);
    // $this->db->or_where('status', 1);
    return $this->db->get('submissions')->num_rows();
}

public function changeorderstatus($orderid)
{
    $column = array('status' => 2);    
    $this->db->where('order_detail_id', $orderid);
    $this->db->update('order_details', $column); 
    return true;
}
    // public function save_submission($data) {

    //     $this->db->insert('submissions',$data);
    //     return true;

    // }


 //    public function get_submissions()
 //    {
 //     $this->db->where('status',0); 
 //     $data =  $this->db->get('submissions');
 //     $result = $data->result();
 //     return $result;
 // }

 

// public function update_submission($submissionid)
// {
//     $column = array('status' => 1);    
//     $this->db->where('submission_id', $submissionid);
//     $this->db->update('submissions', $column); 
//     return true;
// }

// public function update_order_detail($orderdetail_id)
// {

// $column = array('status' => 2);    
//     $this->db->where('order_detail_id', $orderdetail_id);
//     $this->db->update('order_details', $column); 
//     return true;
// }



}