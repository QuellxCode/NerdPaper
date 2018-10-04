<meta charset="utf-8" />
        <title>Metronic Admin Theme #3 | Bootstrap File Input</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #3 for advanced bootstrap file input examples" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets_material/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />

<!-- END THEME LAYOUT STYLES -->
<!-- END PAGE LEVEL PLUGINS -->

<div class="row">
  <div class="col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet light portlet-fit ">
      <div class="portlet-title">
        <div class="caption">
          <i class="icon-settings font-red"></i>
          <span class="caption-subject font-red sbold uppercase">Half Submission</span>
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
          <div class="portlet-body">
            <div class="table-toolbar">
              <div class="row">
                <div class="col-md-6">
                  <div class="btn-group">
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="btn-group pull-right">
                    <!-- <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">Tools
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
                    </ul> -->
                  </div>
                </div>
              </div>
            </div>
          
            <form action="<?php echo base_url(); ?>index.php/admin/submission/send_half_submission" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">

              <input type="hidden" name="submissionid" value="<?php echo $submissionid ?>">
                                                            <div class="form-body">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Default1</label>
                                                                    <div class="col-md-3">
                                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                            <div class="input-group input-large">
                                                                                <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                                                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                                                    <span class="fileinput-filename"> </span>
                                                                                </div>
                                                                                <span class="input-group-addon btn default btn-file">
                                                                                    <span class="fileinput-new"> Select file </span>
                                                                                    <span class="fileinput-exists"> Change </span>
                                                                                    <input type="file" name="half_file"> </span>
                                                                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                              
                                                            </div>
                                                            <div class="form-actions">
                                                                <div class="row">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                        <?php if ($this->session->flashdata('category_error')) { ?>
    <span style='margin-left:34px;color:red;'> Kindly add the file </span>
<?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>


          </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
      </div>
      
    </div>

    <!-- Modal -->


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


    <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets_material/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>


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

       // jQuery('#datetimepicker').datetimepicker();

    // }
  </script>

  <script type="text/javascript">
    jQuery('#datetimepicker').datetimepicker({

 //format:'dd.m.YY'
 
});
</script>
