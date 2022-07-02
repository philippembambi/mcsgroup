@inject('basket', App\Utilities\MyBasket::class)
@inject('purchase', App\Utilities\Purchase::class)

<style>
    #logo{
        margin-top: -1.2%;
    }
    @media (max-width: 400px)  {
        #logo{
            margin-top: -1.5%;
        }
    }
</style>
<header class="header_in is_sticky menu_fixed" style="height: 70px;">
    <div id="logo">
        <a href="{{ route("home") }}" title="Votre partenaire business" style="margin-left: 5px;">
            <img src="{{ asset('image/logo1.png')}}" style="height: 50px;" alt="">
            <div class="main_title_2">
				<span style="width: 200px;"><em></em></span>
                <h5 style="font-family: costafont;color: rgb(139, 138, 138);font-size: 14px;">Votre partenaire business</h5>
			<br>
            </div>
        </a>
    </div>

    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>

    <a href="{{   route('basket.show') }}" class="btn_mobile" style="float: right;margin-right: 3%;">
        <div class="hamburger">
            <div class="hamburger-box">
                <div class="fa fa-shopping-basket" style="font-size: 20px;"><sup style="color: black;font-size;font-weight: bold;">{{  $basket->countItems() }}</sup></div>
            </div>
        </div>
    </a>

    <nav id="menu" class="main-menu">
        <ul>
            <li><span><a href="#0" style="font-weight: bold;font-size: 16px;"><i class="fa fa-ellipsis-v menu-icon"></i>&nbsp;&nbsp; Index</a></span>
                <ul>
                    <li><a href="{{ route("home") }}">Page d'accueil</a></li>
                    <li><a href="{{ url("mcsIt") }}">Index Mcsgroupe</a></li>
                    <li><a href="">Mcs IT</a></li>
                    <li><a href="{{ url("mcsProd/index") }}">Mcs Prod</a></li>
                    <li><a href="">Mcs Point Com</a></li>
                </ul>
            </li>

            <li><span><a href="#2" style="font-weight: bold;font-size: 16px;"><i class="fa fa-bars menu-icon"></i>&nbsp;&nbsp; Activités</a></span>
                <ul>
                    @if (Route::is("home") || Route::is("./"))
                    <li><a href="./article/category/{{2}}">Ventes des consommables informatiques</a></li>
                    @else
                    <li><a href="../article/category/{{2}}">Ventes des consommables informatiques</a></li>
                    @endif
                    <li><a href="{{ route('training.index') }}">Formations sur demande</a></li>
                    <li><a href="{{ route('software.index') }}">Logiciel et site web pour vous</a></li>
                    <li><a href="{{ route('feedback.index') }}">Accompagnement numérique</a></li>
                </ul>
            </li>
            <li><span><a href="{{   route("basket.show") }}" style="font-weight: bold;font-size: 16px;"><i class="fa fa-shopping-basket menu-icon"></i><sup style="font-size: 16px;color:rgb(197, 6, 6);">{{  $basket->countItems() }}</sup> Mon panier</a></span> </li>
            <li><span><a href="{{   route("basket.purchases") }}" style="font-weight: bold;font-size: 16px;"><i class="fa fa-shopping-bag menu-icon"></i><sup style="font-size: 16px;color:rgb(197, 6, 6);">{{  $purchase->countPurchases() }}</sup> Mes achats</a></span> </li>
            @auth

            <li><span><a href="#" style="font-weight: bold;font-size: 16px;"><i class="fa fa-user menu-icon"></i>&nbsp;&nbsp; {{auth()->user()->fullname}}</a></span>
                <ul>
                    <li><a href="{{ route("user.logout") }}"> <i class="fa fa-sign-in menu-icon"></i> Déconnexion</a></li>
                </ul>
            </li>
             @endauth

            @guest
            <li><span><a href="{{  route("user.authenticate")  }}" style="font-weight: bold;"><i class="fa fa-sign-in"></i> &nbsp;&nbsp; S'identifier</a></span></li>
            @endguest

        </ul>
    </nav>
</header>
