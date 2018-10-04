

<div class="container ">
        <div class="row">

          <div class="col-md-8">
            <div class="card animated zoomInDown animation-delay-5">
              <div class="card-body">
                <h3>Place your order by filling required fields</h3>
                <!-- Order Section -->
                

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-3" role="tablist">
                  <li class="nav-item " style="cursor: not-allowed;pointer-events: none;"><a class="nav-link withoutripple <?php echo (isset($order_details))?'':'active'?>" href="#step1" aria-controls="step2" role="tab" data-toggle="tab" style="cursor: not-allowed;"><i class="zmdi zmdi-folder-outline"></i> <span class="d-none d-sm-inline">Price Calculation</span></a></li>
                  <li class="nav-item " style="cursor: not-allowed;pointer-events: none;"><a class="nav-link withoutripple" href="#step2" aria-controls="step2" role="tab" data-toggle="tab"><i class="zmdi zmdi-edit"></i> <span class="d-none d-sm-inline" style="cursor: not-allowed;">Project Details</span></a></li>
                  <li class="nav-item "  style="cursor: not-allowed;pointer-events: none;"><a class="nav-link withoutripple <?php echo (isset($order_details))?'active':''?>" href="#step3" aria-controls="step3" role="tab" data-toggle="tab" style="cursor: not-allowed;"><i class="fa fa-info"></i> <span class="d-none d-sm-inline">Review Info</span></a></li>
                </ul>

                <div class="card-body">
                  <!-- Tab panes -->
                   <?php
                         $action = "addOrder";
                        if (isset($order_details))
                                 foreach($order_details as $or)
                                    $action = "updateClientOrder/$or->order_detail_id";
                                ?>
                  <div class="tab-content">
                    <div role="tabpanel"  class="tab-pane <?php echo (isset($order_details))?'fade':'active show'?>" id="step1">
                       
            <form name="myForm" id="formsubmit_order" method="post"  action="<?php echo base_url().'index.php/Client/'.$action; ?>" onsubmit="return validateForm()" enctype="multipart/form-data">
                        <fieldset>
                          
                              
                          <div class="form-group row">
                          
                            <label for="name" autocomplete="false" class=" col-lg-2 control-label ">Your Name</label>

                            <div class="col-lg-4">

                            <input type="text" class="form-control" name="clientName"  id="inputname" placeholder="Name" value="<?php if(isset($or->client_name)){ echo $or->client_name;}else if(isset($_SESSION['uname'])){echo $_SESSION['uname'];};?>" >
                            <input type="hidden" class="form-control" name="orderDetailId" value="<?php echo isset($or->order_detail_id)? $or->order_detail_id: '' ;?>" >
                            <input type="hidden" id="inputlead" class="form-control" name="lead_id" value="<?php echo isset($or->lead_id)? $or->lead_id: '' ;?>" >
                            </div>



                            <label for="inputEmail" autocomplete="false" class=" col-lg-2 control-label ">Your Email</label>

                            <div class="col-lg-4">
                            <input type="email" class="form-control sample_search inputEmailCheck" onblur="isValidEmailAddress()" id="inputEmail" placeholder="Email" value="<?php if(isset($or->client_email)){ echo $or->client_email;}else if(isset($_SESSION['uemail'])){echo $_SESSION['uemail'];}else{echo ''; };?>" name="email" <?php if (isset($_SESSION['uemail'])){?>readonly <?php } ?>  > 
                                       

                            </div>

                            


                          </div>
                
                          <div class="form-group row justify-content-end">

                            <label for="inputPhone" autocomplete="false" class="col-lg-2 control-label">Your Phone</label>

                            <div class="col-lg-4">
                                <?php if(isset($_SESSION['clientContact'])){
                                    $clientPhone = $_SESSION['clientContact'];
                                }?>
                              <input type="tel" class="form-control" id="phone" name="phone" data-inputmask="'mask': '0000-0000000" placeholder="Phone" value="<?php echo isset($or->phone)? $or->phone: '';?>" onkeypress="return isNumberKey(event)"  pattern="[1-9]{1}[0-9]{9}" maxlength="10">
                            </div>

                            <label for="select111" class="col-lg-2 control-label">Type Of Document</label>

                            <div class="col-lg-4">
                              <select id="documentType" class="form-control doctype" name="document_type1" data-dropup-auto="false" title="Document Type">
                                   <?php if(isset($documenttype)){
                                    foreach($documenttype as $doct);?>
                                   ?>
                                    
                                <option value="<?php echo $doct?>" selected><?php echo $doct ?></option>
                                   <?php } ?>
                                <?php if (isset($or->document_type)){ ?><option value="<?php echo $or->document_type?>" selected><?php echo $or->document_type ?></option><?php }?>
                                <option value="Essay">Essay</option>
                                <option value="Articles">Articles</option>
                                <option value="Assignment">Assignment</option>
                                <option value="Book Reports">Book Reports</option>
                                <option value="Book Reviews">Book Reviews</option>
                                <option value="Case Study">Case Study</option>
                                <option value="College Paper">College Paper</option>
                                <option value="Coursework">Coursework</option>
                                <option value="eBooks">eBooks</option>
                                <option value="Homework">Homework</option>
                                <option value="Lab Report">Lab Report</option>
                                <option value="Movie Review">Movie Review</option>
                                <option value="News Release">News Release</option>
                                <option value="Research Paper">Research Paper</option>
                                <option value="Research Proposal">Research Proposal</option>
                                <option value="School Paper">School Paper</option>
                                <option value="Speech">Speech</option>
                                <option value="Term Paper">Term Paper</option>
                                <option value="Admission Essay">Admission Essay</option>
                                <option value="Annotated Bibliography">Annotated Bibliography</option>
                                <option value="Application Letter">Application Letter</option>
                                <option value="Argumentative Essay">Argumentative Essay</option>
                                <option value="iography">Biography</option>
                                <option value="Business Plan">Business Plan</option>
                                <option value="Cover Letter">Cover Letter</option>
                                <option value="Creative Writing">Creative Writing</option>
                                <option value="Critical Thinking">Critical Thinking</option>
                                <option value="Literature Review">Literature Review</option>
                                <option value="Personal Statement">Personal Statement</option>
                                <option value="Presentation">Presentation</option>
                                <option value="Report">Report</option>
                                <option value="Scholarship Essay">Scholarship Essay</option>
                                <option value="PowerPoint Presentation">PowerPoint Presentation</option>
                                <option value="other">Other</option>
                              </select>
                            </div>
                          <div class="col-lg-4" id="othersubject" style="display: none">
                              <input type="text" class="form-control" id="typesub" name="document_type" placeholder="other" value="" >
                            </div>

                          </div>
                    
                          <div class="form-group row justify-content-end">

                          <!-- style="display: none;" -->
                            <label for="select1111" class="col-lg-2 control-label">Acadmemic Level</label>

                            <div class="col-lg-4">
                              <select id="mySelect" onchange="changeDemo();" name="acedamic_level" class="form-control" data-dropup-auto="false" title="You Study at?">
                                <?php if (isset($or->acedamic_level)){ ?><option value="<?php echo $or->acedamic_level?>" selected><?php echo $or->acedamic_level ?></option><?php }?>
                              
                                <option value="High_School">High School</option>
                                <option value="College">College-underGraduate</option>
                                <option value="Masters">Masters</option>
                                <option value="PHD">Doctoral</option>
                              </select>
                            </div>

                            
                          

                          
                            <label for="select11" class="col-lg-2 control-label">No. of Pages</label>
                                              
                            <div class="col-md-4">
                              <select class="form-control " name="" id="mySelect2" style="z-index: 9999999 !important;" onchange="changeDemo();" data-dropup-auto="false" title="Select no of Pages">
                                <?php if (isset($or->no_of_pages)){ ?><option value="<?php echo $or->no_of_pages ?> Page ~ <?php echo $or->no_of_words ?> Words" selected><?php echo $or->no_of_pages ?> ~ <?php echo $or->no_of_words ?></option><?php }?>
                                <option value="1" >1 Page &nbsp; ~ 300 Words</option>
                                <option value="2">2 Pages ~ 600 Words</option>
                                <option value="3">3 Pages ~ 900 Words</option>
                                <option value="4">4 Pages ~ 1200 Words</option>
                                <option value="5">5 Pages ~ 1500 Words</option>
                                <option value="6">6 Pages ~ 1800 Words</option>
                                <option value="7">7 Pages ~ 2100 Words</option>
                                <option value="8">8 Pages ~ 2400 Words</option>
                                <option value="9">9 Pages ~ 2700 Words</option>
                                <option value="10">10 Pages ~ 3000 Words</option>
                                <option value="11">11 Pages ~ 3300 Words</option>
                                <option value="12">12 Pages ~ 3600 Words</option>
                                <option value="13">13 Pages ~ 3900 Words</option>
                                <option value="14">14 Pages ~ 4200 Words</option>
                                <option value="15">15 Pages ~ 4500 Words</option>
                                <option value="16">16 Pages ~ 4800 Words</option>
                                <option value="17">17 Pages ~ 5100 Words</option>
                                <option value="18">18 Pages ~ 5400 Words</option>
                                <option value="19">19 Pages ~ 5700 Words</option>
                                <option value="20">20 Pages ~ 6000 Words</option>
                                <option value="21">21 Pages ~ 6300 Words</option>
                                <option value="22">22 Pages ~ 6600 Words</option>
                                <option value="23">23 Pages ~ 6900 Words</option>
                                <option value="24">24 Pages ~ 7200 Words</option>
                                <option value="25">25 Pages ~ 7500 Words</option>
                                <option value="26">26 Pages ~ 7800 Words</option>
                                <option value="27">27 Pages ~ 8100 Words</option>
                                <option value="28">28 Pages ~ 8400 Words</option>
                                <option value="29">29 Pages ~ 8700 Words</option>
                                <option value="30">30 Pages ~ 9000 Words</option>
                                <option value="31">31 Pages ~ 9300 Words</option>
                                <option value="32">32 Pages ~ 9600 Words</option>
                                <option value="33">33 Pages ~ 9900 Words</option>
                                <option value="34">34 Pages ~ 10200 Words</option>
                                <option value="35">35 Pages ~ 10500 Words</option>
                                <option value="36">36 Pages ~ 10800 Words</option>
                                <option value="37">37 Pages ~ 11100 Words</option>
                                <option value="38">38 Pages ~ 11400 Words</option>
                                <option value="39">39 Pages ~ 11700 Words</option>
                                <option value="40">40 Pages ~ 12000 Words</option>
                                <option value="41">41 Pages ~ 12300 Words</option>
                                <option value="42">42 Pages ~ 12600 Words</option>
                                <option value="43">43 Pages ~ 12900 Words</option>
                                <option value="44">44 Pages ~ 13200 Words</option>
                                <option value="45">45 Pages ~ 13500 Words</option>
                                <option value="46">46 Pages ~ 13800 Words</option>
                                <option value="47">47 Pages ~ 14100 Words</option>
                                <option value="48">48 Pages ~ 14400 Words</option>
                                <option value="49">49 Pages ~ 14700 Words</option>
                                <option value="50">50 Pages ~ 15000 Words</option>
                                <option value="51">51 Pages ~ 15300 Words</option>
                                <option value="52">52 Pages ~ 15600 Words</option>
                                <option value="53">53 Pages ~ 15900 Words</option>
                                <option value="54">54 Pages ~ 16200 Words</option>
                                <option value="55">55 Pages ~ 16500 Words</option>
                                <option value="56">56 Pages ~ 16800 Words</option>
                                <option value="57">57 Pages ~ 17100 Words</option>
                                <option value="58">58 Pages ~ 17400 Words</option>
                                <option value="59">59 Pages ~ 17700 Words</option>
                                <option value="60">60 Pages ~ 18000 Words</option>
                                <option value="61">61 Pages ~ 18300 Words</option>
                                <option value="62">62 Pages ~ 18600 Words</option>
                                <option value="63">63 Pages ~ 18900 Words</option>
                                <option value="64">64 Pages ~ 19200 Words</option>
                                <option value="65">65 Pages ~ 19500 Words</option>
                                <option value="66">66 Pages ~ 19800 Words</option>
                                <option value="67">67 Pages ~ 20100 Words</option>
                                <option value="68">68 Pages ~ 20400 Words</option>
                                <option value="69">69 Pages ~ 20700 Words</option>
                                <option value="70">70 Pages ~ 21000 Words</option>
                                <option value="71">71 Pages ~ 21300 Words</option>
                                <option value="72">72 Pages ~ 21600 Words</option>
                                <option value="73">73 Pages ~ 21900 Words</option>
                                <option value="74">74 Pages ~ 22200 Words</option>
                                <option value="75">75 Pages ~ 22500 Words</option>
                                <option value="76">76 Pages ~ 22800 Words</option>
                                <option value="77">77 Pages ~ 23100 Words</option>
                                <option value="78">78 Pages ~ 23400 Words</option>
                                <option value="79">79 Pages ~ 23700 Words</option>
                                <option value="80">80 Pages ~ 24000 Words</option>
                                <option value="81">81 Pages ~ 24300 Words</option>
                                <option value="82">82 Pages ~ 24600 Words</option>
                                <option value="83">83 Pages ~ 24900 Words</option>
                                <option value="84">84 Pages ~ 25200 Words</option>
                                <option value="85">85 Pages ~ 25500 Words</option>
                                <option value="86">86 Pages ~ 25800 Words</option>
                                <option value="87">87 Pages ~ 26100 Words</option>
                                <option value="88">88 Pages ~ 26400 Words</option>
                                <option value="89">89 Pages ~ 26700 Words</option>
                                <option value="90">90 Pages ~ 27000 Words</option>
                                <option value="91">91 Pages ~ 27300 Words</option>
                                <option value="92">92 Pages ~ 27600 Words</option>
                                <option value="93">93 Pages ~ 27900 Words</option>
                                <option value="94">94 Pages ~ 28200 Words</option>
                                <option value="95">95 Pages ~ 28500 Words</option>
                                <option value="96">96 Pages ~ 28800 Words</option>
                                <option value="97">97 Pages ~ 29100 Words</option>
                                <option value="98">98 Pages ~ 29400 Words</option>
                                <option value="99">99 Pages ~ 29700 Words</option>
                                <option value="100">100 Pages ~ 30000 Words</option>
                                <option value="101">101 Pages ~ 30300 Words</option>
                                <option value="102">102 Pages ~ 30600 Words</option>
                                <option value="103">103 Pages ~ 30900 Words</option>
                                <option value="104">104 Pages ~ 31200 Words</option>
                                <option value="105">105 Pages ~ 31500 Words</option>
                                <option value="106">106 Pages ~ 31800 Words</option>
                                <option value="107">107 Pages ~ 32100 Words</option>
                                <option value="108">108 Pages ~ 32400 Words</option>
                                <option value="109">109 Pages ~ 32700 Words</option>
                                <option value="110">110 Pages ~ 33000 Words</option>
                                <option value="111">111 Pages ~ 33300 Words</option>
                                <option value="112">112 Pages ~ 33600 Words</option>
                                <option value="113">113 Pages ~ 33900 Words</option>
                                <option value="114">114 Pages ~ 34200 Words</option>
                                <option value="115">115 Pages ~ 34500 Words</option>
                                <option value="116">116 Pages ~ 34800 Words</option>
                                <option value="117">117 Pages ~ 35100 Words</option>
                                <option value="118">118 Pages ~ 35400 Words</option>
                                <option value="119">119 Pages ~ 35700 Words</option>
                                <option value="120">120 Pages ~ 36000 Words</option>
                                <option value="121">121 Pages ~ 36300 Words</option>
                                <option value="122">122 Pages ~ 36600 Words</option>
                                <option value="123">123 Pages ~ 36900 Words</option>
                                <option value="124">124 Pages ~ 37200 Words</option>
                                <option value="125">125 Pages ~ 37500 Words</option>
                                <option value="126">126 Pages ~ 37800 Words</option>
                                <option value="127">127 Pages ~ 38100 Words</option>
                                <option value="128">128 Pages ~ 38400 Words</option>
                                <option value="129">129 Pages ~ 38700 Words</option>
                                <option value="130">130 Pages ~ 39000 Words</option>
                                <option value="131">131 Pages ~ 39300 Words</option>
                                <option value="132">132 Pages ~ 39600 Words</option>
                                <option value="133">133 Pages ~ 39900 Words</option>
                                <option value="134">134 Pages ~ 40200 Words</option>
                                <option value="135">135 Pages ~ 40500 Words</option>
                                <option value="136">136 Pages ~ 40800 Words</option>
                                <option value="137">137 Pages ~ 41100 Words</option>
                                <option value="138">138 Pages ~ 41400 Words</option>
                                <option value="139">139 Pages ~ 41700 Words</option>
                                <option value="140">140 Pages ~ 42000 Words</option>
                                <option value="141">141 Pages ~ 42300 Words</option>
                                <option value="142">142 Pages ~ 42600 Words</option>
                                <option value="143">143 Pages ~ 42900 Words</option>
                                <option value="144">144 Pages ~ 43200 Words</option>
                                <option value="145">145 Pages ~ 43500 Words</option>
                                <option value="146">146 Pages ~ 43800 Words</option>
                                <option value="147">147 Pages ~ 44100 Words</option>
                                <option value="148">148 Pages ~ 44400 Words</option>
                                <option value="149">149 Pages ~ 44700 Words</option>
                                <option value="150">150 Pages ~ 45000 Words</option>
                                <option value="151">151 Pages ~ 45300 Words</option>
                                <option value="152">152 Pages ~ 45600 Words</option>
                                <option value="153">153 Pages ~ 45900 Words</option>
                                <option value="154">154 Pages ~ 46200 Words</option>
                                <option value="155">155 Pages ~ 46500 Words</option>
                                <option value="156">156 Pages ~ 46800 Words</option>
                                <option value="157">157 Pages ~ 47100 Words</option>
                                <option value="158">158 Pages ~ 47400 Words</option>
                                <option value="159">159 Pages ~ 47700 Words</option>
                                <option value="160">160 Pages ~ 48000 Words</option>
                                <option value="161">161 Pages ~ 48300 Words</option>
                                <option value="162">162 Pages ~ 48600 Words</option>
                                <option value="163">163 Pages ~ 48900 Words</option>
                                <option value="164">164 Pages ~ 49200 Words</option>
                                <option value="165">165 Pages ~ 49500 Words</option>
                                <option value="166">166 Pages ~ 49800 Words</option>
                                <option value="167">167 Pages ~ 50100 Words</option>
                                <option value="168">168 Pages ~ 50400 Words</option>
                                <option value="169">169 Pages ~ 50700 Words</option>
                                <option value="170">170 Pages ~ 51000 Words</option>
                                <option value="171">171 Pages ~ 51300 Words</option>
                                <option value="172">172 Pages ~ 51600 Words</option>
                                <option value="173">173 Pages ~ 51900 Words</option>
                                <option value="174">174 Pages ~ 52200 Words</option>
                                <option value="175">175 Pages ~ 52500 Words</option>
                                <option value="176">176 Pages ~ 52800 Words</option>
                                <option value="177">177 Pages ~ 53100 Words</option>
                                <option value="178">178 Pages ~ 53400 Words</option>
                                <option value="179">179 Pages ~ 53700 Words</option>
                                <option value="180">180 Pages ~ 54000 Words</option>
                                <option value="181">181 Pages ~ 54300 Words</option>
                                <option value="182">182 Pages ~ 54600 Words</option>
                                <option value="183">183 Pages ~ 54900 Words</option>
                                <option value="184">184 Pages ~ 55200 Words</option>
                                <option value="185">185 Pages ~ 55500 Words</option>
                                <option value="186">186 Pages ~ 55800 Words</option>
                                <option value="187">187 Pages ~ 56100 Words</option>
                                <option value="188">188 Pages ~ 56400 Words</option>
                                <option value="189">189 Pages ~ 56700 Words</option>
                                <option value="190">190 Pages ~ 57000 Words</option>
                                <option value="191">191 Pages ~ 57300 Words</option>
                                <option value="192">192 Pages ~ 57600 Words</option>
                                <option value="193">193 Pages ~ 57900 Words</option>
                                <option value="194">194 Pages ~ 58200 Words</option>
                                <option value="195">195 Pages ~ 58500 Words</option>
                                <option value="196">196 Pages ~ 58800 Words</option>
                                <option value="197">197 Pages ~ 59100 Words</option>
                                <option value="198">198 Pages ~ 59400 Words</option>
                                <option value="199">199 Pages ~ 59700 Words</option>
                                <option value="200">200 Pages ~ 60000 Words</option>
                              </select>
                                <input id="noof_words" type="hidden" name="no_of_words" value="<?php echo isset($or->no_of_words)?$or->no_of_words: '' ;?>"> 
                                <input id="noof_pages" type="hidden" name="no_of_pages" value="<?php echo isset($or->no_of_pages)?$or->no_of_pages: '' ;?>">      
                             
                            </div>
                          </div>

                          <div class="form-group row justify-content-end">

                          <label for="datePicker" class="col-lg-2 control-label">Select Deadline</label>
                            <div class="col-lg-4">
                              <input id="datePicker" onchange="changeDemo();"  name="end_date" type="text" placeholder="Due Date" class="form-control datePicker" value="<?php echo isset($or->end_date)? $or->end_date: '' ;?>"> </div>
                            <label for="time" class="col-lg-2 control-label">Select Time</label>
                      
                            <div class="col-lg-4">
                            <select id="select111" class="form-control  endTime" name="end_time" data-dropup-auto="false" title=" due Time">
                            <?php if(isset($or->end_time)){?><option value="<?php echo $or->end_time?>" selected><?php echo $or->end_time ?></option><?php }?>
                            <option value="00:00">00:00</option>
                            <option value="01:00">01:00</option>
                            <option value="02:00">02:00</option>
                            <option value="03:00">03:00</option>
                            <option value="04:00">04:00</option>
                            <option value="05:00">05:00</option>
                            <option value="06:00">06:00</option>
                            <option value="07:00">07:00</option>
                            <option value="08:00">08:00</option>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                            <option value="21:00">21:00</option>
                            <option value="22:00">22:00</option>
                            <option value="23:00">23:00</option>
                            </select>
                            </div>  


                          </div>  


                          <br>
                        </fieldset>
                 <div class="col-md-12">
                        <div class="row"><!-- row -->
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                        <div class="card card-primary" id="myPriceCard">
                        <div class="card-header" >
                        <i class="fa fa-list-alt" aria-hidden="true"></i> Order Cost</div>
                        <div class="card-body">
                        <ul class="list-unstyled">
                          <li>
                          <strong>Actual Price: </strong>$ <font style="color: red;" class="demo2"><?php echo isset($or->order_price)?$or->order_price *2: '0' ;?></font> </li>
                          <li>
                          <strong>Special Discount 50%: </strong>$<span class="demo3"> <?php echo isset($or->order_price)?$or->order_price/2: '0' ;?></span></li>
                        
