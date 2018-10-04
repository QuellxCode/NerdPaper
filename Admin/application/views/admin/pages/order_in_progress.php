
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

<style type="text/css">

.currentstatus{
    /*background-color:yellow;*/
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

.btn-info{
  background-color: #ffb752;
}

.btn{
  border: none;
}

h4{
      text-align:center;
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
                    <span class="caption-subject font-red sbold uppercase">Order in Progress</span>
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
                    <!-- <select name="filter_data" id="filter_data" class="form-control pull-right" style="width: 20%; margin-top: 4px;">
                        <option style="font-weight: bold;">Order Status</option>
                        <option value="Pending Order">Pending</option>
                        <option value="In-Process">In Process</option>                                                
                        <option value="Half Paid">Half Paid</option>
                        <option value="Full Paid">Full Paid</option>
                        <option value="date">Date</option>
                    </select> -->
                    <div class="portlet-body">
                        <!-- <div class="table-toolbar">
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
                        <table class="table table-striped table-hover table-bordered" id="neworder_tbl" style="zoom:67%;">
                            <thead>
                                <tr>
                                    <th width="1%"> S#</th>
                                    <!-- <th width="1%"> Order Date </th> -->
                                    <th width="2%" class="mytbl_status">Status</th>
                                    <th width="2%"> Order Id </th>
                                    <th width="2%"> Customer Name </th>
                                    <th width="3%"> Page# </th>
                                    <th width="2%"> Subject / Title </th>
                                    <th width="3%"> Actual Due Date </th>
                                    <!--<th width="1%">Client Due Date </th>-->
                                    <th width="1%">$</th>
                                    <th width="2%">Ver by</th>
                                    
                                    <th width="2%"> Writer Name </th>
                                    
                                    <th width="2%">Assigned by </th>
                                    <th width="2%"> Remaining Time </th>
                                    <th width="2%">Status</th>
                                    <th width="2%">Notes</th>

                                </tr>
                            </thead>
                            <tbody>

                             <?php 
                             $i = 1;
                             $count = 0;
                             foreach ($order_inprocess as $key => $order):
                                ?>

                                <?php $count++; ?>

                                <tr id="<?php echo $order->order_detail_id; ?>">
                                   <td>
                                      <?php echo $i ?>
                                  </td>

                                                                    <!-- <td> 

                                                                       <?php echo $order->created_at ?> </td> -->

                                                                       <td class="mytbl_status"><?php
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

                                                                    <td style="font-size: 17px;"> <?php echo $order->no_of_pages ?> </td>

                                                                    <td class="center"> <?php 
                                                                    echo $order->title.' / ';
                                                                    echo $order->subject.'<br>';
                                                                    ?> 
                                                                </td> 
                                                                <td style="font-size: 17px;">
                                                                   <?php 
                                                                   echo $order->end_date.'<br>';
                                                                   echo $order->end_time.'<br>';
                                                                   ?>
                                                               </td>

                                                               

                                                              <td style="font-size: 17px;">
                                                                  

                                                                  <?php
                                          if($order->payment_status == 0){
                                           echo '<span class="label label-info">Half Paid</span>';
                                         }elseif($order->payment_status == 1 || $order->payment_status == 2){
                                          echo '<span class="label label-success">Full Paid</span>';
                                        }

                                        
                                        ?>
                                                              </td>

                                                              <td>
                                                             

                                                              <?php 
                                                              if($order->verified_by == '')
                                                              {
                                                                  echo '<span class="align-center" style="font-size:100px;margin-left:30px;"> - </span>';
                                                              }else{
                                                                  ?>
<a href="#" data-toggle="tooltip" title="<?php echo 'Verified by'.' '.$order->verified_by.' '.'on'.' '.$order->verified_at ?>"><span><i class="fa fa-check" style="font-size:30px; margin-top:40px;margin-left:30px;"></i></span></a>
                                                                  <?php
                                                              }

                                                              ?>
                                                               
                                                           </td>
                                                           <td style="font-size: 17px;">  
                                                              <?php $this->load->helper('writer'); 
                                                                   $orderid_he = getorderid($order->order_detail_id);

                                                                     

                                                                   // if(isset($writername->user_name))
                                                                   // {
                                                                   //  echo $writername->user_name;
                                                                   // }
                                                                    

                                         
                                                                   ?>
                                                                   <?php $this->load->helper('writer');

                                                                    $writername = getwritername($orderid_he->writer_id);

                                                                      if(isset($writername->user_name))
                                                                      {
                                                                        echo $writername->user_name;
                                                                      }
                                                                   ?>
                                                          </td>

                                                          <td style="font-size: 17px;">
                                                            
                                                              <?php $this->load->helper('assignby'); 
                                                                   $createdby = getassignedby($order->order_detail_id);
                                                                //    echo '<Pre>';
                                                                //    print_r($createdby);
                                                                //    die();

                                                                   if(isset($createdby))
                                                                   {
                                                                       
                                                                    echo '<span style="font-weight:bold;">'.$createdby->created_by.'</span>';
                                                                    echo '<hr>';
                                                                    $newDate = date("d-m-Y H:i:s", strtotime($createdby->created_at));
                                                                   // echo $newDate;
                                                                    echo '<span style="font-weight:bold;">'.$newDate.'</span>';
                                                                    
                                                                   }
                                                                   

                                         
                                                                   ?>
                                                          </td>
                                                             
                                                         


                                                          <td style="font-size: 17px;">
                                                            <span id="inprocess_time<?php echo $order->order_detail_id;  ?>"></span>
                                                            <hr>
                                                              <span id="inprocess_timer<?php echo $order->order_detail_id;  ?>"></span>
                                                          </td>



                                                          <td>
                                                             <select class="currentstatus" onchange="order_status(<?php echo $order->order_detail_id ?>,<?php echo $i ?>);" id="orderstatus<?php echo $i ?>" style="width:123px;margin-top: 9px">
                                                                <option value="-1">Select Order</option>
                                                                <option value="6">Unpaid Order</option>
                                                                <option value="0">Neworder</option>
                                                                <option value="1" <?php if ($order->order_status == 1): ?>
                                                                  <?php echo 'selected'; ?>
                                                                  
                                                                <?php endif ?>>In-Process</option>
                                                                <option value="2">Completed</option>
                                                                <option value="3">Revision in Progress</option>
                                                                <option value="4">Disputed</option>
                                                                <option value="5">Credited</option>
                                                                

                                                            </select>
                                                            <hr>
                                                            <span class="label label-warning">In-Process</span>
                                                        </td>

                                                        <td>
                                                         <a name="" title="Add Note" id="<?php echo $order->order_detail_id ?>" name="" data-toggle="modal" href="#addNote" >
                                                         <i class="icon-plus" style="margin-top: 10px; margin-left: 0px; font-size: 30px; color:black;"></i>
                                                      </a> 

                                                     <!--  <a href="" data-toggle="modal" onclick="add_comments(<?php echo $lead->lead_id ?>, <?php echo $i ?>); return false;"></a> -->
                                                      <br>


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
                              <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/neworder/add_orderin_progress_note">

                                <div class="form-group" id="mytextarea"> 
                                  <label>Add Note</label>    
                                  <textarea class="form-control" name="ordernote" id="ordernote"></textarea>
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
                             <!--  <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->
                              <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets_material/date/build/jquery.datetimepicker.full.min"></script> -->
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
                              <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>    -->

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
    function payment_status($id,$value)
    {
        var row = $value
        var myvalue =  $('#mystatus'+row).val();
        alert(myvalue);
        //alert($id);
          //  alert('working'.$id);
          $.ajax({
             type: "POST",
             url: BASE_URL+'neworder/change_payment_status', 
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

            console.log("working");

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
    $("#inprocess_orde_body").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');
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
        paging :false
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
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
  $('#neworder_tbl tr').each(function() {
   // console.log(this.id);
    var submissionid = this.id;
   // alert(this.id)
    if(this.id != ""){
    $.ajax({

        method : 'POST',
        url : '<?php echo base_url() ?>index.php/admin/neworder/get_date_time_inprocess',
        data : {order_detail_id : this.id},
        dataType : 'text',
        success : function(data)
        {
            var result  = jQuery.parseJSON(data);

            console.log(result);

                    // alert($countis);
        var countDownDate = new Date(result['order_datetime']).getTime();

       // alert(countDownDate);

        var x = setInterval(function() {

  // Get todays date and time
//   var now = new Date().getTime();

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
   var myhours =  days * 24 + hours;
  
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


var hrs   = Math.floor(distance / 3600) % 24;
  // Display the result in the element with id="demo"
  //console.log(result['order_id']);
  // var mytimer = document.getElementById("mytimer").innerHTML =  days + "d " + hours + "h "
  // + minutes + "m " + seconds + "s ";

 // var mytimer = document.getElementById("mytimer");

 // var a = mytimer+result['order_id'];

 // a.innerHTML =  result['order_datetime']+'<br>'+days + "d " + hours + "h ";
  // + minutes + "m " + seconds + "s ";
  
//console.log(days);

  // $("#inprocess_timer"+result['order_id']).html(result['order_datetime']+ ' <br> '+ '<div style="font-weight:bold;">' + myhours + "h :" + minutes + "m :" + seconds + "s "+'</div>');

  $("#inprocess_time"+result['order_id']).html("<span style='color:black;font-weight:bold'>"+result['order_datetime']+"</span>");
  $("#inprocess_timer"+result['order_id']).html("<span class='btn btn-info' style='color:white; font-weight:bold;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span>");

  // If the count down is finished, write some text 
  if (distance < 0) {
    //clearInterval(x);
    //document.getElementById("newordertime").innerHTML = "EXPIRED";
    $("#inprocess_timer"+result['order_id']).html("<span class='btn btn-danger' style='color:white; font-weight:bold;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span>");
}
}, 1000);





          
        }


    });
}
  })
});
  </script>