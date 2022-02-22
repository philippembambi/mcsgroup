@inject('basket', App\Utilities\MyBasket::class)
@inject('purchase', App\Utilities\Purchase::class)

<header class="header_in is_sticky menu_fixed" style="height: 97px;">
    <div id="logo">
        <a href="{{ route("index") }}" title="Votre partenaire business" style="margin-left: 5px;">
            <strong style="height: 120px;font-family:persofont;font-size: 35px;">Mcs Group</strong>

            <div class="main_title_2">
				<span style="width: 200px;"><em></em></span>
                <h5 style="margin-top: 2%;font-family: costafont;color: rgb(139, 138, 138);font-size: 14px;">Votre partenaire business</h5>
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

    <a href="{{   route("basket.show") }}" class="btn_mobile" style="float: right;margin-right: 3%;">
        <div class="hamburger">
            <div class="hamburger-box">
                <div class="fa fa-shopping-basket" style="font-size: 20px;"><sup style="color: black;font-size;font-weight: bold;">{{  $basket->countItems() }}</sup></div>
            </div>
        </div>
    </a>

    <nav id="menu" class="main-menu">
        <ul>
            <li><span><a href="#0" style="font-weight: bold;font-size: 16px;"><i class="fa fa-ellipsis-v" style="color:rgb(197, 6, 6);"></i>&nbsp;&nbsp; Index</a></span>
                <ul>
                    <li><a href="{{ route("index") }}">Page d'accueil</a></li>
                    <li><a href="">Mcs IT</a></li>
                    <li><a href="">Shop Mcs</a></li>
                    <li><a href="">Point Com Mcs</a></li>
                    <li><a href="">Mcs Prod RDC & France</a></li>
                    <li><a href="">Loc Mcs</a></li>
                    <li><a href="">Mcs Invest</a></li>
                </ul>
            </li>

            <li><span><a href="#2" style="font-weight: bold;font-size: 16px;"><i class="fa fa-bars" style="color:rgb(197, 6, 6);"></i>&nbsp;&nbsp; Activités</a></span>
                <ul>
                    <li><a href="">Ventes des consommables informatiques</a></li>
                    <li><a href="">Formations sur demande</a></li>
                    <li><a href="">Production audio-visuelle</a></li>
                    <li><a href="">Communication digitale</a></li>
                </ul>
            </li>
            <li><span><a href="{{   route("basket.show") }}" style="font-weight: bold;font-size: 16px;"><i class="fa fa-shopping-basket" style="color:rgb(197, 6, 6);"></i><sup style="font-size: 16px;color:rgb(197, 6, 6);">{{  $basket->countItems() }}</sup> Mon panier</a></span> </li>
            <li><span><a href="{{   route("basket.purchases") }}" style="font-weight: bold;font-size: 16px;"><i class="fa fa-shopping-bag" style="color:rgb(197, 6, 6);"></i><sup style="font-size: 16px;color:rgb(197, 6, 6);">{{  $purchase->countPurchases() }}</sup> Mes achats</a></span> </li>
            @auth

            <li><span><a href="#" style="font-weight: bold;font-size: 16px;"><i class="fa fa-user" style="color:rgb(197, 6, 6);"></i>&nbsp;&nbsp; <?php echo str_replace("gmail.com", " ", auth()->user()->email); ?></a></span>
                <ul>
                    <li><a href="{{ route("user.logout") }}"> <i class="fa fa-sign-in" style="color:rgb(197, 6, 6);"></i> Déconnexion</a></li>
                </ul>
            </li>
             @endauth

            @guest
            <li><span><a href="{{  route("user.authenticate")  }}" style="font-weight: bold;"><i class="fa fa-sign-in"></i> &nbsp;&nbsp; S'identifier</a></span></li>
            @endguest

        </ul>
    </nav>
</header>
