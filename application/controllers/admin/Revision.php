<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Revision extends CI_Controller {

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

    $this->load->model('revision_model');
    $this->load->model('order_model');
    $this->load->model('submission_model');

    $this->load->library('session');

    if ($this->session->userdata('user_name') === NULL)
    {

      redirect('admin/login','refresh');
    }

  }

  public function get_all_revisions()
  {
     $data['title'] = 'New Revisions';
   $data['revisions'] =  $this->revision_model->all_revision();

   // echo "<Pre>";
   // print_r($data['revisions'] );
   // die();

   $data['body_title'] = 'Revisions';
   $data['mainview'] = 'admin/pages/revision/new_revision';
   $this->load->view('admin/shared/layout',$data);
 }

 // public function show_vr_ivr()
 // {
 //  echo "<pre>";
 //  print_r($_POST);
 //  die();
 //  $data['revision_id'] =  $this->uri->segment(4);
 //  $data['invalid_revision_note'] = $this->revision_model->get_mark_as_invalid_revision_note($data['revision_id']);

 //  $data['body_title'] = 'Revisions';
 //   $data['mainview'] = 'admin/pages/revision/vr_ivr_form';
 //   $this->load->view('admin/shared/layout',$data);

 // }

  public function show_vr_ivr()
 {
  
  $revisionid = $this->input->post('revisionid');
  
  //$invalid_revision_note = $this->revision_model->get_mark_as_invalid_revision_note($revisionid);
  $data['invalid_revision_note'] = $this->revision_model->get_mark_as_invalid_revision_note($revisionid);
  // echo '<pre>';
  // print_r($data);
  // die();
  if(isset($data['invalid_revision_note']->invalid_note) && !empty($data['invalid_revision_note']->invalid_note))
  {
    echo $data['invalid_revision_note']->invalid_note;
  }
 
  


  

 }

 public function add_allrevisions_note()
{
  if($this->session->userdata('user_name'))
  {
    $note_creater = $this->session->userdata('user_name');
  

  $ordernote = $this->input->post('ordernote');
  $orderid = $this->input->post('myorder_id');
  //$note_creater = $this->input->post('note_writer');
  date_default_timezone_set('America/Los_Angeles');
		$created_date = date('d-m-Y H:i:s');

  $data = array(
    'order_id' => $orderid,
    'note_description' => $ordernote,
    'created_by' => $note_creater,
    'created_at' => $created_date,
    'status' => 5 
  );
  $result = $this->order_model->add_note($data);

  if($result)
  {
    redirect('admin/revision/getallrevisions','refresh');
      //echo "<script>$.notify('Note Addess Successfully', 'success')   </script>";
  }else{
      //echo "note not added";
  }


}
}



 public function change_revision_status()
 {
     if($this->session->userdata('user_name'))
     {
     
    
     
      $username = $this->session->userdata('user_name');

  $revisionid = $this->input->post('revisionid');
  $revisionstatus = $this->input->post('status');
  date_default_timezone_set('Asia/Karachi');
  $myDate = date('d-m-Y');
 
  date_default_timezone_set('Asia/Karachi');

  $update_create_date = date('Y-m-d H:i:s');
  $myTime = date('H:i:s');
  // echo $myTime;
  // die();
 date_default_timezone_set('America/Los_Angeles');
 $modifiedat = date('m-d-Y H:i:s');
  $data = $this->revision_model->change_revision_status_for_writer($revisionid,$revisionstatus,$username,$myDate,$myTime,$modifiedat,$update_create_date);

  if($data)
  {
    echo 'refresh';
  }
  }
}

public function mark_revision_as_valid()
{
  // echo "<pre>";
  // print_r($_POST);
  // die();
  
 $note = $this->input->post('invalidrevision_note');

  if( $this->input->post('radio2') == 'vr')
  {
   $revisionid =  $this->input->post('revisionid');
  $result =  $this->revision_model->mark_invalid_revision_as_valid($revisionid,$note);

  if($result)
  {
   redirect('admin/revision/getallrevisions','refresh');
  }
  } else if($this->input->post('radio2') == 'ivr')
  {
      $revisionid =  $this->input->post('revisionid');
      $order_detail_change = $this->revision_model->order_id_get($revisionid);


    
  $result =  $this->revision_model->mark_valid_revision_as_invalid($revisionid,$note);
  if($result)
  {
      $this->revision_model->update_order_detail_revision($order_detail_change->order_id);
   redirect('admin/revision/getallrevisions','refresh');
  }

  }
  // echo "<pre>";
  // print_r($_POST);
  // die();

}

