
<meta charset="utf-8" />
<title>Writersverge</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="Preview page of Metronic Admin Theme #3 for editable datatable samples" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="<?php echo base_url(); ?>assets_material/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" /> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_material/countdown/css/jquery.countdown.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_material/datetime/css/bootstrap-datetimepicker.min.css">

<script type="text/javascript">
  <?php if($this->session->flashdata('assignedtoregion')){ ?>
    toastr.success("<?php echo $this->session->flashdata('assignedtoregion'); ?>");
  <?php }?>

</script>
<script type="text/javascript">
  <?php if($this->session->flashdata('assignedtowriter')){ ?>
    toastr.success("<?php echo $this->session->flashdata('assignedtowriter'); ?>");
  <?php }?>

</script>

<style type="text/css">
td .neworderinfo{
  font-size:30px;
}

.datetimepicker()
{
  left: 953px;
  z-index: 10061;
  display: block;
  top: 431.496px;
}
.mytbl_status{
  display: none;
}

.label-success{
  background-color: green;
}

.label-info{
  background-color: red;
}
.table-scrollable{
  overflow-x: hidden;
}
.btn-info{
  background-color: #ffb752;

}

.btn-default{
  background-color: #c859e4;
}

.btn{
  border :none;
  border-radius: 2px 2px 2px 2px;
}

/*.dropdown-menu{
      left: 972.75px;
    z-index: 10061;
    display: block;
    top: 434.996px;
    }*/

   .tooltip {
    /* position: relative; */
    display: inline-block;
    /* border-bottom: 1px dotted black;  */
    opacity:5;
}

/* Tooltip text */
.tooltip .tooltiptext {
    visibility: hidden;
    width: 140px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
    height:100px;
    padding-top: 19px;
    font-size: 16px;
 
    /* Position the tooltip text - see examples below! */
    position: absolute;
    /* z-index: 1; */
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
    visibility: visible;
}

