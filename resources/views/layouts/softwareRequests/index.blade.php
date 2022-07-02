@extends('layouts.app', ['title' => "Mcs Groupe - Formation sur demande"])

@section('content')
<style>
    #branch_1{
        display: none;
    }
    #branch_2{
        display: none;
    }
    #main_title_2{
        margin-top: 4%;
    }

    @media (max-width: 767px)  {
        #main_title_2{
        margin-top: 25%;
    }
    }
</style>

<div id="page">
    @component('components.fixed-header')
    @endcomponent

	<main class="pattern" id="main">
		<div class="container margin_60_35">

            <div class="main_title_2" id="main_title_2">
                <h2>Solution informatique sur-mesure</h2>
                <span><em></em></span>
                <p style="font-size: 18px;">On développe pour vous la solution adaptée à votre besoin spécifique</p>
            </div>

			<div class="pricing-container cd-has-margins">
			<div class="pricing-switcher">
				<p class="fieldset">
					<input type="radio" name="category-2" value="monthly" id="monthly-2" onclick="train.switchClientType('Individuel')" checked>
					<label for="monthly-2">Individuel</label>
					<input type="radio" name="category-2" onclick="train.switchClientType('Entreprise')" value="yearly" id="yearly-2">
					<label for="yearly-2">Entreprise</label>
					<span class="switch"></span>
				</p>
                <br>
                @guest
                    <span style="color: rgb(206, 9, 9);text-align: center;"><i class="fa fa-info-circle fa-2x"></i> Il semble que vous vous n'êtes pas encore authentifié, veillez vous identifier avant de soumettre une demande de formation</span>
                @endguest
			</div>
			<!--/pricing-switcher -->
			<ul class="pricing-list bounce-invert">
				<li>
					<ul class="pricing-wrapper">
						<li data-type="monthly" class="is-visible">
							<header class="pricing-header">
								<h2>Site web</h2>

								<div class="price">
									<span class="currency">Static</span>
									<span class="price-value">1</span>
									<span class="price-category">Dynamic</span>
								</div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
									<li><em>E-commerce </em> <i class="fa fa-check" style="color: green;"></i>
									<li><em>E-learning</em> <i class="fa fa-check" style="color: green;"></i></li>
									<li><em>Weblog</em> <i class="fa fa-check" style="color: green;"></i></li>
                                    <li><em>Web</em> Riche, Dynamic, Static & Web Mobile</li>
                                </ul>
							</div>
							<!-- /pricing-body -->
							<footer class="pricing-footer">
                                @auth
                                <a class="select-plan" href="#sign-in-dialog" onclick="train.update(1)" id="sign-in">Ouvrir</a>
                                @endauth
                                @guest
                                <a class="select-plan" href="{{  route("user.authenticate")  }}">S'identifier</a>
                                @endguest
							</footer>
						</li>
						<li data-type="yearly" class="is-hidden">
							<header class="pricing-header">
								<h2>Site Web</h2>
                                <div class="price">
									<span class="currency">Static</span>
									<span class="price-value">1</span>
									<span class="price-category">Dynamic</span>
								</div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
									    <li><em>E-commerce </em> <i class="fa fa-check" style="color: green;"></i>
                                        <li><em>E-learning</em> <i class="fa fa-check" style="color: green;"></i></li>
                                        <li><em>Weblog</em> <i class="fa fa-check" style="color: green;"></i></li>
                                        <li><em>Web</em> Riche, Dynamic, Static & Web Mobile</li>								</ul>
							</div>
							<!-- /pricing-body -->
							<footer class="pricing-footer">
                                @auth
                                <a class="select-plan" href="#sign-in-dialog" onclick="train.update(1)" id="sign-ina">Ouvrir</a>
                                @endauth
                                @guest
                                <a class="select-plan" href="{{  route("user.authenticate")  }}">S'identifier</a>
                                @endguest
                            </footer>
						</li>
					</ul>
					<!-- /pricing-wrapper -->
				</li>
				<li class="popular">
					<ul class="pricing-wrapper">
						<li data-type="monthly" class="is-visible">
							<header class="pricing-header">
								<h2>Logiciel</h2>
								<div class="price">
									<span class="currency">Desktop</span>
									<span class="price-value">2</span>
									<span class="price-category">Web</span>
								</div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
									<li><em>Gestion processus métier</em> <i class="fa fa-check" style="color: green;"></i></li>
									<li><em>ERP</em> <i class="fa fa-check" style="color: green;"></i></li>
                                    <li><em>Autre Gestion</em> <i class="fa fa-check" style="color: green;"></i></li>
									<li><em>Intégration API</em> <i class="fa fa-check" style="color: green;"></i></li>
								</ul>
							</div>
							<!-- /pricing-body -->
							<footer class="pricing-footer">
                                @auth
                                <a class="select-plan" href="#sign-in-dialog" onclick="train.update(2)" id="sign-inb">Ouvrir</a>
                                @endauth
                                @guest
                                <a class="select-plan" href="{{  route("user.authenticate")  }}">S'identifier</a>
                                @endguest
                            </footer>
						</li>
						<li data-type="yearly" class="is-hidden">
							<header class="pricing-header">
								<h2>Logiciel</h2>

								<div class="price">
									<span class="currency">Desktop</span>
									<span class="price-value">2</span>
									<span class="price-category">Web</span>
								</div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
                                    <li><em>Gestion processus métier</em> <i class="fa fa-check" style="color: green;"></i></li>
									<li><em>ERP</em> <i class="fa fa-check" style="color: green;"></i></li>
                                    <li><em>Autre Gestion</em> <i class="fa fa-check" style="color: green;"></i></li>
									<li><em>Intégration API</em> <i class="fa fa-check" style="color: green;"></i></li>
								</ul>
							</div>
							<!-- /pricing-body -->
							<footer class="pricing-footer">
								@auth
                                <a class="select-plan" href="#sign-in-dialog" onclick="train.update(2)" id="sign-inb">Ouvrir</a>
                                @endauth
                                @guest
                                <a class="select-plan" href="{{  route("user.authenticate")  }}">S'identifier</a>
                                @endguest
							</footer>
						</li>
					</ul>
					<!-- /cd-pricing-wrapper -->
				</li>
				<li>
					<ul class="pricing-wrapper">
						<li data-type="monthly" class="is-visible">
							<header class="pricing-header">
								<h2>Mobile</h2>
								<div class="price">
									<span class="currency">Android</span>
									<span class="price-value">3</span>
									<span class="price-category">IOS</span>
								</div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
									<li><em>Multi-plateforme </em> <i class="fa fa-check" style="color: green;"></i></li>
									<li><em>Orientée plateforme</em> <i class="fa fa-check" style="color: green;"></i></li>
									<li><em>Version 4.*</em> <i class="fa fa-check" style="color: green;"></i></li>
									<li><em>Version  5.*</em> <i class="fa fa-check" style="color: green;"></i></li>
								</ul>
							</div>
							<!-- /pricing-body -->
							<footer class="pricing-footer">
                                @auth
                                <a class="select-plan" href="#sign-in-dialog" onclick="train.update(3)" id="sign-inc">Ouvrir</a>
                                @endauth
                                @guest
                                <a class="select-plan" href="{{  route("user.authenticate")  }}">S'identifier</a>
                                @endguest
                            </footer>
						</li>
						<li data-type="yearly" class="is-hidden">
							<header class="pricing-header">
								<h2>Mobile</h2>

								<div class="price">
									<span class="currency">Android</span>
									<span class="price-value">3</span>
									<span class="price-category">IOS</span>
								</div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
									<li><em>Multi-plateforme </em> <i class="fa fa-check" style="color: green;"></i></li>
									<li><em>Orientée plateforme</em> <i class="fa fa-check" style="color: green;"></i></li>
									<li><em>Version 4.*</em> <i class="fa fa-check" style="color: green;"></i></li>
									<li><em>Version  5.*</em> <i class="fa fa-check" style="color: green;"></i></li>
								</ul>
							</div>
							<!-- /pricing-body -->
							<footer class="pricing-footer">
								@auth
                                <a class="select-plan" href="#sign-in-dialog" onclick="train.update(3)" id="sign-inc">Ouvrir</a>
                                @endauth
                                @guest
                                <a class="select-plan" href="{{  route("user.authenticate")  }}">S'identifier</a>
                                @endguest
							</footer>
						</li>
					</ul>
					<!-- /pricing-wrapper -->
				</li>
			</ul>
			<!-- /pricing-list -->
		</div>
		<!-- /pricing-container -->
		</div>
		<!-- /container -->

		<div class="bg_color_1">
			<div class="container margin_60_35">
                <h4 style="text-align: center;">Mcs Software</h4>
                <br>

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="box_faq">
							<i class="ti-world"></i>
							<h4>Web</h4>
							<p>Application et site web Statique, Dynamique, Web riches RIA, & Web Progressif</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="box_faq">
							<i class="icon-chart-pie"></i>
							<h4>Desktop</h4>
							<p>Pour la gestion des processus métiers et de toute autre forme de gestion</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="box_faq">
							<i class="icon-mobile-1"></i>
							<h4>Mobile</h4>
							<p>Dans toutes les versions et plateformes notamment Android et IOS.</p>
						</div>
					</div>

				</div>
				<!-- /row  -->
			</div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->
	</main>
	<!--/main-->

    <!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Passer votre commande</h3>
		</div>
		<form method="POST" action="{{ route('software.submit') }}">
            @csrf
            <input type="hidden" name="client_type" id="client_type">
			<input type="hidden" name="category" id="category">
            <div class="sign-in-wrapper">
				<div class="form-group">
					<label>Expliquer votre commande</label>
                    <textarea name="desc" class="form-control" id="" cols="10" rows="4"></textarea>
				</div>
				<div class="text-center"><input type="submit" value="Envoyer" class="btn_1 full-width"></div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->

        <div id="toTop"></div><!-- Back to top button -->
<script>
    var train = {
        id: 0,
        category: 0,
        client_type: "",
        switchClientType: function(val){
            this.client_type = val;
            document.getElementById('client_type').value = this.client_type;
        },
        update: function(id) {
            this.id = id;
            if(parseInt(this.id) == 1)
            {
                document.getElementById('sign-in').click();
                this.category = "Web";
            }

            if(parseInt(this.id) == 2)
            {
                document.getElementById('sign-in').click();
                this.category = "Desktop";
            }
            if(parseInt(this.id) == 3)
            {
                document.getElementById('sign-in').click();
                this.category = "Mobile";
            }
            document.getElementById('category').value = this.category;
        },
    }
</script>
</div>

@component('components.footer')
@endcomponent
@endsection
