<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Matsuri Castle - Sushi Restaurant</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<!-- Place favicon.ico in the root directory -->
	<link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/favicon-16x16.png" sizes="16x16" />
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/custom.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/reset.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/responsive.css">
	<script src="<?= base_url('assets/'); ?>js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
	<!-- Header Area Start -->
	<header class="top">
		<div class="fixedArea">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 noPadding">
					<div class="content-wrapper one">
						<!-- Main Menu Start -->
						<!-- Navbar-->
						<header class="header">
							<nav class="navbar navbar-default myNavBar">
								<div class="container">

									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<div class="row">
											<div class="col-md-8 col-sm-8 col-xs-8">
												<div class="row">
													<div class="col-md-2 col-xs-2 col-sm-2">
														<a style="padding-top:0px;" class="navbar-brand navBrandText text-uppercase font-weight-bold" href="<?php echo base_url(); ?>login"><img src="<?= base_url('assets/'); ?>img/logo/matsurilogo 67x47.png" alt="restorant" /></a>

													</div>
													<div class="col-md-9 col-sm-9 col-xs-9">
														<a href="<?php echo base_url(); ?>login"><img class="img-responsive logo" src="<?= base_url('assets/'); ?>img/logo/matsuricastle.png" alt="restorant" /></a>

													</div>
												</div>


											</div>
											<div class="col-md-3 col-sm-3 col-xs-3">
												<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>
										</div>

									</div>

									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav navbar-right navBar">
											<li class="nav-item"><a href="#section0" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Home
													<span class="sr-only">(current)</span></a></li>
											<li class="nav-item"><a href="#section1" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Discover</a>
											</li>
											<li class="nav-item"><a href="#section2" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Daily Specials</a>
											</li>
											<li class="nav-item"><a href="#section3" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Menu</a>
											</li>
											<li class="nav-item"><a href="<?php echo base_url(); ?>cart" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Cart</a>
											</li>
											<li class="nav-item"><a href="#section4" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Testimonial</a>
											</li>
											<li class="nav-item"><a href="#section7" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Address</a>
											</li>
										</ul>
									</div>
								</div>
							</nav>
						</header>
						<!-- Main Menu End -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header Area End -->
	<!-- Section0 Area Start -->
	<section id="section0" class="slider-area">
		<div class="main-slider owl-theme owl-carousel">
			<!-- Start Slingle Slide -->
			<div class="single-slide item" style="background-image: url(<?= base_url('assets/'); ?>img/slider/1900x1000.png)">


				<!-- <img src="img/slider/placehold.png"> -->

				<!-- Start Slider Content -->

				<div class="slider-content-area">
					<div class="row">
						<div class="slide-content-wrapper text-center">
							<div class="slide-content">
								<img class="classic" src="<?= base_url('assets/'); ?>img/logo/matsurilogo 67x47.png">
								<h3>Matsuri Castle Restaurant </h3>
								<h2>The best sushi restaurant in the world</h2>
								<a class="default-btn" href="about.html">Learn more</a>
								<img class="classic" src="<?= base_url('assets/'); ?>img/new/icon.png">

							</div>
						</div>
					</div>
				</div>
				<!-- Start Slider Content -->
			</div>
			<!-- End Single Slide -->
		</div>
	</section>
	<br>
	<!-- Section0 Area End -->
	<!-- Section1 Start -->
	<section id="section1" class="topOff">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 ">
					<div class="section-title text-center">
						<h3>Discover Our Story</h3>
						<h2>Welcome To Matsuri Castle</h2>
						<p>MATSURI CASTLE has been recognized for its outstanding Japanese cuisine, excellent service
							and friendly staff. Our Japanese Sushi Restaurant is known for its modern interpretation of
							classic dishes and its insistence on only using high quality fresh ingredients.</p>
					</div>
				</div>
			</div>
			<div class="row shapes">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="row">
						<div class="col-md-12 minHeightProp">
							<img class="imgback" src="<?= base_url('assets/'); ?>img/shape/shape1.png">
						</div>
						<div class="col-md-12">
							<div class="text-center">
								<span>Online Order</span>
								<p>We may can deserve you in online</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="row">
						<div class="col-md-12 minHeightProp">
							<img class="imgback" src="<?= base_url('assets/'); ?>img/shape/shape2.png">
						</div>
						<div class="col-md-12">
							<div class="text-center">
								<span>affordable prices</span>
								<p>We provide an affordable price for each menu at our restaurant</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="row">
						<div class="col-md-12 minHeightProp">
							<img class="imgback" src="<?= base_url('assets/'); ?>img/shape/shape3.png">
						</div>
						<div class="col-md-12">
							<div class="text-center">
								<span>Best service</span>
								<p>We uphold the quality of service and food quality for honorable customers</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section1 End -->
	<br>
	<br>
	<br>
	<br>
	<br>
	<!-- Banner Start -->
	<section id="section2">
		<div class="container">
			<div class="banner" style="background-image: url('<?= base_url('assets/'); ?>img/new/1170x268.png');">
				<div class="content text-center">
					<span>DAILY SPECIALS!!!</span>
					<h2>Every Monday - Sunday</h2>
					<h3>SHOP NOW</h3>
					<img class="classic" src="<?= base_url('assets/'); ?>img/new/icon.png">
				</div>
			</div>
		</div>
		<!-- Banner End -->
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<!-- Section2 Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-body colorfullPanel text-center">
							<h3>Upp to %15 off</h3>
							<h2><span>Monday</span> Special Offer
								<img class="classic" src="<?= base_url('assets/'); ?>img/new/icon.png">

							</h2>
							<p>Min Purchase 50k</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="panel panel-default colorfullParent">
						<div class="panel-body colorfullPanel text-center">
							<h3>Upp to %15 off</h3>
							<h2><span>Thursday</span> Special Offer
								<img class="classic" src="<?= base_url('assets/'); ?>img/new/icon.png">

							</h2>
							<p>Min Purchase 50k</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-body colorfullPanel text-center">
							<h3>All U Can Eat</h3>
							<h2><span>Friday</span> Spesial Offer
								<img class="classic" src="<?= base_url('assets/'); ?>img/new/icon.png">

							</h2>
							<p>Purchase 100k</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section2 End -->

	<!-- Section3 Start -->
	<section id="section3">
		<div class="container">

			<div class="row">
				<div class="col-xs-12">
					<div class="section-title text-center">
						<h3>Premium Quality</h3>
						<h2>Matsuri Castle Menu</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="container">
					<?php foreach ($products as $row) : ?>
						<div class="col-md-12 noPadding">
							<div id="news-slider" class="news-slider owl-theme owl-carousel">
								<div class="post-slide">
									<div class="post-img-custom">
										<img src="<?php echo base_url() . 'assets/images/' . $row->gambar; ?> " alt=" <?= $row->nm_barang; ?>">
									</div>
									<h3 class="post-title"><a href="#"><?= $row->nm_barang; ?></a></h3>
									<p class="post-description">
										<?= 'Rp. ' . number_format($row->harga); ?>
									</p>
									<div class="container-contact100-form-btn">
										<button id="addtocart" type="submit" class="contact100-form-btn" onclick="window.location.href='<?= site_url('home/detail/' . $row->kd_barang) ?>'">
											<span>
												Order
												<i class="fa fa-shopping-cart m-l-7" aria-hidden="true"></i>
											</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

		</div>
	</section>
	<!-- Section3 End -->
	<!-- Testimonial Area Start -->
	<section id="section4" class="parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/'); ?>img/slider/1900x1000.png">
		<h3>What We Say</h3>
		<h2>Customer Testimonial</h2>
		<div class="testimonial-area owl-theme owl-carousel">

			<div class="col-md-12 col-sm-12 col-xs-12 noPadding text-center">


				<div class="single-testimonial">
					<div class="testimonial-info">
						<div class="testimonial-content">
							<p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was
								born and I will give you a coete account of the system, and expound the actual</p>
							<h4>David Morgan</h4>
							<h5>Student, CSE</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 noPadding text-center">
				<div class="single-testimonial">
					<div class="testimonial-info">
						<div class="testimonial-content">
							<p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was
								born and I will give you a coete account of the system, and expound the actual</p>
							<h4>David Morgan</h4>
							<h5>Student, CSE</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 noPadding text-center">
				<div class="single-testimonial">
					<div class="testimonial-info">
						<div class="testimonial-content">
							<p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was
								born and I will give you a coete account of the system, and expound the actual</p>
							<h4>David Morgan</h4>
							<h5>Student, CSE</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial Area End -->
	<!-- Contact Start -->
	<section id="section6" class="contact">
		<div class="contact100-form-title container">
			<h3>Keep In Touch</h3>
			<h2>Send A Message</h2>
			<form class="contact100-form validate-form">


				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>

				<div class="container-contact100-form-btn response" style="margin-top: 30px;">
					<p class="error">
					</p>
				</div>
			</form>
		</div>
	</section>
	<!-- Contact End -->
	<!-- Address Section Start -->
	<section id="section7" class="row address parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/'); ?>img/slider/1900x1000.png">
		<div class="col-md-12">
			<div class="row">

				<div class="col-md-5 col-md-offset-1 addess-description">
					<span>Matsuri Castle Location</span>
					<h2>Matsuri Castle Address</h2>
					<p>You can find matsuri castle at Jl. Arteri Soekarno-Hatta No.123
					</p>
					<ul>
						<li class="address-section">
							<div class="row">
								<div class="col-md-2 col-sm-2 col-xs-2">
									<i class="fas fa-address-card fa-lg"></i>
								</div>
								<div class="col-md-10 col-sm-10 col-xs-10 lineHeight">
									@matsuricastle
								</div>
							</div>
						</li>
						<li class="address-section">
							<div class="row">
								<div class="col-md-2 col-sm-2 col-xs-2">
									<i class="fas fa-phone fa-lg"></i>
								</div>
								<div class="col-md-10 col-sm-10 col-xs-10 lineHeight">
									0878 - 5294 - 4400
								</div>
							</div>
						</li>
						<li class="address-section">
							<div class="row">
								<div class="col-md-2 col-sm-2 col-xs-2">
									<i class="fas fa-envelope fa-lg"></i>
								</div>
								<div class="col-md-10 col-sm-10 col-xs-10 lineHeight">
									matsuricastle@gmail.com
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-6 addess-map">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</section>

	<!-- Adress Section End -->
	<!-- Footer Start -->
	<footer class="footer-area">
		<div class="footer-bottom text-center">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<p>Matsuri Castle © 2022. All Right Reserved </p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->
	<script src="<?= base_url('assets/'); ?>js/vendor/jquery-1.12.0.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/parallax.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/ajax-mail.js"></script>
	<script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/jquery.nicescroll.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/main.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyIMWhs-crjT0yhctbRjfJFq75FlEhSzE&callback=initMap">
	</script>
</body>

</html>