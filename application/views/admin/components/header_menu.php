 <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                                <!-- BEGIN HEADER SEARCH BOX -->
                                <!-- <form class="search-form" action="page_general_search.html" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="query">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form> -->
                                <!-- END HEADER SEARCH BOX -->
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown active">
                                            <a href="javascript:;"> Orders
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" active">
                                                    <a href="<?php echo base_url(); ?>index.php/admin/neworder" class="nav-link  active">
                                                        <i class="icon-bar-chart"></i> New Orders
                                                        <span class="badge badge-success" id="neworder_badge"></span>
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" active">
                                                    <a href="<?php echo base_url(); ?>index.php/admin/neworder/unpaid_orders" class="nav-link  active">
                                                        <i class="icon-bar-chart"></i> Unpaid Orders
                                                        <span class="badge badge-success" id="unpaidorder_badge"></span>
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" active">
                                                    <a href="<?php echo base_url(); ?>index.php/admin/neworder/order_inprocess" class="nav-link  active">
                                                        <i class="icon-bar-chart"></i> Orders in Progress
                                                        <span class="badge badge-success" id="inprocessorder_badge"></span>
                                                    </a>
                                                </li>
                                                <!-- <li aria-haspopup="true" class=" ">
                                                    <a href="dashboard_2.html" class="nav-link  ">
                                                        <i class="icon-bulb"></i> Dashboard 2 </a>
                                                </li> -->
                                                <!-- <li aria-haspopup="true" class=" ">
                                                    <a href="dashboard_3.html" class="nav-link  ">
                                                        <i class="icon-graph"></i> Dashboard 3
                                                        <span class="badge badge-danger">3</span>
                                                    </a>
                                                </li> -->
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  ">
                                            <a href="<?php echo base_url(); ?>index.php/admin/master/master_search"> Master Search
                                                <span class="arrow"></span>
                                            </a>
                                            <!-- <ul class="dropdown-menu" style="min-width: 710px">mas
                                                <li>
                                                     <a href="<?php echo base_url(); ?>index.php/admin/neworder" class="nav-link  active">
                                                        <i class="icon-bar-chart"></i> New Orders
                                                        <span class="badge badge-success">1</span>
                                                    </a>
                                                    
                                                </li>
                                            </ul> -->
                                        </li>

                                        <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  ">
                                            <a href="<?php echo base_url(); ?>index.php/admin/submission/get_all_submissions"> Submissions
                                                <span class="arrow"></span>
                                                <span class="badge badge-success" id="submissions_badge"></span>
                                            </a>
                                            <!-- <ul class="dropdown-menu" style="min-width: 710px">
                                                <li>
                                                     <a href="<?php echo base_url(); ?>index.php/admin/neworder" class="nav-link  active">
                                                        <i class="icon-bar-chart"></i> New Orders
                                                        <span class="badge badge-success">1</span>
                                                    </a>
                                                    
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="<?php echo base_url(); ?>index.php/admin/revision/get_all_revisions"> Revisions
                                                <span class="arrow"></span>
                                            </a>
                                             <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" active">
                                                    <a href="<?php echo base_url(); ?>index.php/admin/revision/get_all_revisions" class="nav-link  active">
                                                         New Revisions
                                                         <span class="badge badge-success" id="newrevision_badge"></span>
                                                         
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" active">
                                                    <a href="<?php echo base_url(); ?>index.php/admin/revision/revision_in_progress" class="nav-link  active">
                                                         Revision in progress
                                                         <span class="badge badge-success" id="inprocessrevision_badge"></span>
                                                         
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" active">
                                                    <a href="<?php echo base_url(); ?>index.php/admin/revision/get_invalid_revisions" class="nav-link  active">
                                                         Invalid Revisions Request
                                                         <span class="badge badge-success" id="invalidrevision_badge"></span>
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" active">
                                                    <a href="<?php echo base_url(); ?>index.php/admin/revision/get_revised_work" class="nav-link  active">
                                                         Revised Work
                                                         <span class="badge badge-success" id="revisedwork_badge"></span>
                                                    </a>
                                                </li>

                                                <li aria-haspopup="true" class=" active">
                                                    <a href="<?php echo base_url(); ?>index.php/admin/revision/getallrevisions" class="nav-link  active">
                                                         All Revisions
                                                        <!-- <span class="badge badge-success">1</span> -->
                                                    </a>
                                                </li>
                                                
                                           
                                            </ul>
                                            
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  mega-menu-full">
                                            <a href="<?php echo base_url(); ?>index.php/admin/leads"> Leads
                                                <span class="arrow"></span>
                                                 <span class="badge badge-success" id="leadsbadge"></span>
                                            </a>
                                            <!-- <ul class="dropdown-menu" style="min-width: ">
                                                <li>
                                                   
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="<?php echo base_url(); ?>index.php/admin/region/add_region"> Regions
                                                <span class="arrow"></span>
                                            </a>
                                            
                                            <ul>
                                                
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="<?php echo base_url(); ?>index.php/admin/role/add_role">
                                                <i class="icon-chart"></i> Roles
                                                <span class="arrow"></span>
                                            </a>
                                           <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" active">
                                                    <a href="<?php echo base_url(); ?>index.php/admin/role/add_role" class="nav-link  active">
                                                         Add Role
                                                        <!-- <span class="badge badge-success">1</span> -->
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" active">
                                                    <a href="<?php echo base_url(); ?>index.php/admin/role/manage_roles" class="nav-link  active">
                                                         Manage Roles
                                                       <!--  <span class="badge badge-success">1</span> -->
                                                    </a>
                                                </li>
                                              
                                                
                                           
                                            </ul>
                                        </li>

                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="javascript:;">
                                                <i class="icon-chart"></i> Stats
                                                <span class="arrow"></span>
                                            </a>
                                           <ul>
                                               
                                           </ul>
                                        </li>

                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="<?php echo base_url() ?>index.php/admin/client">
                                                <i class="icon-chart"></i> Client Accounts
                                                <span class="arrow"></span>
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