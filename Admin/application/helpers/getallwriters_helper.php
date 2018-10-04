<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 *	@author : CodesLab
 *  @support: support@codeslab.net
 *	date	: 05 June, 2015
 *	Easy Inventory
 *	http://www.codeslab.net
 *  version: 1.0
 */








function getwriter()
{
    $data = array();
     $myarray = array();
    // $model_name = 'dashboard_model';
    $ci = &get_instance();
    $ci->db->where('user_role','writer');
    $data = $ci->db->get('users')->result();
    return $data;

   

   
}



function getassignedby($orderid)
{
    $data = array();
     $myarray = array();
    // $model_name = 'dashboard_model';
    $ci = &get_instance();
    $ci->db->where('order_id',$orderid);
    $created_by = $ci->db->get('order_assign')->row();
    return $created_by;

}





