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

	<!-- About Section -->
	{{-- <section class="about-section">
		<div class="auto-container">
			<div class="inner-container" style="background-image:url(images/background/pattern-1.png)">
				<div class="row clearfix">
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<div class="title"><span class="separator"></span>About Us</div>
								<h2>A modern construction <br> & industrial agency</h2>
							</div>
							<div class="text">
								<p>Manufactoriuring industry became a key sector of production and labour and North American countries during the Industrial Revolution, upsetting industry sector ecoan to me.</p>
								<p>mercantile and feudal ecoan countries during the Industrial Revolution, mercantile and feudal economies.</p>
							</div>
							<div class="clearfix">
								<div class="pull-left">
									<a class="btn-style-four theme-btn" href="about.html"><span class="txt">Read More</span></a>
								</div>
								<div class="pull-left">
									<div class="signature">
										<img src="images/icons/signature.png" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image">
								<img src="images/resource/about.jpg" alt="" />
								<!-- Experiance Box -->
								<div class="experiance-box">
									<div class="box-inner">
										<div class="count-outer count-box">
											<span class="count-text" data-speed="3500" data-stop="25">0</span>+
										</div>
										<h6>Year OF <br> Experience</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End About Section -->

	{{-- <!-- Services Section -->
	<section class="services-section">
		<div class="side-image">
			<img src="images/resource/service-image.png" alt="" />
		</div>
		<div class="auto-container">
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title"><span class="separator"></span>Our Services</div>
						<h2>Construction solutions <br> for residentials & industries!</h2>
					</div>
					<div class="pull-right">
						<div class="text">Construction is a general term meaning the art and science <br> to form objects systems organizations.</div>
					</div>
				</div>
			</div>
			<div class="services-carousel owl-carousel owl-theme">

				<!-- Service Block -->
				<div class="service-block">
					<div class="inner-box">
						<div class="pattern-layer" style="background-image:url(images/background/service-bg.png)"></div>
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-excavator"></span>
							</div>
							<h4><a href="general-contracting.html">Expert <br> Mechanical</a></h4>
							<div class="text">We will work with you to make small or large changes so you get the house of your dreams</div>
						</div>
						<a class="read-more" href="general-contracting.html">Read More</a>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block">
					<div class="inner-box">
						<div class="pattern-layer" style="background-image:url(images/background/service-bg.png)"></div>
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-building"></span>
							</div>
							<h4><a href="general-contracting.html">Apartment <br> Design</a></h4>
							<div class="text">We will work with you to make small or large changes so you get the house of your dreams</div>
						</div>
						<a class="read-more" href="general-contracting.html">Read More</a>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block">
					<div class="inner-box">
						<div class="pattern-layer" style="background-image:url(images/background/service-bg.png)"></div>
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-welding"></span>
							</div>
							<h4><a href="general-contracting.html">Repair <br> Welding</a></h4>
							<div class="text">We will work with you to make small or large changes so you get the house of your dreams</div>
						</div>
						<a class="read-more" href="general-contracting.html">Read More</a>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block">
					<div class="inner-box">
						<div class="pattern-layer" style="background-image:url(images/background/service-bg.png)"></div>
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-excavator"></span>
							</div>
							<h4><a href="general-contracting.html">Expert <br> Mechanical</a></h4>
							<div class="text">We will work with you to make small or large changes so you get the house of your dreams</div>
						</div>
						<a class="read-more" href="general-contracting.html">Read More</a>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block">
					<div class="inner-box">
						<div class="pattern-layer" style="background-image:url(images/background/service-bg.png)"></div>
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-building"></span>
							</div>
							<h4><a href="general-contracting.html">Apartment <br> Design</a></h4>
							<div class="text">We will work with you to make small or large changes so you get the house of your dreams</div>
						</div>
						<a class="read-more" href="general-contracting.html">Read More</a>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block">
					<div class="inner-box">
						<div class="pattern-layer" style="background-image:url(images/background/service-bg.png)"></div>
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-welding"></span>
							</div>
							<h4><a href="general-contracting.html">Repair <br> Welding</a></h4>
							<div class="text">We will work with you to make small or large changes so you get the house of your dreams</div>
						</div>
						<a class="read-more" href="general-contracting.html">Read More</a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Services Section -->

	<!-- Counter Section -->
	<section class="counter-section" style="background-image:url(images/background/1.jpg)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="title"><span class="separator"></span>Counter<span class="separator-two"></span></div>
				<h2>What we have achive</h2>
			</div>

			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">

					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-planet-earth-1"></div>
								<div class="counter-title">Satisfied Clients</div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3500" data-stop="4390">0</span>+
								</div>
							</div>
						</div>
					</div>

					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-project-management"></div>
								<div class="counter-title">Active projects</div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="2390">0</span>+
								</div>
							</div>
						</div>
					</div>

					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-trophy-2"></div>
								<div class="counter-title">Awards Winner</div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="28000">0</span>+
								</div>
							</div>
						</div>
					</div>

					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-engineer"></div>
								<div class="counter-title">Engineer Members</div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3500" data-stop="3390">0</span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!-- End Counter Section -->

	<!-- Skill Section -->
	<section class="skill-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">

					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image">
								<div class="pattern-layer" style="background-image:url(images/background/pattern-2.png)"></div>
								<img src="images/resource/skill.jpg" alt="" />
								<div class="text">201 Awards winning constraction</div>
							</div>
						</div>
					</div>

					<!-- Skill Column -->
					<div class="skill-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<div class="title"><span class="separator"></span>Our Skills View</div>
								<h2>We are giving you a chance to build your dream</h2>
								<div class="text">At vero eos et accusamus et iusto odio digni goikussimos ducioip mus qui blanditiis praese. Ntium voluum deleniti atque corrupti to quosto rica.</div>
							</div>

							<!-- Skills -->
							<div class="skills">

								<!-- Skill Item -->
								<div class="skill-item">
									<div class="skill-header clearfix">
										<div class="skill-title">Engineering</div>
										<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="70">0</span>%</div></div>
									</div>
									<div class="skill-bar">
										<div class="bar-inner"><div class="bar progress-line" data-width="70"></div></div>
									</div>
								</div>

								<!-- Skill Item -->
								<div class="skill-item">
									<div class="skill-header clearfix">
										<div class="skill-title">Architecture</div>
										<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span>%</div></div>
									</div>
									<div class="skill-bar">
										<div class="bar-inner"><div class="bar progress-line" data-width="80"></div></div>
									</div>
								</div>

								<!-- Skill Item -->
								<div class="skill-item">
									<div class="skill-header clearfix">
										<div class="skill-title">Construction</div>
										<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="75">0</span>%</div></div>
									</div>
									<div class="skill-bar">
										<div class="bar-inner"><div class="bar progress-line" data-width="75"></div></div>
									</div>
								</div>

							</div>

							<div class="btn-box">
								<a href="about.html" class="theme-btn btn-style-one"><span class="txt">About Us</span></a>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section> --}}
	<!-- End Skill Section -->

	{{-- <!-- Project Section -->
	<section class="project-section">
		<div class="side-image">
			<img src="images/resource/project.png" alt="" />
		</div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title"><span class="separator"></span>Our Project<span class="separator-two"></span></div>
				<h2>Transforming the ideas & <br> visions for industries!</h2>
			</div>
			<!-- MixitUp Galery -->
            <div class="mixitup-gallery">

                <!-- Filter -->
                <div class="filters clearfix">

                	<ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter="all">ALL PROJECTS</li>
                        <li class="filter" data-role="button" data-filter=".architecture">ARCHITECTURE</li>
                        <li class="filter" data-role="button" data-filter=".building">BUILDING</li>
                        <li class="filter" data-role="button" data-filter=".construction">CONSTRUCTION</li>
                        <li class="filter" data-role="button" data-filter=".industrial">INDUSTRIAL</li>
                    </ul>

                </div>

                <div class="filter-list row clearfix">

					<!-- Gallery Block -->
					<div class="gallery-block all mix industrial building construction col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/1.jpg" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/1.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
											<a href="portfolio-detail.html" class="icon flaticon-link"></a>
										</div>
									</div>
								</div>
							</figure>
							<div class="lower-content">
								<div class="title">ARCHITECTURE</div>
								<h5><a href="portfolio-detail.html">The Burj Khalifa</a></h5>
							</div>
						</div>
					</div>

					<!-- Gallery Block -->
					<div class="gallery-block all mix construction col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/2.jpg" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/2.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
											<a href="portfolio-detail.html" class="icon flaticon-link"></a>
										</div>
									</div>
								</div>
							</figure>
							<div class="lower-content">
								<div class="title">CONSTRUCTION</div>
								<h5><a href="portfolio-detail.html">Federation Tower</a></h5>
							</div>
						</div>
					</div>

					<!-- Gallery Block -->
					<div class="gallery-block all mix industrial architecture col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/3.jpg" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/3.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
											<a href="portfolio-detail.html" class="icon flaticon-link"></a>
										</div>
									</div>
								</div>
							</figure>
							<div class="lower-content">
								<div class="title">Building</div>
								<h5><a href="portfolio-detail.html">Shun Hing Square</a></h5>
							</div>
						</div>
					</div>

					<!-- Gallery Block -->
					<div class="gallery-block all mix architecture construction industrial col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/4.jpg" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/4.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
											<a href="portfolio-detail.html" class="icon flaticon-link"></a>
										</div>
									</div>
								</div>
							</figure>
							<div class="lower-content">
								<div class="title">ARCHITECTURE</div>
								<h5><a href="portfolio-detail.html">indus tower</a></h5>
							</div>
						</div>
					</div>

					<!-- Gallery Block -->
					<div class="gallery-block all mix building col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/5.jpg" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/5.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
											<a href="portfolio-detail.html" class="icon flaticon-link"></a>
										</div>
									</div>
								</div>
							</figure>
							<div class="lower-content">
								<div class="title">CONSTRUCTION</div>
								<h5><a href="portfolio-detail.html">Vigamont Tower</a></h5>
							</div>
						</div>
					</div>

					<!-- Gallery Block -->
					<div class="gallery-block all mix architecture col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/6.jpg" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="images/gallery/6.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
											<a href="portfolio-detail.html" class="icon flaticon-link"></a>
										</div>
									</div>
								</div>
							</figure>
							<div class="lower-content">
								<div class="title">Building</div>
								<h5><a href="portfolio-detail.html">Moll Royal cage</a></h5>
							</div>
						</div>
					</div>

				</div>

				<div class="btn-box text-center">
					<a href="contact.html" class="theme-btn btn-style-four"><span class="txt">View All Project</span></a>
				</div>

			</div>
		</div>
	</section>
	<!-- End Project Section -->

	<!-- CTA Section -->
	<section class="cta-section" style="background-image:url(images/background/1.jpg)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="title-box">
				<h2>We Provide High Perfomance Innovate <br> Machines Profitable Solutions</h2>
			</div>
			<ul class="cta-list">
				<li>Technologies</li>
				<li>Industries</li>
				<li>Factory</li>
			</ul>
			<div class="btn-box text-center">
				<a class="btn-style-five theme-btn" href="about.html"><span class="txt">Read More</span></a>
				<a class="btn-style-six theme-btn" href="contact.html"><span class="txt">Contact Now</span></a>
			</div>
		</div>
	</section> --}}
	<!-- End CTA Section -->

	<!-- Testimonial Section -->
	{{-- <section class="testimonial-section" style="background-image:url(images/background/pattern-3.png)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="title"><span class="separator"></span>Testimoniala</div>
				<h2>See what clients say <br> about us</h2>
			</div>
			<div class="testimonial-carousel owl-carousel owl-theme">

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote-icon flaticon-quote-2"></div>
						<div class="author-image-outer">
							<div class="author-image">
								<img src="images/resource/author-1.jpg" alt="" />
							</div>
							<h6>Raymon Myers</h6>
							<div class="designation">CEO At Laboratory</div>
						</div>
						<div class="rating">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
						<div class="text">Don’t buy this theme, you won’t be able to resist its charm. Right, like you’re charmed. A theme that is truly multipurpose and flexible.</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote-icon flaticon-quote-2"></div>
						<div class="author-image-outer">
							<div class="author-image">
								<img src="images/resource/author-2.jpg" alt="" />
							</div>
							<h6>Smith Makern </h6>
							<div class="designation">CEO At Laboratory</div>
						</div>
						<div class="rating">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
						<div class="text">Don’t buy this theme, you won’t be able to resist its charm. Right, like you’re charmed. A theme that is truly multipurpose and flexible.</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote-icon flaticon-quote-2"></div>
						<div class="author-image-outer">
							<div class="author-image">
								<img src="images/resource/author-1.jpg" alt="" />
							</div>
							<h6>Raymon Myers</h6>
							<div class="designation">CEO At Laboratory</div>
						</div>
						<div class="rating">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
						<div class="text">Don’t buy this theme, you won’t be able to resist its charm. Right, like you’re charmed. A theme that is truly multipurpose and flexible.</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote-icon flaticon-quote-2"></div>
						<div class="author-image-outer">
							<div class="author-image">
								<img src="images/resource/author-2.jpg" alt="" />
							</div>
							<h6>Smith Makern </h6>
							<div class="designation">CEO At Laboratory</div>
						</div>
						<div class="rating">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
						<div class="text">Don’t buy this theme, you won’t be able to resist its charm. Right, like you’re charmed. A theme that is truly multipurpose and flexible.</div>
					</div>
				</div>

			</div>
		</div>
	</section> --}}
	<!-- End Testimonial Section -->

	{{-- <!-- Team Section -->
	<section class="team-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title"><span class="separator"></span>Our Expert<span class="separator-two"></span></div>
				<h2>Working with excellent <br> our great team</h2>
			</div>
			<div class="row clearfix">

				<!-- Team Block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="pattern-layer" style="background-image:url(images/background/pattern-4.jpg)"></div>
						<div class="image">
							<a href="team-detail.html"><img src="images/resource/team-1.jpg" /></a>
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
								<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
								<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
								<li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
								<li><a href="https://www.youtube.com/" class="fa fa-youtube-play"></a></li>
							</ul>
						</div>
						<div class="lower-content">
							<h4><a href="team-detail.html">Jhon Castellon</a></h4>
							<div class="designation">Builder Advisor</div>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="pattern-layer" style="background-image:url(images/background/pattern-4.jpg)"></div>
						<div class="image">
							<a href="team-detail.html"><img src="images/resource/team-2.jpg" /></a>
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
								<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
								<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
								<li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
								<li><a href="https://www.youtube.com/" class="fa fa-youtube-play"></a></li>
							</ul>
						</div>
						<div class="lower-content">
							<h4><a href="team-detail.html">Nelson Mecoy</a></h4>
							<div class="designation">Architecture</div>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="pattern-layer" style="background-image:url(images/background/pattern-4.jpg)"></div>
						<div class="image">
							<a href="team-detail.html"><img src="images/resource/team-3.jpg" /></a>
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
								<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
								<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
								<li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
								<li><a href="https://www.youtube.com/" class="fa fa-youtube-play"></a></li>
							</ul>
						</div>
						<div class="lower-content">
							<h4><a href="team-detail.html">Celsiya Malcom</a></h4>
							<div class="designation">Marketing Adcisor</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section> --}}
	<!-- End Team Section -->

	<!-- News Section -->
	{{-- <section class="news-section" style="background-image:url(images/background/pattern-5.png)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title"><span class="separator"></span>Our Latest News<span class="separator-two"></span></div>
				<h2>You check our latest update <br> with news and artical</h2>
			</div>
			<div class="row clearfix">

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="news-detail.html"><img src="images/resource/news-1.jpg" /></a>
							<div class="post-date">12 <br><span>Oct/21</span></div>
						</div>
						<div class="lower-content">
							<ul class="post-info">
								<li>BY ADMIN</li>
								<li>0 COMMENTS</li>
							</ul>
							<h4><a href="news-detail.html">High quality work for our customer demond.</a></h4>
							<div class="text">For each project we establish relationships with partners who we know will...</div>
							<a class="read-more" href="news-detail.html">Read More</a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="news-detail.html"><img src="images/resource/news-2.jpg" /></a>
							<div class="post-date">25 <br><span>Sep/21</span></div>
						</div>
						<div class="lower-content">
							<ul class="post-info">
								<li>BY ADMIN</li>
								<li>0 COMMENTS</li>
							</ul>
							<h4><a href="news-detail.html">Industrial and business global company Meeting</a></h4>
							<div class="text">For each project we establish relationships with partners who we know will...</div>
							<a class="read-more" href="news-detail.html">Read More</a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="news-detail.html"><img src="images/resource/news-3.jpg" /></a>
							<div class="post-date">05 <br><span>Aug/21</span></div>
						</div>
						<div class="lower-content">
							<ul class="post-info">
								<li>BY ADMIN</li>
								<li>0 COMMENTS</li>
							</ul>
							<h4><a href="news-detail.html">High quality work for our customer demond.</a></h4>
							<div class="text">For each project we establish relationships with partners who we know will...</div>
							<a class="read-more" href="news-detail.html">Read More</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section> --}}
	<!-- End News Section -->

	<!-- Clients Section -->
    {{-- <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!-- Sponsors Carousel -->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                </ul>
            </div>

        </div>
    </section> --}}
    <!-- End Clients Section -->

	<!-- Newsletter Section -->
	{{-- <section class="newsletter-section">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Logo Column -->
				<div class="logo-column col-lg-3 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="logo">
							<a href="index.html"><img src="images/newsletter-logo.png" alt="" /></a>
						</div>
					</div>
				</div>
				<!-- Form Column -->
				<div class="form-column col-lg-9 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="content">
							<div class="title-box">
								<div class="box-inner">
									<span class="icon flaticon-message-1"></span>
									Subscribe To <br> Our Newsletter
								</div>
							</div>

							<div class="newsletter-form">
								<form method="post" action="contact.html">
									<div class="form-group">
										<input type="email" name="email" value="" placeholder="Enter Your Email" required="">
										<button type="submit" class="theme-btn submit-btn"><span class="txt">Submit Now</span></button>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End Newsletter Section -->

	@include('frontend.partials.footer')


</div>
<!--End pagewrapper-->

<!-- Header Search -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-multiply"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Color Palate / Color Switcher -->
{{-- <div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Layout</h6>
    </div>

	<div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate red-color" data-theme-file="css/color-themes/red-color.css"></span>
        </div>
    </div>

	<h6>RTL Version</h6>
	<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>
	<h6>Boxed Version</h6>
	<ul class="box-version option-box"> <li class="box">Boxed</li> <li>Full width</li></ul>
	<h6>Want Sticky Header</h6>
	<ul class="header-version option-box"> <li class="box">No</li> <li>Yes</li></ul>
    <h6>Dark Verion</h6>
	<ul class="dark-version option-box"> <li class="box">Yes</li> <li>No</li></ul>

</div> --}}

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
