<!DOCTYPE html>
<html lang="en">

<head>

	<title>PT. Herya Wood Furniture</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Favicon icon -->
	<link rel="icon" href="{{asset('/assets/images/logo.png')}}" type="image/x-icon">
	<!-- fontawesome icon -->
	<link rel="stylesheet" href="{{asset('/assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
	<!-- animation css -->
	<link rel="stylesheet" href="{{asset('/assets/plugins/animation/css/animate.min.css')}}">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

	<!-- [ navigation menu ] start -->
	@include('admin.layouts.__navbar')
	<!-- [ navigation menu ] end -->

	<!-- [ Header ] start -->
	@include('admin.layouts.__header')
	<!-- [ Header ] end -->

	@yield('content')

	<!-- Required Js -->
	<script src="{{asset('/assets/js/vendor-all.min.js')}}"></script>
	<script src="{{asset('/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/assets/js/pcoded.min.js')}}"></script>

</body>

</html>
