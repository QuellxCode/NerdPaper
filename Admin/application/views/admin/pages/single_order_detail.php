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
                                                                            <?php if (isset($neworder_detail)): 
                                                                            ?>

                                                                            <?php echo $neworder_detail->created_at ?>

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
                                                                            <?php if (isset($neworder_detail)): ?>
                                                                                <?php echo $neworder_detail->order_id; ?>
                                                                            <?php endif ?>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td>  Client Info </td> -->
                                                                    
                                                                   <!--  <td>
                                                                        <span class="text-muted"> 
                                                                            <?php if (isset($neworder_detail)): ?>
                                                                                <?php 
                                                                            echo "Name".'<br>';
                                                                            echo $neworder_detail->client_email.'<br>';
                                                                            echo $neworder_detail->phone.'<br>';
                                                                            


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
                                                                        
                                                                        echo $neworder_detail->document_type;
                                                                         ?>
                                                                             </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Academic Level</td>
                                                                        <td>
                                                                            <span class="text-muted">
                                                                                <?php 
                                                                                echo $neworder_detail->acedamic_level;
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
                                                                        
                                                                        echo $neworder_detail->subject.'<br>';
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
                                                                        
                                                                       echo $neworder_detail->title.' / ';
                                                                         ?> </span>
                                                                    </td>
                                                                </tr>
                                                                  <tr>
                                                                    <td> Citation Style </td>
                                                                    
                                                                    <td>
                                                                        <span class="text-muted"> <?php echo $neworder_detail->citation_style ?> 
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Required Sources </td>
                                                                    
                                                                    <td>
                                                                        <span class="text-muted"> <?php echo $neworder_detail->name_of_sources ?>  </span>
                                                                    </td>
                                                                </tr>
                                                                    <tr>
                                                                        <td> Number of Pages </td>
                                                                    <!-- <td>
                                                                        <a href="javascript:;" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-original-title="Select status"> Active </a>
                                                                    </td> -->
                                                                    <td>
                                                                        <span class="text-muted"> 
                                                                            <?php echo $neworder_detail->no_of_pages; ?>
                                                                        </span>
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
                                                                        echo $neworder_detail->end_date.'<br>';
                                                                        echo $neworder_detail->end_time.'<br>';
                                                                         ?> </span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Description</td>
                                                                    <td class="text-muted">
                                                                        <?php echo $neworder_detail->description ?>
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td> Writer Due Date </td>
                                                               
                                                                    <td>
                                                                        <span class="text-muted"> writer due date will be shown </span>
                                                                    </td>
                                                                </tr> -->
                                                               <!--  <tr>
                                                                    <td> Assign To </td>
                                                                  
                                                                    <td>
                                                                        <span class="text-muted"> Bootstrap datetime </span>
                                                                    </td>
                                                                </tr> -->
                                                                <!-- <tr> -->
                                                                    <!-- <td> Payment Status </td> -->
                                                                  
                                                                  <!--       <td>
                                                                            <span class="text-muted">
                                                                                <?php 
                                                                                if($neworder_detail->payment_status == 0){
                                                  echo '<span class="label label-danger">UnPaid</span>';
                                              }elseif($neworder_detail->payment_status == 1){
                                                  echo '<span class="label label-warning">Half Paid</span>';
                                              }elseif($neworder_detail->payment_status == 2){
                                                  echo '<span class="label label-info">Full Paid</span>';
                                              }

                                                                                ?>
                                                                            </span>
                                                                        </td> -->
                                                                    <!-- </tr> -->
                                                                  
                                                                <tr>
                                                                    <td> Files </td>
                                                                   
                                                                    <td>
                                                                        <span class="text-muted"> 
                                                                           <?php foreach ($files as $key => $file): ?>
                                                                                <p>
                                                                                     
                                                                                  
                                                                                    <a target="_blank" href="<?php echo base_url() ?>documents/<?php echo $file->file_path ?>" download> <br>
                                                                                    <?php echo $file->file_name ?></a>
                                                                                </p>

                                                                                
                                                                                
                                                                            <?php endforeach ?>
                                                                         </span>
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td> Number of Words </td>
                                                                 
                                                                    <td>
                                                                        <span class="text-muted"> 

                                                                        <?php echo $neworder_detail->no_of_words ?>
                                                                         </span>
                                                                    </td>
                                                                </tr> -->
                                                              
                                                                
                                                               <!--  <tr>
                                                                    <td> Notes </td>
                                                                    <td>
                                                                        <div id="note" data-pk="1" data-type="wysihtml5" data-toggle="manual" data-original-title="Enter notes">
                                                                            <?php foreach ($ordernotes as $key => $notes): ?>
                                                                                <p>
                                                                                     <?php echo $notes->note_description ?>
                                                                                </p>

                                                                                
                                                                                
                                                                            <?php endforeach ?>
                                                                       
                                                                        </div>
                                                                    </td>
                                                                    
                                                                        </tr> -->
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>