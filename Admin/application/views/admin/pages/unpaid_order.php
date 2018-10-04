
<meta charset="utf-8" />
<title>Metronic Admin Theme #3 | Editable Datatables</title>
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
<link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" /> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_material/countdown/css/jquery.countdown.css"> --> 

<style type="text/css">
    .mytbl_status{
        display: none;
    }

    .btn-info{
  background-color: orange;
  
  h3{
      text-align:center;
  }
}
</style>

<!-- END THEME LAYOUT STYLES -->
<!-- END PAGE LEVEL PLUGINS -->

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light portlet-fit ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">Unpaid Order</span>
                </div>
               <!--  <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                            </div>
                        </div> -->
                    </div>
                    <!-- <select name="filter_data" id="filter_data" class="form-control pull-right" style="width: 20%; margin-top: 4px;">
                                                <option style="font-weight: bold;">Order Status</option>
                                                <option value="Pending Order">Pending</option>
                                                <option value="In-Process">In Process</option>                                                
                                                <option value="Half Paid">Half Paid</option>
                                                <option value="Full Paid">Full Paid</option>
                                                <option value="date">Date</option>
                                            </select> -->
                    <div class="portlet-body">
                        <div class="table-toolbar">
                           <!--  <div class="row">
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
                        <table class="table table-striped table-hover table-bordered" id="neworder_tbl" style="zoom:67%;">
                            <thead>
                                <tr>
                                    <th width="1%"> S#</th>
                                    <th width="1%"> Order Date </th>
                                    <th width="2%" class="mytbl_status">Status</th>
                                    <th width="2%"> Order Id </th>
                                    <th width="2%"> Client Info </th>
                                    <th width="3%"> Payment </th>
                                    
                                    <th width="6%"> Work Type</th>
                                    <th width="2%">Academic Level</th>
                                    <th width="3%"> P# </th>
                                    <th width="2%"> Delivery Date </th>
                                    <th width="2%"> Subject / Title </th>
                                    <!--<th width="2%"> Comments</th>-->
                                    <th width="2%"> Agent </th>
                                    <th width="2%">Status</th>
                                    <th width="2%">is Paid</th>
                                    <th width="2%">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               
                                                               <?php 
                                                               $i = 1;
                                                               $count = 0;
                                                               foreach ($unpaidorders as $key => $order):
                                                                ?>

                                                                <?php $count++; ?>
                                                                <!-- <?php echo $i; ?> -->

                                                                <tr id='<?php echo $order->order_detail_id; ?>'>
                                                                	<td style="font-size: 17px;">
                                                                		<?php echo $i ?>
                                                                	</td>

                                                                    <td style="font-size: 17px;"> 

                                                                    

                                                                     <?php $order_created = date("d-m-Y H:i:s", strtotime($order->created_at)); ?>

                                                                     <?php echo $order_created; ?>

                                                                   </td>

                                                                     <td class="mytbl_status" style="font-size: 17px;"><?php
                                          if($order->order_status == 0){
                                              echo '<span class="label label-warning">Pending Order</span>';
                                          }elseif($order->order_status == 1){
                                              echo '<span class="label label-danger">In-Process</span>';
                                          }elseif($order->order_status == 2){
                                              echo '<span class="label label-info">Revision</span>';
                                          }elseif($order->order_status == 3){
                                            echo '<span class="label label-default">Completed</span>';
                                        }
                                        ?></td>
                                                                    <td style="font-size: 17px;"> 
                                                                      <?php echo $order->order_id; ?>
                                                                     </td>
                                                                    <td style="font-size: 17px;"> <?php 
                                                                    echo $order->client_name.'<br>';
                                                                    echo $order->client_email.'<br>';
                                                                    echo $order->phone.'<br>';



                                                                    ?> </td>
                                                                    <!-- <td>
                                                                    	 <?php
                                          if($order->payment_status == 0){
                                             echo '<span class="label label-warning">Half Paid</span>';
                                          }elseif($order->payment_status == 1){
                                            echo '<span class="label label-info">Full Paid</span>';
                                          }elseif($order->payment_status == 2)
                                          {
                                          	 echo '<span class="label label-danger">UnPaid</span>';
                                          }
                                          ?>
                                                                    </td> -->

                                                                    <td style="font-size: 17px;">
                                                        <?php if($order->payment_status == 0 ||  $order->payment_status == -1): ?>
                                                        <div contenteditable="plaintext-only" id="editor<?php echo $i ?>" onblur="savepayment(<?php echo $order->order_detail_id ?>,<?php echo $i ?>);">
