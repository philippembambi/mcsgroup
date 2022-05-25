<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Group-Mcs : Votre partenaire business">
        <meta name="keywords" content="Group-Mcs">

        <link rel="shortcut icon" href="{{ asset('image/logourl.png') }}" type="image/png">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <title><?php echo isset($title)?$title:'';  ?></title>

    </head>

    <body>

        @stack('scripts.head')

        @yield('content')

        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        @include('flashy::message')

        @stack('scripts.foot')


    </body>

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/common_scripts.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('js/pw_strenght.js') }}"></script>
    <script src="{{ asset('assets/validate.js') }}"></script>
    <script src="{{ asset('js/jquery.cookiebar.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/modernizr.js')}}"></script>
  	<!-- SPECIFIC SCRIPTS -->
	<script>
		$(document).ready(function() {

            getTerminal();

			'use strict';
			$.cookieBar({
				fixed: true
			});
        });
	</script>


	<script>
		$('#carousel_in').owlCarousel({
		   center: true,
		   items:1,
           autoplay: true,
		   loop:true,
		   margin:3,
		   responsive:{
			   320:{
				   items:2
			   },
				800:{
				   items:3
			   }
		   }
	   });
	   </script>

	<script>
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>

</html>
