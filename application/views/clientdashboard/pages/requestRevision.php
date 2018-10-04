<meta charset="utf-8" />
<title>NerdPapers</title>


<!-- END THEME LAYOUT STYLES -->
<!-- END PAGE LEVEL PLUGINS -->
          <div class="row">
                        <div class="col-md-12 col-md-offset-0">
                              
                    <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Request Revisions </div>
                            <div class="tools">
                                <a href="" class="collapse"> </a>
                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                <a href="" class="reload"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form" method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>index.php/Client/requestRevisionOrder"  enctype="multipart/form-data">
                                <div class="form-body"><p style="font-weight: 200;font-size: 13px;color: black!important;">
                                    If you need changes, edits, or additions to your downloaded project, please mark revisions here immediately. Your project writer may have a backlog of other work, but if you remain within your deadline period, those tasks will be set aside to provide you with reasonable revisions on a "first come' basis. Changes to original guidelines, however, are not considered revisions. You must provide specific and detailed notes, comments, and instructions when requesting any changes. Extensive changes beyond your original guidelines or project description may incur delivery delays and reasonable additional charges. Your complete satisfaction is our objective, and you are the sole judge of the writing we provide.</p>

                                     <p style="font-weight: 600;font-size: 13px;color: black!important;">Please provide accurate Order ID and include detailed notes below.</p>
                                   <div class="form-group">
                                        <label for="single-prepend-text" class="control-label">Select Order Id For Revision</label>
                                        <div class="input-group select2-bootstrap-prepend">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-select2-open="single-prepend-text">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                </button>
                                            </span>
                                            <select id="single-prepend-text" class="form-control select2" name="orderId">
                                                <option></option>
                                                <?php
                                            foreach($rev_order as $wrt){?>
                                            <option value="<?php echo $wrt->order_id?>">NDP - <?php echo $wrt->order_id?></option>
                                              <?php }?>
                                            </select>
                                        </div>
                                    </div>
 
                                    <div class="form-group">
                                        <label>Revision Note</label>
                                        <textarea class="form-control" rows="5" name="revNote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile1">Revision File</label>
                                        <input type="file" id="exampleInputFile1" name="revFile[]" multiple="">
                                        <p class="help-block"> Please Upload File. </p>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <!-- <button type="button" class="btn default">Cancel</button> -->
                                    <button type="submit" class="btn green">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- portlet end -->
                </div>
            </div>
            <!-- Row end -->


                                    <!-- Modal -->

                                    <div class="modal fade" id="addNote" role="dialog">
                                        <div class="modal-dialog">

                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Add Note</h4>
                                          </div>
                                          <div class="modal-body">
                                              <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin/neworder/add_order_note">

                                                <div class="form-group" id="mytextarea"> 
                                                  <label>Add Note</label>    
                                                  <textarea class="form-control" name="ordernote">

                                                  </textarea>
                                                  <input type="hidden" name="myorder_id" id="orderid" />
                                                  <input type="hidden" name="note_writer" id="note_writer" />
                                              </div>



                                              <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Add</button>
                                          </form>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- EndModal -->

                             <!-- Modal -->

                                    <div class="modal fade mynotemodal"  role="dialog" style="display: none">
                                        <div class="modal-dialog">

                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Notes List</h4>
                                          </div>
                                          <div class="modal-body">
                                              <table class="table table-hover">
                                                  <thead>
                                                      <th>Note id</th>
                                                      <th>Note Description</th>
                                                      <th>Created By</th>
                                                      <th>Date</th>
                                                  </thead>
                                                  <tbody id="noteid">

                                                    
                                                      
                                                  </tbody>
                                              </table>
                                              <p id="modalbody"> </p>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- EndModal -->


                          <!-- BEGIN CORE PLUGINS -->


                          <!-- END THEME LAYOUT SCRIPTS -->
                          <!-- END PAGE LEVEL PLUGINS -->