<?php $foo = $order->order_price / 2;

echo number_format((float)$foo, 2, '.', '');
?>

</div>
                                        <?php else: ?>
                                        <div contenteditable="plaintext-only" id="editor<?php echo $i ?>" onblur="savepayment(<?php echo $order->order_detail_id ?>,<?php echo $i ?>);">
<?php echo $order->order_price; ?>
</div>
                                                        <?php endif; ?>

                                                                      
                                                                    </td>

                                                                    <td style="font-size: 17px;">
                                                                    	<?php echo $order->document_type; ?>
                                                                    </td>
                                                                    <td style="font-size: 17px;">  <?php 
                                                                    echo $order->acedamic_level;
                                                                    
                                                                    ?> </td>
                                                                    <td style="font-size: 17px;"> <?php echo $order->no_of_pages ?> </td>
                                                                   
                                                                    <td style="font-size: 17px;">
                                                                      
                                                                      <span id="mytime<?php echo $order->order_detail_id;  ?>"></span>
                                                                      <hr>
                                                                      <span id="mytimer<?php echo $order->order_detail_id;  ?>"></span>
                                                                  </td>

                                                                  <td class="center" style="font-size: 17px;"> <?php 
                                                                    echo $order->title.' / ';
                                                                    echo $order->subject.'<br>';
                                                                    ?> 
                                                                </td> 

                                                                  <!--<td style="font-size: 17px;">-->
                                                                  	
                                                                  <!--</td>-->

                                                                  <td>
                                                                      <select onchange="change_lead_status(<?php echo $order->lead_id ?>, <?php echo $i ?>);" id="lead_filter_id<?php echo $i ?>" style="width:141px; font-size:17px;">
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
              <hr>

<?php
              if($order->lead_status == 0){
                echo '<span class="label label-warning" style="background-color:#f0ad4e;">Newlead</span>';
              }elseif($order->lead_status == 1){
                echo '<span class="label label-danger">Invalid INFO</span>';
              }elseif($order->lead_status == 2){
                echo '<span class="label label-info">In Contact </span>';
              }elseif($order->lead_status == 3){
                echo '<span class="label label-default">No Reponse</span>';
              }elseif ($order->lead_status == 4) {
               echo '<span class="label label-primary">Awaiting Reponse</span>';
             }elseif ($order->lead_status == 5) {
               echo '<span class="label label-default">Closed With Different Order</span>';
             }elseif($order->lead_status == 6)
             {
              echo '<span class="label label-default">Closed With Different Price</span>';
            }elseif($order->lead_status == 7)
            {
             echo '<span class="label label-success">Lead Closed</span>';
           }elseif($order->lead_status == 8)
           {
             echo '<span class="label label-success">Test Lead</span>';
           }
           ?>
              <hr>
                                                                  	 <select onchange="" name="agents_list" id="agents_list"  style="width:141px; font-size:17px;margin-top:24px;">
                                                                      <option>Select Agent</option>
                                                                      <?php foreach ($agents as $agent): ?>
                                                                         <option value="<?php echo $agent->user_id ?>"  <?php 
              if($agent->user_id == $order->agent_id){
                echo 'selected';
              }

              ?>><?php echo $agent->user_name ?></option>
                                                                       <?php endforeach ?> 
                                                                     </select>
                                                                  </td>

                                                                  <td>
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
                                                            <?php $this->load->helper('leads'); 
         // echo 'lead id is'.$lead->lead_id;
          $count = check_view_comment($order->lead_id);
         // echo $lead->lead_id;
          //echo "<br>";
          //echo $count;
          if($count > 0)
          {
            ?>
               <a href="#notes<?php echo $i  ?>" data-toggle="modal" onclick="viewcomments(<?php echo $order->lead_id ?>, <?php echo $i ?>); return false;" style="font-weight: bolder;color:#a34ae4cc;">View Comments</a>
              <?php
          }
          //die();

          ?>

                                                            
                                                                  </td>

                                                                  <td>
                                                                  <?php
                                                                   if($order->payment_status == 0 || $order->payment_status == -1){
                                                                    echo '<span class="label label-warning">Half Paid</span>';
                                                                  }elseif($order->payment_status == 1 || $order->payment_status == 2){
                                                                    echo '<span class="label label-primary" style="background-color:green">Full Paid</span>';
                                                                  }
                                                                  ?>
                                                                  <hr>
                                                                  	<a href="#" data-toggle="modal" onclick="showconfirmation(<?php  echo $order->order_detail_id; ?>,<?php echo $i ?>);"  style="font-weight: bolder;color:#a34ae4cc;">Ispaid</a>
                                                                  </td>
                                                                    

                                                                    <td>
                                                                    <a target='_blank' href="<?php echo base_url(); ?>index.php/admin/neworder/edit_neworder/<?php echo $order->order_detail_id ?>" class="btn btn-circle btn-icon-only btn-success"><i class="icon-pencil " style="font-size: 20px; margin-left: 0px;"></i></a>


                                                                    <a class="btn btn-circle btn-icon-only btn btn-danger" title="Delete" href="#" onclick="deleteneworder(<?php echo $order->order_detail_id ?>);">
                                                                            <i class="icon-trash" style="font-size: 20px;  "></i>
                                                                          </a>
                                                                          
                                                                          <a title="Detail" target="_blank" class="btn btn-circle btn-icon-only btn-default" name="" data-toggle="modal" href="<?php echo base_url() ?>index.php/admin/neworder/order_detail/<?php echo $order->order_detail_id ?>" style="margin-top: 12px;">
