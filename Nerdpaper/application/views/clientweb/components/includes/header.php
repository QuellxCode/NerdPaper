      
      <style type="text/css">
     
        @media only screen and (min-width: 1050px) {
          #hidden_menu {
              display: none;
          }
        }
      </style>

      <header class="ms-header ms-header-primary">
        <!--ms-header-primary-->
        <div class="container container-full">
          <div class="ms-title">
            <a href="<?php echo base_url(); ?>/home">
              <img src="<?php echo base_url(); ?>assets/img/logo2.png" alt="NerdPapers Logo - Essay Writing Service" style="">
              <!-- <span class="ms-logo animated zoomInDown animation-delay-5">j</span>
              <h1 class="animated fadeInRight animation-delay-6">Material
                <span>Style</span>
              </h1> -->
            </a>
          </div>
          <div class="header-right">
            <!--<div class="share-menu">-->
            <!--  <ul class="share-menu-list">-->
            <!--    <li class="animated fadeInRight animation-delay-3">-->
            <!--      <a href="javascript:void(0)" class="btn-circle btn-google">-->
            <!--        <i class="zmdi zmdi-google"></i>-->
            <!--      </a>-->
            <!--    </li>-->
            <!--    <li class="animated fadeInRight animation-delay-2">-->
            <!--      <a href="javascript:void(0)" class="btn-circle btn-facebook">-->
            <!--        <i class="zmdi zmdi-facebook"></i>-->
            <!--      </a>-->
            <!--    </li>-->
            <!--    <li class="animated fadeInRight animation-delay-1">-->
            <!--      <a href="javascript:void(0)" class="btn-circle btn-twitter">-->
            <!--        <i class="zmdi zmdi-twitter"></i>-->
            <!--      </a>-->
            <!--    </li>-->
            <!--  </ul>-->
            <!--  <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">-->
            <!--    <i class="zmdi zmdi-share"></i>-->
            <!--  </a>-->
            <!--</div>-->
            <?php if(!isset($_SESSION['clientId'])){?>
            <a href="javascript:void(0)" id="dashboardbtn" onclick="testme();" data-tt="tooltip"  title="Login" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
              <i class="zmdi zmdi-account"></i>
            </a>
            	<a href="javascript:void(0)" id="dashboardbtn" onclick="testme();" data-tt="tooltip" title='Register'  title="Register" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#register">
              <i class="zmdi zmdi-account-add"></i>
            </a>
            <!--<form class="search-form animated zoomInDown animation-delay-9">-->
            <!--  <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q" />-->
            <!--  <label for="search-box">-->
            <!--    <i class="zmdi zmdi-search"></i>-->
            <!--  </label>-->
            <!--</form>-->
            <?php }else{?>
          <a href="<?php echo base_url().'index.php/Client/orderList' ?>" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="tooltip" data-placement="bottom" title="Dashboard">
              <i class="zmdi zmdi-account"></i></a> <?php echo $_SESSION['uname']?>

              <a href="<?php echo base_url().'index.php/Client/logout' ?>" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="tooltip" data-placement="bottom" title="logout">
              <i class="zmdi zmdi-sign-in"></i></a> 
            <?php } ?>
            
            <a href="javascript:void(0)" id="hidden_menu" class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left animated zoomInDown animation-delay-10">
              <i class="zmdi zmdi-menu"></i>
            </a>
          </div>
        </div>
      </header>
      