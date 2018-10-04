<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submission extends CI_Controller {

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

    $this->load->model('submission_model');
    $this->load->model('order_model');
    $this->load->library('session');
    if ($this->session->userdata('user_name') === NULL)
    {

      redirect('admin/login','refresh');
    }

  }

  public function get_all_submissions()
  {
      $data['title'] = 'Submission';
      //$data['all_submissions'] = $this->submission_model->get_submissions();
     // $data['all_submissions'] = $this->submission_model->get_submission_detail();

     // $this->load->view('pages/view_submissions',$data);
    $data['submissions_detail'] = $this->submission_model->get_submission_detail();

    // echo "<pre>";
    // print_r($data['submissions_detail']);
    // die();
    // foreach ($data['submissions_detail'] as $key => $sub) {

    //    echo $data['submissions_detail'][$key]->submission_id.'<br>';
    // }

    // die();

      // echo "<pre>";
      // print_r($data['submissions_detail']);
      // die();

    $data['body_title'] = 'Submissions';
    $data['mainview'] = 'admin/pages/submission/submission';
    $this->load->view('admin/shared/layout',$data);

  }

  public function fullpaid_submission()
  {
    if($this->session->userdata('user_name'))
    {
      $username = $this->session->userdata('user_name');

      $submissionid = $this->uri->segment(4);

      date_default_timezone_set('America/Los_Angeles');
      $currentdatetime =   date('Y-m-d H:i:s');      
        // echo $currentdatetime;
        // die();

      $result = $this->submission_model->show_submission_to_client($submissionid,$username,$currentdatetime);

      if($result)
      {
        $submissionrow = $this->submission_model->get_order_id_in_submission($submissionid);
        if($submissionrow)
        {
          $updated = $this->submission_model->update_order_status_in_assignorder($submissionrow->order_id);

          if($updated)
          {
            $orderdetail_updated = $this->submission_model->update_order_status_in_order_detail($submissionrow->order_id);
            if($orderdetail_updated)
            {
              $user_email =   $this->submission_model->get_user_email($submissionrow->order_id);
            //   echo '<pre>';
            //   print_r($user_email);
            //   die();
                     // Auto responder //
        $bodyHeaderHead = "<b>Welcome to Nerdpapers.com</b>";
        $bodyBodyHead = "<br>Hi , <br/>
            <br> Your order has been completed by our writer. Kindly log in your account at (nerdpapers.com) and download your work. Your project is ready to submit (be sure to put your name on it!) in complete confidence that the research and writing behind it will serve you well.
            <br>
            <br>
           
            If you have any difficulty downloading or any further questions, just (contact us) and we are happy to help!
            <br>
            <br>
            
                We sincerely appreciate the opportunity to work with you and hope you will tell your friends where they can find the #1 online source for world-class writing services.
                <br>
                <br>
            
            <p>Thanks,
            <br />NerdPapers Team</p>";
     // $to_head_email = $recovEmail;
      $to_head_email = $user_email->client_email;
      
      $this->send_email($to_head_email,"info@nerdpapers.com","Your Order NDP -$submissionrow->order_id is ready for download!",$bodyHeaderHead.$bodyBodyHead);
          
              redirect('admin/submission/get_all_submissions','refresh');
            }
            
          }
        }
        
      }
    }

  }

  public function halfpaid_submission()
  {
   $data['submissionid'] = $this->uri->segment(4);
   $orderid = $this->uri->segment(5);
   $this->submission_model->changeorderstatus($orderid);

   $data['body_title'] = 'Submissions';
   $data['mainview'] = 'admin/pages/submission/halfpaid_submission';
   $this->load->view('admin/shared/layout',$data);

 }


 public function send_half_submission()
 {
      // echo "<pre>";
      // print_r($_POST);
      // die();
      $id = $this->input->post('submissionid');

  if ($this->session->userdata('user_name')) {

    // echo "<pre>";
    // print_r($_FILES);
    // die();

    $half_submitted_by = $this->session->userdata('user_name');

    

    if(!empty($_FILES['half_file']['name'])){
      $config['upload_path'] = '../admin.writersverge/documents';
      $config['allowed_types'] = 'gif|jpg|png|doc|docx|txt|pdf|csv|jpeg|xlsx|rar|zip';
      $config['file_name'] = $_FILES['half_file']['name'];

                //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);

      if($this->upload->do_upload('half_file')){
        $uploadData = $this->upload->data();
        $picture = $uploadData['file_name'];
      }else{
        $picture = '';
      }
    }else{
      $this->session->set_flashdata('category_error', 'Kindly add the file');
      redirect('admin/submission/halfpaid_submission/'.$id);
    }


    date_default_timezone_set('America/Los_Angeles');
    $currentdatetime =   date('Y-m-d H:i:s');

        # code...

    $submissionid = $this->input->post('submissionid');
    $half_file = $picture;
  }
  $result =  $this->submission_model->send_half_file($submissionid,$half_file,$currentdatetime,$half_submitted_by);

  if($result)
  {
    
    $submissionrow = $this->submission_model->get_order_id_in_submission($submissionid);

    if($submissionrow){
       $updated = $this->submission_model->update_order_status_in_assignorder($submissionrow->order_id);

          if($updated)
          {
            $orderdetail_updated = $this->submission_model->update_order_status_in_order_detail($submissionrow->order_id);
            if($orderdetail_updated)
            {
                $user_email =   $this->submission_model->get_user_email($submissionrow->order_id);
            //   echo '<pre>';
            //   print_r($user_email);
            //   die();
                     // Auto responder //
        $bodyHeaderHead = "<b>Welcome to Nerdpapers.com</b>";
        $bodyBodyHead = "<br>Hi , <br/>
            <br> Your order has been completed by our writer. Kindly log in your account at (nerdpapers.com) to view first copy of your work and pay the remaining amount so that we can send you the final copy of your work. 
            <br>
            <br>
            If you have any difficulty downloading or any further questions, just (contact us) and we are happy to help!
            <br>
                <br>
                We sincerely appreciate the opportunity to work with you and hope you will tell your friends where they can find the #1 online source for world-class writing services.
                <br>
                <br>
            
            <p>Thanks,
            <br />NerdPapers Team</p>";
     // $to_head_email = $recovEmail;
      $to_head_email = $user_email->client_email;
      
      $this->send_email($to_head_email,"info@nerdpapers.com","Your Order NDP -$submissionrow->order_id is ready for download!",$bodyHeaderHead.$bodyBodyHead);
              redirect('admin/submission/get_all_submissions','refresh');
            }
            
          }

    }
    
  }

     // echo "Half Submission would get submit";
}