public function view_revision_marked()
{
  $revisionid = $this->input->post('revisionid');
  $revision_note = $this->revision_model->get_client_revision_note($revisionid);

  echo $revision_note;


  
}

public function view_revision_marked_files()
{
  $revisionid = $this->input->post('revisionid');
   $files =  $this->revision_model->get_client_revision_files($revisionid);
  echo json_encode($files);
     
}

public function get_invalid_revisions()
{
         $data['title'] = 'Invalid Revision Request';

 $data['revisions'] = $this->revision_model->get_all_invalid_revisions();
 // echo '<pre>';
 // print_r($data['revisions']);
 // die();

 $data['body_title'] = 'Invalid Revisions Request';
 $data['mainview'] = 'admin/pages/revision/invalid_revision';
 $this->load->view('admin/shared/layout',$data);
}

public function revision_in_progress()
{

  $data['revisions'] = $this->revision_model->get_all_revisions_in_progress();

//   echo "<Pre>";
//   print_r($data['revisions']);
//   die();
$data['title'] = 'Revisions in Progress';
  $data['body_title'] = 'Revisions in Progress';
  $data['mainview'] = 'admin/pages/revision/revision_inprogress';
  $this->load->view('admin/shared/layout',$data);
  // echo "<pre>";
  // print_r($data);
  // die();

}

public function invalid_revision_admin()
{
   
  $revision_note = $this->input->post('revisionnote');
  $revisionid = $this->input->post('revision_id');
  $data = array(
    'rejection_note_desc'=> $revision_note,
    'revision_id'=> $revisionid

  );
  $order_detail_change = $this->revision_model->order_id_get($revisionid);

  $data = $this->revision_model->save_revision_rejection_note($data);

  if($data)
  {
      $this->revision_model->update_order_detail_revision($order_detail_change->order_id);
    $this->revision_model->mark_invalid_by_admin($revisionid,$revision_note);
    
    redirect('admin/revision/get_all_revisions','refresh');
  }
}

public function revision_inprogress_note()
{
  

   if($this->session->userdata('user_name'))
  {
    $note_creater = $this->session->userdata('user_name');
  

  $ordernote = $this->input->post('ordernote');
  $orderid = $this->input->post('myorder_id');
  //$note_creater = $this->input->post('note_writer');
  date_default_timezone_set('America/Los_Angeles');
		$created_date = date('d-m-Y H:i:s');

  $data = array(
    'order_id' => $orderid,
    'note_description' => $ordernote,
    'created_at' => $created_date,
    'created_by' => $note_creater,
    'status' => 3 
  );
  $result = $this->order_model->add_note($data);

  if($result)
  {
    redirect('admin/revision/revision_in_progress','refresh');
      //echo "<script>$.notify('Note Addess Successfully', 'success')   </script>";
  }else{
      //echo "note not added";
  }


}
}

public function approve_invalid_revision_request()
{
    // echo "<pre>";
    // print_r($_POST);
    // die();
  $revisionaction = $this->input->post('admin_revision_action');
  $note = $this->input->post('invalid_revision_request_note');
  $revision_id = $this->input->post('revisionid');
  $order_detail_change = $this->revision_model->order_id_get($revision_id);

  if($revisionaction == 1)
  {
    $data = array(
      'rejection_note_desc' => $note,
      'revision_id' =>  $revision_id

    );

    $data = $this->revision_model->save_revision_rejection_note( $data);
    if($data)
    {
        
      $this->revision_model->mark_invalid_by_admin_from_invalid_revision_request($revision_id,$note);
      $this->revision_model->update_order_detail_revision($order_detail_change->order_id);
      redirect('admin/revision/get_all_revisions','refresh');
    }
    

  }else if($revisionaction == 2)
  {

    $data = array(
      'rejection_note_desc' => $note,
      'revision_id' =>  $revision_id

    );

    $data = $this->revision_model->save_revision_rejection_note( $data);
    if($data)
    {
      $this->revision_model->mark_valid_by_admin($revision_id);
      redirect('admin/revision/get_all_revisions','refresh');
    }


  }

}

