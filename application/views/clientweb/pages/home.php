<style>
.text-align-just { text-align: justify !important;}
.service-h4 {font-size:1.8rem !important;}
.accordion {
  margin: 3em auto;
  max-width: 30em;
}

.toggle {
  display: none;
}

.option {
  position: relative;
  margin-bottom: 1em;
}

.title,
.content {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform: translateZ(0);
          transform: translateZ(0);
  transition: all 0.2s;
}

.title {
  background: #29abe280;
  padding: 1em;
  display: block;
  color: #7A7572;
  font-weight: bold;
}

.title:after, .title:before {
  content: '';
  position: absolute;
  right: 1.25em;
  top: 1.25em;
  width: 2px;
  height: 0.75em;
  background-color: #7A7572;
  transition: all 0.2s;
}

.title:after {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}

.content {
  max-height: 0;
  overflow: hidden;
  background-color: #fff;
}
.content p {
  margin: 0;
  padding: 0.5em 1em 1em;
  font-size: 0.9em;
  line-height: 1.5;
}

.toggle:checked + .title, .toggle:checked + .title + .content {
  box-shadow: 3px 3px 6px #ddd, -3px 3px 6px #ddd;
}
.toggle:checked + .title + .content {
  max-height: 500px;
}
.toggle:checked + .title:before {
  -webkit-transform: rotate(90deg) !important;
          transform: rotate(90deg) !important;
}