public function bonus_deduction()
{
 $submissionid = $this->uri->segment(4);



 $data['body_title'] = 'Bounus Deduction';
 $data['mainview'] = 'admin/pages/submission/bonus_deduction';
 $this->load->view('admin/shared/layout',$data);
}

public function bonus_deduction_calculation()
{

  $percentage = $this->input->post('bonus_ded_percentage');
  $writerid = $this->input->post('writerid');
  $orderid = $this->input->post('orderid');
  $this->input->post('deductionnote');

  $writerrateper_page = $this->submission_model->get_user_detail($writerid);
  $no_of_pages = $this->submission_model->get_no_of_pages($orderid);
  $compensation = $writerrateper_page * $no_of_pages;

  // echo '<br>';
  // echo $compensation;

  if($percentage < 0 )
  {

   $negativeno;
   $bonus_deduction = $compensation * abs($percentage) / 100;
   $compensation_after_ded =  $compensation - $bonus_deduction;
  //  echo '<br>';
  //  echo $compensation_after_ded;
  // die();
 }else{
  $bonus_deduction = $compensation * $percentage / 100;
  $compensation_after_bonus =  $compensation + $bonus_deduction;
    // echo '<br>';
    // echo $compensation_after_bonus;
    // die();
}



}

public function delete_submission()
{
  //$submissionid = $this->uri->segment(4);
  $submissionid = $this->input->post('submission_id');

  $orderid = $this->submission_model->get_orderid_from_submission($submissionid);
 
  $orderassingupdated = $this->submission_model->set_order_in_progress_writer($orderid);
 
  if($orderassingupdated)
  {
    $order_in_progress =$this->submission_model->set_order_in_progress_admin($orderid);
    if($order_in_progress)
    {
      // echo $order_in_progress;
      // die();
     $result = $this->submission_model->delete_submission($submissionid);
 
   if($result)
   {
     echo 'success';
    
   }
    }
   
 }


}

// public function edit_submission()
// {
//   $data['submission_id'] = $this->uri->segment(4);
//   // echo  $data['submission_id'];
//   // die();
//   $data['writernote']  = $this->submission_model->edit_submission_note_file($data['submission_id']);


//    $data['submissionfiles'] = $this->submission_model->edit_submission_files($data['submission_id']);
//       //$data['ordernote'] = end($data);
//   //$data['ordernote'] = array_pop($stack);
//   //$data['submission'] = $stack;

//       // echo "<pre>";
//       // print_r($stack);
//       // die();

//   $data['body_title'] = 'Edit Submissions';
//   $data['mainview'] = 'admin/pages/submission/edit_submission';
//   $this->load->view('admin/shared/layout',$data);


// }

public function edit_submission_note()
{


  $submission_id = $this->input->post('submissionid');

  $writer_note = $this->submission_model->edit_submission_note_file($submission_id);

  echo $writer_note;
  
  
}

