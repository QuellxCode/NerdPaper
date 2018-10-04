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






function getwdate($orderdetailid)
{

$data = array();
     $myarray = array();
    // $model_name = 'dashboard_model';
    $ci = &get_instance();
    $ci->db->where('order_id',$orderdetailid);
    $data = $ci->db->get('order_assign')->row();
    // echo "<pre>";
    // print_r($data->result());
    // die();
    // foreach ($data as $key => $value) {

    //   $myarray[] = $value->submission_file_path;
    // }
  
    //       return $myarray;

    return $data;

   
}





