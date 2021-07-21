<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!--   15:40:28 GMT -->

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon -->
	<link href="images/header/fav.png" rel="shortcut icon" type="image/x-icon" />

	<title>{{ config('app.name', 'The Author') }}</title>

	<!-- Bootstrap core CSS-->
	<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css') }}" rel="stylesheet">
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link rel="stylesheet" href="{{asset('css/portfolio.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/dropdown.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/owlslider.css')}}" type="text/css">
	<!-- Custom styles for this template-->
	<link href="{{asset('css/sb-admin.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/owlcarousel/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/owlcarousel/assets/owl.theme.default.min.css')}}">

</head>

<body id="page-top">

	@include('layouts.navbar')
	<div id="wrapper">
		<!-- Sidebar -->
		@include('layouts.sidebar')
		<div id="content-wrapper">
			@yield('content')
		</div>
	</div>
	<!-- /#wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Bootstrap core JavaScript-->
	<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<!-- Core plugin JavaScript-->
	<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
	<!-- Page level plugin JavaScript-->
	<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
	<script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
	<script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
	<!-- Custom scripts for all pages-->
	<script src="{{asset('js/sb-admin.min.js')}}"></script>
	<script src="{{asset('js/portfolio.js')}}"></script>
	<script src="{{asset('js/you-listing.js') }}"></script>
	<script src="{{asset('js/menurght.js')}}"></script>
	<script src="{{asset('js/crausal1.js')}}"></script>
	<script src="{{asset('js/dropdown.js')}}"></script>
	<!-- Demo scripts for this page-->
	<script src="{{asset('js/slick.min.js')}}"></script>.
	<!-- Assect scripts for this page-->
	<script src="{{asset('assets/vendors/jquery.min.js')}}"></script>
	<script src="{{asset('assets/owlcarousel/owl.carousel.js')}}"></script>
	<script src="{{asset('assets/vendors/highlight.js')}}"></script>
	<script src="{{asset('assets/js/app.js') }}"></script>

</body>


<!--   15:44:08 GMT -->

</html>