public function add_submissionorder_note()
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
      'created_at' =>$created_date, 
      'status' => 2 
    );
    $result = $this->order_model->add_note($data);

    if($result)
    {
      redirect('admin/submission/get_all_submissions','refresh');
      //echo "<script>$.notify('Note Addess Successfully', 'success')   </script>";
    }else{
      //echo "note not added";
    }


  }
}

public function change_quality_status()
{

  $submission_id = $this->input->post('submissionid');
  $result = $this->submission_model->change_quality_submission($submission_id);

  if($result)
  {
    echo 'success';
  }
}



public function update_submission_file_notes()
{

              // echo '<pre>';
              // print_r($_POST);
              // die();
              // $desc = $this->input->post('description');
  $submissionid_edit_submission = $this->input->post('submissionid_edit_submission');
  $writer_submission_note = $this->input->post('writer_submission_note');




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

        'submission_file_name'=> $uploadData[$i]['file_name'],
        'submission_file_path'=> $_FILES['userFile']['name'],
        ' submission_id'=> $submissionid_edit_submission
      );


      $this->submission_model->update_submission_files_admin($data);
    }
  }

  // Update Report Files

  $filesCount = count($_FILES['userreportFiles']['name']);
            //echo $filesCount;
  for($i = 0; $i < $filesCount; $i++){
    $_FILES['userFile']['name'] = $_FILES['userreportFiles']['name'][$i];
    $_FILES['userFile']['type'] = $_FILES['userreportFiles']['type'][$i];
    $_FILES['userFile']['tmp_name'] = $_FILES['userreportFiles']['tmp_name'][$i];
    $_FILES['userFile']['error'] = $_FILES['userreportFiles']['error'][$i];
    $_FILES['userFile']['size'] = $_FILES['userreportFiles']['size'][$i];

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

        'submission_report_file_name'=> $uploadData[$i]['file_name'],
        'submission_report_file_path'=> $_FILES['userFile']['name'],
        ' submission_id_fk'=> $submissionid_edit_submission
      );


      $this->submission_model->update_submission_report_files_admin($data);
    }
  }

  $result = $this->submission_model->update_writernote_on_submission($submissionid_edit_submission,$writer_submission_note);

  if($result)
  {
    redirect('admin/submission/get_all_submissions','refresh');
  }






    // $data = $this->submission_model->first_revision_marked_in_submission($submissionid);



}

public function view_writer_submission_files()
{

  $submissionid = $this->input->post('submissionid');
  $files =  $this->submission_model->get_writer_submission_files($submissionid);
  echo json_encode($files);
}

public function view_writer_submission_report_files()
{

  $submissionid = $this->input->post('submissionid');
  $files =  $this->submission_model->get_writer_submission_report_files($submissionid);
  echo json_encode($files);
}


public function remove_submission_file()
{

  $submissionfile_id = $this->input->post('submission_file_id');
  $deleted = $this->submission_model->remove_single_submission_file($submissionfile_id);

  if($deleted)
  {
    echo 'success';
  }
}

public function remove_submission_report_file()
{

  $submissionfile_id = $this->input->post('submission_file_id');
  $deleted = $this->submission_model->remove_single_submission_report_file($submissionfile_id);

  if($deleted)
  {
    echo 'success';
  }
}

public function submission_quality()
{
  $submissionid = $this->input->post('submission_id');
  $submission_quality = $this->submission_model->set_submission_quality($submissionid);

  $myarray = array();
  $data['submission_id'] = $submissionid;
  $data['submission_quality'] = $submission_quality->submission_quality;
  $data['submission_quality_note'] = $submission_quality->submission_quality_note;


  echo json_encode($data);
}

public function change_submission_quality()
{
  // $submissionid = $this->input->post('submissionid');

  // $this->submission_model->changesubmissionid($submissionid);
}

public function add_submission_quality_note()
{
  // echo "<pre>";
  // print_r($_POST);
  // die();

  $note_created_by = $this->session->userdata('user_name');
  date_default_timezone_set('America/Los_Angeles');
  $note_created_at = date("Y-m-d H:i:s");

  $qualitynote = $this->input->post('qualitynote');
  $submissionid = $this->input->post('submissionid');
  $submissionid = $this->input->post('submissionid');
  
  $this->submission_model->changesubmissionid($submissionid);
  $result = $this->submission_model->add_quality_note($qualitynote ,$note_created_by,$note_created_at, $submissionid);
  if($result)
  {
   redirect('admin/submission/get_all_submissions','refresh');
 }
}

public function viewqualitynote()
{
  $submissionid = $this->input->post('submissionid');
  $res = $this->submission_model->get_submission_quality_note($submissionid);
  if($res)
  {
  // echo $res->submission_quality_note;
   echo json_encode($res);
 }else{
  echo 'nodata';
}

}


public function submissions_count()
{
  $mycount =  $this->submission_model->get_submissions_count();
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
