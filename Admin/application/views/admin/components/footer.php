     <!-- BEGIN FOOTER -->
                    <!-- BEGIN PRE-FOOTER -->
                    <div class="page-prefooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>About</h2>
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                                    <h2>Subscribe Email</h2>
                                    <div class="subscribe-form">
                                        <form action="javascript:;">
                                            <div class="input-group">
                                                <input type="text" placeholder="mail@email.com" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn" type="submit">Submit</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Follow Us On</h2>
                                    <ul class="social-icons">
                                        <li>
                                            <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Contacts</h2>
                                    <address class="margin-bottom-40"> Phone: +923319127872
                                        <br> Email:
                                        <a href="mailto:info@metronic.com">info@qullexcode.com</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <script>
                    window.setInterval(function(){
  /// call your function here
  $.ajax({
    url: '<?php echo base_url() ?>index.php/admin/leads/callfunc', 
    success: function(data) {
      $("#leadsbadge").text(data);
      //alert(data);
    }
  });
}, 5000);




window.setInterval(function(){
  /// call your function here
  $.ajax({
    url: '<?php echo base_url() ?>index.php/admin/neworder/unpaidorders_count', 
    success: function(data) {
      $("#unpaidorder_badge").text(data);
      //alert(data);
    }
  });
}, 5000);


window.setInterval(function(){
  /// call your function here
  $.ajax({
    url: '<?php echo base_url() ?>index.php/admin/neworder/neworders_count', 
    success: function(data) {
      $("#neworder_badge").text(data);
      //alert(data);
    }
  });
}, 5000);


window.setInterval(function(){
  /// call your function here
  $.ajax({
    url: '<?php echo base_url() ?>index.php/admin/neworder/inprocessorders_count', 
    success: function(data) {
      $("#inprocessorder_badge").text(data);
      //alert(data);
    }
  });
}, 5000);



window.setInterval(function(){
  /// call your function here
  $.ajax({
    url: '<?php echo base_url() ?>index.php/admin/submission/submissions_count', 
    success: function(data) {
      $("#submissions_badge").text(data);
      //alert(data);
    }
  });
}, 5000);


window.setInterval(function(){
  /// call your function here
  $.ajax({
    url: '<?php echo base_url() ?>index.php/admin/revision/newrevisions_count', 
    success: function(data) {
      $("#newrevision_badge").text(data);
      //alert(data);
    }
  });
}, 5000);


window.setInterval(function(){
  /// call your function here
  $.ajax({
    url: '<?php echo base_url() ?>index.php/admin/revision/inprocessrevisions_count', 
    success: function(data) {
      $("#inprocessrevision_badge").text(data);
      //alert(data);
    }
  });
}, 5000);


window.setInterval(function(){
  /// call your function here
  $.ajax({
    url: '<?php echo base_url() ?>index.php/admin/revision/invalidrevisions_count', 
    success: function(data) {
      $("#invalidrevision_badge").text(data);
      //alert(data);
    }
  });
}, 5000);


window.setInterval(function(){
  /// call your function here
  $.ajax({
    url: '<?php echo base_url() ?>index.php/admin/revision/revisedwork_count', 
    success: function(data) {
      $("#revisedwork_badge").text(data);
      //alert(data);
    }
  });
}, 5000);

                    </script>
                    <!-- END PRE-FOOTER -->
                    <!-- BEGIN INNER FOOTER -->