<!DOCTYPE html>
<html lang="en">

<head>
	<title>OCESEL-Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('user/css/open-iconic-bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/animate.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/aos.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/bootstrap-datepicker.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/jquery.timepicker.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/style.css')}}">
	<style>
		.wrapper .title {
			padding: 30px 20px;
			text-align: center;
			font-size: 24px;
			font-weight: 700;
			border-bottom: 1px solid #ebedec;
		}

		.wrapper .tabs_wrap {
			padding: 20px;

		}

		.wrapper .tabs_wrap ul {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
		}

		.wrapper .tabs_wrap ul li {
			-webkit-width: 105px;
			-webkit-text-align: center;
			-webkit-background: #e9ecf1;
			-webkit-border-right: 1px solid #c1c4c9;
			-webkit-cursor: pointer;
			width: 105px;
			text-align: center;
			background: #e9ecf1;
			border-right: 1px solid #c1c4c9;
			cursor: pointer;
			-webkit-transition: all 0.2s ease;
			-o-transition: all 0.2s ease;
			transition: all 0.2s ease;
		}

		.wrapper .tabs_wrap ul li:first-child {
			border-top-left-radius: 25px;
			border-bottom-left-radius: 25px;
			-webkit-border-top-left-radius: 25px;
			-webkit-border-bottom-left-radius: 25px;
			-moz-webkit-border-top-left-radius: 25px;
			-moz-border-bottom-left-radius: 25px;
		}

		.wrapper .tabs_wrap ul li:last-child {
			border-right: 0px;
			border-top-right-radius: 25px;
			border-bottom-right-radius: 25px;
			-webkit-border-right: 0px;
			-webkit-border-top-right-radius: 25px;
			-webkit-border-bottom-right-radius: 25px;
			-moz-border-right: 0px;
			-moz-border-top-right-radius: 25px;
			-moz-border-bottom-right-radius: 25px;
			-khtml-border-top-right-radius: 25%;
			-khtml-border-bottom-right-radius: 25%;
		}

		.wrapper .tabs_wrap ul li:hover,
		.wrapper .tabs_wrap ul li.active {
			background: green;
			color: #fff;
			-webkit-background: #7fc469;
			-webkit-color: #fff;
			-moz-background: #7fc469;
			-moz-color: #fff;

		}

		.wrapper .container .item_wrap {
			padding: 10px 20px;
			border-bottom: 1px solid #ebedec;
			cursor: pointer;
			-webkit-padding: 10px 20px;
			-webkit-border-bottom: 1px solid #ebedec;
			-webkit-cursor: pointer;

			-moz-padding: 10px 20px;
			-moz-border-bottom: 1px solid #ebedec;
			-moz-cursor: pointer;
		}

		.wrapper .container .item_wrap:hover {
			background: #e9ecf1;
			-webkit-background: #e9ecf1;
			-moz-background: #e9ecf1;
		}

		.wrapper .container .item {
			position: relative;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-box-pack: justify;
			-ms-flex-pack: justify;
			justify-content: space-between;
		}

		.nav-pills .nav-link.active {
			color: green;
			background-color: #7fc469;
			-webkit-color: #fff;
			-webkit-background-color: #7fc469;
		}

		.prcc {
			margin-bottom: -6px;
		}


		@media (min-width: 576px) {
			.rounded-nav {
				border-radius: 50rem !important;
			}
		}

		@media (min-width: 576px) {
			.rounded-nav .nav-link {
				border-radius: 50rem !important;
			}
		}

		/* With arrow tabs */

		.with-arrow .nav-link.active {
			position: relative;
		}

		.with-arrow .nav-link.active::after {
			content: '';
			border-left: 6px solid transparent;
			border-right: 6px solid transparent;
			border-top: 6px solid #2b90d9;
			position: absolute;
			bottom: -6px;
			left: 50%;
			transform: translateX(-50%);
			display: block;
		}

		/* lined tabs */

		.lined .nav-link {
			border: none;
			border-bottom: 3px solid transparent;
		}

		.lined .nav-link:hover {
			border: none;
			border-bottom: 3px solid transparent;
		}

		.lined .nav-link.active {
			background: none;
			color: #555;
			border-color: #2b90d9;
		}

		.tab-bars {
			padding-left: 25rem;
		}

		.tab-bar {
			padding-right: 25rem;
		}

		a {
			color: #070707;
		}

		a:hover,
		a:focus {
			color: #030303;
		}

		.nav-item .nav-link,
		.nav-tabs .nav-link {
			-webkit-transition: all 300ms ease 0s;
			-moz-transition: all 300ms ease 0s;
			-o-transition: all 300ms ease 0s;
			-ms-transition: all 300ms ease 0s;
			transition: all 300ms ease 0s;
		}

		.card a {
			-webkit-transition: all 150ms ease 0s;
			-moz-transition: all 150ms ease 0s;
			-o-transition: all 150ms ease 0s;
			-ms-transition: all 150ms ease 0s;
			transition: all 150ms ease 0s;
		}

		[data-toggle="collapse"][data-parent="#accordion"] i {
			-webkit-transition: transform 150ms ease 0s;
			-moz-transition: transform 150ms ease 0s;
			-o-transition: transform 150ms ease 0s;
			-ms-transition: all 150ms ease 0s;
			transition: transform 150ms ease 0s;
		}

		[data-toggle="collapse"][data-parent="#accordion"][aria-expanded="true"] i {
			filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
			-webkit-transform: rotate(180deg);
			-ms-transform: rotate(180deg);
			transform: rotate(180deg);
		}


		.now-ui-icons {
			display: inline-block;
			font: normal normal normal 14px/1 'Nucleo Outline';
			font-size: inherit;
			speak: none;
		}

		text-transform: none;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		}

		@-webkit-keyframes nc-icon-spin {
			0% {
				-webkit-transform: rotate(0deg);
			}

			100% {
				-webkit-transform: rotate(360deg);
			}
		}

		@-moz-keyframes nc-icon-spin {
			0% {
				-moz-transform: rotate(0deg);
			}

			100% {
				-moz-transform: rotate(360deg);
			}
		}

		@keyframes nc-icon-spin {
			0% {
				-webkit-transform: rotate(0deg);
				-moz-transform: rotate(0deg);
				-ms-transform: rotate(0deg);
				-o-transform: rotate(0deg);
				transform: rotate(0deg);
			}

			100% {
				-webkit-transform: rotate(360deg);
				-moz-transform: rotate(360deg);
				-ms-transform: rotate(360deg);
				-o-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}

		.now-ui-icons.objects_umbrella-13:before {
			content: "\ea5f";
		}

		.now-ui-icons.shopping_cart-simple:before {
			content: "\ea1d";
		}

		.now-ui-icons.shopping_shop:before {
			content: "\ea50";
		}

		.now-ui-icons.ui-2_settings-90:before {
			content: "\ea4b";
		}

		.nav-tabs {
			border: 0;
			padding: 15px 0.7rem;
		}

		.nav-tabs:not(.nav-tabs-neutral)>.nav-item>.nav-link.active {
			box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3);
		}

		.card .nav-tabs {
			border-top-right-radius: 0.1875rem;
			border-top-left-radius: 0.1875rem;
		}

		.nav-tabs>.nav-item>.nav-link {
			color: #888888;
			margin: 0;
			margin-right: 5px;
			background-color: transparent;
			border: 1px solid transparent;
			border-radius: 30px;
			font-size: 14px;
			padding: 11px 23px;
			line-height: 1.5;
		}

		.nav-tabs>.nav-item>.nav-link:hover {
			background-color: transparent;
		}

		.nav-tabs>.nav-item>.nav-link.active {
			background-color: #444;
			border-radius: 30px;
			color: #FFFFFF;
		}

		.nav-tabs>.nav-item>.nav-link i.now-ui-icons {
			font-size: 14px;
			position: relative;
			top: 1px;
			margin-right: 3px;
		}

		.nav-tabs.nav-tabs-neutral>.nav-item>.nav-link {
			color: #FFFFFF;
		}

		.nav-tabs.nav-tabs-neutral>.nav-item>.nav-link.active {
			background-color: rgba(255, 255, 255, 0.2);
			color: #FFFFFF;
		}
	</style>
