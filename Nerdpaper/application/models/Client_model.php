<?php


class Client_model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }

    public function registerClient($data) {
        if ($this->db->insert("clients", $data)) {
            return true;
        }
    }

    public function get_user($user_email) {

        $this->db->from('clients');
        $this->db->where('client_email',$user_email);
        return $this->db->get()->row();

    }
    public function get_user_login($user_email,$password) {

        $this->db->from('clients');
        $this->db->where('client_email',$user_email);
        $this->db->where('password',$password);
        return $this->db->get()->row();

    }

        public function get_user_data($user_email) {

        $this->db->from('clients');
        $this->db->where('client_email',$user_email);
        return $this->db->get()->row();

    }


    public function orderDelete($orderid) {
        if ($this->db->delete("order_details", "order_detail_id = ".$orderid)) {
            return true;
        }
    }

    public function update($data,$email) {
        $this->db->set($data);
        $this->db->where("client_email", $email);
        $this->db->update("clients", $data);
    }
    
    public function addlead($data) {

        if ($this->db->insert("leads", $data)) {
           $insert_id = $this->db->insert_id();
           $_SESSION['leadId'] = $insert_id;
            return  $insert_id;
        }
    }

    // update lead
    public function updatelead($data,$leadid)
    {
        $this->db->set($data);
        $this->db->where("lead_id", $leadid);
        $this->db->update("leads", $data); 
        return $leadid;
    }
    
    public function getoldpassword($clientid)
    {
        $this->db->where('client_id',$clientid);
        return $this->db->get('clients')->row()->password;

    }

    public function update_password($password,$clientid)
    {
        $column = array('password' => $password);    
        $this->db->where('client_id', $clientid);
        $this->db->update('clients', $column); 
        return true;
    }

   
}