<!--                          <li>-->
<!--                            <strong>Service Guarantee: </strong><input style="position: relative; top: 2px;" type="checkbox"  id="paymentStatus" name="paymentStatus"> </li>-->
<!--                          </li>-->

                        </ul>
                        <h3>
                          <strong>Your Price: $</strong>
                          <span class="color-success demo1" ><?php echo isset($or->order_price)?$or->order_price: '0' ;?></span>
<!--                          <input type="hidden" name="order_price" value="--><?php //echo isset($or->order_price)?$or->order_price: '0' ;?><!--" >-->
                        </h3>
                        <br/>
                        <h5 id="orderlabel" style="display: none;">Your Order will be Delivered in </h5>
                         <span id="timers1"></span>
                      </div>
                      </div>
                      </div>
                          <div class="col-md-2"></div>
                  </div><!-- row -->

                      <!-- card end -->
              </div>

               <div class="col-md-12">
                  <div class="row"><!-- row -->
                    <ul class="nav nav-tabs nav-tabs-transparent1 nav-tabs-full  nav-tabs-4" role="tablist">
                      <li class="nav-item"><a href="" aria-controls="step2" role="tab" data-toggle="tab" ></a></li>
                      <li></li>
                      <li></li>
                      <li  class="nav-item"><a href="#step2" id="continue" aria-controls="step2" role="tab" data-toggle="tab" class="btn btn-raised btn-primary btn-block btn-raised mt-2  nav-link"  style="border-radius: 25px; <?php if(!isset($order_details)){?>pointer-events: none;<?php }?>" > <span class="d-none d-sm-inline">Continue</span> &nbsp; <i class="fa fa-arrow-right"></i></a>
                      </li>
                    </ul>
                    <i class="fa fa-lock" id="lockmsg" style="margin-left: 75%;margin-top: 2%;"> *fill all the fields first</i>
                  </div><!-- row -->
                      <!-- card end -->
               </div>
        </div>

                    <div role="tabpanel" class="tab-pane fade " id="step2">
                        <fieldset>
                          <div class="form-group row">
                            <label for="title" autocomplete="false" class="col-lg-2 control-label">Title</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="guidelines_title" name="title" placeholder="Project Title" value="<?php echo isset($or->title)?$or->title: '' ;?>">
                              <input type="hidden" class="form-control" id="" name="clientId" value="<?php echo isset($_SESSION['clientId'])?$_SESSION['clientId']:''?>">
                            </div>
                          </div>
                          <div class="form-group row justify-content-end">
                            <label for="project_subject" class="col-lg-2 control-label">Subject</label>

                            <div class="col-lg-10">
                    <select name="changeSubject1" id="project_subject" class="form-control "  data-dropup-auto="false" title="Select your course name">
                        <?php if (isset($or->subject)){ ?><option value="<?php echo $or->subject?>" selected><?php echo $or->subject ?></option><?php }?>
                                <option value="Biology_and_Life_Sciences">Biology and Life Sciences</option>
                                <option value="Business_and_Management">Business and Management</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Culture">Culture</option>
                                <option value="Economics">Economics</option>
                                <option value="Education">Education</option>
                                <option value="English">English</option>
                                <option value="Environmental_Science">Environmental Science</option>
                                <option value="Finance,Accounting_and_Banking">Finance, Accounting and Banking</option>
                                <option value="Geography">Geography</option>
                                <option value="Healthcare_and_Nursing">Healthcare and Nursing</option>
                                <option value="History_and_Anthropology">History and Anthropology</option>
                                <option value="HRM">HRM</option>
                                <option value="International_Relations">International Relations</option>
                                <option value="IT">IT</option>
                                <option value="Law_and_International_Law">Law and International Law</option>
                                <option value="Linguistics">Linguistics</option>
                                <option value="Literature">Literature</option>
                                <option value="Marketing_and_PR">Marketing and PR</option>
                                <option value="Maths">Maths</option>
                                <option value="Philosophy">Philosophy</option>
                                <option value="Physics">Physics</option>
                                <option value="Political_Science">Political Science</option>
                                <option value="Psychology">Psychology</option>
                                <option value="Sociology">Sociology</option>
                                <option value="Statistics">Statistics</option>
                                <option value="Other">Other</option>
                                <option value="Project_Management">Project Management</option>
                                <option value="Operational_Plan">Operational Plan</option>
                                <option value="Critical_review">Critical review</option>
                                <option value="Critical_Appraisal">Critical Appraisal</option>
                                <option value="Capstone">Capstone</option>
                                <option value="Reflective_Thinking">Reflective Thinking</option>
                              </select>