h4{
      text-align:center;
  }
  </style>

  <!-- END THEME LAYOUT STYLES -->
  <!-- END PAGE LEVEL PLUGINS -->
  <p id="demo"></p>
  <div class="row" onload="duedatetimer();">
    <div class="col-md-12">
      <!-- BEGIN EXAMPLE TABLE PORTLET-->
      <div class="portlet light portlet-fit ">
        <div class="portlet-title">
          <div class="caption">
            <i class="icon-settings font-red"></i>
            <span class="caption-subject font-red sbold uppercase">NewOrders</span>
          </div>
          <div class="actions">
                    <!-- <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                              </div> -->
                            </div>
                          </div>
                          <select name="filter_data" id="filter_data" class="form-control pull-right" style="width: 20%; margin-top: 4px;">
                            <option value="-1">Select Filter</option>
                            <option style="font-weight: bold;">Payment Status</option>

                            <option value="Half Paid">Half Paid</option>
                            <option value="Full Paid">Full Paid</option>
                            <option style="font-weight: bold;">Verification Status</option>

                            <option value="Not Verified">Verified Status</option>
                            <option value="Unverified">Unverified Status</option>


                          </select>
                          <div class="portlet-body">
                            <div class="table-toolbar">
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <button id="sample_editable_1_new" class="btn green"> Add New
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="btn-group pull-right">
                                        <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;"> Print </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> Save as PDF </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> Export to Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                              </div> -->
                            </div>
                            <table class="table table-striped table-hover table-bordered" id="neworder_tbl"  style="zoom:68%;">
                              <thead>
                                <tr>

                                  <th width="1%">SR#</th>
                                  <th width="1%"> Order Date </th>
                                  <th width="2%" class="mytbl_status">Status</th>
                                  <th width="2%" class="mytbl_status">vStatus</th>
                                  <th width="2%"> Order Id </th>
                                  <th width="2%"> Client Info </th>
                                  <th width="3%"> Work Type </th>
                                  <th width="1%">P# </th>
                                  <th width="6%"> Subject / Title </th>
                                  <th width="2%">Due Date </th>
                                  <th width="3%"> Writer Due Date </th>
                                  <th width="2%"> Assign to </th>
                                  <th width="2%">Status</th>
                                  <!-- <th>Order Status</th> -->
                                                                     <!-- <th>Verification</th>
                                                                    <th> Edit</th>
                                                                    <th> Delete </th> -->
                                                                    <th width="2%">Action</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                 <input type="hidden" name="" va>
                                                                 <?php 
                                                                 $i = 1;
                                                                 $count = 0;
                                                                 foreach ($neworders as $key => $order):
                                                                  ?>
                                                                  <?php $count++ ?>

                                                                  <tr id="<?php echo $order->order_detail_id; ?>">

                                                                    <td>
                                                                      <?php echo $i; ?>
                                                                    </td>

                                                                    <td style="font-size: 17px;"> 

                                                                     
                                                                     <?php $ordercreation_date = date("d-m-Y H:i:s", strtotime($order->ordercreation_date)); ?>

                                                                     <?php echo $ordercreation_date; ?>
                                                                     
                                                                   </td>

                                                                   <td class="mytbl_status"><?php
                                                                   if($order->payment_status == 0){
                                                                    echo '<span class="label label-warning">Half Paid</span>';
                                                                  }elseif($order->payment_status == 1 || $order->payment_status == 2){
                                                                    echo '<span class="label label-primary">Full Paid</span>';
                                                                  }
                                                                  ?></td>

                                                                  <td class="mytbl_status"><?php
                                                                  if($order->verified_by != null){
                                                                    echo '<span class="label label-warning">Not Verified</span>';
                                                                  }else if($order->verified_by == null){
                                                                    echo '<span class="label label-danger">Unverified</span>';
                                                                  }
                                                                  ?></td>
                                                                  <td style="font-size: 17px;"> <?php echo $order->u_order_id; ?> </td>
                                                                  <td style="font-size: 17px;"> <?php 
                                                                  echo $order->client_name.'<br>';
                                                                  echo $order->client_email.'<br>';
                                                                  echo $order->phone.'<br>';



                                                                  ?> </td>
                                                                  <td  style="font-size: 17px;">  <?php 
                                                                  echo $order->acedamic_level.' / ';
                                                                  echo $order->document_type.'<br>';
                                                                  ?> </td>
                                                                  <td> <?php echo $order->no_of_pages ?> </td>
                                                                  <td  class="center" style="font-size: 17px;"> <?php 
                                                                  echo $order->title.' / ';
                                                                  echo $order->subject.'<br>';
                                                                  ?> </td>

                                                                    <!-- <td id="mytimer<?php echo $order->order_detail_id; ?>">
                                                                      
                                                                    </td> -->

                                                                    <td class="neworderinfo">

                                                                     <span id='duedate_time<?php echo $order->order_detail_id;  ?>' style="font-size: 17px;"></span>
                                                                     <hr>
                                                                     <span id="mytimer<?php echo $order->order_detail_id;  ?>">


                                                                     </span>


                                                                   </td>

                                                                   <td>
                                                                     <!-- <input type="datetime-local" class="form_datetime" name="writer_due_date" id="writer_due_date<?php echo $i; ?>" style="width: 70%" > -->

                                                                     <!-- <input type="text" name="d" class="form-control dt" id="datetimepicker"> -->
                                                                     <!-- <input type="time" name="writer_due_time" id="writer_due_time<?php echo $i ?>" style="width: 80%;margin-top: 6px"> -->
                                                                     <input type="text" onchange="setthedate(<?php echo $order->order_detail_id ?>,<?php echo $i ?>);" name="" class="form-control dt" id="writerdue_dt<?php echo $i  ?>" value="<?php if(!empty($order->writer_due_date)) {
                                                                      echo $order->writer_due_date;
                                                                    }?>">




                                                                    <!-- <input id="datetimepicker" type="text" > -->
                                                                    <span class="dt_error<?php echo $i;  ?>" style="color:red"> </span>
                                                                    <br>
                                                                    <select  name="region_list" onchange="assign(<?php echo $order->order_detail_id ?>,<?php echo $i ?>);return false;" id="region_list<?php echo $i ?>" style="width: 108px; margin-top: 10px;" >
                                                                      <option value="-1" >Select Region</option>
                                                                      <?php foreach ($regions as $key => $region): ?>
                                                                        <option value="<?php echo $region->region_id ?>" <?php if ($order->region_id != -1 && $region->region_id == $order->region_id): ?>
                                                                        <?php echo 'selected' ?>
                                                                        <?php endif ?>><?php echo $region->region_name ?></option>
                                                                      <?php endforeach ?>

                                                                    </select>
                                                                    <hr>
                                                                    <?php if (!empty($order->writer_due_date)): ?>

                                                                      <span id="wr_selected_date<?php echo $i;  ?>" style="color:black;font-weight: bold; display: none;"><?php echo $order->writer_due_date; ?></span>

                                                                    <?php endif ?>
                                                                    <hr>
                                                                    <span  id="wr_timer<?php echo $order->order_detail_id; ?>"></span>



                                                                  </td>
                                                                  <td>


                                                                    <select style="margin-top: 9px" onchange="assign_writer(<?php echo $order->order_detail_id ?>,<?php echo $i ?>);return false;" name="writer_list" id="writer_list<?php echo $i  ?>" >
                                                                      <option value="-1">Select Writer</option>
                                                                      <?php foreach ($writers as $key => $writer): ?>
                                                                        <option value="<?php echo $writer->user_id ?>"><?php echo $writer->user_name ?></option>
                                                                      <?php endforeach ?>

                                                                    </select>
                                                                  </td>
                                                                  <td>

                                                            <!--  <select onchange="payment_status(<?php echo $order->order_detail_id ?>,<?php echo $i ?>);" id="mystatus<?php echo $i ?>">
                                                                <option>Select Payment</option>
                                                                
                                                                <option value="0">Halfpaid</option>
                                                                <option value="1">Fullpaid</option>

                                                            </select>


                                                          -->
                                                          <?php 

                                                          if($order->payment_status == 0){
                                                            echo '<span class="label label-info">Half Paid</span>';
                                                          }else if($order->payment_status == 1 ||$order->payment_status == 2 )
                                                          {
                                                            echo '<span class="label label-success" style="color:background-color:#7ca232;">Full Paid</span>';
                                                          }
                                                          ?>
                                                          <select onchange="order_status(<?php echo $order->order_detail_id ?>,<?php echo $i ?>);" id="orderstatus<?php echo $i ?>" style="width:123px;margin-top: 9px">
                                                            <option value="-1">Select Order</option>
                                                            <option value="6">Unpaid Order</option>
                                                            <option value="0">Neworder</option>
                                                            <option value="1">In-Process</option>
                                                            <option value="2">Completed</option>
                                                            <option value="3">Revision in Progress</option>
                                                            <option value="4">Disputed</option>
                                                            <option value="5">Credited</option>


                                                          </select>
                                                          <hr>
                                                          
          <?php $this->load->helper('order'); 
         // echo 'lead id is'.$lead->lead_id;
          $count = check_view_notes($order->order_detail_id);
          if($count > 0)
          {
            ?>
 <a href="#notes<?php echo $i  ?>" data-toggle="modal" onclick="viewnotes(<?php echo $order->order_detail_id ?>, <?php echo $i ?>)">View Notes</a>             
  <?php
          }
          //die();

          ?>
        
                                                         
                                                        </td>
                                                        <?php if ($this->session->userdata('user_name')): ?>
                                                         <?php $username = $this->session->userdata('user_name') ?>
                                                         <?php $user_id = $this->session->userdata('user_id') ?>
                                                       <?php endif ?>

                                                       <td>
                                                        <div class="row">
                                                          <a  title="edit submission" target="_blank"  class="btn btn-circle btn-icon-only btn-primary"  name="" data-toggle="modal" href="<?php echo base_url(); ?>index.php/admin/neworder/edit_neworder/<?php echo $order->order_detail_id ?>" style="margin-top: 12px;margin-left: 12px">
                                                           <i class="icon-pencil" ></i>
                                                         </a>

                                                         <!-- <a href="<?php echo base_url(); ?>index.php/admin/neworder/edit_neworder/<?php echo $order->order_detail_id ?>" class="btn btn-circle btn-icon-only btn-success"><i class="icon-pencil " style="font-size: 20px; margin-left: 0px;"></i></a> -->

                                                         <a  title="Detail" target="_blank"  class="btn btn-circle btn-icon-only btn-default"  name="" data-toggle="modal" href="<?php echo base_url() ?>index.php/admin/neworder/order_detail/<?php echo $order->order_detail_id ?>" style="margin-top: 12px;">
                                                           <i class="glyphicon glyphicon-book" style="color:white;"></i>
                                                         </a>
                                                       </div>


                                                       <!-- <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() ?>index.php/admin/neworder/order_detail/<?php echo $order->order_detail_id ?>" >
                                                        <i class="glyphicon glyphicon-book" style="font-size: 20px; color:white;"></i>
                                                      </a> -->
                                                      <br>
                                                      <br>
                                                      <?php if ($order->verified_by != null): ?>
                                                        <div class="tooltip">
                                                        <i class="fa fa-check" style='font-size: 30px; margin-left: 17px;color:green;'></i>
                                                        <span class="tooltiptext"><?php echo 'Verified by'.' '.$order->verified_by.' '.'on'.' '.$order->verified_at ?></span>
                                                        </div>
                                                        <?php else: ?>
                                                          <a href="<?php echo base_url();?>index.php/admin/neworder/neworder_verification/<?php echo $order->order_detail_id ?>/<?php echo $user_id ?>" style="margin-left: 12px;">Verify</a>
                                                        <?php endif; ?>
                                                                       <!--  <a class="delete" href="javascript:;">
                                                                            <i class="icon-trash"></i>
                                                                          </a> -->


                                                                          <!-- <br> -->

                                                                        <!-- <a class="" title="Assign" href="" onclick="assign(<?php echo $order->order_detail_id ?>,<?php echo $i ?>); return false;">
                                                                            <i class="icon-check" style="font-size: 25px; margin-top: 10px;"></i>
                                                                          </a> -->



                                                                          <div class="row" style="margin-top: 15px;">

                                                                            <a   class="btn btn-circle btn-icon-only btn-success"  name="<?php if(isset($username))
                                                                            echo $username;
                                                                            ?>" title="Add Note" id="<?php echo $order->order_detail_id ?>" href="#addNote" data-toggle="modal"  style="margin-top: 12px; margin-left: 12px;">
                                                                            <i class="glyphicon glyphicon-plus" style="color:white;"></i>
                                                                          </a>



                                                                           <!-- <a class="btn btn-circle btn-icon-only btn btn-primary" name="<?php if(isset($username))
                                                                           echo $username;
                                                                           ?>" title="Add Note" id="<?php echo $order->order_detail_id ?>" name="" data-toggle="modal" href="#addNote" style="margin-left: 12px;">
                                                                           <i class="glyphicon glyphicon-plus" style="  font-size: 20px; "></i>
                                                                         </a> -->
                                                                         <a  title="Delete" class="btn btn-circle btn-icon-only btn-danger"  name="<?php if(isset($username))
                                                                         echo $username;
                                                                         ?>"  onclick="deleteneworder(<?php echo $order->order_detail_id ?>);" data-toggle="modal"  style="margin-top: 12px; margin-left: 4px;">
                                                                         <i class="icon-trash" style="color:white;"></i>
                                                                       </a>

                                                                         <!-- <a class="btn btn-circle btn-icon-only btn btn-danger" title="Delete" href="<?php echo base_url() ?>index.php/admin/neworder/delete_neworder/<?php echo $order->order_detail_id ?>">
                                                                          <i class="icon-trash" style="font-size: 20px;  "></i>
                                                                        </a> -->
                                                                      </div>
                                                                    </td>
                                                                    <!-- <td>
                                                                        <a class="edit" href="javascript:;"> Edit </a>
                                                                      </td> -->
                                                                    <!-- <td>
                                                                        <a class="delete" href="javascript:;"> Delete </a>
                                                                      </td> -->
                                                                    </tr>






                                                                    <?php 
                                                                    $i++;

                                                                  endforeach ?>

                                                                </tbody>
                                                              </table>
                                                            </div>
                                                          </div>
                                                          <!-- END EXAMPLE TABLE PORTLET-->
                                                        </div>
                                                      </div>

                                                      <!-- Modal -->

                                                      <div class="modal fade" id="addNote" role="dialog">
                                                        <div class="modal-dialog">

                                                          <!-- Modal content-->
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Add Note</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                              <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/neworder/add_order_note">

                                                                <div class="form-group" id="mytextarea"> 
                                                                  <label>Add Note</label>    
                                                                  <textarea class="form-control" name="ordernote"></textarea>
                                                                  <input type="hidden" name="myorder_id" id="orderid" />
                                                                  <input type="hidden" name="note_writer" id="note_writer" />
                                                                </div>



                                                                <button type="submit" class="btn btn-primary btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Add</button>
                                                              </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="submit" class="btn btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <!-- EndModal -->

                                                      <!-- Modal -->

                                                      <div class="modal fade mynotemodal"  role="dialog" style="display: none">
                                                        <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">

                                                          <!-- Modal content-->
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Notes List</h4>
                                                            </div>
                                                            <div class="modal-body">
                                             <!--  <table class="table table-hover">
                                                  <thead>
                                                      <th>Note id</th>
                                                      <th>Note Description</th>
                                                      <th>Created By</th>
                                                      <th>Date</th>
                                                  </thead>
                                                  <tbody id="noteid">

                                                    
                                                      
                                                  </tbody>
                                                </table> -->
                                                <h4 id="newordersnote"></h4>
                                                <p id="neworderbody">


                                                </p>
                                                <h4 id="inprocessorder"></h4>
                                                <p id="inprocess_orde_body">

                                                </p>
                                                <h4 id="submissions_order"></h4>
                                                <p id="submissions_order_note">

                                                </p>

                                                <h4 id="revision_in_progress_head"></h4>
                                                <p id="revision_in_progress_note"></p>

                                                <h4 id="revised_workhead"></h4>
                                                <p id="revised_worknote"></p>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- EndModal -->

                                        <div class="modal fade" id="confirmationbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
                                          <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Do You want to continue?</h4>
                                              </div>


                                              <div class="modal-footer">
                                                <button type="button"  class="btn btn-primary" id="modal-btn-si">Yes</button>
                                                <button type="button" onclick="notconfirm();" class="btn btn-danger" id="modal-btn-no">No</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="alert" role="alert" id="result"></div>


                                                          <!--Modal start-->
                                         <div class="modal fade" id="deleteconfirmationbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
                                          <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Do You want to continue?</h4>
                                              </div>


                                              <div class="modal-footer">
                                                <button type="button"  class="btn btn-primary"  id="modal-btn-si2">Yes</button>
                                                <button type="button" onclick="donotdelete();" class="btn btn-danger" id="modal-btn-no">No</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    <!--Modal end-->


                                        <!-- BEGIN CORE PLUGINS -->
                                        <!-- <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->

                                        <!-- <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
                                        <script type="text/javascript" src="<?php echo base_url(); ?>assets_material/datetime/js/bootstrap-datetimepicker.min.js"></script>
                                        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
                                        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
                                        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
                                        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
                                        <!-- END CORE PLUGINS -->
                                        <!-- BEGIN PAGE LEVEL PLUGINS -->
                                        <script src="<?php echo base_url(); ?>assets_material/assets/global/scripts/datatable.js" type="text/javascript"></script>
                                        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
                                        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
                                        <!-- END PAGE LEVEL PLUGINS -->
                                        <!-- BEGIN THEME GLOBAL SCRIPTS -->
                                        <script src="<?php echo base_url(); ?>assets_material/assets/global/scripts/app.min.js" type="text/javascript"></script>
                                        <!-- END THEME GLOBAL SCRIPTS -->
                                        <!-- BEGIN PAGE LEVEL SCRIPTS -->
                                        <script src="<?php echo base_url(); ?>assets_material/assets/pages/scripts/table-datatables-editable.js" type="text/javascript"></script>
                                        <!-- END PAGE LEVEL SCRIPTS -->
                                        <!-- BEGIN THEME LAYOUT SCRIPTS -->
                                        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
                                        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
                                        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
                                        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>   

                                        <!--            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script> -->
                                        <script type="text/javascript" src="<?php echo base_url() ?>assets_material/countdown/js/jquery.plugin.js"></script> 
                                        <script type="text/javascript" src="<?php echo base_url() ?>assets_material/countdown/js/jquery.countdown.js"></script>  


                                        <!-- END THEME LAYOUT SCRIPTS -->
                                        <!-- END PAGE LEVEL PLUGINS -->

        <!-- <script type="text/javascript">
            var myTable = $('#sample_editable_1').DataTable();
 
