 <!-- BEGIN VALIDATION STATES-->
   <!-- <link href="<?php echo base_url();?>assets_material/js/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
   -->
   <script type="text/javascript">
    <?php if($this->session->flashdata('clientblocked')){ ?>
      toastr.success("<?php echo $this->session->flashdata('clientblocked'); ?>");
    <?php }?>

  </script>

  <script type="text/javascript">
    <?php if($this->session->flashdata('clientunblocked')){ ?>
      toastr.success("<?php echo $this->session->flashdata('clientunblocked'); ?>");
    <?php }?>

  </script>
  

  <script type="text/javascript">
    <?php if($this->session->flashdata('clientupdated')){ ?>
      toastr.success("<?php echo $this->session->flashdata('clientupdated'); ?>");
    <?php }?>

  </script>

  <script type="text/javascript">
    <?php if($this->session->flashdata('clientdeleted')){ ?>
      toastr.success("<?php echo $this->session->flashdata('clientdeleted'); ?>");
    <?php }?>

  </script>
  <!--  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"> -->

  

  <div class="tab-pane active" id="tab_0">
    <div class="portlet box green">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-gift"></i>Manage Clients </div>
          <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
            <a href="javascript:;" class="reload"> </a>
            <a href="javascript:;" class="remove"> </a>
          </div>
        </div>
        <div class="portlet-body form">
          <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
            <thead>
              <tr>
                <th width="2%">Sr#</th>
                <th width="30%"> Client Name </th>
                <th width="30%"> Client Email</th>
                <th width="30%"> Contact No#</th>
                <th width="100%"> Password </th>
                <th width="100%"> Account Status </th>
                <th width="5%">Action</th>

                           <!--  <th width="5%"> Number of Orders Allowed </th>
                            <th width="5%"> Action</th> -->
                            
                            <!-- <th>Order Status</th> -->

                          </tr>
                        </thead>
                        <tbody>
                          <?php $count = 0; ?>
                          <?php foreach ($clients as $key => $client): ?>
                            <?php $count++; ?>

                            <tr>

                             <td> <?php echo $count; ?> </td>
                             <td> <?php echo $client->client_name ?> </td>
                             <td> <?php echo $client->client_email ?> </td>
                             <td> <?php echo $client->contact ?> </td>
                             <td> <?php echo $client->password ?> </td>
                             <td>
                              <?php if ($client->client_status == 1   ): ?>
                                <a name="" title="Bonus Deduction Note" id=""  data-toggle="modal" href="#" onclick="confirmblock(<?php echo $client->client_id; ?>);" class="btn btn-danger" >
                                 <span>Block</span>
                               </a>
                               <?php else: ?>
                                 <a name="" title="Bonus Deduction Note" id=""  data-toggle="modal" onclick="confirmunblock(<?php echo $client->client_id; ?>);" href="#" class="btn btn-primary" >
                                   <span>Unblock</span>
                                 </a>
                               <?php endif ?>
                             </td>
                             <td>
                              <a  href="<?php echo base_url(); ?>index.php/admin/client/delete_client/<?php echo $client->client_id ?>" class="btn btn-circle btn-icon-only btn-danger" href="">
                                 <i class="icon-trash"></i>
                               </a>
                               <a  title="edit submission" class="btn btn-circle btn-icon-only btn-info" id="" name="" data-toggle="modal" href="<?php echo base_url(); ?>index.php/admin/client/editclient/<?php echo $client->client_id; ?>" style="margin-top: 12px;">
                                 <i class="icon-pencil" ></i>
                               </a>
                             </td>


                           </tr>
                         <?php endforeach ?>


                       </tbody>
                     </table>

                   </div>
                 </div>
               </div>

               <div class="modal fade" id="confirmationbox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Do You want to continue?</h4>
                    </div>


                    <div class="modal-footer">
                      <button type="button"  class="btn btn-primary" id="modal-btn-si">Yes</button>
                      <button type="button" onclick="notconfirm();"  class="btn btn-danger" id="modal-btn-no">No</button>
                    </div>
                  </div>
                </div>
              </div>






              <!-- END VALIDATION STATES-->
              <!--         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

              <!--  <script src="<?php echo base_url();?>assets_material/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script> -->

              <!--   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script> -->

      <!--   <script type="text/javascript">
         $('.datepicker').datepicker({
            format: 'dd/mm/yyyy'
        });
      </script> -->

      <script type="text/javascript">
       // alert("working");

//   $('#role_type').change(function() {
//     //Use $option (with the "$") to see that the variable is a jQuery object
//     var $option = $(this).find('option:selected');

//     var value = $option.val();//to get content of "value" attrib
//     var text = $option.text();//to get <option>Text</option> content


//     if(value != 'writer')
//     {
//       $("#contactno").hide();
//       $("#selectregion").hide();
//       $("#rate_per_region").hide();
//   }else{
//       $("#contactno").show();
//       $("#selectregion").show('');
//       $("#rate_per_region").show('');
//   }
// });
</script>
<script type="text/javascript">
  function doSomething()
  {
    alert("yes");

    var role = $("#role_type").val();
    alert(role);

         //  var option = $(this).find('option:selected');

         //  alert(option.val());

    //var role = $option.val();//to get content of "value" attrib
   // var text = $option.text();//to get <option>Text</option> content


   if(role != 'Writer')
   {
     // $("#contactno").hide();
     $("#select_region").hide();
     $("#rate_per_page").hide();
   }else{
     // $("#contactno").show();
     $("#selectregion").show('');
     $("#rate_per_region").show('');
   }
 }
</script>

<!-- <script type="text/javascript">
    $("#sample_editable_1").DataTable();
  </script> -->

  <script type="text/javascript">
    function confirmblock($clientid)
    {
      $("#confirmationbox").modal('show');
      $("#modal-btn-si").attr('onclick','confirm_client_block('+$clientid+')');
    }

    function confirm_client_block($id)
    {
      $("#confirmationbox").modal('hide');
      $.ajax({

        method : 'POST',
        url : '<?php echo base_url() ?>index.php/admin/client/account',
        data : { clientid : $id},
        dataType : 'text',
        success : function(data)
        {
           //toastr['success']('Writer Due Date Selected Successfully');
           window.setTimeout(function(){location.reload()},100);
         }




       });
    }



    function confirmunblock($clientid)
    {
     $("#confirmationbox").modal('show');
     $("#modal-btn-si").attr('onclick','confirm_unblock('+$clientid+')');
   }

   function confirm_unblock($id)
   {
    $("#confirmationbox").modal('hide');
    $.ajax({

      method : 'POST',
      url : '<?php echo base_url() ?>index.php/admin/client/account',
      data : { clientid : $id},
      dataType : 'text',
      success : function(data)
      {
           //toastr['success']('Writer Due Date Selected Successfully');
           window.setTimeout(function(){location.reload()},100);
         }




       });
  }

  function notconfirm()
  {
    $("#confirmationbox").modal('hide');
  }
</script>