<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Cosmetic">
        <meta name="keywords" content="Cosmetic">

        <link rel="shortcut icon" href="{{ asset('image/logo_groupemcs.png') }}" type="image/png">
        <link rel="stylesheet" href="{{ asset('cosmetic/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('cosmetic/css/stylesheet.css') }}">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        
        <title><?php echo isset($title)?$title:'Cosmetics';  ?></title>

    </head>

    <body>

        @stack('scripts.head')

        @yield('content')

        <script src="{{ asset('cosmetic/js/jquery-3.2.1.min.js') }}"></script>
        @include('flashy::message')

        @stack('scripts.foot')


    </body>

    <script src="{{ asset('cosmetic/js/vendor.js') }}"></script>
    <script src="{{ asset('cosmetic/js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
  	<!-- SPECIFIC SCRIPTS -->

</html>