<i class="glyphicon glyphicon-book" style="color:blue;"></i>

</a>
                                                                    </td>

                                                                    

                                                                  
                                                          

                                                                       
                                                                 
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
                                    <!--Modal start-->
                                         <div class="modal fade" id="confirmationbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
                                          <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Do You want to continue?</h4>
                                              </div>


                                              <div class="modal-footer">
                                                <button type="button"  class="btn btn-primary" onclick='changetoneworder();' id="modal-btn-si">Yes</button>
                                                <button type="button" onclick="notconfirm();" class="btn btn-danger" id="modal-btn-no">No</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    <!--Modal end-->


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
                                                                  <textarea class="form-control" name="ordernote"></textarea>
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



                                              <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Add</button>
                                          </form>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- EndModal -->

                             <!-- Modal -->

                                    <div class="modal fade mynotemodal"  role="dialog" style="display: none">
                                        <div class="modal-dialog">

                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Notes List</h4>
                                          </div>
                                          <div class="modal-body">
                                              <table class="table table-hover">
                                                  <thead>
                                                      <th>Note id</th>
                                                      <th>Note Description</th>
                                                      <th>Created By</th>
                                                      <th>Date</th>
                                                  </thead>
                                                  <tbody id="noteid">

                                                    
                                                      
                                                  </tbody>
                                              </table>
                                              <p id="modalbody"> </p>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- EndModal -->


                                                                            <!-- Modal -->

                                                 <div class="modal fade mycommentmodal"  role="dialog" style="display: none">
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
                                                <h4 id="newleads_head"></h4>
                                                <p id="newleads_body">


                                                </p>
                                                <h4 id="invalidinfo_head"></h4>
                                                <p id="invalidinfo_body">

                                                </p>
                                                <h4 id="incontact_head"></h4>
                                                <p id="incontact_body">

                                                </p>

                                                <h4 id="noresponse_head"></h4>
                                                <p id="noresponse_body"></p>

                                                <h4 id="awaitingresponse_head"></h4>
                                                <p id="awaitingresponse_body"></p>

                                                <h4 id="awaitingresponse_head"></h4>
                                                <p id="awaitingresponse_body"></p>

                                                <h4 id="closedwith_different_order_head"></h4>
                                                <p id="closedwith_different_order_body"></p>

                                                <h4 id="closedwith_different_price_head"></h4>
                                                <p id="closedwith_different_price_body"></p>

                                                <h4 id="leadclosed_head"></h4>
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
                         <!--  <script type="text/javascript" src="<?php echo base_url(); ?>assets_material/date/build/jquery.datetimepicker.full.min"></script> -->
                          <!-- <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
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

                          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
                          <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets_material/countdown/js/jquery.plugin.js"></script> --> 
                          <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets_material/countdown/js/jquery.countdown.js"></script>  --> 


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
              //  alert(data);  //as a debugging message.
            }
        });
      }




  </script>
  <script type="text/javascript">
    var BASE_URL = "<?php echo base_url();?>";
