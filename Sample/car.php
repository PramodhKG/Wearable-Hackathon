<?php include "header.php"?>
		<!-- WRAPPER -->
		<div id="wrapper">

			<!-- PAGE TITLE -->
			<header id="page-title" class="nopadding">
				
			</header>

			<section id="contact" class="container">


				<div class="row">

					<!-- FORM -->
					<div class="col-md-12">

						<h2>Cadavar Form</h2>

						<!-- 
							if you want to use your own contact script, remove .hide class
						-->

						<!-- SENT OK -->
						<div id="_sent_ok_" class="alert alert-success fade in fsize16 hide">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Thank You!</strong> Your message successfully sent!
						</div>
						<!-- /SENT OK -->

						<!-- SENT FAILED -->
						<div id="_sent_required_" class="alert alert-danger fade in fsize16 hide">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Failed!</strong> Please complete all mandatory (*) fields!
						</div>
						<!-- /SENT FAILED -->

						<form id="contactForm" class="white-row" action="" method="post">
							<div class="row">
								<div class="form-group">
								
								
									
										<div class="row">
								<div class="form-group">
									<div class="col-md-4">
										<label>hospital name</label>
										<select class="form-control">
										  <option>Shiva hospital</option>
										  <option>Psg hospital</option>
										  <option>Kg hospital</option>
										  <option>Surya hospital</option>
										</select> 
									</div>
										
									
									
									<div class="col-md-4">
										<label>Last Name *</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="contact_name" id="contact_name">
									</div><br>
									
									<div class="col-md-4">
										<label>E-mail Address *</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="contact_email" id="contact_email">
									</div>
									
									
									<div class="col-md-4">
										<label>gender </label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="contact_name" id="contact_name">
									</div><br><br>
									
									<div class="col-md-4">
										<label>address</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="contact_name" id="contact_name">
									</div><br><br>
									
									<div class="col-md-4">
										<label>Phone no</label>
										<input type="text" value="" data-msg-required="Please enter your phone" data-msg-email="Please enter your phone" maxlength="100" class="form-control" name="contact_phone" id="contact_phone">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
										<label>Subject</label>
										<select class="form-control">
										  <option>Eyes</option>
										  <option>Heart</option>
										  <option>Liver</option>
										  <option>Blood</option>
										</select> 
									</div>
									<div class="col-md-4">
										<label>Organ donate</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="contact_name" id="contact_name">
									</div><br>
									
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Message *</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="contact_message" id="contact_message"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">

									<span class="pull-right"><!-- captcha -->
										<label class="block text-right fsize12">Donation Code</label>
										<img alt="" rel="nofollow,noindex" width="50" height="18" src="php/captcha5204.png?bgcolor=ffffff&amp;txtcolor=000000">
										<input type="text" name="contact_captcha" id="contact_captcha" value="" data-msg-required="Please enter the subject." maxlength="6" style="width:100px; margin-left:10px;">
									</span>

									<input id="contact_submit" type="submit" value="Submit" class="btn btn-primary btn-lg" data-loading-text="Loading...">
								</div>
							</div>
						</form>
					
					</div>
					<!-- /FORM -->


					<!-- INFO -->
					
					<!-- /INFO -->

				</div>

			</section>

		</div>
		<!-- /WRAPPER -->
<?php include "footer.php"?>