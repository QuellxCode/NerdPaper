<?php


class Leads_model extends CI_Model
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
    public function all_leads() {

        $this->db->order_by("created_at", "ASC");
        $data = $this->db->get('leads');
        return $data->result();

    }
    
    public function addassign_lead_comment($addcoment)
{

    $this->db->insert('lead_notes', $addcoment);
    return true;

}


    public function lead_statu_db($leadid, $leadstatus)
    {


     $column = array('lead_status' => $leadstatus);    
     $this->db->where('lead_id', $leadid);
     $this->db->update('leads', $column); 
     return true;



 }

 public function edit_user_lead($leadid)
 {

    $this->db->where('lead_id',$leadid);
    $result = $this->db->get('leads');
    return $result->row();
}

public function updatelead($leadid, $data)
{
    $this->db->where('lead_id',$leadid);
    $this->db->update('leads',$data);
    return true;

}


public function insert_lead_note($data)
{
    $this->db->insert('lead_notes',$data);
    return true;
}

public function get_singlead_comments($leadid)
{
    $this->db->select('lead_notes.*');
    $this->db->select('lead_notes.created_at AS added_date ');
    $this->db->order_by("lead_notes.lead_note_id", "AESC");
    // $this->db->select('lead_notes.created_at, DATE_FORMAT(lead_notes.created_at, "%d-%m-%Y %h:%i:%s")  AS added_date ');
    //$this->db->select('order_details.created_at, DATE_FORMAT(order_details.created_at, "%d-%m-%Y %h:%i:%s")  AS added_date ');
    $this->db->where('lead_id',$leadid);

    $data = $this->db->get('lead_notes');

    // echo "<pre>";
    // print_r($data);
    // die();

    return $data->result();
}

public function check_lead_status($leadid)
{
    $this->db->where('lead_id',$leadid);
    return $this->db->get('leads')->row()->lead_status;

}

public function assign_lead_to_agent($agentid,$leadid)
{
    $column = array('agent_id' => $agentid);    
    $this->db->where('lead_id', $leadid);
    $this->db->update('leads', $column); 
    return true;
}

public function change_lead_status_to_incontact($leadid)
{
    $column = array('lead_status' => 2);    
    $this->db->where('lead_id', $leadid);
    $this->db->update('leads', $column); 
    return true;

}

public function get_new_leads_count()
{
    $this->db->where('lead_status', 0);
    return $this->db->get('leads')->num_rows();
}




}