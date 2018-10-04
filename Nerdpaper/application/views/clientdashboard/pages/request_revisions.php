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
        <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Revisions</div>
                            <div class="tools">
                                <a href="" class="collapse"> </a>
                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                <a href="" class="reload"> </a>
                            </div>
                        </div>
                    <div class="portlet-body">
                       
                         <table class="table table-striped table-hover table-bordered" id="neworder_tbl">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%"> Sr# </th>
                                                <th style="width: 5%;text-align: center;"> Order ID </th>
                                                 <th style="width: 5%;text-align: center;"> Revision # </th>
                                                <th style="width: 10%;text-align: center;"> Writer Note </th>
                                                <th colspan="2" style="width: 20%;text-align: center;"> Revision Work  </th>
                                                <th style="width: 10%;text-align: center;"> Action </th>

                                                <!-- fa fa-bicycle -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php $count=1;
                                          foreach($requestRevisions as $r) {
                                            if($r->payment_status == 1){
                                            ?>
                                        <tr >
                                            <td> <?php echo $count;?></td>
                                            <td style="text-align: center;"> <?php echo $r->order_id;?></td>
                                            <td style="text-align: center;"> <?php echo $r->revision_no;?></td>
                                            <td style="text-align: center;"> <?php echo $r->revised_work_note;?></td>
                                            <td style="text-align: center;" class="rev_work" id="<?php echo $r->revision_id?>">    

                                            <?php 
                                            $this->load->helper('revised_files_helper'); 
                                             $work_files = revised_work_files($r->revised_work_id);
                                             foreach ($work_files as $key => $value): 
                                             $workFilePath = 'http://admin.writersverge.com/documents'; 
                                           ?>                                              
                                          <a target="_blank" class="btn btn-success mt-ladda-btn ladda-button btn-circle" href="<?php echo $workFilePath ?>/<?php echo $value->revised_work_file_name ?>"><span class="ladda-label"><i class="icon-arrow-down">Work File</i></a>&nbsp;
                                           <?php endforeach ?>   
                                           </td><td style="text-align: center;" class="rev_work" id="<?php echo $r->revision_id?>">
                                             <?php 
                                            $this->load->helper('revised_files_helper'); 
                                             $rev_rep_files = revised_report_files($r->revised_work_id);
                                             foreach ($rev_rep_files as $key => $valuerep): 
                                             $repfilepath = 'http://admin.writersverge.com/documents'; 
                                           ?> 
                                           <a target="_blank" class="btn mt-ladda-btn ladda-button btn-circle btn-primary " href="<?php echo $repfilepath ?>/<?php echo $valuerep->revised_work_report_file_name ?>"><span class="ladda-label"><i class="icon-arrow-down">Plagarism File</i></a>
                                            <?php endforeach ?>   
                                        </td>
                                        <td style="text-align: center;">
                              <a href="<?php echo base_url() ?>index.php/Client/markRevision/<?php echo $r->order_detail_id.'/'.$r->writer_id ?>" data-toggle="tooltip" title="mark revision" class="btn btn-circle-micro yellow "><span class="glyphicon glyphicon-edit"></span> </a>
                                        </td>
                                            <?php }?>
                                        
                                        </tr>
                                        <?php $count++;}?> 
                                         
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
                                                  <textarea class="form-control" name="ordernote">

                                                  </textarea>
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


                          <!-- BEGIN CORE PLUGINS -->
                          <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
                          <script type="text/javascript" src="<?php echo base_url(); ?>assets_material/datetimepicker/build/datetimepicker.full.min.js"></script>
                          <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
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
            $("#neworder_tbl").DataTable();
        </script>

     