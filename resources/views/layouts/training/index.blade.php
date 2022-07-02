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
    <br><br>

	<main class="pattern" id="main">
		<div class="container margin_60_35">

            <div class="main_title_2" id="main_title_2">
                <h2>Mcs Formation sur demande</h2>
                <span><em></em></span>
                <p style="font-size: 18px;">Choisissez la formule qui vous convient</p>
            </div>

			<div class="pricing-container cd-has-margins">
			<div class="pricing-switcher">
				<p class="fieldset">
					<input type="radio" name="duration-2" value="monthly" id="monthly-2" onclick="train.switchFormula('Presentiel')" checked>
					<label for="monthly-2">Présentiel</label>
					<input type="radio" name="duration-2" onclick="train.switchFormula('Online')" value="yearly" id="yearly-2">
					<label for="yearly-2">En ligne</label>
					<span class="switch"></span>
				</p>
                <br>
                @guest
                    <span style="color: rgb(206, 9, 9);text-align: center;"><i class="fa fa-info-circle fa-3x"></i> Il semble que vous vous n'êtes pas encore authentifié, veillez vous identifier avant de soumettre une demande de formation</span>
                @endguest
			</div>
			<!--/pricing-switcher -->
			<ul class="pricing-list bounce-invert">
				<li>
					<ul class="pricing-wrapper">
						<li data-type="monthly" class="is-visible">
							<header class="pricing-header">
								<h2>Accélérée</h2>

								<div class="price">
									<span class="currency">Durée</span>
									<span class="price-value">1</span>
									<span class="price-duration">mois</span>
								</div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
									<li><em>Durée max </em> 1 mois</li>
									<li><em>Mode</em> Accéléré</li>
									<li><em>Fréquence</em> 4 jours / 7</li>
									<li><em>Matériel didactique</em> <i class="fa fa-check" style="color: green;"></i></li>
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
								<h2>Accélérée</h2>
								<div class="price">
									<span class="currency">Durée</span>
									<span class="price-value">1</span>
									<span class="price-duration">mois</span>
                                </div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
									<li><em>Durée max </em> 1 mois</li>
									<li><em>Mode</em> Accéléré</li>
									<li><em>Fréquence</em> 5 jours / 7</li>
									<li><em>Matériel didactique</em> <i class="fa fa-times" style="color: red;"></i></li>
								</ul>
							</div>
							<!-- /pricing-body -->
							<footer class="pricing-footer">
                                @auth
                                <a class="select-plan" href="#sign-in-dialog" id="sign-ina" onclick="train.update(2)">Ouvrir</a>
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
								<h2>Populaire</h2>
								<div class="price">
									<span class="currency">Durée</span>
									<span class="price-value">3</span>
									<span class="price-duration">mois</span>
								</div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
									<li><em>Durée max </em> 3 mois</li>
									<li><em>Mode</em> Modéré</li>
									<li><em>Fréquence</em> 3 jours / 7</li>
									<li><em>Matériel didactique</em> <i class="fa fa-check" style="color: green;"></i></li>
								</ul>
							</div>
							<!-- /pricing-body -->
							<footer class="pricing-footer">
                                @auth
                                <a class="select-plan" href="#sign-in-dialog" onclick="train.update(3)" id="sign-inb">Ouvrir</a>
                                @endauth
                                @guest
                                <a class="select-plan" href="{{  route("user.authenticate")  }}">S'identifier</a>
                                @endguest
                            </footer>
						</li>
						<li data-type="yearly" class="is-hidden">
							<header class="pricing-header">
								<h2>Populaire</h2>

								<div class="price">
									<span class="currency">Durée</span>
									<span class="price-value">3</span>
									<span class="price-duration">mois</span>
								</div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
									<li><em>Durée max </em> 3 mois</li>
									<li><em>Mode</em> Modéré</li>
									<li><em>Fréquence</em> 4 jours / 7</li>
									<li><em>Matériel didactique</em> <i class="fa fa-times" style="color: red;"></i></li>
								</ul>
							</div>
							<!-- /pricing-body -->
							<footer class="pricing-footer">
								<a class="select-plan" href="#0">Non disponible</a>
							</footer>
						</li>
					</ul>
					<!-- /cd-pricing-wrapper -->
				</li>
				<li>
					<ul class="pricing-wrapper">
						<li data-type="monthly" class="is-visible">
							<header class="pricing-header">
								<h2>Premium</h2>
								<div class="price">
									<span class="currency">Durée</span>
									<span class="price-value">4</span>
									<span class="price-duration">mois</span>
								</div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
									<li><em>Durée max </em> 4 mois</li>
									<li><em>Mode</em> Tardif</li>
									<li><em>Fréquence</em> 3 jours / 7</li>
									<li><em>Matériel didactique</em> <i class="fa fa-check" style="color: green;"></i></li>
								</ul>
							</div>
							<!-- /pricing-body -->
							<footer class="pricing-footer">
                                @auth
                                <a class="select-plan" href="#sign-in-dialog" onclick="train.update(4)" id="sign-inc">Ouvrir</a>
                                @endauth
                                @guest
                                <a class="select-plan" href="{{  route("user.authenticate")  }}">S'identifier</a>
                                @endguest
                            </footer>
						</li>
						<li data-type="yearly" class="is-hidden">
							<header class="pricing-header">
								<h2>Premium</h2>

								<div class="price">
									<span class="currency">Durée</span>
									<span class="price-value">4</span>
									<span class="price-duration">mois</span>
								</div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
									<li><em>Durée max </em> 4 mois</li>
									<li><em>Mode</em> Tardif</li>
									<li><em>Fréquence</em> 3 jours / 7</li>
									<li><em>Matériel didactique</em> <i class="fa fa-times" style="color: red;"></i></li>
								</ul>
							</div>
							<!-- /pricing-body -->
							<footer class="pricing-footer">
								<a class="select-plan" href="#0">Non disponible</a>
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
                <h4 style="text-align: center;">Formations organisées</h4>
                <br>

				<div class="row">
					<div class="col-md-6">
						<div class="box_faq">
							<i class="ti-world"></i>
							<h4>Téchnologies informatiques</h4>
							<p>Faites une formation impeccable en : Bureautique, Programmation, Administration réseaux, Administration des bases de données et Infographies</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box_faq">
							<i class="ti-bar-chart-alt"></i>
							<h4>Gestion des entreprises</h4>
							<p>Avec le management, marketing relationnel, marketing digital, Community Manager.</p>
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
			<h3>S'inscire à la formation</h3>
		</div>
		<form method="POST" action="{{ route('training.subscribe') }}">
            @csrf
            <input type="hidden" name="formule" id="formule">
			<input type="hidden" name="duree" id="duree">
            <div class="sign-in-wrapper">
				<div class="form-group">
                    <label>Formations disponibles</label>
					<select class="form-control" name="domain" id="trainings" onchange="train.getBranches()">
                        <option value="1">Bureautique</option>
                        <option value="2">Programmation</option>
                        <option value="3">Réseaux Informatiques</option>
                        <option value="4">Administration des bases de données</option>
                        <option value="5">Infographie</option>
                    </select>
				</div>

                <div class="form-group" id="branch_1">
                    <label>Choisir une téchnologie</label>
					<select class="form-control" name="branch" id="branch">
                        <option value="Java">Java Desktop</option>
                        <option value="C#">C# Desktop</option>
                        <option value="Vb">Vb.NET Desktop</option>
                        <option value="C">C & C++</option>
                        <option value="JavaScript">Web JavaScript</option>
                        <option value="PHP">Web PHP core & Frameworks</option>
                        <option value="VueJs">Web 2.0 Vue.js</option>
                    </select>
				</div>

                <div class="form-group" id="branch_2">
                    <label>Choisir une branche IT</label>
					<select class="form-control" name="branch" id="branch">
                        <option value="itgen">IT générale</option>
                        <option value="voip">VOIP</option>
                        <option value="ccna">CCNA 1</option>
                        <option value="domotique">Domotique</option>
                        <option value="videosurveillance">Vidéo surveillance</option>
                    </select>
				</div>

				<div class="form-group">
					<label>Laissez un commentaire !</label>
                    <textarea name="comment" class="form-control" id="" cols="10" rows="4"></textarea>
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
        duration: 0,
        formula: "",
        switchFormula: function(val){
            this.formula = val;
            document.getElementById('formule').value = this.formula;
        },
        update: function(id) {
            this.id = id;
            if(parseInt(this.id) == 1 || parseInt(this.id) == 2)
            {
                this.duration = "1 mois";
            }
            if(parseInt(this.id) == 3)
            {
                document.getElementById('sign-in').click();
                this.duration = "3 mois";
            }
            if(parseInt(this.id) == 4)
            {
                document.getElementById('sign-in').click();
                this.duration = "4 mois";
            }
            document.getElementById('duree').value = this.duration;

        },
        getBranches: function(){
            var select = document.getElementById('trainings');
            if (select.value == "2") {
                document.getElementById("branch_1").style.display = "block";
                document.getElementById("branch_2").style.display = "none";
            }

            if (select.value == "3") {
                document.getElementById("branch_2").style.display = "block";
                document.getElementById("branch_1").style.display = "none";
            }
      }
    }
</script>
</div>

@component('components.footer')
@endcomponent
@endsection
