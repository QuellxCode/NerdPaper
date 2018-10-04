      <meta charset="utf-8" />
        <title>Metronic Admin Theme #3 | Editable Datatables</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #3 for editable datatable samples" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets_material/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

  <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-settings font-red"></i>
                                                            <span class="caption-subject font-red sbold uppercase">Editable Table</span>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                                <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                                                                    <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                                <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                                                    <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-toolbar">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="btn-group">
                                                                        <button id="sample_editable_1_new" class="btn green"> Add New
                                                                            <i class="fa fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="btn-group pull-right">
                                                                        <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                                            <i class="fa fa-angle-down"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu pull-right">
                                                                            <li>
                                                                                <a href="javascript:;"> Print </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;"> Save as PDF </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;"> Export to Excel </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                            <thead>
                                                                <tr>
                                                                    <th> Username </th>
                                                                    <th> Full Name </th>
                                                                    <th> Points </th>
                                                                    <th> Notes </th>
                                                                    <th> Edit </th>
                                                                    <th> Delete </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td> alex </td>
                                                                    <td> Alex Nilson </td>
                                                                    <td> 1234 </td>
                                                                    <td class="center"> power user </td>
                                                                    <td>
                                                                        <a class="edit" href="javascript:;"> Edit </a>
                                                                    </td>
                                                                    <td>
                                                                        <a class="delete" href="javascript:;"> Delete </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> lisa </td>
                                                                    <td> Lisa Wong </td>
                                                                    <td> 434 </td>
                                                                    <td class="center"> new user </td>
                                                                    <td>
                                                                        <a class="edit" href="javascript:;"> Edit </a>
                                                                    </td>
                                                                    <td>
                                                                        <a class="delete" href="javascript:;"> Delete </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> nick12 </td>
                                                                    <td> Nick Roberts </td>
                                                                    <td> 232 </td>
                                                                    <td class="center"> power user </td>
                                                                    <td>
                                                                        <a class="edit" href="javascript:;"> Edit </a>
                                                                    </td>
                                                                    <td>
                                                                        <a class="delete" href="javascript:;"> Delete </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> goldweb </td>
                                                                    <td> Sergio Jackson </td>
                                                                    <td> 132 </td>
                                                                    <td class="center"> elite user </td>
                                                                    <td>
                                                                        <a class="edit" href="javascript:;"> Edit </a>
                                                                    </td>
                                                                    <td>
                                                                        <a class="delete" href="javascript:;"> Delete </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> alex </td>
                                                                    <td> Alex Nilson </td>
                                                                    <td> 1234 </td>
                                                                    <td class="center"> power user </td>
                                                                    <td>
                                                                        <a class="edit" href="javascript:;"> Edit </a>
                                                                    </td>
                                                                    <td>
                                                                        <a class="delete" href="javascript:;"> Delete </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> webriver </td>
                                                                    <td> Antonio Sanches </td>
                                                                    <td> 462 </td>
                                                                    <td class="center"> new user </td>
                                                                    <td>
                                                                        <a class="edit" href="javascript:;"> Edit </a>
                                                                    </td>
                                                                    <td>
                                                                        <a class="delete" href="javascript:;"> Delete </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> gist124 </td>
                                                                    <td> Nick Roberts </td>
                                                                    <td> 62 </td>
                                                                    <td class="center"> new user </td>
                                                                    <td>
                                                                        <a class="edit" href="javascript:;"> Edit </a>
                                                                    </td>
                                                                    <td>
                                                                        <a class="delete" href="javascript:;"> Delete </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> alex </td>
                                                                    <td> Alex Nilson </td>
                                                                    <td> 1234 </td>
                                                                    <td class="center"> power user </td>
                                                                    <td>
                                                                        <a class="edit" href="javascript:;"> Edit </a>
                                                                    </td>
                                                                    <td>
                                                                        <a class="delete" href="javascript:;"> Delete </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- END EXAMPLE TABLE PORTLET-->

                                                   <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets_material/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets_material/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets_material/assets/pages/scripts/table-datatables-editable.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->