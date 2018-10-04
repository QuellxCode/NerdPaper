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
<style>
.fa {
    font-size: 50px;
    cursor: pointer;
    user-select: none;
}

.fa:hover {
  color: darkblue;
}

.btn-info{
  background-color: #ffb752;

}

.btn{
  border:none;
}

</style>

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light portlet-fit ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">Revision in Progress</span>
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
                                    <th width="3%"> Revision Detail </th>
                                    
                                    <th width="6%"> Attachments </th>
                                    <th width="2%"> # of pages </th>
                                 
                                    <th width="2%">Marked by Client on</th>
                                    <th width="2%">Writer</th>
                                    <th width="2%">Forwarded to writer by</th>
                                    <th width="2%">Revision In-Progress Time</th>
                                    <!-- <th width="2%">Quality</th> -->
                                    <th width="2%">Notes</th>
                        
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               
                                                               <?php 
                                                        //    echo '<pre>';
                                                        //    print_r($revisions);
                                                        //    die();

                                                               $i = 1;
                                                               $count = 0;
                                                               foreach ($revisions as $key => $revision):
                                                                ?>
                                                                <?php $count++ ?>

                                                                <tr id="<?php echo $revision->revision_id ?>">

                                                                    <td> 

                                                                     <?php echo $i ?> </td>
                                                                    <td><?php echo $revision->unique_order_id ?> </td>
                                                                    <td> 
                                                                      <?php echo $revision->client_name.'<br>' ?>
                                                                      <?php echo $revision->client_email.'<br>' ?>
                                                                      <?php echo $revision->phone ?>
                                                                     </td>
                                                                    <td>  

                                                                      <?php echo $revision->revision_note ?>

                                                                </td>
                                                                   
                                                                    

                                                                    <td>
                                                                     
                                                                     <?php $this->load->helper('revisionfile'); 
                                          $table_free_booked = myfunc($revision->revision_id);

                                          // echo '<pre>';
                                          // print_r($table_free_booked);
                                          // die();

                                          ?>


                                          <?php foreach ($table_free_booked as $key => $value): ?>


                                             <a href="<?php echo base_url(); ?>index.php/admin/file/pdf/<?php echo $value->revision_file_name ?>"> <br>
                                              <?php echo $value->revision_file_path ?>
                                             </a>
                                          <?php endforeach ?>

                                                                      
                                                                  </td>
                                                                  <td>
                                                                    <?php echo $revision->pages ?>
                                                                  </td>

                                                                  <td>
                                                                   <?php $newDate_created_at = date("d-m-Y H:i:s", strtotime($revision->created_at)); ?>

                                         
                                                                  <?php echo $newDate_created_at ?>
                                                      
                                                               </td>
                                                               <td>
                                                               <?php $this->load->helper('writername'); 
                                        $table_free_booked = getwritername($revision->writer_id);

                                        echo $table_free_booked;


                                        ?>
                                                               </td>
                                                               <td>
                                                                
                                                                <?php echo $revision->modified_by ?>
                                                                <br>
                                                                <?php echo $revision->modified_at ?>
                                                               </td>
                                                               <td >
                                                                <span id="revision_forward_time<?php echo $revision->revision_id ?>"></span>
                                                                <hr>
                                                                <span id="revision_forward_timer<?php echo $revision->revision_id ?>"></span>
                                                               
                                                                
                                                               </td>
                                                               <!-- <td>
                                                                 <i onclick="myFunction(this)" class="fa fa-thumbs-up" style="margin-top: 23px; margin-left: 10px;"></i>
                                                               </td> -->
                                                               <td>
                                                                  <a name="" title="Add Note" id="<?php echo $revision->order_id ?>" name="" data-toggle="modal" href="#addNote" >
                                                                                  <i class="icon-plus" style="margin-top: 10px; margin-left: 0px; font-size: 30px; color:black;"></i>
                                                                              </a> <br>

                                                                          <?php $this->load->helper('order'); 
         // echo 'lead id is'.$lead->lead_id;
          $count = check_view_notes($revision->order_id);
          if($count > 0)
          {
            ?>
    <a href="#notes<?php echo $i  ?>" data-toggle="modal" onclick="viewnotes(<?php echo $revision->order_id ?>, <?php echo $i ?>)" style="font-weight: bolder;color:#a34ae4cc;">View Notes</a>
  <?php
          }
          //die();

          ?>    </td>
                                                               
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
                                              <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/revision/revision_inprogress_note">

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
           
                if(data == 'refresh')
                {
                   window.location.reload();
                }
            }
        });
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

          $("#noteid").empty();
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
    $("#newordersnote").html("<h5><b> New Orders </b> </h5>");
       // $("modalbody").empty();
       $("#neworderbody").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+ '</p>');
   } else if(value['status'] == 1)
   {
    $("#inprocessorder").html("<h5> <b> Orders in progress </b> </h5>");
    $("#inprocess_orde_body").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');
} else if(value['status'] == 2)
{
   $("#submissions_order").html("<h5><b> Submissions </b> </h5>");

   $("#submissions_order_note").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');

} else if(value['status'] == 3)
{
    $("#revision_in_progress_head").html("<h5><b> Revision in Progress </b> </h5>");

    $("#revision_in_progress_note").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+"</b>"+ '</p>');

} else if(value['status'] == 4)
{
    $("#revised_workhead").html("<h5><b> Revised Work </b> </h5>");

    $("#revised_worknote").append('<p>'+value['note_description']+'<br>'+'<b>By'+' '+ value['created_by']+' '+'<b>On</b>'+' ' +value['created_at']+ "</b>"+'</p>');


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
  function myFunction(x) {
  
    x.classList.toggle("fa-thumbs-down");
}
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
        url : '<?php echo base_url() ?>index.php/admin/revision/get_date_time_inprocess',
        data : {revision_id : this.id},
        dataType : 'text',
        success : function(data)
        {
          //alert(data);
          if(data != 'notfound'){

            var result  = jQuery.parseJSON(data);

            console.log(result['order_datetime']);

                    // alert($countis);
        var countDownDate = new Date(result['order_datetime']).getTime();

       // alert(countDownDate);

        var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();



  // Find the distance between now an the count down date
  var distance =  now - countDownDate;

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
//$("#inprocess_time"+result['order_id']).html("<span style='color:black;font-weight:bold'>"+result['order_datetime']+"</span>");
$("#revision_forward_time"+result['order_id']).html("<span style='color:black;font-weight:bold'>"+result['order_datetime']+"</span>");

$("#revision_forward_timer"+result['order_id']).html("<span class='btn btn-info' style='color:white; font-weight:bold; font-size:16px;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span>");


  //$("#revision_forward_timer"+result['order_id']).html(result['order_datetime']+ ' <br> '+ '<div style="font-weight:bold;">' + myhours + "h :" + minutes + "m :" + seconds + "s "+'</div>');

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    //document.getElementById("newordertime").innerHTML = "EXPIRED";
     $("#revision_forward_timer"+result['order_id']).html("EXPIRED");
}
}, 1000);





          
        }
}

    });
}
  })
});
  </script>