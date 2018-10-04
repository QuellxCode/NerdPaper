<?php


class Revision_model extends CI_Model
{
    function __construct() {
        parent::__construct();

        $this->load->database();


    }



    public function all_revision()
    {
       $this->db->select('revisions.*', false);
       $this->db->select('submissions.created_at as submission_date', false);
       $this->db->select('order_details.order_id as my_order_Id', false);
      //  $this->db->select('order_details.client_name', false);
     
       
       $this->db->from('revisions');
       $this->db->where('revisions.status',0);
 
       $this->db->join('submissions', 'submissions.order_id  =  revisions.order_id ', 'left');
       $this->db->join('order_details', 'order_details.order_detail_id  =  revisions.order_id ', 'left');
      


       $this->db->order_by('revisions.revision_id', ' DESC');
       $query_result = $this->db->get();
       $result = $query_result->result();

       // echo "<pre>";
       // print_r($result);
       // die();

       return $result;
       
   }

   public function get_all_revisions_in_progress()
   {
      $this->db->select('revisions.*', false);
     $this->db->select('order_details.client_email', false);
     $this->db->select('order_details.client_name', false);
     $this->db->select('order_details.phone', false);
     $this->db->select('order_details.no_of_pages as pages', false);
     $this->db->select('order_details.order_id as unique_order_id', false);
       // $this->db->select('submissions.created_at as submission_date', false);
     
       
       $this->db->from('revisions');
       $this->db->where('revisions.status',1);
       $this->db->or_where('revisions.status',2);

        $this->db->join('order_details', 'order_details.order_detail_id  =  revisions.order_id ', 'left');
       // $this->db->join('submissions', 'submissions.order_id  =  revisions.order_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


       $this->db->order_by('revisions.created_at', ' ASC');
       $query_result = $this->db->get();
       $result = $query_result->result();

       // echo "<pre>";
       // print_r($result);
       // die();

      
       return $result;

   }
   
   public function get_order_id_from_revision($orderid)
   {
       $this->db->where('order_detail_id',$orderid);
       return $this->db->get('order_details')->row();
   }

   public function save_revision_rejection_note($data)
   {

    $this->db->insert('revision_rejection_notes',$data);
    return true;

   }

   public function get_mark_as_invalid_revision_note($revisoinid)
   {

    $this->db->where('revision_id',$revisoinid);
   $data =  $this->db->get('revisions')->row();
   return $data;

   }
   
   public function getuseremail($orderid)
   {
       $this->db->where('order_detail_id',$orderid);
   $data =  $this->db->get('order_details')->row();
   return $data;
   }

   public function mark_invalid_revision_as_valid($revisionid,$note)
   {
    $column = array('status' => 1,'invalid_note'=>$note);    
    $this->db->where('revision_id', $revisionid);
    $this->db->update('revisions', $column); 
    return true;

   }

   public function mark_valid_revision_as_invalid($revisionid,$note)
   {
    $username = $this->session->userdata('user_name');
    date_default_timezone_set('America/Los_Angeles');
    $updated_at = date('d-m-Y H:i:s');

    $this->session->userdata('user_name');
    $column = array('status' => 5,'submitted_by'=> $username,'submitted_at'=> $updated_at,'invalid_note'=>$note);    
    $this->db->where('revision_id', $revisionid);
    $this->db->update('revisions', $column); 
    return true;

   }

   public function mark_invalid_by_admin($revisionid,$note)
   {
    //$this->db->where('revision_id',$revisionid)
    date_default_timezone_set('America/Los_Angeles');
    $username = $this->session->userdata('user_name');
    $updated_at = date('d-m-Y H:i:s');

    
    $column = array('status' => 5,'marked_as_invalid_admin'=>2,'submitted_by'=>$username,'submitted_at'=>$updated_at,'invalid_note'=>$note);    
    $this->db->where('revision_id', $revisionid);
    $this->db->update('revisions', $column); 
    return true;
   }
   
   public function mark_invalid_by_admin_from_invalid_revision_request($revisionid,$note)
   {
    //$this->db->where('revision_id',$revisionid)
    date_default_timezone_set('America/Los_Angeles');
    $username = $this->session->userdata('user_name');
    $updated_at = date('d-m-Y H:i:s');

    
    $column = array('status' => 5,'marked_as_invalid_admin'=>1,'submitted_by'=>$username,'submitted_at'=>$updated_at,'invalid_note'=>$note);    
    $this->db->where('revision_id', $revisionid);
    $this->db->update('revisions', $column); 
    return true;
   }

