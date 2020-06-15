<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Antelope.io - Website Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Antelope.io</title>

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

        <!-- Antelope.io - Global Wrapper -->
        <div class="wrapper">

            <x-master.sidebar/>
            <x-master.header/>

            <!-- Antelope.io - Page Content  -->
            @yield('content')
            <!-- #END - Page Content  -->

        </div>
        <!-- #END - Global Wrapper -->

        <x-master.footer/>

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
        <script src="{{ asset('js/custom.js') }}"></script>
        <!-- #END - Javascript -->

    </body>
</html>