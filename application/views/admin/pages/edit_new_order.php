 <!-- BEGIN VALIDATION STATES-->
   <!-- <link href="<?php echo base_url();?>assets_material/js/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
 -->
 <h1>
     <?php 
    //  date_default_timezone_set('America/Los_Angeles');
    // $currentdatetime =  date('Y-m-d H:i:s');
    // echo $currentdatetime;
     ?>
 </h1>

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
        <form  class="form-horizontal" id="" action="<?php echo base_url(); ?>index.php/admin/neworder/update_neworder" method="post" enctype="multipart/form-data">
            <div class="form-body">
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                    <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>

                        <input type="hidden" name="order_id" value="<?php if(isset($order)){
                                    echo $order->order_detail_id;
                             } ?>>


                        <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Order Date
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" value="<?php if(isset($order)){
                                    
                                    $newDate = date("d-m-Y H:i:s", strtotime($order->created_at));

                                 echo $newDate; 
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
                                <input type="text" class="form-control" placeholder="" name="order_id" disabled="disabled" value="<?php if(isset($order)){
                                    echo $order->order_id;
                             } ?>">
                             <div class="form-control-focus"> </div>
                             <span class="help-block"></span>
                         </div>
                     </div>

                     
                    <div class="form-group form-md-line-input">
                        <label class="col-md-3 control-label" for="form_control_1">Academic Level
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <select class="form-control" name="academic_level" id="acedamic_level" value="<?php if(isset($order)){
                                    echo $order->acedamic_level;
                             } ?>" >

                             <option value="">Select Academic Level</option>
                             <option value="High School" <?php if ($order->acedamic_level == 'High School') echo 'selected="selected"'; ?> >High School</option>
                             <option value="College UnderGraduate" <?php if ($order->acedamic_level == 'College UnderGraduate') echo 'selected="selected"'; ?> >College-underGraduate</option>
                             <option value="Masters" <?php if ($order->acedamic_level == 'Masters') echo 'selected="selected"'; ?> >Masters</option>
                             <option value="PHD" <?php if ($order->acedamic_level == 'PHD') echo 'selected="selected"'; ?> >Doctoral</option>


                             </select>
                            <!-- <input type="text" class="form-control" placeholder="" name="academic_level" value="<?php if(isset($order)){
                                    echo $order->acedamic_level;
                             } ?>">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">Academic Level</span> -->
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-3 control-label" for="form_control_1">Document Type
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <select name="document_type" class="form-control" value="<?php if(isset($order)){
                                    echo $order->document_type;
                             } ?>" >
                            <option value="">Select Document Type</option>
                            <option value="Admission Essay" <?php if ($order->document_type == 'Admission Essay') echo 'selected="selected"'; ?> >Admission Essay</option>
                            <option value="Analytical Essay" <?php if ($order->document_type == 'Analytical Essay') echo 'selected="selected"'; ?> >Analytical Essay</option>
                            <option value="Annotated Bibliography" <?php if ($order->document_type == 'Annotated Bibliography') echo 'selected="selected"'; ?> >Annotated Bibliography</option>
                            <option value="Application Letter" <?php if ($order->document_type == 'Application Letter') echo 'selected="selected"'; ?> >Application Letter</option>
                            <option value="Argumentative Essay" <?php if ($order->document_type == 'Argumentative Essay') echo 'selected="selected"'; ?> >Argumentative Essay</option>
                            <option value="Assessment" <?php if ($order->document_type == 'Assessment') echo 'selected="selected"'; ?> >Assessment</option>
                            <option value="Assignment" <?php if ($order->document_type == 'Assignment') echo 'selected="selected"'; ?> >Assignment</option>
                            <option value="Biography" <?php if ($order->document_type == 'Biography') echo 'selected="selected"'; ?> >Biography</option>
                            <option value="Book Reports" <?php if ($order->document_type == 'Book Reports') echo 'selected="selected"'; ?> >Book Reports</option>
                            <option value="Book Reviews" <?php if ($order->document_type == 'Book Reviews') echo 'selected="selected"'; ?> >Book Reviews</option>
                            <option value="Brief Overview" <?php if ($order->document_type == 'Brief Overview') echo 'selected="selected"'; ?> >Brief Overview</option>
                            <option value="Business Plan" <?php if ($order->document_type == 'Business Plan') echo 'selected="selected"'; ?> >Business Plan</option>
                            <option value="College Paper" <?php if ($order->document_type == 'College Paper') echo 'selected="selected"'; ?> >College Paper</option>
                            <option value="Contrast Essay" <?php if ($order->document_type == 'Contrast Essay') echo 'selected="selected"'; ?> >Contrast Essay</option>
                            <option value="Coursework" <?php if ($order->document_type == 'Coursework') echo 'selected="selected"'; ?> >Coursework</option>
                            <option value="Cover letter" <?php if ($order->document_type == 'Cover letter') echo 'selected="selected"'; ?> >Cover letter</option>
                            <option value="Creative Writing" <?php if ($order->document_type == 'Creative Writing') echo 'selected="selected"'; ?> >Creative Writing</option>
                            <option value="Critical Analysis" <?php if ($order->document_type == 'Critical Analysis') echo 'selected="selected"'; ?> >Critical Analysis</option>
                            <option value="Critical Thinking" <?php if ($order->document_type == 'Critical Thinking') echo 'selected="selected"'; ?> >Critical Thinking</option>
                            <option value="Dissertation" <?php if ($order->document_type == 'Dissertation') echo 'selected="selected"'; ?> >Dissertation</option>
                            <option value="Essay" <?php if ($order->document_type == 'Essay') echo 'selected="selected"'; ?> >Essay</option>
                            <option value="Exposition Writing" <?php if ($order->document_type == 'Exposition Writing') echo 'selected="selected"'; ?> >Exposition Writing</option>
                            <option value="Homework" <?php if ($order->document_type == 'Homework') echo 'selected="selected"'; ?> >Homework</option>
                            <option value="Lab Report" <?php if ($order->document_type == 'Lab Report') echo 'selected="selected"'; ?> >Lab Report</option>
                            <option value="Literature Review" <?php if ($order->document_type == 'Literature Review') echo 'selected="selected"'; ?> >Literature Review</option>
                            <option value="Movie Review" <?php if ($order->document_type == 'Movie Review') echo 'selected="selected"'; ?> >Movie Review</option>
                            <option value="Online Assignment" <?php if ($order->document_type == 'Online Assignment') echo 'selected="selected"'; ?> >Online Assignment</option>
                            <option value="Personal Statement" <?php if ($order->document_type == 'Personal Statement') echo 'selected="selected"'; ?> >Personal Statement</option>
                            <option value="Powerpoint Presentation (with speaker notes)" <?php if ($order->document_type == 'Powerpoint Presentation (with speaker notes)') echo 'selected="selected"'; ?> >Powerpoint Presentation (with speaker notes)</option>
                            <option value="Powerpoint Presentation (without speaker notes)" <?php if ($order->document_type == 'Powerpoint Presentation (without speaker notes)') echo 'selected="selected"'; ?> >Powerpoint Presentation (without speaker notes)</option>
                            <option value="Quiz" <?php if ($order->document_type == 'Quiz') echo 'selected="selected"'; ?> >Quiz</option>
                            <option value="Reflection Paper" <?php if ($order->document_type == 'Reflection Paper') echo 'selected="selected"'; ?> >Reflection Paper</option>
                            <option value="Reflective Essay" <?php if ($order->document_type == 'Reflection Essay') echo 'selected="selected"'; ?> >Reflective Essay</option>
                            <option value="Report" <?php if ($order->document_type == 'Report') echo 'selected="selected"'; ?> >Report</option>
                            <option value="Research Essay" <?php if ($order->document_type == 'Research Essay') echo 'selected="selected"'; ?> >Research Essay</option>
                            <option value="Research Paper" <?php if ($order->document_type == 'Research Paper') echo 'selected="selected"'; ?> >Research Paper</option>
                            <option value="Research Proposal" <?php if ($order->document_type == 'Research Proposal') echo 'selected="selected"'; ?> >Research Proposal</option>
                            <option value="Response Essay" <?php if ($order->document_type == 'Response Essay') echo 'selected="selected"'; ?> >Response Essay</option>
                            <option value="Response Paper" <?php if ($order->document_type == 'Response Paper') echo 'selected="selected"'; ?> >Response Paper</option>
                            <option value="Scholarship Essay" <?php if ($order->document_type == 'Scholarship Essay') echo 'selected="selected"'; ?> >Scholarship Essay</option>
                            <option value="School Paper" <?php if ($order->document_type == 'School Paper') echo 'selected="selected"'; ?> >School Paper</option>
                            <option value="Speech" <?php if ($order->document_type == 'Speech') echo 'selected="selected"'; ?> >Speech</option>
                            <option value="Term Paper" <?php if ($order->document_type == 'Term Paper') echo 'selected="selected"'; ?> >Term Paper</option>
                            <option value="Thesis" <?php if ($order->document_type == 'Thesis') echo 'selected="selected"'; ?> >Thesis</option>
                            <option value="Thesis Proposal" <?php if ($order->document_type == 'Thesis Proposal') echo 'selected="selected"'; ?> >Thesis Proposal</option>


                             </select>
                            <!-- <input type="text" class="form-control" placeholder="" name="document_type" value="<?php if(isset($order)){
                                    echo $order->document_type;
                             } ?>">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">Document Type</span> -->
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

                    <div class="form-group form-md-line-input" >
                        <label class="col-md-3 control-label" for="form_control_1">Payment
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-5" style="width: 20%;">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="" id="orderpayment" name="payment" value="<?php if(isset($order)){
$price = $order->order_price;
echo number_format((float)$price, 2, '.', '');
}
?>" >

