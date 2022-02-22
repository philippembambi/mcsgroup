<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Authentification</title>
  <link rel="shortcut icon" type="image/png" href="">

  <link rel="stylesheet" href="{{ asset('admin/login/jqm-demos.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/login/font-awesome.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/login/portofolio/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/login/portofolio/prettyPhoto.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/login/style.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/login/managerCss/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/login/managerCss/mdb.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/login/managerCss/style.min.css') }}">



    <style>
        .text-red-500 {
            color: red;
        }
    </style>
</head>
<body onload="document.getElementById('loginadmin').click();">
   <!--authentification admin-->
   <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" >
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <img src="{{ asset('admin/img/avatar.png')}}" class="rounded-circle img-responsive"
            alt="Avatar photo">
        </div>
        <!--Body-->
        <div class="modal-body text-center mb-1">
 <h5 class="mt-1 mb-2">Authentification</h5>



<form action="{{ route('login') }}" method="POST">
    @csrf

    <div class="md-form ml-0 mr-0">
            <label for="form1" class="ml-0">Mot de Passe...</label>
            <input type="password" type="text" name="password" class="form-control ml-0">

            @error('password') <div class="text-red-500 mt-2 text-xs">{{ $message }}</div> @enderror

            @if (session('status'))
            <div class="text-red-500"><i class="fa fa-warning"></i> {{ session('status') }}</div>
           @endif

        </div>

        <div class="md-form ml-0 mr-0">
            <input type="hidden" name="community" value="admin">
            @error('community') <div class="text-red-500 mt-2 text-xs">{{ $message }}</div> @enderror

        </div>

        <div class="md-form ml-0 mr-0">
            <input type="checkbox" name="remember" id=""> Se souvenir de moi
        </div>


          <div class="text-center mt- 4">
            <button type="submit" class="btn" style="background-color: red;color: #fff;"> <i class="fa fa-check"></i> Connexion
            </button>

      </div>

</form>

         </div>  </div>   <!--/.Content--> </div> </div>


<button id="loginadmin" style="visibility: hidden;" data-toggle="modal" data-target="#modalLogin" class="ui-btn ui-corner-all ui-icon-user ui-btn-icon-left ui-shadow ui-btn-inline ui-btn-p">Login admin</button>

<script src="{{ asset('admin/login/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('admin/login/SlideJs/custom.js') }}"></script>

<script src="{{ asset('admin/login/portojs/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/login/portojs/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('admin/login/portojs/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('admin/login/portojs/wow.min.js') }}"></script>
<script src="{{ asset('admin/login/portojs/functions.js') }}"></script>

<script src="{{ asset('admin/login/managerJs/jquery-2.1.1.min.js') }}"></script>

<script src="{{ asset('admin/login/managerJs/popper.min.js') }}"></script>
<script src="{{ asset('admin/login/managerJs/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/login/managerJs/mdb.min.js') }}"></script>
<script src="{{ asset('admin/login/SlideJs/custom.js') }}"></script>

 <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

</body>
</html>