myTable.row( ':eq(0)' ).edit( {
    title: 'Edit first row'
} );
</script> -->

<script type="text/javascript">
  $(document).ready(function(){ $('#mytbl').DataTable({
   "scrollX": true,


 });
// $('#sample_editable_1').DataTable( {
//         "scrollX":        "true",
//         "scrollCollapse": true,
//         "paging":         false
//     } );



});

</script>



<script type="text/javascript">
  function payment_status($id,$value)
  {
    var row = $value
    var myvalue =  $('#mystatus'+row).val();
        //alert(myvalue);
        //alert($id);
          //  alert('working'.$id);
          $.ajax({
           type: "POST",
           url: "neworder/change_payment_status", 
           data: {orderid: $id, status : myvalue},
           dataType: "text",  
           cache:false,
           success: 
           function(data){
               // alert(data);  //as a debugging message.
             }
           });
        }




      </script>

      <script type="text/javascript">
        function order_status($orderid,$value)
        {
        //alert("orderstatus called");
        var row = $value;
        var myvalue =  $('#orderstatus'+row).val();
      // debugger;
        //alert(myvalue);
       // alert($id);
          //  alert('working'.$id);
          //debugger;
          $.ajax({
           type: "POST",
           url: "<?php echo base_url() ?>index.php/admin/neworder/change_order_status", 
           data: {orderid: $orderid, status : myvalue},
           dataType: "text",  
           cache:false,
           success: 
           function(data){
             if(data == 'success')
             {
              window.location.reload();
            }
          }
        });
        }
      </script>

        <!-- <script type="text/javascript">
   $('.datepicker').datepicker({
    format: 'dd/mm/yyyy'
 });
