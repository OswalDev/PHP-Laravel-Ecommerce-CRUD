<!DOCTYPE html>
<html lang="zxx">
<head>
</head>
<body class="js">
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet"> <!--load all styles -->
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- Header -->
	@include('layouts.header')
	<!-- end Header -->
    <!-- main content -->
	@yield('content')
	<!-- end main content -->
    <!-- Footer -->
	@include('layouts.footer')
    <!-- end Footer -->
</body>
</html>