</style>
<link rel="canonical" href="https://nerdpapers.com/" />
      <div class="ms-hero ms-hero1 ms-hero-material" id="home">
          <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-8">

              <div id="carousel-hero" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="carousel-caption">
                      <div class="ms-hero-material-text-container">
                        <header class=" animated slideInLeft animation-delay-5" id="centerTextBigScreen" style="margin-top: 1% !important;">
                          
                          <span class="animated fadeInLeft animation-delay-15 font-smoothing">
                            <font class="quote1" style="margin-top: 20px;">"</font>
                            <font class="innerQuote"><b>WE START IT</b> </font> 
                            <br> 
                            <font class="innerQuote" style="margin-left: 25%;"><b>WE FINISH IT</b></font> 
                            <br> 
                        
                            <font class="quoteText" ><b> YOU ACE IT</b></font>
                            <font class="quote2">"</font>
                          </span> 
                      
                        </header>
                        <header class=" animated  animation-delay-5" id="centerTextSmallScreen" style="margin-top: 1% !important; display: none; position: relative;left: -10%;">
                          <center>
                          
                          <span class="animated fadeInLeft animation-delay-15 font-smoothing">
                            <font class="quote1" style="margin-top: 20px; font-size: 90px">"</font>
                            <font class="innerQuote" style="font-size: 30px"><b>WE START IT</b> </font> 
                            <br> 
                            <font class="innerQuote" style="font-size: 30px !important; margin-left: 25%;"><b>WE FINISH IT</b></font> 
                            <br> 
                        
                            <font class="quoteText" style="font-size: 45px;"><b> YOU ACE IT</b></font>
                            <font class="quote2" style="font-size: 90px;">"</font>
                          </span> 
                          </center>
                        </header>

                        <div class="row" id="middleitems">
                          <div class="col-xl-5 col-lg-5">
                          <ul>
                          <li >
                            <div class="ms-list-text animated fadeInRight animation-delay-19"> Deadline Driven</div>
                          </li>
                          <li>
                            
                            <div class="ms-list-text animated fadeInRight animation-delay-21"> Premium Quality</div>
                          </li>
                          <li>
                           
                            <div class="ms-list-text animated fadeInRight animation-delay-23">100 % Plagiarism Free</div>
                          </li>
                          <li >
                          
                            <div class="ms-list-text animated fadeInRight animation-delay-19"> Private and Confidential</div>
                          </li>
                    
                        </ul>
                          </div>

                          <div class="col-lg-5 col-xl-5">
                            <ul >
                              <li>
                            
                            <div class="ms-list-text animated fadeInRight animation-delay-21">Unlimited Revisions</div>
                          </li>
                          <li>
                           
                            <div class="ms-list-text animated fadeInRight animation-delay-23"> Online Order Tracking</div>
                          </li>

                          <li>
                           
                            <div class="ms-list-text animated fadeInRight animation-delay-23"> 24/7 Customer Support</div>
                          </li>
                            </ul>
                          </div>

                           <div class="ms-hero-material-buttons" style="margin-left: 5%; margin-bottom: 50px;">
                          <div class="ms-hero-material-buttons">
                          	<a href="<?php echo base_url(); ?>index.php/Order" class="btn btn-danger btn-raised animated fadeInRight animation-delay-24"  style="border-radius: 25px;">
                              <i class="zmdi zmdi-download"></i> Order Now</a>
                           <a href="javascript:void(Tawk_API.toggle())" class="btn btn-default btn-raised animated fadeInLeft animation-delay-24 mr-2"  style="border-radius: 25px;">
                              <i class="fa fa-send"></i> Chat Now</a>
                            
                          </div>
                        </div>

                        </div>


                        <div class="row" id="middleitems1" style="display: none; position: relative;left: -3%;">
                          <center>
                        	<div class="col-xl-5 col-lg-5 col-md-5 col-xs-5">
                        	<ul>
                          <li >
                            <div class="ms-list-text animated fadeInRight animation-delay-19"> Deadline Driven</div>
                          </li>
                          <li>
                            
                            <div class="ms-list-text animated fadeInRight animation-delay-21"> Premium Quality</div>
                          </li>
                          <li>
                           
                            <div class="ms-list-text animated fadeInRight animation-delay-23">100 % Plagiarism Free</div>
                          </li>
                          <li >
                          
                            <div class="ms-list-text animated fadeInRight animation-delay-19"> Private and Confidential</div>
                          </li>
                    
                        </ul>
                        	</div>

                        	<div class="col-xl-5 col-lg-5 col-md-5 col-xs-5">
                        		<ul >
                        			<li>
                            
                            <div class="ms-list-text animated fadeInRight animation-delay-21">Unlimited Revisions</div>
                          </li>
                          <li>
                           
                            <div class="ms-list-text animated fadeInRight animation-delay-23"> Online Order Tracking</div>
                          </li>

                          <li>
                           
                            <div class="ms-list-text animated fadeInRight animation-delay-23"> 24/7 Customer Support</div>
                          </li>
                        		</ul>
                        	</div>

                        	 <div class="ms-hero-material-buttons" style="margin-left: 30%; margin-bottom: 50px;">
                           
                          <div class="ms-hero-material-buttons">
                          	<a href="<?php echo base_url(); ?>index.php/Order" class="btn btn-danger btn-raised animated fadeInRight animation-delay-24"  style="border-radius: 25px; width: 200px !important;">
                              <i class="zmdi zmdi-download"></i> Order Now</a>
                            <a href="javascript:void(Tawk_API.toggle())"  class="btn btn-default btn-raised animated fadeInLeft animation-delay-24 mr-2"  style="border-radius: 25px; width: 200px !important;">
                              <i class="fa fa-send"></i> Chat Now</a>
                            
                          </div>
                            
                        </div>
                        </center>
                        </div>

                        
                       
                      </div>
                      <!-- ms-hero-material-text-container -->
                    </div>
                  </div>
  <!--  -->
                </div>
              </div>
            </div>

 <!-- Slider End -->  

            <div class="col-xl-4 col-lg-4 " style="margin-top: 10px;" >
              <div class=" ms-hero-img animated zoomInUp animation-delay-30" >
                <img style="pointer-events: none" src="<?php echo base_url(); ?>assets/img/demo/mock-imac-material3.png" alt="High Grade Essay Writing Service - NerdPapers" class="img-fluid">
                
              </div>
            </div>
          </div>
        </div>
        <!-- container -->
      </div>

      <div class="discount-banner wow fadeInLeft animation-delay-5 discountBannerStrip" id="timeOffer" >
          <!-- <img src="<?php echo base_url(); ?>assets/img/off-banner-bg3.png" height="72px" style="width: 100%; position: absolute;"> -->
             <span class="off-side-icon"></span>
             <div class="col-md-12 col-sm-12 col-xs-6">
                 <div class="left-banner" style="position: relative; top: 10px;">
                  <center>
                     <h1 style="font-size:22px !important; color:#000000 !important;">Premium Quality Writing Service</h1> 
                     <h2><span class="title-text fifty"><img class="hourGlassImage" alt="Hour Glass - Essay Writing Service - NerdPapers"  height="57px" width="50px" src="<?php echo base_url(); ?>assets/img/sandglass.gif">50% </span>
                      <span class="offtag">OFF</span>
                      <span class="title-text-small onAllOrder" >N ALL ORDERS  </span> </h2>
                      <span class="timeLimit"> Limited Time Only! </span>
                    </center>
                 </div>
             </div>
            <!--  <div class="col-md-6 col-sm-6 col-xs-12">
                 <div class="right-banner">
                     
                 </div>
             </div> -->
          
         </div>
         <!--end of discount-banner-->


      <div class="discount-banner wow fadeInLeft animation-delay-5 discountBannerStrip" id="timeOffer2"  style="display: none;" >
          <!-- <img src="<?php echo base_url(); ?>assets/img/off-banner-bg3.png" height="72px" style="width: 100%; position: absolute;"> -->
             <span class="off-side-icon"></span>
             <div class="col-md-12 col-sm-12 col-xs-6">
                 <div class="left-banner" style="position: relative; top: 10px;">
                  <center>
                     <h2><span class="title-text fifty" >
                      <img class="hourGlassImage" height="57px" width="50px" src="<?php echo base_url(); ?>assets/img/sandglass.gif">50% </span>
                      <span class="offtag" >OFF</span>
                      <span class="title-text-small onAllOrder2"><br>ON ALL ORDERS  </span> </h2>
                      <span class="timeLimit2" > Limited Time Only! </span>
                    </center>
                 </div>
             </div>
            <!--  <div class="col-md-6 col-sm-6 col-xs-12">
                 <div class="right-banner">
                     
                 </div>
             </div> -->
          
         </div>
         <!--end of discount-banner-->


       <!-- Our Services -->



        <div class="container" id="writers" style="margin-top: 3%;"  >
        	<div id="serviceSlidesonMob" style="padding-top: 6%; display: none;"></div>
        <h2 class="text-center" style="color: black;" ><b>Our Writing Services</b></h2>
         <p class="lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4" style="color: black; margin-top: 2%; text-align:center !important;">Check out <a href="<?php echo base_url(); ?>index.php/services">our services</a> and get the best out of your semester or your projects.

        </p>


         <div id="carousel-example-generic"  class="carousel carousel-cards carousel-fade  slide" data-ride="carousel" data-interval="4000" style="margin-top: -4.5%;">
          <!-- Indicators -->
          <ol class="carousel-indicators" >
            <li data-target="#carousel-example-generic"  data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                               <div class="card animation-delay-6">
                                 <div class="ms-feature ">
                                 <div class="text-center card-body">
                                   <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info">
                                     <i class="ion-clipboard"></i>
                                   </span>
                                   <h3 class="color-info service-h4"> Assignment Writing Service </h3>
                                   <!-- <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p> -->
                                   <a href="<?php echo base_url(); ?>index.php/Order/order_doctype/Assignment" class="btn btn-info btn-raised" style="border-radius: 25px;">Order Now</a>
                                 </div>
                               </div>
                               </div>
                    </div>
                    <div class="col-lg-4">
                              <div class="card animation-delay-8">
                                  <div class="ms-feature ">
                                  <div class="text-center card-body">
                                    <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">
                                      <i class=" ion-document-text"></i>
                                    </span>
                                    <h3 class="color-warning service-h4"> Essay Writing Service</h3>
                                    <!-- <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p> -->
                                    <a href="<?php echo base_url(); ?>index.php/Order/order_doctype/Essay" class="btn btn-warning btn-raised" style="border-radius: 25px;">Order Now</a>
                                  </div>
                                </div>
                                </div>
                    </div>
                    <div class="col-lg-4">
                                <div class="card animation-delay-10">
                                    <div class="ms-feature ">
                                  <div class="text-center card-body">
                                    <span class="ms-icon ms-icon-circle ms-icon-xxlg color-success">
                                      <i class=" ion-ios-copy-outline"></i>
                                    </span>
                                    <h3 class="color-success service-h4">Dissertations</h3>
                                    <!-- <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p> -->
                                    <a href="<?php echo base_url(); ?>index.php/Order/order_doctype/Articles" class="btn btn-success btn-raised" style="border-radius: 25px;">Order Now</a>
                                  </div>
                                </div>
                                </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                            <div class="card animation-delay-6">
                               <div class="ms-feature ">
                               <div class="text-center card-body">
                                 <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-danger">
                                   <i class="fa fa-line-chart"></i>
                                 </span>
                                 <h3 class="color-danger service-h4"> Research Paper Writing Service </h3>
                                 <!-- <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p> -->
                                 <a href="<?php echo base_url(); ?>index.php/Order/order_doctype/Research Paper" class="btn btn-danger btn-raised" style="border-radius: 25px;">Order Now</a>
                               </div>
                             </div>
                             </div>
                    </div>
                    <div class="col-lg-4">
                                <div class="card  animation-delay-8">
                                  <div class="ms-feature ">
                                  <div class="text-center card-body">
                                    <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info">
                                      <i class="fa fa-file-word-o"></i>
                                    </span>
                                    <h3 class="color-info service-h4"> Term Papers</h3>
                                    <!-- <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p> -->
                                    <a href="<?php echo base_url(); ?>index.php/Order/order_doctype/Term Paper" class="btn btn-info btn-raised" style="border-radius: 25px;">Order Now</a>
                                  </div>
                                </div>
                                </div>
                    </div>
                    <div class="col-lg-4">
                                <div class="card animation-delay-10">
                                  <div class="ms-feature ">
                                  <div class="text-center card-body">
                                    <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">
                                      <i class="glyphicon glyphicon-list-alt"></i>
                                    </span>
                                    <h3 class="color-warning service-h4"> Non-Academic Custom Writing</h3>
                                    <!-- <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p> -->
                                    <a href="<?php echo base_url(); ?>index.php/Order" class="btn btn-warning btn-raised" style="border-radius: 25px;">Order Now</a>
                                  </div>
                                </div>
                                </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                                <div class="card animation-delay-6">
                                   <div class="ms-feature ">
                                 <div class="text-center card-body">
                                   <span class="ms-icon ms-icon-circle ms-icon-xxlg color-success">
                                     <i class="ion-ios-search-strong"></i>
                                   </span>
                                   <h3 class="color-success service-h4"> Editing & Proofreading</h3>
                                   <!-- <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p> -->
                                   <a href="<?php echo base_url(); ?>index.php/Order" class="btn btn-success btn-raised" style="border-radius: 25px;">Order Now</a>
                                 </div>
                               </div>
                               </div>
                    </div>
                    <div class="col-lg-4">
                                <div class="card animation-delay-8">
                                 <div class="ms-feature ">
                                 <div class="text-center card-body">
                                   <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-danger">
                                     <i class="fa fa-mortar-board"></i>
                                   </span>
                                   <h3 class="color-danger service-h4"> Thesis Writing Service</h3>
                                   <!-- <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p> -->
                                   <a href="<?php echo base_url(); ?>index.php/Order" class="btn btn-danger btn-raised" style="border-radius: 25px;">Order Now</a>
                                 </div>
                               </div>
                               </div>
                    </div>
                    <div class="col-lg-4">
                              <div class="card animation-delay-10">
                               <div class="ms-feature ">
                               <div class="text-center card-body">
                                 <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">
                                   <i class="ion-ios-paper-outline"></i>
                                 </span>
                                 <h3 class="color-warning service-h4"> Literature Review</h3>
                                 <!-- <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p> -->
                                 <a href="<?php echo base_url(); ?>index.php/Order/order_doctype/Literature Review"" class="btn btn-warning btn-raised" style="border-radius: 25px;">Order Now</a>
                               </div>
                             </div>
                             </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control-prev btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="zmdi zmdi-arrow-left"></i>
          </a>
          <a class="right carousel-control-next btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="zmdi zmdi-arrow-right"></i>
          </a>
        </div>
        

         
      </div>


      <!-- container -->
      <div class="wrap wrap-mountain mt-6">
        <div class="container">
          <h1 class="text-center text-light wow fadeInDown animation-delay-5"><strong>NerdPapers - Online Writing Service </strong></h1>
          <div class="row">
            <!-- <div class="col-lg-6 order-lg-2 mb-4  center-block">
              <img src="<?php echo base_url(); ?>assets/img/demo/mock.png" alt="Essay Writing Service - NerdPapers.com" class="img-fluid center-block wow zoomIn animation-delay-12 "> </div> -->
            <div class="col-lg-12 col-xl-12 order-lg-1" style="margin: none !important;">
            	
            			<p class="wow fadeInLeft animation-delay-6 text-align-just"><a href="https://www.nerdpapers.com">NerdPapers</a> has an experience of over 4 years with great expertise in <a href="<?php echo base_url(); ?>services"> Essay Writing</a>, <a href="<?php echo base_url(); ?>services">Custom Essay Writing</a>, <a href="<?php echo base_url(); ?>services">Thesis Writing</a>, <a href="<?php echo base_url(); ?>services">College Application Essay</a>, and tons of more services. We’ve helped hundreds of students ace their grades with our writing service. Our writing structure has proven to be a grade scorer and has helped those who have a difficulty scoring a good grade. We cover all types of writing from general topic essay writing to technical writing which is why not only we are favorites of our clients for essay and custom essay writing but for thesis writing as well.</p>
            		
            		
            			<p class="wow fadeInRight animation-delay-7 text-align-just">Our experienced writers are always ready to accommodate you in the best way possible and take your troubles of scoring a good grade on their heads. All the <a href="<?php echo base_url(); ?>services"> Essay Writing Services </a> or <a href="<?php echo base_url(); ?>services"> Thesis Writing Services </a> are not only double checked but are delivered with customer satisfaction guarantee.</p>
                        			<p class="wow fadeInRight animation-delay-7 text-align-just"> We are a group of former professional writers from the <a href="https://en.wikipedia.org/wiki/United_States" target="_blank"> US </a> and <a href="https://en.wikipedia.org/wiki/United_Kingdom" target="_blank"> UK </a> who have over 10 years of experience in their respective fields of writing. <a href="<?php echo base_url(); ?>pricing"> Our  prices </a> and our quality has been truly un-matchable which motivates us more and more to write quality <a href="https://nerdpapers.com/services"> essays and thesis </a> for you. </p>
                        
            		</div>
            	</div>
              
              
              <p class="wow fadeInLeft animation-delay-8"></p>
              <center>
            <h2 style="width: 50%; height: 1%; color: white; font-size:2.4rem;" class="  wow fadeInUp animation-delay-4 ">
              When you hire a custom academic writer, you can’t afford second best.
            </h2>
              </center>

              <!-- <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-warning btn-raised mr-1 wow flipInX animation-delay-14">
                  <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                <a href="javascript:void(0)" class="btn btn-info btn-raised wow flipInX animation-delay-16">
                  <i class="zmdi zmdi-case"></i> Button</a>
              </div> -->
            </div>
          </div>
        </div>
      </div>


