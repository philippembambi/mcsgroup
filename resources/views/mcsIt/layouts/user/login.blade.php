@extends('mcsIt.app')

@section('content')

<style>
    .border-red-500 {
        border-color: red;
    }
    .text-red-500 {
        text-align: center;
        color: red;
        font-weight: 500;
    }
    .text-red{
        color: red;
    }


    @media (min-width: 289px) and (max-width: 316px)  {
    .auths {
      font-size: 12px;
    }
    }

    @media (max-width: 288px)  {
    .auths {
      font-size: 9px;
    }
    }

    @media (max-width: 288px)  {
    .auths {
      font-size: 9px;
    }
    }
</style>

<script>

    function quickbox(){
     if ($(window).width() > 767) {
        $('.quickview-button').magnificPopup({
          type:'iframe',
          delegate: 'a',
          preloader: true,
          tLoading: 'Loading image #%curr%...',
        });
     }
    }
    jQuery(document).ready(function() {quickbox();});
    jQuery(window).resize(function() {quickbox();});

</script>

@component('mcsIt.components.header')
@endcomponent

<div class="account-login   layout-2 left-col">

    <div id="account-login" class="container">
        <ul class="breadcrumb">
              <li><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
              <li><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/account">Account</a></li>
              <li><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/login">Login</a></li>
            </ul>
            <div class="row"><aside id="column-left" class="col-sm-3 hidden-xs">
          <div class="box">
        <div class="box-heading">Account</div>
       <div class="list-group">

        <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/login" class="list-group-item">Login </a> <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/register" class="list-group-item">Register</a> <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/forgotten" class="list-group-item">Forgotten Password </a>

       <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/account " class="list-group-item">My Account </a>

        <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/address" class="list-group-item">Address Book</a> <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/wishlist " class="list-group-item">Wish List </a> <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/order " class="list-group-item">Order History </a> <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/download" class="list-group-item">Downloads </a><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/recurring" class="list-group-item">Recurring payments </a> <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/reward " class="list-group-item">Reward Points </a> <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/return" class="list-group-item">Returns </a> <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/transaction" class="list-group-item">Transactions </a> <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=account/newsletter" class="list-group-item">Newsletter </a>

      </div>
      </div>


        </aside>

                      <div id="content" class="col-sm-9">

            <div class="row">

                <div class="col-sm-6">

                    @if (session('status'))
                    <div class="text-red-500">
                        <p>
                          **  <strong>{{ session('status') }}</strong> **
                        </p>
                    </div>
                    @endif

                    <div class="well">
                      <h2 style="font-weight: bolder;">S'identifier</h2>
                      <form action="{{   route("mcsIt.user.login") }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label class="control-label" for="input-email">Numéro de téléphone</label>
                          <input type="text" value="{{   old('phone_number')   }}" name="phone_number" value="" placeholder="exemple: +243826686661" id="input-email" class="form-control @error('phone_number') border-red-500 @enderror" />

                          @error('phone_number') <div class="text-red">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="input-password">Mot de passe</label>
                          <input type="password" name="password" value="" placeholder="" id="input-password" class="form-control @error('password') border-red-500 @enderror" />
                          @error('password') <div class="text-red">{{ $message }}</div> @enderror
                          <a href="#">Mot de passe oublié ?</a>
                        </div>

                        <input type="submit" value="Se connecter" class="btn btn-primary" />
                       </form>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    @if (session('status'))
                    <div class="text-red-500">
                        <p>
                          **  <strong>{{ session('status') }}</strong> **
                        </p>
                    </div>
                    @endif

                    <div class="well">
                      <h2 style="font-weight: bolder;">Créer un compte</h2>
                      <form action="{{   route("mcsIt.user.register") }}" method="post">
                        @csrf
                        <div class="form-group">
                                <label class="control-label" for="input-email">Entrer votre nom complet</label>
                                <input type="text" value="{{   old('username')   }}" name="username" value="" placeholder="" id="input-email" class="form-control" />
                                @error('username') <div class="text-red">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-password">Créer un mot de passe</label>
                                <input type="password" name="password" value="" placeholder="" id="input-password" class="form-control @error('psw') border-red-500 @enderror" />
                                @error('password') <div class="text-red">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="input-password">Confirmer le mot de passe</label>
                                <input type="password" name="password_confirmation" value="" placeholder="" id="input-password" class="form-control @error('psw') border-red-500 @enderror" />
                                @error('password_confirmation') <div class="text-red">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="input-password">Entrer une adresse mail</label>
                                <input type="text" name="email" value="{{   old('email')   }}" placeholder="" id="input-password" class="form-control" />
                                @error('email') <div class="text-red">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="input-password">Numéro de Téléphone</label>
                                <input type="text" name="phonecode" value="{{   old('phonecode')   }}" placeholder="exemple: +243826686661" id="input-password" class="form-control" />
                                @error('phonecode') <div class="text-red">{{ $message }}</div> @enderror
                            </div>

                            <input type="submit" value="Créer le compte" class="btn btn-primary" />
                        </form>
                    </div>
                  </div>


            </div>
            </div>
          </div>
      </div>
</div>

@component('mcsIt.components.footer')
@endcomponent
@endsection
