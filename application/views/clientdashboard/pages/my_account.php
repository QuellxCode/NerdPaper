 <!-- BEGIN VALIDATION STATES-->
   <!-- <link href="<?php echo base_url();?>assets_material/js/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
 -->

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 

 <div class="container">
    <div class="row">
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Update Password</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?php echo base_url() ?>index.php/Client/updatePassword">
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="password" name='oldpassword' id="orangeForm-name" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-name">Old Password</label>
                </div>
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="password" name='password' id="orangeForm-email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-email">New Password</label>
                </div>
                    <input type="hidden" name="userid" id='sendclientid' >
                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" name='repassword' id="orangeForm-pass" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">Confirm password</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="text-center">
    <!--<a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch Modal Register Form</a>-->
</div>
    
    
    </div>
 
 </div>
 <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Your Orders</div>
                            <div class="tools">
                                <a href="" class="collapse"> </a>
                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                <a href="" class="reload"> </a>
                            </div>
                        </div>
                    <div class="portlet-body">
        <!-- BEGIN FORM-->
        <form  class="form-horizontal" id="" action="<?php echo base_url(); ?>index.php/client/editAccount" method="post">
            <div class="form-body">
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                    <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                       

                        <?php foreach($account as $r);?>
                        <input type="hidden" name='clientid' id='myclientid' value='<?php if(isset($r)){
                                    echo $r->client_id;} ?>'>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Name
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" value="<?php if(isset($r)){
                                    echo $r->client_name;} ?>" name="uname" >
                                <div class="form-control-focus"> </div>
                                <span class="help-block">Enter Name</span>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Email
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" placeholder="" name="uemail" value="<?php if(isset($r)){echo $r->client_email;
                             } ?>">
                             <div class="form-control-focus"> </div>
                             <span class="help-block">Enter Email</span>
                         </div>
                     </div>

                     <div class="form-group form-md-line-input">
                        <label class="col-md-3 control-label" for="form_control_1">Contact
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="contact" value="<?php if(isset($r)){
                                    echo $r->contact;
                             } ?>">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">Enter your contact</span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-3 control-label" for="form_control_1">Password
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" placeholder="" name="password" value="<?php if(isset($r)){
                                    echo $r->password;
                             } ?>">
                            <div class="form-control-focus"></div><span><a href="javascript:;" onclick='changepasswordModal();' class="btn btn-primary" style='margin-top:25px;'>Change Password</a></span>
                            <span class="help-block">Enter your Password</span>
                        </div>
                    </div>



                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <!--<button type="submit" class="btn green">Update</button>-->
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
   

     

                    







    
   <!--  <script src="<?php echo base_url();?>assets_material/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script> -->

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
   $('.datepicker').datepicker({
    format: 'dd/mm/yyyy'
 });
</script>

<script>
function changepasswordModal()
{
    $("#modalRegisterForm").modal('show');
    var clientid = $("#myclientid").val();
    $("#sendclientid").val(clientid);
    
}
 </script>

 <?php if($this->session->flashdata('password')): ?>
  <script type="text/javascript">
    swal("Entered passwords do not match. Please try again","","warning");
  </script>
 
<?php endif ?>

<?php if($this->session->flashdata('updatepassword')): ?>
  <script type="text/javascript">
    swal("Password Updated Successfully!","","success");
  </script>
 
<?php endif ?>

<?php if($this->session->flashdata('oldpassword')): ?>
  <script type="text/javascript">
    swal("Enterd Old password do not match!","","warning");
  </script>
 
<?php endif ?>


