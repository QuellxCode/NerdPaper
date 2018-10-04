<!DOCTYPE html>
<html style="margin-top: -40px;">
<head>
  <title></title>
  <meta charset="utf-8" />
  <title>Metronic Admin Theme #3 | Editable Datatables</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Preview page of Metronic Admin Theme #3 for editable datatable samples" name="description" />
  <meta content="" name="author" />
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.css">
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
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"/>

  <style type="text/css">
  .leadstatus_filter{
    display: none;
  }

  .duedate_filter{
    display: none;
  }

  /* .centerme{
    margin-left: 14em;
  } */

  h4{
      text-align:center;
  }
  
</style>
</head>
<body>





  <script type="text/javascript">
    <?php if($this->session->flashdata('leadupdate')){ ?>
      toastr.success("<?php echo $this->session->flashdata('leadupdate'); ?>");
    <?php }?>

  </script>





  <input 
  type="text" 
  id="min-date"
  class="date-range-filter  pull-left"
  placeholder="From: yyyy-mm-dd" style="width: 12%; margin-left: 70em; ">

  <input 
  type="text" 
  id="max-date" 
  class="date-range-filter pull-right"
  placeholder="To: yyyy-mm-dd" style="width:12%;">



  <!-- END THEME LAYOUT STYLES -->
  <!-- END PAGE LEVEL PLUGINS -->
  <div class="row">
    <div class="col-md-12">
      <!-- BEGIN EXAMPLE TABLE PORTLET-->
      <div class="portlet light portlet-fit ">
        <div class="portlet-title">
          <div class="caption">
            <i class="icon-settings font-red"></i>
            <span class="caption-subject font-red sbold uppercase">Leads</span>
          </div>
          <div class="actions">
            <div class="btn-group btn-group-devided" data-toggle="buttons">

             <select name="filter_data" id="filter_data" class="form-control pull-right" style="width: 100%; margin-top: 8px;">
              <option style="font-weight: bold;">Select Status</option>
              <option value="Newlead">New Leads</option>
              <option value="Invalid Info">Invalid Info</option>
              <option value="No Reponse">No Response</option>
              <option value="Closed With Different Order">Closed with a different order</option>

            </select>

          </div>
        </div>
    <!--   <div class="container">
        <div class="col-md-4 pull-right">
          <div class="input-group input-daterange">

            <input type="text" id="min-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="From:">

            <div class="input-group-addon">to</div>

            <input type="text" id="max-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="To:">

          </div>
        </div>
      </div> -->
      <!-- <input name="min" id="min-date" class="datepicker" type="text"> -->
      <!-- <input type="text" class="form-control date-range-filter" placeholder="Date Start" data-date-format="mm-dd-yyyy" id="min" />
        <input type="text" class="form-control date-range-filter" placeholder="Date End" data-date-format="mm-dd-yyyy" id="max"/> -->
        <!-- <input name="max" id="max-date" class="datepicker" type="text"> -->

      </div>
      <div class="portlet-body">
     <!--  <div class="table-toolbar">
        <div class="row">
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
        </div>
      </div> -->


      <table class="table table-striped table-hover table-bordered" id="leads_table">
        <thead>
          <tr>
            <th width="1%">Sr#</th>
            <th width="2%">Lead Date</th>
            <th width="1%" class="leadstatus_filter">Lead Status</th>
            <!-- <th width="1%"> Email </th>
              <th width="2%"> Phone </th> -->
              <th width="2%" class="duedate_filter"> Due date</th>
              <th width="3%">Client Info</th>
              <th width="2%"> Document Type </th>
              <th width="2%">Academic Level </th>
              <th width="3%">Due Date </th>
              <th width="1%">P# </th>
            <!-- <th width="1%">Filter </th>
              <th width="1%">Action </th> -->
              <th width="1%">Price</th>
              <th width="2%">Filter</th>
              <!-- <th width="3%">Status</th> -->

              <th width="2%">Action</th>
            </tr>
          </thead>
          <tbody>

           <?php 
           $i = 1;
           $count = 0;

           $totalcount = count($leads);
           // echo $totalcount;
           // die();
           foreach ($leads as $key => $lead):
            ?>
            <?php $count++ ?>

            <tr>
              <td>
                <?php echo $totalcount; 
              // die();
                ?></td>

                <td>

                 <?php $newDate = date("d-m-Y H:i:s", strtotime($lead->created_at)); ?>

                 <?php echo $newDate; ?>
               </td>
               <td class="leadstatus_filter">
                 <?php
                 if($lead->lead_status == 0){
                  echo '<span class="label label-warning">Newlead</span>';
                }elseif($lead->lead_status == 1){
                  echo '<span class="label label-danger">Invalid INFO</span>';
                }elseif($lead->lead_status == 2){
                  echo '<span class="label label-info">In Contact </span>';
                }elseif($lead->lead_status == 3){
                  echo '<span class="label label-default">No Reponse</span>';
                }elseif ($lead->lead_status == 4) {
                 echo '<span class="label label-primary">Awaiting Reponse</span>';
               }elseif ($lead->lead_status == 5) {
                 echo '<span class="label label-default">Closed With Different Order</span>';
               }elseif($lead->lead_status == 6)
               {
                echo '<span class="label label-default">Closed With Different Price</span>';
              }elseif($lead->lead_status == 7)
              {
               echo '<span class="label label-success">Lead Closed</span>';
             }
             ?>
           </td>
            <!-- <td> 

            </td> -->
            <!--  <td>  </td> -->
            <td class="duedate_filter"><?php echo $lead->due_date?></td>
            <td>
                <br>
             <?php echo $lead->user_name ?> <br>
             <?php echo $lead->user_email ?><br>
             <?php echo $lead->user_phone?>
           </td>

           <td><?php echo $lead->document_type?></td>
           <td><?php echo $lead->academic_level?></td>
           <td>

            <?php $dueDate = date("d-m-Y", strtotime($lead->due_date)); ?>

            <?php echo $dueDate; ?>
            <br>
            <?php echo $lead->lead_due_time; ?>



          </td>
          <td> <?php echo $lead->no_of_pages ?> </td>
          <td> <?php echo "$".$lead->quoted_price ?> </td>









            <!--  <td>
              
            </td> -->

            <td>

              <select onchange="change_lead_status(<?php echo $lead->lead_id ?>, <?php echo $i ?>);" id="lead_filter_id<?php echo $i ?>">
                <option value="-1">Select Action</option>
                <option value="8">Test Lead</option>
                <option value="0">New Lead</option>
                <option value="1">Invalid INFO</option>
                <option value="2">In Contact</option>
                <option value="3">No Reponse</option>
                <option value="4">Awaiting Response</option>
                <option value="5">Closed With Different Order</option>
                <option value="6">Closed With Different Price</option>
                <option value="7">Lead Closed</option>


              </select>

              <?php
              if($lead->lead_status == 0){
                echo '<span class="label label-warning">Newlead</span>';
              }elseif($lead->lead_status == 1){
                echo '<span class="label label-danger">Invalid INFO</span>';
              }elseif($lead->lead_status == 2){
                echo '<span class="label label-info">In Contact </span>';
              }elseif($lead->lead_status == 3){
                echo '<span class="label label-default">No Reponse</span>';
              }elseif ($lead->lead_status == 4) {
               echo '<span class="label label-primary">Awaiting Reponse</span>';
             }elseif ($lead->lead_status == 5) {
               echo '<span class="label label-default">Closed With Different Order</span>';
             }elseif($lead->lead_status == 6)
             {
              echo '<span class="label label-default">Closed With Different Price</span>';
            }elseif($lead->lead_status == 7)
            {
             echo '<span class="label label-success">Lead Closed</span>';
           }elseif($lead->lead_status == 8)
           {
             echo '<span class="label label-success">Test Lead</span>';
           }
           ?>

           <hr>
           <select class="" id="agent_dd<?php echo $i;  ?>" onchange="assigntoagent(<?php  echo $lead->lead_id ?>, <?php echo $i; ?>);">

            <option value="0">Select Agent</option>
            <?php foreach ($agents as $agent): ?>
              <option value="<?php echo $agent->user_id; ?>" <?php 
              if($agent->user_id == $lead->agent_id){
                echo 'selected';
              }

              ?>><?php echo $agent->user_name ?></option>
            <?php endforeach ?>
          </select>


        </td>

        <td>
          <!-- <a href="<?php echo base_url(); ?>index.php/admin/leads/edit_lead/<?php echo $lead->lead_id ?>" class=""><i class="fa fa-edit"></i></a> -->
          <a href="" data-toggle="modal" onclick="add_comments(<?php echo $lead->lead_id ?>, <?php echo $i ?>); return false;"><i class="icon-plus" style="margin-top: 10px; margin-left: 0px; font-size: 30px; color:black;"></i></a>


          <hr>

          <?php $this->load->helper('leads'); 
         // echo 'lead id is'.$lead->lead_id;
          $count = check_view_comment($lead->lead_id);
         // echo $lead->lead_id;
          //echo "<br>";
          //echo $count;
          if($count > 0)
          {
            ?>
               <a href="#notes<?php echo $i  ?>" data-toggle="modal" onclick="viewcomments(<?php echo $lead->lead_id ?>, <?php echo $i ?>); return false;" style="font-weight: bolder;color:#a34ae4cc;">View Comments</a>
              <?php
          }
          //die();

          ?>
         

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
                                                                    $totalcount--;
                                                                  endforeach ?>

                                                                </tbody>
                                                              </table>
                                                            </div>
                                                          </div>
                                                          <!-- END EXAMPLE TABLE PORTLET-->
                                                        </div>
                                                      </div>

                                                      <div class="modal fade" id="myModal" role="dialog">
                                                        <div class="modal-dialog myModal">

                                                          <!-- Modal content-->
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Add Comment</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                              <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/leads/add_lead_note">

                                                                <div class="form-group" id="mytextarea"> 
                                                                  <label>Add Comment</label>    
                                                                  <textarea class="form-control" name="ordernote">

                                                                  </textarea>
                                                                  <input type="text" name="leadnoteid" id="leadnoteid" 
                                                                  value="" />
                                                                  <input type="text" name="leadstatus" id="leadstatus" 
                                                                  value="" />
                                                                  <!-- <input type="hidden" name="note_writer" id="note_writer" /> -->
                                                                </div>



                                                                <button type="submit" class="btn btn-primary "><span class="glyphicon glyphicon-off"></span> Add</button>
                                                              </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="submit" class="btn btn-danger btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>


                                                      <div class="modal fade" id="addCommentModal" role="dialog">
                                                        <div class="modal-dialog myModal">

                                                          <!-- Modal content-->
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Add Comment</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                              <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/leads/add_lead_comment">

                                                                <div class="form-group" id="mytextarea"> 
                                                                  <label>Add Comment</label>    
                                                                  <textarea class="form-control" name="ordernote">

                                                                  </textarea>
                                                                  <input type="hidden" name="leadnoteid_two" id="leadnoteid_two" 
                                                                  value="" />

                                                                  <!-- <input type="hidden" name="note_writer" id="note_writer" /> -->
                                                                </div>



                                                                <button type="submit" class="btn btn-primary btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Add</button>
                                                              </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="submit" class="btn btn-danger btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>


                                                  <div class="modal fade" id="addagentmodal" role="dialog">
                                                        <div class="modal-dialog myModal">

                                                          <!-- Modal content-->
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Add Comment</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                              <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/leads/add_assignagent_comment">

                                                                <div class="form-group" id="mytextarea"> 
                                                                  <label>Add Comment</label>    
                                                                  <textarea class="form-control" name="agentassignnote">

                                                                  </textarea>
                                                                  <input type="hidden" name="leadnoteid_three" id="leadnoteid_three" 
                                                                  value="" />

                                                                  <!-- <input type="hidden" name="note_writer" id="note_writer" /> -->
                                                                </div>



                                                                <button type="submit" class="btn btn-primary btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Add</button>
                                                              </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="submit" class="btn btn-danger btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>

                                                      <!-- Modal -->

                                                      <div class="modal fade mynotemodal"  role="dialog" style="display: none">
                                                        <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">

                                                          <!-- Modal content-->
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Comments List</h4>
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
                                                <h4 id="testlead_head" class="centerme"></h4>
                                                <p id="testlead_body">

                                                  <h4 id="newleads_head" class="centerme"></h4>
                                                  <p id="newleads_body">



                                                  </p>
                                                  <h4 id="invalidinfo_head" class="centerme"></h4>
                                                  <p id="invalidinfo_body">

                                                  </p>
                                                  <h4 id="incontact_head" class="centerme"></h4>
                                                  <p id="incontact_body">

                                                  </p>

                                                  <h4 id="noresponse_head" class="centerme"></h4>
                                                  <p id="noresponse_body"></p>

                                                  <h4 id="awaitingresponse_head" class="centerme"></h4>
                                                  <p id="awaitingresponse_body"></p>

                                                  <h4 id="awaitingresponse_head" class="centerme"></h4>
                                                  <p id="awaitingresponse_body"></p>

                                                  <h4 id="closedwith_different_order_head" class="centerme"></h4>
                                                  <p id="closedwith_different_order_body"></p>

                                                  <h4 id="closedwith_different_price_head" class="centerme"></h4>
                                                  <p id="closedwith_different_price_body"></p>

                                                  <h4 id="leadclosed_head" class="centerme"></h4>
                                                  <p id="leadclosed_body"></p>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!-- EndModal -->

                                          <!-- BEGIN CORE PLUGINS -->
                                          <!-- <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->

                                          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                                          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

                                          <!--  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.js"></script> -->


                                          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
                                          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

                                          <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script> -->

                                                      <!--   <script type="text/javascript" src="<?php echo base_url(); ?>assets_material/js/range_date.js"></script>
                                                      -->


                                                      <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> -->
                                                      <!--  <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script> -->

                                                      <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->

                                                      <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                                                      <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
                                                      <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
                                                      <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
                                                      <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
                                                      <!-- END CORE PLUGINS -->
                                                      <!-- BEGIN PAGE LEVEL PLUGINS -->
                                                      <script src="<?php echo base_url(); ?>assets_material/assets/global/scripts/datatable.js" type="text/javascript"></script>
                                                      <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>

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
                                                      <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>   --> 

                                                      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script> -->
                                                      <script type="text/javascript" src="<?php echo base_url() ?>assets_material/countdown/js/jquery.plugin.js"></script> 
                                                      <script type="text/javascript" src="<?php echo base_url() ?>assets_material/countdown/js/jquery.countdown.js"></script> 


                                                      <!-- Modal -->
                                                          <!-- <script type="text/javascript">
                                                            $('.date-range-filter').datepicker();
                                                          </script> -->

                                                          <script type="text/javascript">
                                                            $('.date-range-filter').datepicker({
                                                              format: 'yyyy-mm-dd'
                                                            });
                                                          </script>


                                                          <script type="text/javascript">
                                                          //  window.moment = require('moment');

