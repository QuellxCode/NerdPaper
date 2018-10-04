
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

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_material/countdown/css/jquery.countdown.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_material/bootstrap_multi/dist/css/bootstrap-select.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_material/datetime/css/bootstrap-datetimepicker.min.css">

<style type="text/css">
.mytbl_status{
    display: none;
}

.btn-info{
  background-color: #ffb752;

}

/*.btn-default{
  background-color: #c859e4;
}*/

/*.btn{
  border :none;
  border-radius: 2px 2px 2px 2px;
}*/
</style>

<!-- END THEME LAYOUT STYLES -->
<!-- END PAGE LEVEL PLUGINS -->
<p id="demo"></p>
<div class="row" onload="duedatetimer();">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light portlet-fit ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">Master Search</span>
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
                    <div class="row">
                        <div class="col-md-3">
                            <label style="font-weight: bold">Order Id</label>
                            <input type="textbox" class="form-control" name="" id="order_id" onkeyup="search_by_name()">
                        </div>
                        <div class="col-md-3">
                            <label style="font-weight: bold">Name</label>
                            <input type="textbox" class="form-control" name="name" id="searchby_name" onkeyup="search_by_name()" >
                        </div>
                        <div class="col-md-3">
                            <label style="font-weight: bold">Email</label>
                            <input type="textbox" class="form-control" name="email" id="searchby_email" onkeyup="search_by_name()" >
                        </div>

                        <div class="col-md-3">
                            <label style="font-weight: bold">Phone</label>
                            <input type="textbox" class="form-control" name="phone" id="searchby_phone" onkeyup="search_by_name()" >
                        </div>


                        
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label style="font-weight: bold">Order Status Filter</label>
                            <select name="order_status_filter" class="selectpicker" id="order_status_filter" onchange="search_by_name();" multiple="multiple">
                               <option value="">Select Order Status</option>
                               <option value="0">New Order</option>
                               <option value="6">Unpaid</option>
                               <option value="1">InProcess</option>
                               <option value="2">Completed</option>
                               <option value="3">Revision in Progress</option>
                               <option value="7">Refunded</option>
                               <option value="5">Credited</option>
                               <option value="4">Disputed</option>
                           </select>
                       </div>

                       <div class="col-md-2">
                        <label style="font-weight: bold">Writer Filter</label>
                        <select name="writer_status_filter" id="writer_status_filter" class="form-control" onchange="search_by_name();" >

                           <option value="">Select Writer</option>
                           <?php foreach ($writers as $key => $value): ?>
                               <option value="<?php echo $value->user_id ?>"><?php echo $value->user_name ?></option>
                           <?php endforeach ?>

                       </select>
                   </div>


                   

           </div>

           <!-- <select name="filter_data" id="filter_data" class="form-control pull-right" style="width: 20%; margin-top: 4px;"> -->


                   <!--  <select name="filter_data" id="filter_data" class="form-control pull-right" style="width: 20%; margin-top: 4px;">
                        <option style="font-weight: bold;">Payment Status</option>
                                                                        
                        <option value="Half Paid">Half Paid</option>
                        <option value="Full Paid">Full Paid</option>
                        
                        
                    </select> -->
                    <div class="portlet-body">
                        <div class="table-toolbar">

                        </div>
                        <table class="table table-striped table-hover table-bordered" id="neworder_tbl"  style="zoom:80%;">
                            <thead>
                                <tr>

                                    <th width="1%">SR#</th>
                                    <th width="1%"> Order Date </th>
                                    <th width="2%" class="mytbl_status">Status</th>
                                    <th width="2%"> Order Id </th>
                                    <th width="2%"> Client Info </th>
                                    <th width="2%"> Payment </th>
                                    <th width="3%"> Work Type </th>
                                    <th width="3%"> Academic Level </th>

                                    <th width="1%">P# </th>
                                    <th width="2%">Delivery Date </th>
                                    <th width="6%"> Subject / Title </th>
                                    <!-- <th width="2%">Assigned to </th> -->
                                    <th width="3%"> Writer Due Date </th>
                                    <th width="2%"> Assign to </th>
                                    <!-- <th width="2%"> agent </th> -->
                                    <th width="2%">Status</th>
                                    <!-- <th>Order Status</th> -->
                                                                     <!-- <th>Verification</th>
                                                                    <th> Edit</th>
                                                                    <th> Delete </th> -->
                                                                    <th width="2%">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="maintable">

                                                             <!-- <td>
                                                                 sr
                                                             </td>

                                                             <td>
                                                                 order date
                                                             </td>

                                                             <td>
                                                                 order id
                                                             </td>
                                                             <td>
                                                                 client info
                                                             </td>

                                                             <td>
                                                                 payment
                                                             </td>
                                                             <td>
                                                                 work type
                                                             </td>
                                                             <td>
                                                                 academic level
                                                             </td>

                                                             <td>
                                                                 no of pages
                                                             </td>
                                                             <td>
                                                                 Delivery date
                                                             </td>
                                                             <td>
                                                                 subject / title
                                                             </td>
                                                             <td>
                                                                 assigned to
                                                             </td>
                                                             <td>
                                                                 writer due date
                                                             </td>
                                                             <td>
                                                                 assign to
                                                             </td>
                                                             <td>
                                                                 agent
                                                             </td>
                                                             <td>
                                                                 status
                                                             </td>

                                                             <td> action</td> -->
                                                             

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
                              <!-- <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->

                              <!-- <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->

                              <script type="text/javascript" src="<?php echo base_url(); ?>assets_material/datetime/js/bootstrap-datetimepicker.min.js"></script>
                              <script type="text/javascript" src="<?php echo base_url(); ?>assets_material/bootstrap_multi/dist/js/bootstrap-select.min.js"></script>

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

                              <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script> -->
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
    function search_by_name()
    {
        var order_id = $("#order_id").val();
        var search_name = $("#searchby_name").val();
        var search_email = $("#searchby_email").val();
        var search_phone = $("#searchby_phone").val();

        var order_status_filter = $("#order_status_filter").val();

        //alert(order_status_filter);
        var writer_filter = $("#writer_status_filter").val();
        //alert(writer_filter);
        var agent_filter = $("#agent_status_filter").val();
       // alert(order_status_filter);
       $.ajax({
        method : 'post',
        url : '<?php echo base_url() ?>index.php/admin/master/search_term',
        data : {order_id:order_id,search_name : search_name, search_email:search_email, search_phone: search_phone, order_status_filter:order_status_filter, writer_filter: writer_filter,agent_filter:agent_filter},
        dataType : 'text',
        success :function(data)
        {
            //alert(data);
            $("#maintable").empty();
            var result  = jQuery.parseJSON(data);
            console.log(result);

            var count = 0;

            $.each(result['ordername'], function(key,value) {

                count++;
                //console.log(value['revision_file_path']);
                
                var myval = Display(value['end_date'],value['end_time'], this);

               // alert(myval);

                if(myval)
                {
                  if (value['order_status'] == 1 && value['order_status'] != 0 && value['order_status'] != "") {

                  var ab = getwriter_duedate(value['order_detail_id'],count,this);

                  alert(ab);

                  //console.log(ab);


                }

                if(value['order_status'] == 0)
                {
                   $("#wd_timer"+count).find('span').remove();

                  //alert("new order");
                }

                } 

                
               // console.log(myval);

                //console.log(value['client_name']);
                

                $("#maintable").append('<tr><td> '+count+' </td> <td>'+value['added_date']+'</td> <td> NDP - '+value['order_detail_id']+'</td> <td> '+value['client_name']+'<br>'+value['client_email']+'<br>'+value['phone']+' </td> <td> '+'$'+value['order_price']+' </td> <td> '+value['document_type']+' </td> <td> '+value['acedamic_level']+' </td> <td> '+value['no_of_pages']+' </td> <td> '+value['end_date']+'<br>'+value['end_time']+'<br>'+myval+'</td> <td> '+value['title']+'<br> '+value['subject']+' </td>  <td>  <input type="text" onfocusout="showdt();"  name="writer_due_date'+count+'" onclick="showdt('+count+'); return false;" class="form-control dt'+count+'" onchange="setthedate('+value['order_detail_id']+','+count+')" id="writerdue_dt'+count+'" style="width:190px;"/>'+''+'<br> <span id="wd_timer'+count+'"> </span>'+'<br> <span id="wr_timer'+count+'"> </span>  </td> <td id="writerslist'+count+'">   </td>   </td> <td id="orderstatus'+count+'">  </td> <td> <a target="_blank" href="<?php echo base_url() ?>index.php/admin/master/edit_neworder/'+value['order_detail_id']+'" class=""><i class="fa fa-edit" style="font-size: 25px; margin-left: 10px;"></i></a> <a  href="<?php echo base_url() ?>index.php/admin/neworder/delete_masterorder/'+value['order_detail_id']+'" class=""><i class="fa fa-trash" style="font-size: 25px; margin-left: 10px; margin-top:22px;"></i></a>  </td> </tr>')

                

                // writer list code
                var combo = $("<select></select>").attr("id", 'wr_dropdown'+count).attr("name", 'wr_dr_name'+count).attr("onchange","assign_writer("+count+","+value['order_detail_id']+")");
                var combo = combo.append("<option> Select Writer </option>");
                $.each(result['writers'], function (i, el) {

                    combo.append("<option value="+el['user_id']+" "+(value['writer_id'] == el['user_id'] ? 'selected': '')+" >" + el['user_name'] + "</option>");
                });

                //agents list code

                var agcombo = $("<select></select>").attr("id", 'ag_dropdown'+count).attr("name", 'ag_dr_name'+count);
                var agcombo = agcombo.append("<option value='-1'>Select Agent </option>");
                $.each(result['agents'], function (ia, ela) {
                    
                    agcombo.append("<option value="+ela['user_id']+">" + ela['user_name'] + "</option>");
                });



                 var orderstatus = $("<select></select>").attr("id", 'order_status_dr'+count).attr("name", 'or_dr_name'+count).attr("onchange","change_order_status("+count+","+value['order_detail_id']+")");

                 var orderstatus = orderstatus.append("<option> Select Status </option>")
                 var orderstatus = orderstatus.append("<option value='6' "+(value['order_status'] == 6 ? 'selected': '')+" style='color:red;'>Unpaid Order</option>");
                 var orderstatus = orderstatus.append("<option value='0' "+(value['order_status'] == 0 ? 'selected': '')+">Neworder</option>");
                 var orderstatus = orderstatus.append("<option value='1' "+(value['order_status'] == 1 ? 'selected': '')+">In-Process</option>");
                 var orderstatus = orderstatus.append("<option value='2' "+(value['order_status'] == 2 ? 'selected': '')+">Completed</option>");
                 var orderstatus = orderstatus.append("<option value='3' "+(value['order_status'] == 3 ? 'selected': '')+">Revision in Progress</option>");
                 var orderstatus = orderstatus.append("<option value='4' "+(value['order_status'] == 4 ? 'selected': '')+">Disputed</option>");
                 var orderstatus = orderstatus.append("<option value='5' "+(value['order_status'] == 5 ? 'selected': '')+">Credited</option>");


                


   // return combo;
    // OR
    $("#writerslist"+count).append(combo);
    // $("#agentslist"+count).append(agcombo);
    $("#orderstatus"+count).append(orderstatus);





});
        }



    });
   }