<input type='checkbox' name='mycheckbox' <?php if($order->payment_status == 0 || $order->payment_status == -1 ){ echo 'checked';} ?> />
<div class="form-control-focus"> </div>
<span class="help-block">payment> </span> 
<span style="color:red;">
<?php if(isset($order)){
if($order->payment_status ==0 || $order->payment_status == -1)
{
$foo = $order->order_price;
$pr = $foo / 2;
echo "Half Paid:";
echo number_format((float)$pr, 2, '.', '');


} }
?>
</span>
<span style="color:green;">
<?php if(isset($order)){
if($order->payment_status ==1 || $order->payment_status == 2)
{
echo "Full Paid";


} }
?>
</span>

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

                                                                        <select name="subject" id="select_subject" onchange="dosometask()" value="<?php if(isset($order)){
                                    echo $order->subject;
                             } ?>" class="form-control" >

                             <option value="">Select Subject</option>
            <option value="Biology and Life Sciences" <?php if ($order->subject == 'Biology and Life Sciences') echo 'selected="selected"'; ?> >Biology and Life Sciences</option>
            <option value="Business and Management" <?php if ($order->subject == 'Business and Management') echo 'selected="selected"'; ?> >Business and Management</option>
            <option value="Chemistry" <?php if ($order->subject == 'Chemistry') echo 'selected="selected"'; ?> >Chemistry</option>
            <option value="Culture" <?php if ($order->subject == 'Culture') echo 'selected="selected"'; ?> >Culture</option>
            <option value="Economics" <?php if ($order->subject == 'Economics') echo 'selected="selected"'; ?> >Economics</option>
            <option value="Education" <?php if ($order->subject == 'Education') echo 'selected="selected"'; ?> >Education</option>
            <option value="English" <?php if ($order->subject == 'English') echo 'selected="selected"'; ?> >English</option>
            <option value="Environmental Science" <?php if ($order->subject == 'Environmental Science') echo 'selected="selected"'; ?> >Environmental Science</option>
            <option value="Finance,Accounting and Banking" <?php if ($order->subject == 'Finance,Accounting and Banking') echo 'selected="selected"'; ?> >Finance, Accounting and Banking</option>
            <option value="Geography" <?php if ($order->subject == 'Geography') echo 'selected="selected"'; ?> >Geography</option>
            <option value="Healthcare and Nursing" <?php if ($order->subject == 'Healthcare and Nursing') echo 'selected="selected"'; ?> >Healthcare and Nursing</option>
            <option value="History and Anthropology" <?php if ($order->subject == 'History and Anthropology') echo 'selected="selected"'; ?> >History and Anthropology</option>
            <option value="HRM" <?php if ($order->subject == 'HRM') echo 'selected="selected"'; ?> >HRM</option>
            <option value="International Relations" <?php if ($order->subject == 'International Relations') echo 'selected="selected"'; ?> >International Relations</option>
            <option value="IT">IT</option>
            <option value="Law and International Law" <?php if ($order->subject == 'Law and International Law') echo 'selected="selected"'; ?> >Law and International Law</option>
            <option value="Linguistics" <?php if ($order->subject == 'Linguistics') echo 'selected="selected"'; ?> >Linguistics</option>
            <option value="Literature" <?php if ($order->subject == 'Literature') echo 'selected="selected"'; ?> >Literature</option>
            <option value="Marketing and PR" <?php if ($order->subject == 'Marketing and PR') echo 'selected="selected"'; ?> >Marketing and PR</option>
            <option value="Maths" <?php if ($order->subject == 'Maths') echo 'selected="selected"'; ?> >Maths</option>
            <option value="Philosophy" <?php if ($order->subject == 'Philosophy') echo 'selected="selected"'; ?> >Philosophy</option>
            <option value="Physics" <?php if ($order->subject == 'Physics') echo 'selected="selected"'; ?> >Physics</option>
            <option value="Political Science" <?php if ($order->subject == 'Political Science') echo 'selected="selected"'; ?> >Political Science</option>
            <option value="Psychology" <?php if ($order->subject == 'Psychology') echo 'selected="selected"'; ?> >Psychology</option>
            <option value="Sociology" <?php if ($order->subject == 'Sociology') echo 'selected="selected"'; ?> >Sociology</option>
            <option value="Statistics" <?php if ($order->subject == 'Statistics') echo 'selected="selected"'; ?> >Statistics</option>
           
            <option value="Project Management" <?php if ($order->subject == 'Project Management') echo 'selected="selected"'; ?> >Project Management</option>
            <option value="Operational_Plan" <?php if ($order->subject == 'Operational_Plan') echo 'selected="selected"'; ?> >Operational Plan</option>
            <option value="Critical review" <?php if ($order->subject == 'Critical review') echo 'selected="selected"'; ?> >Critical review</option>
            <option value="Critical Appraisal" <?php if ($order->subject == 'Critical Appraisal') echo 'selected="selected"'; ?> >Critical Appraisal</option>
            <option value="Capstone"  <?php if ($order->subject == 'Capstone') echo 'selected="selected"'; ?> >Capstone</option>
            <option value="Reflective Thinking" <?php if ($order->subject == 'Reflective Thinking') echo 'selected="selected"'; ?> >Reflective Thinking</option>
            <option value="Other" <?php if ($order->subject != 'Biology and Life Sciences' && $order->subject != 'Business and Management' && $order->subject != 'Chemistry'
&& $order->subject != ' Culture' && $order->subject != 'Economics' && $order->subject != 'Education' 
&& $order->subject != 'English' && $order->subject != 'Environmental ' && $order->subject != 'Science'
&& $order->subject != 'Finance,Accounting and Banking' && $order->subject !== 'Geography' && $order->subject != 'Healthcare and Nursing'
&& $order->subject != 'History and Anthropology' && $order->subject != 'HRM' && $order->subject != 'International Relations'
&& $order->subject != 'Law and International Law' && $order->subject != 'Linguistics' && $order->subject != 'Literature'
&& $order->subject != 'Marketing and PR' && $order->subject != 'Maths' && $order->subject != 'Philosophy' 
&& $order->subject != 'Physics' && $order->subject != 'Political Science' && $order->subject != 'Psychology'
&& $order->subject != 'Sociology' && $order->subject != 'Statistics' && $order->subject != 'Project Management'
&& $order->subject != 'Operational_Plan' && $order->subject != 'Critical review' && $order->subject != 'Critical Appraisal'
&& $order->subject != 'Capstone' && $order->subject != 'Reflective Thinking') echo 'selected="selected"'; ?> >Other</option>                 
                             </select>
                                                                        <!-- <input type="text" class="form-control" placeholder="" name="subject" value="<?php if(isset($order)){
                                    echo $order->subject;
                             } ?>">

                                                                        <div class="form-control-focus"> </div>
                                                                        <span class="help-block">Subject</span> -->

                                                                        <div class="col-md-9" id='showhiddenfield'><br/>
                                                                            <input type='textarea' class='text' name='hiddentext2' id="hiddenField2" value="<?php if(isset($order)){
                                    echo $order->subject;
                             } ?>"  />
                                                                            <br/>
                                                                        </div>


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
                                                                        <select class="form-control" name="client_due_time"
                                                                        value="<?php if(isset($order)){
                                    echo $order->end_time;
                             } ?>">
                             <option value="">Select Time</option>
                            <option value="00:00"<?php if ($order->end_time == '00:00') echo 'selected="selected"'; ?> >00:00</option>
                            <option value="01:00"<?php if ($order->end_time == '01:00') echo 'selected="selected"'; ?> >01:00</option>
                            <option value="02:00"<?php if ($order->end_time == '02:00') echo 'selected="selected"'; ?> >02:00</option>
                            <option value="03:00"<?php if ($order->end_time == '03:00') echo 'selected="selected"'; ?> >03:00</option>
                            <option value="04:00"<?php if ($order->end_time == '04:00') echo 'selected="selected"'; ?> >04:00</option>
                            <option value="05:00"<?php if ($order->end_time == '05:00') echo 'selected="selected"'; ?> >05:00</option>
                            <option value="06:00"<?php if ($order->end_time == '06:00') echo 'selected="selected"'; ?> >06:00</option>
                            <option value="07:00"<?php if ($order->end_time == '07:00') echo 'selected="selected"'; ?> >07:00</option>
                            <option value="08:00"<?php if ($order->end_time == '08:00') echo 'selected="selected"'; ?> >08:00</option>
                            <option value="09:00"<?php if ($order->end_time == '09:00') echo 'selected="selected"'; ?> >09:00</option>
                            <option value="10:00"<?php if ($order->end_time == '10:00') echo 'selected="selected"'; ?> >10:00</option>
                            <option value="11:00"<?php if ($order->end_time == '11:00') echo 'selected="selected"'; ?> >11:00</option>
                            <option value="12:00"<?php if ($order->end_time == '12:00') echo 'selected="selected"'; ?> >12:00</option>
                            <option value="13:00"<?php if ($order->end_time == '13:00') echo 'selected="selected"'; ?> >13:00</option>
                            <option value="14:00"<?php if ($order->end_time == '14:00') echo 'selected="selected"'; ?> >14:00</option>
                            <option value="15:00"<?php if ($order->end_time == '15:00') echo 'selected="selected"'; ?> >15:00</option>
                            <option value="16:00"<?php if ($order->end_time == '16:00') echo 'selected="selected"'; ?> >16:00</option>
                            <option value="17:00"<?php if ($order->end_time == '17:00') echo 'selected="selected"'; ?> >17:00</option>
                            <option value="18:00"<?php if ($order->end_time == '18:00') echo 'selected="selected"'; ?> >18:00</option>
                            <option value="19:00"<?php if ($order->end_time == '19:00') echo 'selected="selected"'; ?> >19:00</option>
                            <option value="20:00"<?php if ($order->end_time == '20:00') echo 'selected="selected"'; ?> >20:00</option>
                            <option value="21:00"<?php if ($order->end_time == '21:00') echo 'selected="selected"'; ?> >21:00</option>
                            <option value="22:00"<?php if ($order->end_time == '22:00') echo 'selected="selected"'; ?> >22:00</option>
                            <option value="23:00" <?php if ($order->end_time == '23:00') echo 'selected="selected"'; ?>>23:00</option>
                                                                            
                                                                        </select>
                                                                        <!-- <input type="time" class="form-control " value="<?php if(isset($order)){
                                    echo $order->end_time;
                             } ?>" placeholder="" name="client_due_time"> -->
                                                                        <div class="form-control-focus"> </div>
                                                                        <span class="help-block">Order Due Time</span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-3 control-label" for="form_control_1">Citation Style
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-9">
                                                                        <select class="form-control" id="citation_style" onchange="dosomething()" name="citation_style" value="<?php if(isset($order)){
                                    echo $order->citation_style;
                             } ?>">
                                <option value="">Select Citation Style</option>
                                <option value="AMA"<?php if ($order->citation_style == 'AMA') echo 'selected="selected"'; ?> > AMA</option>
                                <option value="APA"<?php if ($order->citation_style == 'APA') echo 'selected="selected"'; ?> > APA</option>
                                <option value="AMS"<?php if ($order->citation_style == 'AMS') echo 'selected="selected"'; ?> > AMS</option>
                                <option value="Chicago"<?php if ($order->citation_style == 'Chicago') echo 'selected="selected"'; ?>  >Chicago</option>
                                <option value="MLA"<?php if ($order->citation_style == 'MLA') echo 'selected="selected"'; ?> > MLA</option>
                                <option value="Turbian"<?php if ($order->citation_style == 'Turbian') echo 'selected="selected"'; ?> > Turbian</option>
                                <option value="Harvard"<?php if ($order->citation_style == 'Harvard') echo 'selected="selected"'; ?> > Harvard</option>
                                <option value="IEEE"<?php if ($order->citation_style == 'IEEEE') echo 'selected="selected"'; ?> > IEEE</option>
                               <option value="Other" <?php if ($order->citation_style != 'AMA' && $order->citation_style != 'APA' && 
                                $order->citation_style != 'AMS' && $order->citation_style != 'Chicago' && $order->citation_style != 'MLA' && 
                                $order->citation_style != 'Turbian' && $order->citation_style != 'Harvard' && $order->citation_style != 'IEEEE') echo 'selected="selected"'; ?> >Other</option>
                                                                        </select>

                                                                        <!-- <input type="text" class="form-control" placeholder="" name="citation_style" id="hiddenother" style="display:none"> -->

                                                                            <div class="col-md-9" id='showhidden'><br/>
                                                                                <input type='textarea' class='text' name='hiddentext' id="hiddenField" value="<?php if(isset($order)){