// // Set up your table
// table = $('#my-table').DataTable({
//     // ... do your thing here.
// });

// Extend dataTables search
$.fn.dataTable.ext.search.push(
  function( settings, data, dataIndex ) {
    var min  = $('#min-date').val();
       // alert(min);
       var max  = $('#max-date').val();
        var createdAt = data[3] || 0; // Our date column in the table
       // alert(createdAt);

       if  ( 
        ( min == "" || max == "" )
        || ( moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max) ) 
        )
       {
         // console.log(moment(createdAt).isSameOrAfter(min.toISOString()) && moment(createdAt).isSameOrBefore(max.toISOString()));
         return true;
       }
       return false;
     }
     );

var mytable = $('#leads_table').DataTable({
     stateSave: true,
     "pageLength": 50,
    "iDisplayLength": 50
});

// Re-draw the table when the a date range filter changes
$('.date-range-filter').change( function() {
  mytable.draw();
} );
</script>


<!-- EndModal -->

<script type="text/javascript">
  $("#leads_table").DataTable();
</script>

<script type="text/javascript">
  function change_lead_status($leadid,$count)
  {
                 //debugger;
                // alert($leadid);
                var value = $count;
     //var myval = $("#lead_filter_id" : 'selected').val();
     var currentval = $('#lead_filter_id'+value).val();
    // alert(currentval);
   //  alert(currentval);
       // $(".mynotemodal").attr("id", "notes"+value);

       $.ajax({
         type: "POST",
         url: "<?php echo base_url() ?>index.php/admin/leads/showcommentmodal", 
         //url: "<?php echo base_url() ?>index.php/admin/leads/change_lead_status", 
         data: {leadid: $leadid, status : currentval},
         dataType: "text",  
         cache:false,
         success: 
         function(data){

          if(data == 'success')
          {
            $("#myModal").modal('show');
            $("#leadnoteid").val($leadid);
            $("#leadstatus").val(currentval);
          }
          

          
          

            //alert(data['note_id']);

            var result  = jQuery.parseJSON(data);
         // alert(result.note_id);


       }
     });
     }
   </script>

   <!-- <script>
    $('#myModal').on('show.bs.modal', function(e) {

      var $modal = $(this),
      orderid_note = e.relatedTarget.id;

      $("#orderid").val(orderid_note);


    })
  </script> -->

  <script type="text/javascript">
   var table = $('#leads_table').DataTable();
   // table.ajax.reload( null, true ); // user paging is not reset on reload

   $('#filter_data').on('change', function () {
    if(this.value ==  'Newlead' || this.value == 'Invalid Info' || this.value == 'No Reponse' || this.value == 'Closed With Different Order' )
    {
      table.columns(2).search( this.value ).draw();
    }
        //alert(this.value);

      });

    </script>

    <script type="text/javascript">
      function viewcomments($leadid,$count)
      {
        var value = $count;
       // $('.mynotemodal').attr('id').val(4);
       // $('#notes').modal('hide');
       $(".mynotemodal").attr("id", "notes"+value);

       $.ajax({
         type: "POST",
         url: "<?php echo base_url() ?>index.php/admin/leads/get_comments", 
         data: {leadid: $leadid},
         dataType: "text",  
         cache:false,
         success: 
         function(data){


          var result  = jQuery.parseJSON(data);


          $("#testlead_head").empty();
          $("#testlead_body").empty();

          $("#newleads_head").empty();
          $("#newleads_body").empty();
          $("#invalidinfo_head").empty();
          $("#invalidinfo_body").empty();
          $("#incontact_head").empty();
          $("#incontact_body").empty();
          $("#noresponse_head").empty();
          $("#noresponse_body").empty();
          $("#awaitingresponse_head").empty();
          $("#awaitingresponse_body").empty();

          $("#closedwith_different_order_head").empty();
          $("#closedwith_different_order_body").empty();

          $("#closedwith_different_price_head").empty();
          $("#closedwith_different_price_body").empty();


          $("#leadclosed_head").empty();
          $("#leadclosed_body").empty();

         // alert(result.note_id);
         $.each(result,function(index,value){


          if(value['lead_status'] == 0)
          {
           // alert('working');
            $("#newleads_head").html("<h4><b> Newlead </b> </h4>");
       // $("modalbody").empty();
       $("#newleads_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['added_date']+ "</b>"+'</p>');
     } else if(value['lead_status'] == 1)
     {
      $("#invalidinfo_head").html("<h4> <b> Invalid Info </b> </h4>");
      $("#invalidinfo_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['added_date']+ "</b>"+'</p>');
    } else if(value['lead_status'] == 2)
    {
     $("#incontact_head").html("<h4><b> In-Contact </b> </h4>");

     $("#incontact_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['added_date']+"</b>"+ '</p>');

   } else if(value['lead_status'] == 3)
   {
    $("#noresponse_head").html("<h4><b> No Response </b> </h4>");

    $("#noresponse_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['added_date']+ "</b>"+'</p>');

  } else if(value['lead_status'] == 4)
  {
    $("#awaitingresponse_head").html("<h4><b> Awaiting Response </b> </h4>");

    $("#awaitingresponse_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['added_date']+ "</b>"+'</p>');


  }else if(value['lead_status'] == 5)
  {
    $("#closedwith_different_order_head").html("<h4><b> Closed with Different Order </b> </h4>");

    $("#closedwith_different_order_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['added_date']+ "</b>"+'</p>');


  }else if(value['lead_status'] == 6)
  {
    $("#closedwith_different_price_head").html("<h4><b> Closed with Different Price </b> </h4>");

    $("#closedwith_different_price_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['added_date']+ "</b>"+'</p>');


  }else if(value['lead_status'] == 7)
  {
    $("#leadclosed_head").html("<h4><b> Lead Closed </b> </h4>");

    $("#leadclosed_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['added_date']+ "</b>"+'</p>');


  }else if(value['lead_status'] == 8)
  {
    $("#testlead_head").html("<h4><b> Test Lead </b> </h4>");

    $("#testlead_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['added_date']+ "</b>"+'</p>');


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
  function add_comments($leadid,$count)
  {
                 //debugger;
                // alert($leadid);
                var value = $count;


                $.ajax({
                 type: "POST",
                 url: "<?php echo base_url() ?>index.php/admin/leads/showcommentmodal", 
         //url: "<?php echo base_url() ?>index.php/admin/leads/change_lead_status", 
         data: {leadid: $leadid},
         dataType: "text",  
         cache:false,
         success: 
         function(data){

          if(data == 'success')
          {
            $('.mynotemodal').hide();
            $("#addCommentModal").modal('show');
            $("#leadnoteid_two").val($leadid);
            //location.reload(true);

            //$("#leadstatus").val(currentval);
          }
          

          
          

            //alert(data['note_id']);

           // var result  = jQuery.parseJSON(data);
         // alert(result.note_id);


       }
     });
              }
            </script>

    <!-- <script type="text/javascript">
      $("#min-date").daterangepicker();
    </script> -->



  <!--   <script type="text/javascript">
     $(document).ready(function(){
      $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
          var min = $('#min').datepicker("getDate");
          var max = $('#max').datepicker("getDate");
          var startDate = new Date(data[4]);
          if (min == null && max == null) { return true; }
          if (min == null && startDate <= max) { return true;}
          if(max == null && startDate >= min) {return true;}
          if (startDate <= max && startDate >= min) { return true; }
          return false;
        }
        );


      $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
      $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
      var table = $('#example').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').change(function () {
              table.draw();
            });
          });
        </script> -->

        <!-- <script type="text/javascript">
          $('.datepicker').datepicker();
        </script> -->

        <!-- <script type="text/javascript">
          $(document).ready(function() {
  // Bootstrap datepicker
  // $('.input-daterange input').each(function() {
  //   $(this).datepicker('clearDates');
  // });

  // Extend dataTables search
  $.fn.dataTable.ext.search.push(
    function(settings, data, dataIndex) {
    var min = $('#min').val();
    var max = $('#max').val();
    var createdAt = data[1] || 1; // Our date column in the table

    if (
      (min == "" || max == "") ||
      (moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max))
    ) {
      return true;
    }
    return false;
    }
  );

  // Re-draw the table when the a date range filter changes
  $('.date-range-filter').change(function() {
    var table = $('#data-table').DataTable();
    table.draw();
  });


  $('.date-range-filter').datepicker();
});
        </script>
      -->
        <!-- <script type="text/javascript">
  // Bootstrap datepicker
  $('.input-daterange input').each(function() {
    $(this).datepicker('clearDates');
  });

//Set up your table
table = $('#leads_table').DataTable({
  paging: false,
  info: false
});

// Extend dataTables search
$.fn.dataTable.ext.search.push(
  function(settings, data, dataIndex) {
    var min = $('#min').val();
    var max = $('#max').val();
    var createdAt = data[3] || 0; // Our date column in the table

    if (
      (min == "" || max == "") ||
      (moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max))
      ) {
      return true;
  }
  return false;
}
);

// Re-draw the table when the a date range filter changes
$('.datepicker').change(function() {
  //table.draw();
  table.draw();
});

//$('#my-table_filter').hide();
</script> -->



</body>
</html>

<script type="text/javascript">
  function assigntoagent($leadid,count)
  {
    //alert($leadid);
    //var e = document.getElementById("agent_dd");
  //  var strUser = e.options[e.selectedIndex].value;
     var ab =  $('#agent_dd'+count).val();
      
      if(ab == 0)
      {

      }else if(ab > 0)
      {
        $("#leadnoteid_three").val($leadid);
         $("#addagentmodal").modal('show');

var agentid = $("#agent_dd"+count).val();
$.ajax({
 type: "POST",
 url: "<?php echo base_url() ?>index.php/admin/leads/assign_to_agent", 
     //url: "<?php echo base_url() ?>index.php/admin/leads/change_lead_status", 
     data: {agentid: agentid, leadid : $leadid},
     dataType: "text",  
     cache:false,
     success: 
     function(data){

      if(data == 'success')
      {
      
      
       //location.reload(true);

        //$("#leadstatus").val(currentval);
      }
      

      
      

        //alert(data['note_id']);

       // var result  = jQuery.parseJSON(data);
     // alert(result.note_id);


   }
 });
        
      }


     alert(ab);
   
  }
</script>