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
                    <span class="caption-subject font-red sbold uppercase">Editable Table</span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
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
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th width="1%"> Order Date </th>
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
                                                               
                                                               <?php 
                                                               $i = 1;
                                                               $count = 0;
                                                               foreach ($neworders as $key => $order):
                                                                ?>

                                                                <tr>

                                                                    <td> 

                                                                     <?php echo $order->created_at ?> </td>
                                                                    <td> NDP-1550 </td>
                                                                    <td> <?php 
                                                                    echo "Name".'<br>';
                                                                    echo $order->client_email.'<br>';
                                                                    echo $order->phone.'<br>';



                                                                    ?> </td>
                                                                    <td>  <?php 
                                                                    echo $order->acedamic_level.' / ';
                                                                    echo $order->document_type.'<br>';
                                                                    ?> </td>
                                                                    <td> <?php echo $order->no_of_pages ?> </td>
                                                                    <td class="center"> <?php 
                                                                    echo $order->title.' / ';
                                                                    echo $order->subject.'<br>';
                                                                    ?> </td>

                                                                    <td>
                                                                      <?php 
                                                                      echo $order->end_date.'<br>';
                                                                      echo $order->end_time.'<br>';
                                                                      ?>
                                                                      <span id="timers"></span>
                                                                  </td>

                                                                  <td>
                                                                   <input type="date" class="form_datetime" name="writer_due_date" id="writer_due_date<?php echo $i; ?>" style="width: 80%">
                                                                   <input type="time" name="writer_due_time" id="writer_due_time<?php echo $i ?>" style="width: 80%;margin-top: 6px">
                                                               </td>
                                                               <td>
                                                                   <select  name="region_list" id="region_list<?php echo $i ?>" style="width: 108px;">
                                                                    <option value="-1">Select Region</option>
                                                                    <?php foreach ($regions as $key => $region): ?>
                                                                        <option value="<?php echo $region->region_id ?>"><?php echo $region->region_name ?></option>
                                                                    <?php endforeach ?>

                                                                </select>

                                                                <select style="margin-top: 9px" name="writer_list" id="writer_list<?php echo $i  ?>">
                                                                    <option value="-1">Select Writer</option>
                                                                    <?php foreach ($writers as $key => $writer): ?>
                                                                        <option value="<?php echo $writer->user_id ?>"><?php echo $writer->user_name ?></option>
                                                                    <?php endforeach ?>

                                                                </select>
                                                            </td>
                                                            <td>

                                                               <select onchange="payment_status(<?php echo $order->order_detail_id ?>,<?php echo $i ?>);" id="mystatus<?php echo $i ?>">
                                                                <option>Select Payment</option>
                                                                <option value="0">Unpaid</option>
                                                                <option value="1">Halfpaid</option>
                                                                <option value="2">Fullpaid</option>

                                                            </select>

                                                            <select onchange="order_status(<?php echo $order->order_detail_id ?>,<?php echo $i ?>);" id="orderstatus<?php echo $i ?>" style="width:123px;margin-top: 9px">
                                                                <option value="-1">Select Order</option>
                                                                <option value="0">Neworder</option>
                                                                <option value="1">In-Process</option>
                                                                <option value="2">Completed</option>
                                                                <option value="3">Revision in Progress</option>
                                                                <option value="4">Disputed</option>
                                                                <option value="5">Credited</option>

                                                            </select>
                                                            <a href="#notes<?php echo $i  ?>" data-toggle="modal" onclick="viewnotes(<?php echo $order->order_detail_id ?>, <?php echo $i ?>)">View Notes</a>
                                                        </td>
 <?php if ($this->session->userdata('user_name')): ?>
                                                                           <?php $username = $this->session->userdata('user_name') ?>
                                                                           <?php $user_id = $this->session->userdata('user_id') ?>
                                                                          <?php endif ?>

                                                                        <td>
                                                                           <?php if ($order->verified_by != null): ?>
                                                                            <a href="#" data-toggle="tooltip" title="<?php echo 'Verified by'.' '.$order->verified_by.' '.'on'.' '.$order->verified_at ?>"><span><i class="fa fa-check"></i></span></a>
                                                                        <?php else: ?>
                                                                            <a href="<?php echo base_url();?>index.php/admin/neworder/neworder_verification/<?php echo $order->order_detail_id ?>/<?php echo $user_id ?>">Verify</a>
                                                                        <?php endif; ?>
                                                                        <a href="<?php echo base_url(); ?>index.php/admin/neworder/edit_neworder/<?php echo $order->order_detail_id ?>" class=""><i class="fa fa-edit"></i></a>
                                                                        <a class="" href="<?php echo base_url() ?>index.php/admin/neworder/order_detail/<?php echo $order->order_detail_id ?>">
                                                                            <i class="fa fa-book"></i>
                                                                        </a>
                                                                       <!--  <a class="delete" href="javascript:;">
                                                                            <i class="icon-trash"></i>
                                                                        </a> -->

                                                                        <a class="" href="<?php echo base_url() ?>index.php/admin/neworder/delete_neworder/<?php echo $order->order_detail_id ?>">
                                                                            <i class="icon-trash"></i>
                                                                        </a>

                                                                        <a class="" href="" onclick="assign(<?php echo $order->order_detail_id ?>,<?php echo $i ?>);">
                                                                            <i class="icon-check"></i>
                                                                        </a>
                                                                       
                                                                          
                                                                         

                                                                              <a name="<?php if(isset($username))
                                                                                echo $username;
                                                                               ?>" id="<?php echo $order->order_detail_id ?>" name="" data-toggle="modal" href="#addNote" >
                                                                                  <i class="icon-plus"></i>
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
                  <!--         <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->
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