<!--                              <input id="changeSubject1" type="hidden" name="" value="--><?php //echo isset($or->subject)?$or->subject: '' ;?><!--">-->
                            </div>
                          </div>

                          <div class="form-group row justify-content-end">
                            <label for="citation_style" class="col-lg-2 control-label">Citation Style</label>

                            <div class="col-lg-10">
                         <select name="citation_style" id="citation_style"  class="form-control " data-dropup-auto="false" title="Select a citation style">
                            <?php if (isset($or->citation_style)){ ?><option value="<?php echo $or->citation_style?>" selected><?php echo $or->citation_style ?></option><?php }?>
                              <option value="AMA">AMA</option>
                              <option value="APA">APA</option>
                              <option value="AMS">AMS</option>
                              <option value="Chicago">Chicago</option>
                              <option value="MLA">MLA</option>
                              <option value="Turbian">Turbian</option>
                              <option value="Harvard">Harvard</option>
                              <option value="IEEE">IEEE</option>
                              <option value="other">Other</option>
                          </select>
<!--                          <input id="citationStyle" type="hidden" name="" value="--><?php //echo isset($or->citation_style)?$or->citation_style: '' ;?><!--">-->
                      </div>
                          </div>
                          <div class="form-group row">
                            <label for="guidelines" autocomplete="false" class="col-lg-2 control-label">Name Of Sources</label>

                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="guidelines" name="name_of_sources" placeholder="e.g 3 Sources (1 Literary, 2 Peer Reviewed Academic Sources)" value="<?php echo isset($or->name_of_sources)?$or->name_of_sources: '' ;?>">
                            </div>
                          </div>
                          <div class="form-group row justify-content-end is-empty">
                            <label for="textArea" class="col-lg-2 control-label">Description</label>
                            <div class="col-lg-10">
                              <textarea class="form-control" rows="3" id="textArea" name="description" placeholder="Describe your task in detail or attach original file with Teacher's Instructions."><?php echo isset($or->description)?$or->description: '' ;?></textarea>
                              <!-- <span class="help-block">Describe details of your project.</span> -->
                            </div>
                          </div>
                          <div class="form-group row justify-content-end is-empty">
                            <label for="textArea" class="col-lg-2 control-label">Attach file (optional)</label>
                            <div class="col-lg-10">
                              <input type="file" name="file[]" id="inputFile4" multiple="" value="<?php echo isset($or->file)? $or->file: '';?>" >
                              <div class="input-group">
                                <?php if (isset($files)){
                                 foreach($files as $file);
                             }
                            ?> 
                                <input type="text" name="img" readonly="" class="form-control" value="<?php if (isset($files)){
                                foreach($files as $file){ echo $file->file_name;}}else{echo '';}?>"">
                                <span class="input-group-btn input-group-sm">
                                  <button type="button" class="btn btn-fab btn-fab-mini">
                                    <i class="fa fa-cloud-upload"></i>
                                  </button>
                                </span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      <br>

              <div class="col-md-12">
                          <div class="row"><!-- row -->
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                            <div class="card card-primary" id="myPriceCard">
                             <div class="card-header" >
                                  <i class="fa fa-list-alt" aria-hidden="true"></i> Order Cost</div>
                                      <div class="card-body">
                                        <ul class="list-unstyled">
                          <li>
                          <strong>Actual Price: </strong>$ <font style="color: red;" class="demo2"><?php echo isset($or->order_price)?$or->order_price *2: '0' ;?></font> </li>
                          <li>
                          <strong>Special Discount 50%: </strong>$<span class="demo3"> <?php echo isset($or->order_price)?$or->order_price/2: '0' ;?></span></li>
                        
                          <li>
                            <strong>Service Guarantee: </strong><input style="position: relative; top: 2px;" type="checkbox"  id="paymentStatus" name="paymentStatus"> </li>
                          </li>

                        </ul>
                        <h3>
                          <strong>Your Price: $</strong>
                          <span class="color-success demo1" name="order_price" ><?php echo isset($or->order_price)?$or->order_price: '0' ;?></span>
                          <input type="hidden" name="order_price" value="<?php echo isset($or->order_price)?$or->order_price:'';?>" id="totalPrice">
                          <!-- <span class="color-success" id="SelectedDate">$0</span> -->
                        </h3>
                        <br/> 
                        <h5 id="orderlabel2" style="display: none;">Your Order will be delivered in </h5>
                        <span id="timers2"></span>
                        
                      </div>
                    </div>
                          </div>
                          <div class="col-md-2"></div>
                  </div><!-- row -->

                      <!-- card end -->
            </div>


            <div class="col-md-12">
                  <div class="row"><!-- row -->

                    <ul class="nav nav-tabs nav-tabs-transparent1 nav-tabs-full  nav-tabs-4" role="tablist">
                      <li class="nav-item"><a href="#step1" aria-controls="step2" role="tab" data-toggle="tab" class="btn btn-raised btn-primary btn-block btn-raised mt-2 no-mb nav-link" style="border-radius: 25px;"><i class="fa fa-arrow-left"></i> <span class="d-none d-sm-inline">Back</span></a></li>

                      <li></li>


                      <li></li>

           <?php if(!isset($order_details)){?>
                      <li  class="nav-item"><a href="javascript::" onClick="registerfunction()" aria-controls="step3" role="tab" data-toggle="tab" class="btn btn-raised btn-primary btn-block btn-raised mt-2 no-mb nav-link" style="border-radius: 25px;width: 122%;"> <span class="d-none d-sm-inline">Review & Checkout</span> &nbsp; <i class="fa fa-arrow-right"></i></a></li>
                      <?php }else{?>
                      <li  class="nav-item"><a href="javascript::" onClick="updatefunction()" aria-controls="step3" role="tab" data-toggle="tab" class="btn btn-raised btn-primary btn-block btn-raised mt-2 no-mb nav-link" style="border-radius: 25px;height: 50px;"><span class="d-none d-sm-inline">Update</span> &nbsp; <i class="fa fa-arrow-right"></i></a> </li>
                      <?php }?>
                    </ul>

                  </div><!-- row -->

                      <!-- card end -->
            </div>    
                </div>

              <!-- Order Cost -->
                  


                            <!-- Start  of tab 3 -->
        <div role="tabpanel" class="tab-pane <?php echo (isset($order_details))?'active show':'fade'?>" id="step3">
           
                
                    <ul class="nav nav-tabs nav-tabs-transparent1 nav-tabs-full  nav-tabs-4" role="tablist">
                        <h3>
                            Review Order Details
                        </h3>

 <table class="table table-bordered table-striped">
                      <colgroup>
                        <col class="col-xs-1">
                        <col class="col-xs-7"> </colgroup>
                      <thead>
                        <tr>
                          <th>Element</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <td> Name </td>
                            
                            <td>
                                <span class="text-muted orderId"> 
                                   <?php echo isset($or->client_name)?$or->client_name : '' ;?> 
                                </span>
                            </td>
                        </tr>
                        <tr>
                        <td> Email</td>
                            
                            <td>
                                <span class="text-muted orderId"> 
                                   <?php echo isset($or->client_email)?$or->client_email : '' ;?> 
                                </span>
                            </td>
                        </tr>
                        <tr>
                        <td> Contact </td>
                            
                            <td>
                                <span class="text-muted orderId"> 
                                   <?php echo isset($or->phone)?$or->phone : '' ;?> 
                                </span>
                            </td>
                        </tr>
                        <tr>
                        <td> Order Id </td>
                            
                            <td>
                                <span class="text-muted orderId"> 
                                   <?php echo isset($or->order_id)?$or->order_id : '' ;?> 
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Work Type </td>
                           
                            <td>
                                <span class="text-muted worktype"> 
                                    <?php echo isset($or->document_type)?$or->document_type : '' ;?>
                                     </span>
                                </td>
                            </tr>
                            <tr>
                                <td>Academic Level</td>
                                <td>
                                    <span class="text-muted academicLevel">
                                       <?php echo isset($or->acedamic_level)?$or->acedamic_level : '' ;?>
                                    </span>
                                </td>
                            </tr>
                             <tr>
                                <td> Subject </td>
                                
                                <td>
                                    <span class="text-muted subject"> 
                                        <?php echo isset($or->subject)?$or->subject : '' ;?>
                                     </span>
                                </td>
                            </tr>
                            <tr>
                                <td> Title </td>
                               
                                <td>
                                    <span class="text-muted title">
                                    <?php echo isset($or->title)?$or->title : '' ;?>
                                     </span>
                                </td>
                            </tr>
                            <tr>
                              <td> Citation Style </td>
                              
                              <td>
                                  <span class="text-muted CitationStyle"> 
                                    <?php echo isset($or->citation_style)?$or->citation_style : '' ;?>
                                  </span>
                              </td>
                          </tr>
                          <tr>
                              <td> Required Sources </td>
                              
                              <td>
                                  <span class="text-muted Sources"> 
                                <?php echo isset($or->name_of_sources)?$or->name_of_sources:'' ;?>
                                   </span>
                              </td>
                          </tr>
                              <tr>
                                  <td> Number of Pages ~ No of Words</td>
                              
                              <td>
                                  <span class="text-muted "> 
                                 <?php echo isset($or->no_of_pages)?$or->no_of_pages .'~'. $or->no_of_words: '' ;?>
                                   </span>
                              </td>
                          </tr>
                       
                          <tr>
                              <td>Due Date </td>
                             
                              <td>
                                  <span class="text-muted endDate"> 
                                 <?php echo isset($or->end_date)?$or->end_date.'&nbsp;&nbsp; '. $or->end_time : '' ;?>
                                   </span>
                              </td>
                          </tr>

                          <tr>
                              <td>Description</td>
                              <td class="text-muted Description">
                                <?php echo isset($or->order_price)?$or->description: '' ;?> 
                              </td>
                          </tr>
                       
                          
                        <tr>
                            <td> Files </td>
                           
                            <td>    
                            <?php if (isset($files)){
                                 foreach($files as $file){
                            ?>                                             
                              <lable class="btn-info"><a href="<?php echo base_url(); ?>index.php/file/pdf/<?php echo isset($file->file_name)?$file->file_name : '' ;?>" style="color: white"><?php echo isset($file->file_name)?$file->file_name : '' ;?></a></lable>
                            <?php }}?>
                         
                            </td>
                        </tr>
                      </tbody>
                      <tr>
                          <td></td>
                          <td><a href="#step1" aria-controls="step1" role="tab" data-toggle="tab" class="nav-link" class="nav-link withoutripple" data-toggle="tooltip" title="Edit"> <i class="fa fa-edit">edit</i></a></td>
                      </tr>
                    </table>
               

                 



                      <li class="nav-item"><a href="#step1" aria-controls="step1" role="tab" data-toggle="tab" class="btn btn-raised btn-primary btn-block btn-raised mt-2 no-mb nav-link" style="border-radius: 25px;"><i class="fa fa-arrow-left"></i> <span class="d-none d-sm-inline">Back</span></a></li>

                      <li></li>


                      <li></li>

               <!--  <li class="nav-item"><button type="submit" class="btn btn-raised btn-primary btn-raised  no-mb " > Save And Continue</button></li> -->
              <li  class="nav-item"><a href="javascript:document.getElementById('formsubmit').submit();" id="btnsubmit" class="btn btn-raised btn-primary btn-block btn-raised mt-2 no-mb nav-link" style="border-radius: 25px;"> <span class="d-none d-sm-inline"> Checkout</span> &nbsp; <i class="fa fa-arrow-right"></i></a></li>

                </ul>
                </div>

                <!-- Start  of tab 3 -->

                  

            <!-- Form Close -->
   

          </div>
        </div>
      </div>

          </div>
      
          
        </div> <!-- col-md-8 class end -->
  </form>
        <div class="col-md-4 animated zoomInDown animation-delay-5">
        <div id="ten-ways">
                        <div class="order-section-r">
                            <div class="order-list-item" >
                                <h2><span>10</span><br>  reasons to order now</h2>
                                <div class="separator-od"></div>
                                <ul>
                                    <li><span class="blue-list">Free</span> Proof Reading</li>
                                    <li><span class="blue-list">Free</span> Unlimited Revisions</li>
                                    <li><span class="blue-list">Free</span> Formatting</li>
                                    <li><span class="blue-list">Free</span> Title Page</li>
                                    <li><span class="blue-list">Free</span> Bibliography</li>
                                    <li><span class="blue-list">US Qualified</span> Writers</li>
                                    <li><span class="blue-list">No Plagiarism</span> Guaranteed</li>
                                    <li><span class="blue-list">Direct contact</span> with Writer</li>
                                    <li><span class="blue-list">100%</span> Secure &amp; Confidential</li>
                                    <li><span class="blue-list">Deadline</span> Driven</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

      </div>

      <!-- container -->
    
    </div>
    <!-- ms-site-container -->
    <div class="btn-back-top">
                <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
                    <i class="zmdi zmdi-long-arrow-up"></i>
                </a>
            </div>

   <!-- Modal -->
      <div class="modal modal-primary  registermodal" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" id="modalClose" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
                <img src="<?php echo base_url()  ?>assets/img/logo.png" alt="" style="width: 200px;height: 80px;">
                <!-- <span class="ms-logo ms-logo-white ms-logo-sm mr-1">j</span>
                <h3 class="no-m ms-site-title">Material
                  <span>Style</span>
                </h3> -->
              </div>
              <div class="modal-header-tabs">
                <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a href="#ms-login-tab1" aria-controls="ms-login-tab1" role="tab" data-toggle="tab" id="loginNav" class="nav-link withoutripple <?php echo (isset($_SESSION['clientId']))?'active':''?>">
                      <i class="zmdi zmdi-account"></i> Login</a>
                  </li>
                  <li class="nav-item current" role="presentation">
                    <a href="#ms-register-tab1" id="register-tab1" aria-controls="ms-register-tab1" role="tab" data-toggle="tab" id="registerNav" class="nav-link withoutripple">
                      <i class="zmdi zmdi-account-add"></i> Register</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="#ms-recovery-tab1" aria-controls="ms-recovery-tab1" role="tab" data-toggle="tab" class="nav-link withoutripple">
                      <i class="zmdi zmdi-key"></i> Recovery Pass</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="modal-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane <?php echo (isset($_SESSION['clientId']))?'active show':'fade'?>" id="ms-login-tab1">
                  <form  id="formclientlogin" action="" method="POST" autocomplete="off">
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user">Email</label>
                          <input type="email" name="uemail" id="uclientEmail" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Password</label>
                          <input type="password" name="upassword"  id="uclientPassword" class="form-control"> </div>
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
                          <button class="btn btn-raised btn-primary pull-right" id="clientLogin" type="submit">Login</button>
                        </div>

                      </div>
                    </fieldset>
                  </form>

                </div>
                <div role="tabpanel" class="tab-pane <?php echo (isset($_SESSION['clientId']))?'fade':'active show'?>" id="ms-register-tab1">
                  <form id="formclientregister"  action="" method="POST">
                    <fieldset>
                      <div class="form-group label-floating is-empty is-focused">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="">Name</label>
                          <input type="text" id="clientname" class="form-control" name="uname" required> </div>
                      </div>
                      <div class="form-group label-floating is-empty is-focused">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                          </span>
                          <label class="control-label" for="">Email</label>
                          <input type="email" id="clientEmail2" class="form-control clientEmail" name="uemail" required> </div>
                           <span id="errormsg2" style="color:red"></span>
                      </div>
                      <div class="form-group label-floating is-empty is-focused">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                          </span>
                          <label class="control-label" for="">Contact</label>
                          <input type="tel" id="clientcontact" class="form-control" name="ucontact" onkeypress="return isNumberKey(event)" maxlength="10" required> </div>
                      </div>
                      <div class="form-group label-floating is-empty is-focused">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass-r">Password</label>
                          <input type="password" id="clientpassword" class="form-control" name="upassword"> </div>
                      </div>
                      <div class="form-group label-floating is-empty is-focused">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass-rn">Re-type Password</label>
                          <input id="clientConfirmPassword" type="password" id="ms-form-pass-rn" class="form-control" > </div>
                      </div>
                      <button type="submit" id="clientRegister1" class="btn btn-raised btn-block btn-primary">Register Now</button>
                    </fieldset>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab1">
                  <fieldset>
                     <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-email"></i>
                        </span>
                        <label class="control-label" for="">Email</label>
                        <input type="email" id="" class="form-control"> 
                        </div>
                    </div>
                    <button class="btn btn-raised btn-block btn-primary">Send Password</button>
                  </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


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


    <!-- ms-site-container -->

      <script>
      window.onscroll = function() {myFunction()};

      var header = document.getElementById("myPriceCard");
      var sticky = header.offsetTop;

      function myFunction() {
        if (window.pageYOffset >= sticky) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      }

    
    </script>



    <!--***********************Script used to fetch Email Address******************************/  -->

       <script type="text/javascript">
    

    var searchRequest = null;

