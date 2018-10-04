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






function getwritername($myfun)
{

$data = array();
     $myarray = array();
    // $model_name = 'dashboard_model';
    $ci = &get_instance();
    $ci->db->where('user_id',$myfun);
    $data = $ci->db->get('users')->row()->user_name;
    // echo "<pre>";
    // print_r($data->result());
    // die();
    // foreach ($data as $key => $value) {

    //   $myarray[] = $value->submission_file_path;
    // }
  
    //       return $myarray;

    return $data;

   
}





