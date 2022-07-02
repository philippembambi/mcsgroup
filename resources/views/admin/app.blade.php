<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('image/logo_groupemcs.png') }}" type="image/png">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/chartist/dist/chartist.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/dist/js/pages/chartist/chartist-init.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/c3/c3.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/jvectormap/jquery-jvectormap.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/dist/css/style.css') }}">

      <link rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/select2/dist/css/select2.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/ckeditor/samples/css/samples.css') }}">
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <title>Espace d'administration</title>

    @stack('scripts.header')
    @stack('styelesheets')

    <style>

@font-face {
    font-family: 'persofont';
    src: url('../fonts/customsfonts/11S0BLTI.TTF') format('truetype');
    font-weight: normal;
    font-style: normal;
  }

        .sidebar-link:focus{
            color: white;
        }
        .admin {
          background-color: rgb(211, 1, 1);
        }
        .admin-color{
            color: rgb(211, 1, 1);
        }
    </style>

<script>
        function  clickPurchase(){
               document.getElementById("achats").click();
           }
</script>
  </head>
<body  style="background-color: whitesmoke;" onload="clickPurchase()">

    <div id="main-wrapper">

        @include('admin.components._header')
        @include('admin.components._menu')

        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        @yield('content')

    </div>


        @yield('footer')

        @stack('scripts.footer')

        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        @include('flashy::message')

        <script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/dist/js/app.min.js') }}"></script>
        <script src="{{ asset('admin/dist/js/app.init.js') }}"></script>
        <script src="{{ asset('admin/dist/js/app-style-switcher.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/extra-libs/sparkline/sparkline.js') }}"></script>
        <script src="{{ asset('admin/dist/js/waves.js') }}"></script>
        <script src="{{ asset('admin/dist/js/sidebarmenu.js') }}"></script>
        <script src="{{ asset('admin/dist/js/custom.min.js') }}"></script>
        <script src="{{ asset('admin/dist/js/pages/forms/select2/select2.init.js') }}"></script>

        <script src="{{ asset('admin/dist/js/pages/dashboards/dashboard2.js') }}"></script>

        <script src="{{ asset('admin/dist/js/pages/notes/notes.js') }}"></script>
</body>

</html>