</script>

  <script type="text/javascript">
    function order_status($orderid,$value)
    {
        //alert("orderstatus called");
        var row = $value;
       var myvalue =  $('#orderstatus'+row).val();
      // debugger;
      //  alert(myvalue);
       // alert($id);
          //  alert('working'.$id);
          //debugger;
          $.ajax({
           type: "POST",
           url: BASE_URL+'index.php/admin/neworder/change_order_status', 
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
    function assign($orderid,$rowid)
    {

        var value = $rowid;
        //alert("working");

       //alert(writer)

       if(region == -1 && writer == -1)
       {
      //  alert('not selected');
    }else 
    {


        // var limit = "<?php echo $i; ?>";
        //  alert(limit-1);

        // alert('working');
        debugger;
        var region =  $('#region_list'+value).val();
        var writer =  $('#writer_list'+value).val();
        var date = $("#writer_due_date"+value).val();
        var time = $("#writer_due_time"+value).val();
          //  alert('working'.$id);
          $.ajax({
           type: "POST",
           url: "neworder/assign_order", 
           data: {orderid: $orderid, regionid : region,writerid : writer, date:date,time:time},
           dataType: "text",  
           cache:false,
           success: 
           function(data){
                //alert(data);  //as a debugging message.
                $('#region_list  option[value=region]').prop("selected", true);
            }
        });
      }
       //alert(region.' '.date);
   }
</script>

<script type="text/javascript">
    // $("#regionlist").onchange(function(){

    // })
</script>

<!-- <script type="text/javascript">
    $("#timers").countdown({until: new Date(2018, 4-1, 6)});
</script> -->

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

<!-- <script type="text/javascript">
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

            //alert(data['note_id']);

          var result  = jQuery.parseJSON(data);
         // alert(result.note_id);
 $.each(result,function(index,value){

    //alert(value.attr("note_id"));

    // $.each(value,function(index,value){

    

    //  });

    //alert(value['note_id']);



    $("#noteid").append("<tr id='mytbl'><td>"+ value['note_id']+"</td> <td>"+value['note_description']+" </td> <td> "+value['created_by']+" </td> <td>"+value['created_at']+"</td></tr>");
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
</script> -->

<script type="text/javascript">
            $("#neworder_tbl").DataTable({
                stateSave: true,
                "pageLength": 50,
                "iDisplayLength": 50
                //paging :false
            });
        </script>

        <script type="text/javascript">
            
        </script>

<script type="text/javascript">
    // function showcalender($count)
    // {
    //     debugger;
    //     var value = $count;

       // jQuery('#datetimepicker').datetimepicker();

    // }
</script>

<script type="text/javascript">
    jQuery('#datetimepicker').datetimepicker({

 //format:'dd.m.YY'
 
});
</script>

<script type="text/javascript">
   var table = $('#neworder_tbl').DataTable();
    $('#filter_data').on('change', function () {
        if(this.value == 'Pending Order' || this.value == 'In-Process' || this.value == 'Revision' || this.value == 'Completed' )
        {
            table.columns(1).search( this.value ).draw();
        }
        //alert(this.value);
       
        });
    
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
 // var now = new Date().getTime();
 
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
$("#mytime"+result['order_id']).html("<span style='color:black;font-weight:bold'>"+result['order_datetime']+"</span>");
  $("#mytimer"+result['order_id']).html("<span class='btn btn-info' style='color:white; font-weight:bold;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span>");


// $("#mytimer"+result['order_id']).html("<a href='' class='btn btn-info'><span style='color:black;font-weight:bold'>"+result['order_datetime']+"</span>"+ "<hr>"+ '  '+"<span style='color:green; font-weight:bold;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span></a>");

  // If the count down is finished, write some text 
  if (distance < 0) {
    //clearInterval(x);
    //document.getElementById("newordertime").innerHTML = "EXPIRED";
    // $("#mytimer"+result['order_id']).html("<a href='' class='btn btn-danger'><span style='color:black;font-weight:bold'>"+result['order_datetime']+"</span>"+ "<hr>"+ '  '+"<span style='color:white; font-weight:bold;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span></a>");

    $("#mytimer"+result['order_id']).html("<span class='btn btn-danger' style='color:white; font-weight:bold;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span>");
  }
}, 1000);




     }


   });
    }
  })
    });
  </script>

  <script type="text/javascript">
    function viewcomments($leadid,$count)
    {
        //alert($leadid);
       // alert($count);
      //alert($leadid);
      var value = $count;
       // $('.mynotemodal').attr('id').val(4);
       // $('#notes').modal('hide');
       $(".mycommentmodal").attr("id", "notes"+value);
      

       $.ajax({
         type: "POST",
         url: "<?php echo base_url() ?>index.php/admin/leads/get_comments", 
         data: {leadid: $leadid},
         dataType: "text",  
         cache:false,
         success: function(data){

          //alert(data);
          

         // alert(data);
          var result  = jQuery.parseJSON(data);

          
 



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
            $("#newleads_head").html("<h3><b> Newlead </b> </h3>");
       // $("modalbody").empty();
       $("#newleads_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');
     } else if(value['lead_status'] == 1)
     {
      $("#invalidinfo_head").html("<h3> <b> Invalid Info </b> </h3>");
      $("#invalidinfo_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');
    } else if(value['lead_status'] == 2)
    {
     $("#incontact_head").html("<h3><b> In-Contact </b> </h3>");

     $("#incontact_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+"</b>"+ '</p>');

   } else if(value['lead_status'] == 3)
   {
    $("#noresponse_head").html("<h3><b> No Response </b> </h3>");

    $("#noresponse_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');

  } else if(value['lead_status'] == 4)
  {
    $("#awaitingresponse_head").html("<h3><b> Awaiting Response </b> </3>");

    $("#awaitingresponse_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');


  }else if(value['lead_status'] == 5)
  {
    $("#closedwith_different_order_head").html("<h3><b> Closed with Different Order </b> </h3>");

    $("#closedwith_different_order_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');


  }else if(value['lead_status'] == 6)
  {
    $("#closedwith_different_price_head").html("<h3><b> Closed with Different Price </b> </h3>");

    $("#closedwith_different_price_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');


  }else if(value['lead_status'] == 7)
  {
    $("#leadclosed_head").html("<h3><b> Lead Closed </b> </h3>");

    $("#leadclosed_body").append('<p>'+value['lead_note']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');


  }
    
  
  });


          }
        });
     }
   </script>
   <script>
       function savepayment($id, $value, $i)
    {
      //alert($id);
      var row = $value
      var edit = $('#editor'+row).text();
      //var myrow =  $('#order_detail_id'+row).val();
          $.ajax({
            url: BASE_URL+'index.php/admin/neworder/neworder_priceupdate',
            data: {orderid: $id, order_price : edit},
            type: 'POST',
            dataType: 'text',
            success: function(response, textStatus, jqXHR) 
            {
              //alert("Yay!");
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
              alert(textStatus, errorThrown);
            }
          });
    }

   </script>
   
   <script>
       function showconfirmation($orderid,$count)
       {
          // alert($orderid);
          // alert($count);
           $("#confirmationbox").modal('show');

                 $("#modal-btn-si").attr('onclick','createneworder('+$orderid+','+$count+')');

       }
   </script>

   <script>
   function createneworder($orderid, $count)
   {
    $("#confirmationbox").modal('hide');
    //alert('working');
    $.ajax({

method : 'POST',
url : '<?php echo base_url() ?>index.php/admin/neworder/convert_to_neworder',
data : {orderid : $orderid},
dataType : 'text',
success : function(data)
{
    if(data == 'success')
    {
        location.reload();
    }
// toastr['success']('Writer Due Date Selected Successfully');
//window.setTimeout(function(){location.reload()},50);
}




});
   }


   function notconfirm()
   {
    $("#confirmationbox").modal('hide');
   }
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
        location.reload();
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
<!--   <script>-->
<!--       $('#neworder_tbl').dataTable({-->
<!--    paging: false-->
<!--});-->
<!--   </script>-->