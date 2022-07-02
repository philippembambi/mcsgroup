<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Mcs Groupe It : Les meilleurs services It de votre choix">
        <meta name="keywords" content="Mcs Groupe It">

        <link rel="shortcut icon" href="{{ asset('image/logo_groupemcs.png') }}" type="image/png">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/vegas.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/slicknav.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/gijgo.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <title><?php echo isset($title)?$title:'Mcs Groupe Prod : Les meilleurs services audio-visuels de votre choix';  ?></title>

    </head>

    <body class="loader-active">

        @stack('scripts.head')

        @yield('content')

        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        @include('flashy::message')

    </body>

    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/gijgo.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/vegas.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</html>
