<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Start Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="BuildGo - Constructions HTML5 Template" />
	<meta name="keywords" content="Creative, Digital, multipage, landing, freelancer template" />
	<meta name="author" content="ThemeOri">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title of Site -->
	<title>Shared on THEMELOCK.COM - BuildGo - Constructions HTML5 Template</title>
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/css/fontawesome.css">
	<!-- Flaticon -->
	<link rel="stylesheet" href="assets/font/flaticon_flexitype.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- Swiper -->
	<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
	<!-- Magnific -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="assets/sass/style.css">
</head>

<body>
	<!-- Preloader start -->
	<div class="theme-loader">
		<div class="spinner">
			<div class="spinner-bounce one"></div>
			<div class="spinner-bounce two"></div>
			<div class="spinner-bounce three"></div>
		</div>
	</div>
	<!-- Preloader end -->
	<div class="cursor">
		<div class="hide">
			<div id="cursor-ball"></div>
		</div>
		<div id="cursor-text"></div>
	</div>
	<!-- Dark Light Start -->
	<div class="switch__tab">
		<div class="switch__tab-icon">
			<div class="switch__tab-open"><i class="fa-sharp fa-light fa-gear"></i></div>
			<div class="switch__tab-close"><i class="fal fa-times"></i></div>
		</div>
		<div class="switch__tab-area">
			<div class="switch__tab-area-item">
				<h5>Mode</h5>
				<div class="switch__tab-area-item-button type-dark-mode">
					<button class="active" data-mode="light">light</button>
					<button data-mode="dark-mode">dark</button>
				</div>
			</div>
			<div class="switch__tab-area-item">
				<h5>Custom Cursor</h5>
				<div class="switch__tab-area-item-buttons" id="cursor_style">
					<button data-cursor="1" class="active">Yes</button>
					<button data-cursor="2">No</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Dark Light End -->
	<!-- Search Box Start -->
	<div class="header__area-menubar-right-search-box">
		<form>
			<input type="search" placeholder="Search Here.....">
			<button type="submit"><i class="fal fa-search"></i></button>
		</form>
		<span class="header__area-menubar-right-search-box-icon"><i class="fal fa-times"></i></span>
	</div>
	<!-- Search Box End -->
	<!-- Hamburger Start -->
	<div class="header__area-menubar-right-sidebar-popup">
		<div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
		<div class="header__area-menubar-right-sidebar-popup-logo">
			<a href="index.html"> <img src="assets/img/logo-2.png" alt="Logo-image"></a>
		</div>
		<p>Redefining the construction industry with innovative solutions, cuttin-edge technology and sustainable
			practices</p>
		<div class="header__area-menubar-right-sidebar-popup-contact">
			<h4 class="mb-30">Address</h4>
			<div class="header__area-menubar-right-sidebar-popup-contact-item">
				<div class="header__area-menubar-right-sidebar-popup-contact-item-icon">
					<i class="flaticon-phone"></i>
				</div>
				<div class="header__area-menubar-right-sidebar-popup-contact-item-content">
					<span>Phone:</span>
					<h6><a href="tel:+123 (256) 568 58">+123 (256) 568 58</a></h6>
				</div>
			</div>
			<div class="header__area-menubar-right-sidebar-popup-contact-item">
				<div class="header__area-menubar-right-sidebar-popup-contact-item-icon">
					<i class="flaticon-email-3"></i>
				</div>
				<div class="header__area-menubar-right-sidebar-popup-contact-item-content">
					<span>Email Address:</span>
					<h6><a href="mailto:needhelp@gmail.com">needhelp@gmail.com</a></h6>
				</div>
			</div>
			<div class="header__area-menubar-right-sidebar-popup-contact-item">
				<div class="header__area-menubar-right-sidebar-popup-contact-item-icon">
					<i class="flaticon-location-1"></i>
				</div>
				<div class="header__area-menubar-right-sidebar-popup-contact-item-content">
					<span>Location:</span>
					<h6><a href="https://google.com/maps" target="_blank">2464 Royal Ln. Mesa, New Jersey 45463</a></h6>
				</div>
			</div>
		</div>
		<div class="header__area-menubar-right-sidebar-popup-social">
			<ul>
				<li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="https://x.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
				<li><a href="https://behance.net" target="_blank"><i class="fab fa-behance"></i></a></li>
				<li><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="sidebar-overlay"></div>
	<!-- Hamburger End -->
	<!-- Mobile Menu Start -->
	<div class="menu__bar-popup">
		<div class="menu__bar-popup-top">
			<div class="logo"><a href="index.html"><img src="assets/img/logo-2.png" alt="logo-image"></a></div>
			<div class="close"><i class="fal fa-times"></i></div>

		</div>
		<div class="vertical-menu">
			<div class="vertical_menu">
				<!-- Here Menu Will Come Automatically Via Javascript / Same Menu as in Header -->
			</div>
		</div>
	</div>
	<div class="menu__bar-popup-overlay"></div>
	<!-- Mobile Menu End -->
	
    <!-- Header Area Start -->
    @include('includes.HeaderArea')
	<!-- Header Area End -->
	
    <!-- Breadcrumb Area Start -->
	<div class="breadcrumb__area" style="background-image: url('assets/img/page/breadcrumb.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2>Contact Us</h2>
						<ul>
							<li><a href="index.html">Home</a><i class="fa-regular fa-angle-right"></i></li>
							<li>Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb Area End -->
	<!-- Contact Area Start -->
	<div class="contact__area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 lg-mb-25">
					<div class="contact__area-left mr-40 xl-mr-0">
						<div class="title">
							<span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Contact Us</span>
							<h2 class="title_split_anim mb-25">Get In Touch</h2>
							<p class="wow fadeInUp" data-wow-delay=".4s">We’re here to assist you! Please reach out with
								any questions, feedback, or project inquiries.</p>
						</div>
						<div class="contact__area-left-contact wow fadeInUp" data-wow-delay=".7s">
							<div class="contact__area-left-contact-item">
								<div class="contact__area-left-contact-item-icon">
									<i class="flaticon-phone"></i>
								</div>
								<div class="contact__area-left-contact-item-content">
									<span>Phone:</span>
									<h6><a href="tel:+123 (256) 568 58">+123 (256) 568 58</a></h6>
								</div>
							</div>
							<div class="contact__area-left-contact-item">
								<div class="contact__area-left-contact-item-icon">
									<i class="flaticon-email-3"></i>
								</div>
								<div class="contact__area-left-contact-item-content">
									<span>Email Address:</span>
									<h6><a href="mailto:needhelp@gmail.com">needhelp@gmail.com</a></h6>
								</div>
							</div>
							<div class="contact__area-left-contact-item">
								<div class="contact__area-left-contact-item-icon">
									<i class="flaticon-location-1"></i>
								</div>
								<div class="contact__area-left-contact-item-content">
									<span>Location:</span>
									<h6><a href="https://google.com/maps" target="_blank">2464 Royal Ln. Mesa, New
											Jersey 45463</a></h6>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7 wow fadeInRight" data-wow-delay=".4s">
					<div class="contact__area-form">
						<h4>Send Message</h4>
						<form action="#">
							<div class="row">
								<div class="col-md-6 mb-25">
									<div class="contact__form-area-item">
										<input type="text" name="name" placeholder="Full Name" required="required">
									</div>
								</div>
								<div class="col-md-6 md-mb-25">
									<div class="contact__form-area-item">
										<input type="email" name="email" placeholder="Email Address"
											required="required">
									</div>
								</div>
								<div class="col-md-12 mb-25">
									<div class="contact__form-area-item">
										<input type="text" name="subject" placeholder="Subject">
									</div>
								</div>
								<div class="col-md-12 mb-25">
									<div class="contact__form-area-item">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="contact__form-area-item">
										<button class="build_button" type="submit">Submit Message <i
												class="flaticon-right-up"></i></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Area End -->
	<!-- Map Area Start -->
	<div class="map section-padding pt-0">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 wow fadeInUp" data-wow-delay=".4s">
					<div class="map-area">
						<iframe loading="lazy"
							src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
							title="London Eye, London, United Kingdom"
							aria-label="London Eye, London, United Kingdom"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Map Area End -->
	<!-- Footer Area Start -->
	<div class="footer__one">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="footer__one-cta">
						<div class="row al-center">
							<div class="col-lg-8 lg-t-center lg-mb-25">
								<div class="footer__one-cta-title title_split_anim">
									<h2>Your Dream Project Awaits — Get Started Today!</h2>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="footer__one-cta-icon t-right lg-t-center item_bounce">
									<a href="contact.html"><i class="flaticon-right-up"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="footer__one-area">
						<div class="row">
							<div class="col-lg-4 col-sm-6">
								<div class="footer__one-widget mr-40">
									<a class="logo" href="index.html"><img src="assets/img/logo-2.png" alt="logo"></a>
									<h5>We’re Solutions for all construction</h5>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 sm-mt-30">
								<div class="footer__one-widget address">
									<h4>Address</h4>
									<div class="footer__one-widget-address">
										<h6><a href="https://www.google.com/maps">3891 Ranch view Richardson, California
												62639</a></h6>
										<h4><a href="tel:+123%20(256)%20568%2058">+123 (256) 568 58</a></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 lg-mt-30">
								<div class="footer__one-widget ml-40 lg-ml-0">
									<h4>Quick links</h4>
									<div class="footer-widget-menu">
										<ul>
											<li><a href="about.html">About Us</a></li>
											<li><a href="blog-grid-three.html">Blog</a></li>
											<li><a href="testimonial.html">Testimonials</a></li>
											<li><a href="contact-two.html">Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-sm-6 lg-mt-30">
								<div class="footer__one-widget address">
									<h4>Support</h4>
									<div class="footer-widget-menu">
										<ul>
											<li><a href="contact-two.html">Term & Conditions</a></li>
											<li><a href="contact-two.html">Privacy policy</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Area End -->
	<!-- Copyright Area Start -->
	<div class="copyright__area">
		<div class="container">
			<div class="row al-center">
				<div class="col-md-7">
					<div class="copyright__area-content md-t-center md-mb-10">
						<p>Copyright 2024 – All Rights Reserved By <a
								href="https://themeforest.net/user/themeori/portfolio" target="_blank">ThemeOri</a></p>
					</div>
				</div>
				<div class="col-md-5">
					<div class="copyright__area-social t-right md-t-center">
						<ul>
							<li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li><a href="https://x.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li><a href="https://behance.net" target="_blank"><i class="fab fa-behance"></i></a></li>
							<li><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Copyright Area End -->
	<!-- Scroll Btn Start -->
	<div class="scroll-up scroll-one">
		<svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>
	<!-- Scroll Btn End -->
	<!-- Main JS -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Counter up -->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!-- Popper JS -->
	<script src="assets/js/popper.min.js"></script>
	<!-- Progressbar JS -->
	<script src="assets/js/progressbar.min.js"></script>
	<!-- Magnific JS -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Swiper JS -->
	<script src="assets/js/swiper-bundle.min.js"></script>
	<!-- Waypoints JS -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Isotope JS -->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- WOW Js -->
	<script src="assets/js/wow.min.js"></script>
	<!-- Gsap Js -->
	<script src="assets/js/gsap.js"></script>
	<!-- Scroll Trigger Js -->
	<script src="assets/js/scroll-trigger.js"></script>
	<!-- Split Text Js -->
	<script src="assets/js/split-text.js"></script>
	<!-- Custom JS -->
	<script src="assets/js/custom.js"></script>
</body>

</html>