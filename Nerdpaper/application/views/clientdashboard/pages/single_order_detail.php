 <div class="portlet light portlet-fit ">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject font-dark sbold uppercase">Order Detail</span>
        </div>
        <div class="actions">
            <!-- <div class="btn-group btn-group-devided" data-toggle="buttons"> -->
                <!-- <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active"> -->
                    <!-- <input type="radio" name="options" class="toggle" id="option1">Actions</label> -->
                    <!-- <label class="btn btn-transparent dark btn-outline btn-circle btn-sm"> -->
                        <!-- <input type="radio" name="options" class="toggle" id="option2">Settings</label> -->
                    <!-- </div> -->
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-12">
                        <table id="user" class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <!-- <td style="width:15%"> Order Id </td> -->
                                                                 
                                                                    <!-- <td style="width:35%">
                                                                        <span class="text-muted"> 
                                                                            <?php if (isset($order_details)): 
                                                                            ?>

                                                                            <?php echo $order_details->created_at ?>

                                                                        <?php endif ?>
                                                                    </span>
                                                                </td> -->
                                                            </tr>
                                                            <tr>
                                                                <td> Order Id </td>
                                                                    <!-- <td>
                                                                        <a href="javascript:;" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-original-title="Enter your firstname"> </a>
                                                                    </td> -->
                                                                    <td>
                                                                        <span class="text-muted"> 
                                                                            <?php if (isset($order_details)):
                                                                            foreach($order_details as $order_details) ?>
                                                                                <?php echo $order_details->order_id; ?>
                                                                            <?php endif ?>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td>  Client Info </td> -->
                                                                    
                                                                   <!--  <td>
                                                                        <span class="text-muted"> 
                                                                            <?php if (isset($order_details)): ?>
                                                                                <?php 
                                                                            echo "Name".'<br>';
                                                                            echo $order_details->client_email.'<br>';
                                                                            echo $order_details->phone.'<br>';
                                                                            


                                                                            ?>
                                                                            <?php endif ?>
                                                                        </span>
                                                                    </td> -->
                                                                </tr>
                                                                <tr>
                                                                    <td> Work Type </td>
                                                                    <!-- <td>
                                                                        <a href="javascript:;" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-original-title="Select group"> Admin </a>
                                                                    </td> -->
                                                                    <td>
                                                                        <span class="text-muted"> 
                                                                            <?php 
                                                                        
                                                                        echo $order_details->document_type;
                                                                         ?>
                                                                             </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Academic Level</td>
                                                                        <td>
                                                                            <span class="text-muted">
                                                                                <?php 
                                                                                echo $order_details->acedamic_level;
                                                                                 ?>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                     <tr>
                                                                    <td> Subject </td>
                                                                    <!-- <td>
                                                                        <a href="javascript:;" id="vacation" data-type="date" data-viewformat="dd.mm.yyyy" data-pk="1" data-placement="right" data-original-title="When you want vacation to start?"> 25.02.2013 </a>
                                                                    </td> -->
                                                                    <td>
                                                                        <span class="text-muted"> <?php 
                                                                        
                                                                        echo $order_details->subject.'<br>';
                                                                         ?> </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Title </td>
                                                                    <!-- <td>
                                                                        <a href="javascript:;" id="vacation" data-type="date" data-viewformat="dd.mm.yyyy" data-pk="1" data-placement="right" data-original-title="When you want vacation to start?"> 25.02.2013 </a>
                                                                    </td> -->
                                                                    <td>
                                                                        <span class="text-muted"> <?php 
                                                                        
                                                                       echo $order_details->title;
                                                                         ?> </span>
                                                                    </td>
                                                                </tr>
                                                                  <tr>
                                                                    <td> Citation Style </td>
                                                                    
                                                                    <td>
                                                                        <span class="text-muted"> <?php echo $order_details->citation_style ?> 
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Required Sources </td>
                                                                    
                                                                    <td>
                                                                        <span class="text-muted"> <?php echo $order_details->name_of_sources ?>  </span>
                                                                    </td>
                                                                </tr>
                                                                    <tr>
                                                                        <td> Number of Pages </td>
                                                                    <!-- <td>
                                                                        <a href="javascript:;" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-original-title="Select status"> Active </a>
                                                                    </td> -->
                                                                    <td>
                                                                        <span class="text-muted"> <?php echo $order_details->no_of_pages ?> </span>
                                                                    </td>
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td>Due Date </td>
                                                                    <!-- <td>
                                                                        <a href="javascript:;" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-original-title="Select Date of birth">
                                                                        </a>
                                                                    </td> -->
                                                                    <td>
                                                                        <span class="text-muted"> <?php 
                                                                        echo $order_details->end_date.'<br>';
                                                                        echo $order_details->end_time.'<br>';
                                                                         ?> </span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Description</td>
                                                                    <td class="text-muted">
                                                                        <?php echo $order_details->description ?>
                                                                    </td>
                                                                </tr>
                                                               
                                                                  
                                                                <tr>
                                                                    <td> Files </td>
                                                                   
                                                                    <td>                                                 
                                                                      <a href="<?php echo base_url(); ?>index.php/file/pdf/<?php echo $order_details->file ?>"><?php echo $order_details->file ?></a>

                                                                    </td>
                                                                </tr>
                                                                
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>