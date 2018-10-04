<?php


class Region_model extends CI_Model
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

    public function get_region()
    {
        $result = $this->db->get('region');

        return $result->result();
    }
    public function save_region($data) {

        $this->db->insert('region',$data);
        return true;

    }

    

    public function get_region_byid($id)
    {
        $this->db->where('region_id',$id);
        $result = $this->db->get('region');
        return $result->row();

    }

    public function update_region($id,$data)
    {
        $this->db->where('region_id',$id);
        $this->db->update('region',$data);
        return true;
    }

    

    public function delete_region($id)
    {
        $this->db->where('region_id',$id);
        $this->db->delete('region');
        return true;
    }

    
   
}