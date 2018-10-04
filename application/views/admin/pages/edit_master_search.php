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
        <form  class="form-horizontal" id="" action="<?php echo base_url(); ?>index.php/admin/neworder/update_neworder" method="post">
            <div class="form-body">
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                    <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>

                        <input type="hidden" name="order_id" value="<?php if(isset($order)){
                                    echo $order->order_detail_id;
                             }
                              ?>">


                        <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Order Date
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" value="<?php if(isset($order)){
                                    echo $order->created_at;
                             } ?>" name="order_date" disabled="disabled">
                                <div class="form-control-focus"> </div>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Order Id
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="order_id" disabled="disabled" value="NDP-123">
                             <div class="form-control-focus"> </div>
                             <span class="help-block"></span>
                         </div>
                     </div>

                     
                    <div class="form-group form-md-line-input">
                        <label class="col-md-3 control-label" for="form_control_1">Academic Level
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="academic_level" value="<?php if(isset($order)){
                                    echo $order->acedamic_level;
                             } ?>">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">Academic Level</span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-3 control-label" for="form_control_1">Document Type
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="document_type" value="<?php if(isset($order)){
                                    echo $order->document_type;
                             } ?>">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">Document Type</span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-3 control-label" for="form_control_1">Number of Pages
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <div class="input-icon">
                                <input type="number" class="form-control" placeholder="" name="no_of_pages" value="<?php if(isset($order)){
                                    echo $order->no_of_pages;
                             } ?>">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">Number of Pages</span>

                                <!-- <i class="fa fa-bell-o"></i> -->
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-md-line-input">
                        <label class="col-md-3 control-label" for="form_control_1">Number of Words
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <div class="input-icon">
                                <input type="number" class="form-control" placeholder="" name="no_of_words" value="<?php if(isset($order)){
                                    echo $order->no_of_words;
                             } ?>">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">Number of Words</span>
                                <!-- <i class="fa fa-bell-o"></i> -->
                            </div>
                        </div>
                    </div>

                                                                <!-- <div class="form-group form-md-line-input">
                                                                    <label class="col-md-3 control-label" for="form_control_1">Credit Card
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-9">
                                                                        <div class="input-icon right">
                                                                            <input type="text" class="form-control" name="creditcard" placeholder="Enter your card">
                                                                            <div class="form-control-focus"> </div>
                                                                            <i class="fa fa-cc-visa font-green"></i>
                                                                        </div>
                                                                    </div>
                                                                </div> -->

                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-3 control-label" for="form_control_1">Title
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="" name="title" value="<?php if(isset($order)){
                                                                            echo $order->title;
                             } ?>">
                                                                        <div class="form-control-focus"> </div>
                                                                        <span class="help-block">Title</span>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-3 control-label" for="form_control_1">Subject
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="" name="subject" value="<?php if(isset($order)){
                                    echo $order->subject;
                             } ?>">
                                                                        <div class="form-control-focus"> </div>
                                                                        <span class="help-block">Subject</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-3 control-label" for="form_control_1">Order Due Date
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control datepicker" value="<?php if(isset($order)){
                                    echo $order->end_date;
                             } ?>" placeholder="" name="client_due_date">
                                                                        <div class="form-control-focus"> </div>
                                                                        <span class="help-block">Order Due Date</span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-3 control-label" for="form_control_1"> Due Time
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-9">
                                                                        <input type="time" class="form-control " value="<?php if(isset($order)){
                                    echo $order->end_time;
                             } ?>" placeholder="" name="client_due_time">
                                                                        <div class="form-control-focus"> </div>
                                                                        <span class="help-block">Order Due Time</span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-3 control-label" for="form_control_1">Citation Style
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="" name="citation_style" value="<?php if(isset($order)){
                                    echo $order->citation_style;
                             } ?>">
                                                                        <div class="form-control-focus"> </div>
                                                                        <span class="help-block">Citation Style</span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-3 control-label" for="form_control_1">Name of Sources
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="" name="name_of_sources" value="<?php if(isset($order)){
                                    echo $order->name_of_sources;
                             } ?>">
                                                                        <div class="form-control-focus"> </div>
                                                                        <span class="help-block">Name of Sources</span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-3 control-label" for="form_control_1">Description</label>
                                                                    <div class="col-md-9">
                                                                        <textarea class="form-control" name="description" rows="3"><?php echo $order->description; ?></textarea>
                                                                        <div class="form-control-focus"> </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-3 control-label" for="form_control_1">Files
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-9">
                                                                        <input type="file" class="form-control" placeholder="" name="files" value="<?php if(isset($order)){
                                    echo $order->name_of_sources;
                             } ?>" multiple="multiple">
                                                                        <div class="form-control-focus"> </div>
                                                                        <span class="help-block">Name of Sources</span>
                                                                    </div>
                                                                </div>
                                                                
                                                                 <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-offset-2" style="margin-top: 50px;">
                                                                    <h4>Client Information</h4>
                                                                     <hr align="center" width="50%;">
                                                                </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group form-md-line-input">
                        <label class="col-md-3 control-label" for="form_control_1">Name
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="name" value="Dummy">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">Enter your full name</span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-3 control-label" for="form_control_1">Email
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="email" value="<?php if(isset($order)){
                                    echo $order->client_email;
                             } ?>">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">Enter your email</span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-3 control-label" for="form_control_1">Phone
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone" value="<?php if(isset($order)){
                                    echo $order->phone;
                             } ?>">
                                <div class="form-control-focus"> </div>
                                <i class="fa fa-bell-o"></i>
                                <span class="help-block">Enter Phone number currently in use</span>
                            </div>
                        </div>
                    </div>


                                                                <!-- <div class="form-group form-md-line-input">
                                                                    <label class="col-md-3 control-label" for="form_control_1">Payment</label>
                                                                    <div class="col-md-9">
                                                                        <select class="form-control" name="payment" multiple="">
                                                                            <option value="1">Option 1</option>
                                                                            <option value="2">Option 2</option>
                                                                            <option value="3">Option 3</option>
                                                                            <option value="4">Option 3</option>
                                                                            <option value="5">Option 3</option>
                                                                        </select>
                                                                        <div class="form-control-focus"> </div>
                                                                    </div>
                                                                </div> -->





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