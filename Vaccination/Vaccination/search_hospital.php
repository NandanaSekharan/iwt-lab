<?php	
	include('connect/db.php');	
	$hospital=$_POST['hospital'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>I-Vaccination</title>
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
	
	<!--//header-section-end-here-->
	<!-- popup for sign in form -->
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div id="small-dialog1" class="mfp-hide book-form">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3>Sign In </h3>
					<form action="login.php" method="post" autocomplete="off">
						<input type="text" name="username" class="email" placeholder="Username" required="" />
						<input type="password" name="password" class="password" placeholder="Password" required="" />
						<div class="clearfix"></div>
						<input type="submit" value="Sign In">
					</form>					
				</div>
			</div>
		</div>
	</div>
    
	<!--testimonial-section-starts-here -->
	<section class="testimonial jarallax">
		<div class="container">
			<h3>Hospitals</h3>
			<div class="agile-team-grids">
				<?php
					$result = $db->prepare("select * from hospital where name like'%".$hospital."%'");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++)
					{
				?>
                <div class="col-md-3 col-sm-3 col-xs-12 agile-w3ls">
					<div class="team-grid text-center">
						<img src="admin/hosptal_photo/<?php echo $row["photo"];?>" alt="image" class="img-responsive" width="100%"/>
						<h4 style="color:white;"><?php echo $row["name"];?></h4>
						<h5 style="color:white;"><?php echo $row["location"];?></h5>
                        <h5 style="color:white;"><?php echo $row["contact_no"];?></h5>
						 <br>
                         <a href="#" data-toggle="modal" data-target="#myModal1"  class="btn btn-block btn-primary"><span></span> More</a>
					</div>				
				</div>
				<?php
					}
                ?>
                
            </div>
		</div>
         <a href="index.php"class="btn btn-sm btn-danger" style="float:right"><span></span> Back</a>
	</section>
	<!--testimonial-section-end-here -->

	<!--footer-section-end-here-->
	
	<!--footer-section-end-here-->
	<section class="footer-top jarallax">
		<div class="container">
			<div class="footer-grids">
				<div class="w3ls-top-ft text-center">
					<span>get to know</span>
					<h3>I Vaccination</h3>
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
					<h4 class="modal-title" id="myModalLabel">sanatorium</h4>
				</div>
				<div class="modal-body agileits">
					<div class="modal-img">
						<img src="images/md.jpg" alt="image">
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer scelerisque orci consectetur sapien feugiat fermentum.
						Phasellus convallis efficitur arcu, nec convallis odio egestas sit amet. Praesent erat sem, finibus vel ornare efficitur,
						mattis sed risus. Duis ornare sodales dui finibus molestie.</p>
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