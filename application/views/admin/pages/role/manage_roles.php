 <!-- BEGIN VALIDATION STATES-->
   <!-- <link href="<?php echo base_url();?>assets_material/js/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
   -->
    <script type="text/javascript">
        <?php if($this->session->flashdata('roleadded')){ ?>
    toastr.success("<?php echo $this->session->flashdata('roleadded'); ?>");
<?php }?>

    </script>

    <script type="text/javascript">
        <?php if($this->session->flashdata('roleupdate')){ ?>
    toastr.success("<?php echo $this->session->flashdata('roleupdate'); ?>");
<?php }?>

    </script>
    <script type="text/javascript">
        <?php if($this->session->flashdata('roledeleted')){ ?>
    toastr.success("<?php echo $this->session->flashdata('roledeleted'); ?>");
<?php }?>

    </script>
    <script type="text/javascript">
        <?php if($this->session->flashdata('roleunblocked')){ ?>
    toastr.success("<?php echo $this->session->flashdata('roleunblocked'); ?>");
<?php }?>

    </script>

    <script type="text/javascript">
        <?php if($this->session->flashdata('roleblocked')){ ?>
    toastr.success("<?php echo $this->session->flashdata('roleblocked'); ?>");
<?php }?>

    </script>
  <!--  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"> -->

   

<a href="<?php echo base_url(); ?>index.php/admin/role/add_role"><button class="btn btn-primary">Add New Role</button></a>

<div class="tab-pane active" id="tab_0">
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>Manage Roles </div>
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
                            <th width="8%"> Username </th>
                            <th width="5%"> User Role</th>
                            <th width="5%"> Email </th>
                            <th width="5%"> CPP </th>
                            <th width="5%"> Order Limit </th>
                            <th width="5%">Password</th>
                            <th width="5%"> Account Status </th>
                            <th width="5%"> Action</th>
                            
                            <!-- <th>Order Status</th> -->
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $count = 0; ?>
                                                                <?php foreach ($roles as $key => $role): ?>
                                                <?php $count++; ?>
                                           
                                                <tr>

                                                     <td> <?php echo $count; ?> </td>
                                                <td> <?php echo $role->user_name ?> </td>
                                                <td> <?php echo $role->user_role ?> </td>
                                                <td> <?php echo $role->user_email ?> </td>
                                                <td> <?php echo $role->writer_rate_perpage ?> </td>
                                                <td> <?php echo $role->allowed_orders ?> </td>
                                                <td><?php echo $role->user_password ?></td>
                                                <td>
                                                    <?php if ($role->role_status == 1   ): ?>
                                                        <a name="" title="Bonus Deduction Note" id=""  data-toggle="modal" href="#" onclick="confirmblock(<?php echo $role->user_id; ?>);" class="btn btn-danger" >
                                       <span>Block</span>
                                      </a>
                                                    <?php else: ?>
 <a name="" title="Bonus Deduction Note" id=""  data-toggle="modal" onclick="confirmunblock(<?php echo $role->user_id; ?>);" href="#" class="btn btn-primary" >
                                       <span>Unblock</span>
                                      </a>
                                                    <?php endif ?>
                                                </td>
                                                    <td>
                                                    <!--  <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal"  onclick='detailsModal("<?php //echo $row_list['user_id']; ?>","<?php //echo $row_list['user_fname'].' '.$row_list['user_lname']; ?>","<?php //echo $row_list['user_role']; ?>","<?php //echo $row_list['user_city']; ?>","<?php //echo $row_list['user_mobile_numer']; ?>","<?php //echo $row_list['user_cnic']; ?>")'>
                                                       <i class="fa fa-list-alt"></i>
                                                   </a> --> 
                                                  <!--  <a class="btn btn-circle btn-icon-only btn-default" target="_blank" href="<?php echo base_url() ?>index.php/admin/role/add_role/<?php echo $role->user_id ?>">
                                                       <i class="icon-wrench"></i>
                                                   </a> -->
                                                   <a  target="_blank" title="Edit" class="btn btn-circle btn-icon-only btn-info"  name="" data-toggle="modal" href="<?php echo base_url() ?>index.php/admin/role/add_role/<?php echo $role->user_id ?>">
                                       <i class="icon-pencil" ></i>
                                     </a>
                                                   <a class="btn btn-circle btn-icon-only btn-danger" href="<?php echo base_url() ?>index.php/admin/role/delete_role/<?php echo $role->user_id ?>">
                                                       <i class="icon-trash"></i>
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
                                                <button type="button" onclick="notconfirm();" class="btn btn-danger" id="modal-btn-no">No</button>
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

<script type="text/javascript">

    function confirmblock($userid)
    {
        $("#confirmationbox").modal('show');
       $("#modal-btn-si").attr('onclick','confirmblock_unblock('+$userid+')');

       // alert($userid);
    }

    function confirmblock_unblock($id)
    {
         $("#confirmationbox").modal('hide');
        $.ajax({

          method : 'POST',
          url : '<?php echo base_url() ?>index.php/admin/role/account',
          data : { userid : $id},
          dataType : 'text',
          success : function(data)
          {
           //toastr['success']('Writer Due Date Selected Successfully');
           window.setTimeout(function(){location.reload()},100);
         }




       });


    }

    function confirmunblock($userid)
    {
         $("#confirmationbox").modal('show');
       $("#modal-btn-si").attr('onclick','confirm_unblock('+$userid+')');
    }

    function confirm_unblock($id)
    {
        $("#confirmationbox").modal('hide');
        $.ajax({

          method : 'POST',
          url : '<?php echo base_url() ?>index.php/admin/role/account',
          data : { userid : $id},
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