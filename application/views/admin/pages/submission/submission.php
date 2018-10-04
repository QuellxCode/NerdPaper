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
<link href="<?php echo base_url(); ?>assets_material/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_material/countdown/css/jquery.countdown.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_material/voting/dist/jquery.thumbs.css"">


<style>
h4{
      text-align:center;
  }
.fa {
    font-size: 50px;
    cursor: pointer;
    user-select: none;
}

.fa:hover {
  color: darkblue;
}

.late_due_submission{
  display: none;
}

.label-success{
    background-color: green;
}

.label-info{
    background-color: red;
}
</style>

<!-- END THEME LAYOUT STYLES -->
<!-- END PAGE LEVEL PLUGINS -->
 <script type="text/javascript">
        <?php if($this->session->flashdata('submission_deleted')){ ?>
    toastr.success("<?php echo $this->session->flashdata('submission_deleted'); ?>");
<?php }?>

    </script>

<div class="row">
  <div class="col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet light portlet-fit ">
      <div class="portlet-title">
        <div class="caption">
          <i class="icon-settings font-red"></i>
          <span class="caption-subject font-red sbold uppercase">All Submissions</span>
        </div>
                <!-- <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                            </div>
                          </div> -->
                        </div>
                       <!-- filter code is there -->
                        <div class="portlet-body">
                          <div class="table-toolbar">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="btn-group">
                                        <!-- <button id="sample_editable_1_new" class="btn green"> Add New
                                            <i class="fa fa-plus"></i>
                                          </button> -->
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="btn-group pull-right">
                                        <!-- <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                            <i class="fa fa-angle-down"></i>
                                          </button> -->
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
                                  </div>
                                  <table class="table table-striped table-hover table-bordered" class="submission_tbl_chng" id="submission_tbl" width="20%" style="zoom:75%;">
                                    <thead>
                                      <tr>
                                        <th width="1%"> Sr# </th>
                                        <th width="1%"> Order Id </th>
                                        <th width="1%"> Cust Name </th>
                                        <th width="1%"> Payment </th>
                                        <th width="1%" class="late_due_submission"> Late/Due Submission </th>
                                        <th width="1%">P# </th>
                                        <th width="1%"> Writer Name </th>
                                        <th width="1%">Writer Due Date</th>
                                        <th width="1%"> Submission Date </th>
                                        <th width="1%">Uploads</th>
                                        <th width="1%">Writer Document Note</th>
                                        <th width="1%"> Bonus / Deduction </th>

                                        <th width="1%">Action</th>
                                        <th width="1%">Assigned By & Date</th>
                                        <th width="1%">Submitted by</th>
                                        <th width="1%">Quality</th>
                                        <th width="1%">Add Note</th>
                                        <th width="1%">Chargebacks</th>
                                        <th width="1%">Client feedback</th>
                                        <th width="1%">Delete</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                    <!--  -->
                                    <?php 
                                    // echo "<pre>";
                                    // print_r($submissions_detail);
                                    // die();
                                     ?>
                                    
                                     <?php 
                                     $i = 1;
                                     $count = 0;
                                     foreach ($submissions_detail as $key => $submission):
                                      ?>
                                      <?php $count++ ?>

                                      <tr id='<?php echo $submission->submission_id; ?>'>

                                        <td style="font-size: 17px;"> 

                                         <?php echo $i ?> </td>
                                         <td style="font-size: 17px;"><?php echo $submission->order_id; ?> </td>
                                         <td> 


                                          <?php 
                                          echo $submission->client_name.'<br>';
                                          echo $submission->phone.'<br>';
                                          echo $submission->client_email; 

                                          ?>


                                        </td>
                                        <td style="font-size: 17px;">  

                                          <?php
                                          if($submission->payment_status == 0){
                                           echo '<span class="label label-info">Half Paid</span>';
                                         }elseif($submission->payment_status == 1){
                                          echo '<span class="label label-success">Full Paid</span>';
                                        }

                                        ?>

                                      </td>
                                      <td class="late_due_submission" >
                                        <?php 

                                         if(strtotime($submission->submission_date) > strtotime($submission->writer_due_date))
                                         {
                                         echo   '<span class="label label-info">Late</span>';
                                         }else{
                                          echo   '<span class="label label-info">Due</span>';
                                         }

                                         ?>
                                      </td>
                                      <td> 
                                        <?php echo $submission->no_of_pages ?>
                                      </td>
                                      <td class="center" style="font-size: 17px;"> <?php 
                                      echo $submission->submittedby

                                      ?> </td>

                                      <td>
                                         <!--  <?php 
                                          echo $submission->wr_duedate;

                                          ?> -->

                                          <?php echo $submission->writer_due_date ?>

                                        </td>

                                        <td style="font-size: 17px;">
                                        
                                          <?php $newDate = date("d-m-Y H:i:s", strtotime($submission->submission_date)); ?>

                                          <?php echo $newDate; ?>


                                        </td>

                                        <td style="font-size: 17px;">
                                          <?php $this->load->helper('table'); 
                                          $table_free_booked = myfunc($submission->submission_id);

                                          ?>


                                          <?php foreach ($table_free_booked as $key => $value): ?>
                                                    
                       
                                             <a target="_blank" href="<?php echo base_url() ?>documents/<?php echo $value->submission_file_name ?>" download> <br>
                                              <?php echo $value->submission_file_path ?>
                                             </a>
                                          <?php endforeach ?>
                                          <hr>

                                          <?php $this->load->helper('table'); 
                                          $table_free_booked_2 = reportfile($submission->submission_id);
                                          // echo '<pre>';
                                          // print_r($table_free_booked_2);
                                          // die();

                                          ?>


                                          <?php foreach ($table_free_booked_2 as $key => $value): ?>


                                             <a target="_blank" href="<?php echo base_url() ?>documents/<?php echo $value->submission_report_file_name ?>" download> <br>
                                              <?php echo $value->submission_report_file_path ?>
                                             </a>
                                          <?php endforeach ?>


                                         

                                        </td>
                                        <td style="font-size: 17px;">
                                          <?php 
                                          echo $submission->writer_submission_note;
                                          ?>
                                        </td>

                                        <td style="font-size: 17px;">
                                       
                                       <!--  <a href="<?php echo base_url(); ?>index.php/admin/submission/bonus_deduction/<?php echo $submission->submission_id ?>" class="btn btn-info">
                                          <span>Bonus / Ded</span>
                                        </a> -->

                                         

                                        <a name="<?php echo $submission->order_id_in_submission ?>" title="Bonus Deduction Note" id="<?php echo $submission->writer_id ?>"  data-toggle="modal" href="#bonusDeduction_note" class="btn btn-info" >
                                       <span>Bonus / Ded</span>
                                      </a>

                                       </td>



                                       <td style="font-size: 17px;">

                                         <?php if ($submission->submission_status == 3): ?>
                                           <?php echo "First Revision Marked" ?>

                                         <?php elseif($submission->payment_status != -1 || $submission->payment_status != 0): ?>

                                         
                                        
                                         
