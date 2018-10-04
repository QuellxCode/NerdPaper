<link rel="canonical" href="https://nerdpapers.com/contactus/" />
  <!-- <header class="ms-hero-page-override ms-hero-img-city ms-hero-bg-dark"> -->
       <div class="ms-hero-page-override ms-hero-img-team ms-hero-bg-primary">
        <div class="container">
          <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Contact Us</h1>
            <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Do you need a boost in your project?
              <br>Contact us we will help you to finish your dream.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card card-hero animated fadeInUp animation-delay-7">
          <div class="card-body">
            <form class="form-horizontal" action="<?php echo base_url().'index.php/Client/contactUs' ?>" method="POST">
              <fieldset class="container">
                <div class="form-group row">
                  <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Name</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" id="inputName" placeholder="Name" name="cname" required> </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-9">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="cemail" required> </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Subject</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" id="inputSubject" placeholder="Subject" name="csubject" required> </div>
                </div>
                <div class="form-group row">
                  <label for="textArea" class="col-lg-2 control-label">Message</label>
                  <div class="col-lg-9">
                    <textarea class="form-control" rows="3" id="textArea" placeholder="Yout message..." name="cmessage" required></textarea>
                  </div>
                </div>
                <div class="form-group row justify-content-end">
                  <div class="col-lg-10">
                    <button type="submit" class="btn btn-raised btn-primary" style="border-radius: 25px;">Submit</button>
                    <!--<button type="button" class="btn btn-danger" style="border-radius: 25px;">Cancel</button>-->
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
      <!-- container -->
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