public function getallrevisions()
{
         $data['title'] = 'All Revisions';

    
  $data['revisions'] = $this->revision_model->get_all_revisions_admin();
//   echo "<pre>";
//   print_r($data['revisions']);
//   die();

  $data['body_title'] = 'All Revisions';
  $data['mainview'] = 'admin/pages/revision/all_revisions';
  $this->load->view('admin/shared/layout',$data);
}

public function revision_marked_by_admin()
{
  $data['orderid'] = $this->uri->segment(4);
  $data['writerid'] = $this->uri->segment(5);
  $data['submissionid'] = $this->uri->segment(6);

  $data['body_title'] = 'All Revisions';
  $data['mainview'] = 'admin/pages/revision/mark_revision_admin';
  $this->load->view('admin/shared/layout',$data);

}


public function get_revised_work()
{
         $data['title'] = 'Revised Work';

  $data['revised_work'] = $this->revision_model->get_revised_work_admin();
  $data['body_title'] = 'Revised Work';
  $data['mainview'] = 'admin/pages/revision/marked_revision';
  $this->load->view('admin/shared/layout',$data);
}




public function submit_revised_work()
{
  if($this->session->userdata('user_name'))
  {
      date_default_timezone_set('America/Los_Angeles');
    $updated_at = date('d-m-Y H:i:s');
    $username = $this->session->userdata('user_name');
    $revised_work = $this->uri->segment(4);
    $submitted = $this->revision_model->submit_revised_work_to_client($revised_work,$username,$updated_at);
    if($submitted)
    {
      $revised_row = $this->revision_model->get_revision_id($revised_work);
     if(isset($revised_row->revision_id))
     {
     $updated = $this->revision_model->update_submitted_by_and_at($revised_row->revision_id,$username,$updated_at);
     if($updated){
        $order_row = $this->revision_model->get_order_id_from_revision($revised_row->order_id);
        if(isset($order_row))
        {
            $bodyHeaderHead = "<b>Welcome to Nerdpapers.com</b>";
        $bodyBodyHead = "<br>Hello , <br/>
            <br> Your request for revision regarding your work has been successfully completed. Please log in to your account on nerdpapers.com and review the revisions made for you.

            <br>
            <br>
           
             We hope that the revised work is according to the provided guidelines. Thanks for placing your trust in nerdpapers.com            <br>
            <br>
            
               
                <br>
            
            <p>Regards,
            <br />NerdPapers.com Team</p>";
     // $to_head_email = $recovEmail;
      $to_head_email = $order_row->client_email;
            $this->send_email($to_head_email,"info@nerdpapers.com","NDP -$order_row->order_detail_id Revised Work Uploaded",$bodyHeaderHead.$bodyBodyHead);

            redirect('admin/revision/get_revised_work');
        }
      
     }
     }
    }

  }


  
}

