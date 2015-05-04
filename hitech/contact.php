<?php include_once('header.php'); ?>     		
			
			<hgroup class="page-head pag" style="width: 74.5%;">     
							<img src="images/contact-bannerff.jpg" style="width:100%;">
							<img src="images/ourteam-banner1.png" style="margin-top:-9px;">
                        </hgroup>
			
		   <div id="container" class="clearfix" style="width:100%;">
					
			<div id="content" >
					<div style="width:74%; margin:auto;">	
						<div class="contact-form-container" style="float: left; width:69%">
								<h3 class="smart-head" style="width:82%">Contact Us</h3>
								<p  style="width:55%">Fill out the form below to send us a message and we will get back to you ASAP.</p>
								<form action="#" id="contact-form" class="clearfix" method="post"  style="width:55%;float:left">
									<div class="form-cell">
										<label class="display-ie8" >Name:</label>
										<input type="text" placeholder="Name" class="name required" name="author" title="* Please provide your name"  /><span>*</span>
									</div>
									
									<div class="form-cell">
										 <label class="display-ie8" >Phone:</label>
										<input type="text" placeholder="Phone No." class="phone" name="phone" />
									</div>
									
									<div class="form-cell">
										 <label class="display-ie8" >Email:</label>
										<input type="text" placeholder="Email Address'" class="email required" name="email" title="* Please enter your email address" /><span>*</span>
									</div>
									
									<div class="form-cell">
										 <label class="display-ie8" >Subject:</label>
										<input type="text" placeholder="Subject" class="subject" name="subject" />
									</div>																								
									
									<div class="form-row">
										 <label class="display-ie8" >Message:</label>
										<textarea name="message" class="message required" cols="30" rows="10" placeholder="Message" title="* Please enter your message"></textarea>
										<input type="submit" name="submit" value="Submit" class="submit readmore"/>
										
										<input type="hidden" name="action" value="send_message" />
										<input type="hidden" name="target" value="fahid@960development.com" />
										<img src="images/loading.gif" id="contact-loader" alt="Loader" />
										<p id="message-sent">&nbsp;</p>

									</div>
									
									<div class="error-container">
									</div>
								</form>
								
								
									 
													
						</div >   
						
						<section class="widget" style="width:30%;float:left;">                 
									<div class="appointment">
										<div class="header">
											<h2> EMAIL</h2>
											<h3 class="number"></h3>
												
										</div>
										<div class="error-container"><span style="font-size:15px">E-mail : hitechhospital08@gmail.com</span></div>                            
									</div>                             
									<div class="appointment">
										<div class="header">
											<h2>ADDRESS</h2>
										</div>
										<div class="error-container"> <span style="font-size:15px">HI-TECH HOSPITAL <br/>Krishna Colony,<br/> Near Ambedkar Circle<br/>Alwar(Raj.)</span></div>
									</div>                             
									<div class="appointment">
										<div class="header">
											<h2>PHONE NO.</h2>
											<h3 class="number"></h3>
										</div>
										<div class="error-container">
											<span style="font-size:15px">+91-9772208910 <br/>+91-144-2339464<br/>+91-144-2330719</span>
										</div>
									</div>                             
						</section>		
					</div>
					<div style="width:74%; margin:auto;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1768.3124271016381!2d76.61361495732888!3d27.57415094078432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3972999448b1e8e5%3A0xd6f3c5e87b493028!2sAmbedkar+Circle!5e0!3m2!1sen!2sin!4v1407157468516" width="980" height="450" frameborder="0" style="border:0 margin-left:20px; width:100%;"></iframe>
					</div>
			</div><!-- end of container -->
			    <?php include('footer.php');?>