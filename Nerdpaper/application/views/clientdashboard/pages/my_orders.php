<meta charset="utf-8" />
<title>Metronic Admin Theme #3 | Editable Datatables</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="Preview page of Metronic Admin Theme #3 for editable datatable samples" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
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
<style>
.paypal-button{

	margin-right: 521px;
	margin-top: 4px;
	

}

.btn:not(.btn-sm):not(.btn-lg) {
	border-radius: 50% !important;
}

.table .btn {
	margin-top: 2px;
}

</style>

<div class="row" id="scrollmerow">

	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box blue ">
			<div class="portlet-title">
				<div class="caption" >

					<i class="fa fa-gift"></i>Your Orders</div>
					<div class="tools">
						<a href="" class="collapse"> </a>
						<a href="#portlet-config" data-toggle="modal" class="config"> </a>
						<a href="" class="reload"> </a>
					</div>

				</div>
				<div class="portlet-body">
					

				</span>
					<table class="table table-striped table-hover table-bordered" id="neworder_tbl">
						<thead>
							<tr>
								<th style="width: 5%"> Sr#</th>
								<th style="width: 5%;text-align: center;"> Order Id</th>
								<th style="width: 15%;text-align: center;"> Order Title</th>
								<th style="width: 10%;text-align: center;"> Payment Status  </th>
								<th style="width: 10%;text-align: center;"> Order Status </th>
								<th style="width: 15%;text-align: center;"> Action</th>

								<!-- <th style="width: 10%"> Action </th> -->

								<!-- fa fa-bicycle -->
							</tr>
						</thead>
						<tbody>


							<?php $count=1;
							foreach($order_lists as $r) {?>
								<tr id="movetr<?php echo $count; ?>">
									<td> <?php echo $count;?> </td>
									<td style="text-align: center;"> <?php echo $r->order_id;?> </td>
									<td style="text-align: center;"> <?php echo $r->title;?> </td>
									<td style="text-align: center;">
										<?php
										if($r->payment_status == 0){
											echo '<span class="label btn-circle-micro label-warning">Half Paid</span>';
										}elseif($r->payment_status == 1){
											echo '<span class="label btn-circle-micro label-success">Full Paid</span>';
										}elseif($r->payment_status == 2 || $r->payment_status == -1){
											echo '<span class="label btn-circle-micro label-danger">Unpaid</span>';
										}?>
									</td>
									<td style="text-align: center;">
										<?php
										if($r->order_status == 6){
											echo '<span class="label btn-circle-micro label-danger">Unpaid Order</span>';
										}elseif($r->order_status == 0){
											echo '<span class="label btn-circle-micro label-info">New Order</span>';
										}elseif($r->order_status == 1){
											echo '<span class="label btn-circle-micro label-warning">In Process</span>';
										}elseif($r->order_status == 2){
											echo '<span class="label btn-circle-micro label-success" style="background-color: #19bc3c;">Completed</span>';
										}elseif($r->order_status == 3){
											echo '<span class="label btn-circle-micro label-warning">Revision in Progress</span>';
										}elseif($r->order_status == 4){
											echo '<span class="label btn-circle-micro label-info" style="background-color:#6f296f;">Disputed</span>';
										}elseif($r->order_status == 5){
											echo '<span class="label btn-circle-micro label-success ">Credited</span>';
										}elseif($r->order_status == 7){
											echo '<span class="label btn-circle-micro label-info" style="background-color:#a0ff00;">Pending</span>';
										}


										?>
									</td>
									<td style="text-align: center;" id="movebtn<?php echo $count; ?>">
										<!-- <a href="javascript::" onclick='showDetailsModal("<?php echo $r->order_detail_id ?>")' data-toggle="tooltip" title="details" class="btn btn-circle-micro btn-primary"><span class="glyphicon glyphicon-tasks"></span> </a> -->

										<?php if($r->payment_status == 0){?>
											<!-- <a href="<?php echo base_url() ?>index.php/order/reviewOrder/<?php echo $r->order_detail_id ?>" data-toggle="tooltip" title="Review&Checkout" class="btn btn-circle-micro btn-success"><span class="glyphicon glyphicon-floppy-saved"></span> </a> -->
											<a href="javascript:;" onclick='showDetailsModal("<?php echo $r->order_detail_id ?>")' data-toggle="tooltip" title="details" class="btn btn-circle-micro btn-primary" style='margin-right: 50px;'><span class="glyphicon glyphicon-tasks"></span> </a>

										<a data-toggle="modal" data-target="#exampleModal">	<span  onclick='showpayment_btn2(<?php echo $count; ?>,<?php echo $r->order_price; ?>,<?php echo $r->order_detail_id; ?>)'class="btn btn-circle-micro btn-default">
												<i class="glyphicon glyphicon-usd"></i>
											</span>
                                                </a>
										<?php }elseif($r->payment_status == 1){?>
											<a href="javascript:;" onclick='showDetailsModal("<?php echo $r->order_detail_id ?>")' data-toggle="tooltip" title="details" class="btn btn-circle-micro btn-primary" style='margin-right: 70px;'><span class="glyphicon glyphicon-tasks"></span> </a>

										<?php }elseif($r->payment_status == 2 || $r->payment_status == -1  ){?>

											<a href="javascript::" onclick='showDetailsModal("<?php echo $r->order_detail_id ?>")' data-toggle="tooltip" title="details" class="btn btn-circle-micro btn-primary" ><span class="glyphicon glyphicon-tasks"></span> </a>



											<a href="<?php echo base_url() ?>index.php/order/editOrder/<?php echo $r->order_detail_id; ?>#step1" onclick='' data-toggle="tooltip" title="details" class="btn btn-circle-micro btn-primary" ><span class="glyphicon glyphicon-pencil"></span> </a>
                                        <a data-toggle="modal" data-target="#exampleModal">
											<span onclick='showpayment_btn(<?php echo $count; ?>,<?php echo $r->order_price; ?>,<?php echo $r->order_detail_id; ?>)' class="btn btn-circle-micro btn-default">
												<i class="glyphicon glyphicon-usd"></i>
											</span>
											</a>

										<?php }?>
									</td>
								</tr>
								<?php $count++;}?> 

							</tbody>
						</table>
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>

		<!-- Modal -->

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


		<!-- Modal -->

		<div class="modal fade orderdetails"  role="dialog" style="display: none">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Order Details</h4>
					</div>
					<div class="modal-body">
						<table id="user" class="table table-bordered table-striped">
							<tbody>

								<tr>
									<td> Order Id </td>

									<td>
										<span class="text-muted orderId"> 

										</span>
									</td>
								</tr>
								<tr>
									<td> Work Type </td>

									<td>
										<span class="text-muted worktype"> 

										</span>
									</td>
								</tr>
								<tr>
									<td>Academic Level</td>
									<td>
										<span class="text-muted academicLevel">

										</span>
									</td>
								</tr>
								<tr>
									<td> Subject </td>

									<td>
										<span class="text-muted subject"> 
										</span>
									</td>
								</tr>
								<tr>
									<td> Title </td>

									<td>
										<span class="text-muted title"> </span>
									</td>
								</tr>
								<tr>
									<td> Citation Style </td>

									<td>
										<span class="text-muted CitationStyle"> 
										</span>
									</td>
								</tr>
								<tr>
									<td> Required Sources </td>

									<td>
										<span class="text-muted Sources">  </span>
									</td>
								</tr>
								<tr>
									<td> Number of Pages </td>

									<td>
										<span class="text-muted no_of_pages">  </span>
									</td>
								</tr>

								<tr>
									<td>Due Date </td>

									<td>
										<span class="text-muted endDate">  </span>
										<span class="text-muted endTime">  </span>
									</td>
								</tr>

								<tr>
									<td>Description</td>
									<td class="text-muted Description">

									</td>
								</tr>


								<tr>
									<td> Files </td>

									<td>                                              
										<span class='file' style="color: black"></span>

									</td>
								</tr>

							</tbody>
						</table>
						<p id="modalbody"> </p>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

					</div>
				</div>
			</div>
		</div>
		<!-- EndModal -->


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
		<script src="https://www.paypalobjects.com/api/checkout.js"></script>
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
			function showDetailsModal($orderid)
			{
				$.ajax({
					type: "POST",
					url: "<?php echo base_url() ?>index.php/Client/orderdetails", 
					data: {orderid: $orderid},
					cache:false,
					dataType: 'json',
					success: 
					function(data){
            //alert(data.order_id);
            $(".orderId").html(data.order_id) ;
            $(".academicLevel").html(data.acedamic_level) ;
            $(".worktype").html(data.document_type) ;
            $(".subject").html(data.subject) ;
            $(".title").html(data.title) ;
            $(".CitationStyle").html(data.citation_style) ;
            $(".Sources").html(data.name_of_sources) ;
            $(".no_of_pages").html(data.no_of_pages) ;
            $(".endDate").html(data.end_date) ;
            $(".endTime").html(data.end_time) ;
            $(".Description").html(data.description) ;
            $(".file").html(data.file_name) ;

            $('.orderdetails').modal('show');
        }
    });
          var newlist=[];
				$.ajax({
					type: "POST",
					url: "<?php echo base_url() ?>index.php/Client/orderFiles", 
					data: {orderid: $orderid},
					cache:false,
					dataType: 'json',
					success: 
					function(data1){
                                 //alert(data1.length);
                         for(var i = 0; i < data1.length ; i++) {
							    // files[] = data1[i].file_name;
							        fileName = data1[i].file_name;
							        newlist.push(fileName+' |');
							}
								   
								   $(".file").html(newlist);
								   }
							         
					});
			}
		</script>


		<script type="text/javascript">
    //  $("#paypal-button-container").hide();
</script>

<script type="text/javascript">


	function showpayment_btn($count,orderprice,orderdetail_id)
	{
		$("#paypal-button-container").empty();
		$("#paypal-button-container").show();
		
		//$(window).scrollTop(240);
	//	$(window).scrollBy(0,380);
// 		$("#neworder_tbl").css('display','none');
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
            production:    'AfnZnMfH6Am-GNf_czgnEiuS5OQ_vvrLhict21a3cocBr4w81jkcWavDJgKQwxurFPHvAsw0Z3Q_hwh0'
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
//	$(window).scrollBy(0,380);
// 		$("#neworder_tbl").css('display','none');
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
		production:    'AfnZnMfH6Am-GNf_czgnEiuS5OQ_vvrLhict21a3cocBr4w81jkcWavDJgKQwxurFPHvAsw0Z3Q_hwh0'
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