$(function () {
    var minlength = 3;

    $(".sample_search").focusout(function () {
        var that = this,
        value = $(this).val();
        if (value.length >= minlength && isValidEmailAddress(value) ) {
            if (searchRequest != null) 
                searchRequest.abort();

            console.log(value);
            $(".emptyMessage").show();
            $(".emptyMessage2").hide();
            searchRequest = $.ajax({
                type: "GET",
                url: "sample.php",
                data: {
                    'search_keyword' : value
                },
                dataType: "text",
                success: function(msg){
                    //we need to check if the value is the same
                    if (value==$(that).val()) {
                    //Receiving the result of search here
                    }
                }
            });
        }
    });
});
   </script>
   

   <!-- /***********************Script used to fetch Email Address******************************/  -->

   <script>
      function isValidEmailAddress(emailAddress) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          return regex.test(emailAddress);
            }
   </script>



    <script>


      // -------Script Use to disable last dates Start-------------


      $('.datePicker').datepicker({
                    format: 'yyyy/mm/dd',
                    startDate: new Date()
                });

      // -------Script Use to disable last dates End-------------

      $("#datePicker").on("change",function(e){
        changeDemo();

        });

      
      function changeDemo()
      {
        var institude = $("#mySelect").val();
        var pages = $("#mySelect2").val();
        var date = $("#datePicker").val();
        var demo1 = "";
        var day1 , day2 , day3, day4_5 , day6_7, day8; 



        if($(".inputEmailCheck").val() == '' && $(".inputEmailCheck").val()!= isValidEmailAddress(emailAddress))
            {

              $(".emptyMessage2").show();  
              $(".emptyMessage").hide();

            }

           else { 

            // $(".emptyMessage").hide();

    if(institude=='High_School')
        {

          day1 = 20;
          
          day2 = 18.50;
              
          day3 = 17;
              
          day4_5 = 16;
              
          day6_7 = 15.50; /*15.50*/
            
          day8 = 15;                 
               

        }

        else if(institude == 'College')
        {
          day1 = 22.50; /*22.50*/
            
          day2 = 21.50; /*21.50*/
                
          day3 = 20.50; /*20.50*/
              
          day4_5 = 19;
                
          day6_7 = 18.50; /*18.50*/
                
          day8 = 18;                 
               
        } 
        else if ( institude == 'Masters') 
        {
          day1 = 25;
               
          day2 = 23.50; /*23.50*/
               
          day3 = 22.75; /*22.75*/
               
          day4_5 = 21;
               
          day6_7 = 20.50; /*20.50*/

          day8 = 20;                 
                
        }
        else if (institude == 'PHD') 
        {
          day1 = 38;
                 
          day2 = 35;
              
          day3 = 34;
               
          day4_5 = 33;
                
          day6_7 = 32;
              
          day8 = 30;                 
                
        }

        var d = new Date();
        var dateDiff = 0;
        var seconds_in_day = 86400;
        var currentDate = d.getTime();
      
        var ppg = 0 ;
        var selectedDate = new Date(date).getTime();
                
        var dateDiff = Math.ceil(((selectedDate - currentDate)/1000/86400));

        if (dateDiff == 0) 
        {
          ppg = day1;
        }

        else if (dateDiff == 1) {
          ppg = day1;
        } else if (dateDiff == 2 ) {
          ppg = day2;
        } else if (dateDiff == 3 ) {
          ppg = day3;
        } else if (dateDiff == 4 || dateDiff == 5 ) {
          ppg = day4_5;
        } else if (dateDiff == 6 || dateDiff == 7 ) {
          ppg = day6_7;
        } else {
          ppg = day8;
        }

        if(institude=="0" || isNaN(dateDiff))
        {
          demo1 = day1;
        }
        else
        {
          demo1 = ppg;
        }
        demo1 *=pages;
          $(".demo1").html(demo1.toFixed(2));
          var totalPrice = demo1.toFixed(2);
      document.getElementById("totalPrice").value = totalPrice;
           $(".demo2").html(demo1*2); 
           $(".demo3").html(demo1);
         $('#continue').css( 'pointer-events', 'auto' );
           $('#lockmsg').css('display','none');
         

      }

      }
    

    </script> 
    <script type="text/javascript">

