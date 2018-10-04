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






function myfunc($myfun)
{

$data = array();
     $myarray = array();
    // $model_name = 'dashboard_model';
    $ci = &get_instance();
    $ci->db->where('submission_id',$myfun);
    $ci->db->where('submission_status',0);
    $data = $ci->db->get('submission_files')->result();
    // echo "<pre>";
    // print_r($data->result());
    // die();
    // foreach ($data as $key => $value) {

    //   $myarray[] = $value->submission_file_path;
    // }
  
    //       return $myarray;

    return $data;

   
}

function reportfile($myfun)
{

$data = array();
     $myarray = array();
    // $model_name = 'dashboard_model';
    $ci = &get_instance();
    $ci->db->where('submission_id_fk',$myfun);
   
    $data = $ci->db->get('submission_report_files')->result();
    // echo "<pre>";
    // print_r($data->result());
    // die();
    // foreach ($data as $key => $value) {

    //   $myarray[] = $value->submission_file_path;
    // }
  
    //       return $myarray;

    return $data;

   
}





