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
    @include('includes.HeaderArea')
	<!-- Header Area End -->
    
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb__area" style="background-image: url('assets/img/page/breadcrumb.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb__area-content">
						<h2>Services</h2>
						<ul>
							<li><a href="index.html">Home</a><i class="fa-regular fa-angle-right"></i></li>
							<li>Services</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>       
    <!-- Breadcrumb Area End -->
    <!-- Services Area Start -->
    <div class="services__page section-padding-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mt-25 wow fadeInUp" data-wow-delay=".4s">
                    <div class="services__one-item">
                        <i class="flaticon-it-department"></i>
                        <h4><a href="services-details.html">Flooring Installation</a></h4>
                        <a class="more_btn" href="services-details.html">Read More<i class="flaticon-right-up"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-25 wow fadeInUp" data-wow-delay=".7s">
                    <div class="services__one-item">
                        <i class="flaticon-project"></i>
                        <h4><a href="services-details.html">Building Architecture</a></h4>
                        <a class="more_btn" href="services-details.html">Read More<i class="flaticon-right-up"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-25 wow fadeInUp" data-wow-delay="1s">
                    <div class="services__one-item">
                        <i class="flaticon-design-thinking"></i>
                        <h4><a href="services-details.html">Interior Design</a></h4>
                        <a class="more_btn" href="services-details.html">Read More<i class="flaticon-right-up"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-25 wow fadeInUp" data-wow-delay=".4s">
                    <div class="services__one-item">
                        <i class="flaticon-data"></i>
                        <h4><a href="services-details.html">House Renovation</a></h4>
                        <a class="more_btn" href="services-details.html">Read More<i class="flaticon-right-up"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-25 wow fadeInUp" data-wow-delay=".7s">
                    <div class="services__one-item">
                        <i class="flaticon-wrench-1"></i>
                        <h4><a href="services-details.html">Foundation Repair</a></h4>
                        <a class="more_btn" href="services-details.html">Read More<i class="flaticon-right-up"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-25 wow fadeInUp" data-wow-delay="1s">
                    <div class="services__one-item">
                        <i class="flaticon-idea-1"></i>
                        <h4><a href="services-details.html">Construction Planning</a></h4>
                        <a class="more_btn" href="services-details.html">Read More<i class="flaticon-right-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->

@include('includes.footer')