<?php if ($submission->submission_status == 1): ?>


<a target='_blank' href="<?php echo base_url(); ?>index.php/admin/revision/revision_marked_by_admin/<?php echo $submission->order_id_in_submission ?>/<?php echo $submission->writer_id ?>/<?php echo $submission->submission_id ?>">MR
<i class="icon-check"></i>
</a>
<?php elseif($submission->submission_status != 1):?>
<a target='_blank' href="<?php echo base_url(); ?>index.php/admin/revision/revision_marked_by_admin/<?php echo $submission->order_id_in_submission ?>/<?php echo $submission->writer_id ?>/<?php echo $submission->submission_id ?>">
</a>
<?php endif ?>


                                           
                                         
                                         <?php endif ?>





                                         <hr size="30">
                                        
                                         <?php if ($submission->payment_status ==1): ?>




                                          <?php if ($submission->submission_status == 1 || $submission->submission_status == 3): ?>

                                            <?php echo "Full:".' '.$submission->sentby.'<br> '.' on'.' ' ?> 

                                             <?php $newDate_assigned = date("d-m-Y H:i:s", strtotime($submission->sentat)); ?>

                                          <?php echo $newDate_assigned ?>                                         

                                          <?php else: ?>



                                            <a href="<?php echo base_url(); ?>index.php/admin/submission/fullpaid_submission/<?php echo $submission->submission_id ?>"><button class="btn btn-success" style="border-radius: 3px,3px,3px,3px;">Submit Final <br> Copy  to <br> Client</button></a>

                                          <?php endif ?>

                                        <?php else: ?>

                                          <?php if ($submission->submission_status == 2 || $submission->submission_status == 3 ): ?>

                                            <?php echo "Half:".' '.$submission->sentby.'<br> '.' on'.' ' ?>

                                             <?php $newDate_half = date("d-m-Y H:i:s", strtotime($submission->sentat)); ?>

                                          <?php echo $newDate_half ?>



                                          <?php else: ?>

                                           <a href="<?php echo base_url(); ?>index.php/admin/submission/halfpaid_submission/<?php echo $submission->submission_id ?>/<?php echo $submission->order_id_in_submission ?>" target="_blank"><button class="btn btn-danger" style="border-radius: 3px,3px,3px,3px;">Submit Half <br> Copy  to <br> Client</button></a>


                                         <?php endif ?>




                                       <?php endif; ?>
                                     </td>

                                     <td style="font-size: 17px;">


                                       <?php echo $submission->assignedby.'<br>';


                                       //echo $submission->assignedat;

                                       ?>
                                        <?php $newDate_assigned = date("d-m-Y H:i:s", strtotime($submission->assignedat)); ?>

                                          <?php echo $newDate_assigned ?>

                                     </td>
                                     <td style="font-size: 17px;">
                                     	<?php echo $submission->submittedby.'<br>'; ?>
                                      <?php $newDate_submitted = date("d-m-Y H:i:s", strtotime($submission->submittedat)); ?>

                                          <?php echo $newDate_submitted ?>
                                     

                                     </td>
                                     <td class="set_quality" id="myqual<?php echo $submission->submission_id;  ?>">
                                      
                                     <?php if (isset($submission->submission_quality_note)): ?>

                                      <a href="">view note</a>
                                       
                                     <?php endif ?>
                                     </td>

                                     <td style="font-size: 17px;">
                                      <a name="" title="Add Note" id="<?php echo $submission->order_detail_id ?>" name="" data-toggle="modal" href="#addNote" >
                                        <i class="icon-plus" style="margin-top: 10px; margin-left: 0px; font-size: 30px; color:black;"></i> 
                                      </a> <br>

                                          <?php $this->load->helper('submission'); 
         // echo 'lead id is'.$lead->lead_id;
          $count = check_view_notes($submission->order_detail_id);
          if($count > 0)
          {
            ?>
                                      <a href="#notes<?php echo $i  ?>" data-toggle="modal" onclick="viewnotes(<?php echo $submission->order_id_in_submission ?>,<?php echo $i ?>)" style="font-weight: bolder;color:#a34ae4cc;">View Notes</a>
  <?php
          }
          //die();

          ?>

                                    </td>

                                    <td>Chargebacks</td>
                                    <td>Client feedback</td>



                                    <td>
                                                                 <!--  <a class="btn btn-circle btn-icon-only btn-default" href="">
                                           <i class="icon-pencil"></i>
                                         </a> -->

                                         <a  onclick="deleteneworder(<?php echo $submission->submission_id ?>);return false;" class="btn btn-circle btn-icon-only btn-danger" href="">
                                           <i class="icon-trash"></i>
                                         </a>

                                         <!-- <a  href="<?php echo base_url(); ?>index.php/admin/submission/edit_submission/<?php echo $submission->submission_id ?>" class="btn btn-circle btn-icon-only btn-success" href="">
                                           <i class="icon-pencil"></i>
                                         </a> -->

                                          <a  title="edit submission" class="btn btn-circle btn-icon-only btn-info" id="<?php echo $submission->submission_id ?>" name="" data-toggle="modal" href="#edit_writer_submission" style="margin-top: 12px;">
                                       <i class="icon-pencil" ></i>
                                     </a>
                                       </td>



                                                                        <!-- <td>
                                                                          
                                                                        </td> -->


                                                                        <!--   <td>
                                                                             
                                                                        </td> -->
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
                                                                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/submission/add_submissionorder_note">

                                                                  <div class="form-group" id="mytextarea"> 
                                                                    <label>Add Note</label>    
                                                                    <textarea class="form-control" name="ordernote"></textarea>
                                                                    <input type="text" name="myorder_id" id="orderid" />
                                                                    <input type="text" name="note_writer" id="note_writer" />
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

                                                         <div class="modal fade" id="edit_writer_submission" role="dialog">
                                                          <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Edit Submissions</h4>
                                                              </div>
                                                              <div class="modal-body">
                                                                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/submission/update_submission_file_notes" enctype="multipart/form-data">

                                                                  <div class="form-group" id="mytextarea"> 
                                                                    <label for="writer_submission_note">Writer Note</label>    
                                                                    <textarea class="form-control" name="writer_submission_note" id="writer_submission_note" value="" style="height: 8em;"></textarea>
                                                                    <input type="hidden" name="submissionid_edit_submission" id="submissionid_edit_submission" />

                                                                    <p id="myfiles">
                                                                      <a id="downloadfiles" ></a> <br>
                              
                                                                      
                                                                    </p>
                                                                    <hr>
                                                                    <p id="myreportfiles">
                                                                    <a id="downloadreportfiles" ></a> <br>

                                                                    </p>

                                                                    <div class="form-group">
                                                                      <label for='add_revision_file'></label>
                                                                      <input type="file" name="userFiles[]" id="add_revision_file" multiple="multiple">
                                                                    </div>
                                                                    
                                                                  </div>

                                                                  <div class="form-group">
                                                                    <label for="add_revision_file"></label>
                                                                    <input type="file" name="userreportFiles[]" id="add_report_revision_file" multiple="multiple">
                                                                  </div>



                                                                  
                                                                
                                                              </div>
                                                              <div class="modal-footer">
                                                                
                                                               
                                                                  <button type="submit" class="btn btn-success center-block "><span class="glyphicon glyphicon-off"></span> Submit</button>
                                                               
                                                                </form>

                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <!-- EndModal -->



                                                        <!-- Modal Bonus Deduction -->

                                                        <div class="modal fade" id="bonusDeduction_note" role="dialog">
                                                          <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Add Note</h4>
                                                              </div>
                                                              <div class="modal-body">
                                                                    <form  class="form-horizontal" id="" action="<?php echo base_url() ?>index.php/admin/submission/bonus_deduction_calculation/<?php  if (!empty($role)) {
                      echo $role->user_id;
                  } ?>" method="post">
            <div class="form-body">
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                    <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>

                        


                        <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Select Role</label>
                            <div class="col-md-9">
                                <select class="form-control" name="bonus_ded_percentage"  id="role_type" multiple="">
                                    <option value="100">100%</option>
                                    <option value="90">90%</option>
                                    <option value="80">80%</option>
                                    <option value="70">70%</option>
                                    <option value="60">60%</option>
                                    <option value="50">50%</option>
                                    <option value="40">40%</option>
                                    <option value="30">30%</option>
                                    <option value="20">20%</option>
                                    <option value="10">10%</option>
                                    <option value="0">0%</option>

                                    <option value="-10">-10%</option>
                                    <option value="-20">-20%</option>
                                    <option value="-30">-30%</option>
                                    <option value="-40">-40%</option>
                                    <option value="-50">-50%</option>
                                    <option value="-60">-60%</option>
                                    <option value="-70">-70%</option>
                                    <option value="-80">-80%</option>
                                    <option value="-90">-90%</option>
                                    <option value="-100">-100%</option>
                                    
                                </select>
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                        <input type="text" name="writerid" id='writerid_deduction' value="">
                        <input type="text" name="orderid" id='submissionid_deduction' value="">
                        <div class="form-group form-md-line-input has-success">
                                                                    <label class="col-md-2 control-label" for="form_control_1">Note</label>
                                                                    <div class="col-md-10">
                                                                        <textarea class="form-control" name="deductionnote" rows="3" placeholder="Enter more text"></textarea>
                                                                        <div class="form-control-focus"> </div>
                                                                    </div>
                                                                </div>
                        <!-- <div class="form-group"> 
                    
                    <div class="col-sm-10"> 
                        <label class="col-md-3 control-label" for="form_control_1">Select Role
                                <span class="required">*</span>
                            </label>
                      <div class="col-md-9">
                          <select class="form-control" onchange="doSomething();" name="role_type" id="role_type"> 
                         <option value="writer">Writer</option> 
                        <option value="Admin">Admin</option> 
                        <option value="support">Support</option>
                        <option value="sales">Sales</option> 
                       

                    </select>
                      </div> 
                </div> 
            </div> -->

                        

                  
                   
              
                        


                    </div>
                    
                
                                                              </div>

                                                              <div class="modal-footer">
                                                                <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-4">
                               <button type="submit" class="btn green">Submit </button>
                               

                            </div>
                        </div>
                    </div>
                                                               

                                                              </div>
                                                              </form>
                <!-- END FORM-->
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <!-- EndModal -->

                                                         <div class="modal fade mynotemodal"  role="dialog" style="display: none">
                                <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Notes List</h4>
                                  </div>
                                  <div class="modal-body mymodalbody" id="modalbody">
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

                                              <h4 id="allrevision_head"></h4>
                                              <p id="allrevision_worknote"></p>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- EndModal -->
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



                                                         <div class="modal fade qualitynotemodal"  role="dialog" style="display: none">
                                <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Notes List</h4>
                                  </div>
                                  <div class="modal-body mymodalbody" id="modalbody">
                                        <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/submission/add_submission_quality_note">

                                                                  <div class="form-group" id="mytextarea"> 
                                                                    <label>Add Note</label>    
                                                                    <textarea class="form-control" name="qualitynote"></textarea>
                                                                    <input type="text" name="submissionid" id="submissionid" />
                                                                   
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


                                                        <div class="modal fade showqualitynote"  role="dialog" style="display: none">
                                <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Quality Note</h4>
                                  </div>
                                  <div class="modal-body mymodalbody" id="modalbody">
                                       
                                      <p id="qualitynote"></p>

                                          </div>
                                          <div class="modal-footer">
                                              <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- EndModal -->


                                                        <!-- BEGIN CORE PLUGINS -->
                                                       <!--  <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->
                                                        <script type="text/javascript" src="<?php echo base_url(); ?>assets_material/voting/dist/jquery.thumbs.js"></script>
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
    alert(myvalue);
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
                alert(data);  //as a debugging message.
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
           url: "neworder/change_order_status", 
           data: {orderid: $orderid, status : myvalue},
           dataType: "text",  
           cache:false,
           success: 
           function(data){
               // alert(data);  //as a debugging message.
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
        alert('not selected');
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
                alert(data);  //as a debugging message.
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
  <script type="text/javascript">
    var BASE_URL = "<?php echo base_url();?>";
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
         url: BASE_URL+"index.php/admin/neworder/get_notes", 
         data: {orderid: $orderid},
         dataType: "text",  
         cache:false,
         success: 
         function(data){
          //alert(data);
           // console.log(data);

            //alert(data['note_id']);

            var result  = jQuery.parseJSON(data);

           // console.log("working");

          //console.log(result);

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

    // console.log(value);
    //console.log(index+' '+value['status']);

  //  console.log('after');

  if(value['status'] == 0)
  {
    $("#newordersnote").html("<h4><b> New Orders </b> </h4>");
       // $("modalbody").empty();
       $("#neworderbody").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+ '</p>');
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

    $("#revision_in_progress_note").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+"</b>"+ '</p>');

} else if(value['status'] == 4)
{
    $("#revised_workhead").html("<h4><b> Revised Work </b> </h4>");

    $("#revised_worknote").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');


}else if (value['status'] == 5)
{
  $("#allrevision_head").html("<h4><b>All Revisions </b> </h4>");

    $("#allrevision_worknote").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+"</b>"+ '</p>');


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

   <!-- <script type="text/javascript">
    $("#neworder_tbl").DataTable();
  </script> -->
 


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
//   $('.js-rating').thumbs();
// $('.js-rating').thumbs({
//   classCss: 'jq-rating',
//   likes: 1,
//   dislikes: 1
// });


