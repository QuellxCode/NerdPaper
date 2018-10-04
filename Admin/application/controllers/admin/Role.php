<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

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
       $this->load->model('role_model');
       $this->load->model('region_model');
        $this->load->library('session');

        if ($this->session->userdata('user_name') === NULL)
    {
  
      redirect('admin/login','refresh');
    }

    }

   public function add_role()
   {
    $data['title'] = 'Add Role';
    $role_id = $this->uri->segment(4);

    

    if($role_id)
    {
       //$data['single_region'] = $this->region_model->get_region_byid($region_id);
       $data['role'] = $this->role_model->get_role_byid($role_id);

       // echo "<pre>";
       // print_r($data['role']);
       // die();
       
       
    }

    
       $data['roles'] =  $this->role_model->get_roles();

       // echo "<pre>";
       // print_r($data['roles']);
       // die();

       $data['regions'] =  $this->region_model->get_region();

       // echo "<Pre>";
       // print_r($data['regions']);
       // die();
    //$data['roles'] =  $this->role_model->get_roles();
      // $data['mainview'] = 'pages/components/regions';

    //  $this->load->view('admin/pages/region/regions',$data);
$data['breadcrumb'] = 'Roles';
      $data['body_title'] = 'Regions';
		$data['mainview'] = 'admin/pages/role/roles';
		$this->load->view('admin/shared/layout',$data);
   }

   public function manage_roles()
   {
       $data['title'] = 'Manage Roles';

       $data['roles'] =  $this->role_model->get_roles();

       // echo "<pre>";
       // print_r($data['roles']);
       // die();

       $data['regions'] =  $this->region_model->get_region();

    $data['breadcrumb'] = 'Roles';
      $data['body_title'] = 'Regions';
    $data['mainview'] = 'admin/pages/role/manage_roles';
    $this->load->view('admin/shared/layout',$data);
   }


   public function save_role($id = null)
   {
      // echo $id;
      // echo "<pre>";
      // print_r($_POST);
      // die();

    // if we have id (update)
         if($id)
    {
        $data = array(

        
        'user_name' => $this->input->post('agent_name'),
        'user_email' => $this->input->post('agent_email'),
        'user_coantact' => $this->input->post('agent_number'),
        'user_password' => $this->input->post('agent_password'),
        'user_role' => $this->input->post('role_type'),
        'writer_region_id' => $this->input->post('select_region'),
        'writer_rate_perpage' => $this->input->post('rate_per_page'),
        'allowed_orders' => $this->input->post('allowed_orders')

    );

    $result = $this->role_model->update_roles($id,$data);

    if($result)
    {
      $this->session->set_flashdata('roleupdate', 'Role Updated successfully');
        redirect('admin/role/manage_roles');
    }else{
        echo "problem";
    }


    }else{

       $data = array(

        
        'user_name' => $this->input->post('agent_name'),
        'user_email' => $this->input->post('agent_email'),
        'user_coantact' => $this->input->post('agent_number'),
        'user_password' => $this->input->post('agent_password'),
        'user_role' => $this->input->post('role_type'),
        'writer_region_id' => $this->input->post('select_region'),
        'writer_rate_perpage' => $this->input->post('rate_per_page'),
        'allowed_orders' => $this->input->post('allowed_orders')

    );

    $result = $this->role_model->save_role($data);

    if($result)
    {
       $this->session->set_flashdata('roleadded', 'Role Added successfully');
        redirect('admin/role/add_role');
    }else{
        echo "problem";
    }
    }
   

}

public function delete_role()
{
  $roleid = $this->uri->segment(4);
  $result = $this->role_model->deleterole($roleid);

   

   if($result)
   {

    $this->session->set_flashdata('roledeleted', 'Role Deleted successfully');
    redirect('admin/role/manage_roles','refresh');

   }

}



public function delete_region($id)
{
    $result = $this->region_model->delete_region($id);
    if($result)
    {
        redirect('admin/region/add_region');
        $this->session->set_flashdata('roledeleted', 'Role Deleted successfully');
    }else{
        echo "problem";
    }
}

public function account()
   {
    // $userid = $this->uri->segment(4);
    $userid = $this->input->post('userid');
    $rolestatus = $this->role_model->get_role_status($userid);

    if($rolestatus == 1)
    {

     $result =  $this->role_model->change_role_status(0,$userid);

     if($result)
     {
      
       $this->session->set_flashdata('roleblocked', 'Blocked successfully');
       echo 'success';
      // redirect('admin/role/manage_roles','refresh');
     }

    }else if($rolestatus == 0)
    {
       $result =$this->role_model->change_role_status(1,$userid);

       if($result)
     {
      
       $this->session->set_flashdata('roleunblocked', 'Unblocked successfully');
       echo 'success';
      // redirect('admin/role/manage_roles','refresh');
     }
    }

   }

	
}