public function save_mrevision_admin()
{
     date_default_timezone_set('Asia/Karachi');
     
   $createdat = date('Y-m-d H:i:s');
  $username = $this->session->userdata('user_name');
  $orderid = $this->input->post('orderid');
  $writerid = $this->input->post('writerid');
  $submissionid = $this->input->post('submissionid');
  $revision_note = $this->input->post('revision_note');
  date_default_timezone_set('America/Los_Angeles');
  $currentdateandtime = date('d-m-Y H:i:s');

  $data = array(
    'order_id' => $orderid,
    'writer_id'=> $writerid,
    'revision_note' => $revision_note,
    'created_at' => $createdat,
    'created_at_pacific'=> $currentdateandtime,
    'modified_by' => $username,
    'modified_at' => $currentdateandtime,
    'status'=> 1
  );
  $result = $this->revision_model->save_revision_marked_by_admin($data);
    
    
  if($result)
  {
    //$data = array();
        //if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
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

                      'revision_file_name'=> $uploadData[$i]['file_name'],
                      'revision_file_path'=> $_FILES['userFile']['name'],
                      'revision_id'=> $result
                    );

                    
                   $this->revision_model->upload_revision_files_admin($data);
                }
            }
            



           

    $data = $this->submission_model->first_revision_marked_in_submission($submissionid);

    if($data)
    {
          $email_res = $this->revision_model->getuseremail($orderid);
          if(isset($email_res->client_email))
          {
              $bodyHeaderHead = "<b>Welcome to Nerdpapers.com</b>";
        $bodyBodyHead = "<br>Hello , <br/>
<br>Your request for revision regarding your work has been successfully placed at <a href='http://nerdpapers.com/'>nerdpapers.com </a>. We are going through your revision request and we will get back to you as soon as possible.            <br>
            <br>
            <br>
We pride ourselves on customer satisfaction and your patience is appreciated. Thanks for placing your trust in <a href='http://nerdpapers.com/'>nerdpapers.com </a>.
            <br>
                
                <br>
            
            <p>Regards,
            <br />NerdPapers Team</p>";
     // $to_head_email = $recovEmail;
      $to_head_email = $email_res->client_email;
      
      $this->send_email($to_head_email,"info@nerdpapers.com","NDP -$email_res->order_detail_id Revision Request Received",$bodyHeaderHead.$bodyBodyHead);
       redirect('admin/submission/get_all_submissions','refresh');
          }

     
    }
    
  }

}

public function view_revised_work($revisionid)
{
  $data['single_revised_work']=$this->revision_model->viewrevised_work($revisionid);
  // echo "<pre>";
  // print_r($data['single_revised_work']);
  // die();
  $data['body_title'] = 'Revised Work';
  $data['mainview'] = 'admin/pages/revision/marked_revision_single';
  $this->load->view('admin/shared/layout',$data);

}

public function remove_revision_file()
{
  $revisionfile_id = $this->input->post('revision_file_id');

  $deleted = $this->revision_model->remove_single_revision_file($revisionfile_id);

  if($deleted)
  {
    echo 'success';
  }
}

public function add_view_revision_marked()
{
 
$revisionid =   $this->input->post('revisionid_revision_marked');
$revision_note =   $this->input->post('revisionnote_client');

 $filesCount = count($_FILES['add_revision_file']['name']);
            //echo $filesCount;
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['add_revision_file']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['add_revision_file']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['add_revision_file']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['add_revision_file']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['add_revision_file']['size'][$i];

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

                      'revision_file_name'=> $uploadData[$i]['file_name'],
                      'revision_file_path'=> $_FILES['userFile']['name'],
                      ' revision_id'=> $revisionid
                    );

                    
                   $this->revision_model->update_files_view_revision_marked($data);
                }
            }
            


$note_updated = $this->revision_model->update_view_revision_marked($revisionid,$revision_note);
if($note_updated)
{
  redirect('admin/revision/getallrevisions','refresh');
}

}


public function edit_writer_revisedwork_note()
{
   $revised_work_id = $this->input->post('revised_work_id');
  $revised_work_note = $this->revision_model->get_writer_revised_work_note($revised_work_id);

  echo $revised_work_note;

}


public function edit_writer_revised_work_files()
{
  
  $revised_work_id = $this->input->post('revised_work_id');
   
   $files =  $this->revision_model->get_writer_revisedwork($revised_work_id);
  echo json_encode($files);
}

public function edit_writer_revised_work_report_files()
{
  
  $revised_work_id = $this->input->post('revised_work_id');
   
   $files =  $this->revision_model->get_writer_report_revisedwork($revised_work_id);
  echo json_encode($files);
}

public function remove_revised_work_file()
{
  $revised_work_file_id = $this->input->post('revised_work_file_id');

  $deleted = $this->revision_model->remove_single_revised_work_file($revised_work_file_id);

  if($deleted)
  {
    echo 'success';
  }

}