</script> -->


<!-- <script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
  </script>  -->
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip(); 
    });
  </script>



  <script type="text/javascript">
    // $("#regionlist").onchange(function(){

    // })
  </script>

  <script type="text/javascript">
    $("#timers").countdown({until: new Date(2018, 4-1, 6)});
  </script>

  <script>
    $('#addNote').on('show.bs.modal', function(e) {

      var $modal = $(this),
      orderid_note = e.relatedTarget.id;

      $("#orderid").val(orderid_note);


    })
  </script>

  <script>
    $('#addNote').on('show.bs.modal', function(e) {

      var $modal = $(this),
      note_writer = e.relatedTarget.name;

      $("#note_writer").val(note_writer);


    })
  </script>

  <script type="text/javascript">
    function viewnotes($orderid,$count)
    {
      var value = $count;
       // $('.mynotemodal').attr('id').val(4);
       // $('#notes').modal('hide');
       $(".mynotemodal").attr("id", "notes"+value);

       $.ajax({
         type: "POST",
         url: "neworder/get_notes", 
         data: {orderid: $orderid},
         dataType: "text",  
         cache:false,
         success: 
         function(data){


          var result  = jQuery.parseJSON(data);




          $("#newordersnote").empty();
          $("#neworderbody").empty();
          $("#inprocessorder").empty();
          $("#inprocess_orde_body").empty();
          $("#submissions_order").empty();
          $("#submissions_order_note").empty();
          $("#revision_in_progress_head").empty();
          $("#revision_in_progress_note").empty();
          $("#revised_workhead").empty();
          $("#revised_worknote").empty();
          $("#allrevision_head").empty();
          $("#allrevision_worknote").empty();

         // alert(result.note_id);
         $.each(result,function(index,value){


          if(value['status'] == 0)
          {
            $("#newordersnote").html("<h4><b> New Orders </b> </h4>");
       // $("modalbody").empty();
       $("#neworderbody").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');
     } else if(value['status'] == 1)
     {
      $("#inprocessorder").html("<h4> <b> Orders in progress </b> </h4>");
      $("#inprocess_orde_body").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+"</b>"+ '</p>');
    } else if(value['status'] == 2)
    {
     $("#submissions_order").html("<h4><b> Submissions </b> </h4>");

     $("#submissions_order_note").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');

   } else if(value['status'] == 3)
   {
    $("#revision_in_progress_head").html("<h4><b> Revision in Progress </b> </h4>");

    $("#revision_in_progress_note").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');

  } else if(value['status'] == 4)
  {
    $("#revised_workhead").html("<h4><b> Revised Work </b> </h4>");

    $("#revised_worknote").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+"</b>"+ '</p>');


  }

    //alert(value.attr("note_id"));

    // $.each(value,function(index,value){



    //  });

    //alert(value['note_id']);

   // console.log(result[0]);

    // $("#noteid").append("<tr id='mytbl'><td>"+ value['note_id']+"</td> <td>"+value['note_description']+" </td> <td> "+value['created_by']+" </td> <td>"+value['created_at']+"</td></tr>");
  });

// $("#modalbody").append("hi its working");


 //$("#addNote").empty();
           //alert(result.);
            // var data = $.parseJSON(data);
            //     alert(data);  //as a debugging message.

            // $.each(data, function(index, element) {
            //     alert(element);
            // $('#mytextarea').html(element);
            //    ("#addNote").modal('show');
            // }
          }
        });
     }
   </script>

   <script type="text/javascript">
    $("#neworder_tbl").DataTable({
      stateSave: true,
      "pageLength": 50,
      "iDisplayLength": 50
    });
  </script>




  <script type="text/javascript">
    jQuery('#datetimepicker').datetimepicker({

 //format:'dd.m.YY'
 
});
</script>