   public function mark_valid_by_admin($revisionid)
   {
    $column = array('status' => 1,'marked_as_invalid'=>1);    
    $this->db->where('revision_id', $revisionid);
    $this->db->update('revisions', $column); 
    return true;

   }

   public function get_all_revisions_admin()
   {
     $this->db->select('revisions.*', false);
     $this->db->select('order_details.client_name', false);
     $this->db->select('order_details.client_email', false);
     $this->db->select('order_details.phone', false);
       // $this->db->select('submissions.created_at as submission_date', false);
     
       
       $this->db->from('revisions');
       $this->db->where('revisions.status',4);
       $this->db->or_where('revisions.status',5);
       $this->db->or_where('revisions.status',1);
       $this->db->or_where('revisions.status',0);
       $this->db->or_where('revisions.status',7);

        $this->db->join('order_details', 'order_details.order_detail_id  =  revisions.order_id ', 'left');
       // $this->db->join('submissions', 'submissions.order_id  =  revisions.order_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


       $this->db->order_by('revisions.revision_id', ' DESC');
       $query_result = $this->db->get();
       $result = $query_result->result();

      
       return $result;
   }


   public function get_client_revision_note($revisionid)
   {
    $this->db->where('revision_id',$revisionid);
    return $this->db->get('revisions')->row()->revision_note;
   }

   public function get_client_revision_files($revisionid)
   {
    $this->db->where('revision_id',$revisionid);
    $data = $this->db->get('revision_files')->result();

    return $data;
   

   }

   public function viewrevised_work($revisionid)
   {
    //  echo $revisionid;
    //  die();

     $this->db->select('revised_work.*', false);
     $this->db->select('order_details.client_email', false);
     $this->db->select('order_details.phone', false);
       // $this->db->select('submissions.created_at as submission_date', false);
     
       
       $this->db->from('revised_work');
       $this->db->where('revised_work.revision_id',$revisionid);
       // $this->db->or_where('revised_work.status',1);
       

        $this->db->join('order_details', 'order_details.order_detail_id  =  revised_work.order_id ', 'left');
       // $this->db->join('submissions', 'submissions.order_id  =  revisions.order_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


       $this->db->order_by('revised_work.revised_work_id', ' AESC');
       $query_result = $this->db->get();
       $result = $query_result->row();





       return $result;



   }

   public function remove_single_revision_file($revisionfile_id)
   {

    $this->db->where('revision_file_id',$revisionfile_id);
    $this->db->delete('revision_files');
    return true;
   }

   public function update_view_revision_marked($revisionid,$revision_note)
   {
     $column = array('revision_note' => $revision_note);    
    $this->db->where('revision_id', $revisionid);
    $this->db->update('revisions', $column); 
    return true;
    
   }

   public function get_writer_revised_work_note($revised_work_id)
   {
    $this->db->where('revised_work_id',$revised_work_id);
    return $this->db->get('revised_work')->row()->revised_work_note;
   }

   public function get_writer_revisedwork($revised_work_id)
   {

    $this->db->where('revised_work_id',$revised_work_id);
    $data = $this->db->get('revised_work_files')->result();

    return $data;
   }

   public function get_writer_report_revisedwork($revised_work_id)
   {

    $this->db->where('revised_work_id_fk',$revised_work_id);
    $data = $this->db->get('revised_work_report_files')->result();

    return $data;
   }

   public function remove_single_revised_work_file($revised_work_file_id)
   {

    $this->db->where('revised_work_file_id',$revised_work_file_id);
    $this->db->delete('revised_work_files');
    return true;

   }

   public function remove_single_revised_work_report_file($revised_work_file_id)
   {

    $this->db->where('revised_work_report_file_id',$revised_work_file_id);
    $this->db->delete('revised_work_report_files');
    return true;

   }

