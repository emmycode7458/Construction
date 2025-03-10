@include('includes.header')

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
	<div class="header__four">
		<div class="custom_container">
			<div class="header__area-menubar">
				<div class="header__area-menubar-left one">
					<div class="header__area-menubar-left-logo">
                        <a href="index.html"><img src="assets/img/logo-2.png" alt="logo"></a>
                    </div>
				</div>
				<div class="header__area-menubar-center">
					<div class="header__area-menubar-center-menu">
                        <ul id="mobilemenu">
                            <li><a href="{{ url ('/') }}">Home</a></li>
							<li><a href="{{ url ('/about') }}">About Us</a></li>
							<li><a href="{{ url ('/services') }}">Service</a></li>
                            <li><a href="{{ url ('/contact')}}">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="header__area-menubar-right">
					<div class="header__area-menubar-right-search">
						<div class="search">	
							<span class="header__area-menubar-right-search-icon open"><i class="fal fa-search"></i></span>
						</div>
					</div>
					<div class="header__area-menubar-right-btn one">
						<div class="item_bounce">
                            <a class="build_button" href="request-quote.html">Get Started<i class="flaticon-right-up"></i></a>
                        </div>
					</div>
					<div class="header__area-menubar-right-sidebar">
						<div class="header__area-menubar-right-sidebar-icon">
							<i class="flaticon-menu-6"></i>
						</div>
					</div>
					<div class="header__area-menubar-right-responsive-menu menu__bar">
						<i class="flaticon-menu-3"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header Area End -->
	<!-- Banner Area Start -->
    <div class="banner__four">
        <div class="bg-video">
            <video autoplay muted loop id="myVideo"><source src="https://html.themeori.net/buildgo/assets/img/banner/banner.mp4" type="video/mp4"></video>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="banner__four-content">
                        <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Expert Solutions</span>
                        <div class="title_split_anim">
                            <h1>Shaping Future</h1>
                            <h2>Architecture</h2>
                        </div>
                        <div class="item_bounce">
                            <a class="build_button" href="request-quote.html">Start Today<i class="flaticon-right-up"></i></a>
                        </div>
                        <a href="request-quote.html"><img class="h_rotate" src="assets/img/shape/content.png" alt="image"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="banner__four-brand">
                        <div class="title">
                            <h4>Our Trusted Partners</h4>
                        </div>
                        <div class="scroll__slider">
                            <div class="text-slide">
                                <div class="sliders text_scroll">
                                    <ul>
                                        <li><img src="assets/img/brand/brand-1.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-2.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-3.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-4.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-5.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-6.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-7.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-8.png" alt="image"></li>
                                    </ul>
                                </div>
                                <div class="sliders text_scroll">
                                    <ul>
                                        <li><img src="assets/img/brand/brand-1.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-2.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-3.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-4.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-5.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-6.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-7.png" alt="image"></li>
                                        <li><img src="assets/img/brand/brand-8.png" alt="image"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Banner Area End -->
    <!-- About Area Start -->
    <div class="about__four section-padding">
        <div class="container">
            <div class="row al-center">
                <div class="col-lg-3 lg-mb-25">
                    <div class="about__four-left wow img_top_animation">
                        <img src="assets/img/about/about-5.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="about__four-title">
                        <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">About Our Company</span>
                        <h2 class="title_split_anim mb-20">Leading Construction Innovation With Digital Consulting</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">We focus on optimizing efficiency, managing risks, and delivering innovative solutions tailored to meet unique project needs and enhance productivity.</p>
                        <div class="item_bounce">
                            <a class="build_button mt-25" href="history.html">Our Story<i class="flaticon-right-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-lg-8">
                    <div class="about__four-counter">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="about__four-counter-item">
                                    <div class="box">
                                        <h2><span class="counter">678</span>+</h2>
                                        <span>Complete Projects</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                                <div class="about__four-counter-item borders t-center md-t-left">
                                    <div class="box">
                                        <h2><span class="counter">120</span>+</h2>
                                        <span>Team Members</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                                <div class="about__four-counter-item t-right md-t-left">
                                    <div class="box">
                                        <h2><span class="counter">635</span>+</h2>
                                        <span>Client Reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 lg-mt-25">
                    <div class="about__four-right t-right wow img_right_animation">
                        <img src="assets/img/about/about-6.jpg" alt="image">                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->
    <!-- Services Area Start -->
    <div class="services__four section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 lg-mb-25">
                    <div class="services__four-title section-padding pb-0">
                        <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Our Services</span>
                        <h2 class="title_split_anim">Provide Quality Services</h2>
						<div class="item_bounce">
                            <a class="build_button mt-40" href="services.html">more Services<i class="flaticon-right-up"></i></a>
                        </div>
                    </div>
                </div>            
                <div class="col-xl-7 col-lg-6">
                    <div class="services__four-image wow img_top_animation">
                        <img src="assets/img/page/services.jpg" alt="image">
                    </div>
                </div>
            </div>
            <div class="row mt-70 wow fadeInUp" data-wow-delay=".5s">
                <div class="col-xl-12">
					<div class="swiper services_four_slide data_cursor" data-cursor-text="Drag">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="services__one-item">
									<i class="flaticon-it-department"></i>
									<h4><a href="#">Flooring Installation</a></h4>
									<a class="more_btn" href="#">Read More<i class="flaticon-right-up"></i></a>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="services__one-item">
									<i class="flaticon-project"></i>
									<h4><a href="#">Building Architecture</a></h4>
									<a class="more_btn" href="#">Read More<i class="flaticon-right-up"></i></a>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="services__one-item">
									<i class="flaticon-design-thinking"></i>
									<h4><a href="#">Interior Design</a></h4>
									<a class="more_btn" href="#">Read More<i class="flaticon-right-up"></i></a>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="services__one-item">
									<i class="flaticon-data"></i>
									<h4><a href="#">House Renovation</a></h4>
									<a class="more_btn" href="#">Read More<i class="flaticon-right-up"></i></a>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!-- Success Area Start -->
    <div class="success__area section-padding">
        <div class="container">
            <div class="row al-center">
                <div class="col-lg-6 lg-mb-25">
                    <div class="success__area-title mr-70 xl-mr-0">
                        <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Construction Advices</span>
                        <h2 class="title_split_anim mb-20">Building Success With Expert Advisory Services</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">With a focus on innovation and sustainability, we help you navigate complex challenges, ensuring</p>
                        <div class="item_bounce">
                            <a class="build_button mt-25" href="contact.html">Get Advices<i class="flaticon-right-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="success__area-right">
                        <img class="lg_img_full wow img_top_animation" src="assets/img/page/skill.jpg" alt="image">
						<div class="success__area-right-skill mt-40 wow fadeInUp" data-wow-delay=".5s">
							<div class="skill__area-item">
								<div class="skill__area-item-content">
									<h6>Building Construction</h6> 
									<span class="skill__area-item-count"><span class="counter">89</span>%</span>
								</div>
								<div class="skill__area-item-inner">
									<div class="skill__area-item-bar" data-width="89"></div>
								</div>
							</div>
							<div class="skill__area-item">
								<div class="skill__area-item-content">
									<h6>Interiors Design</h6> 
									<span class="skill__area-item-count"><span class="counter">70</span>%</span>
								</div>
								<div class="skill__area-item-inner">
									<div class="skill__area-item-bar" data-width="70"></div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Success Area End -->
    <!-- Portfolio Area Start -->
    <div class="portfolio__four">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio__four-area">
                        <div class="portfolio__four-area-item">
                            <img src="assets/img/portfolio/portfolio-6.jpg" alt="image">
                            <div class="portfolio__four-area-item-area">
                                <div class="portfolio__one-item-content">
                                    <span>Hospitality</span>
                                    <h4><a href="portfolio-details.html">Seaside Resort Expansion</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__four-area-item">
                            <img src="assets/img/portfolio/portfolio-2.jpg" alt="image">
                            <div class="portfolio__four-area-item-area">
                                <div class="portfolio__one-item-content">
                                    <span>Retail</span>
                                    <h4><a href="portfolio-details.html">Urban Mall Development</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__four-area-item">
                            <img src="assets/img/portfolio/portfolio-4.jpg" alt="image">
                            <div class="portfolio__four-area-item-area">
                                <div class="portfolio__one-item-content">
                                    <span>Residential</span>
                                    <h4><a href="portfolio-details.html">Luxury Home Renovation</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__four-area-item">
                            <img src="assets/img/portfolio/portfolio-8.jpg" alt="image">
                            <div class="portfolio__four-area-item-area">
                                <div class="portfolio__one-item-content">
                                    <span>Architecture</span>
                                    <h4><a href="portfolio-details.html">Modern Architecture</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-60">
            <div class="row al-center">
                <div class="col-xl-5 col-md-7 md-mb-25 lg-t-center title_split_anim">
                    <h3>Get Expert Construction Advice and a Free Quote</h3>
                </div>
                <div class="col-xl-7 col-md-5 t-right lg-t-center">
                    <div class="item_bounce">
                        <a class="build_button" href="request-quote.html">Start a Journey<i class="flaticon-right-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Area End -->
    <!-- Industry Area Start -->
    <div class="industry__four section-padding">
        <div class="container">
            <div class="row al-center">
                <div class="col-lg-6 lg-mb-30">
                    <div class="industry__four-left">
                        <img class="lg_img_full wow img_top_animation" src="assets/img/page/image-2.jpg" alt="image">
                        <div class="row mt-40">
                            <div class="col-md-6 md-mb-25 wow fadeInUp" data-wow-delay=".4s">
                                <div class="industry__four-left-item borders pr-10 lg-pr-0">
                                    <img src="assets/img/icon/icon-3.svg" alt="image">
                                    <h5>Custom Designs</h5>
                                    <p>Tailored building solutions that reflect your vision style</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="industry__four-left-item pl-20 xl-pl-0">
                                    <img src="assets/img/icon/icon-2.svg" alt="image">
                                    <h5>Interior Plans</h5>
                                    <p>Creating aesthetically pleasing functional interior spaces</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="industry__four-right ml-45 xl-ml-0">
                        <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Industry Certifications</span>
                        <h2 class="title_split_anim mb-20">We Drive Client Success with Creative Building Designs</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">At BuildGo, we pride ourselves on transforming our clients' visions into reality. Our innovative and client-focused designs ensure that every project stands out.</p>
                        <div class="item_bounce">
                            <a class="build_button mt-25" href="contact.html">Contact Us<i class="flaticon-right-up"></i></a>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Industry Area End -->
    <!-- Text Slide Area Start -->
    <div class="text__slide section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 lg-mb-30">
                    <div class="text__slide-title mt-35 lg-mt-0">
                        <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Construction design</span>
                        <h2 class="title_split_anim">Digital Consulting The Key to Smarter Building</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text__slide-right">
                        <img class="wow img_left_animation" src="assets/img/page/cta.jpg" alt="image">
                        <div class="text__slide-right-counter item_bounce" style="background-image: url('assets/img/shape/content-1.png');">
                            <h2><span class="counter">29</span>+</h2>
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
    <!-- Text Slide Area End -->
    <!-- Blog Area Start -->
	<div class="blog__four section-padding-two">
		<div class="container">
			<div class="row mb-30">
				<div class="col-xl-12">
					<div class="blog__four-title t-center">
						<span class="subtitle wow fadeInLeft" data-wow-delay=".4s">News & Blog</span>
						<h2 class="title_split_anim">Update News & Blogs</h2>
					</div>					
				</div>
			</div>
            <div class="row">
                <div class="col-xl-4 col-md-6 mt-25 wow fadeInUp" data-wow-delay=".4s">
                    <div class="blog__four-item">
                        <div class="blog__four-item-image">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-1.jpg" alt="image"></a>
                            <div class="blog__four-item-image-date">
                                <h5>22</h5>
                                <h6>Dec</h6>
                            </div>
                        </div>
                        <div class="blog__four-item-content">
                            <div class="meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">How Weather Can Impact a Construction Project</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-25 wow fadeInUp" data-wow-delay=".7s">
                    <div class="blog__four-item">
                        <div class="blog__four-item-image">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-2.jpg" alt="image"></a>
                            <div class="blog__four-item-image-date">
                                <h5>19</h5>
                                <h6>Dec</h6>
                            </div>
                        </div>
                        <div class="blog__four-item-content">
                            <div class="meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">How to Choose the Perfect Construction Company</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-25 wow fadeInUp" data-wow-delay="1s">
                    <div class="blog__four-item">
                        <div class="blog__four-item-image">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-3.jpg" alt="image"></a>
                            <div class="blog__four-item-image-date">
                                <h5>14</h5>
                                <h6>Dec</h6>
                            </div>
                        </div>
                        <div class="blog__four-item-content">
                            <div class="meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                    <li><a href="#"><i class="far fa-comment-dots"></i>Comments (3)</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">Top Mistakes to Avoid During Home Renovation</a></h4>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>     
    <!-- Blog Area End -->
    <!-- Cta Area Start -->
    <div class="cta__four">
        <div class="container">
            <div class="row jc-center">
                <div class="col-xl-12">
                    <div class="cta__four-area t-center" style="background-image: url('assets/img/page/subscribe.jpg');">
                        <div class="cta__four-area-content">
                            <h2 class="title_split_anim">Join Our Community and Access Exclusive Insights Today</h2>
                            <div class="item_bounce">
                                <a class="build_button mt-40" href="request-quote.html">Free Consultation<i class="flaticon-right-up"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta Area End -->
	

	<div class="footer__four">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="footer__four-area">
						<div class="row">
							<div class="col-lg-4 col-sm-6">
								<div class="footer__four-widget mr-40">
									<a class="logo" href="index.html"><img src="assets/img/logo-3.png" alt="logo"></a>
									<h5>We’re Solutions for all construction</h5>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 sm-mt-30">
								<div class="footer__four-widget address">
									<h4>Address</h4>
									<div class="footer__four-widget-address">
										<h6><a href="https://www.google.com/maps">3891 Ranch view Richardson, California 62639</a></h6>
										<h4><a href="tel:+123%20(256)%20568%2058">+123 (256) 568 58</a></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 lg-mt-30">
								<div class="footer__four-widget ml-40 lg-ml-0">
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
								<div class="footer__four-widget address">
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
	<div class="copyright__area four">
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