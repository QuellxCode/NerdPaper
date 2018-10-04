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






function revised_work_files($id)
{

    $data = array();
     $myarray = array();
    // $model_name = 'dashboard_model';
    $ci = &get_instance();
    $ci->db->where('revised_work_id',$id);
    $data = $ci->db->get('revised_work_files')->result();
    return $data;

   
}
function revised_report_files($id)
{

$data = array();
     $myarray = array();
    $ci = &get_instance();
    $ci->db->where('revised_work_id_fk',$id);
    $data = $ci->db->get('revised_work_report_files')->result();
    return $data;
  
}