echo $order->citation_style;
} ?>" />
                                                                                <br/>
                                                                            </div>


                                                                        <!-- <div class="form-control-focus">
                                                                        <input type="text" name="hiddenField" class="form-control" id="hiddenField"> 
                                                                        </div> -->
                                                                        <!-- <span class="help-block">Citation Style</span> -->
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
                                                                    <div class="row">
                                                                        <div class="col-md-offset-3">
                                                                    <?php $this->load->helper('getorderfiles'); 
                                          $table_free_booked = get_order_files($order->order_detail_id);

                                          ?>

                                          <?php $j = 0; ?>
                                          <?php foreach ($table_free_booked as $key => $value): ?>

                                            <?php $j++; ?>

                                             <a target="_blank" id="or_file<?php echo $j; ?>" href="<?php echo base_url() ?>documents/<?php echo $value->file_path ?>" download> <br>
                                              <?php echo $value->file_name ?>

                                             </a>
                                             <span id="or_file_span<?php echo $j;  ?>" onclick="remove_order_file(<?php echo $value->order_files_id ?>, <?php echo $j ?>);"><i class="glyphicon glyphicon-remove" style="color:red;"></i></span>
                                          <?php endforeach ?>
                                          </div>
                                                    </div>

                                                                    <label class="col-md-3 control-label" for="form_control_1">Files
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-9">
                                                                        
                             <input type="file" name="userFiles[]" class="form-control" id="add_revision_file" multiple="multiple">
                                                                        <div class="form-control-focus"> </div>
                                                                        <span class="help-block">Name of Sources</span>
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
                            <input type="text" class="form-control" placeholder="" name="name" value="<?php if(isset($order)){
                                    echo $order->client_name;
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
                                                <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
                                               <!--  <script src="<?php echo base_url();?>assets_material/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script> -->

                                               <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
   $('.datepicker').datepicker({
    format: 'mm/dd/yyyy'
 });