   public function set_revision_quality($revision_id)
{
    //    $column = array('submission_quality' => 1);    
    // $this->db->where('submission_id', $submission_id);
    // $this->db->update('submissions', $column); 
    // return true;
    $this->db->where('revision_id',$revision_id);
    $revision_quality = $this->db->get('revisions')->row()->revision_quality;
    return $revision_quality;
}

public function order_id_get($revisionid)
{
$this->db->select('order_id');
$this->db->from('revisions');
$this->db->where('revision_id',$revisionid);
$query_result = $this->db->get();
$result = $query_result->row();
return $result;
}
public function update_order_detail_revision($id)
{
$column = array('order_status' => 2);
$this->db->where('order_detail_id', $id);
$this->db->update('order_details', $column); 
}


public function changerevisionid($revisionid)
{
    $this->db->where('revision_id',$revisionid);
    $revision_quality = $this->db->get('revisions')->row()->revision_quality;
    
    // echo $revision_quality;
    // die();

    if($revision_quality == 0 )
    {
        $column = array('revision_quality' => 1);    
    $this->db->where('revision_id', $revisionid);
    $this->db->update('revisions', $column); 
    return true;
}elseif($revision_quality == 1){
    $column = array('revision_quality' => 0);    
    $this->db->where('revision_id', $revisionid);
    $this->db->update('revisions', $column); 
    return true;
}

        

}


//    public function get_writer($writerid)
//    {
//     $this->db->where('user_id',$writerid);
//     $data = $this->db->get('users')->row();
//     return $data;
// }


// public function update_revision_status($revisionid)
// {

//     $column = array('status' => 1);    
//     $this->db->where('revision_id', $revisionid);
//     $this->db->update('revisions', $column); 
//     return true;
//}

// public function get_all_writer_revisions($writerid)
// {

//    $multiple = array('writer_id' => $writerid,'status' =>'1');
//     $this->db->where($multiple);
//     $data = $this->db->get('revisions');
//     $result = $data->result();

//     return $result;
// }

// public function save_revised_work($data)
// {
//     $this->db->insert('revised_work',$data);
//     return true;
// }


public function change_revision_status_for_writer($revisionid,$revision_status,$username,$mydate,$myTime,$modifiedat,$update_create_date)
{
  // echo "working";
  // die();
    date_default_timezone_set('America/Los_Angeles');
    $forward_time_pacific = date('H:i:s');
     date_default_timezone_set('America/Los_Angeles');
    $forward_date_pacific = date('d-m-Y');
  
    $column = array('status' => 1,'modified_by'=> $username,'modified_at'=> $modifiedat, 'forwarded_at_date' =>$mydate,'forwarded_at_time'=>$myTime,'forwarded_at_time_pacific'=>$forward_time_pacific,'forwarded_at_date_pacific'=>$forward_date_pacific, 'created_at'=>$update_create_date);    
    $this->db->where('revision_id', $revisionid);
    $this->db->update('revisions', $column); 
    return true;
    
}

public function get_all_invalid_revisions()
{

   // $this->db->select('revisions.*', false);
   //   $this->db->select('revision_rejection_notes.rejection_note_id', false);
   //   $this->db->select('revision_rejection_notes.rejection_note_desc', false);
   //   $this->db->select('revision_rejection_notes.revision_id', false);
   //  $this->db->from('revisions');
   //  $this->db->where('revisions.status',2);
   //  // $this->db->where('revision_rejection_notes.status',0);
    
   //  $this->db->join('revision_rejection_notes', 'revision_rejection_notes.revision_id  =  revisions.revision_id ', 'inner');

   //  $this->db->order_by('revisions.revision_id', ' AESC');
   //  $query_result = $this->db->get();
   //  $result = $query_result->result();

    $this->db->where('status',2);
    $result = $this->db->get('revisions')->result();

   

    return $result;

}

public function get_revised_work_admin()
{
  $this->db->select('revised_work.*', false);
     $this->db->select('order_details.client_name', false);
     $this->db->select('order_details.client_email', false);
     $this->db->select('order_details.phone', false);
     $this->db->select('order_details.order_id as m_order_id', false);
     //$this->db->select('order_details.phone', false);
       // $this->db->select('submissions.created_at as submission_date', false);
     
       
       $this->db->from('revised_work');
       $this->db->where('revised_work.status',0);
       $this->db->or_where('revised_work.status',1);
       

        $this->db->join('order_details', 'order_details.order_detail_id  =  revised_work.order_id ', 'left');
       // $this->db->join('submissions', 'submissions.order_id  =  revisions.order_id ', 'left');
         // $this->db->join('users', 'users.user_id  =  submissions.submission_id ', 'right');


         $this->db->order_by('revised_work.status', ' ASC');
$this->db->order_by('revised_work.created_at', ' DESC');
       $query_result = $this->db->get();
       $result = $query_result->result();

       // echo '<pre>';
       // print_r($result);
       // die();

      
       return $result;
}

public function save_revision_marked_by_admin($data)
{
  $this->db->insert('revisions',$data);
  $revisionid_last = $this->db->insert_id();
  return $revisionid_last;
}

public function update_revisions_status($revisionid)
{
    $column = array('status' =>1 );    
    $this->db->where('revision_id', $revisionid);
    $this->db->update('revisions', $column); 
    return true;
}


public function submit_revised_work_to_client($revised_work_id,$updated_by,$updated_at)
{
  $column = array('status' =>1,'updated_at'=> $updated_at, 'updated_by'=>$updated_by);    
    $this->db->where('revised_work_id', $revised_work_id);
    $this->db->update('revised_work', $column); 
    return true;
}

public function get_revision_id($revised_work_id)
{
  $this->db->where('revised_work_id',$revised_work_id);
  return $this->db->get('revised_work')->row();
}

public function update_submitted_by_and_at($id,$username,$updated_at)
{
  $column = array('submitted_by'=> $username, 'submitted_at'=>$updated_at);    
    $this->db->where('revision_id', $id);
    $this->db->update('revisions', $column); 
    return true;
}

public function upload_revision_files_admin($data)
{
$this->db->insert('revision_files',$data);
  //$revisionid_last = $this->db->insert_id();
  return true;


}


public function update_files_view_revision_marked($data)
{
  $this->db->insert('revision_files',$data);
  return true;
}

public function update_files_revised_work($data)
{
  $this->db->insert('revised_work_files',$data);
  return true;
}
public function update_report_files_revised_work($data)
{
  $this->db->insert('revised_work_report_files',$data);
  return true;
}

public function update_writer_revised_work_note($revised_work_id,$revised_work_note)
   {
     $column = array('revised_work_note' => $revised_work_note);    
    $this->db->where('revised_work_id', $revised_work_id);
    $this->db->update('revised_work', $column); 
    return true;
    
   }

