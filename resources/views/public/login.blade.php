<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Antelope.io - Website Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ APPLICATION_FULL_NAME }} :: Login</title>

        <!-- Antelope.io - Favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
        <!-- Antelope.io - Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Antelope.io - Typography CSS -->
        <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
        <!-- Antelope.io - Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Antelope.io - Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
	<body>

		<x-master.loader/>

		<!-- Antelope.io - Login Page  -->
		<section class="sign-in-page bg-white">
			<div class="container-fluid p-0">
				<div class="row no-gutters">

					<div class="col-sm-4 align-self-center">
						<x-auth.signin/>
					</div>

					<div class="col-sm-8 text-center">
						<div class="sign-in-detail text-white" style="background: url(assets/images/login/2.jpg) no-repeat 0 0; background-size: cover;">

							<a class="sign-in-logo mb-5" href="#"><img src="{{ asset('images/logo-white.png') }}" class="img-fluid" alt="logo"></a>

							<div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">

								<div class="item">
									<img src="{{ asset('images/login/1.png') }}" class="img-fluid mx-auto d-block mb-4" alt="logo" style="width: 80%; height: auto;">
									<h4 class="mb-1 text-white">Manage your community</h4>
									<p>It is a long established fact that a reader will be distracted by the readable content.</p>
								</div>

								<div class="item">
                                    <img src="{{ asset('images/login/1.png') }}" class="img-fluid mx-auto d-block mb-4" alt="logo" style="width: 80%; height: auto;">
									<h4 class="mb-1 text-white">Manage your community</h4>
									<p>It is a long established fact that a reader will be distracted by the readable content.</p>
								</div>

								<div class="item">
                                    <img src="{{ asset('images/login/1.png') }}" class="img-fluid mx-auto d-block mb-4" alt="logo" style="width: 80%; height: auto;">
									<h4 class="mb-1 text-white">Manage your community</h4>
									<p>It is a long established fact that a reader will be distracted by the readable content.</p>
								</div>

							</div>

						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- #END - Login Page  -->

        <!-- Antelope.io - Javascript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <!-- Appear JavaScript -->
        <script src="{{ asset('js/jquery.appear.js') }}"></script>

        <!-- Countdown JavaScript -->
        <script src="{{ asset('js/countdown.min.js') }}"></script>

        <!-- Counterup JavaScript -->
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>

        <!-- Wow JavaScript -->
        <script src="{{ asset('js/wow.min.js') }}"></script>

        <!-- Apexcharts JavaScript -->
        <script src="{{ asset('js/apexcharts.js') }}"></script>

        <!-- Slick JavaScript -->
        <script src="{{ asset('js/slick.min.js') }}"></script>

        <!-- Select2 JavaScript -->
        <script src="{{ asset('js/select2.min.js') }}"></script>

        <!-- Owl Carousel JavaScript -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

        <!-- Magnific Popup JavaScript -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

        <!-- Smooth Scrollbar JavaScript -->
        <script src="{{ asset('js/smooth-scrollbar.js') }}"></script>

        <!-- lottie JavaScript -->
        <script src="{{ asset('js/lottie.js') }}"></script>

        <!-- Chart Custom JavaScript -->
        <script src="{{ asset('js/chart-custom.js') }}"></script>

        <!-- Custom JavaScript -->
        <script src="{{ asset('js/sofbox.js') }}"></script>

        <!-- App JavaScript -->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- #END - Javascript -->

    </body>
</html>