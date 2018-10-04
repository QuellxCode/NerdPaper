<?php


class Client_model extends CI_Model
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
    public function gell_all_clients_details() {

        
     return $this->db->get('clients')->result();

    }


    public function get_client_status($clientid)
    {
        $this->db->where('client_id',$clientid);
        return $this->db->get('clients')->row()->client_status;

    }

    public function change_client_status($client_status,$clientid)
    {
        $column = array('client_status' => $client_status);    
    $this->db->where('client_id', $clientid);
    $this->db->update('clients', $column); 
    return true;

    }

    public function edit_client_info($clientid)
    {
        $this->db->where('client_id',$clientid);
        return $this->db->get('clients')->row();
    }

   public function update_client_info($clientid , $clieninfo)
   {
    $this->db->where('client_id',$clientid);
    $this->db->update('clients',$clieninfo);
    return true;
   }

   public function delete_client_info($clientid)
   {
    $this->db->where('client_id',$clientid);
    $this->db->delete('clients');
    return true;
   }

   

    
   
}