public function remove_revised_work_report_file()
{
  $revised_work_file_id = $this->input->post('revised_work_file_id');

  $deleted = $this->revision_model->remove_single_revised_work_report_file($revised_work_file_id);

  if($deleted)
  {
    echo 'success';
  }

}

public function update_revised_work_file_notes()
{

  // echo "<pre>";
  // print_r($_POST);
  // die();
 $revised_work_id =   $this->input->post('revisedwork_id_edit_revised_work');
$revised_work_note =   $this->input->post('writer_revised_work_note');

 $filesCount = count($_FILES['markedFiles']['name']);
            //echo $filesCount;
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['markedFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['markedFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['markedFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['markedFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['markedFiles']['size'][$i];

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

                      'revised_work_file_name'=> $uploadData[$i]['file_name'],
                      'revised_work_file_path'=> $_FILES['userFile']['name'],
                      'revised_work_id'=> $revised_work_id
                    );

                    
                   $this->revision_model->update_files_revised_work($data);
                }
            }



            // report files
            $filesCount = count($_FILES['reportmarkedFiles']['name']);
            //echo $filesCount;
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['reportmarkedFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['reportmarkedFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['reportmarkedFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['reportmarkedFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['reportmarkedFiles']['size'][$i];

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

                      'revised_work_report_file_name'=> $uploadData[$i]['file_name'],
                      'revised_work_report_file_path'=> $_FILES['userFile']['name'],
                      'revised_work_id_fk'=> $revised_work_id
                    );

                    
                   $this->revision_model->update_report_files_revised_work($data);
                }
            }
            


$note_updated = $this->revision_model->update_writer_revised_work_note($revised_work_id,$revised_work_note);
if($note_updated)
{
  redirect('admin/revision/get_revised_work','refresh');
}

}

public function get_date_time_inprocess()
{
  $revisionid = $this->input->post('revision_id');
    $date_time = $this->revision_model->get_date_and_time_inprocess_revision($revisionid);


    if($date_time != 'nodate_time')
    {
      
       $yrdata= strtotime($date_time);


      
    $result = date('M d,Y H:i:s', $yrdata);
    
    $pacificdatetime =  $this->revision_model->get_pacific_datetime($revisionid);
    if($pacificdatetime != 'no_pacific_date_time')
    {
        $yrdata1= strtotime($pacificdatetime);


      
    $result_pacific = date('M d,Y H:i:s', $yrdata1);
        
         $data['order_datetime2'] = $result_pacific;
    }

    $data['order_id'] = $revisionid;
    $data['order_datetime'] = $result;


    echo json_encode($data);
   }elseif($date_time == 'nodate_time'){

    $create_at_date = $this->revision_model->get_datetime_on_mr($revisionid);

    $created_date= strtotime($create_at_date);


      
    $result2 = date('M d,Y H:i:s', $created_date);
    
    // date_default_timezone_set('America/Los_Angeles');
    //     $result3 = date('M d,Y H:i:s', $created_date);
     
    $pacifictime =  $this->revision_model->get_pacific_time($revisionid);
    if(isset($pacifictime))
    {
         $created_date2= strtotime($pacifictime->created_at_pacific);
         $result2_pacific = date('M d,Y H:i:s', $created_date2);
         $data['order_datetime2'] = $result2_pacific;
    }
    
    $data['order_id'] = $revisionid;
    $data['order_datetime'] = $result2;
   


    echo json_encode($data);
     
   }

   


}


public function revision_quality()
{
  $revisionid = $this->input->post('revision_id');
  $revision_quality = $this->revision_model->set_revision_quality($revisionid);


  $myarray = array();
  $data['revision_id'] = $revisionid;
  $data['revision_quality'] = $revision_quality;

  echo json_encode($data);
}

public function change_revision_quality()
{
 
  $revisionid = $this->input->post('revisionid');
  
  $this->revision_model->changerevisionid($revisionid);
}

