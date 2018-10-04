<meta charset="utf-8" />
<title>Metronic Admin Theme #3 | Editable Datatables</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="Preview page of Metronic Admin Theme #3 for editable datatable samples" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="<?php echo base_url(); ?>assets_material/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_material/countdown/css/jquery.countdown.css"> 

<!-- END THEME LAYOUT STYLES -->
<!-- END PAGE LEVEL PLUGINS -->


<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Submissions</div>
                            <div class="tools">
                                <a href="" class="collapse"> </a>
                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                <a href="" class="reload"> </a>
                            </div>
                        </div>
                    <div class="portlet-body">
                        
                         <table class="table table-striped table-hover table-bordered" id="neworder_tbl">
                                        <thead>
                                            <tr >
                                                <th style="width: 5%"> Sr# </th>
                                                <th style="width: 5%;text-align: center;"> Order Id</th>
                                                <th style="width: 5%;text-align: center;"> Payment Status  </th>
                                                <th style="width: 5%;text-align: center;"> Document File Type  </th>
                                                <th style="width: 20%;text-align: center;"> Writer Note  </th>
                                                <th colspan="2" style="width: 20%;text-align: center;"> Download Work </th>
                                                <th style="width: 10%;text-align: center;"> Remaining Payment </th>
                                                <th style="width: 15%;text-align: center;"> Action</th>
                                                
                                                <!-- <th style="width: 10%"> Action </th> -->

                                                <!-- fa fa-bicycle -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php $count=1;
                                         foreach ($getDownloadWork as $key => $r){?>
                                        <tr >
                                            <td> <?php echo $count;?></td>
                                            <td style="text-align: center;"> <?php echo $r->order_id;?> </td>
                                            <td style="text-align: center;">
                                           <?php
                                          if($r->payment_status == 0){
                                           echo '<span class="label btn-circle-micro label-warning">Half Paid</span>';
                                         }elseif($r->payment_status == 1){
                                          echo '<span class="label btn-circle-micro label-info">Full Paid</span>';
                                        }elseif($r->payment_status == 2 || $r->payment_status == -1){
                                          echo '<span class="label btn-circle-micro label-danger">Not Paid</span>';
                                        }?>
                                         </td>
                                         <td style="text-align: center;">
                                         <?php
                                          if($r->payment_status == 0){
                                           echo '<span class="label btn-circle-micro label-warning">Encrypted Work</span>';
                                         }elseif($r->payment_status == 1){
                                          echo '<span class="label btn-circle-micro label-success">Final work</span>';
                                        }?>
                                      </td>
                                      <td style="text-align: center;">
                                         <?php echo $r->writer_note?>
                                      </td>

                                     <?php if($r->payment_status == 0){
                                     $adminpath = 'http://admin.writersverge.com/documents'; 
                                     ?>
                                      <td colspan="2" style="text-align: center;" class="row_work" id="<?php echo $r->submission_id?>">   

                                          <a class="btn btn-info mt-ladda-btn ladda-button btn-circle" href="<?php echo $adminpath ?>/<?php echo $r->half_file ?>"><span class="ladda-label"><i class="icon-arrow-down">Encrypted File</i></a>  
                                          </td> 
                                          <?php }?> 
                                          <?php if($r->payment_status == 1){?>
                      
                                            <td style="text-align: center;" class="row_work" id="<?php echo $r->submission_id?>">
                                            <?php 
                                            $this->load->helper('submission_files_helper'); 
                                             $sub_files = submission_files($r->submission_id);
                                             foreach ($sub_files as $key => $value): 
                                             $adminpath = 'http://admin.writersverge.com/documents'; 
                                           ?>                                           
                                           <a target="_blank" class="btn btn-success mt-ladda-btn ladda-button btn-circle" href="<?php echo $adminpath ?>/<?php echo $value->submission_file_name ?>" ><span class="ladda-label"><i class="icon-arrow-down">Work File</i></a>
                                          <?php endforeach ?>                                           
                                          
                                          </td>
                                          <td style="text-align: center;" class="row_work" id="<?php echo $r->submission_id?>">

                                            <?php 
                                            $this->load->helper('submission_files_helper'); 
                                             $sub_rep_files = submission_report_files($r->submission_id);
                                             foreach ($sub_rep_files as $key => $valuerep): 
                                             $repfilepath = 'http://admin.writersverge.com/documents'; 
                                           ?>                                           
                                           <a target="_blank" class="btn mt-ladda-btn ladda-button btn-circle yellow  " href="<?php echo $repfilepath ?>/<?php echo $valuerep->submission_report_file_name ?>"><span class="ladda-label"><i class="icon-arrow-down">Plagarism File</i></a>
                                          <?php endforeach ?> 

                                          </td>
                                           <?php }?>

                                        
                                       <td style="text-align: center;"> <?php if($r->payment_status == 0){
                                           $halfprice = ($r->order_price)/2;
                                           $finalnumber = number_format((float)$halfprice, 2, '.', '');
                                           echo  "$".$finalnumber;
                                            }?>
                                          <?php if($r->payment_status == 1){ 
                                            $finalprice = ($r->order_price)-($r->order_price);
                                           $fullnumber = number_format((float)$finalprice, 2, '.', ''); 
                                             echo "$".$fullnumber; }?>
                                        </td>
                                        <td style="text-align: center;">
                                        <?php if($r->payment_status == -1 || $r->payment_status == 2){?>
                                        <a data-toggle="modal" data-target="#exampleModal">
                                          <span onclick='showpayment_btn(<?php echo $count; ?>,<?php echo $r->order_price; ?>,<?php echo $r->order_detail_id; ?>)' class="btn btn-circle-micro btn-danger">
                                            <i class="glyphicon glyphicon-usd"></i>
                                          </span>
                                        </a>
                                        <a href="<?php echo base_url() ?>index.php/Client/markRevision/<?php echo $r->order_detail_id ?><?php echo $r->writer_id ?>" data-toggle="tooltip" title="Kindly pay Remaining Amount" class="btn btn-circle-micro btn-warning disabled"><span class="glyphicon glyphicon-edit"></span> </a>
                                        <?php }elseif($r->payment_status == 0){?>
                                        
                                            <a data-toggle="modal" data-target="#exampleModal">
                                          <span onclick='showpayment_btn2(<?php echo $count; ?>,<?php echo $r->order_price; ?>,<?php echo $r->order_detail_id; ?>)' class="btn btn-circle-micro btn-danger">
                                            <i class="glyphicon glyphicon-usd"></i>
                                          </span>
                                        </a>

                                        <?php }else{?>
                                        <a href="<?php echo base_url() ?>index.php/Client/markRevision/<?php echo $r->order_detail_id ?>/<?php echo $r->writer_id ?>" data-toggle="tooltip" title="mark revision" class="btn btn-circle-micro btn-warning"><span class="glyphicon glyphicon-edit"></span> </a>
                                        <?php }?>
                                        <input type='hidden' name='currentorderprice' id='currentorderprice' value=' <?php echo isset($r->order_price)?$r->order_price : '' ;?>' /> 
                                      </td>
                                        </tr>
                                        <?php $count++; } ?> 
                                         
                                        </tbody>
                                    </table>
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                </div>
                            </div>

                                   
  <!-- ____________Paypal Modal Starts____________ -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px;">Checkout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <!--____________ modal button  starts________-->
    <div class="row">
      <div class="col-md-12" style='text-align:center;'>
        <span id="paypal-button-container" class='unpaidpayment' style="display: none;">
      </div>
    </div>
    <!-- ____________modal button ends__________ -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 0% !important;">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- ______________Paypal Modal Ends_______________ -->






                          <!-- BEGIN CORE PLUGINS -->
                          <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
                          <script type="text/javascript" src="<?php echo base_url(); ?>assets_material/datetimepicker/build/datetimepicker.full.min.js"></script>
                          <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                          <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
                          <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
                          <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
                          <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
                          <!-- END CORE PLUGINS -->
                          <!-- BEGIN PAGE LEVEL PLUGINS -->
                          <script src="<?php echo base_url(); ?>assets_material/assets/global/scripts/datatable.js" type="text/javascript"></script>
                          <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
                          <script src="<?php echo base_url(); ?>assets_material/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
                          <!-- END PAGE LEVEL PLUGINS -->
                          <!-- BEGIN THEME GLOBAL SCRIPTS -->
                          <script src="<?php echo base_url(); ?>assets_material/assets/global/scripts/app.min.js" type="text/javascript"></script>
                          <!-- END THEME GLOBAL SCRIPTS -->
                          <!-- BEGIN PAGE LEVEL SCRIPTS -->
                          <script src="<?php echo base_url(); ?>assets_material/assets/pages/scripts/table-datatables-editable.js" type="text/javascript"></script>
                          <!-- END PAGE LEVEL SCRIPTS -->
                          <!-- BEGIN THEME LAYOUT SCRIPTS -->
                          <script src="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
                          <script src="<?php echo base_url(); ?>assets_material/assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
                          <script src="<?php echo base_url(); ?>assets_material/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
                          <script src="<?php echo base_url(); ?>assets_material/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
                          <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>   

                          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
                          <script type="text/javascript" src="<?php echo base_url() ?>assets_material/countdown/js/jquery.plugin.js"></script> 
                          <script type="text/javascript" src="<?php echo base_url() ?>assets_material/countdown/js/jquery.countdown.js"></script>  


                          <!-- END THEME LAYOUT SCRIPTS -->
                          <!-- END PAGE LEVEL PLUGINS -->




