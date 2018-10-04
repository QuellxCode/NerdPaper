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






function checkKeyExists($writerid)
{

    // echo $writerid;
    // die();
    $CI =& get_instance();

    $query = $CI->db->query("SELECT $keyFROM $table WHERE id = $userid LIMIT 1");
    if($query->num_rows() > 0)
    {
        return true;
    }else
    {
        return false; 
    }
}


function getorderid($orderid)
{
    
    $data = array();
     $myarray = array();
    // $model_name = 'dashboard_model';
    $ci = &get_instance();
    $ci->db->where('order_id',$orderid);
    return $ci->db->get('order_assign')->row();
    


   
}

 function getwritername($writerid)
{
    $ci = &get_instance();
    $ci->db->where('user_id',$writerid);
    return $ci->db->get('users')->row();
}



// function getassignedby($orderid)
// {
//     $data = array();
//      $myarray = array();
//     // $model_name = 'dashboard_model';
//     $ci = &get_instance();
//     $ci->db->where('order_id',$orderid);
//     if($ci->db->get('order_assign')->row() != null )
//     {
//          $created_by = $ci->db->get('order_assign')->row();
//     return $created_by;

//     }
   

// }