<script type="text/javascript">
 var table = $('#neworder_tbl').DataTable();
 $('#filter_data').on('change', function () {
  if(this.value == 'Half Paid' || this.value == 'Full Paid' )
  {
    table.columns(2).search( this.value ).draw();
  }else if(this.value == 'Not Verified' || this.value == 'Unverified')
  {

   table.columns(3).search( this.value ).draw();
 }

});

</script>

<!-- <script type="text/javascript">
    function timeleft($datetime,$countis)
    {
        // alert($countis);
        var countDownDate = new Date($datetime).getTime();

       // alert(countDownDate);

        var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();



  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // alert(distance);

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("newordertime").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("newordertime").innerHTML = "EXPIRED";
}
}, 1000);
    }
  </script> -->


  <script type="text/javascript">
    $(document).ready(function() {
      $('#neworder_tbl tr').each(function() {
   // console.log(this.id);
   var submissionid = this.id;
    //alert(this.id)
    if(this.id != ""){
      $.ajax({

        method : 'POST',
        url : '<?php echo base_url() ?>index.php/admin/neworder/get_date_time',
        data : {order_detail_id : this.id},
        dataType : 'text',
        success : function(data)
        {
          var result  = jQuery.parseJSON(data);

            //console.log(result);

                    // alert($countis);
                    var countDownDate = new Date(result['order_datetime']).getTime();

       // alert(countDownDate);

       var x = setInterval(function() {

  // Get todays date and time
  //var now = new Date().getTime();
  
  d = new Date();

// convert to msec
// add local time zone offset 
// get UTC time in msec
utc = d.getTime() + (d.getTimezoneOffset() * 60000);

// create new Date object for different city
// using supplied offset
nd = new Date(utc + (3600000*-7));



  // Find the distance between now an the count down date
  var distance = countDownDate - nd;

  // alert(distance);

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  //console.log(result['order_id']);
  // var mytimer = document.getElementById("mytimer").innerHTML =  days + "d " + hours + "h "
  // + minutes + "m " + seconds + "s ";

 // var mytimer = document.getElementById("mytimer");

 // var a = mytimer+result['order_id'];

 // a.innerHTML =  result['order_datetime']+'<br>'+days + "d " + hours + "h ";
  // + minutes + "m " + seconds + "s ";
  
//console.log(days);
$("#duedate_time"+result['order_id']).html("<span style='color:black;font-weight:bold'>"+result['order_datetime']+"</span>");
$("#mytimer"+result['order_id']).html("<a href='' class='btn btn-info'><span style='color:black;font-weight:bold'></span>"+ ""+ '  '+"<span style='color:white; font-weight:bold; font-size:16px;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span></a>");

  // If the count down is finished, write some text 
  if (distance < 0) {
    //clearInterval(x);
    //document.getElementById("newordertime").innerHTML = "EXPIRED";
    $("#duedate_time"+result['order_id']).html("<span style='color:black;font-weight:bold'>"+result['order_datetime']+"</span>");
    $("#mytimer"+result['order_id']).html("<a href='' class='btn btn-danger'>"+ '  '+"<span style='color:white; font-weight:bold; font-size:16px;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span></a>");
  }
}, 1000);




     }


   });
    }
  })
    });
  </script>

  <script type="text/javascript">
    function assign($orderid,$rowid)
    {

      var value = $rowid;

      if(region == -1 && writer == -1)
      {
            //alert('not selected');
          }else 
          {
            var value = $rowid;

            var writerduedate = $("#writerdue_dt"+value).val();

           // alert(writerduedate);

           var region =  $('#region_list'+value).val();

           var writer =  $('#writer_list'+value).val();
      // var datetime = $("#writer_due_date"+value).val();
   //   debugger;
      // wr_selected_date
      var d_date =  $("#wr_selected_date"+value).text();

  //  alert(d_date);

  if(d_date != "" && writerduedate == "")
  {
    $.ajax({
     type: "POST",
     url: "<?php echo base_url() ?>index.php/admin/neworder/assign_order", 
     data: {orderid: $orderid, regionid : region,writerid : writer, date:d_date},
     dataType: "text",  

     success: function(data){

            // alert(data);

            //toastr['success']('Order Assigned Successfully in Region');
            window.setTimeout(function(){location.reload()},50);

            $('#region_list'+value).val(-1);
          }
        });

  }else if(d_date != "" && writerduedate != "")
  {
    $.ajax({
     type: "POST",
     url: "<?php echo base_url() ?>index.php/admin/neworder/assign_order", 
     data: {orderid: $orderid, regionid : region,writerid : writer, date:writerduedate},
     dataType: "text",  

     success: function(data){

       //alert(data);

       //toastr['success']('Order Assigned Successfully in Region');
       window.setTimeout(function(){location.reload()},50);

       $('#region_list'+value).val(-1);
     }
   });

  }else if(d_date == "" && writerduedate != "")
  {
    $.ajax({
     type: "POST",
     url: "<?php echo base_url() ?>index.php/admin/neworder/assign_order", 
     data: {orderid: $orderid, regionid : region,writerid : writer, date:writerduedate},
     dataType: "text",  

     success: function(data){

             //alert(data);

            // toastr['success']('Order Assigned Successfully in Region');
            window.setTimeout(function(){location.reload()},50);

            $('#region_list'+value).val(-1);
          }
        });

  }


  else if(writerduedate == "")
  {
    $(".dt_error"+$rowid).empty();
    $('#region_list'+value).val(-1);
    $(".dt_error"+$rowid).html('<br><span style="color:red"> select date and time </span>');
           // $('#region_list option[value="-1"]').attr('selected', true);
             // $("#region_list"+$rowid).before('<br><span id="error'+$rowid+'" style="color:red"> select date and time </span>');
           }
         }

       }
     </script>

     <script type="text/javascript">
      function assign_writer($orderid,$rowid)
      {

        var value = $rowid;


        if(region == -1 && writer == -1)
        {
            //alert('not selected');
          }else 
          {
            var value = $rowid;

            var wr_duedate = $("#writerdue_dt"+value).val();

            var region =  $('#region_list'+value).val();

            var writer =  $('#writer_list'+value).val();

            var d_date =  $("#wr_selected_date"+value).text();
      // var datetime = $("#writer_due_date"+value).val();

     // alert(d_date);
     if(d_date != "")
     {
      $.ajax({
       type: "POST",
       url: "<?php echo base_url() ?>index.php/admin/neworder/assign_order_writer", 
       data: {orderid: $orderid, regionid : region,writerid : writer, date:d_date},
       dataType: "text",  

       success: function(data){


         //  toastr['success']('Order Assigned Successfully to Writer');
         window.setTimeout(function(){location.reload()},50);

         $('#writer_list'+value).val(-1);

       }
     });

    }else if(d_date == "" && wr_duedate != "")
    {
      $.ajax({
       type: "POST",
       url: "<?php echo base_url() ?>index.php/admin/neworder/assign_order_writer", 
       data: {orderid: $orderid, regionid : region,writerid : writer, date:wr_duedate},
       dataType: "text",  

       success: function(data){


         //  toastr['success']('Order Assigned Successfully to Writer');
         window.setTimeout(function(){location.reload()},50);

         $('#writer_list'+value).val(-1);

       }
     });

    }else if(wr_duedate == "")
    {

     $(".dt_error"+$rowid).empty();

     $('#writer_list'+value).val(-1);

     $(".dt_error"+$rowid).html('<br><span style="color:red"> select date and time </span>');

   }
 }
       //alert(region.' '.date);
     }
   </script>


   <script type="text/javascript">


     $('.dt').datetimepicker(
     {
      format: 'dd-mm-yyyy hh:ii:ss',
      showClear : true,
      pickMinutes : true,
      use24hours: true,
      sideBySide: true,
      showClose: true,
      stepping: 10
    });

  </script>
  <script type="text/javascript">
    function setthedate($orderid,$count)
    {
      $("#confirmationbox").modal('show');

      $("#modal-btn-si").attr('onclick','confirmdate('+$orderid+','+$count+')');

      $('#region_list'+$count).val(-1);
    }
  </script>

  <script type="text/javascript">
    function notconfirm()
    {
      $("#confirmationbox").modal('hide');
    }

    function confirmdate($id,$count)
    {
     $("#confirmationbox").modal('hide');
        // console.log($id);
        console.log($count);
        var duedate = $("#writerdue_dt"+$count).val();
        
        $.ajax({

          method : 'POST',
          url : '<?php echo base_url() ?>index.php/admin/neworder/save_writer_due_date',
          data : {writerduedate : duedate, orderid : $id},
          dataType : 'text',
          success : function(data)
          {
          // toastr['success']('Writer Due Date Selected Successfully');
          window.setTimeout(function(){location.reload()},50);
        }




      });
      }
    </script>



    <script type="text/javascript">
      $(document).ready(function() {
        $('#neworder_tbl tr').each(function() {
   // console.log(this.id);
   var submissionid = this.id;
    //alert(this.id)
    if(this.id != ""){
      $.ajax({

        method : 'POST',
        url : '<?php echo base_url() ?>index.php/admin/neworder/get_writer_duedate_and_time',
        data : {order_detail_id : this.id},
        dataType : 'text',
        success : function(data)
        {
          if(data != 'notfound'){
            var result  = jQuery.parseJSON(data);


            //console.log(result);

                    // alert($countis);
                    var countDownDate = new Date(result['order_datetime']).getTime();

       // alert(countDownDate);

       var x = setInterval(function() {

  // Get todays date and time
  //var now = new Date().getTime();

d = new Date();

// convert to msec
// add local time zone offset 
// get UTC time in msec
utc = d.getTime() + (d.getTimezoneOffset() * 60000);

// create new Date object for different city
// using supplied offset
nd = new Date(utc + (3600000*-7));

  // Find the distance between now an the count down date
  var distance = countDownDate - nd;

  // alert(distance);

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  //console.log(result['order_id']);
  // var mytimer = document.getElementById("mytimer").innerHTML =  days + "d " + hours + "h "
  // + minutes + "m " + seconds + "s ";

 // var mytimer = document.getElementById("mytimer");

 // var a = mytimer+result['order_id'];

 // a.innerHTML =  result['order_datetime']+'<br>'+days + "d " + hours + "h ";
  // + minutes + "m " + seconds + "s ";
  
//console.log(days);

$("#wr_timer"+result['order_id']).html("<span class='btn btn-info' style='color:white; font-weight:bold; font-size:16px;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span>");

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    //document.getElementById("newordertime").innerHTML = "EXPIRED";
    $("#wr_timer"+result['order_id']).html(result['order_datetime']+"<hr>"+ ' ' +"<span class='btn btn-info' style='color:white; font-weight:bold; font-size:16px;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span>");
  }
}, 1000);




     }
   }

 });
    }
  })
      });
    </script>

       <script>
   function deleteneworder($orderid)
   {
    $("#deleteconfirmationbox").modal('show');

$("#modal-btn-si2").attr('onclick','deletenewordernow('+$orderid+')');
   }

   function deletenewordernow($orderid)
   {
    $("#deleteconfirmationbox").modal('hide');
    //alert('working');
    $.ajax({

method : 'POST',
url : '<?php echo base_url() ?>index.php/admin/neworder/delete_neworder',
data : {orderid : $orderid},
dataType : 'text',
success : function(data)
{
    if(data == 'success')
    {
       // location.reload();
       console.log('success');
    }
// toastr['success']('Writer Due Date Selected Successfully');
//window.setTimeout(function(){location.reload()},50);
}




});
   }
   </script>

   <script>
   function donotdelete()
   {
    $("#deleteconfirmationbox").modal('hide');
   }
   </script>


<!-- <script type="text/javascript">
    

 $('.dt').datetimepicker(
  {
    
  });
   
</script> --> 