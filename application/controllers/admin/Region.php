<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region extends CI_Controller {

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
       $this->load->model('region_model');
        $this->load->library('session');

        if ($this->session->userdata('user_name') === NULL)
    {
  
      redirect('admin/login','refresh');
    }

    }

   public function add_region()
   {
       

    $region_id = $this->uri->segment(3);

    if($region_id)
    {
       //$data['single_region'] = $this->region_model->get_region_byid($region_id);
       $data = $this->region_model->get_region_byid($region_id);
       // echo '<pre>';
       // print_r($data);
       // die();
       
    }

    $data['title'] = 'Add Region';
       $data['regions'] =  $this->region_model->get_region();
      // $data['mainview'] = 'pages/components/regions';

    //  $this->load->view('admin/pages/region/regions',$data);
$data['breadcrumb'] = 'Regions';
      $data['body_title'] = 'Regions';
		$data['mainview'] = 'admin/pages/region/regions';
		$this->load->view('admin/shared/layout',$data);
   }


   public function save_region($id = null)
   {
    

    
    // if we have id (update)
    if($id)
    {
        $data = array(

        'region_name' => $this->input->post('region_name')

    );

    $result = $this->region_model->update_region($id,$data);

    if($result)
    {
        redirect('admin/region/add_region');
    }else{
        echo "problem";
    }


    }else{

   

    // if id is empty do below (insert data)

    $data = array(

        'region_name' => $this->input->post('region_name')

    );

    $result = $this->region_model->save_region($data);

    if($result)
    {
        redirect('admin/region/add_region');
    }else{
        echo "problem";
    }
   }

}

public function delete_region($id)
{
    $result = $this->region_model->delete_region($id);
    if($result)
    {
        redirect('admin/region/add_region');
    }else{
        echo "problem";
    }
}

	
}
