<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />
        <title><?php echo $title ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #3 for dashboard & statistics" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" /> -->
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets_material/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
         <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


        <!-- END THEME LAYOUT STYLES 
        <link rel="shortcut icon" href="favicon.ico" />
</head>
<body class="page-container-bg-solid">
        <div class="page-wrapper">
        	<div class="page-wrapper-row">
                <div class="page-wrapper-top">
                	<!-- BEGIN HEADER -->
                    <div class="page-header">

                    	<?php $this->load->view('admin/components/header') ?>
                    	<?php $this->load->view('admin/components/header_menu') ?>


                   </div>
                   <!-- End Header -->
                </div>
            </div>

            <!--  -->
            <div class="page-wrapper-row full-height">
            	<div class="page-wrapper-middle">
            		<!-- BEGIN CONTAINER -->
                    <div class="page-container">
                    	<!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                        	<!-- Begin Content Body -->
                        	<!-- Begin Page head -->
                        	
                                   <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                                    <div class="page-title">
                                        <!-- <h1> <?php echo $body_title ?>
                                            
                                        </h1> -->
                                    </div>
                                    <!-- END PAGE TITLE -->
                                    <!-- BEGIN PAGE TOOLBAR -->
                                    <div class="page-toolbar">
                                        <!-- BEGIN THEME PANEL -->
                                        <div class="btn-group btn-theme-panel">
                                            <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-settings"></i>
                                            </a>
                                            <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <h3>THEME COLORS</h3>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <ul class="theme-colors">
                                                                    <li class="theme-color theme-color-default" data-theme="default">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Default</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-blue-hoki" data-theme="blue-hoki">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Blue Hoki</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Blue Steel</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-yellow-orange" data-theme="yellow-orange">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Orange</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-yellow-crusta" data-theme="yellow-crusta">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Yellow Crusta</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <ul class="theme-colors">
                                                                    <li class="theme-color theme-color-green-haze" data-theme="green-haze">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Green Haze</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-red-sunglo" data-theme="red-sunglo">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Red Sunglo</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-red-intense" data-theme="red-intense">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Red Intense</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-purple-plum" data-theme="purple-plum">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Purple Plum</span>
                                                                    </li>
                                                                    <li class="theme-color theme-color-purple-studio" data-theme="purple-studio">
                                                                        <span class="theme-color-view"></span>
                                                                        <span class="theme-color-name">Purple Studio</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 seperator">
                                                        <h3>LAYOUT</h3>
                                                        <ul class="theme-settings">
                                                            <li> Theme Style
                                                                <select class="theme-setting theme-setting-style form-control input-sm input-small input-inline tooltips" data-original-title="Change theme style" data-container="body" data-placement="left">
                                                                    <option value="boxed" selected="selected">Square corners</option>
                                                                    <option value="rounded">Rounded corners</option>
                                                                </select>
                                                            </li>
                                                            <li> Layout
                                                                <select class="theme-setting theme-setting-layout form-control input-sm input-small input-inline tooltips" data-original-title="Change layout type" data-container="body" data-placement="left">
                                                                    <option value="boxed" selected="selected">Boxed</option>
                                                                    <option value="fluid">Fluid</option>
                                                                </select>
                                                            </li>
                                                            <li> Top Menu Style
                                                                <select class="theme-setting theme-setting-top-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change top menu dropdowns style" data-container="body"
                                                                    data-placement="left">
                                                                    <option value="dark" selected="selected">Dark</option>
                                                                    <option value="light">Light</option>
                                                                </select>
                                                            </li>
                                                            <li> Top Menu Mode
                                                                <select class="theme-setting theme-setting-top-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) top menu" data-container="body"
                                                                    data-placement="left">
                                                                    <option value="fixed">Fixed</option>
                                                                    <option value="not-fixed" selected="selected">Not Fixed</option>
                                                                </select>
                                                            </li>
                                                            <li> Mega Menu Style
                                                                <select class="theme-setting theme-setting-mega-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change mega menu dropdowns style" data-container="body"
                                                                    data-placement="left">
                                                                    <option value="dark" selected="selected">Dark</option>
                                                                    <option value="light">Light</option>
                                                                </select>
                                                            </li>
                                                            <li> Mega Menu Mode
                                                                <select class="theme-setting theme-setting-mega-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) mega menu" data-container="body"
                                                                    data-placement="left">
                                                                    <option value="fixed" selected="selected">Fixed</option>
                                                                    <option value="not-fixed">Not Fixed</option>
                                                                </select>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END THEME PANEL -->
                                    </div>
                                    <!-- END PAGE TOOLBAR -->
                                </div>
                            </div>


                            <!-- End page HEAD -->
                            <!-- Begin page Content Body -->
                            
                            <!-- <h1>I am page body</h1> -->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container-fluid">
                                    <!-- BEGIN PAGE BREADCRUMBS -->
                                    <!-- <ul class="page-breadcrumb breadcrumb">
                                        <li>
                                            <a href="index.html">Home</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <?php 
                                                if(isset($breadcrumb))
                                                {

                                                 echo $breadcrumb;
                                                }

                                                ?>
                                            </span>
                                        </li>
                                    </ul> -->
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->

                                    <div class="page-content-inner" >

                                        <?php $this->load->view($mainview) ?>
                                       
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- <h1>End i am page body</h1> -->

                            <!-- End page Content Body -->
                        	<!-- End Page head -->
                        	<!-- End Content Body -->
                        	
                        </div>
                        <!-- End Content -->

                        <!-- END CONTENT -->
                        <!-- BEGIN QUICK SIDEBAR -->
                        <a href="javascript:;" class="page-quick-sidebar-toggler">
                            <i class="icon-login"></i>
                        </a>

                        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                            
                            <?php $this->load->view('admin/components/quick_sidebar') ?>
                        </div>


                    </div>
                    <!-- End Container -->
            	</div>
            </div>


<div class="page-wrapper-row">
                <div class="page-wrapper-bottom">

                    <?php $this->load->view('admin/components/footer') ?>
                    
                </div>
            </div>


        </div>

        <!-- BEGIN QUICK NAV -->
        <nav class="quick-nav">
            <?php $this->load->view('admin/components/quick_nav') ?>
        </nav>
        <!-- End QUICK NAV -->













        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 


<![endif]-->
        <!-- BEGIN CORE PLUGINS -->


        <!-- <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->
        
         <!-- <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/moment.min.js" type="text/javascript"></script> -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets_material/js/moment.js"></script>
        <!-- <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->

        <script src="<?php echo base_url(); ?>assets_material/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
       
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets_material/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets_material/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>

      

        <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets_material/js/notify.min.js"></script> -->


        <!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>