$('#documentType').on('change', function(){
       // document.getElementById("changeSubject1").value  = $(this).value();
       var subject = $('#documentType option:selected').attr('value');
        if(subject =='other'){
            $('#othersubject').css('display','block');
        }else{
          $('#othersubject').css('display','none');  
        }
    });


       $('#paymentStatus').on('change', function(){
       var paymentStatus = $('#paymentStatus ').val();
       if(paymentStatus =='on') {
           var tprice = document.getElementById("totalPrice").value
           $(".demo1").html(tprice/2);
       }else{

       }
        document.getElementById("statusPayment").value = paymentStatus;
    });

       $('#mySelect2').on('change', function(){
       // document.getElementById("changeSubject1").value  = $(this).value();
       var no_of_page = $('#mySelect2 option:selected').text();
       var no_ofpages= no_of_page.substr(0,no_of_page.indexOf('~'));
        var no_of_word= no_of_page.substr(no_of_page.indexOf('~')+1);
         document.getElementById("noof_words").value = no_of_word;
         document.getElementById("noof_pages").value = no_ofpages;
    });
       // var no_of_page = $('#mySelect2 option:selected').text();
       // var no_ofpages= no_of_page.substr(0,no_of_page.indexOf('~'));
       //  var no_of_word= no_of_page.substr(no_of_page.indexOf('~')+1);
    </script>