<script type="text/javascript">
            $("#neworder_tbl").DataTable();
        </script>

        <script type="text/javascript">
            
        </script>

<script type="text/javascript">
    // function showcalender($count)
    // {
    //     debugger;
    //     var value = $count;

    //     jQuery('#datetimepicker'+value).datetimepicker();

    // }
</script>
<div id="paypal-button-container"></div>

<script>
    $("#paypal-button-container").hide();
</script>


<script type="text/javascript">


  function showpayment_btn($count,orderprice,orderdetail_id)
  {
    $("#paypal-button-container").empty();
    $("#paypal-button-container").show();
    
    //$(window).scrollTop(240);
  //  $(window).scrollBy(0,380);
//    $("#neworder_tbl").css('display','none');
    $(".unpaidpayment").css('display','block');
       //$("#scrollme").scrollTop() + " 380px";
//$(document).scrollTop($(document).height());

       // $(".mypaypalbtn"+$count).show();
        // $("#movebtn"+$count).html('<div id="paypal-button-container" class="pull-right mypaypalbtn<?php echo $count; ?>" style="display:block;" >working</div>');
        
      //  $("#paypal-button-container").prependTo("#paymentbtn"+$count");
      
      //alert($count);
     // window.scrollTo(0, 0);
    paypal.Button.render({

        env: 'production', // sandbox | production
        
        style: {
            // label: 'ordernow',
            fundingicons: true, // optional
            branding: true, // optional
            size:  'small', // small | medium | large | responsive
            shape: 'rect',   // pill | rect
            color: 'gold'   // gold | blue | silver | black
        },

        client: {
            production: 'AfnZnMfH6Am-GNf_czgnEiuS5OQ_vvrLhict21a3cocBr4w81jkcWavDJgKQwxurFPHvAsw0Z3Q_hwh0'
           // production: '<insert production client id>'
        },
        
        commit: true,

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                    {
                        amount: { total: orderprice, currency: 'USD' }
                    }
                    ],
                    redirect_urls: {
                      return_url: 'https://nerdpapers.com/index.php/payment/index/done'
                      //cancel_url: ''
                  }
              },
              
              experience: {
                  flow_config: {
                     landing_page_type: "billing",
                 }
             }
         });
        },
        
        onCancel: function (data, actions) {
    
    //alert("canceld");
},



        // Wait for the payment to be authorized by the customer

        onAuthorize: function(data, actions) {

            // Get the payment details

            return actions.payment.get().then(function(data) {

             // alert('working');
              var shipping = data.payer.payer_info.shipping_address;
              $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() ?>index.php/Order/update_payment_status", 
                    data: {order_detail_id : orderdetail_id},
                    dataType: "text",  
                    cache:false,
                    success: function(data){
                        
                        //alert('data'+' '+'Yes');

                   }

               });


            }).then(function(res) {
               return actions.payment.execute().then(function() {

                        // Show a thank-you note
                      actions.redirect();
                        // swal("Congrats! Your Order has been placed successfully", "", "success")
                       // actions.redirect();
                    });
           });
        }

    }, '#paypal-button-container');




}


