<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />
        <title><?php echo $title ?> </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #3 for dashboard & statistics" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
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

        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.22.2/dist/sweetalert2.css">

<style type="text/css">
  table.dataTable thead .sorting:after , .sorting_asc:after{
        content: none!important;
  }

  .btn-circle-micro {
  border-radius: 30px!important
}
.portlet>.portlet-title>.tools{
    display: none!important;
}
</style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123281512-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123281512-1');
</script>

</head>
<body class="page-container-bg-solid" id="pagebodyy">
        <div class="page-wrapper">
        	<div class="page-wrapper-row">
                <div class="page-wrapper-top">
                	<!-- BEGIN HEADER -->
                    <div class="page-header">

                    	<?php $this->load->view('clientdashboard/components/header') ?>
                    	<?php $this->load->view('clientdashboard/components/header_menu') ?>


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
                                        <h1> <?php echo $body_title ?>
                                            
                                        </h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                               
                                </div>
                            </div>


                            <!-- End page HEAD -->
                            <!-- Begin page Content Body -->
            
                            <!-- <h1>I am page body</h1> -->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container-fluid">
                                    <!-- BEGIN PAGE BREADCRUMBS -->
                                    
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->

                                    <div class="page-content-inner">

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
                       
                        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                            
                            <?php $this->load->view('clientdashboard/components/quick_sidebar') ?>
                        </div>


                    </div>
                    <!-- End Container -->
            	</div>
            </div>


<div class="page-wrapper-row">
                <div class="page-wrapper-bottom">

                    <?php $this->load->view('clientdashboard/components/footer') ?>
                    
                </div>
            </div>


        </div>

        <!-- BEGIN QUICK NAV -->
        <nav class="quick-nav">
            <?php $this->load->view('clientdashboard/components/quick_nav') ?>
        </nav>
        <!-- End QUICK NAV -->













        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->

        <script src="<?php echo base_url(); ?>assets_material/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/moment.min.js" type="text/javascript"></script>
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

        <script type="text/javascript" src="<?php echo base_url() ?>assets_material/js/notify.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

        <!--Sweet alert script-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.22.2/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript">
  <?php
 if (isset($_SESSION['warning'])){ 
  ?>
$( document ).ready(function() {
swal("<?php echo $_SESSION['warning'] ?>",  "" , "warning");
});
<?php };
unset($_SESSION['warning']);
?>

<?php
 if (isset($_SESSION['success'])){ 
  ?>
$( document ).ready(function() {
swal("<?php echo $_SESSION['success'] ?>",  "" , "success");
});
<?php };
unset($_SESSION['success']);
?>
</script>


<script type="text/javascript">

//  Notification count update
 //  Condition for client login ajax
 $('.row_work').on('click', function(e){
   var submissionID = this.id;
   //alert(submissionID);
   $.ajax({
       type: "POST",
       url: "<?php echo base_url() ?>index.php/Client/updateWorkNotification", 
       data:{submissionID : submissionID},
       cache:false,
       success: 
       function(data){
         window.location.reload();
        //alert(data);
               }
           });
        });


// 
 $('.rev_work').on('click', function(e){
   var revisionID = this.id;
   //alert(revisionID);
   $.ajax({
       type: "POST",
       url: "<?php echo base_url() ?>index.php/Client/updaterevisedWorkNotification", 
       data:{revisionID : revisionID},
       cache:false,
       success: 
       function(data){
         window.location.reload();
        //alert(data);
               }
           });
        });

  $(document).ready(function(){
          $.ajax({
            url: "<?php echo base_url() ?>index.php/Client/downloadworkNotifications",
            cache: false,
            success:
            function (data) {
                  //alert(data);
                        
                        document.getElementById("dow_not").innerHTML  = data;

                    }

                });
        });

// revision work notifications
    $(document).ready(function(){
          $.ajax({
            url: "<?php echo base_url() ?>index.php/Client/revisedworkNotifications",
            cache: false,
            success:
            function (data) {
                  //alert(data);    
                        document.getElementById("rev_not").innerHTML  = data;
                    }

                });
        });
</script>



</body>
</html>