<script type="text/javascript">
     //  Condition for  onchange time , timer start, lead generate
$('.endTime').on('change', function(){
	document.getElementById("timers1").innerHTML="";
	document.getElementById("timers2").innerHTML="";

        
        var name = document.getElementById("inputname").value;
        var email = document.getElementById("inputEmail").value;
        var phone = document.getElementById("phone").value;
        var documentType = $('.doctype option:selected').attr('value');
        var academicLevel = $('#mySelect option:selected').attr('value');
        var no_of_page = $('#mySelect2 option:selected').text();
        var quotedPrice = document.getElementById("totalPrice").value;
        



$('#orderlabel').css('display','block');
$('#orderlabel2').css('display','block');
// Update the count down every 1 second
var x = setInterval(function() {
	var endTime = $('.endTime option:selected').attr('value');
	var duedate = document.getElementById("datePicker").value;
var countDownDate = new Date(duedate+" "+endTime).getTime();
    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("timers1").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    document.getElementById("timers2").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("timers1").innerHTML = "EXPIRED";
        document.getElementById("timers2").innerHTML = "EXPIRED";
    }
}, 1000);

var duedate = document.getElementById("datePicker").value;
          $.ajax({
             type: "POST",
             url: "Client/generate_lead", 
             data: {name: name, email : email,phone: phone, documentType : documentType,academicLevel: academicLevel, no_of_page : no_of_page,quotedPrice: quotedPrice, duedate : duedate},
             
             cache:false,
             success: 
             function(data){
                document.getElementById("inputlead").value = data;
                 
            }
        });

      });
  </script>
