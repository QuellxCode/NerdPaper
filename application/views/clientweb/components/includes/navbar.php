     
	


      <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-primary" id="mainnav">
        <div class="container container-full">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
              <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" style="height: 48px;">
             <!--  <span class="ms-logo ms-logo-sm">M</span>
              <span class="ms-title">Material
                <strong>Style</strong>
              </span> -->
            </a>
          </div>
          <div class="collapse navbar-collapse" id="ms-navbar">
            <?php 
            foreach($current_view as $curr);
            $current =  $curr;
           // echo $current;
            // die();

              ?>
            <ul class="navbar-nav">
              <li class="nav-item dropdown <?php echo ($current=="home")? 'active': '';?>">
                <a  href="<?php echo base_url(); ?>home" class="nav-link <?php echo ($current=="home")? 'active': '';?>">Home
                  <!-- <i class="zmdi zmdi-chevron-down"></i> -->
                </a>

              </li>
              
               <li class="nav-item dropdown <?php echo ($current=="order")? 'active': '';?>">
                <a  href="<?php echo base_url(); ?>order" class="nav-link <?php echo ($current=="order")? 'active': '';?>">Order Now
                  <!-- <i class="zmdi zmdi-chevron-down"></i> -->
                </a>
              </li>
              
              
               <li class="nav-item dropdown <?php echo ($current=="our_writers")? 'active': '';?>">
                <a  href="<?php echo base_url(); ?>writer" class="nav-link <?php echo ($current=="our_writers")? 'active': '';?>">Our writers
                 <!--  <i class="zmdi zmdi-chevron-down"></i> -->
                </a>


              </li>
              
               <li class="nav-item dropdown <?php echo ($current=="pricing")? 'active': '';?>">
                <a  href="<?php echo base_url(); ?>pricing" class="nav-link <?php echo ($current=="home")? 'pricing': '';?>">Pricing
                  <!-- <i class="zmdi zmdi-chevron-down"></i> -->
                </a>
              </li>
              
           <!--   <li class="nav-item dropdown active">-->
           <!--     <a  href="our-writers.php" class="nav-link">Services-->
                 <!--  <i class="zmdi zmdi-chevron-down"></i> -->
           <!--     </a>-->
			        <!--</li>-->
			        
			        <li class="nav-item dropdown <?php echo ($current=="services")? 'active': '';?>">
             <a  href="<?php echo base_url(); ?>services" class="nav-link <?php echo ($current=="services")? 'active': '';?>">Services
                   
              </a>


             </li>
              
             
              <li class="nav-item dropdown dropdown-megamenu-container <?php echo ($current=="faqs")? 'active': '';?>">
                <a  href="<?php echo base_url(); ?>faq" class="nav-link <?php echo ($current=="faqs")? 'active': '';?>">FAQs
                 <!--  <i class="zmdi zmdi-chevron-down"></i> -->
                </a>
              </li>

             
              
            

             

              <li class="nav-item dropdown <?php echo ($current=="about_us")? 'active': '';?>">
                <a  href="<?php echo base_url(); ?>aboutus" class="nav-link <?php echo ($current=="about_us")? 'active': '';?>">About Us
                  <!-- <i class="zmdi zmdi-chevron-down"></i> -->
                </a>
              </li>
              
              <li class="nav-item dropdown <?php echo ($current=="contact_us")? 'active': '';?>">
                <a  href="<?php echo base_url(); ?>contactus" class="nav-link <?php echo ($current=="about_us")? 'active': '';?>">Contact Us
                  <!-- <i class="zmdi zmdi-chevron-down"></i> -->
                </a>
              </li>
              <span id="userlogin" style="display: none;">
              
                <?php if(!isset($_SESSION['clientId'])){?>
                <li class="nav-item dropdown" >
            <a href="javascript:void(0)" class="btn-circle no-focus animated animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
              <i class="zmdi zmdi-account" style="margin-left: 0px;"></i>
            </a>
          </li>
            <?php }else{?>
            <li class="nav-item dropdown">
          <a href="<?php echo base_url().'Client/orderList' ?>" class="btn-circle btn-circle-primary no-focus zoomInDown animation-delay-8" data-toggle="tooltip" data-placement="bottom" title="Dashboard" style="width: 100%;">
              <i class="zmdi zmdi-account" style="margin-left: 0px;"></i></a> <!-- <span style="margin-top: 13px;"><?php //echo $_SESSION['uname']?></span> -->
           </li>
            <?php } ?>
              

            </ul>
          </div>
          <a href="javascript:void(0)" id="hidden_menu" class="ms-toggle-left btn-navbar-menu">
            <i class="zmdi zmdi-menu"></i>
          </a>
        </div>
        <!-- container -->
      </nav>