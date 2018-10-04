
<meta charset="utf-8" />
<title>Metronic Admin Theme #3 | Editable Datatables</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="Preview page of Metronic Admin Theme #3 for editable datatable samples" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"
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
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />

<!-- END THEME LAYOUT STYLES -->
<!-- END PAGE LEVEL PLUGINS -->
<div class="row">
  <div class="col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet light portlet-fit ">
      <div class="portlet-title">
        <div class="caption">
          <i class="icon-settings font-red"></i>
          <span class="caption-subject font-red sbold uppercase">Leads</span>
        </div>
        <div class="actions">
          <div class="btn-group btn-group-devided" data-toggle="buttons">

           <select name="filter_data" id="filter_data" class="form-control pull-right" style="width: 100%; margin-top: 8px;">
            <option style="font-weight: bold;">Select Status</option>
            <option value="Newlead">New Leads</option>
            <option value="Invalid Detail">Invalid Details</option>
            <option value="No Reponse">No Response</option>
            <option value="Closed With Different Order">Closed with a different order</option>

          </select>

        </div>
      </div>
    <!--   <div class="container">
        <div class="col-md-4 pull-right">
          <div class="input-group input-daterange">

            <input type="text" id="min-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="From:">

            <div class="input-group-addon">to</div>

            <input type="text" id="max-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="To:">

          </div>
        </div>
      </div> -->
      <input name="min" id="min" type="text">
      <input name="max" id="max" type="text">

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
      <table class="table table-striped table-hover table-bordered" id="leads_table">
        <thead>
          <tr>
            <th width="1%"> Email </th>
            <th width="2%"> Phone </th>
            <th width="2%"> Document Type </th>
            <th width="3%">Due Date </th>
            <th width="1%">P# </th>
            <th width="1%">Filter </th>
            <th width="1%">Action </th>

            <th width="2%">Action</th>
          </tr>
        </thead>
        <tbody>

         <?php 
         $i = 1;
         $count = 0;
         foreach ($leads as $key => $lead):
          ?>

          <tr>

            <td> 

             <?php echo $lead->user_email ?> </td>
             <td> <?php echo $lead->user_phone?> </td>

             <td><?php echo $lead->document_type?></td>
             <td><?php echo $lead->due_date?></td>
             <td> <?php echo $lead->no_of_pages ?> </td>









             <td>
              <?php
              if($lead->lead_status == 0){
                echo '<span class="label label-warning">Newlead</span>';
              }elseif($lead->lead_status == 1){
                echo '<span class="label label-danger">Invalid Detail</span>';
              }elseif($lead->lead_status == 2){
                echo '<span class="label label-info">No Reponse </span>';
              }elseif($lead->lead_status == 3){
                echo '<span class="label label-default">Closed With Different Order</span>';
              }
              ?>
            </td>

            <td>
              <select onchange="change_lead_status(<?php echo $lead->lead_id ?>, <?php echo $i ?>);" id="lead_filter_id<?php echo $i ?>">
                <option value="-1">Select Action</option>
                <option value="0">New Lead</option>
                <option value="1">Invalid Details</option>
                <option value="2">No Reponse</option>
                <option value="3">Closed With Different Order</option>


              </select>
            </td>

            <td>
              <a href="<?php echo base_url(); ?>index.php/admin/leads/edit_lead/<?php echo $lead->lead_id ?>" class=""><i class="fa fa-edit"></i></a>
                                                                        <!-- <a class="" href="">
                                                                            <i class="fa fa-book"></i>
                                                                          </a> -->
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

                                                        <div class="modal fade" id="myModal" role="dialog">
                                                          <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Add Note</h4>
                                                              </div>
                                                              <div class="modal-body">
                                                                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/leads/add_lead_note">

                                                                  <div class="form-group" id="mytextarea"> 
                                                                    <label>Add Note</label>    
                                                                    <textarea class="form-control" name="ordernote">

                                                                    </textarea>
                                                                    <input type="text" name="leadnoteid" id="leadnoteid" 
                                                                    value="<?php echo $lead->lead_id ?>" />
                                                                    <!-- <input type="hidden" name="note_writer" id="note_writer" /> -->
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

                                                        <!-- BEGIN CORE PLUGINS -->
                                                        <!-- <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->

                                                        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                                                        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                                                        <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                                                        <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

                                                        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
                                                        
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


                                                        <!-- Modal -->




                                                        <!-- EndModal -->

                                                        <script type="text/javascript">
                                                          $("#leads_table").DataTable();
                                                        </script>

                                                        <script type="text/javascript">
                                                          function change_lead_status($leadid,$count)
                                                          {
                 //debugger;
                // alert($leadid);
                var value = $count;
     //var myval = $("#lead_filter_id" : 'selected').val();
     var currentval = $('#lead_filter_id'+value).val();
     alert(currentval);
    // alert(myval);
       // $(".mynotemodal").attr("id", "notes"+value);

       $.ajax({
         type: "POST",
         url: "leads/change_lead_status", 
         data: {leadid: $leadid, status : currentval},
         dataType: "text",  
         cache:false,
         success: 
         function(data){

          $("#myModal").modal('show');
          alert(data);
          if(currentval == 0)
          {
            alert('m 0');
          }else if(currentval == 1){
            alert('m 1');
          }else if(currentval ==2)
          {
            alert("m 2");
          }

            //alert(data['note_id']);

            var result  = jQuery.parseJSON(data);
         // alert(result.note_id);


       }
     });
     }
   </script>

   <script>
    $('#myModal').on('show.bs.modal', function(e) {

      var $modal = $(this),
      orderid_note = e.relatedTarget.id;

      $("#orderid").val(orderid_note);


    })
  </script>

  <script type="text/javascript">
   var table = $('#leads_table').DataTable();
   $('#filter_data').on('change', function () {
    if(this.value ==  'Newlead' || this.value == 'Invalid Detail' || this.value == 'No Reponse' || this.value == 'Closed With Different Order' )
    {
      table.columns(5).search( this.value ).draw();
    }
        //alert(this.value);

      });

    </script>

    <!-- <script type="text/javascript">
      $("#min-date").daterangepicker();
    </script> -->



    <script type="text/javascript">
     $(document).ready(function(){
      $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
          var min = $('#min').datepicker("getDate");
          var max = $('#max').datepicker("getDate");
          var startDate = new Date(data[4]);
          if (min == null && max == null) { return true; }
          if (min == null && startDate <= max) { return true;}
          if(max == null && startDate >= min) {return true;}
          if (startDate <= max && startDate >= min) { return true; }
          return false;
        }
        );


      $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
      $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
      var table = $('#example').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').change(function () {
              table.draw();
            });
          });
        </script>


