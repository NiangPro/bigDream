<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Big Dream' }}</title>
        <!-- Google Web Fonts -->
		
		<link rel="shortcut icon" href="themes/images/favicon.svg">
		<!-- *************
			************ Common Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="{{ asset('themes/vendor/overlay-scroll/OverlayScrollbars.min.css')}}">

		<!-- tagsCloud Keywords CSS -->
		<link rel="stylesheet" href="{{ asset('themes/vendor/tagsCloud/tagsCloud.css')}}" />
		<!-- Animated css -->
		<link rel="stylesheet" href="{{ asset('themes/css/animate.css')}}">

		<!-- Bootstrap font icons css -->
		<link rel="stylesheet" href="{{ asset('themes/fonts/bootstrap/bootstrap-icons.css')}}">

		<!-- Main css -->
		<link rel="stylesheet" href="{{ asset('themes/css/main.min.css')}}">


		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="{{ asset('themes/vendor/overlay-scroll/OverlayScrollbars.min.css')}}">

    </head>
    <body>
        
       <!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Sidebar wrapper start -->
			@include('includes.sidebar')
			<!-- Sidebar wrapper end -->

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header starts -->
				@include('includes.header')
				<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

                        {{ $slot }}

					</div>
					<!-- Content wrapper end -->

					<!-- App Footer start -->
					<div class="app-footer">
						<span>© BigDream 2024</span>
					</div>
					<!-- App footer end -->

				</div>
				<!-- Content wrapper scroll end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->

		</div>
		<!-- Page wrapper end -->


        <!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="{{ asset('themes/js/jquery.min.js')}}"></script>
		<script src="{{ asset('themes/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{ asset('themes/js/modernizr.js')}}"></script>
		<script src="{{ asset('themes/js/moment.js')}}"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="{{ asset('themes/vendor/overlay-scroll/jquery.overlayScrollbars.min.js')}}"></script>
		<script src="{{ asset('themes/vendor/overlay-scroll/custom-scrollbar.js')}}"></script>

		<!-- Apex Charts -->
		<script src="{{ asset('themes/vendor/apex/apexcharts.min.js')}}"></script>
		<script src="{{ asset('themes/vendor/apex/custom/analytics/byChannel.js')}}"></script>
		<script src="{{ asset('themes/vendor/apex/custom/analytics/byCountry.js')}}"></script>
		<script src="{{ asset('themes/vendor/apex/custom/analytics/byDevice.js')}}"></script>
		<script src="{{ asset('themes/vendor/apex/custom/analytics/orders.js')}}"></script>
		<script src="{{ asset('themes/vendor/apex/custom/analytics/results.js')}}"></script>
		<script src="{{ asset('themes/vendor/apex/custom/analytics/visitors.js')}}"></script>
		<script src="{{ asset('themes/vendor/apex/custom/analytics/demography.js')}}"></script>
		<script src="{{ asset('themes/vendor/apex/custom/analytics/deals.js')}}"></script>

		<!-- Vector Maps -->
		<script src="{{ asset('themes/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js')}}"></script>
		<script src="{{ asset('themes/vendor/jvectormap/world-mill-en.js')}}"></script>
		<script src="{{ asset('themes/vendor/jvectormap/gdp-data.js')}}"></script>
		<script src="{{ asset('themes/vendor/jvectormap/custom/world-map-markers.js')}}"></script>

		<!-- Circleful -->
		<script src="{{ asset('themes/vendor/circliful/circliful.min.js')}}"></script>
		<script src="{{ asset('themes/vendor/circliful/circliful.custom.js')}}"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->


		<script src="{{ asset('themes/vendor/apex/custom/ecommerce/orders-visits.js')}}"></script>
		<script src="{{ asset('themes/vendor/apex/custom/ecommerce/customers.js')}}"></script>

		<!-- jQcloud Keywords -->
		<script src="{{ asset('themes/vendor/tagsCloud/tagsCloud.js')}}"></script>
		<script src="{{ asset('themes/js/main.js')}}"></script>
    </body>
</html>