</script>

<script type="text/javascript">


function showpayment_btn2($count,orderprice,orderdetail_id)
{
  $("#paypal-button-container").empty();
  $("#paypal-button-container").show();
  
  //$(window).scrollTop(240);
//  $(window).scrollBy(0,380);
//    $("#neworder_tbl").css('display','none');
  $(".unpaidpayment").css('display','block');
     //$("#scrollme").scrollTop() + " 380px";
//$(document).scrollTop($(document).height());

     // $(".mypaypalbtn"+$count).show();
      // $("#movebtn"+$count).html('<div id="paypal-button-container" class="pull-right mypaypalbtn<?php echo $count; ?>" style="display:block;" >working</div>');
      
    //  $("#paypal-button-container").prependTo("#paymentbtn"+$count");
    
    //alert($count);
   // window.scrollTo(0, 0);
  paypal.Button.render({

      env: 'production', // sandbox | production
      
      style: {
          // label: 'ordernow',
          fundingicons: true, // optional
          branding: true, // optional
          size:  'small', // small | medium | large | responsive
          shape: 'rect',   // pill | rect
          color: 'gold'   // gold | blue | silver | black
      },

      client: {
          production: 'AfnZnMfH6Am-GNf_czgnEiuS5OQ_vvrLhict21a3cocBr4w81jkcWavDJgKQwxurFPHvAsw0Z3Q_hwh0'
         // production: '<insert production client id>'
      },
      
      commit: true,

      payment: function(data, actions) {
          return actions.payment.create({
              payment: {
                  transactions: [
                  {
                      amount: { total: orderprice / 2, currency: 'USD' }
                  }
                  ],
                  redirect_urls: {
                    return_url: 'https://nerdpapers.com/index.php/payment/index/done'
                    //cancel_url: ''
                }
            },
            
            experience: {
                flow_config: {
                   landing_page_type: "billing",
               }
           }
       });
      },
      
      onCancel: function (data, actions) {
  
  //alert("canceld");
},



      // Wait for the payment to be authorized by the customer

      onAuthorize: function(data, actions) {

          // Get the payment details

          return actions.payment.get().then(function(data) {

           // alert('working');
            var shipping = data.payer.payer_info.shipping_address;
            $.ajax({
                  type: "POST",
                  url: "<?php echo base_url() ?>index.php/Order/update_payment_status", 
                  data: {order_detail_id : orderdetail_id},
                  dataType: "text",  
                  cache:false,
                  success: function(data){
                      
                      //alert('data'+' '+'Yes');

                 }

             });


          }).then(function(res) {
             return actions.payment.execute().then(function() {

                      // Show a thank-you note
                      actions.redirect();
                      // swal("Congrats! Your Order has been placed successfully", "", "success")
                     // actions.redirect();
                  });
         });
      }

  }, '#paypal-button-container');




}


</script>