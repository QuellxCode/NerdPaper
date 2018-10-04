<?php


class Login_model extends CI_Model
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
    public function get_user($user_email,$password) {

        // $this->db->from('users');
        // $where = "(user_email='$user_email')";
        // $where = 
        // $this->db->where($where);
        // return $this->db->get()->row();

        $this->db->where('user_email',$user_email);
        $this->db->where('user_password',$password);
        $this->db->where('role_status',1);
         return $this->db->get('users')->row();


    }


    
   
}