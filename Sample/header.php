<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	

<head>
		<meta charset="utf-8" />
		<title>Organ</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- WEB FONTS 
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css" />-->

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/superslides.css" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="assets/plugins/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout-responsive.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/orange.css" rel="stylesheet" type="text/css" /><!-- orange: default style -->
		<!--<link id="css_dark_skin" href="assets/css/layout-dark.css" rel="stylesheet" type="text/css" />--><!-- DARK SKIN -->

		<!-- styleswitcher - demo only -->
		<link href="assets/css/color_scheme/orange.css" rel="alternate stylesheet" type="text/css" title="orange" />
		<link href="assets/css/color_scheme/red.css" rel="alternate stylesheet" type="text/css" title="red" />
		<link href="assets/css/color_scheme/pink.css" rel="alternate stylesheet" type="text/css" title="pink" />
		<link href="assets/css/color_scheme/yellow.css" rel="alternate stylesheet" type="text/css" title="yellow" />
		<link href="assets/css/color_scheme/darkgreen.css" rel="alternate stylesheet" type="text/css" title="darkgreen" />
		<link href="assets/css/color_scheme/green.css" rel="alternate stylesheet" type="text/css" title="green" />
		<link href="assets/css/color_scheme/darkblue.css" rel="alternate stylesheet" type="text/css" title="darkblue" />
		<link href="assets/css/color_scheme/blue.css" rel="alternate stylesheet" type="text/css" title="blue" />
		<link href="assets/css/color_scheme/brown.css" rel="alternate stylesheet" type="text/css" title="brown" />
		<link href="assets/css/color_scheme/lightgrey.css" rel="alternate stylesheet" type="text/css" title="lightgrey" />
		<!-- /styleswitcher - demo only -->

		<!-- STYLESWITCHER - REMOVE ON PRODUCTION/DEVELOPMENT -->
		<link href="assets/plugins/styleswitcher/styleswitcher.css" rel="stylesheet" type="text/css" />		

		<!-- Morenizr -->
		<script type="text/javascript" src="assets/plugins/modernizr.min.js"></script>
	</head>
	<body><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="assets/images/boxed_background/1.jpg"  -->

		<!-- Top Bar -->
		<header id="topHead">
			<div class="container">

				<!-- PHONE/EMAIL -->
				<span class="quick-contact pull-left">
					<i class="fa fa-phone"></i> 1800-555-1234 &bull; 
					<a class="hidden-xs" href="mailto:mail@yourdomain.com">mail@donor.com</a>
				</span>
				<!-- /PHONE/EMAIL -->

				

				<!-- SIGN IN -->
				<div class="pull-right nav signin-dd">
					<a id="quick_sign_in" href="page-signin.html" data-toggle="dropdown"><i class="fa fa-users"></i><span class="hidden-xs"> Sign In</span></a>
					<div class="dropdown-menu" role="menu" aria-labelledby="quick_sign_in">

						<h4>Sign In</h4>
						<form action="" method="post" role="form">

							<div class="form-group"><!-- email -->
								<input required type="email" class="form-control" placeholder="Username or email">
							</div>

							<div class="input-group">

								<!-- password -->
								<input required type="password" class="form-control" placeholder="Password">
								
								<!-- submit button -->
								<span class="input-group-btn">
									<button class="btn btn-primary">Sign In</button>
								</span>

							</div>

							<div class="checkbox"><!-- remmember -->
								<label>
									<input type="checkbox"> Remember me &bull; <a href="page-signin.html">Forgot password?</a>
								</label>
							</div>

						</form>

						<hr />
						
						<a href="#" class="btn-facebook fullwidth radius3"><i class="fa fa-facebook"></i> Connect With Facebook</a>
						<a href="#" class="btn-twitter fullwidth radius3"><i class="fa fa-twitter"></i> Connect With Twitter</a>
						<!--<a href="#" class="btn-google-plus fullwidth radius3"><i class="fa fa-google-plus"></i> Connect With Google</a>-->

						<p class="bottom-create-account">
							<a href="page-signup.html">Manual create account</a>
						</p>
					</div>
				</div>
				<!-- /SIGN IN -->

				<!-- CART MOBILE BUTTON -->
				<a class="pull-right" id="btn-mobile-quick-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
				<!-- CART MOBILE BUTTON -->

				

			</div>
		</header>
		<!-- /Top Bar -->

		<!-- TOP NAV -->
		<header id="topNav" class="topHead"><!-- remove class="topHead" if no topHead used! -->
			<div class="container">

				<!-- Mobile Menu Button -->
				<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
					<i class="fa fa-bars"></i>
				</button>

				<!-- Logo text or image -->
				<a class="logo" href="index-2.html">
					Organ Donation
				</a>

				<!-- Top Nav -->
				<div class="navbar-collapse nav-main-collapse collapse pull-right">
					<nav class="nav-main mega-menu">
						<ul class="nav nav-pills nav-main scroll-menu" id="topMain">
							<li class="dropdown active">
								<a class="dropdown-toggle" href="index.php">
									Home <i class="fa fa-angle-down"></i>
								</a>
							</li>
							
							<li class="dropdown active">
								<a class="dropdown-toggle" href="about.php">
									About <i class="fa fa-angle-down"></i>
								</a>
							</li>
							
							<li class="dropdown active">
								<a class="dropdown-toggle" href="donate.php">
									Donate Here <i class="fa fa-angle-down"></i>
								</a>
							</li>
							
							<li class="dropdown active">
								<a class="dropdown-toggle" href="contact-us.php">
									Contact <i class="fa fa-angle-down"></i>
								</a>
							</li>
							
							<li class="dropdown active">
								<a class="dropdown-toggle" href="car.php">
									Careers <i class="fa fa-angle-down"></i>
								</a>
							</li>
							

							<!-- GLOBAL SEARCH -->
							<li class="search">
								<!-- search form -->
								<form method="get" action="#" class="input-group pull-right">
									<input type="text" class="form-control" name="k" id="k" value="" placeholder="Search">
									<span class="input-group-btn">
										<button class="btn btn-primary notransition"><i class="fa fa-search"></i></button>
									</span>
								</form>
								<!-- /search form -->
							</li>
							<!-- /GLOBAL SEARCH -->

							<!-- QUICK SHOP CART -->
							
						</ul>
					</nav>
				</div>
				<!-- /Top Nav -->

			</div>
		</header>

		<span id="header_shadow"></span>
		<!-- /TOP NAV -->
