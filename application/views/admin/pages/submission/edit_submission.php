 <!-- BEGIN VALIDATION STATES-->
   <!-- <link href="<?php echo base_url();?>assets_material/js/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
 -->

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
 <div class="portlet light portlet-fit portlet-form ">
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-green"></i>
            <span class="caption-subject font-green sbold uppercase">Edit Order</span>
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
        <form  class="form-horizontal" id="" action="<?php echo base_url(); ?>index.php/admin/submission/update_submission_file_notes" method="post" enctype="multipart/form-data">
            <div class="form-body">
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                    <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>

                        <input type="hidden" name="order_id" value="<?php if(isset($order)){
                                    echo $order->order_detail_id;
                             } ?>">

                                                          <!--    <?php foreach ($submission as $key => $value): ?>

                                                                   
                                                                    <input type="file" name="myfile" value="">

                                                                    
                                                                    
                                                                <?php endforeach ?> -->


                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-3 control-label" for="form_control_1">Description</label>
                                                                    <div class="col-md-9">
                                                                        <textarea class="form-control" name="description" rows="3">
                                                                            <?php echo $writernote ?>
                                                                        </textarea>
                                                                        <div class="form-control-focus"> </div>
                                                                    </div>
                                                                </div>

                                                                <input type="text" name="submission_id" value="<?php echo $submission_id ?>">

                                                               

                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-3 control-label" for="form_control_1">Files
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-9">
                                                                        <?php foreach ($submissionfiles as $key => $file): ?>

                                                                            <a  href="<?php echo base_url(); ?>index.php/admin/file/pdf/<?php echo $file->submission_file_path ?>"> <br>
                                              <?php echo $file->submission_file_name ?>
                                             </a>
                                                                            
                                                                        <?php endforeach ?>
                                                                        <input type="file" class="form-control" placeholder=""  name="userFiles[]" value="" multiple>
                                                                        <div class="form-control-focus"> </div>
                                                                        <span class="help-block">Name of Sources</span>
                                                                    </div>
                                                                </div>
                                                                
                                                            





                                                            </div>
                                                            <div class="form-actions">
                                                                <div class="row">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                        <button type="submit" class="btn green">Update</button>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- END FORM-->
                                                    </div>
                                                </div>
                                                <!-- END VALIDATION STATES-->
                                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                               <!--  <script src="<?php echo base_url();?>assets_material/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script> -->

                                               <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
   $('.datepicker').datepicker({
    format: 'dd/mm/yyyy'
 });
</script>