<?php


class Role_model extends CI_Model
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
    public function save_role($data) {

        $this->db->insert('users',$data);
        return true;

    }

    // public function get_region()
    // {
    //     $result = $this->db->get('users');

    //     return $result->result();
    // }

    public function get_roles()
    {
        $result = $this->db->get('users');

      return $result->result();
    }

    public function get_role_byid($id)
    {
        $this->db->where('user_id',$id);
        $result = $this->db->get('users');
        return $result->row();
    }

    public function update_roles($id,$data)
    {
         $this->db->where('user_id',$id);
        $this->db->update('users',$data);
        return true;
    }

    public function deleterole($id)
    {
        $this->db->where('user_id',$id);
        $this->db->delete('users');
        return true;
    }

    public function get_role_status($userid)
    {
        $this->db->where('user_id',$userid);
        return $this->db->get('users')->row()->role_status;

    }

    public function change_role_status($role_status,$userid)
    {
        $column = array('role_status' => $role_status);    
    $this->db->where('user_id', $userid);
    $this->db->update('users', $column); 
    return true;

    }

    
   
}