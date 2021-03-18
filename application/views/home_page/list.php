<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="theme-color" content="#3ed2a7">
    <meta name="description" content="Ansell Business Intelligence">
    <base href="<?php echo base_url(); ?>">
	
	<link rel="shortcut icon" href="assets/web/assets/icon.png" />
	
	<title>ABI - Ansell Business Intelligence</title>
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	
	<link rel="stylesheet" href="assets/web/assets/vendors/liquid-icon/liquid-icon.min.css" />
	<link rel="stylesheet" href="assets/web/assets/vendors/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/web/assets/css/theme-vendors.min.css" />
	<link rel="stylesheet" href="assets/web/assets/css/theme.min.css" />
	<link rel="stylesheet" href="assets/web/assets/css/themes/virtus-3.css" />
	<link rel="stylesheet" href="assets/sweetalert/dist/sweetalert2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/web/assets/vendors/revolution/css/settings.css">
	<style>
	:root{
		--color-primary: #9b0f10cc !important;
		--color-gradient-start: #9b0f10cc !important;
		--color-gradient-stop: #9b0f10cc !important;
		--color-link:#af3f3f !important;
		--color-link-hover: red !important;
		}
	.main-nav > li.is-active > a{color: #b54e4e !important;}
	.main-nav > li > a .link-ext{background: #b54e4e !important;}
	.main-nav > li:hover > a, .main-nav > li > a:hover{color: #b54e4e !important;}

	.textname{color:#fff;font-weight:400;font-family: 'Roboto', sans-serif;}
	.swal2-popup {
		font-size: 0.8rem !important;
	}
	#slide-9-layer-9{font-size: 24px !important;}
	</style>
	<!-- Head Libs -->
	<script async src="assets/web/assets/vendors/modernizr.min.js"></script>
	
</head>
<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="classic" data-mobile-nav-shceme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199">
	
	<div id="wrap">
		
		<header class="main-header main-header-overlay bb-fade-black-005" data-sticky-header="true">
			
			<div class="mainbar-wrap">
				<div class="megamenu-hover-bg"></div><!-- /.megamenu-hover-bg -->
				<div class="container-fluid mainbar-container">
					<div class="mainbar">
						<div class="row mainbar-row align-items-lg-stretch px-4">
							
							<div class="col pr-5">
								<div class="navbar-header">
									<a class="navbar-brand pt-10 pb-10" href="" rel="home">
										<span class="navbar-brand-inner">
											<img class="logo-sticky" src="assets/web/assets/logo-webk.png" alt="Ansell Business Intelligence" style="width: 150px">
											<img class="mobile-logo-default" src="assets/web/assets/logo-webk.png" alt="Ansell Business Intelligence" style="width: 150px">
											<img class="logo-default" src="assets/web/assets/logo-webk.png" alt="Ansell Business Intelligence" style="width: 150px">
										</span>
									</a>
									<button type="button" class="navbar-toggle collapsed nav-trigger style-mobile" data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false" data-changeclassnames='{ "html": "mobile-nav-activated overflow-hidden" }'>
										<span class="sr-only">Toggle navigation</span>
										<span class="bars">
											<span class="bar"></span>
											<span class="bar"></span>
											<span class="bar"></span>
										</span>
									</button>
								</div><!-- /.navbar-header -->
							</div><!-- /.col -->
							
							<div class="col">
								
								<div class="collapse navbar-collapse" id="main-header-collapse">
									
									<ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-center main-nav-hover-underline-1" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }' data-localscroll="true">
										
										<li class="is-active">
											<a href="#content">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Home</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#features">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Highlight</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#services">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Our Features </span>
												</span>
											</a>
										</li>
										<li>
											<a href="#contact">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Demo</span>
												</span>
											</a>
										</li>
										<li>
											<a href="https://anselljaya.com">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">About Us</span>
												</span>
											</a>
										</li>
									
									</ul><!-- /#primary-nav  -->
								
								</div><!-- /#main-header-collapse -->
								
							</div><!-- /.col -->
						
							<div class="col text-right">

								<div class="header-module">
									<a href="http://bi.anselljaya.com" class="btn btn-solid text-uppercase circle btn-bordered border-thick font-size-12 lh-15 font-weight-bold ltr-sp-2 px-2">
										<span>
											<span class="btn-txt">Login</span>
										</span>
									</a>
								</div><!-- /.header-module -->
								
							</div><!-- /.col -->
						
						</div><!-- /.mainbar-row -->
					</div><!-- /.mainbar -->
				</div><!-- /.mainbar-container -->
			</div><!-- /.mainbar-wrap -->
			
		</header><!-- /.main-header -->

		<main id="content" class="content">

			<section class="vc_row fullheight">

				<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="virtus3"
					data-source="gallery" style="background:transparent;padding:0px;">
					<!-- START REVOLUTION SLIDER 5.4.8.3 fullscreen mode -->
					<div id="rev_slider_3_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.3">
						<ul>
							<!-- SLIDE  -->
							<li data-index="rs-9" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
								data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
								data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
								data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
								data-description="">
								<!-- MAIN IMAGE -->
								<img src="assets/web/assets/banner.png" data-bgcolor='#f6f6f6' style='background:#f6f6f6'
									alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off"
									class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
								<div class="tp-caption   tp-resizeme rs-parallaxlevel-8" id="slide-9-layer-1"
									data-x="['left','left','left','left']" data-hoffset="['-150','-150','-190','-190']"
									data-y="['middle','middle','middle','middle']" data-voffset="['0','0','60','100']" data-width="none"
									data-height="none" data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="image"
									data-basealign="slide" data-responsive_offset="on"
									data-frames='[{"delay":700,"speed":800,"frame":"0","from":"x:-100px;rZ:15deg;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
									style="z-index: 5;"><img src="assets/web/assets/banner3.png" alt=""
										data-ww="['290px','290px','290px','290px']" data-hh="['328px','328px','328px','328px']" width="700"
										height="704" data-no-retina> </div>

								<!-- LAYER NR. 2 -->

								<!-- LAYER NR. 3 -->

								<!-- LAYER NR. 4 -->
								<div class="tp-caption   tp-resizeme rs-parallaxlevel-6" id="slide-9-layer-4"
									data-x="['left','left','left','left']" data-hoffset="['210','210','210','210']"
									data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-70','-70','-20','-70']" data-width="none"
									data-height="none" data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="image"
									data-basealign="slide" data-responsive_offset="on"
									data-frames='[{"delay":1200,"speed":800,"frame":"0","from":"y:100px;rZ:15deg;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
									style="z-index: 8;"><img src="assets/web/assets/banner4.png" alt=""
										data-ww="['150px','150px','150px','150px']" data-hh="['226px','226px','226px','226px']" width="362"
										height="590" data-no-retina> </div>

								<!-- LAYER NR. 5 -->
								<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-9-layer-5"
									data-x="['left','left','left','left']" data-hoffset="['130','130','130','130']"
									data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-90','-90','-50','-90']" data-width="none"
									data-height="none" data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="image"
									data-basealign="slide" data-responsive_offset="on"
									data-frames='[{"delay":1100,"speed":800,"frame":"0","from":"y:100px;rZ:15deg;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
									style="z-index: 9;"><img src="assets/web/assets/banner4.png" alt=""
										data-ww="['150px','150px','150px','150px']" data-hh="['226px','226px','226px','226px']" width="600"
										height="910" data-no-retina> </div>

								<!-- LAYER NR. 6 -->
								<div class="tp-caption   tp-resizeme rs-parallaxlevel-15" id="slide-9-layer-6"
									data-x="['center','center','center','center']" data-hoffset="['30','30','150','30']"
									data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-260','-260','-220','-260']"
									data-width="none" data-height="none" data-whitespace="nowrap" data-visibility="['on','on','on','off']"
									data-type="image" data-basealign="slide" data-responsive_offset="on"
									data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"y:100px;rZ:-30deg;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
									style="z-index: 10;"><img src="assets/web/assets/banner2.png" alt=""
										data-ww="['500px','500px','500px','500px']" data-hh="['450px','450px','450px','450px']" width="1088"
										height="1354" data-no-retina> </div>

								<!-- LAYER NR. 7 -->

								<!-- LAYER NR. 8 -->
								<div class="tp-caption   tp-resizeme" id="slide-9-layer-8" data-x="['left','left','left','left']"
									data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
									data-voffset="['242','242','242','192']" data-fontsize="['72','72','72','52']"
									data-lineheight="['86','86','86','60']" data-width="none" data-height="none" data-whitespace="nowrap"
									data-type="text" data-responsive_offset="on"
									data-frames='[{"delay":0,"split":"lines","splitdelay":0.1,"speed":800,"split_direction":"forward","frame":"0","from":"y:80px;opacity:0;","to":"o:1;","ease":"Quint.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
									style="z-index: 12; white-space: nowrap; font-size: 72px; line-height: 86px; font-weight: bold; color: #242a3b; letter-spacing: 0px;font-family:Roboto;">
									Ansell <br>Business Intelegence. </div>

								<!-- LAYER NR. 9 -->
								<div class="tp-caption   tp-resizeme" id="slide-9-layer-9" data-x="['left','left','left','left']"
									data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
									data-voffset="['448','448','448','328']" data-fontsize="['18','18','18','17']"
									data-width="['582','582','582','462']" data-height="['none','none','none','58']" data-whitespace="nowrap"
									data-type="text" data-responsive_offset="on"
									data-frames='[{"delay":500,"split":"lines","splitdelay":0.1,"speed":600,"split_direction":"forward","frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
									style="z-index: 13; min-width: 582px; max-width: 582px; white-space: nowrap; font-size: 24px; line-height: 28px; font-weight: 400; color: rgba(0,0,0,0.7); letter-spacing: 0px;font-family:Roboto;">
									"We are best partner for your better farming smarter" </div>

								<!-- LAYER NR. 10 -->
							</li>
						</ul>
						<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
					</div>
				</div><!-- END REVOLUTION SLIDER -->

			</section>
			<section id="features" class="vc_row pt-20 pb-60">
				<div class="container">
					<div class="row">

						<div class="lqd-column col-md-12">

							<header class="fancy-title text-center">
								<h6 class="mb-4 font-size-12 font-weight-bold ltr-sp-1 text-primary text-uppercase"> </h6>
								<h2>What is Ansell BI ?</h2>
							</header>

						</div><!-- /.lqd-column col-md-6 col-md-offset-3 -->

						<div class="lqd-column col-md-12 mb-60">
						<div class="row d-flex flex-wrap align-items-center">
							<div class="lqd-column col-md-6">
							<div class="liquid-img-group-container mb-md-0">
							<div class="liquid-img-group-inner">
							<div class="liquid-img-group-single is-in-view" data-shadow-style="4" data-roundness="4" data-inview="true" data-animate-shadow="true">
							<div class="liquid-img-group-img-container">
							<div class="liquid-img-group-content content-floated-mid">
							<a href="https://www.youtube.com/watch?v=LjaKHqDbzSA" class="btn btn-naked fresco btn-icon-block btn-icon-top btn-icon-xxlg btn-icon-circle btn-icon-solid btn-icon-ripple">
							<span>
							<span class="btn-icon font-size-18 bg-white text-dark">
							<i class="fa fa-play"></i>
							</span>
							</span>
							</a>
							</div>
							<div class="liquid-img-container-inner">
							<figure>
							<img src="assets/web/assets/operational-bi.png" alt="Setup Ave">
							</figure>
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>
							<div class="lqd-column col-md-6 pl-md-6 pr-md-7">
							<header class="fancy-title mb-35">
							<p>Ansell Business Intelligence is the virtual platform that helps the World's farmers monitoring their farms produce information can be found with the best user experience, even controlling their farms from long distance.</p>
							</header>
							</div>
							</div>
						</div>

						<div class="lqd-column col-md-3 col-sm-6 mb-30">

							<div class="iconbox iconbox-side iconbox-circle iconbox-sm">
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<span class="iconbox-icon-hover-bg bg-dark"></span>
										<i class="icon-ion-ios-paper"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<div class="contents">
									<h3 class="font-size-15 font-weight-semibold">HISTORY SAVED</h3>
									<p>Report history safely saved and create your awesome business reports</p>
								</div><!-- /.contents -->
							</div><!-- /.iconbox -->

						</div><!-- /.lqd-column col-md-4 col-sm-6 -->

						<div class="lqd-column col-md-3 col-sm-6 mb-30">

							<div class="iconbox iconbox-side iconbox-circle iconbox-sm">
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<span class="iconbox-icon-hover-bg bg-dark"></span>
										<i class="icon-ion-ios-happy"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<div class="contents">
									<h3 class="font-size-15 font-weight-semibold">USER FRIENDLY</h3>
									<p>Easy to use for manage your farm</p>
								</div><!-- /.contents -->
							</div><!-- /.iconbox -->

						</div><!-- /.lqd-column col-md-4 col-sm-6 -->

						<div class="lqd-column col-md-3 col-sm-6 mb-30">

							<div class="iconbox iconbox-side iconbox-circle iconbox-sm">
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<span class="iconbox-icon-hover-bg bg-dark"></span>
										<i class="icon-ion-ios-git-compare"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<div class="contents">
									<h3 class="font-size-15 font-weight-semibold">REALTIME</h3>
									<p>ABI's Dashboards provide data in real-time,  so your data is never stale. </p>
								</div><!-- /.contents -->
							</div><!-- /.iconbox -->

						</div><!-- /.lqd-column col-md-4 col-sm-6 -->

						<div class="lqd-column col-md-3 col-sm-6 mb-30">

							<div class="iconbox iconbox-side iconbox-circle iconbox-sm">
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<span class="iconbox-icon-hover-bg bg-dark"></span>
										<i class="icon-ion-ios-globe"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<div class="contents">
									<h3 class="font-size-15 font-weight-semibold">CLOUD SYSTEM</h3>
									<p>Using cloud technology, which can be accessed securely from any device.</p>
								</div><!-- /.contents -->
							</div><!-- /.iconbox -->

						</div><!-- /.lqd-column col-md-4 col-sm-6 -->

					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>

			<section id="services" class="vc_row bg-cover bg-center-bottom" style="background-image: url(assets/web/assets/demo/bg/bg-71.jpg);">
				<div class="container">
					<div class="row d-flex flex-wrap align-items-end">

						<div class="lqd-column col-md-7 pl-md-6 pt-30 pb-100">

							<header class="fancy-title mb-7 pr-md-9 mr-md-5">
								<h2><img src="assets/web/assets/whatsapp.png" alt="whatsapp icon" style="width:100px;">Whatsapp Bot</h2>
								<p>Integrated with WhatsApp Application easy to use and Accessible to All Users Automatically give you the simply data from your farm </p>
							</header>

						</div><!-- /.lqd-column col-md-7 -->

						<div class="lqd-column col-md-5 pt-100">

							<div
								class="liquid-img-group-container mb-0"
								data-parallax="true"
								data-parallax-from='{"translateX":-240}'
								data-parallax-to='{"translateX":-60}'
								data-parallax-options='{"overflowHidden":false,"easing":"linear"}'>
								<div class="liquid-img-group-inner">
									<div class="liquid-img-group-single">
										<div class="liquid-img-group-img-container">
											<div class="liquid-img-container-inner">
												<figure>
													<img src="assets/web/assets/hand-1.png" alt="Ultimate Design" style="width: 100%" />
												</figure>
											</div><!-- /.liquid-img-container-inner -->
										</div><!-- /.liquid-img-group-img-container -->
									</div><!-- /.liquid-img-group-single -->
								</div><!-- /.liquid-img-group-inner -->
							</div><!-- /.liquid-img-group-container -->

						</div><!-- /.lqd-column col-md-5 -->

					</div><!-- /.row -->
				</div><!-- /.container -->
			</section> 

			<section class="vc_row pt-50 bb-fade-black-005">

				<div class="container">
					<div class="row d-flex flex-wrap align-items-center">
						
						<div class="lqd-column col-md-6 mb-4 mb-md-0">

							<figure>
								<img src="assets/web/assets/im.png" alt="mobile" style="width:450px;">
							</figure>

						</div><!-- /.col-md-6 -->

						<div class="lqd-column col-md-6 pl-md-6 pr-md-7">

							<header class="fancy-title mb-35">
								<h2 class="mt-0 mb-4 pr-md-5">Mobile Device Compatibility</h2>
								<p>Our technology provides Mobile device application for Remote control and monitoring all your farms from anywhere.  Allowing farmers to act quickly upon any anomaly/ alarm detection.</p>
							</header>

						</div><!-- /.col-md-6 -->

					</div><!-- /.row -->
				</div><!-- /.container -->

			</section>

			<section class="vc_row pt-100 pb-100">
				<div class="container">
					<div class="row">

						<div class="lqd-column col-md-6">

							<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-icon-linked iconbox-heading-xs mb-50">
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<span class="iconbox-icon-hover-bg bg-dark"></span>
										<i class="icon-ion-ios-git-branch"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<div class="contents">
									<h3 class="font-weight-semibold">Integrations</h3>
									<p>Our technology gathered all data on several farms into dashboard which can be integrated with  easy to use applications and give you every important detail in the poultry life cycle by seamlessly</p>
								</div><!-- /.contents -->
							</div><!-- /.iconbox -->

							<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-icon-linked iconbox-heading-xs mb-50">
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<span class="iconbox-icon-hover-bg bg-dark"></span>
										<i class="icon-ion-ios-pulse"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<div class="contents">
									<h3 class="font-weight-semibold">Graphic View</h3>
									<p>All gathered data in several farms is displayed on graphic where users can easier analyze  with more detailed reports.</p>
								</div><!-- /.contents -->
							</div><!-- /.iconbox -->

							<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-icon-linked iconbox-heading-xs mb-50">
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<span class="iconbox-icon-hover-bg bg-dark"></span>
										<i class="icon-ion-ios-cash"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<div class="contents">
									<h3 class="font-weight-semibold">Efficiency</h3>
									<p>Dashboards are used to display the most important and useful information from all your farms so that it helps manage your farms to be more efficient both of money and time</p>
								</div><!-- /.contents -->
							</div><!-- /.iconbox -->

						</div><!-- /.lqd-column col-md-6 -->
						
						<div class="lqd-column col-md-6 text-md-right">

							<figure>
								<img src="assets/web/assets/ipad.png" alt="iPad">
							</figure>

						</div><!-- /.lqd-column col-md-6 -->

					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			<section class="vc_row pt-100 pb-100 bb-fade-black-005">

				<div class="container">
					<div class="row d-flex flex-wrap align-items-center">
						
						<div class="lqd-column col-md-6 mb-4 mb-md-0">

							<figure>
								<img src="assets/web/assets/macbook.jpg" alt="Macbook">
							</figure>

						</div><!-- /.col-md-6 -->

						<div class="lqd-column col-md-6 pl-md-6 pr-md-7">

							<header class="fancy-title mb-35">
								<h2 class="mt-0 mb-4 pr-md-5">Export file for report</h2>
								<p>Integrated with your favorite Applications to make your awesome reports, using PDF application you can analyze or present your reports more easily</p>
							</header>

						</div><!-- /.col-md-6 -->

					</div><!-- /.row -->
				</div><!-- /.container -->

			</section>
			<section id="contact" class="vc_row pt-70 pb-70 bg-cover bg-fixed fullheight d-flex flex-wrap align-items-center" style="background-image: url(assets/web/assets/demo.jpg);">

				<div class="liquid-row-overlay bg-gradient-black-transparent-lr"></div>

				<div class="container">
					<div class="row d-flex flex-wrap align-items-center">

						<div class="lqd-column col-lg-5 col-md-6 col-xs-12">

							<header class="fancy-title mb-70">
								<h2 class="text-white font-size-44">For a demo program, please fill in this form first.</h2>
							</header>

							<div class="contact-form contact-form-inputs-filled contact-form-button-block font-size-14">
									<div class="row" id="senddemo">
									<div class="col-md-12">
											<span class="textname">Name  </span>
											<input class="bg-white text-dark" type="text" name="nama" aria-required="true" aria-invalid="false" placeholder="Your Name" style="background: #fffc !important;">
										</div><!-- /.col-md-12 -->
										<div class="col-md-12">
											<span class="textname">Company  </span>
											<input class="bg-white text-dark" type="text" name="company" aria-required="true" aria-invalid="false" placeholder="Your Company" style="background: #fffc !important;">
										</div><!-- /.col-md-12 -->
										<div class="col-md-12">
											<span class="textname">Email  </span>
											<input class="bg-white text-dark" type="email" name="email" aria-required="true" aria-invalid="false" placeholder="123@example.com" style="background: #fffc !important;">
										</div><!-- /.col-md-12 -->
										<div class="col-md-12">
										<span class="textname">Phone Number  </span>
										<div class="row">
											<div class="col-md-4" style="float: left;">
												<input class="bg-white text-dark" type="text" name="code" placeholder="+62" style="background: #fffc !important;">
											</div>
											<div class="col-md-8" style="float: left;">
												<input class="bg-white text-dark" type="text" name="telepon" aria-required="true" aria-invalid="false" placeholder="821000000" style="background: #fffc !important;">
											</div>
										</div>
										</div><!-- /.col-md-12 -->
										<div class="col-md-12 text-md-right">
											<input type="submit" value="Submit form" onclick="send()">
										</div><!-- /.col-md-12 -->
									</div><!-- /.row -->
								<div class="contact-form-result hidden"></div><!-- /.contact-form-result -->
							</div><!-- /.contact-form -->

						</div><!-- /.lqd-column col-lg-5 col-md-6 -->

						<div class="lqd-column col-lg-4 col-md-6 col-lg-offset-3 visible-md visible-lg">

							<figure data-stretch-element="true">
								<img src="assets/web/assets/macbook.png" alt="Macbook">
							</figure>

						</div><!-- /.lqd-column col-lg-4 col-md-6 -->

					</div><!-- /.row -->
				</div><!-- /.container -->

			</section>
			
		</main><!-- /#content.content -->
		<footer class="main-footer pt-20 pb-20" data-sticky-footer="true">
		
			<section>
				<div class="container">
					<div class="row d-flex flex-wrap align-items-center">
	
						<div class="lqd-column col-md-3 col-xs-12 text-center text-md-left mb-4 mb-md-0">
	
							©2020 Ansell. All rights reserved.	
	
						</div><!-- /.col-md-3 col-xs-12 -->
	
						<div class="lqd-column col-md-3 col-xs-12 text-center mb-4 mb-md-0">
						</div><!-- /.col-md-3 col-xs-12 -->

						<div class="lqd-column col-md-3 col-xs-12 text-center mb-4 mb-md-0">
						</div><!-- /.col-md-3 col-xs-12 -->
	
						<div class="lqd-column col-md-3 col-xs-12 text-center text-md-right">
	
							<ul class="social-icon social-icon-md">
								<li><a href="https://www.facebook.com/anselljaya/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
								<li><a href="https://twitter.com/AnsellJaya" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/anselljayaindonesia/" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UCC6GpLMfBll7edZxNAMrFdA" target="_blank"><i class="fa fa-youtube"></i></a></li>
							</ul>
	
						</div><!-- /.col-md-3 col-xs-12 -->
	
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			
		</footer><!-- /.main-footer -->

		<a id="btnmodal-1" href="#modal-1" class="btn btn-solid btn-md round font-weight-medium hidden" data-lity="#modal-1" data-lity-close="true"><span><span class="btn-txt">&nbsp;</span></span></a>
		<div id="modal-1" class="lqd-modal lity-hide">
			<div class="lqd-modal-inner">
				<div class="lqd-modal-head"></div>
				<div class="lqd-modal-content">
					<div class="row">
						<div class="lqd-column col-md-12 px-4 pt-45 pb-30">
							<div class="row d-flex flex-wrap align-items-center">
								<div class="lqd-column col-md-7 col-md-offset-1">
									<header class="fancy-title">
										<h2>Human Verification Code</h2>
										<p>Before click <b>Send Request Demo</b>, please send <span style="color:green;"><i class="fa fa-whatsapp" style="font-size: 20px;"></i>WhatsApp</span> message "<b>OTP #code_number</b>" to the following number <b>+<span id="numser"></span></b>.</p>
									</header>
								</div>
								<div class="lqd-column col-md-3 hidden-sm hidden-xs text-right">
									<div class="iconbox text-right iconbox-xl" data-animate-icon="true" data-plugin-options='{"resetOnHover":true,"color":"green","hoverColor":"rgb(0, 0, 0)"}'>
										<div class="iconbox-icon-wrap">
											<span class="iconbox-icon-container">
												<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"> <polygon stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10" points="1,30 63,1 23,41" /> <polygon stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10" points="34,63 63,1 23,41" /> </svg>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="lqd-column col-md-10 col-md-offset-1">
									<div class="contact-form contact-form-inputs-underlined contact-form-button-circle">
										<form novalidate="novalidate">
										<center>
											<div class="row d-flex flex-wrap">
 												<div class="lqd-column col-md-12 mb-10">
													<input class="lh-25 mb-10" type="text" name="otpcode" style="max-width: 220px;text-align: center;font-weight: bold;font-size: 36px;color: #000c;" readonly>
												</div>
												<div class="lqd-column col-md-12 mb-10">
												<label><b>OR</b></label><br>
												<span>You can use the following link</span>
												<a id="linkwa" target="_blank"></a>
												</div>
												<div class="lqd-column col-md-12 mb-30">
												<span><b style="color:var(--color-link) !important;">WARNING :</b> Send a message only using the phone number you entered (<b>+<span id="numpon"></span></b>).</span>
												</div>
												<div class="lqd-column col-md-12 mb-20">
													<input type="submit" value="Send Request Demo" class="font-size-13 ltr-sp-1 font-weight-bold" onclick="sendafotp()">
												</div>
											</div>											
										</center>
										</form>
										<div class="contact-form-result hidden"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="lqd-modal-foot"></div>
			</div>
		</div>
		
	</div><!-- /#wrap -->

	<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCUnWOSK2b5WtvMOAI8j55OHhS_sNv2VfA"></script>

	<script src="assets/web/assets/vendors/jquery.min.js"></script>
	<script src="assets/web/assets/js/theme-vendors.js"></script>
	<script src="assets/web/assets/js/theme.min.js"></script>
	<script src="assets/web/assets/js/liquidAjaxContactForm.min.js"></script>
	<script src="assets/web/assets/js/liquidAjaxMailchimp.min.js"></script>


	<script type="text/javascript" src="assets/web/assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="assets/web/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
	<script type="text/javascript" src="assets/web/assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="assets/web/assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="assets/web/assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="assets/web/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="assets/web/assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="assets/web/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="assets/web/assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="assets/web/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="assets/web/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="assets/sweetalert/dist/sweetalert2.min.js"></script>
	<script type="text/javascript">
		var revapi3,
			tpj;
		(function () {
			if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",
				onLoad);
			else onLoad();

			function onLoad() {
				if (tpj === undefined) {
					tpj = jQuery;
					if ("off" == "on") tpj.noConflict();
				}
				if (tpj("#rev_slider_3_1").revolution == undefined) {
					revslider_showDoubleJqueryError("#rev_slider_3_1");
				} else {
					revapi3 = tpj("#rev_slider_3_1").show().revolution({
						sliderType: "standard",
						jsFileLocation: "<?php echo base_url(); ?>assets/web/assets/js/",
						sliderLayout: "fullscreen",
						dottedOverlay: "none",
						delay: 9000,
						navigation: {
							onHoverStop: "off",
						},
						responsiveLevels: [1240, 1024, 778, 480],
						visibilityLevels: [1240, 1024, 778, 480],
						gridwidth: [1240, 1024, 778, 480],
						gridheight: [868, 768, 960, 720],
						lazyType: "none",
						parallax: {
							type: "scroll",
							origo: "enterpoint",
							speed: 400,
							speedbg: 0,
							speedls: 0,
							levels: [3, 6, 9, 12, 15, 18, 21, 24, 27, 30, 47, 48, 49, 50, 51, 55],
						},
						shadow: 0,
						spinner: "spinner0",
						stopLoop: "off",
						stopAfterLoops: -1,
						stopAtSlide: -1,
						shuffle: "off",
						autoHeight: "off",
						fullScreenAutoWidth: "off",
						fullScreenAlignForce: "off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "",
						disableProgressBar: "on",
						hideThumbsOnMobile: "off",
						hideSliderAtLimit: 0,
						hideCaptionAtLimit: 0,
						hideAllCaptionAtLilmit: 0,
						debugMode: false,
						fallbacks: {
							simplifyAll: "off",
							nextSlideOnWindowFocus: "off",
							disableFocusListener: false,
						}
					});
				}; /* END OF revapi call */

			}; /* END OF ON LOAD FUNCTION */
		}()); /* END OF WRAPPING FUNCTION */
		function send(){
			Swal.fire({
				title: 'Processing data',
				html: '<p style="font-size: 14px">Please wait . . .</p>',
				allowOutsideClick: false,
				onBeforeOpen: () => {
					Swal.showLoading()
					Swal.getTimerLeft()
				}
			});
			jQuery('#linkwa').removeAttr('href');
			var setdata = {
				'name' 		: jQuery('[name="nama"]').val(),
				'company' 	: jQuery('[name="company"]').val(),
				'email' 	: jQuery('[name="email"]').val(),
				'code' 		: jQuery('[name="code"]').val(),
				'phone' 	: jQuery('[name="telepon"]').val()
			};
			jQuery.ajax({
				url : '<?php echo base_url('requestdemo/verif')?>',
				type : "POST",
				data : setdata,
				dataType : "JSON",
				success : function(data)
				{
					if(data.status == true){
						swal.close();
						jQuery('#btnmodal-1').trigger('click');
						jQuery('.lity-wrap').removeAttr('data-lity-close');
						jQuery('[name="otpcode"]').val(data.code);
						jQuery('#numpon').text(data.phone);
						jQuery('#numser').text(data.phoneser);
						jQuery('#linkwa').attr('href',data.link);
						jQuery('#linkwa').text(data.link);
					}else{
						swal.fire({
							title: "Warning !",
							html : '<p style="font-size: 14px">'+data.message+'</p>',
							type : "warning"
						});
					}
				}
			});
		}
		function sendafotp(){
			Swal.fire({
				title: 'Processing data',
				html: '<p style="font-size: 14px">Please wait . . .</p>',
				allowOutsideClick: false,
				onBeforeOpen: () => {
					Swal.showLoading()
					Swal.getTimerLeft()
				}
			});
			var setdata = {
				'name' 		: jQuery('[name="nama"]').val(),
				'company' 	: jQuery('[name="company"]').val(),
				'email' 	: jQuery('[name="email"]').val(),
				'code' 		: jQuery('[name="code"]').val(),
				'phone' 	: jQuery('[name="telepon"]').val()
			};
			jQuery.ajax({
				url : '<?php echo base_url('requestdemo')?>',
				type : "POST",
				data : setdata,
				dataType : "JSON",
				success : function(data)
				{
					if(data.status == true){
						jQuery('button[class="lity-close"]').trigger('click');
						jQuery('[name="nama"]').val('');
						jQuery('[name="company"]').val('');
						jQuery('[name="email"]').val('');
						jQuery('[name="code"]').val('');
						jQuery('[name="telepon"]').val('');
						swal.fire({
							title: "Success !",
							html : '<p style="font-size: 14px">'+data.message+'</p>',
							type : "success"
						});
					}else{
						swal.fire({
							title: "Warning !",
							html : '<p style="font-size: 14px">'+data.message+'</p>',
							type : "warning"
						});
					}
				}
			});
		}
	</script>

</body>
</html>