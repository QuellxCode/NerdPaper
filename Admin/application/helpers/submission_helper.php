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






function check_view_notes($id)
{

$data = array();
     $myarray = array();
    // $model_name = 'dashboard_model';
    $ci = &get_instance();
    $ci->db->where('order_id',$id);
    // $ci->db->where('submission_status',0);
    $data = $ci->db->get('order_notes')->num_rows();
   

    return $data;

   
}





