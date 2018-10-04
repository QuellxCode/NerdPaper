<!DOCTYPE html>


<html lang="en">
  
  <!-- temporary css for use in index page -->

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/countrylist/build/css/intlTelInput.css">


  <style type="text/css">
  .background_image{
    -webkit-transform: none;
    transform: none;
    /*background-color: #f5f5f5;*/
    background-image: url("<?php echo base_url(); ?>/assets/img/background.jpg");
    background-size: 100% 100%;
    min-height: 0
}
</style>

  

 <?php
// include('includes/head.php');
$this->load->view('clientweb/components/includes/head');
 ?> 
  <body>
   <!--  <a href="javascript:void(0)" class="ms-conf-btn ms-configurator-btn btn-circle btn-circle-raised btn-circle-primary animated rubberBand">
      <i class="fa fa-gears"></i>
    </a> -->
<?php 
// include('includes/configurator.php');
$this->load->view('clientweb/components/includes/configurator');
?>
<?php if ($mainview != 'clientweb/pages/payment_success'): ?>

    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <?php endif ?>
     <?php if ($mainview == 'clientweb/pages/order'): ?>
      <div class="ms-site-container background_image">
      <?php else: ?>
          <div class="ms-site-container">
    <?php endif ?>
      <!-- Modal-->
      <div class="modal modal-primary " id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 2001">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" id="modalCloseReg" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
                <img src="<?php echo base_url()  ?>assets/img/logo2.png" alt="NerdPapers logo - Essay Writing Service" style="width: 200px;height: 80px;">
              </div>
              <div class="modal-header-tabs">
                <ul class="nav nav-tabs nav-tabs-full nav-tabs-2 nav-tabs-primary" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link active withoutripple smallscreen">
                      <i class="zmdi zmdi-account"></i> Login</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                      <i class="zmdi zmdi-key"></i> Recovery pass</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="modal-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
                  <form  action="<?php echo base_url().'index.php/Client/webclient_login' ?>" method="POST" autocomplete="off">
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user">Email</label>
                          <input type="email" name="uemail" id="ms-form-user" class="form-control" required> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Password</label>
                          <input type="password" name="upassword" id="ms-form-pass" class="form-control" required> </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <div class="form-group no-mt">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Remember Me </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-raised btn-primary pull-right">Login</button>
                        </div>

                      </div>
                    </fieldset>
                  </form>

                </div>
                 <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                    <form id="recoveryPassword"  action="<?php echo base_url().'index.php/Client/recoveryPassword' ?>" method="POST">
                              <fieldset>
                               <div class="form-group label-floating">
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <i class="zmdi zmdi-email"></i>
                                  </span>
                                  <label class="control-label" for="">Email</label>
                                  <input type="email" id="" name="recEmail" class="form-control" required> 
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-raised btn-block btn-primary" >Send Password</button>
                            </fieldset>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Ends -->
<!-- Modal Ends -->
<!-- ____________My Modal Starts_______________ -->

 <div class="modal modal-primary " id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 2001">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" id="modalClose" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
                <img src="<?php echo base_url()  ?>assets/img/logo2.png" alt="NerdPapers Logo - Essay Writing Service" style="width: 200px;height: 80px;">
              </div>
              <div class="modal-header text-center">
                      <p style="width: 100%"><i class="zmdi zmdi-account-add"></i> Register</p>
              </div>
            </div>
            <div class="modal-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="ms-register-tab">
                  <form id="Registerformsubmit" action="<?php echo base_url().'index.php/Client/createClientWeb'?>" method="POST">
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user-r">Name</label>
                          <input type="text" id="uname1" class="form-control" name="uname" required> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                          </span>
                          <label class="control-label" for="ms-form-email-r">Email</label>
                          <input type="email" id="clientEmail1" pattern=".+@.+." class="form-control clientEmail" name="uemail" required> </div>
                           <span id="errormsg1" style="color:red"></span>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-phone"></i>
                          </span>
                          <label class="control-label" for=""></label>
                          <input type="text" id="ucontact1" placeholder="+1 XXX XXX XXXX" class="form-control" name="ucontact"  onkeypress="" maxlength="17" required> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="">Password</label>
                          <input type="password" id="password1" class="form-control" name="upassword" required> </div>
                       <span id="confirmMessage" class="confirmMessage"></span>
                       
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass-rn1">Re-type Password</label>
                          <input type="password" name="upassword2" onkeyup="myFunction()" id="repassword1" data-match="#password1" data-match-error="Whoops, these don't match" class="form-control" onkeyup="checkPass(); return false;" required> </div>
                          <span id="pwd_notmatched" style='color:red;'>Confirm Password not matched</span>
                      </div>
                      
                      <input style="position: relative; top: 2px;" type="checkbox" id="termsandconditions1" name="conditions" value="" required="" />
                    <strong>I have read the Privacy Policy and agree to the Terms and Conditions of Nerdpapers. </strong>
                      <button type="submit" id="clientRegister" class="btn btn-raised btn-block btn-primary">Sign Up</button>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- ____________________My Modal ends________________ -->
      
