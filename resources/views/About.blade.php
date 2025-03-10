<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Start Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="BuildGo - Constructions HTML5 Template"/>
	<meta name="keywords" content="Creative, Digital, multipage, landing, freelancer template"/>
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
		<div class="hide"><div id="cursor-ball"></div></div>
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
		<p>Redefining the construction industry with innovative solutions, cuttin-edge technology and sustainable practices</p>
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
	@include('includes.headerarea')
    <!-- Header Area End -->
   
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb__area" style="background-image: url('assets/img/page/breadcrumb.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2>About Us</h2>
						<ul>
							<li><a href="index.html">Home</a><i class="fa-regular fa-angle-right"></i></li>
							<li>About Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>       
    <!-- Breadcrumb Area End -->
    <!-- Mission Area Start -->
    <div class="mission__area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 lg-mb-25">
                    <div class="mission__area-left mr-40 xl-mr-0">
                        <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Our Mission</span>
                        <h2 class="title_split_anim">Dedicated to Delivering Value and Excellence</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission__area-right">
                        <div class="row">
                            <div class="col-md-6 md-mb-25 wow fadeInUp" data-wow-delay=".6s">
                                <div class="experience__area-list-item">
                                    <i class="flaticon-team"></i>
                                    <div class="experience__area-list-item-content">
                                        <h4>Project Planning</h4>
                                        <p>Ensuring every detail is considered designing</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-delay=".9s">
                                <div class="experience__area-list-item">
                                    <i class="flaticon-technology"></i>
                                    <div class="experience__area-list-item-content">
                                        <h4>Labor Preparation</h4>
                                        <p>We take pride in our quality craftsmanship</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission Area End -->
    <!-- About Area Start -->
    <div class="about__five section-padding pt-0">
        <div class="container">
            <div class="row al-center">
                <div class="col-lg-5 lg-mb-25">
                    <div class="about__five-image wow img_left_animation">
                        <img src="assets/img/about/about-4.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about__five-right ml-70 xl-ml-0">
                        <div class="about__five-right-title">
                            <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">About Our Company</span>
                            <h2 class="title_split_anim">Trusted Partner in Construction and Design</h2>
                        </div>
                        <div class="features wow fadeInUp" data-wow-delay=".3s" style="background-image: url('assets/img/portfolio/portfolio-8.jpg');">
                            <h3>Building Trust<br>Since 1989</h3>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Our journey began with a commitment to excellence, and that commitment remains at the core of our operations today. We’ve grown from a small local business into a trusted partner for both residential and commercial.</p>
                        <div class="item_bounce">
                            <a class="build_button mt-20" href="portfolio.html">See Projects<i class="flaticon-right-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->
	<!-- Video Area Start -->
	<div class="video__two" style="background-image: url('assets/img/service/services-1.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="video__two-icon item_bounce">
						<div class="video video-pulse">
							<a class="video-popup" href="https://youtube.com/watch?v=0WC-tD-njcA"><i class="fas fa-play"></i></a> 
						</div>						
					</div>
				</div>
			</div>
		</div>
        <div class="scroll__slider">
            <div class="text-slide">
                <div class="sliders text_scroll">
                    <ul>
                        <li><img src="assets/img/icon/star-dark.svg" alt="icon"><a href="portfolio-details">Residential</a></li>
                        <li><img src="assets/img/icon/star-dark.svg" alt="icon"><a href="portfolio-details">Architecture</a></li>
                        <li><img src="assets/img/icon/star-dark.svg" alt="icon"><a href="portfolio-details">Community</a></li>
                        <li><img src="assets/img/icon/star-dark.svg" alt="icon"><a href="portfolio-details">Healthcare</a></li>
                        <li><img src="assets/img/icon/star-dark.svg" alt="icon"><a href="portfolio-details">Seaside Resort</a></li>
                        <li><img src="assets/img/icon/star-dark.svg" alt="icon"><a href="portfolio-details">Modern</a></li>
                    </ul>
                </div>
                <div class="sliders text_scroll">
                    <ul>
                        <li><img src="assets/img/icon/star-dark.svg" alt="icon"><a href="portfolio-details">Residential</a></li>
                        <li><img src="assets/img/icon/star-dark.svg" alt="icon"><a href="portfolio-details">Architecture</a></li>
                        <li><img src="assets/img/icon/star-dark.svg" alt="icon"><a href="portfolio-details">Community</a></li>
                        <li><img src="assets/img/icon/star-dark.svg" alt="icon"><a href="portfolio-details">Healthcare</a></li>
                        <li><img src="assets/img/icon/star-dark.svg" alt="icon"><a href="portfolio-details">Seaside Resort</a></li>
                        <li><img src="assets/img/icon/star-dark.svg" alt="icon"><a href="portfolio-details">Modern</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
	<!-- Video Area End -->
    <!-- Certification Area Start -->
    <div class="certification section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 lg-mb-25">
                    <div class="certification-left section-padding pb-0">
                        <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Industry Certifications</span>
                        <h2 class="title_split_anim">Our Key Achievements Over the Years</h2>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="certification-right">
                        <img class="wow img_top_animation" src="assets/img/page/who-we-are.jpg" alt="image">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="counter__one-area mt-80">
                        <div class="certification-right-counter">
                            <h2><span class="counter">678</span>+</h2>
                            <span>Complete Projects</span>
                        </div>
                        <div class="certification-right-counter">
                            <h2><span class="counter">120</span>+</h2>
                            <span>Team Members</span>
                        </div>
                        <div class="certification-right-counter">
                            <h2><span class="counter">635</span>+</h2>
                            <span>Client Reviews</span>
                        </div>
                        <div class="certification-right-counter">
                            <h2><span class="counter">89</span>+</h2>
                            <span>Winning Awards</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Certification Area End -->
    <!-- Team Area Start -->
    <div class="team__area section-padding">
        <div class="container">
            <div class="row mb-35">
                <div class="col-xl-12">
                    <div class="team__area-title t-center">
                        <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Meet Our Experts</span>
                        <h2 class="title_split_anim">Dedicated Professionals</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp mt-25" data-wow-delay=".3s">
                    <div class="team__area-item">
                        <img class="img_full" src="assets/img/team/team-1.jpg" alt="image">
                        <div class="team__area-item-content t-center pt-20">
                            <h5>Alan Dosan</h5>
                            <span>Lead Architect</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp mt-25" data-wow-delay=".6s">
                    <div class="team__area-item">
                        <img class="img_full" src="assets/img/team/team-2.jpg" alt="image">
                        <div class="team__area-item-content t-center pt-20">
                            <h5>Sarah Johnson</h5>
                            <span>General Laborer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp mt-25" data-wow-delay=".9s">
                    <div class="team__area-item">
                        <img class="img_full" src="assets/img/team/team-3.jpg" alt="image">
                        <div class="team__area-item-content t-center pt-20">
                            <h5>Derya Kurtulus</h5>
                            <span>Safety Inspector</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp mt-25" data-wow-delay="1.2s">
                    <div class="team__area-item">
                        <img class="img_full" src="assets/img/team/team-4.jpg" alt="image">
                        <div class="team__area-item-content t-center pt-20">
                            <h5>Steve Rhodes</h5>
                            <span>Civil Engineer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Area End -->
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
										<h6><a href="https://www.google.com/maps">3891 Ranch view Richardson, California 62639</a></h6>
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
						<p>Copyright 2024 – All Rights Reserved By <a href="https://themeforest.net/user/themeori/portfolio" target="_blank">ThemeOri</a></p>
					</div>
				</div>
				<div class="col-md-5">
					<div class="copyright__area-social t-right md-t-center">
						<ul>
							<li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://x.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li><a href="https://behance.net" target="_blank"><i class="fab fa-behance"></i></a></li>
							<li><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>							
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Copyright Area End -->
	<!-- Scroll Btn Start -->
	<div class="scroll-up scroll-one">
		<svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /> </svg>
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