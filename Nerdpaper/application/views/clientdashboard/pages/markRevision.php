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
                        <div class="col-md-12 col-md-offset-0">
                              
                    <div class="portlet box green ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Request Revisions </div>
                            <div class="tools">
                                <a href="" class="collapse"> </a>
                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                <a href="" class="reload"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">

                            <form role="form" method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>index.php/Client/requestRevisionOrder"  enctype="multipart/form-data">
                                <div class="form-body">
                                  <p style="font-weight: 200;font-size: 13px;color: black!important;">
                                    If you need changes, edits, or additions to your downloaded project, please mark revisions here immediately. Your project writer may have a backlog of other work, but if you remain within your deadline period, those tasks will be set aside to provide you with reasonable revisions on a "first come' basis. Changes to original guidelines, however, are not considered revisions. You must provide specific and detailed notes, comments, and instructions when requesting any changes. Extensive changes beyond your original guidelines or project description may incur delivery delays and reasonable additional charges. Your complete satisfaction is our objective, and you are the sole judge of the writing we provide.</p>

                                     <p style="font-weight: 600;font-size: 13px;color: black!important;">Please provide accurate Order ID and include detailed notes below.</p>

                                     <?php foreach($orderId as $id);
                                      foreach($writerId as $wid);?>
                                    <div class="form-group">
                                        <label>Select Order For Revision</label>
                                        <input type="text" name="" value="NDP-<?php echo $id ?>" readonly>
                                        <input type="hidden" name="orderId" value="<?php echo $id ?>">
                                        <input type="hidden" name="writerId" value="<?php echo $wid ?>">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Select Writer For Revision</label>
                                        <select class="form-control" name="writerId">
                                            <?php
                                           // foreach($assign_order as $wrt){?>
                                            <option value="<?php //echo $wrt->user_id?>"><?php //echo $wrt->user_name?></option>
                                       <?php //}?></select>
                                    </div> -->
                                    <div class="form-group">
                                        <label>Revision Note</label>
                                        <textarea class="form-control" rows="3" name="revNote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile1">Revision File</label>
                                        <input type="file" id="exampleInputFile1" name="revFile[]" multiple="">
                                        <p class="help-block"> Please Upload File. </p>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <!-- <button type="button" class="btn default">Cancel</button> -->
                                    <button type="submit" class="btn green">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- portlet end -->
                </div>
            </div>
            <!-- Row end -->


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

            //alert(data['note_id']);

          var result  = jQuery.parseJSON(data);
         // alert(result.note_id);
 $.each(result,function(index,value){

    //alert(value.attr("note_id"));

    // $.each(value,function(index,value){

    

    //  });

    //alert(value['note_id']);



    $("#noteid").html("<tr><td>"+ value['note_id']+"</td> <td>"+value['note_description']+" </td> <td> "+value['created_by']+" </td> <td>"+value['created_at']+"</td></tr>");
     });
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
            $("#neworder_tbl").DataTable();
        </script>

        <script type="text/javascript">
            
        </script>

<script type="text/javascript">
    // function showcalender($count)
    // {
    //     debugger;
    //     var value = $count;

    //     jQuery('#datetimepicker'+value).datetimepicker();

    // }
</script>