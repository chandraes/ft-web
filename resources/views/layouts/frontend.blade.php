<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Stylesheets -->
<link href="{{asset('assets_front/css/bootstrap.css')}}" rel="stylesheet">

<link href="{{asset('assets_front/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets_front/css/responsive.css')}}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

<!--Color Switcher Mockup-->
{{-- <link href="{{asset('assets_front/css/color-switcher-design.css')}}" rel="stylesheet"> --}}

<!-- Color Themes -->
<link id="theme-color-file" href="{{asset('assets_front/css/color-themes/purple-theme.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('images/unsri-logo.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('images/unsri-logo.png')}}" type="image/x-icon">

{{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    {{-- <div class="preloader"></div> --}}

    <!-- Main Header -->
    @include('frontend.partials.header')

	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-text-widget">

					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="index.html"><img src="{{asset('assets_front/images/logo-2.png')}}" alt="" /></a>
							</div>
							<div class="content-box">
								<h2>About Us</h2>
								<p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
								<a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
							</div>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="list-style-one">
									<li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
									<li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
									<li><span class="icon fa fa-envelope"></span>Kanstr@gmail.com</li>
									<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
								<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
								<li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
								<li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
								<li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->

    @yield('content')

	@include('frontend.partials.footer')


</div>
<!--End pagewrapper-->

<!-- Header Search -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-multiply"></span></button>
	<form method="post" action="{{route('search')}}">
        @csrf
		<div class="form-group">
			<input type="search" name="keyword" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->


<!--Scroll to top-->
<div class="back-to-top scroll-to-target show-back-to-top" data-target="html">TOP</div>

<script src="{{asset('assets_front/js/jquery.js')}}"></script>

<script src="{{asset('assets_front/js/popper.min.js')}}"></script>
<script src="{{asset('assets_front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets_front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets_front/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets_front/js/appear.js')}}"></script>
<script src="{{asset('assets_front/js/nav-tool.js')}}"></script>
<script src="{{asset('assets_front/js/owl.js')}}"></script>
<script src="{{asset('assets_front/js/wow.js')}}"></script>
<script src="{{asset('assets_front/js/script.js')}}"></script>
<script src="{{asset('assets_front/js/color-settings.js')}}"></script>
<script src="{{asset('assets_front/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets_front/js/tilt.jquery.min.js')}}"></script>
<script src="{{asset('assets_front/js/mixitup.js')}}"></script>
<script src="{{asset('assets_front/js/map-script.js')}}"></script>

</body>
</html>