   public function get_date_and_time_inprocess_revision($revisionid)
{

    $this->db->where('revision_id',$revisionid);
    $forward_date = $this->db->get('revisions')->row()->forwarded_at_date;

    $forward_time = "";
    if($forward_date)
    {
       $this->db->where('revision_id',$revisionid);
       $forward_time = $this->db->get('revisions')->row()->forwarded_at_time;
    }else{
     return "nodate_time";
    }


    
    
    
    $mydatetime =  $forward_date.' '.$forward_time;

    return $mydatetime;

}

   public function get_pacific_datetime($revisionid)
{

    $this->db->where('revision_id',$revisionid);
    $forward_date = $this->db->get('revisions')->row()->forwarded_at_date_pacific;

    $forward_time = "";
    if($forward_date)
    {
       $this->db->where('revision_id',$revisionid);
       $forward_time = $this->db->get('revisions')->row()->forwarded_at_time_pacific;
    }else{
     return "no_pacific_date_time";
    }


    
    
    
    $mydatetime =  $forward_date.' '.$forward_time;

    return $mydatetime;

}


public function get_datetime_on_mr($revisionid)
{
    $this->db->where('revision_id',$revisionid);
    $createdat = $this->db->get('revisions')->row()->created_at;
   
    return $createdat;
}


public function get_revision_id_from_revised_work($revisedid)
{
    $this->db->where('revised_work_id',$revisedid);
    return $this->db->get('revised_work')->row();
    
}

public function delete_revised_work($revised_work_id)
{
  $this->db->where('revised_work_id',$revised_work_id);
    $this->db->delete('revised_work');
    return true;
}

public function change_revision_status_to_inprogress($revision_id)
{
  $column = array('status' => 1);    
    $this->db->where('revision_id', $revision_id);
    $this->db->update('revisions', $column); 
    return true;
}

public function get_newrevision_count()
{
    $this->db->where('status', 0);
   
    return $this->db->get('revisions')->num_rows();
}


public function get_inprocessrevision_count()
{
    $this->db->where('status', 1);
   
    return $this->db->get('revisions')->num_rows();
  }

public function get_invalidrevisions_count()
{
    $this->db->where('status', 2);
   
    return $this->db->get('revisions')->num_rows();
}

public function get_revisedwork_count()
{
    $this->db->where('status', 0);
   
    return $this->db->get('revised_work')->num_rows();
}

public function get_pacific_time($revisionid)
{
    $this->db->where('revision_id',$revisionid);
    return $this->db->get('revisions')->row();
}

// public function get_all_revisions_writer($writerid)
// {
//     $multiple = array('writer_id' => $writerid,'status' =>'1');
//     $statustwo = array('writer_id' => $writerid,'status'=>'2');
//     $this->db->where($multiple);
//     $this->db->or_where($statustwo);
//     $data = $this->db->get('revisions');
//     $result = $data->result();

//     return $result;

// }


// public function get_revised_work()
// {
//   $data = $this->db->get('revised_work')->result();
//   return $data;
// }

// public function submit_revised_work_to_client($revisedwork_id)
// {
//   $column = array('status' =>1);    
//     $this->db->where('revised_work_id', $revisedwork_id);
//     $this->db->update('revised_work', $column); 
//     return true;
// }



}