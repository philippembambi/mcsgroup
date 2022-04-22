@extends('layouts.app', ['title' => "Identifications - Mcs Group"])

@section('content')

<script>
function changephonecode() {

    var select = document.getElementById('town');
    var input = document.getElementById('phonecode');
    var ville = document.getElementById('ville');

    var selectedvalue = select.options[select.selectedIndex].value;
    var villevalue = select.options[select.selectedIndex].text;

    input.value = selectedvalue;
    ville.value = villevalue;
    //alert(value);
}

</script>

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

<div id="page">
    @component('components.fixed-header')
    @endcomponent

    <div class="sub_header_in">

        <br>
        </div>
        <!-- /sub_header -->

        <main class="pattern">

<br>
<br>
            <div class="container margin_60">
                <div class="row justify-content-center">

                    <div class="col-lg-9 col-md-9">
                        <div class="step first">
                        <ul class="nav nav-tabs" id="tab_checkout" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab_1" role="tab" aria-controls="tab_1" aria-selected="true"><i class="icon-check-3"></i> <span class="auths">S'identifier</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile" data-toggle="tab" href="#tab_2" role="tab" aria-controls="tab_2" aria-selected="false" onclick=""><i class="icon-user-add"></i> <span class="auths">Créer un compte</span></a>
                          </li>
                        </ul>
                        <div class="tab-content checkout">
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                             <div class="row">

                                <div class="col-xl-8 col-lg-8 col-md-8">
                                <div class="box_account">
                                 <form action="{{ route('user.login') }}" method="post" name="login" id="login">
                                    @csrf

                                    <div class="form_container">

                                        @if (session('status'))
                                        <div class="text-red-500">
                                            <p>
                                              **  <strong>{{ session('status') }}</strong> **
                                            </p>
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label><i class="icon_phone"></i> Entrer votre numéro de téléphone</label>
                                            <input
                                                    type="tel"
                                                    class="form-control @error('phone_number') border-red-500 @enderror"
                                                    name="phone_number"
                                                    id="phone_number"
                                                    placeholder="" value="+243" required>
                                            @error('phone_number') <div class="text-red">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label><i class="icon_lock"></i> Valider par votre mot de passe</label>
                                            <input
                                                    type="password"
                                                    class="form-control @error('password') border-red-500 @enderror"
                                                    name="password"
                                                    id="password" required>
                                            @error('password') <div class="text-red">{{ $message }}</div> @enderror
                                        </div>


                                        <div class="clearfix add_bottom_15">
                                            <div class="checkboxes float-left">
                                                <label class="container_check">Se souvenir de moi
                                                    <input type="checkbox" name="remember">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="float-right"><a id="forgot" href="javascript:void(0);">Mot de passe oublié ?</a></div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn_1"><i class="icon-login"></i> Se connecter</button>

                                        </div>
                                    <p>
                                        <div class="main_title_2">
                                            <span><em></em></span>
                                            <br>
                                            <b style="font-size: 14px;">Se connecter avec son compte</b>

                                            <ul class="share-buttons">
                                                <li><a class="fb-share" href="{{ url('auth/facebook')}}"><i class="social_facebook"></i> Facebook</a></li>
                                                <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Twitter</a></li>
                                                <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Google</a></li>
                                            </ul>
                                        </div>


                                    </p>

                                        <div id="forgot_pw">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Entrez votre Email">
                                            </div>

                                            <div class="text-center">
                                                <input type="submit" value="Réinitialiser" class="btn_1">
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /form_container -->
                                    </form>

                                </div>
                                <!-- /box_account -->

                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <img src="{{    asset("image/skip.png")    }}" alt="" style="height: 100px;margin-left: 30%;">
                                    <ul class="list_ok">
                                        <li>Un seul compte pour tous les services de Mcs Group</li>
                                        <li></li>
                                        <li>Achetez des produits haut de gamme</li>
                                        <li></li>
                                        <li>Béneficiez de nos services à couper le souffle !</li>
                                    </ul>
                                </div>

                              </div>

                            </div>
                            <!-- /tab_1 -->
                          <div class="tab-pane fade" id="tab_2" role="tabpanel" aria-labelledby="tab_2">
                            <div class="row">

                                <div class="col-xl-8 col-lg-8 col-md-8">
                                    <span id="pass-info"></span>
                                    <span class="sucess"></span>
                                    <div class="box_account">
                                    <form action="{{ route('user.add') }}" method="post" name="registration" id="registration">
                                            @csrf
                                        <div class="form_container">
                                            <div class="form-group">
                                                <label><i class="icon-user-add"></i> Nom complet *</label>
                                                <input
                                                        type="text" class="form-control @error('username') border-red-500 @enderror"
                                                        name="username"
                                                        id="username"
                                                        placeholder="" required>

                                                @error('username') <div class="text-red">{{ $message }}</div> @enderror
                                            </div>


                                                <div class="form-group">
                                                    <label><i class="icon_lock"></i> Créer un mot de passe *</label>

                                                    <input
                                                            type="password"
                                                            name="psw"
                                                            id="password1"
                                                            class="form-control @error('psw') border-red-500 @enderror"
                                                            placeholder="" required>

                                                            @error('psw') <div class="text-red">{{ $message }}</div> @enderror
                                                </div>

                                            <label><i class="icon-home"></i> Ville</label>
                                                <div class="row no-gutters">

                                                    @if ($towns_and_countries->count() > 0)

                                                    <div class="col-6 pr-1">

                                                        <div class="form-group">

                                                            <select name="town" id="town" onchange="changephonecode()" class="form-control">

                                                                @foreach ($towns_and_countries as $town_and_country)

                                                                <option value="{{ $town_and_country->phonecode }}" selected>{{ $town_and_country->t_name }}</option>

                                                                @endforeach

                                                            </select>

                                                            <input type="hidden" class="form-control" name="ville" id="ville" value="">

                                                        </div>
                                                    </div>
                                                    <div class="col-6 pl-1">
                                                        <div class="form-group">
                                                            <input
                                                                    type="text"
                                                                    name="phonecode"
                                                                    id="phonecode"
                                                                    class="form-control"
                                                                    value=""
                                                                    placeholder="Téléphone" required>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>

                                                <div class="row no-gutters">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label><i class="icon-gmail"></i> Email</label>
                                                            <input
                                                                    type="text"
                                                                    name="email"
                                                                    class="form-control @error('email') border-red-500 @enderror"
                                                                    placeholder="Email" required>
                                                                    @error('email') <div class="text-red">{{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                <!-- /row -->
                                                </div>

                                            <div class="form-group">
                                                <label class="container_check">Se souvenir de moi</a>
                                                    <input type="checkbox" name="remember">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn_1"><i class="icon-login"></i> Valider</button>
                                            </div>
                                        </div>
                                        <!-- /form_container -->
                                    </form>
                                    </div>
                                    <!-- /box_account -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <img class="Mcsimg" src="{{    asset("image/man.png")    }}" alt="" style="height: 100px;margin-left: 90px;">
                                    <ul class="list_ok">
                                        <li>Un seul compte pour tous les services de Mcs Group</li>
                                        <li></li>
                                        <li>Achetez des produits haut de gamme</li>
                                        <li></li>
                                        <li>Béneficiez de nos services à couper le souffle !</li>
                                    </ul>

                                </div>



                            </div>

                          </div>
                            <!-- /tab_2 -->

                        </div>
                        </div>
                        <!-- /step -->
                    </div>
                        </div>
                    <!-- /row -->


                </div>
            </div>
            <!-- /row -->
            </div>
            <!-- /container -->
        </main>
        <!--/main-->


@component('components.footer')
@endcomponent

        <div id="toTop"></div><!-- Back to top button -->


</div>

@endsection