</head>

<body>
	<div class="back-to-top"></div>
	<header class="site-header header-style-2">
		{{-- <div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col col-sm-6 contact-info">
						<ul>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i> Prtner with Us</li>
							<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i>Refer and Earn</li>
						</ul>
					</div>
					<div class="col col-sm-6 language-login-wrapper">
						<div class="language-login clearfix">
							<div class="client-login">
								<a href="register" id="client-Signup-btn"><i class="fa fa-key" aria-hidden="true"></i>
									Sign Up</a>
							</div>
							<div class="client-login">
								<a href="login" id="client-login-btn"><i class="fa fa-key" aria-hidden="true"></i> Sign
									In</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end topbar --> --}}

		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 text-sm">
						<div class="site-info">
							<a href="#"><span class="mai-call text-primary"></span> <i class="fa fa-envelope-o"
									aria-hidden="true"></i>Prtner with Us</a>
							<span class="divider">|</span>
							<a href="#"><span class="mai-mail text-primary"></span><i class="fa fa-volume-control-phone"
									aria-hidden="true"></i> Refer and Earn</a>
						</div>
					</div>
					<div class="col-sm-4 text-right text-sm">
						<div class="social-mini-button">
							@if(Route::has('login'))

							@auth

							@else
							<div class="client-login">
								<a href="{{ route('login') }}" id="client-Signup-btn"><i class="fa fa-key"
										aria-hidden="true"></i> Sign In/ Sign Up</a>
							</div>
							@endauth
							@endif
						</div>
					</div>
				</div> <!-- .row -->
			</div> <!-- .container -->
		</div> <!-- .topbar -->

		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<!-- <a class="navbar-brand" href="index.html">Mosaic</a> -->
				<a href="#"><img src="{{ asset('user/images/Untitled_design__2_-removebg-preview.png')}}" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
					aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="#" class="nav-link">Design Galery</a></li>
						<li class="nav-item"><a href="{{url('Modularkitchen')}}" class="nav-link">Modular Kitchen</a>
						</li>
						<li class="nav-item"><a href="{{url('Bedroom')}}" class="nav-link">Bedroom</a></li>
						<li class="nav-item"><a href="{{url('Livingroom')}}" class="nav-link">Living Room</a></li>
						<li class="nav-item"><a href="{{url('Bathroom')}}" class="nav-link">Bathroom </a></li>

						<li class="nav-item dropdown">
							<a class="nav-link  dropdown" href="#"> ... </a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Space Saving Furniture</a></li>
								<li><a class="dropdown-item" href="#">Home Office</a></li>
								<li><a class="dropdown-item" href="#">customer Stories</a></li>
							</ul>
						</li>

						<li>
							<div class=" nav-item get-estimate">
								<a class="btn btn-sm btn-outline btn-secondary" href="{{url('estimate')}}"
									style="color: #000000;background: #e9ecef;width:8rem;line-height: 1.3rem;">Get
									Estimate</a>
							</div>
						</li>
						<li>
							@if(Route::has('login'))

							@auth
							<x-app-layout>
							</x-app-layout>
							@else

							@endauth
							@endif
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END nav -->
	</header>
	<section class="home-slider js-fullheight owl-carousel bg-white">
		<div class="slider-item js-fullheight">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
					data-scrollax-parent="true">
					<div class="one-third order-md-last img js-fullheight"
						style="background-image:url({{ asset('user/images/bg_1.jpg')}});">
						<h3 class="vr">Architecture Firm</h3>
					</div>
					<div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
						data-scrollax=" properties: { translateY: '70%' }">
						<div class="text">
							<h1 class="mb-4">We Love <br>Modern Designs</h1>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
								your mouth.</p>
							<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">View our works</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item js-fullheight">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
					data-scrollax-parent="true">
					<div class="one-third order-md-last img js-fullheight"
						style="background-image:url({{ asset('user/images/ocesel-designs-bg_logo.png')}});">
						<h3 class="vr">Since - 2018</h3>
					</div>
					<div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
						data-scrollax=" properties: { translateY: '70%' }">
						<div class="text">
							<h1 class="mb-4">We Create Amazing Architecture Designs</h1>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
								your mouth.</p>
							<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">View our works</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftc-no-pb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-5 p-md-5 img img-2"
					style="background-image: url({{ asset('user/images/bg_3.jpg')}});">
				</div>
				<div class="col-md-7 wrap-about pb-md-5 ftco-animate">
					<div class="heading-section mb-5 pl-md-5">
						<div class="pl-md-5 ml-md-5">
							<span class="subheading subheading-with-line"><small
									class="pr-2 bg-white">About</small></span>
							<h2 class="mb-4">We are the best Interior, Exterior &amp; Architecture Firm</h2>
						</div>
					</div>
					<div class="pl-md-5 ml-md-5 mb-5">
						<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
							would have been rewritten a thousand times and everything that was left from its origin
							would be the word "and" and the Little Blind Text should turn around and return to its own,
							safe country. But nothing the copy said could convince her and so it didn’t take long until
							a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged
							her into their agency, where they abused her for their.</p>
						<p>When she reached the first hills of the Italic Mountains, she had a last view back on the
							skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
							her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
							continued her way.</p>
						<p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-counter img" id="section-counter"
		style="background-image: url({{ asset('user/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row d-md-flex align-items-center justify-content-center">
				<div class="col-lg-10">
					<div class="row d-md-flex align-items-center">
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="18">0</strong>
									<span>Years of Experienced</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="351">0</strong>
									<span>Happy Clients</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="564">0</strong>
									<span>Finished Projects</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="300">0</strong>
									<span>Working Days</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-services">
		<div class="container">
			<div class="row justify-content-start">
				<div class="col-md-4 heading-section ftco-animate">
					<h2 class="mb-4">Our Work Flow</h2>
				</div>
				<div class="col-md-8 pl-md-5 ftco-animate">
					<div class="pl-md-4 border-line">
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts. Separated they live in.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-idea"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Perfectly Design</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
								unorthographic.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-compass-symbol"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Carefully Planned</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
								unorthographic.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-layers"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Smartly Execute</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
								unorthographic.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-start mt-5 py-5">
				<div class="col-md-4 heading-section ftco-animate">
					<h2 class="mb-4">Our Services</h2>
					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
						unorthographic.</p>
				</div>
				<div class="col-md-8 ftco-animate">
					<div class="row d-flex">
						<div class="col-md-6 d-flex align-items-stretch">
							<div class="media block-6 services services-2 d-block bg-light p-4 mb-4">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-layers"></span>
								</div>
								<div class="media-body p-2 mt-3">
									<h3 class="heading">Design</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an
										almost unorthographic.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-stretch">
							<div class="media block-6 services services-2 d-block bg-light p-4 mb-4">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-layers"></span>
								</div>
								<div class="media-body p-2 mt-3">
									<h3 class="heading">Industrial Design</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an
										almost unorthographic.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-stretch">
							<div class="media block-6 services services-2 d-block bg-light p-4 mb-4">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-layers"></span>
								</div>
								<div class="media-body p-2 mt-3">
									<h3 class="heading">Architecture Support</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an
										almost unorthographic.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-stretch">
							<div class="media block-6 services services-2 d-block bg-light p-4 mb-4">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-layers"></span>
								</div>
								<div class="media-body p-2 mt-3">
									<h3 class="heading">Renovation</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an
										almost unorthographic.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		{{-- <section> --}}

			<div class="container">
				<div class="">
					<div class="justify-content-center">
						<ul class="nav nav-tabs justify-content-center" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
									Design gallary
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#settings" role="tab">
									Modular Kicthen
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#bed" role="tab">
									Bedroom
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#liv" role="tab">
									Livingroom
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#bath" role="tab">
									Bathroom
								</a>
							</li>
						</ul>
					</div>

					<div class="card-body">
						<!-- Tab panes -->
						<div class="tab-content text-center">
							<div class="tab-pane active" id="home" role="tabpanel">

								<div class="row justify-content-center mt-3">

									<div class="container-wrap">
										<div class="row no-gutters">
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-1.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3><a href="project.html">Office Interior Design</a></h3>
													</div>
													<a href="{{ asset('user/images/work-1.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-2.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-2.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-3.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-3.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-4.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-4.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-5.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Landscape Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-5.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-6.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Exterior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-6.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-7.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Exterior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-7.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-8.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-8.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
										</div>
									</div>

								</div>

							</div>
							<div class="tab-pane" id="settings" role="tabpanel">

								<div class="row justify-content-center mt-3">

									<div class="container-wrap">
										<div class="row no-gutters">
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-1.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3><a href="project.html">Office Interior Design</a></h3>
													</div>
													<a href="{{ asset('user/images/work-1.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-2.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-2.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-3.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-3.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-4.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-4.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-5.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Landscape Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-5.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-6.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Exterior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-6.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-7.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Exterior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-7.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-8.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-8.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="tab-pane" id="bed" role="tabpanel">

								<div class="row justify-content-center mt-3">

									<div class="container-wrap">
										<div class="row no-gutters">
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-1.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3><a href="project.html">Office Interior Design</a></h3>
													</div>
													<a href="{{ asset('user/images/work-1.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-2.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-2.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-3.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-3.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-4.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-4.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-5.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Landscape Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-5.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-6.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Exterior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-6.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-7.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Exterior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-7.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-8.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-8.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="tab-pane" id="liv" role="tabpanel">

								<div class="row justify-content-center mt-3">

									<div class="container-wrap">
										<div class="row no-gutters">
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-1.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3><a href="project.html">Office Interior Design</a></h3>
													</div>
													<a href="{{ asset('user/images/work-1.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-2.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-2.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-3.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-3.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-4.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-4.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-5.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Landscape Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-5.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-6.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Exterior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-6.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-7.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Exterior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-7.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-8.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-8.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

							<div class="tab-pane" id="bath" role="tabpanel">

								<div class="row justify-content-center mt-3">

									<div class="container-wrap">
										<div class="row no-gutters">
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-1.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3><a href="project.html">Office Interior Design</a></h3>
													</div>
													<a href="{{ asset('user/images/work-1.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-2.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-2.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-3.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-3.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-4.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-4.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-5.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Landscape Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-5.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-6.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Exterior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-6.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-7.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Exterior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-7.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-lg-3 ftco-animate">
												<div class="project">
													<img src="{{ asset('user/images/work-8.jpg')}}" class="img-fluid"
														alt="Colorlib Template">
													<div class="text">
														<span>Interior Design</span>
														<h3>Office Interior Design</h3>
													</div>
													<a href="{{ asset('user/images/work-8.jpg')}}"
														class="icon image-popup d-flex justify-content-center align-items-center">
														<span class="icon-expand"></span>
													</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
		</section>



		<section class="ftco-section testimony-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-7 heading-section ftco-animate">
						<span class="subheading subheading-with-line"><small
								class="pr-2 bg-light">Testimony</small></span>
						<h2 class="mb-4">Our satisfied customer says</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts. Separated they live in</p>
					</div>
				</div>
				<div class="row ftco-animate">
					<div class="col-md-12">
						<div class="carousel-testimony owl-carousel">
							<div class="item">
								<div class="testimony-wrap p-4 pb-5">
									<div class="user-img mb-5"
										style="background-image: url({{ asset('user/images/person_1.jpg')}})">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text">
										<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
											countries Vokalia and Consonantia, there live the blind texts.</p>
										<div class="pl-5">
											<p class="name">Garreth Smith</p>
											<span class="position">CEO Founder of Commercial Building</span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap p-4 pb-5">
									<div class="user-img mb-5"
										style="background-image: url({{ asset('user/images/person_2.jpg')}})">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text">
										<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
											countries Vokalia and Consonantia, there live the blind texts.</p>
										<div class="pl-5">
											<p class="name">Garreth Smith</p>
											<span class="position">CEO Founder of Interior Design</span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap p-4 pb-5">
									<div class="user-img mb-5"
										style="background-image: url({{ asset('user/images/person_3.jpg')}})">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text">
										<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
											countries Vokalia and Consonantia, there live the blind texts.</p>
										<div class="pl-5">
											<p class="name">Garreth Smith</p>
											<span class="position">Exterior Designer</span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap p-4 pb-5">
									<div class="user-img mb-5"
										style="background-image: url({{ asset('user/images/person_1.jpg')}})">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text">
										<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
											countries Vokalia and Consonantia, there live the blind texts.</p>
										<div class="pl-5">
											<p class="name">Garreth Smith</p>
											<span class="position">Landscape Designer</span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap p-4 pb-5">
									<div class="user-img mb-5"
										style="background-image: url({{ asset('user/images/person_1.jpg')}})">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text">
										<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
											countries Vokalia and Consonantia, there live the blind texts.</p>
										<div class="pl-5">
											<p class="name">Garreth Smith</p>
											<span class="position">System Analyst</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



		<!-- <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-start mb-5 pb-2">
          <div class="col-md-4 heading-section ftco-animate">
          	<span class="subheading subheading-with-line"><small class="pr-2 bg-white">Blog</small></span>
            <h2 class="mb-4">Recent Blog</h2>
          </div>
          <div class="col-md-8 pl-md-5 heading-section ftco-animate">
          	<div class="pl-md-4 border-line">
	          	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          	</div>
          </div>
        </div>	
				<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('user/images/image_1.jpg')}});">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">Jan. 20, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('user/images/image_2.jpg')}});">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">Jan. 20, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('user/images/image_3.jpg')}});">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">Jan. 20, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
	              </div>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section> -->

		<section class="ftco-section ftco-client">
			<div class="container">
				<div class="row justify-content-start mb-5 pb-2">
					<div class="col-md-4 heading-section ftco-animate">
						<span class="subheading subheading-with-line"><small
								class="pr-2 bg-white">Clients</small></span>
						<h2 class="mb-4">Our CLients</h2>
					</div>
					<div class="col-md-8 pl-md-5 heading-section ftco-animate">
						<div class="pl-md-4 border-line">
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
						</div>
					</div>
				</div>
				<div class="row ftco-animate">
					<div class="col-md-12">
						<div class="carousel-client owl-carousel">
							<div class="item">
								<a href="#" class="client text-center p-5">
									CLient Logo 1
								</a>
							</div>
							<div class="item">
								<a href="#" class="client text-center p-5">
									CLient Logo 2
								</a>
							</div>
							<div class="item">
								<a href="#" class="client text-center p-5">
									CLient Logo 3
								</a>
							</div>
							<div class="item">
								<a href="#" class="client text-center p-5">
									CLient Logo 4
								</a>
							</div>
							<div class="item">
								<a href="#" class="client text-center p-5">
									CLient Logo 5
								</a>
							</div>
							<div class="item">
								<a href="#" class="client text-center p-5">
									CLient Logo 6
								</a>
							</div>
							<div class="item">
								<a href="#" class="client text-center p-5">
									CLient Logo 7
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<!-- <h2 class="ftco-heading-2">Mosaic</h2> -->
							<div><a href="#"><img src="{{ asset('user/images/Untitled design (2).png')}}" alt=""></a>
							</div>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts.</p>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
								<li class="ftco-animate"><a href="https://wa.me/919776799700"><span
											class="icon-whatsapp"></span></a></li>
								<li class="ftco-animate"><a href="https://www.facebook.com/oceseldesigns/"><span
											class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="https://www.instagram.com/oceseldesigns/"><span
											class="icon-instagram"></span></a></li>
								<li class="ftco-animate"><a href="tel:+919776799700"><span
											class="icon-phone"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4 ml-md-4">
							<h2 class="ftco-heading-2">Links</h2>
							<ul class="list-unstyled">
								<li><a href="{{ url('/') }}"><span class="icon-long-arrow-right mr-2"></span>Home</a>
								</li>
								<li><a href="{{ url('about') }}"><span
											class="icon-long-arrow-right mr-2"></span>About</a></li>
								<li><a href="{{ url('service') }}"><span
											class="icon-long-arrow-right mr-2"></span>Services</a></li>
								<li><a href="{{ url('project') }}"><span
											class="icon-long-arrow-right mr-2"></span>Projects</a></li>
								<li><a href="{{ url('contact') }}"><span
											class="icon-long-arrow-right mr-2"></span>Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Services</h2>
							<ul class="list-unstyled">
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Architectural Design</a>
								</li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Interior Design</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Exterior Design</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Lighting Design</a></li>
								<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>AutoCAD Service</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Get IN Touch</h2>

							<p>Hig-31,Seven Acar Damana,<br> Chandrasekharpur,<br> Bhubaneswar, Odisha 751016</p>
							<ul>
								<li>sarthak@oceseldesigns.com</li>
								<li>+91-9776799700</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">

						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="icon-heart"
								aria-hidden="true"></i> by <a href="" target="_blank"></a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</footer>


		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
				<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
				<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
					stroke="#F96D00" />
			</svg></div>


		<script src="{{ asset('user/js/jquery.min.js')}}"></script>
		<script src="{{ asset('user/js/jquery-migrate-3.0.1.min.js')}}"></script>
		<script src="{{ asset('user/js/popper.min.js')}}"></script>
		<script src="{{ asset('user/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('user/js/jquery.easing.1.3.js')}}"></script>
		<script src="{{ asset('user/js/jquery.waypoints.min.js')}}"></script>
		<script src="{{ asset('user/js/jquery.stellar.min.js')}}"></script>
		<script src="{{ asset('user/js/owl.carousel.min.js')}}"></script>
		<script src="{{ asset('user/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{ asset('user/js/aos.js')}}"></script>
		<script src="{{ asset('user/js/jquery.animateNumber.min.js')}}"></script>
		<script src="{{ asset('user/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{ asset('user/js/jquery.timepicker.min.js')}}"></script>
		<script src="{{ asset('user/js/scrollax.min.js')}}"></script>
		<script
			src="user/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
		</script>
		<script src="{{ asset('user/js/google-map.js')}}"></script>
		<script src="{{ asset('user/js/main.js')}}"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
		</script>
</body>

</html>