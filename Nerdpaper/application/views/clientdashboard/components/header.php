<style type="text/css">
    @media only screen and (max-width:768px) {
    .custom-toggle {
     display: block !important;    
    }
</style>


<div class="page-header-top" style="background: #29ABE2;">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                                <div class="page-logo">
                                   <a href="<?php echo base_url();?>index.php/home">
                                        <img src="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/img/logo2.png" alt="logo" class="logo-default" style="height:60px;">
                                    </a>
                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="custom-toggle" onclick="showtoggle();" style="color: #fff; position: absolute; right: 13px;top: 13px; font-size: 30px; display: none; z-index: 10000;"> <i class="fa fa-list"></i> </a>
                                <!-- <a href="javascript:;"  class="menu-toggler"> <i class=""></i> </a> -->
                                <!--<a href="" onclick='hidetoggle();' class="menu-toggler customhidetoggler"></a>-->
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">
                                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                                        <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                                        <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                                        <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                            <!-- <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="icon-bell"></i>
                                                <span class="badge badge-default">7</span>
                                            </a> -->
                                            <!-- <ul class="dropdown-menu">
                                               
                                                <li>
                                                     <a href="<?php //echo base_url().'index.php/client/logout'?>">
                                                        <i class="icon-key"></i> Log Out </a>
                                                </li>
                                            </ul> -->
                                            <a href="<?php echo base_url().'index.php/Client/logout'?>" class="" data-toggle="tooltip" data-hover="" data-placement="bottom"  title="logout">
                                                 <i class="icon-logout"></i>
                                            </a>
                                        </li>
                                        <!-- END USER LOGIN DROPDOWN -->
                                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                        <li class="dropdown dropdown-extended quick-sidebar-toggler" >
                                            <span class="sr-only">Toggle Quick Sidebar</span>
                                           
                                        </li>
                                        <!-- END QUICK SIDEBAR TOGGLER -->
                                    </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        
<script type="text/javascript">
     
    function showtoggle()
    {
        var x = true;
        if(x == true)
        {
         $('.page-header-menu').css('display','block');
          $(".page-header-menu").slideDown().delay(5000);
          x = false;
        }else {
            $('.page-header-menu').css('display','none');
          $(".page-header-menu").slideUp().delay(5000);
        }

    }
    
 </script>                        