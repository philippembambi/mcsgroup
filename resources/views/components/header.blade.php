<header class="header menu_fixed" style="height: 80px;">
    <div id="logo">
        <a href="{{ route('home') }}" title="Votre partenaire business">
            <strong style="font-family: persofont;">Mcs Group</strong>
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
    <nav id="menu" class="main-menu">
        <ul>
            <li><span><a href="#0" style="font-weight: bold;"><i class="fa fa-ellipsis-v"></i>&nbsp;&nbsp; Index</a></span>
                <ul>
                    <li><a href="">Mcs IT</a></li>
                    <li><a href="">Shop Mcs</a></li>
                    <li><a href="">Point Com Mcs</a></li>
                    <li><a href="">Mcs Prod RDC & France</a></li>
                    <li><a href="">Loc Mcs</a></li>
                    <li><a href="">Mcs Invest</a></li>
                </ul>
            </li>

            <li><span><a href="#2" style="font-weight: bold;"><i class="fa fa-bars"></i>&nbsp;&nbsp; Activités</a></span>
                <ul>
                    <li><a href="">Ventes des consommables informatiques</a></li>
                    <li><a href="">Formations sur demande</a></li>
                    <li><a href="">Production audio-visuelle</a></li>
                    <li><a href="">Communication digitale</a></li>
                </ul>
            </li>
            <li><span><a href="./panier.html" style="font-weight: bold;"><i class="fa fa-shopping-basket"></i> &nbsp;&nbsp; Mon panier</a></span></li>

            <li><span><a href="#sign-in-dialog" id="sign-in" style="font-weight: bold;"><i class="fa fa-sign-in"></i> &nbsp;&nbsp; S'identifier</a></span></li>
            <li><span><a href="{{  route("user")  }}" style="font-weight: bold;"><i class="fa fa-user"></i> &nbsp;&nbsp; Créer un compte</a></span></li>

        </ul>
    </nav>
</header>
