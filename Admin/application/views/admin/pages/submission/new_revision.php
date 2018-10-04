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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_material/countdown/css/jquery.countdown.css"> 

<!-- END THEME LAYOUT STYLES -->
<!-- END PAGE LEVEL PLUGINS -->

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light portlet-fit ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">New Revisions</span>
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
                        <table class="table table-striped table-hover table-bordered" id="neworder_tbl">
                            <thead>
                                <tr>
                                    <th width="1%">Sr#</th>
                                    <th width="2%"> Order Id </th>
                                    <th width="2%"> Submission Date </th>
                                    <th width="3%"> Revision Note </th>
                                    
                                    <th width="6%"> Files </th>
                                    <th width="6%"> Writer </th>
                                    <th width="2%"> Status </th>
                                 
                                    <th width="2%">Action</th>
                        
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               
                                                               <?php 
                                                               $i = 1;
                                                               $count = 0;
                                                               foreach ($revisions as $key => $revision):
                                                                ?>
                                                                <?php $count++ ?>

                                                                <tr>

                                                                    <td> 

                                                                     <?php echo $count ?> </td>
                                                                    <td> <?php echo $revision->my_order_Id ?> </td>
                                                                    <td> 
                                                                      <?php echo $revision->submission_date ?>
                                                                     </td>
                                                                    <td>  

                                                                      <?php echo $revision->revision_note ?>

                                                                </td>
                                                                   
                                                                    

                                                                    <td>
                                                                     
                                                                    <?php $this->load->helper('newrevisions'); 
                                          $table_free_booked = myfunc($revision->revision_id);

                                          // echo '<pre>';
                                          // print_r($table_free_booked);
                                          // die();

                                          ?>


                                          <?php foreach ($table_free_booked as $key => $value): ?>


                                             <a href="<?php echo base_url(); ?>index.php/admin/file/pdf/<?php echo $value->revision_file_path ?>"> <br>
                                              <?php echo $value->revision_file_name ?>
                                             </a>
                                          <?php endforeach ?>

                                                                      
                                                                  </td>
                                                                  <td>
                                                                    <?php $this->load->helper('writername'); 
                                          $writername = getwritername($revision->writer_id);
                                                                    ?>
                                                                   <?php if ($writername): ?>
                                                                     <?php echo $writername; ?>
                                                                   <?php endif ?>
                                                                  </td>
                                                                  <td>
                                                                    <?php
                                          if($revision->status == 0){
                                             echo '<span class="label label-warning">New Revision</span>';
                                          }elseif($revision->status == 1){
                                            echo '<span class="label label-info">Revisions in Progress</span>';
                                          }elseif($submission->payment_status == 2)
                                          {
                                            echo '<span class="label label-info">Unpaid</span>';
                                          }
                                          ?>
                                                                  </td>

                                                                  <td>
                                                                   
                                                                   <select onchange="revision_status(<?php echo $revision->revision_id ?>,<?php echo $i ?>);" id="revsionaction<?php echo $i ?>" >
                                                                <option>Select Action</option>
                                                                <!-- <option value="0">Unpaid</option> -->
                                                                <option value="1">Forward to writer</option>
                                                                <option value="2">Mark as Invalid</option>

                                                            </select>
                                                      
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

                                    <div class="modal fade" id="admin_revision_note" role="dialog">
                                        <div class="modal-dialog">

                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Add Note</h4>
                                          </div>
                                          <div class="modal-body">
                                              <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/revision/invalid_revision_admin">

                                                <div class="form-group" id="mytextarea"> 
                                                  <label>Add Note</label>    
                                                  <textarea class="form-control" name="revisionnote"></textarea>
                                                  <input type="text" name="revision_id" id="revisionid" value="<?php echo $revision->revision_id  ?>" />
                                                  
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


                          <!-- BEGIN CORE PLUGINS -->
                         <!--  <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->
                          <script type="text/javascript" src="<?php echo base_url(); ?>assets_material/date/build/jquery.datetimepicker.full.min"></script>
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
    var BASE_URL = "<?php echo base_url();?>";
</script>

<script type="text/javascript">
    function revision_status($id,$value)
    {
      //alert($id+' '+$value);
        var row = $value
        var myvalue =  $('#revsionaction'+row).val();
        
        if(myvalue == 1)
        {
          $.ajax({
           type: "POST",
           url: BASE_URL+'index.php/admin/revision/change_revision_status', 
           data: {revisionid: $id, status : myvalue},
           dataType: "text",  
           cache:false,
           success: 
           function(data){
            alert(data);
           
                if(data == 'refresh')
                {
                   window.location.reload();
                }
            }
        });
        }else if(myvalue == 2)
        {
          $("#admin_revision_note").modal('show');
        }

          
      }




  </script>



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
    jQuery('#datetimepicker').datetimepicker({

 //format:'dd.m.YY'
 
});
</script>