<script type="text/javascript">
     //  Condition for Email exist
$("#clientEmail2").on('change', function() {
    var msg = $('#errormsg2');
    msg.html(" ");
    var email = document.getElementById("clientEmail2").value;
    $.ajax({ 
        cache: false,
        dataType:"html",
        type: 'POST',
        url: "Client/getuser",
        data:{email:email},
        success:function(data){
                if(data == 1)
                    {

                     msg.html("User Already Exist ! Please Login");
                     $('#clientRegister1').css( 'pointer-events', 'none' );
                   
                }
                else{
                  $('#clientRegister1').css( 'pointer-events', 'auto' );
                   msg.html(" ");
                }
            }
    });
});
</script>


  <script type="text/javascript">

  function updatefunction(){
      //validate  form fileds
      var x1 = document.forms["myForm"]["clientName"].value;
      var x2 = document.forms["myForm"]["email"].value;
      var x3 = document.forms["myForm"]["phone"].value;
      var x4 = document.forms["myForm"]["document_type1"].value;
      var x5 = document.forms["myForm"]["acedamic_level"].value;
      var x6 = document.forms["myForm"]["end_date"].value;
      var x7 = document.forms["myForm"]["end_time"].value;
      var x8 = document.forms["myForm"]["title"].value;
      var x9 = document.forms["myForm"]["changeSubject1"].value;
      var x10 = document.forms["myForm"]["citation_style"].value;
      var x11 = document.forms["myForm"]["name_of_sources"].value;
      var x12 = document.forms["myForm"]["description"].value;


      if (x1 == "") {
          swal("Name Must be filled out!", "", "warning");
          //return false;
      }else if (x2 == "") {
          swal("Email must be filled out!", "", "warning");
          //return false;
      }else if (x3 == "") {
          swal("Contact must be filled out!", "", "warning");
          //return false;
      }else if (x4 == "") {
          swal("document_type must be filled out!", "", "warning");
          //return false;
      }else if (x5 == "") {
          swal("acedamic_level must be filled out!", "", "warning");
          //return false;
      }else if (x6 == "") {
          swal("Date must be filled out!", "", "warning");
          //return false;
      }else if (x7 == "") {
          swal("Time must be filled out!", "", "warning");
          //return false;
      }else if (x8 == "") {
          swal("Title must be filled out!", "", "warning");
          //return false;
      }else if (x9 == "") {
          swal("Subject must be filled out!", "", "warning");
          //return false;
      }else if (x10 == "") {
          swal("Citation_style must be filled out!", "", "warning");
          //return false;
      }else if (x11 == "") {
          swal("name_of_sources must be filled out!", "", "warning");
          //return false;
      }else if (x12 == "") {
          swal("Description must be filled out!", "", "warning");
          //return false;
      }

      else {
          $('#formsubmit_order').submit();
      }

      };
 //  Condition for  chk whether login or not
  function registerfunction(){

      //validate  form fileds
      var x1 = document.forms["myForm"]["clientName"].value;
      var x2 = document.forms["myForm"]["email"].value;
      var x3 = document.forms["myForm"]["phone"].value;
      var x4 = document.forms["myForm"]["document_type1"].value;
      var x5 = document.forms["myForm"]["acedamic_level"].value;
      var x6 = document.forms["myForm"]["end_date"].value;
      var x7 = document.forms["myForm"]["end_time"].value;
      var x8 = document.forms["myForm"]["title"].value;
      var x9 = document.forms["myForm"]["changeSubject1"].value;
      var x10 = document.forms["myForm"]["citation_style"].value;
      var x11 = document.forms["myForm"]["name_of_sources"].value;
      var x12 = document.forms["myForm"]["description"].value;


            if (x1 == "") {
                swal("Name Must be filled out!", "", "warning");
          //return false;
      }else if (x2 == "") {
                swal("Email must be filled out!", "", "warning");
          //return false;
      }else if (x3 == "") {
                swal("Contact must be filled out!", "", "warning");
          //return false;
      }else if (x4 == "") {
                swal("document_type must be filled out!", "", "warning");
          //return false;
      }else if (x5 == "") {
                swal("acedamic_level must be filled out!", "", "warning");
          //return false;
      }else if (x6 == "") {
                swal("Date must be filled out!", "", "warning");
          //return false;
      }else if (x7 == "") {
                swal("Time must be filled out!", "", "warning");
                //return false;
      }else if (x8 == "") {
                swal("Title must be filled out!", "", "warning");
                //return false;
      }else if (x9 == "") {
                swal("Subject must be filled out!", "", "warning");
                //return false;
      }else if (x10 == "") {
                swal("Citation_style must be filled out!", "", "warning");
                //return false;
      }else if (x11 == "") {
                swal("name_of_sources must be filled out!", "", "warning");
                //return false;
      }else if (x12 == "") {
                swal("Description must be filled out!", "", "warning");
                //return false;
       }

      else {


          var sessionId = '<?php echo isset($_SESSION['clientId']) ? $_SESSION['clientId'] : 0;?>';
          if (sessionId != 0) {
              $('#formsubmit_order').submit();
          } else {
              var Cname = document.forms["myForm"]["clientName"].value;
              var Cemail = document.forms["myForm"]["email"].value;
              var Cphone = document.forms["myForm"]["phone"].value;

              document.getElementById("clientname").value = Cname;
              document.getElementById("clientEmail2").value = Cemail;
              document.getElementById("uclientEmail").value = Cemail;
              document.getElementById("clientcontact").value = Cphone;

                                $.ajax({ 
        cache: false,
        dataType:"html",
        type: 'POST',
        url: "Client/getuser",
        data:{email:Cemail},
        success:function(data){
                if(data == 1)
                    {
             $('#registerNav').removeClass("active");
             $('#loginNav').addClass("active");
             $('#ms-register-tab1').removeClass("active show");
              $('#ms-login-tab1').addClass("active show");
              $('.registermodal').modal('show');
                
                }
                else{
              $('#loginNav').removeClass("active");
              $('#registerNav').addClass("active");
              $('#ms-login-tab1').removeClass("active show");
              $('#register-tab1').addClass("active show");
              // $('#step1').toggleClass("active fade");
              // $('#step2').toggleClass("fade active");
              $('.registermodal').modal('show');
          }
          }
      });

    }
  }
};

 //  Condition for client login ajax