public function delete_revised_work()
{
  
  $revisedworkid = $this->input->post('revised_work_id');
  
 // echo 'working';
 
 //$this->revision_model->g
 //echo $revisedworkid;
 $revisedworkrow = $this->revision_model->get_revision_id_from_revised_work($revisedworkid);

 if(isset($revisedworkrow->revision_id))
 {
  
  $res_row = $this->revision_model->get_revision_id($revisedworkid);
  if($res_row)
  {
    $deleted = $this->revision_model->delete_revised_work($revisedworkid);
    
    if($deleted)
    {
      // echo '<pre>';
      // print_r($res_row);
      // die();
      $updated = $this->revision_model->update_revisions_status($res_row->revision_id);
      if($updated)
      {
        // echo $updated;
        // die();
        echo 'success';
      }
    }
   
    


  }
 }


//  echo '<Pre>';
//  print_r($revisedworkrow);
//  die();
//   die();
}


public function newrevisions_count()
{
  $mycount =  $this->revision_model->get_newrevision_count();
  echo $mycount;
}

public function inprocessrevisions_count()
{
  $mycount =  $this->revision_model->get_inprocessrevision_count();
  echo $mycount;

}
public function invalidrevisions_count()
{
  $mycount =  $this->revision_model->get_invalidrevisions_count();
  echo $mycount;
}


public function revisedwork_count()
{
  $mycount =  $this->revision_model->get_revisedwork_count();
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


// public function uploadrevisionfiles()
// {

//   return "hi";
// }

// public function mark_revision_admin()
// {


//  $data['body_title'] = 'All Revisions';
//   $data['mainview'] = 'admin/pages/revision/mark_revision_admin';
//   $this->load->view('admin/shared/layout',$data);


// }

   // public function get_revision_writer()
   // {
   // 	$writerid = $this->uri->segment(3);
   // 	$data['revisionid'] = $this->uri->segment(4);
   // 	$data['writer_detail'] = $this->revision_model->get_writer($writerid);

   // 	$this->load->view('pages/revisions/revision_to_writer',$data);
   // }

//    public function revision_assigned($id)
//    {

// $data = $this->revision_model->update_revision_status($id);
// if($data)
// {
// 	redirect('revision/get_all_revisions','refresh');
// }else{
// 	echo "not updated";
// }

//    }


   // public function writer_latest_revisions()
   // {
   // 		$writerid = $this->uri->segment(3);
   // 		$data['writer_latest_revisions'] = $this->revision_model->get_all_writer_revisions($writerid);

   // 		$this->load->view('pages/revisions/writer_latest_revisions',$data);
   // 		// echo $writerid;
   // 		// die();
   // }


   // public function revised_work()
   // {



   // 	$revisionid = $this->input->post('revision_id');

   // 	$data = array(

   // 		'order_id' => $this->input->post('order_id'),
   // 		'writer_id' => $this->input->post('writer_id'),
   // 		'revised_work_file' => 'revisedworkfile.doc',
   // 		'revised_report_file' => 'reportfile.pdf'
   // 	);

   // 	$data = $this->revision_model->save_revised_work($data);
   // 	if($data)
   // 	{
   // 		$changed = $this->revision_model->change_revision_status($revisionid);

   // 		if($changed)
   // 		{
   // 			redirect('revision/writer_latest_revisions','refresh');
   // 		}else{
   // 			echo "not changed";
   // 		}

   // 	}else{
   // 		echo "Revised work not saved";
   // 	}

   // }


// public function all_revisions_writer()
// {
// 	$writerid = $this->uri->segment(3);


// 	$data['writer_all_revisions'] = $this->revision_model->get_all_revisions_writer($writerid);
// 	$this->load->view('pages/revisions/writer_all_revisions',$data);
// }

// public function revised_work_admin()
// {
// 	$data['admin_revised_work'] = $this->revision_model->get_revised_work();

// 	$this->load->view('pages/revisions/show_revised_work',$data);

// }


// public function submit_revised_work()
// {
// 	$revised_work_id = $this->uri->segment(3);

// 	$result = $this->revision_model->submit_revised_work_to_client($revised_work_id);
// 	if($result)
// 	{
// 		redirect('revision/revised_work_admin','refresh');
// 	}
// }


}