<!-- 



      <div class="container mt-6">
        <div class="text-center mb-4">
          <h2 class="uppercase color-primary">See our Pricing Plans</h2>
          <p class="lead uppercase">Surprise with our unique features</p>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-3">
            <div class="price-table price-table-info wow zoomInUp animation-delay-2">
              <header class="price-table-header">
                <span class="price-table-category">High School</span>
                <h3>
                  <sup>$</sup>20.00
                  <sub>/ppg.</sub>
                </h3>
              </header>
              <div class="price-table-body">
                <ul class="price-table-list">
                  <li>
                    <i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                  <li>
                    <i class="zmdi zmdi-globe"></i> Voluptate ex quam autem dolor.</li>
                  <li>
                    <i class="zmdi zmdi-settings"></i> Dignissimos velit reic cumque.</li>
                  <li>
                    <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                  <li>
                    <i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  <a href="<?php echo base_url(); ?>index.php/Order" class="btn btn-info btn-raised">
                    <i class="zmdi zmdi-long-arrow-up"></i> Order Now</a>
                </div>
              </div>
            </div>
          </div>

       
          <div class="col-lg-3 " >
            <div class="price-table price-table-success wow zoomInUp animation-delay-2">
              <header class="price-table-header">
                <span class="price-table-category">College-underGraduate</span>
                <h3>
                  <sup>$</sup>22.50
                  <sub>/ppg.</sub>
                </h3>
              </header>
              <div class="price-table-body">
                <ul class="price-table-list">
                  <li>
                    <i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                  <li>
                    <i class="zmdi zmdi-globe"></i> Voluptate ex quam autem dolor.</li>
                  <li>
                    <i class="zmdi zmdi-settings"></i> Dignissimos velit reic cumque.</li>
                  <li>
                    <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                  <li>
                    <i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  <a href="<?php echo base_url(); ?>index.php/Order" class="btn btn-success btn-raised">
                 <i class="zmdi zmdi-long-arrow-up"></i> Order Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="price-table price-table-warning wow zoomInUp animation-delay-2">
              <header class="price-table-header">
                <span class="price-table-category">Master</span>
                <h3>
                  <sup>$</sup>25.00
                  <sub>/ppg.</sub>
                </h3>
              </header>
              <div class="price-table-body">
                <ul class="price-table-list">
                  <li>
                    <i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                  <li>
                    <i class="zmdi zmdi-globe"></i> Voluptate ex quam autem dolor.</li>
                  <li>
                    <i class="zmdi zmdi-settings"></i> Dignissimos velit reic cumque.</li>
                  <li>
                    <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                  <li>
                    <i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  <a href="<?php echo base_url(); ?>index.php/Order" class="btn btn-warning btn-raised">
                    <i class="zmdi zmdi-long-arrow-up"></i> Order Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="price-table price-table-info wow zoomInUp animation-delay-2">
              <header class="price-table-header">
                <span class="price-table-category">Doctoral</span>
                <h3>
                  <sup>$</sup>N/A
                  <sub>/ppg.</sub>
                </h3>
              </header>
              <div class="price-table-body">
                <ul class="price-table-list">
                  <li>
                    <i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                  <li>
                    <i class="zmdi zmdi-globe"></i> Voluptate ex quam autem dolor.</li>
                  <li>
                    <i class="zmdi zmdi-settings"></i> Dignissimos velit reic cumque.</li>
                  <li>
                    <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                  <li>
                    <i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  <a href="<?php echo base_url(); ?>order" class="btn btn-info btn-raised">
                    <i class="zmdi zmdi-long-arrow-up"></i> Order Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 -->
 <!-- Why us Content Start Here -->

   <div class="ms-hero ms-hero-material" id="home" style="background-color: white;">
       <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-6 col-sm-7" style="margin-top: 6%;">
              <h3 style="color: black; font-size:3rem;" class="wow fadeInDown animation-delay-5 "><b>Why choose NerdPapers</b></h3>
              <div class="hr wow fadeInDown animation-delay-5"></div> 
              <p style="margin-top: 3%;" class="wow fadeInUp animation-delay-5 text-align-just "> Worrying for a semester project or an assignment? You've come to the right place. At NerdPapers our aim is to provide you with nothing but the best content on time using which you can excel your essays, thesis, admission writing, assignments and other custom services. <br><br>
                Our clients are our real marketers who have time to time availed <a href="<?php echo base_url(); ?>index.php/Services"> Our Services </a> of Essay Writing, Thesis Writing, and Technical Writing. Not only we provide you quality writing services but that too, at an affordable rate. <br><br>
                        If you’re wondering with queries such as: Best essay writing service, write my paper, write my essay for me, paper writing service or thesis writing service, then <a href="https://www.nerdpapers.com">Nerdpapers</a> is the right place.</b>
              </p>
              <span  ><img src="<?php echo base_url(); ?>assets/img/bage1.png" alt="Best Essay Writing Service - NerdPapers.com" class="wow fadeInLeft animation-delay-8 " style="margin-left: 1%; pointer-events: none;"></span>
              <span><img src="<?php echo base_url(); ?>assets/img/bage2.png" alt="High Quality Essay Writing Service - NerdPapers.com" class="wow fadeInLeft animation-delay-15 " style="margin-left: 3%; pointer-events: none;"></span>
              <span><img src="<?php echo base_url(); ?>assets/img/bage3.png" alt="Money Back Guarantee - Essay Writing Service - NerdPapers.com" class="wow fadeInLeft animation-delay-20 " style="margin-left: 3%; pointer-events: none;"></span>
              <span><img src="<?php echo base_url(); ?>assets/img/bage4.png" alt="Popular Essay Writing Service - NerdPapers.com" class="wow fadeInLeft animation-delay-25 " style="margin-left: 3%; pointer-events: none;"></span>     
            </div>
 <!-- Slider End -->  

            <div class="col-xl-6 col-lg-5 col-md-6 col-sm-5 " style="margin-top: 50px !important;">
              <div class=" wow ms-hero-img animated zoomInUp animation-delay-20">
                <img src="<?php echo base_url(); ?>assets/img/demo/mock-imac-material2.png" alt="Mock Up Essay, Essay Writing Service - NerdPapers.com" style="pointer-events: none;" alt="" class="img-fluid">
                <div id="carousel-hero-img" class="carousel carousel-fade slide" data-ride="carousel" data-interval="5000">
                  <!-- Indicators -->
                  <!-- <ol class="carousel-indicators carousel-indicators-hero-img"> -->
                    <!-- <li data-target="#carousel-hero-img" data-slide-to="0" class="active"></li> -->
                    <!-- <li data-target="#carousel-hero-img" data-slide-to="1"></li> -->
                    <!-- <li data-target="#carousel-hero-img" data-slide-to="2"></li> -->
                  <!-- </ol> -->
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="ms-hero-img-slider carousel-item active">
                      <img src="<?php echo base_url(); ?>assets/img/demo/hero1.png" style="pointer-events: none;" alt="Testimonial - Essay Writing Service - NerdPapers" class="img-fluid "> </div>
                    <div class="ms-hero-img-slider carousel-item">
                      <img src="<?php echo base_url(); ?>assets/img/demo/hero2.png" alt="Testimonial for Thesis Writing - Essay Writing Service - NerdPapers" style="pointer-events: none;" class="img-fluid"> </div>
                    <div class="ms-hero-img-slider carousel-item">
                      <img src="<?php echo base_url(); ?>assets/img/demo/hero3.png" alt="Testimonial for Essay Writing - Essay Writing Service - NerdPapers" style="pointer-events: none;" class="img-fluid"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- container -->
      </div>



   <div class="ms-hero ms-hero-material" id="home" style="background-color: white;">
       <div class="container">
          <div class="row">

            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 ">
              <div class="wow ms-hero-img animated zoomInDown animation-delay-15">
                <img src="<?php echo base_url(); ?>assets/img/demo/whyUs2.png" style="pointer-events: none;" alt="Premium quality Essay writing Service - NerdPapers" class="img-fluid">
               
              </div>
            
             <div class="accordion">
                <div class="option">
                   <input type="checkbox" id="toggle1" class="toggle" />
                   <label class="title fas fa-address-card" for="toggle1">Our Social Media</label>
                     <div class="content">
                     <p>
                        <a href="https://www.facebook.com/nerdpaper1" target="_blank" class="fab fa-facebook-f sm-icon"></a>
                        <a href="https://twitter.com/nerdpapers" target="_blank" class="fab fa-twitter sm-icon"></a>
                        <a href="https://plus.google.com/u/0/110973400535170232490" target="_blank" class="fab fa-google-plus-g sm-icon"></a>
                        <a href="https://www.youtube.com/channel/UCewfl-6GbbOO5NXnlknXTvQ" target="_blank" class="fab fa-youtube sm-icon"></a>
                        <a href="https://www.instagram.com/nerdpapers95/" target="_blank" class="fab fa-instagram sm-icon"></a>
                        <a href="https://www.linkedin.com/in/nerd-papers-5a6957170/" target="_blank" class="fab fa-linkedin-in sm-icon"></a>
                        <a href="https://www.pinterest.com/nerdpapers/" target="_blank" class="fab fa-pinterest-p sm-icon"></a>
                        <a href="https://www.tumblr.com/blog/thenerdpapers" target="_blank" class="fab fa-tumblr sm-icon"></a>
                        <a href="https://www.reddit.com/user/nerdpapers" target="_blank" class="fab fa-reddit sm-icon"></a>
                        <a href="https://the-dots.com/users/nerd-papers-467425" target="_blank" class="fa fa-dot-circle sm-icon"></a>
                        <a href="https://www.xing.com/profile/Nerd_Papers/" target="_blank" class="fab fa-xing sm-icon"></a>
                        <a href="https://myspace.com/nerdpapers" target="_blank" class="fab fa-monero sm-icon"></a>
                        <a href="https://nerdpapers.livejournal.com/" target="_blank" class="fas fa-journal-whills sm-icon"></a>

                     </p>
                     </div>
            </div>

  </div>

            </div>           
            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 "></div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 " style="margin-top: 6%;">
              <p>So the next time you have a query <a href="https://www.nerdpapers.com" target="_blank"> Write my Essay </a> or <a href="https://www.nerdpapers.com" target="_blank"> Write my Thesis </a> you definitely know where to land. Visit our services section and explore our writing services or request custom writing specifically for your requirements. Our experienced writers will make all your essay writing and thesis writing worries go away so order now from a broad selection of writing services that we offer and avail essay writing services, thesis writing service or any academic writing service at cheap rates and forget the worry of write my essay for me.</p>
              <!--<h2 class="whyUsSemicolon" >"</h2>-->
              <h3 class="color-primary whyUsText" style="font-size:1.2rem">When you have professionals helping and <a href="<?php echo base_url(); ?>services"> writing your Essay</a>, <a href="<?php echo base_url(); ?>services">Thesis Writing </a>  and other <a href="https://nerdpapers.com/services">Customized Writing Services </a> there's little or no chance of error.</h5>
              <p style="font-size:1.2rem">For the best:</p>
              <h1 style="font-size:1.2rem; display:inline;">Essay Writing Service</h1>,
              <h1 style="font-size:1.2rem; display:inline;">Thesis Writing Service</h1>,
              <h1 style="font-size:1.2rem; display:inline;">Custom Essay Writing Service</h1>,
              <p style="font-size:1.2rem">Or Queries like:</p>
              <h1 style="font-size:1.2rem; display:inline;">Write my Essay</h1>,
              <h1 style="font-size:1.2rem; display:inline;">Write my Thesis</h1>,
              <h1 style="font-size:1.2rem; display:inline;">Writing Service online</h1>,
              <h1 style="font-size:1.2rem; display:inline;">Writing Service in US</h1>,
              <h1 style="font-size:1.2rem; display:inline;">Writing Service in Europe</h1><br>
              <a href="<?php echo base_url(); ?>order" class="btn btn-danger btn-raised animated fadeInRight animation-delay-10 " style="border-radius: 25px;" > Order Now</a>
            

            </div>
 <!-- Slider End -->  

          </div>
        </div>
        <!-- container -->
      </div>




  <!-- Why us Content End Here -->


    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
    </script>
    <script>
      (function(i, s, o, g, r, a, m)
      {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function()
        {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-90917746-2', 'auto');
      ga('send', 'pageview');
    </script>

     <script src="<?php echo base_url(); ?>assets/js/plugins.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/configurator.min.js"></script>
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tooltipBootstrap.css"></link>
     
