<?php include "header.php"?>
		<!-- WRAPPER -->
		<div id="wrapper">

			<!-- PAGE TITLE -->
			<header id="page-title" class="nopadding">
				<div id="gmap"><!-- google map --></div>
				<script type="text/javascript">
					var	$googlemap_latitude 	= 13.0887862,
						$googlemap_longitude	= 80.2904121,
						$googlemap_zoom			= 13;
				</script>
			</header>

			<section id="contact" class="container">


				<div class="row">

					<!-- FORM -->
					<div class="col-md-8">

						<h2>Cadavar Form <strong></strong></h2>

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
									<div class="col-md-4">
										<label>Full Name *</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="contact_name" id="contact_name">
									</div>
									<div class="col-md-4">
										<label>E-mail Address *</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="contact_email" id="contact_email">
									</div>
									
									<div class="col-md-4">
										<label>E-mail Address *</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="contact_email" id="contact_email">
									</div>
									<div class="col-md-4">
										<label>Phone</label>
										<input type="text" value="" data-msg-required="Please enter your phone" data-msg-email="Please enter your phone" maxlength="100" class="form-control" name="contact_phone" id="contact_phone">
									</div>
								</div>
							</div>
							<div class="row">
							
								<!--<div class="form-group">
									<div class="col-md-12">
										<label>Subject</label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="contact_subject" id="contact_subject">
									</div>
								</div>-->
								
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
										<label class="block text-right fsize12">Antispam Code</label>
										<img alt="" rel="nofollow,noindex" width="50" height="18" src="php/captcha5204.png?bgcolor=ffffff&amp;txtcolor=000000">
										<input type="text" name="contact_captcha" id="contact_captcha" value="" data-msg-required="Please enter the subject." maxlength="6" style="width:100px; margin-left:10px;">
									</span>

									<input id="contact_submit" type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
								</div>
							</div>
						</form>
					
					</div>
					<!-- /FORM -->


					<!-- INFO -->
					<div class="col-md-4">

						

						<div class="divider half-margins"><!-- divider -->
							<i class="fa fa-star"></i>
						</div>

						<p>
							<span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> 15\51,paris corner,chennai-641007</span>
							<span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> 1800-555-1234</span>
							<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:mail@yourdomain.com">Savelifeorgandonation@gmail.in.com</a></span>
						</p>

						<div class="divider half-margins"><!-- divider -->
							<i class="fa fa-star"></i>
						</div>

						<h4 class="font300">Business Hours</h4>
						<p>
							<span class="block"><strong>Monday - Friday:</strong> 10am to 6pm</span>
							<span class="block"><strong>Saturday:</strong> 10am to 2pm</span>
							<span class="block"><strong>Sunday:</strong> Closed</span>
						</p>

					</div>
					<!-- /INFO -->

				</div>

			</section>

		</div>
		<!-- /WRAPPER -->
<?php include "footer.php"?>