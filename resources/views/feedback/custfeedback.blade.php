<!DOCTYPE html>
<html lang="en">
<head>
<title>Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="template/styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="template/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="template/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="template/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="template/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="template/styles/categories.css">
<link rel="stylesheet" type="text/css" href="template/styles/categories_responsive.css">
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
									<li>
										<a href="{{url('/cust')}}">Home</a>
									</li>
									<li class="hassubs">
										<a href="#">Categories</a>
										<ul>
											<li><a href="{{url('/iphonecust')}}">I Phone</a></li>
											<li><a href="{{url('/computercust')}}">Computers</a></li>
										</ul>
									</li>
									<li class="active"><a href="{{url('/custfeedback')}}">Feedback</a></li>
									<li><a href="{{ url('/buy') }}">My Orders</a></li>
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											Hi There <span class="caret"></span>
										</a>

										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
										</div>
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
						<a href="{{url('/cust')}}">Home<i class="fa fa-angle-down"></i></a>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="#">Categories<i class="fa fa-angle-down"></i></a>
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
		<div class="home_container">
			<div class="home_background" style="background-image:url(template/images/categories.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Feedback<span>.</span></div>
								<div class="home_text"><p>Have any though on our website?</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Please leave your rating and feedback.</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('feedback.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Nama :</strong>
          <input type="text" name="nama" class="form-control" placeholder="Nama">
        </div>
        <div class="stars">
    <input class="star star-5" id="star-5" type="radio" value="5"  name="rating" />
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" value="4"  name="rating"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" value="3"  name="rating"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" value="2"  name="rating"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" value="1"  name="rating"/>
    <label class="star star-1" for="star-1"></label>
    </div>
        <div class="col-md-12">
          <strong>Comment :</strong>
          <textarea class="form-control" placeholder="Comment" name="coment" rows="8" cols="80"></textarea>
        </div>

        <div class="col-md-12"><br>
          <a href="{{route('feedback.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
<br>
<br>
  </div>

<script src="template/js/jquery-3.2.1.min.js"></script>
<script src="template/styles/bootstrap4/popper.js"></script>
<script src="template/styles/bootstrap4/bootstrap.min.js"></script>
<script src="template/plugins/greensock/TweenMax.min.js"></script>
<script src="template/plugins/greensock/TimelineMax.min.js"></script>
<script src="template/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="template/plugins/greensock/animation.gsap.min.js"></script>
<script src="template/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="template/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="template/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="template/plugins/easing/easing.js"></script>
<script src="template/plugins/parallax-js-master/parallax.min.js"></script>
<script src="template/js/custom.js"></script>
</div>
</body>
</html>