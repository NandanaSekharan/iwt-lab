<?php	
	session_start();
	include('connect/db.php');
	unset($_SESSION['SESS_ADMIN_ID']);
	unset($_SESSION['SESS_HOSPITAL_ID']);
	unset($_SESSION['SESS_PARENT_ID']);	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Infant Vaccination</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<!-- default-css-files -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- //style.css-file -->
</head>
<!-- Head -->
<body>
	<!--header-section-starts-here-->
	<header>
		<div class="top-header" id="home">
			<div class="container">
				<div class="col-md-8 col-sm-8 col-xs-8 top-left">
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> Pondichery, India</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 top-right">
					<a href="#" data-toggle="modal" data-target="#myModal1"><span></span> Login </a>
					<a href="#" data-toggle="modal" data-target="#myModal2"><span></span> Sign Up</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!--//header-section-end-here-->
	<!-- popup for sign in form -->
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div id="small-dialog1" class="mfp-hide book-form">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3>Login </h3>
					<form action="login.php" method="post" autocomplete="off">
						<input type="text" name="username" class="email" placeholder="Username" required="" />
						<input type="password" name="password" class="password" placeholder="Password" required="" />
						<div class="clearfix"></div>
						<input type="submit" value="Login">
						<br>
						<a href="#" data-toggle="modal" data-target="#myModal2"><span></span> Sign Up</a>
					</form>					
				</div>
			</div>
		</div>
	</div>
	<!-- //popup for sign in form -->
	<!-- popup for sign up form -->
	<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div id="small-dialog2" class="mfp-hide book-form">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3>Sign Up</h3>
					<form action="register_save.php" method="post" autocomplete="off">
						<input type="text" name="name" placeholder="Name"  required pattern="[a-zA-Z1 _]{3,50}">
						<input type="text" name="cntno" class="email" placeholder="Contact No" required="" maxlength="10" minlength="10" />
                        <input type="email" name="email" class="email" placeholder="Email" required=""  />
                        <input type="text" name="location" class="email" placeholder="Location" required="" />
                        <input type="text" name="username" class="email" placeholder="Username" required="" />
						<input type="password" name="password" id="password1" class="password" placeholder="Password" required="" maxlength="10" minlength="5" />
						
                        <select name="utype" required>
                        	<option value="">Select</option>
                            <option>Hospital</option>
                            <option>Parent</option>
                        </select>
						<input type="submit" value="Sign Up">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //popup for sign up form -->
	<!--banner-section-starts-here-->
	<section class="banner jarallax">
		<div class="navigation">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					</div>
					<div class="logo">
						<h1><a class="navber-brand" href="index.php"><i class="fa fa-hospital-o" aria-hidden="true"></i> I-Vaccination</a></h1>
					</div>
					<div class="collapse navbar-collapse navbar-right navigation-right" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-3 w3ls-navma" id="link-effect-3">
							<ul class="nav1 navbar-nav nav nav-wil">
								<li class="active"><a data-hover="Home" href="index.php">Home</a></li>
								<li><a data-hover="Emergency" href="#search" class="scroll">Emergency</a></li>                              
							</ul>
						</nav>
					</div>
				</nav>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="w3ls_banner_info">
			<div class="container">
				<div class="w3l-banner-grids">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides" id="slider4">
								<li>
									<div class="w3ls-text">
										<h3>welcome to Vaccination</h3>
										<h3> the right potential</h3>
										<p>Hope is the strength by which a shattered world shall emerge in to the light</p>
									</div>
								</li>
								<li>
									<div class="w3ls-text">
										<h3>Good hospitality</h3>
										<h3>super services</h3>
										<p>Booking your vaccination appointment today</p>
									</div>
								</li>
								<li>
									<div class="w3ls-text">
										<h3>Emergency vaccination</h3>
										<p>Vaccines are an important way to protect our families,our health and our communities. </p>
									</div>
								</li>
								<li>
									<div class="w3ls-text">
										<h3>Vaccinated</h3>
										<h3> Health booster</h3>
										<p>Get vaccines and updates in immunity system</p>
									</div>
								</li>
							</ul>
						</div>

					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</section>
    
	<!--about-section-starts-here-->
	<section class="about" id="search">
		<div class="container">
		<!---728x90--->
			<h2>Search</h2>
			<div class="about-grids">
				<div class="col-md-3 col-sm-3 col-xs-3 abt-lt-grid text-center">
					<p>we got you</p>
					<p>24/7 Hours</p>
					<p>Find Your Needs</p>
					<p class="ma-p"><i class="fa fa-phone" aria-hidden="true"></i>9845326475</p>

				</div>
				<div class="col-md-9 col-sm-9 col-xs-9 abt-rt-grid">
					<div class="w3ls-grid-head text-center">
						<h6>Search</h6>
						<h3>Puts Your Word</h3>
					</div>
					<div class="abt-form text-center">
						<form action="search_location.php" method="post" autocomplete="off">
							<div class="col-sm-6 col-xs-6 w3ls-lt-form">
								<div class="w3ls-pr">
									<input type="text" name="location" placeholder="Search Location" required="required">
								</div>
                                <input type="submit" value="Submit">
							</div>
                        </form>
                        <form action="search_hospital.php" method="post" autocomplete="off">
							<div class="col-sm-6 col-xs-6 w3ls-lt-form">
								<div class="w3ls-pr">
									<input type="text" name="hospital" placeholder="Search Hospitals" required="required">
								</div>
                                <input type="submit" value="Submit">
							</div>
                        </form>							
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!---728x90--->
		</div>
	</section>
	<!--//about-section-end-here-->
    
	<!--footer-section-end-here-->
	<section class="footer-top jarallax">
		<div class="container">
			<div class="footer-grids">
				<div class="w3ls-top-ft text-center">
					<span>get to know</span>
					<h3>E Vaccination</h3>
					<p>Where there is no vision, the people perish</p>
					<div class="srv-w3ls">
						<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Read More</a>
					</div>
				</div>
				<div class="w3ls-bt-ft">
					<div class="navigation-w3ls">
						<nav class="navbar-btm">
							<div class="logo">
								<h3><a class="navber-brand" href="index.php"><i class="fa fa-heartbeat" aria-hidden="true"></i> I - Vaccination</a></h3>
							</div>
							<div class="footer-nav">
								<ul class="nav1 w3ls-ma">
									<li class="active"><a data-hover="Home" class="scroll" href="#home">Home</a></li>
									<li><a data-hover="Search" href="#search" class="scroll">Search</a></li>									
								</ul>
							</div>
						</nav>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="col-md-6 col-sm-6 col-xs-6 copy-right-grids">
						<div class="copy-left">
							<p class="footer-gd">© 2024 I Vaccination. All Rights Reserved</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 top-middle">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"> I - Vaccination</h4>
				</div>
				<div class="modal-body agileits">
					<div class="modal-img">
						<img src="images/md.jpg" alt="image">
					</div>
					<p>Vaccines reduce risks of getting a disease by working with your body's natural defences to build protection. When you get a vaccine, your immune system responds. We now have vaccines to prevent more than 20 life-threatening diseases, helping people of all ages live longer, healthier lives.</p>
				</div>
			</div>
		</div>
	</div>
	<!--//Modal -->
	<!--//footer-section-end-here-->
	<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->


	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--banner Slider starts Here-->
	<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
	<!-- //Default-JavaScript-File -->
	<!-- gallery-pop-up -->
	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.agileinfo_portfolio_grid a').Chocolat();
		});
	</script>
	<!-- //gallery-pop-up -->

	<!-- FlexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(function () {});
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- FlexSlider -->
	<!-- start-smoth-scrolling-nav -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
	<script type="text/javascript">
		$(document).ready(function () {
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 100,
				easingType: 'linear'
			};
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
	<!-- //Slide-To-Top JavaScript -->
	<!-- jarallax scrolling -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax scrolling -->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {			
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>

</html>