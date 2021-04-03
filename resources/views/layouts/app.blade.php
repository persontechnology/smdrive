<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
	<meta charset="UTF-8">
	<meta name="description" content="Escuela de Conducción San Miguel Drive">
	<meta name="author" content="Escuela de Conducción San Miguel Drive">
	<meta name="keywords" content="Escuela,Conducción,San Miguel Drive">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="shortcut icon" href="{{ asset('images/icons/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('images/icons/favicon.ico') }}" type="image/x-icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/elegant-font/html-css/style.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/css/navigation.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/css/settings.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/lightbox2/css/lightbox.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/dist/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/color/green/color.css') }}">
<!--===============================================================================================-->


</head>
<body class="animsition restyle-index">
	
	<header>
		@include('estaticas.header.escritorio')
		@include('estaticas.header.mobil')
		@include('estaticas.header.menu-mobil')
	</header>

    @include('estaticas.sliders')
    @yield('content')
	@include('estaticas.pie-pagina')


	<!-- Back to top -->
	<div class="btn-back-to-top hov-bg-main" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>



<!--===============================================================================================-->	
	{{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/dist/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
	<script src="{{ asset('js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!--===============================================================================================-->	
	<script src="{{ asset('vendor/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script src="{{ asset('js/slide-custom.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/lightbox2/js/lightbox.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/parallax100/parallax100.js') }}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script> --}}
	{{-- <script src="{{ asset('js/map-custom.js') }}"></script> --}}
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>