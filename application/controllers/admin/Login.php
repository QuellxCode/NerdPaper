<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->model('login_model');
		$this->load->library('session');

	}

	public function index()
	{
		

		$this->load->view('admin/pages/login');
	}


	public function check()
	{
		$this->load->library('form_validation');

        // set validation rules
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == false) {

			
            // validation not ok, send validation errors to the view
			$data["message"] = 'username or password required.';
			$this->load->view('admin/pages/login', $data);

		} else {

            // set variables from the form
			$useremail = $this->input->post('email');
			$password = $this->input->post('password');

			if ($this->login_model->get_user($useremail,$password)) {

                //$user_id = $this->user_model->get_user_id_from_username($username);
				$user = $this->login_model->get_user($useremail,$password);


                // if ($user->estatus == 2) {
                //     $data["message"] = 'You are blocked by admin.';
                //     $this->load->view('login_view', $data);
                // } else {
                    // set session user datas
                    // $_SESSION['eid'] = (string)$user->eid;
                    // $_SESSION['eeid'] = (string)$user->eeid;
                    // $_SESSION['ishead'] = (string)$user->ishead;
                    // $_SESSION['edepartment'] = (string)$user->edid;
				$_SESSION['user_id'] = (int)$user->user_id;
				$_SESSION['email'] = (string)$user->user_email;
				$_SESSION['password'] = (string)$user->user_password;
				$_SESSION['userrole'] = (string)$user->user_role;
				$_SESSION['user_name'] = (string)$user->user_name;
				$_SESSION['writer_region_id'] = (int)$user->writer_region_id;
                    // $_SESSION['edesignation'] = (string)$user->edesignation;
                    // $_SESSION['logged_in'] = (bool)true;

                    // user login ok
				if(!isset($_SESSION["current_view"])) {
					$data["message"] = 'Successfully logged in';
					$data["current_view"] = array("current_view" => "pages/my_orders");
                        // $GetTotalLeaves = $this->Leave_model->GetTotalLeaves($_SESSION['eid']);
                        // $data["GetTotalLeaves"] = array("GetTotalLeaves" =>$GetTotalLeaves);
					redirect('admin/neworder');
				}
				else
				{
					redirect('/index.php/home/index');
				}
                //}

			} else {

                // login failed
				//$data["message"] = 'Wrong username or password.';
				$this->session->set_flashdata('login_failed','Invalid Username or Password');
				redirect('admin/login','refresh');
                // send error to the view
				//$this->load->view('pages/login', $data);
			}

		}

	}


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('userrole');
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('writer_region_id');
		$this->session->unset_userdata('writer_rate_page');
		$this->session->unset_userdata('user_id');
    
		redirect('admin/login');
	}

	
}
