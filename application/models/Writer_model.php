<?php


class Writer_model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }

    // public function insert($data) {
    //     if ($this->db->insert("employee", $data)) {
    //         return true;
    //     }
    // }

    public function get_all_writers()
    {
        $this->db->where('user_role','writer');
        $result = $this->db->get('users');
        return $result->result();
    }

    public function get_all_agents()
    {
        $this->db->where('user_role','Admin');
        $result = $this->db->get('users');
        return $result->result();
    }


    public function get_single_writer($writerid)
    {
        $this->db->where('user_id',$writerid);
        $data = $this->db->get('users');
        return $data->row()->user_name;

    }
    // public function save_region($data) {

    //     $this->db->insert('region',$data);
    //     return true;

    // }

    

    // public function get_region_byid($id)
    // {
    //     $this->db->where('region_id',$id);
    //     $result = $this->db->get('region');
    //     return $result->row();

    // }

    // public function update_region($id,$data)
    // {
    //     $this->db->where('region_id',$id);
    //     $this->db->update('region',$data);
    //     return true;
    // }

    // public function delete_region($id)
    // {
    //     $this->db->where('region_id',$id);
    //     $this->db->delete('region');
    //     return true;
    // }

    
   
}