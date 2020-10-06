<!DOCTYPE html>
<html lang="en">
<head>
<title>The Gadgetz</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The Gadgetz">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../template/styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../template/plugins/font-awesome-4.7.0/css/font-awesome.min.css" >
<link rel="stylesheet" type="text/css" href="../template/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../template/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../template/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../template/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../template/styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="#">The Gadgetz.</a></div>
							<nav class="main_nav">
								<ul>
									<li class="active">
										<a href="{{ url('/login/cust') }}">Home</a>
									</li>
									<li class="hassubs">
										<a href="#">Categories</a>
										<ul>
											<li><a href="{{ url('/login/cust') }}">I Phone</a></li>
											<li><a href="{{ url('/login/cust') }}">Computers</a></li>
										</ul>
									</li>
									<li><a href="{{ url('/login/cust') }}">Feedback</a></li>
									<li><a href="{{ url('/login/cust') }}">My Orders</a></li>
									<li class="hassubs">
										<a href="#">Login</a>
										<ul>
										<li>
											<a class="nav-link" href="{{ url('/login/cust') }}">{{ __('Login') }}</a>
										</li>
										<li>
											<a class="nav-link" href="{{ url('/register/cust') }}">{{ __('Register') }}</a>
										</li>
										</ul>
									</li>
										


										
								
								</ul>
							</nav>
							<div class="header_extra ml-auto">
								<div class="search">
									<div class="search_icon">
										
										<g>
											<path d="M464.524,412.846l-97.929-97.925c23.6-34.068,35.406-72.047,35.406-113.917c0-27.218-5.284-53.249-15.852-78.087
												c-10.561-24.842-24.838-46.254-42.825-64.241c-17.987-17.987-39.396-32.264-64.233-42.826
												C254.246,5.285,228.217,0.003,200.999,0.003c-27.216,0-53.247,5.282-78.085,15.847C98.072,26.412,76.66,40.689,58.673,58.676
												c-17.989,17.987-32.264,39.403-42.827,64.241C5.282,147.758,0,173.786,0,201.004c0,27.216,5.282,53.238,15.846,78.083
												c10.562,24.838,24.838,46.247,42.827,64.234c17.987,17.993,39.403,32.264,64.241,42.832c24.841,10.563,50.869,15.844,78.085,15.844
												c41.879,0,79.852-11.807,113.922-35.405l97.929,97.641c6.852,7.231,15.406,10.849,25.693,10.849
												c9.897,0,18.467-3.617,25.694-10.849c7.23-7.23,10.848-15.796,10.848-25.693C475.088,428.458,471.567,419.889,464.524,412.846z
												 M291.363,291.358c-25.029,25.033-55.148,37.549-90.364,37.549c-35.21,0-65.329-12.519-90.36-37.549
												c-25.031-25.029-37.546-55.144-37.546-90.36c0-35.21,12.518-65.334,37.546-90.36c25.026-25.032,55.15-37.546,90.36-37.546
												c35.212,0,65.331,12.519,90.364,37.546c25.033,25.026,37.548,55.15,37.548,90.36C328.911,236.214,316.392,266.329,291.363,291.358z
												"/>
										</g>
									
									</div>
								</div>
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Search Panel -->
		<div class="search_panel trans_300">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
							<form action="#">
								<input type="text" class="search_input" placeholder="Search" required="required">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Social -->
		<div class="header_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu menu_mm trans_300">
		<div class="menu_container menu_mm">
			<div class="page_menu_content">
							
				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
				<ul class="page_menu_nav menu_mm">
					<li class="page_menu_item">
						<a href="index.html">Home<i class="fa fa-angle-down"></i></a>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="categories.html">Categories<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="{{url('/iphonecust')}}">I Phone<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="{{url('/computercust')}}">Computers<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item menu_mm"><a href="{{url('/custfeedback')}}">Feedback<i class="fa fa-angle-down"></i></a></li>
					<li class="page_menu_item menu_mm"><a href="{{ url('/buy') }}">My Orders<i class="fa fa-angle-down"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(template/images/logo.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new Online Gadget Shopping Experience.</div>
										<div class="home_slider_subtitle">Check out our latest product in this glorious website.</div>
										<div class="button button_light home_button"><a href="{{ url('/login/cust') }}">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
                
                <div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(template/images/compbg2.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Need Computer Accessories?</div>
										<div class="home_slider_subtitle">We have tons of computer accessories for you to choose and bought in just a few clicks.</div>
										<div class="button button_light home_button"><a href="{{ url('/login/cust') }}">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
                
                <div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(template/images/iphone.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Need I Phone Accessories?</div>
										<div class="home_slider_subtitle">We have tons of I Phone accessories for you to choose and bought in just a few clicks.</div>
										<div class="button button_light home_button"><a href="{{ url('/login/cust') }}">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

            </div>
            
		</div>
	</div>

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url(template/images/footer.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="footer_logo"><a href="#">The Gadgetz.</a></div>
						<div class="copyright ml-auto mr-auto"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{ url('/login') }}" >Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="../template/js/jquery-3.2.1.min.js"></script>
<script src="../template/styles/bootstrap4/popper.js"></script>
<script src="../template/styles/bootstrap4/bootstrap.min.js"></script>
<script src="../template/plugins/greensock/TweenMax.min.js"></script>
<script src="../template/plugins/greensock/TimelineMax.min.js"></script>
<script src="../template/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../template/plugins/greensock/animation.gsap.min.js"></script>
<script src="../template/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../template/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../template/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="../template/plugins/easing/easing.js"></script>
<script src="../template/plugins/parallax-js-master/parallax.min.js"></script>
<script src="../template/js/custom.js"></script>
</body>
</html>