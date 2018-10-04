<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <!-- BEGIN HEAD -->
<?php
include(APPPATH.'views/includes/head.php'); 
?>
    <!-- END HEAD -->
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        <!-- BEGIN HEADER -->
<?php 
include(APPPATH.'views/includes/header.php'); 
include(APPPATH.'views/includes/config.php'); 
?>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
<?php 
include(APPPATH.'views/includes/left_sidebar.php'); 
?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Partners Records
                               <!--  <small>buttons extension demos</small> -->
                            </h1>
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
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <h3>HEADER</h3>
                                            <ul class="theme-colors">
                                                <li class="theme-color theme-color-default active" data-theme="default">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Dark Header</span>
                                                </li>
                                                <li class="theme-color theme-color-light " data-theme="light">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Light Header</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                            <h3>LAYOUT</h3>
                                            <ul class="theme-settings">
                                                <li> Layout
                                                    <select class="layout-option form-control input-small input-sm">
                                                        <option value="fluid" selected="selected">Fluid</option>
                                                        <option value="boxed">Boxed</option>
                                                    </select>
                                                </li>
                                                <li> Header
                                                    <select class="page-header-option form-control input-small input-sm">
                                                        <option value="fixed" selected="selected">Fixed</option>
                                                        <option value="default">Default</option>
                                                    </select>
                                                </li>
                                                <li> Top Dropdowns
                                                    <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                        <option value="light">Light</option>
                                                        <option value="dark" selected="selected">Dark</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Mode
                                                    <select class="sidebar-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Menu
                                                    <select class="sidebar-menu-option form-control input-small input-sm">
                                                        <option value="accordion" selected="selected">Accordion</option>
                                                        <option value="hover">Hover</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Position
                                                    <select class="sidebar-pos-option form-control input-small input-sm">
                                                        <option value="left" selected="selected">Left</option>
                                                        <option value="right">Right</option>
                                                    </select>
                                                </li>
                                                <li> Footer
                                                    <select class="page-footer-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
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
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="#">My partners</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Partners</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->

                    <div class="row">
                        <div class="col-md-12">

                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-globe"></i>Your Partners </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th> Id </th>
                                                <th> Name </th>
                                                <th> Email </th>
                                                <th> Contact Number </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php 
// session_start();
// if(isset($_SESSION['user_id'])){
// $userId = $_SESSION['user_id'];   
// $sql_list ="SELECT * FROM user where `user_id` != '$userId' AND `is_deleted` = 0 ";
// $result_list=mysqli_query($con,$sql_list);
// $count=mysqli_num_rows($result_list);
// if($count>=1){

// while($row_list = mysqli_fetch_array($result_list)){

?>  
                                        
                                            <tr>
                                                <td> <?php //echo $row_list['user_id'];?>    </td>
                                                <td> <?php //echo $row_list['user_fname'];?> </td>
                                                <td> <?php //echo $row_list['user_email'];?> </td>
                                                <td> <?php //echo $row_list['user_mobile_numer'];?> </td>
                                                <td>
   <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal"  onclick='detailsModal("<?php //echo $row_list['user_id']; ?>","<?php //echo $row_list['user_fname'].' '.$row_list['user_lname']; ?>","<?php //echo $row_list['user_role']; ?>","<?php //echo $row_list['user_city']; ?>","<?php //echo $row_list['user_mobile_numer']; ?>","<?php //echo $row_list['user_cnic']; ?>")'>
                                                     <i class="fa fa-list-alt"></i>
                                                 </a> 
                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                     <i class="icon-wrench"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default" onclick='deleteUser("<?php //echo $row_list['user_id']; ?>")'>
                                                     <i class="icon-trash"></i>
                                                </a>
                                         </td>
                                            </tr>

<?php //}
// }
// }
//else{
?>
                                           <!-- <tr> Sorry ! No Record Found </tr> -->
<?php 
// }
?>                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>

                    <!-- END PAGE BASE CONTENT -->
                                    <!-- /.modal Begin-->
        <div class="modal fade bs-modal-lg" id="details_modal1" tabindex="-1" role="dialog" aria-hidden="true" style="margin-top: 209px;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Partner Details</h4>
                                                </div>
                                                <div class="modal-body"> 
                          
                                    <table class="table table-bordered table-striped  ">
                                        <thead class="flip-content">
                                            <tr>
                                                <th> Full Name </th>
                                                <th> Profession </th>
                                                <th> Address </th>
                                                <th> Contact </th>
                                                <th> CNIC </th>
                                                <!-- <th> Skills </th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               
                                                <td id='f_name'> </td>
                                                <td id='profession'></td>
                                                <td id='address'> </td>
                                                <td id='contact'>  </td>
                                                <td id='cnic'> </td>
                                               <!--  <td class='skills'> </td> -->
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                           
                            <!-- END SAMPLE TABLE PORTLET-->


                                                 </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn green" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                     <!-- /.modal End -->


                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
<?php 
include(APPPATH.'views/includes/quick_right_sidebar.php'); 
?>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
<?php 
include(APPPATH.'views/includes/footer.php'); 
?>
        <!-- END FOOTER -->
        <!-- BEGIN QUICK NAV -->
<?php 
include(APPPATH.'views/includes/quicknav.php'); 
?>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../../assets_material/global/plugins/respond.min.js"></script>
<script src="../../assets_material/global/plugins/excanvas.min.js"></script> 
<script src="../../assets_material/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
 <!-- BEGIN CORE PLUGINS -->
        <!-- <script src="../assets_material/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets_material/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets_material/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets_material/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets_material/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets_material/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script> -->
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- <script src="../assets_material/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets_material/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets_material/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="../assets_material/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script> -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <!-- <script src="../assets_material/global/scripts/app.min.js" type="text/javascript"></script> -->
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <!-- <script src="../assets_material/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script> -->
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- <script src="../assets_material/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets_material/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script> -->
        <!-- <script src="../assets_material/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="../assets_material/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script> -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
<script type="text/javascript">

function detailsModal(u_id,full_name,u_role,u_address,u_contact,u_cnic)
{
        $(".skills").html("");
        $("#f_name").html(full_name); 
        $("#profession").html(u_role); 
        $("#address").html(u_address); 
        $("#contact").html(u_contact); 
        $("#cnic").html(u_cnic); 


// $.ajax({
//         cache: false,
//         type: 'GET',
//         url: 'actions/get_user_details.php',
//         data: 'user_id=' + u_id,
//         success: function(data) {
//              userSkills = data.split("<br>");
//              uSkills = userSkills[0].split(" ");
//             for (var i = 0 ; i <= uSkills.length - 2; i++) {
//                 // alert(uSkills[i]);
//             if (i == 0 ) {
//                 $('.skills').append('<span class="label label-sm label-success">' + uSkills[i] + '</span>'+' ');
//                 } 
//              if (i == 1 ) {
//                 $('.skills').append('<span class="label label-sm label-primary">' + uSkills[i] + '</span>'+' ');
//                 } 
//              if (i == 2 ) {
//                 $('.skills').append('<span class="label label-sm label-danger">' + uSkills[i] + '</span>'+' ');
//                 } 
//             if (i == 3 ) {
//                 $('.skills').append('<span class="label label-sm label-info">' + uSkills[i] + '</span>'+' ');
//                 } 
//              if (i >= 4 ) {
//                  $('.skills').append('<span class="label label-sm label-success">' + uSkills[i] + '</span>'+' '); 
//             }
//             };

//         }
//     });


 $('#details_modal1').modal('show');
}

</script>


    </body>

</html>