</script>

<script type="text/javascript">
    
    function remove_order_file($orderfile_id,$count)
    {
        $.ajax({

            method : "POST",
            url : '<?php echo base_url() ?>index.php/admin/neworder/remove_neworder_file',
            data : {order_file_id : $orderfile_id},
            dataType : "text",
            success : function(data)
            {
                //alert(data);

                if(data == 'success')
                    $("#or_file"+$count).hide();
                    $("#or_file_span"+$count).hide();
                }
            }


        });
    }
</script>

 <script type="text/javascript">
 var bool = false;
    function cutprice()
    {

       

       //var $checked = $('#orderpayment').is(":checked");
       var $checked = $("#halfpaid").val();
       //alert($checked);
       
       if($checked)
       {
       bool = true;
       //alert("checked");
        $currentprice =  $("#orderpayment").val();
       $newprice = $currentprice / 2;
        $("#orderpayment").val($newprice);
       }
       else{
       bool = false;
       //alert("not checked");
       $currentprice =  $("#orderpayment").val();
       $newprice = $currentprice * 2;
        $("#orderpayment").val($newprice);
       }
       
    }
</script>

<script type="text/javascript">
    function dosometask()
    {
        //alert('Ready to do some Task');

        var sub = $("#select_subject").val();

        if(sub == 'Other')
        {
            $('#hiddenField2').show();
        }
        else
        {
            $('#hiddenField2').hide();
        }
    }
</script>

<script type="text/javascript">

     $(document).ready(function() {

        //alert('in document.ready');

        //$("#hiddenField2").css("display","none");

        var subs = $("#select_subject").val();
        //alert(subs);
        if (subs != 'Other') 
        {
            $("#hiddenField2").css("display","none");
        }

        else
        {
            $("#hiddenField2").css("display","block");
        }
    });
    
</script>


<script type="text/javascript">

    function dosomething()
    {
        // alert('Hello');
        var cstyle = $("#citation_style").val();
        //alert(cstyle);

        if (cstyle == 'Other') 
        {
            $("#hiddenField").show();
        }
        else 
        {
            $("#hiddenField").hide();
        }
    }

</script>

<script type="text/javascript">

    $(document).ready(function() {

        // alert('in document.ready');

        // $("#hiddenField").css("display","none");
        var citation = $("#citation_style").val();
        // alert(citation);
        if (citation != 'Other') 
        {
            $("#hiddenField").css("display","none");
        }

        else
        {
            $("#hiddenField").css("display","block");
        }
    });

</script>