<?php
// include('includes/header.php');
// include('includes/navbar.php');

$this->load->view('clientweb/components/includes/header');

$this->load->view('clientweb/components/includes/navbar');
?>


<?php $this->load->view($mainview); ?>


     
<?php
// include('includes/footer.php');
$this->load->view('clientweb/components/includes/footer');
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.22.2/dist/sweetalert2.all.min.js"></script>


      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
          <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
      </div>
    </div>
    <!-- ms-site-container -->

    <?php 
    // include('includes/left_side_navbar.php');
    $this->load->view('clientweb/components/includes/left_side_navbar');
    ?>

      <script type="text/javascript">
          $('#elm').hover(
       function(){ $(this).addClass('prominent') },
      
      );
          </script>
          

   
<script type="text/javascript">
  $(document).ready(function () {
    $('#modalClose').click(function () {
    $('.modal').modal('toggle');
    });
});

$('#modalCloseReg').on('click') {
   $('#register').modal('hide');
  }
</script>




<script type="text/javascript">
    
    $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
               $("#secondStepService").prop('checked','checked');

            }
            else if($(this).prop("checked") == false){
                
            }
        });
    });
</script>

<script type="text/javascript">
   // $("#ucontact1").on('change', function() {

   // });
</script>

<script>
    $("#modalClose").on('click',function(e)
    {
        //alert("working");
        
    });
</script>

<script type="text/javascript">
    $("#ucontact1").on('change', function() {
        var number = $(this).val()
        number = number.replace(/(\d{1})(\d{3})(\d{3})(\d{4})/, "$1 ($2) $3 $4");
        $(this).val(number)
    });
</script>

<script type="text/javascript">
  $('#Registerformsubmit').on('submit', function (e) {

    var name1 = document.getElementById("uname1").value;
    var email1 = document.getElementById("clientEmail1").value;
    var contact1 = document.getElementById("ucontact1").value;
    var password1 = document.getElementById("password1").value;
    var repassword1 = document.getElementById("repassword1").value;
       //e.preventDefault();

    if(name1 ==''){
        swal("Name not filled out", "", "warning");
        e.preventDefault();
    }else if(email1 ==''){
        swal("Email not filled out", "", "warning");
        e.preventDefault();
    }else if(contact1 ==''){
        swal("Contact not filled out", "", "warning");
        e.preventDefault();
    }else if(password1 == ''){
        swal("Password not filled out", "", "warning");
        e.preventDefault();
    }else if(repassword1 == ''){
        swal("Confirm Password not filled out", "", "warning");
        e.preventDefault();
    }else if(password1 != repassword1) {
        e.preventDefault();
        swal("Password do not Match!", "", "warning");
    }else if($("#termsandconditions1").prop('checked') == false) {
        e.preventDefault();
        swal("Please accept Terms and conditions to continue", "", "warning");
    }else {
      $('#Registerformsubmit').submit();
}

});

function checkPass()
{
   
    // var pass1 = document.getElementById('password1');
    // var pass2 = document.getElementById('repassword1');
    
    // var message = document.getElementById('confirmMessage');
    
    // var goodColor = "#66cc66";
    // var badColor = "#ff6666";
    
    // if(pass1.value == pass2.value){
        
    //     pass2.style.backgroundColor = goodColor;
    //     message.style.color = goodColor;
    //     message.innerHTML = "Passwords Match!"
    //     $('#clientRegister').css('pointer-events', 'auto' );
    // }else{
       
    //     pass2.style.backgroundColor = badColor;
    //     message.style.color = badColor;
    //     message.innerHTML = "Passwords Do Not Match!"
    //     $('#clientRegister').css('pointer-events', 'none' );
    // }
}  
</script>

    <script src="<?php echo base_url() ?>assets/js/index.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lead.js"></script>
    <!--Sweet alert script-->

  </body>


</html>
