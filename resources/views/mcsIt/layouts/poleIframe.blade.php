<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Mcs Groupe : Votre partenaire business">
        <meta name="keywords" content="Mcs Groupe">

        <link rel="shortcut icon" href="{{ asset('image/logo_groupemcs.png') }}" type="image/png">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link href="{{  asset('css/tables.css')   }}" rel="stylesheet">

    </head>
    
<style>
    @media (max-width: 767px)  {
    .main_categories {
        width: 90%;
        margin-left: 4%;
        font-size: 11px;
    }
    .pole{
        max-height: 150px;
        max-width: 50%;
        margin-top: -13%;
    }
    .col-lg-5{
        height: 170px;
    }
    .col-lg-6{
        width: 85%;
        margin-left: 8%;
    }
    .col-lg-7{
        margin-top: -12%;
    }

    }

</style>

    <body>

<div id="page">
    <main>

        <!-- /main_categories -->
		<div class="container margin_80_55" id="poles" style="margin-top: -4%">
			<div class="main_title_2">
				<h2>Pôles</h2>
				<p>Les meilleurs services que vous offrent Mcs Groupe</p>
			</div>
			<div class="row">

                <div class="col-lg-6">
                    <div class="strip list_view">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <figure>
                                <a href="{{ url("home") }}" target="_blank">
                                        <img
                                                src="{{ asset("image/ads1.jpg") }}"
                                                class="pole" alt="" style="">
                                                <div class="read_more"><span>Plus d'informations</span>
                                                </div></a>
                                    <small>High-tech</small>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="{{ url("home") }}" target="_blank" class="wish_bt">
                                        <i class="icon-windows" style="font-size: 18px;"></i></a>
                                    <h3><a href="{{ url("home") }}" target="_blank" style="font-family: costafont;color: #f89406;">MCS IT</a></h3>
                                    <p class="">
                                        <br>
                                        <i class="icon_info_alt"></i>
                                        Acheter des produits informatiques (neufs ou recondionnés),
                                        Suivez une formation dans tous les domaines de l'informatique
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="strip list_view">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <figure>
                                    <a href="{{ url("mcsProd/index") }}" target="_blank">
                                        <img
                                                src="{{ asset("image/woman-1446557_1920.jpg") }}"
                                                class="pole" alt="">
                                                <div class="read_more"><span>Plus d'informations</span>
                                                </div></a>
                                                <small>Audio-visuel</small>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="{{ url("mcsProd/index") }}" target="_blank" class="wish_bt">
                                        <i class="icon-videocam-5" style="font-size: 18px;"></i></a>
                                    <h3><a href="{{ url("mcsProd/index") }}" target="_blank" style="font-family: costafont;color: #f89406;">MCS PROD</a></h3>
                                    <p>
                                        <br>
                                        <i class="icon_info_alt"></i>
                                    Production audio-visuel et prise des vues post-production (montage vidéo et sonore)
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="strip list_view">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <figure>
                                    <a href="{{ route('feedback.index') }}" target="_blank">
                                        <img
                                                src="{{ asset("image/online-6404937_1920.jpg") }}"
                                                class="pole" alt="">
                                                <div class="read_more"><span>Plus d'informations</span>
                                                </div></a>
                                                <small>Online Shop</small>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="{{ route('feedback.index') }}" target="_blank" class="wish_bt">
                                        <i class="icon-shop" style="font-size: 18px;"></i></a>
                                    <h3><a href="{{ route('feedback.index') }}" target="_blank" style="font-family: costafont;color: #f89406;">MCS SHOP</a></h3>
                                    <p>
                                        <i class="icon_info_alt"></i>
                                            Utiliser des services E-commerce en ligne made Mcs Groupe. Des solutions applicatives idéales pour vos activités commerciales.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="strip list_view">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <figure>
                                    <a href="{{ route('feedback.index') }}" target="_blank">
                                        <img
                                                src="{{ asset("image/online.png") }}"
                                                class="pole" alt="">
                                                <div class="read_more"><span>Plus d'informations</span>
                                                </div></a>
                                                <small>Business</small>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="{{ route('feedback.index') }}" target="_blank" class="wish_bt">
                                        <i class="icon-globe-1" style="font-size: 18px;"></i></a>
                                    <h3><a href="{{ route('feedback.index') }}" target="_blank" style="font-family: costafont;color: #f89406;">MCS POINT COM</a></h3>
                                    <p>
                                        <i class="icon_info_alt"></i>
                                        Découvrez le meilleur de la communication digitale et des stratégies marketing pour vos affaires
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

			</div>
			<!-- /row -->
        </div>
    </main>
</div>

    </body>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/common_scripts.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('js/pw_strenght.js') }}"></script>
    <script src="{{ asset('assets/validate.js') }}"></script>
    <script src="{{ asset('js/jquery.cookiebar.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/modernizr.js')}}"></script>
    <script src="{{ asset('js/modernizr_tables.js')    }}"></script>
    <script src="{{ asset('js/tables_func.js')    }}"></script>
  	<!-- SPECIFIC SCRIPTS -->
	<script>
		$(document).ready(function() {

            getTerminal();
        });
	</script>


	<script>
		$('#carousel_in').owlCarousel({
		   center: true,
		   items:2,
           autoplay: true,
		   loop:true,
		   margin:3,
		   responsive:{
			   320:{
				   items:2
			   },
				800:{
				   items:3
			   }
		   }
	   });
	   </script>

	<script>
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>

</html>