</script>
<script type="text/javascript">
  //$(document).ready(function(){

    $('.js-rating').thumbs({
  
  onLike: function (value) {
      var submissionid = $('.myrating').attr('id');
      alert(submissionid);   
      alert ('Thank You For Voting.');
      $('.sprite-fa-thumbs-down-grey').show();
      $('.sprite-fa-thumbs-up-grey').hide();
  },
  onDislike: function(value) {
     alert ('Im sorry.');

     $('.sprite-fa-thumbs-down-grey').hide();
      $('.sprite-fa-thumbs-up-grey').show();


  }
});

 // });
</script>

<script>
function myFunction(x,$count,$submissionid) {
  
   // x.classList.toggle("fa-thumbs-down");
    var submissionid = $submissionid;
    var count = $count;
    alert(submissionid);

    $.ajax({

      method : 'post',
      url : '<?php echo base_url() ?>index.php/admin/submission/change_quality_status',
      data : { submissionid : submissionid },
      dataType : 'text',
     
      success : function (data)
      {
        if(data == 'success')
        {

           x.classList.toggle("fa-thumbs-down");

        }

      }

    });
}
</script>

<script>
    $('#bonusDeduction_note').on('show.bs.modal', function(e) {

      var $modal = $(this),
      writerid_ded = e.relatedTarget.id;

      $("#writerid_deduction").val(writerid_ded);


    })
  </script>

  <script>
    $('#bonusDeduction_note').on('show.bs.modal', function(e) {

      var $modal = $(this),
      submissionid_ded = e.relatedTarget.name;

      $("#submissionid_deduction").val(submissionid_ded);


    })
  </script>

   <script>
    $('#edit_writer_submission').on('show.bs.modal', function(e) {

      var $modal = $(this),
      submissionid = e.relatedTarget.id;
      //alert(submissionid);
      $("#submissionid_edit_submission").val(submissionid);

      $.ajax({

        method : 'post',
        url : '<?php echo base_url(); ?>index.php/admin/submission/edit_submission_note',
        data : {submissionid : submissionid},
        dataType : 'text',
        success : function (data)
        {
          var one_arg = false;
          var sec_arg = true;

        //  if(data)
        //  {
          $("#writer_submission_note").html(data);
  // solution files ajax request
          $.ajax({

            method : 'post',
            url : '<?php echo base_url(); ?>index.php/admin/submission/view_writer_submission_files',
            data : {submissionid : submissionid},
            dataType : 'text',
            success : function (res)
            {


               var result  = jQuery.parseJSON(res);
               var $i = 1 ;
               $("#myfiles").empty();
              $.each(result, function(key,value) {
                console.log(value['revision_file_path']);
                

                $("#myfiles").append('<br><a id="removefile'+$i+'" href="<?php echo base_url(); ?>index.php/admin/file/pdf/'+value['submission_file_path']+'"> '+value['submission_file_name']+'   </a> <i class="fa fa-remove filelist'+$i+'" onclick="removeFile('+$i+', '+value['submission_file_id']+','+one_arg+');" style="font-size:24px;color:red"></i>');
                $("#downloadfiles").append().attr('href','<?php echo base_url(); ?>index.php/admin/file/pdf/'+value['revision_file_path']);
                $i++;

              });

        //alert(data);
      }


    });

    // report files ajax request
    $.ajax({

method : 'post',
url : '<?php echo base_url(); ?>index.php/admin/submission/view_writer_submission_report_files',
data : {submissionid : submissionid},
dataType : 'text',
success : function (res)
{


   var result  = jQuery.parseJSON(res);
   var $i = 1 ;
   $("#myreportfiles").empty();
  $.each(result, function(key,value) {
    //console.log(value['revision_file_path']);
    

    $("#myreportfiles").append('<br><a id="rep_removefile'+$i+'" href="<?php echo base_url(); ?>index.php/admin/file/pdf/'+value['submission_report_file_path']+'"> '+value['submission_report_file_name']+'   </a> <i class="fa fa-remove repfilelist'+$i+'" onclick="removeFile('+$i+', '+value['submission_report_file_id']+','+sec_arg+');" style="font-size:24px;color:red"></i>');
    $("#downloadreportfiles").append().attr('href','<?php echo base_url(); ?>index.php/admin/file/pdf/'+value['revision_file_path']);
    $i++;

  });

//alert(data);
}


});

        //}
        //alert(data);
      }


    });



    })
  </script>

  <script type="text/javascript">
    function removeFile($i , $fileid,thrid_arg)
    {
      alert(thrid_arg);
      if(thrid_arg == false)
      {
        var count = $i;
      var submission_file_id = $fileid;
      $('#removefile'+count).remove();
      $('.filelist'+count).remove();

      $.ajax({
        method : 'post',
        url : '<?php echo base_url() ?>index.php/admin/submission/remove_submission_file',
        data : {submission_file_id : submission_file_id},
        dataType : 'text',
        success : function(data)
        {
          //alert(data);
        }


      });
      }else{

         var count = $i;
      var submission_report_file_id = $fileid;
      $('#rep_removefile'+count).remove();
      $('.repfilelist'+count).remove();

      $.ajax({
        method : 'post',
        url : '<?php echo base_url() ?>index.php/admin/submission/remove_submission_report_file',
        data : {submission_file_id : submission_report_file_id},
        dataType : 'text',
        success : function(data)
        {
          //alert(data);
        }


      });


      }
      
     // alert(count);
    }
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
  $('#submission_tbl tr').each(function() {
    var submissionid = this.id;
    //alert(this.id)
    if(this.id != ""){
    $.ajax({

        method : 'POST',
        url : '<?php echo base_url() ?>index.php/admin/submission/submission_quality',
        data : {submission_id : this.id},
        dataType : 'text',
        success : function(data)
        {
          var result  = $.parseJSON(data);
          console.log(result);

          


         // alert(result['submission_id']);
         // debugger;
          // if(data == 0)
          // {
            //$("#qual"+this.id).html();

            //$("#myquality"+this.id).html("<i  class='fa fa-thumbs-up'></i>");
          //}
          // $(".set_quality").attr('id','qual'+submissionid);
          // if(data == 0)
          // {
          //   $('.set_quality').html("<i onclick='change_quality("+this.id+");'  class='fa fa-thumbs-down'></i>");
          // }else{
          //   $('.set_quality').html("<i onclick='change_quality("+this.id+");'  class='fa fa-thumbs-down'></i>");
          // }

          if(result['submission_quality'] == 0  )
          {
            if(result['submission_quality_note'])
            {
             $("#myqual"+result['submission_id']).html("<i onclick='change_quality("+result['submission_id']+");'  class='fa fa-thumbs-down' style='margin-top:150%; color:red'></i><a href='' onclick='viewquality_note("+result['submission_id']+");return false;'>view note<a/>");
            }else{
              $("#myqual"+result['submission_id']).html("<i onclick='change_quality("+result['submission_id']+");'  class='fa fa-thumbs-down' style='margin-top:150%; color:red'></i>");
            }
          }else if(result['submission_quality'] == 1 ){

            if(result['submission_quality_note'])
            {

             $("#myqual"+result['submission_id']).html("<i onclick='change_quality("+result['submission_id']+");'  class='fa fa-thumbs-up' style='margin-top:150%; color:green;'></i><a  onclick='viewquality_note("+result['submission_id']+");return false;'>view note<a/>");
            }else{
              $("#myqual"+result['submission_id']).html("<i onclick='change_quality("+result['submission_id']+");'  class='fa fa-thumbs-up' style='margin-top:150%; color:green;'></i>");
            }
          }
          
         

          submissionid = "";
          //alert(data);
        }


    });
}
  })
});
  </script>

  <script type="text/javascript">
    function change_quality(id)
    {
      //debugger;
    //  alert($id);
$(".qualitynotemodal").attr("id", "quality");
$("#quality").modal('show');
$("#submissionid").val(id);

      // var submissionid = id;
      // $.ajax({
      //   method : 'post',
      //   url : '<?php echo base_url() ?>index.php/admin/submission/change_submission_quality',
      //   data : {submissionid :submissionid },
      //   dataType : 'text',
      //   success :function(data)
      //   {
      //    // location.reload();
      //   }

      // });

    }
  </script>

  <script type="text/javascript">
    function viewquality_note(id)
    {
     // alert("working");
       

//$("#submissionid").val(id);
//console.log(id);

$.ajax({
  method : 'POST',
  url : '<?php echo base_url() ?>index.php/admin/submission/viewqualitynote',
  data : {submissionid : id},
  dataType : 'text',
  success : function(data)
  {
    var value  = jQuery.parseJSON(data);
  //  console.log(result['order_id']);
   $("#qualitynote").empty();
   $("#qualitynote").append('<h5>'+value['submission_quality_note']+'</h5>'+'<b>By'+' '+ value['qualitynote_created_by']+' '+'<b>On</b>'+' ' +value['qualitynote_created_at']+ "</b>");

   $(".showqualitynote").attr("id", "qualitynote"+id);
   $("#qualitynote"+id).modal('show');
  }
});
    }
  </script>

  <script>
  function deleteneworder($submission_id)
   {
    $("#deleteconfirmationbox").modal('show');

$("#modal-btn-si2").attr('onclick','deletenewordernow('+$submission_id+')');
   }

   function deletenewordernow($submission_id)
   {
    $("#deleteconfirmationbox").modal('hide');
    //alert('working');
    $.ajax({

method : 'POST',
url : '<?php echo base_url() ?>index.php/admin/submission/delete_submission',
data : {submission_id : $submission_id},
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


   function donotdelete()
   {
    $("#deleteconfirmationbox").modal('hide');
   }
  </script>
<!-- 
  <script type="text/javascript">
 var table = $('#submission_tbl').DataTable({
 // "scrollX": true
 $('#submission_tbl').css( 'display', 'block' );
table.columns.adjust().draw();
 });

 //var table = $('#submission_tbl').DataTable();
 



 $('#filter_data').on('change', function () {
    if(this.value == 'Late' || this.value == 'Due' )
    {
        table.columns(4).search( this.value ).draw();
      }
    // }else if(this.value == 'Not Verified' || this.value == 'Unverified')
    // {

    //    table.columns(3).search( this.value ).draw();
    // }

    });

</script> -->

 <!-- <script type="text/javascript">
    $(document).ready(function(){ $('#submission_tbl').DataTable({
     "scrollX": true,


   });


</script> -->

