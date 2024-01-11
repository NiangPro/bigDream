<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Big Dream' }}</title>
        <!-- Bootstrap css -->
		<link rel="stylesheet" href="{{ asset('includes/css/bootstrap.min.css')}}" />

		<!-- Bootstrap font icons css -->
		<link rel="stylesheet" href="{{ asset('includes/fonts/bootstrap/bootstrap-icons.css')}}" />

		<!-- Main css -->
		<link rel="stylesheet" href="{{ asset('includes/css/main.min.css')}}" />

		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="{{ asset('includes/vendor/overlay-scroll/OverlayScrollbars.min.css')}}" />
	
    </head>
    <body>

        <!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Page header starts -->
			@include('includes.header-superadmin')
			<!-- Page header ends -->

			<!-- Main container start -->
			<div class="main-container">

				<!-- Sidebar wrapper start -->
				@include('includes.sidebar-superadmin')
				<!-- Sidebar wrapper end -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Main header starts -->
					<div class="main-header d-flex align-items-center justify-content-between position-relative">
						<div class="d-flex align-items-center justify-content-center">
							<div class="page-icon">
								<i class="bi bi-{{ $icon }}"></i>
							</div>
							<div class="page-title d-none d-md-block">
								<h5>{{ $title }}</h5>
							</div>
						</div>
						<!-- Live updates start -->
						<ul class="updates d-flex align-items-end flex-column overflow-hidden" id="updates">
							<li>
								<a href="javascript:void(0)">
									<i class="bi bi-envelope-paper text-red font-1x me-2"></i>
									<span>12 emails from David Michaiah.</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="bi bi-bar-chart text-blue font-1x me-2"></i>
									<span>15 new features updated successfully.</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="bi bi-folder-check text-yellow font-1x me-2"></i>
									<span>The media folder is created successfully.</span>
								</a>
							</li>
						</ul>
						<!-- Live updates end -->
					</div>
					<!-- Main header ends -->

					<!-- Content wrapper start -->
					<div class="content-wrapper">

                        {{ $slot }}

					</div>
					<!-- Content wrapper end -->

				</div>
				<!-- Content wrapper scroll end -->

				<!-- App Footer start -->
				<div class="app-footer">
					<span>© Bootstrap Gallery 2023</span>
				</div>
				<!-- App footer end -->

			</div>
			<!-- Main container end -->

		</div>
		<!-- Page wrapper end -->

        <!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="{{ asset('includes/js/jquery.min.js')}}"></script>
		<script src="{{ asset('includes/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{ asset('includes/js/modernizr.js')}}"></script>
		<script src="{{ asset('includes/js/moment.js')}}"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="{{ asset('includes/vendor/overlay-scroll/jquery.overlayScrollbars.min.js')}}"></script>
		<script src="{{ asset('includes/vendor/overlay-scroll/custom-scrollbar.js')}}"></script>

		<!-- News ticker -->
		<script src="{{ asset('includes/vendor/newsticker/newsTicker.min.js')}}"></script>
		<script src="{{ asset('includes/vendor/newsticker/custom-newsTicker.js')}}"></script>

        <!-- Apex Charts -->
		<script src="{{ asset('includes/vendor/apex/apexcharts.min.js')}}"></script>
		<script src="{{ asset('includes/vendor/apex/custom/dash2/revenue.js')}}"></script>
		<script src="{{ asset('includes/vendor/apex/custom/dash2/analytics.js')}}"></script>
		<script src="{{ asset('includes/vendor/apex/custom/dash2/sparkline.js')}}"></script>
		<script src="{{ asset('includes/vendor/apex/custom/dash2/sales.js')}}"></script>
		<script src="{{ asset('includes/vendor/apex/custom/dash2/reports.js')}}"></script>

		<!-- Vector Maps -->
		<script src="{{ asset('includes/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js')}}"></script>
		<script src="{{ asset('includes/vendor/jvectormap/world-mill-en.js')}}"></script>
		<script src="{{ asset('includes/vendor/jvectormap/gdp-data.js')}}"></script>
		<script src="{{ asset('includes/vendor/jvectormap/continents-mill.js')}}"></script>
		<script src="{{ asset('includes/vendor/jvectormap/custom/world-map-markers4.js')}}"></script>

		<!-- Rating JS -->
		<script src="{{ asset('includes/vendor/rating/raty.js')}}"></script>
		<script src="{{ asset('includes/vendor/rating/raty-custom.js')}}"></script>

		<!-- Main Js Required -->
		<script src="{{ asset('includes/js/main.js')}}"></script>
    </body>
</html>