</script>
<script type="text/javascript">
  function Display($enddate,$endtime,ths)
  {
    //debugger;
    var date_and_time = $enddate+' '+$endtime;
   // return date_and_time;
    var countDownDate = new Date(date_and_time).getTime();

   //return dateFormat(date_and_time, "dddd, mmmm dS, yyyy, h:MM:ss TT");
    

    // var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  //Display the result in the element with id="demo"
   return days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

  //return days;

  // If the count down is finished, write some text 
  if (distance < 0) {
   //clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
// }, 1000);
  }
</script>

<script type="text/javascript">
  function getwriter_duedate($orderid,$count, ths2)
  {
    alert($orderid);
    $.ajax({

      method : 'POST',
      url : '<?php echo base_url() ?>index.php/admin/neworder/getwriterduedate',
      data : {orderid : $orderid},
      dataType : 'text',
      success : function(result)
      {
       // alert(result)
        //$("#wd_timer"+$count).html(result);
        $("#wd_timer"+$count).html("<span style='color:black;font-weight:bold'>"+result+"</span>");
         var countDownDate = new Date(result).getTime();
         //var x = setInterval(function() {
         var now = new Date().getTime();
         var distance = countDownDate - now;
         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
         var seconds = Math.floor((distance % (1000 * 60)) / 1000);

         if(days != 0)
         {
           // $("#wr_timer"+$count).text(+ days + "d " + hours + "h " + minutes + "m " + seconds + "s ").css('background','yellow');

           $("#wr_timer"+$count).html("<span class='btn btn-info' style='color:white; border:none; font-weight:bold;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span>");

           // $("#wr_timer"+$count).html("<span class='btn btn-info' style='color:white; font-weight:bold; font-size:16px;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span>");
         }else if( days == 0 && hours != 0)
         {
          $("#wr_timer"+$count).html("<span class='btn btn-info' style='color:white; border:none; font-weight:bold;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span>");
         }else if(days == 0 && hours == 0)
         {
           $("#wr_timer"+$count).html("<span class='btn btn-info' style='color:white; border:none; font-weight:bold;'>"+ days + "d " + hours + "h " + minutes + "m " + seconds + "s "+"<span>");
         }  
         

        
  if (distance < 0) {
    //clearInterval(x);
     $("#wr_timer"+$count).text("EXPIRED");
  }
//}, 1000);
      }


    });
    return $orderid;
  }
</script>



<script type="text/javascript">
    function assign_writer(count,orderid)
    {

        //debugger;
       var writerdue_date =  $('#writerdue_dt'+count).val();

      var writerid =  $("#wr_dropdown"+count).val();
      var region = -1;

     // alert(writerdue_date);
      
      //var region =  $('#region_list'+value).val();
      // var writer =  $('#writer_list'+value).val();
      // var datetime = $("#writer_due_date"+value).val();

       //alert(datetime);
        //var time = $("#writer_due_time"+value).val();
          //  alert('working'.$id);
          //alert(orderid);
          if(writerdue_date != ""){
          $.ajax({
             type: "POST",
             url: "<?php echo base_url() ?>index.php/admin/neworder/assign_order_writer", 
             data: {orderid: orderid ,regionid : region,writerid : writerid, date:writerdue_date},
             dataType: "text",  
             cache:false,
             success: 
             function(data){

               // toastr.success(data.message);

             toastr['success']('Order Assigned Successfully');
                
                $('#region_list  option[value=region]').prop("selected", true);
            }
        });

      }else if(writerdue_date == "")
      {
        $("#writerdue_dt"+count).after('<br><span style="color:red;"> select date and time </span>');
      }
    }
</script>

<script type="text/javascript">
    function change_order_status($value,orderid)
    {
          // alert("order id is"+" "+orderid);

        //alert("orderstatus called");
        var row = $value;

        var myvalue =  $('#order_status_dr'+row).val();

        //alert("status value is"+" "+myvalue);
      // debugger;
        //alert(myvalue);
       // alert($id);
          //  alert('working'.$id);
          //debugger;
          $.ajax({
             type: "POST",
             url: "<?php echo base_url() ?>index.php/admin/neworder/change_order_status", 
             data: {orderid: orderid, status : myvalue},
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

<script type="text/javascript">
  // function funcall()
  // {
  //   $('#writerdue_dt'+$count).datetimepicker({

  //     format: 'dd-mm-yyyy hh:ii:ss',
  //     autoclose: true

  //   });
  // }
</script>

<!-- <script type="text/javascript">
    
$(document).ready(function(){

$('.dt').datetimepicker();
 });
   
</script>  -->

<script type="text/javascript">
  function showdt($count)
  {
    //alert('working');
  //  console.log('wori');
    $("writerdue_dt"+$count).val();
   // $("#writerdue_dt"+$count).focus();
    $('#writerdue_dt'+$count).datetimepicker({

      startDate: new Date(),
      format: 'dd-mm-yyyy hh:ii:ss',
      showClear : true,
      pickMinutes : true,
      use24hours: true,
      sideBySide: true,
      showClose: true
      
      

    }).focus();
  }
</script>

<script type="text/javascript">
  function setthedate($orderdetailid, $count)
  {
    alert('working');
  }
</script>

<!-- <script type="text/javascript">
  function showdt($count)
  {
     $("#writerdue_dt"+$count).on('focus',function(){
      $(this).removeClass('dt'+$count).datetimepicker().focus();
      return false;
});
  }
</script> -->

<!-- <script type="text/javascript">
  $("#writerdue_dt"+$count).live('focus',function(){
      $(this).removeClass('dt'+$count).datetimepicker().focus();
      return false;
});
</script> -->