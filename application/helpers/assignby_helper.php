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









function getassignedby($orderid)
{
    $data = array();
     $myarray = array();
    // $model_name = 'dashboard_model';
    $ci = &get_instance();
    $ci->db->where('order_id',$orderid);
    return  $created_by = $ci->db->get('order_assign')->row();
    if($ci->db->get('order_assign')->row() != null )
    {
        
    return $created_by;

    }
   

}





