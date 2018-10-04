 <!-- BEGIN HEADER MENU -->
 <style type="text/css">
     .menu_li{
    font-size: 1.6rem !important;
    color: #fff !important;
     }
     .page-header .page-header-menu .hor-menu .navbar-nav>li.active>a, .page-header .page-header-menu .hor-menu .navbar-nav>li.active>a:hover, .page-header .page-header-menu .hor-menu .navbar-nav>li.current>a, .page-header .page-header-menu .hor-menu .navbar-nav>li.current>a:hover{
        background: #fdfdfd!important;
    color: #29abe2!important;
     }
 </style>
                        <div class="page-header-menu custom-menu" id="myDIV">
                            <div class="container">
                                <!-- BEGIN HEADER SEARCH BOX -->
                               
                                <!-- END HEADER SEARCH BOX -->
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu  ">
                                    <?php 
                                    foreach($current_view as $curr);
                                    $current =  $curr;
                                      ?>
                                    <ul class="nav navbar-nav">
                                        <li aria-haspopup="true" class="mega-menu-full mega-menu-full <?php echo ($current == 'myAccount')?'active':''?>">
                                            <a class="menu_li" href="<?php echo base_url();?>index.php/Client/myAccount">
                                                <i class="icon-chart"></i> My Account
                                                <!-- <span class="arrow"></span> -->
                                            </a>
                                           <ul>
                                               
                                           </ul>
                                        </li>
                                        <li aria-haspopup="true" class="<?php echo ($current == "Dashboard")?'active':''?>">
                                            <a class="menu_li" href="<?php echo base_url();?>index.php/Client/orderList"> Order History
                                                <!-- <span class="arrow"></span> -->
                                            </a>
                                        </li>
                                        <li aria-haspopup="true" class="mega-menu-full <?php echo ($current == 'downloadWork')?'active':''?>">
                                            <a class="menu_li" href="<?php echo base_url();?>index.php/Client/downloadWork"> Download work
                                                <span class="badge badge-success" id="dow_not">0 </span>
                                                <!-- <span class="arrow"></span> -->
                                            </a>
                                            
                                        </li>
                                        <li aria-haspopup="true" class="mega-menu-full <?php echo ($current == 'Revisions')?'active':''?>">
                                            <a class="menu_li" href="<?php echo base_url();?>index.php/Client/requestRevisions"> Revised Work
                                                <!-- <span class="arrow"></span> -->
                                                <span class="badge badge-primary" id="rev_not">0 </span>
                                            </a>
                                            <ul class="dropdown-menu" style="min-width: ">
                                                <li>
                                                   
                                                </li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="mega-menu-full <?php echo ($current == 'RevisedWork')?'active':''?>">
                                            <a class="menu_li" href="<?php echo base_url();?>index.php/Client/requestsingleRevision"> Request Revision
                                                <!-- <span class="arrow"></span> -->
                                            </a>
                                            
                                            <ul>
                                                
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown mega-menu-full <?php echo ($current == 'order')?'active':''?>">
                                            <a class="menu_li" href="<?php echo base_url();?>index.php/Order/"> Order Now
                                                <!-- <span class="arrow"></span> -->
                                            </a>
                                            
                                            <ul>
                                                
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->