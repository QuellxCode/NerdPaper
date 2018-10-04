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
  <!--  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"> -->

   <div class="portlet light portlet-fit portlet-form ">
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-green"></i>
           
            <?php if (isset($role)): ?>
                                     <span class="caption-subject font-green sbold uppercase">Edit Role</span>
                                <?php else: ?>
                                     <span class="caption-subject font-green sbold uppercase">Add Role</span>
                                <?php endif; ?>
        </div>
        <div class="actions">
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-cloud-upload"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-wrench"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-trash"></i>
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <!-- BEGIN FORM-->
        <form  class="form-horizontal" id="" action="<?php echo base_url() ?>index.php/admin/role/save_role/<?php  if (!empty($role)) {
                      echo $role->user_id;
                  } ?>" method="post">
            <div class="form-body">
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                    <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>

                        <input type="hidden" name="order_id" value="<?php if(isset($order)){
                            echo $order->order_detail_id;
                        } ?>">


                        <!-- <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Select Role</label>
                            <div class="col-md-9">
                                <select class="form-control" name="role_type" onchange="doSomething();" id="role_type" multiple="">
                                    <option value="Writer">Writer</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Support">Support</option>
                                    <option value="Sales">Sales</option>
                                    
                                </select>
                                <div class="form-control-focus"> </div>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="form_control_1" style="padding-top: 5px;font-size:14px;color: #888;">Select Role</label>
                            <div class="col-md-9">
                                <select class="form-control" name="role_type" onchange="doSomething();" id="role_type">
                                    <option value="Writer" <?php if (isset($role) && $role->user_role == 'writer'): ?>
                                                <?php echo 'selected'; ?>
                                    <?php endif ?>>Writer</option>
                                    <option value="Admin" <?php if (isset($role) && $role->user_role == 'Admin'): ?>
                                                <?php echo 'selected'; ?>
                                    <?php endif ?>>Admin</option>
                                    <option value="Support" <?php if (isset($role) && $role->user_role == 'Support'): ?>
                                                <?php echo 'selected'; ?>
                                    <?php endif ?>>Support</option>
                                    <option value="Sales" <?php if (isset($role) && $role->user_role == 'Sales'): ?>
                                                <?php echo 'selected'; ?>
                                    <?php endif ?>>Sales</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="form-group"> 
                    
                    <div class="col-sm-10"> 
                        <label class="col-md-3 control-label" for="form_control_1">Select Role
                                <span class="required">*</span>
                            </label>
                      <div class="col-md-9">
                          <select class="form-control" onchange="doSomething();" name="role_type" id="role_type"> 
                         <option value="writer">Writer</option> 
                        <option value="Admin">Admin</option> 
                        <option value="support">Support</option>
                        <option value="sales">Sales</option> 
                       

                    </select>
                      </div> 
                </div> 
            </div> -->

                        

                        <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Name
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="agent_name" value="<?php if(isset($role)){
                                    echo $role->user_name;
                                } ?>">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">Enter your full name</span>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Email
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="agent_email" value="<?php if(isset($role)){
                                    echo $role->user_email;
                                } ?>">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">Enter your email</span>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input" id="contactno">
                            <label class="col-md-3 control-label" for="form_control_1">Phone
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Enter Phone Number" name="agent_number" value="<?php if(isset($role)){
                                        echo $role->user_coantact;
                                    } ?>">
                                    <div class="form-control-focus"> </div>
                                    <i class="fa fa-bell-o"></i>
                                    <span class="help-block">Enter Phone number currently in use</span>
                                </div>
                            </div>
                        </div>
                        <?php if (isset($role)): ?>
                            <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Password
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="agent_password"  value="<?php if(isset($role)){
                                    echo $role->user_password;
                                } ?>">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">Password</span>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Password
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="Password" class="form-control" placeholder="" name="agent_password"  value="<?php if(isset($order)){
                                    echo $order->acedamic_level;
                                } ?>">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">Password</span>
                            </div>
                        </div>
                        <?php endif ?>
                       <!--  <div class="form-group form-md-line-input" id="select_region">
                            <label class="col-md-3 control-label" for="form_control_1">Select Region</label>
                            <div class="col-md-9">
                                <select class="form-control" name="select_region"  multiple="">
                                    <option value="1">Select Region</option>
                                    <?php foreach ($regions as $key => $region): ?>
                                        
                                   
                                    <option value="<?php echo $region->region_id ?>"><?php echo $region->region_name ?></option>

                                     <?php endforeach ?>
                                    
                                </select>
                                <div class="form-control-focus"> </div>
                            </div>
                        </div> -->
                         <div class="form-group" id="select_region">
                            <label class="col-md-3 control-label" for="form_control_1" style="padding-top: 5px;font-size:14px;color: #888;">Select Region</label>
                            <div class="col-md-9">
                                <select class="form-control" name="select_region" >
                                    <option value="1">Select Region</option>
                                    <?php foreach ($regions as $key => $region): ?>
                                        
                                   
                                    <option value="<?php echo $region->region_id ?>" <?php if(isset($role) && $role->writer_region_id == $region->region_id ){
                                        echo 'selected';
                                    } ?>><?php echo $region->region_name ?></option>

                                     <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input" id="rate_per_page">
                            <label class="col-md-3 control-label" for="form_control_1">Rate per page
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="number" class="form-control"  placeholder="" name="rate_per_page" value="<?php if(isset($role)){
                                    echo $role->writer_rate_perpage;
                                } ?>">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">Rate per page</span>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input" id="allowed_orders">
                            <label class="col-md-3 control-label" for="form_control_1">Allowed Orders
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" placeholder="" name="allowed_orders" value="<?php if(isset($role)){
                                    echo $role->allowed_orders;
                                } ?>">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">Number of Ordres Allowed</span>
                            </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <?php if (isset($role)): ?>
                                     <button type="submit" class="btn green">Update Role </button>
                                <?php else: ?>
                                    <button type="submit" class="btn green">Add Role </button>
                                <?php endif; ?>
                               

                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
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
        //alert("yes");

       var role = $("#role_type").val();
     //  alert(role);

         //  var option = $(this).find('option:selected');

         //  alert(option.val());
   
    //var role = $option.val();//to get content of "value" attrib
   // var text = $option.text();//to get <option>Text</option> content


    if(role != 'Writer')
    {
     // $("#contactno").hide();
      $("#select_region").hide();
      $("#rate_per_page").hide();
      $("#allowed_orders").hide();
  }else{
     // $("#contactno").show();
      $("#select_region").show('');
      $("#rate_per_page").show('');
       $("#allowed_orders").show();
  }
    }
</script>

<script type="text/javascript">
    $( document ).ready(function() {
        
       var currentrole =  $("#role_type").val();
       //alert(currentrole);
       if(currentrole == 'Admin' || currentrole == 'Sales' || currentrole == 'Support')
       {
        $("#select_region").css("display","none");
      $("#rate_per_page").css("display","none");
      $("#allowed_orders").css("display","none");
  }else{
     $("#select_region").show();
      $("#rate_per_page").show();
       $("#allowed_orders").show();
  }
    });
</script>