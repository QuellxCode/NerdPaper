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
          <span class="caption-subject font-red sbold uppercase">Revised Work</span>
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
                                        <th width="2%">Customer Info</th>
                                        <th width="3%"> Order Detail </th>

                                       
                                        <th width="2%"> Document Note </th>

                                        <th width="2%">Attachments</th>
                                        <!-- <th width="2%">TimeStamp</th> -->
                                        <th width="2%">Writer</th>
                                        <th width="2%">Submit Revision</th>
                                        <th width="2%">Action</th>

                                      </tr>
                                    </thead>
                                    <tbody>


                                     <?php 
                                     $i = 1;
                                     $count = 0;
                                     foreach ($revised_work as $key => $revision):
                                      ?>
                                      <?php $count++ ?>

                                      <tr>

                                        <td> 

                                         <?php echo $count ?> </td>
                                         <td> <?php echo $revision->m_order_id; ?> </td>
                                         <td> 
                                          <?php 
                                          echo $revision->client_name.'<br>';
                                          echo $revision->phone.'<br>';
                                          echo $revision->client_email.'<br>';


                                          ?>
                                        </td>
                                        <td>  

                                          <a href="<?php echo base_url(); ?>index.php/admin/neworder/order_detail/<?php echo $revision->order_id ?>">Detail</a>

                                        </td>



                                        
                                       <td>

                                         <?php echo $revision->revised_work_note ?>
                                       </td>

                                       <td>

                                         <?php $this->load->helper('revisedwork'); 
                                          $table_free_booked = myfunc($revision->revised_work_id);

                                          // echo '<pre>';
                                          // print_r($table_free_booked);
                                          // die();

                                          ?>


                                          <?php foreach ($table_free_booked as $key => $value): ?>


                                             <a href="<?php echo base_url(); ?>index.php/admin/file/pdf/<?php echo $value->revised_work_file_name ?>"> <br>
                                              <?php echo $value->revised_work_file_path ?>
                                             </a>
                                          <?php endforeach ?>

                                          <hr>

                                          <?php $this->load->helper('revisedwork'); 
                                          $table_free_booked = report_work($revision->revised_work_id);

                                          // echo '<pre>';
                                          // print_r($table_free_booked);
                                          // die();

                                          ?>


                                          <?php foreach ($table_free_booked as $key => $value): ?>


                                             <a href="<?php echo base_url(); ?>index.php/admin/file/pdf/<?php echo $value->revised_work_report_file_name ?>"> <br>
                                              <?php echo $value->revised_work_report_file_path ?>
                                             </a>
                                          <?php endforeach ?>



                                       </td>

                                       <!-- <td>
                                         Timestamp
                                       </td> -->
                                       <td>
                                        <?php 
                                         echo $revision->created_at.'<br>';
                                         echo $revision->created_by;


                                         ?>
                                         <!-- <?php 
                                         echo $revision->updated_at.'<br>';
                                         echo $revision->updated_by;


                                         ?> -->
                                       </td>

                                       <td>
                                        <?php if ($revision->status == 0): ?>
                                          <a href="<?php echo base_url(); ?>index.php/admin/revision/submit_revised_work/<?php echo $revision->revised_work_id ?>">
                                           <span class="btn btn-success">Submit Revision</span>
                                         </a>

                                         <?php else: ?>
                                          <span class="label label-info">Completed</span>
                                        <?php endif ?>

                                      </td>
                                      <td>
                                       
                                       <a  title="Edit Revised Work" class="" id="<?php echo $revision->revised_work_id ?>" name="" data-toggle="modal" href="#edit_revised_work" >
                                         <i class="fa fa-pencil"></i>
                                       </a>
                                       <a onclick="deleteneworder(<?php echo $revision->revised_work_id ?>);" >
                                         <span>
                                           <i class="fa fa-trash"></i>
                                         </span>
                                       </a>
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

                                                      <div class="modal fade" id="edit_revised_work" role="dialog">
                                                        <div class="modal-dialog">

                                                          <!-- Modal content-->
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Edit Revised Work</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                              <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/revision/update_revised_work_file_notes" enctype="multipart/form-data">

                                                                <div class="form-group" id="mytextarea"> 
                                                                  <label for="writer_submission_note">Writer Note</label>    
                                                                  <textarea class="form-control" name="writer_revised_work_note" id="writer_revised_work_note" value="" style="height: 8em;"></textarea>
                                                                  <input type="hidden" name="revisedwork_id_edit_revised_work" id="revisedwork_id_edit_revised_work" />
                                                                
                                                                  <p id="myfiles">
                                                                    <a id="downloadfiles" ></a> <br>

                                                                     

                                                                   </p>
                                                                  <hr>
                                                                  <p id="report_myfiles">
                                                                    <a id="report_downloadfiles" ></a> <br>

                                                                     

                                                                   </p>

                                                                   <div class="form-group">
                                                                    <label for='add_revision_file'>Solution Files</label>
                                                                    <input type="file" name="markedFiles[]" id="add_revision_file" multiple="multiple">
                                                                  </div>
                                                                  <!-- <input type="text" name="note_writer" id="note_writer" /> -->
                                                                </div>

                                                                   <div class="form-group">
                                                                    <label for='add_revision_file'>Report Files</label>
                                                                    <input type="file" name="reportmarkedFiles[]" id="add_revision_file" multiple="multiple">
                                                                  </div>
                                                                  <!-- <input type="text" name="note_writer" id="note_writer" /> -->
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
                                                <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- EndModal -->




                                        <!-- BEGIN CORE PLUGINS -->
                                        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
                                        <script type="text/javascript" src="<?php echo base_url(); ?>assets_material/date/build/jquery.datetimepicker.full.min"></script>
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
          console.log(data);

            //alert(data['note_id']);

            var result  = jQuery.parseJSON(data);
            console.log("working");

          //console.log(result);

          $("#noteid").empty();
         // alert(result.note_id);
         $.each(result,function(index,value){

    // console.log(value);
    //console.log(index+' '+value['status']);

  //  console.log('after');

  if(value['status'] == 0)
  {
    $("#newordersnote").html("<h3><b> New Orders </b> </h3>");
       // $("modalbody").empty();
       $("#neworderbody").append('<p>'+value['note_description']+'<br>'+'<b>By</b>'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ '</p>');
     } else if(value['status'] == 1)
     {
      $("#inprocessorder").html("<h3> <b> Orders in progress </b> </h3>");
      $("#inprocess_orde_body").append('<p>'+value['note_description']+'<br>'+'<b>By</b>'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ '</p>');
    } else if(value['status'] == 2)
    {
     $("#submissions_order").html("<h3><b> Submissions </b> </h3>");

     $("#submissions_order_note").append('<p>'+value['note_description']+'<br>'+'<b>By</b>'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ '</p>');

   } else if(value['status'] == 3)
   {
    $("#revision_in_progress_head").html("<h3><b> Revision in Progress </b> </h3>");

    $("#revision_in_progress_note").append('<p>'+value['note_description']+'<br>'+'<b>By</b>'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ '</p>');

  } else if(value['status'] == 4)
  {
    $("#revised_workhead").html("<h3><b> Revised Work </b> </h3>");

    $("#revised_worknote").append('<p>'+value['note_description']+'<br>'+'<b>By</b>'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ '</p>');


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

   <script>
    $('#edit_revised_work').on('show.bs.modal', function(e) {

      var $modal = $(this),
      revised_work_id = e.relatedTarget.id;
      //alert(submissionid);
      $("#revisedwork_id_edit_revised_work").val(revised_work_id);

      $.ajax({

        method : 'post',
        url : '<?php echo base_url(); ?>index.php/admin/revision/edit_writer_revisedwork_note',
        data : {revised_work_id : revised_work_id},
        dataType : 'text',
        success : function (data)
        {
          var one_arg = false;
          var sec_arg = true;
         if(data)
         {
          $("#writer_revised_work_note").html(data);

          $.ajax({

            method : 'post',
            url : '<?php echo base_url(); ?>index.php/admin/revision/edit_writer_revised_work_files',
            data : {revised_work_id : revised_work_id},
            dataType : 'text',
            success : function (res)
            {


               var result  = jQuery.parseJSON(res);
               var $i = 1 ;
               $("#myfiles").empty();
              $.each(result, function(key,value) {
                //console.log(value['revision_file_path']);
                

                $("#myfiles").append('<br><a id="removefile'+$i+'" href="<?php echo base_url(); ?>index.php/admin/file/pdf/'+value['revised_work_file_path']+'"> '+value['revised_work_file_name']+'   </a> <i class="fa fa-remove filelist'+$i+'" onclick="removeFile('+$i+', '+value['revised_work_file_id']+','+one_arg+');" style="font-size:24px;color:red"></i>');
                $("#downloadfiles").append().attr('href','<?php echo base_url(); ?>index.php/admin/file/pdf/'+value['revised_work_file_path']);
                $i++;

              });

        //alert(data);
      }


    });



    // report files revised work

    $.ajax({

method : 'post',
url : '<?php echo base_url(); ?>index.php/admin/revision/edit_writer_revised_work_report_files',
data : {revised_work_id : revised_work_id},
dataType : 'text',
success : function (res)
{


   var result  = jQuery.parseJSON(res);
   var $i = 1 ;
   $("#report_myfiles").empty();
  $.each(result, function(key,value) {
    //console.log(value['revision_file_path']);
    

    $("#report_myfiles").append('<br><a id="report_removefile'+$i+'" href="<?php echo base_url(); ?>index.php/admin/file/pdf/'+value['revised_work_report_file_path']+'"> '+value['revised_work_report_file_name']+'   </a> <i class="fa fa-remove report_filelist'+$i+'" onclick="removeFile('+$i+', '+value['revised_work_report_file_id']+','+sec_arg+');" style="font-size:24px;color:red"></i>');
    $("#report_downloadfiles").append().attr('href','<?php echo base_url(); ?>index.php/admin/file/pdf/'+value['revised_work_report_file_path']);
    $i++;

  });

//alert(data);
}


});

        }
        //alert(data);
      }


    });



    })
  </script>

  <script type="text/javascript">
    function removeFile($i , $fileid,checkcbool)
    {
      alert(checkcbool)
      if(checkcbool == false)
      {
        var count = $i;
      var revised_work_file_id = $fileid;
      $('#removefile'+count).remove();
      $('.filelist'+count).remove();

      $.ajax({
        method : 'post',
        url : '<?php echo base_url() ?>index.php/admin/revision/remove_revised_work_file',
        data : {revised_work_file_id : revised_work_file_id},
        dataType : 'text',
        success : function(data)
        {
          //alert(data);
        }


      });
     // alert(count);
      }else{

var count = $i;
      var revised_work_report_file_id = $fileid;
      $('#report_removefile'+count).remove();
      $('.report_filelist'+count).remove();

      $.ajax({
        method : 'post',
        url : '<?php echo base_url() ?>index.php/admin/revision/remove_revised_work_report_file',
        data : {revised_work_file_id : revised_work_report_file_id},
        dataType : 'text',
        success : function(data)
        {
          //alert(data);
        }


      });

      }
      
    }
  </script>

  <script>
  function deleteneworder($revised_work_id)
   {
    $("#deleteconfirmationbox").modal('show');

$("#modal-btn-si2").attr('onclick','deletenewordernow('+$revised_work_id+')');
   }

   function deletenewordernow($revised_work_id)
   {
    $("#deleteconfirmationbox").modal('hide');
    //alert('working');
    $.ajax({

method : 'POST',
url : '<?php echo base_url() ?>index.php/admin/revision/delete_revised_work',
data : {revised_work_id : $revised_work_id},
dataType : 'text',
success : function(data)
{
  //alert(data);
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