$('#clientLogin').on('click', function() {
     var upassword = document.getElementById("uclientPassword").value;
     var email = document.getElementById("uclientEmail").value;
    $.ajax({
             type: "POST",
             url: "Client/loginOrder", 
            data:{uemail:email,upassword:upassword},
             cache:false,
             success: 
             function(data){
                   // window.location.reload();
                   document.getElementById("inputEmail").value = data;
                   $('#formsubmit_order').submit();
               }
            
        });

      });


 //  Condition for Client Register with ajax
$('#clientRegister1').on('click', function(e) {
    var name = document.getElementById("clientname").value;
    var email = document.getElementById("clientEmail2").value;
    var contact = document.getElementById("clientcontact").value;
    var password = document.getElementById("clientpassword").value;
    var repassword = document.getElementById("clientConfirmPassword").value;


        if(name ==''){
            swal("Name not filled out", "", "warning");
            e.preventDefault();
        }else if(email ==''){
            swal("Email not filled out", "", "warning");
            e.preventDefault();
        }else if(contact ==''){
            swal("Contact not filled out", "", "warning");
            e.preventDefault();
        }else if(password == ''){
            swal("Password not filled out", "", "warning");
            e.preventDefault();
        }else if(repassword == ''){
            swal("Confirm Password not filled out", "", "warning");
            e.preventDefault();
        }else if(password != repassword) {
        e.preventDefault();
        swal("Password and Confirm Password not matched!", "", "warning");
    }
        else {


            $.ajax({
                type: "POST",
                url: "Client/createClient",
                data: {uname: name, uemail: email, ucontact: contact, upassword: password},
                cache: false,
                success:
                    function (data) {

                        // window.location.reload();
                        document.getElementById("inputEmail").value = data;
                        $('#formsubmit_order').submit();

                    }

            });
        }

      });

  </script>

<script type="text/javascript">
    //  Condition for 
	$( document ).ready(function() {
	     var name = document.getElementById("inputname").value;
        var email = document.getElementById("inputEmail").value;
        var phone = document.getElementById("phone").value;
        var documentType = $('.doctype option:selected').attr('value');
        var academicLevel = $('#mySelect option:selected').attr('value');
        var no_of_page = $('#mySelect2 option:selected').text();
        var endTime = $('.endTime option:selected').attr('value');
	    var duedate = document.getElementById("datePicker").value;

	    if(name =='' && email =='' && phone =='' && endTime ==''&& duedate== ''){
         $('#continue').css( 'pointer-events', 'none' );
         $('#lockmsg').css('display','block');
	    }else{
	      
	 }

});


// Nav links continue
$(".nav-tabs a.nav-link").click(function(){
    var x = $(this).attr("href");
    x = x.replace("#", "");
   // $(".tab-pane").each(function(){
        var y = $(this).attr("id");
        if (x == y) $(this).addClass("active show");
         else $(this).removeClass("active show");
        // $('#ms-register-tab1').addClass("active show");
          // $('#step2').addClass("active");  
   // });
});

// form Vlidation
    function validateForm() {

    }

</script>

