<div class="tab-pane active" id="tab_0">
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>Add Region </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="<?php echo base_url(); ?>index.php/admin/region/save_region/<?php  if (!empty($single_region)) {
                  echo $single_region->region_id;
              } ?>" method="post" class="form-horizontal">
              <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Region Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control input-circle" placeholder="Enter Region" name="region_name" value="<?php if(isset($single_region)){
                     echo $single_region->region_name;
                } ?>">
                        <!--  <span class="help-block"> Pleas </span> -->
                    </div>
                </div>






            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-circle green">Submit</button>
                        <button type="button" class="btn btn-circle grey-salsa btn-outline">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>



<div class="tab-pane active" id="tab_0">
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>Manage Regions </div>
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
                            <th width="8%"> Region Name </th>
                            <th width="5%"> Action</th>
                            
                            <!-- <th>Order Status</th> -->
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $count = 0; ?>
                                                                <?php foreach ($regions as $key => $region): ?>
                                                <?php $count++; ?>
                                           
                                                <tr>

                                                    <td> <?php echo $count; ?> </td>
                                                    <td> <?php echo $region->region_name ?> </td>
                                                    <td>
                                                    <!--  <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal"  onclick='detailsModal("<?php //echo $row_list['user_id']; ?>","<?php //echo $row_list['user_fname'].' '.$row_list['user_lname']; ?>","<?php //echo $row_list['user_role']; ?>","<?php //echo $row_list['user_city']; ?>","<?php //echo $row_list['user_mobile_numer']; ?>","<?php //echo $row_list['user_cnic']; ?>")'>
                                                       <i class="fa fa-list-alt"></i>
                                                   </a> --> 
                                                   <!-- <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() ?>index.php/admin/region/add_region/<?php echo $region->region_id ?>">
                                                       <i class="icon-wrench"></i>
                                                   </a> -->
                                                   <a class="btn btn-circle btn-icon-only btn-danger" href="<?php echo base_url() ?>index.php/admin/region/delete_region/<?php echo $region->region_id ?>">
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


