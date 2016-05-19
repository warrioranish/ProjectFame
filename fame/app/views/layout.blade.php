<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Fame-International</title>
		@section('head')
		<!-- Favicon -->
		{{HTML::style('assets/images/fav-icon/apple-icon-57x57.png');}}
		{{HTML::style('assets/images/fav-icon/apple-icon-60x60.png');}}
		{{HTML::style('assets/images/fav-icon/apple-icon-72x72.png');}}
		{{HTML::style('assets/images/fav-icon/apple-icon-76x76.png');}}
		{{HTML::style('assets/images/fav-icon/apple-icon-114x114.png');}}
		{{HTML::style('assets/images/fav-icon/apple-icon-120x120.png');}}
		{{HTML::style('assets/images/fav-icon/apple-icon-144x144.png');}}
		{{HTML::style('assets/images/fav-icon/apple-icon-152x152.png');}}
		{{HTML::style('assets/images/fav-icon/apple-icon-180x180.png');}}
		{{HTML::style('assets/images/fav-icon/android-icon-192x192.png');}}
		{{HTML::style('assets/images/fav-icon/favicon-32x32.png');}}
		{{HTML::style('assets/images/fav-icon/favicon-96x96.png');}}
		{{HTML::style('assets/images/fav-icon/favicon-16x16.png');}}


		<!-- Bootstrap CSS -->
		{{HTML::style('assets/css/bootstrap/bootstrap.css');}}
		


		<!-- Fonts -->
		{{HTML::style('assets/fonts/roberto.css');}}
		{{HTML::style('assets/fonts/raleway.css');}}
		{{HTML::style('assets/fonts/opensans.css');}}
		{{HTML::style('assets/fonts/ptserif.css');}}

		<!-- Font Awesome -->
		{{HTML::style('assets/fonts/font-awesome/css/font-awesome.min.css');}}
		
		<!-- Stroke Gap Icon -->
		{{HTML::style('assets/fonts/stroke-gap/style.css');}}

		<!-- owl-carousel css -->
		{{HTML::style('assets/css/owl.carousel.css');}}
		{{HTML::style('assets/css/owl.theme.css');}}
		
		<!-- owl-carousel css -->
		{{HTML::style('assets/css/owl.carousel.css');}}
		{{HTML::style('assets/css/owl.theme.css');}}

		<!-- Custom Css -->
		{{HTML::style('assets/css/custom/style.css');}}
		{{HTML::style('assets/css/responsive/responsive.css');}}

		@show


		<!--[if lt IE 9]>
	   		<script src="{{URL::asset('')}}js/html5shiv.js"></script>
		<![endif]-->



	</head>
	<body class="home">
	@include('header')
	@yield('content')

	@include('Footer')

			<!-- Js File -->

		<!-- j Query -->
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery-2.1.4.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.bxslider.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/revolution-slider/jquery.themepunch.tools.min.js')}}"></script> <!-- Revolution Slider Tools -->
		<script src="{{URL::asset('assets/js/revolution-slider/jquery.themepunch.revolution.min.js')}}"></script> <!-- Revolution Slider -->
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.actions.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.carousel.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.kenburn.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.migration.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.navigation.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.parallax.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.slideanims.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.video.min.js')}}"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.appear.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.countTo.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.fancybox.pack.js')}}"></script>
		<!-- owl-carousel -->
		<script type="text/javascript" src="{{URL::asset('assets/js/owl.carousel.js')}}"></script>
		<script src="{{URL::asset('assets/js/owl-custom.js')}}"></script>
		<!-- Custom & Vendor js -->
		<script type="text/javascript" src="{{URL::asset('assets/js/custom.js')}}"></script>
		

	</body>
</html>