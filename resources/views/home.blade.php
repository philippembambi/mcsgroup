@extends('layouts.app', ['title' => "Mcs Groupe - Les meilleurs services It de votre choix"])

@section('content')

<style>
     .advertimage{
        height: 470px;
        object-fit: cover;
        }

        #adescrip{
            margin-left: -30%;
        }

    #mcsGraph{
        height: 350px;
        margin-left: 22%;
    }
      .arTitle{
        font-size: 22px;
    }
    @media (max-width: 576px)  {
        #mcsGraph{
        height: 300px;
        margin-left: 2%;
    }
        #mcsicon{
            font-size: 17px;
        }
        #mcsapp{
            margin-top: -70%;
            margin-bottom: 70%;
        }
        .moreArticleDetails{
            display:none;
        }
        .lessArticleDetails{
            display:block;
        }
    #extraArticleContainer{
        margin-top: -97%;
        margin-bottom: 85%;
    }
    #extraArticleContainer2{
        margin-top: -80%;
        margin-bottom: 85%;
    }
    .extraArtcile{
        width: 50%;
    }
    .arTitle{
        font-size: 13px;
    }
    .extraArtcile img{
        object-fit:fill;
        width: 100%;
    }
    }
    @media (min-width: 767px)  {
        .moreArticleDetails{
            display:block;
        }
        .lessArticleDetails{
            display: none;
        }
    }
    @media (max-width: 1023px)  {
        #mcsGraph{
        height: 300px;
        margin-left: 15%;
        }
    }
    @media (max-width: 870px)  {
        #mcsGraph{
        height: 300px;
        margin-left: 12%;
    }
    }
    @media (max-width: 767px)  {

        .advertimage{
        height: 400px;
        object-fit: cover;
        }
        #adescrip{
            margin-left: -5%;
        }


        #mcsGraph{
        height: 300px;
        margin-left: 2%;
        }
        #mcsapp{
            margin-bottom: 70%;
        }
        .moreArticleDetails{
            display:none;
        }
        .lessArticleDetails{
            display:block;
        }
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

<div id="page">

    @component('components.fixed-header')
    @endcomponent

    <main class="pattern" id="main">

		<div id="carousel_in" class="owl-carousel owl-theme">

            @if ($ads->count() > 0)
                @foreach ($ads as $item)
                    <div class="item">

                        <div style="position: relative; height: 500px;">
                            <div style="position: absolute; z-index: 1;">
                                <a href="ads/{{ $item->id }}">
                                <img class="advertimage" src="{{ asset("uploadedFiles/$item->image_1") }}">
                                </a>
                            </div>
                            <div style="position: absolute;top: 20%;z-index: 2;width: 100%;">

                               <div class="main_categories">
                                    <ul class="clearfix" style="height: 50px;">
                                        <li>
                                            <a href="ads/{{ $item->id }}">
                                                <i id="mcsicon" class="{{    $item->icon }}"></i>
                                            </a>
                                        </li>

                                        <a href="ads/{{ $item->id }}" style="color: black;font-family:costafont;" id="adescrip">
                                             <?php  echo substr($item->tag, 0, 40);  ?>
                                        </a>
                                    </ul>
                            </div>

                            </div>

                        </div>

                    </div>
                @endforeach
            @endif

        </div>

    <div class="container">
        @component('components.search-bar')
        @endcomponent
    </div>

		<!-- /main_categories -->
		<div class="container margin_80_55" id="poles">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Pôles</h2>
				<p>Les meilleurs services que vous offrent Mcs Groupe</p>
			</div>
			<div class="row">

                <div class="col-lg-6">
                    <div class="strip list_view">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <figure>
                                    <a href="{{ route("home") }}">
                                        <img
                                                src="image/ads1.jpg"
                                                class="pole" alt="" style="">
                                                <div class="read_more"><span>Plus d'informations</span>
                                                </div></a>
                                    <small>High-tech</small>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="{{ route("home") }}" class="wish_bt">
                                        <i class="icon-windows" style="font-size: 18px;"></i></a>
                                    <h3><a href="{{ route("home") }}" style="font-family: costafont;">MCS IT</a></h3>
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
                                    <a href="{{ url("mcsProd/index") }}">
                                        <img
                                                src="image/woman-1446557_1920.jpg"
                                                class="pole" alt="">
                                                <div class="read_more"><span>Plus d'informations</span>
                                                </div></a>
                                                <small>Audio-visuel</small>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="{{ url("mcsProd/index") }}" class="wish_bt">
                                        <i class="icon-videocam-5" style="font-size: 18px;"></i></a>
                                    <h3><a href="{{ url("mcsProd/index") }}" style="font-family: costafont;">MCS PROD</a></h3>
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
                                    <a href="{{ route('feedback.index') }}">
                                        <img
                                                src="image/online-6404937_1920.jpg"
                                                class="pole" alt="">
                                                <div class="read_more"><span>Plus d'informations</span>
                                                </div></a>
                                                <small>Online Shop</small>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="{{ route('feedback.index') }}" class="wish_bt">
                                        <i class="icon-shop" style="font-size: 18px;"></i></a>
                                    <h3><a href="{{ route('feedback.index') }}" style="font-family: costafont;">MCS SHOP</a></h3>
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
                                    <a href="{{ route('feedback.index') }}">
                                        <img
                                                src="image/online.png"
                                                class="pole" alt="">
                                                <div class="read_more"><span>Plus d'informations</span>
                                                </div></a>
                                                <small>Business</small>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="{{ route('feedback.index') }}" class="wish_bt">
                                        <i class="icon-globe-1" style="font-size: 18px;"></i></a>
                                    <h3><a href="{{ route('feedback.index') }}" style="font-family: costafont;">MCS POINT COM</a></h3>
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

        <div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Collection Spéciale</h2>
				<p style="font-size: 18px;">Profitez de nos prix promotionnels pour ce mois !</p>
			</div>

			<div id="reccomended" class="owl-carousel owl-theme">


                @if ($articles->count() > 0)
			    @foreach ($articles as $article)


				<div class="item">

					<div class="strip grid">
                        <div>

						<figure>
							 <div class="caption-content">

							<a href="article/{{ $article->id }}">
								<img src="{{  asset("uploadedFiles/$article->picture_1") }}" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Zoom</span></div>
                            </a>
                            </div>
                            <a href="article/{{ $article->id }}">
							<small> {{$article->tag}}</small>
                            </a>
						</figure>

                        <div class="moreArticleDetails wrapper">
                            <h3><a href="article/{{ $article->id }}">{{substr($article->tag, 0, 20)}}</a></h3>
                            <p>{{   substr($article->desc, 0, 60).'...'  }}</p>
                            <a class="address" href="article/{{ $article->id }}">Plus de détails</a>
                        </div>
                        <ul class="moreArticleDetails">
                            <li><a href="article/{{ $article->id }}"><span class="loc_open">Détails</span></a></li>
                            <li><div class="score"><strong>{{ $article->price }} $</strong></div></li>
                        </ul>

                    </div>
                    	<ul class="lessArticleDetails">
                            <li>
                                    <a style="text-align:center;" href="article/{{ $article->id }}">{{ substr($article->tag, 0, 16) }}</a>
                            </li>
                            <li>
                                <a data-effect="mfp-zoom-in"  href="article/{{ $article->id }}">
                                    <span class="loc_open"> Détails</span>
                                </a>
                            </li>
                           
                            <br>
						</ul>
					</div>

				</div>

                @endforeach
                @endif

			</div>
			<!-- /carousel -->
<div class="container" id="extraArticleContainer">

    <div class="main_title_2">
        <span><em></em></span>
        <h2>Collection {{ $randomOrdi[0]->name }}</h2>
        <p style="font-size: 18px;">Le quel des {{ $randomOrdi[0]->name }} vous intéresse ?</p>
    </div>

    <div class="row">
            @if ($randomOrdi->count() > 0)
            @foreach ($randomOrdi as $ordi)
            <div id="" class="col-lg-3 col-md-6 col-sm-6 col-xs-6 extraArtcile">
                <a class="box_topic" href="article/{{ $ordi->id }}">
                    <span>
                        <img src="./uploadedFiles/{{  $ordi->picture_1 }}"
                                alt="" style="height: 150px;">
                    </span>

                    <h4 class="arTitle">{{  substr($ordi->tag, 0, 21)    }}</h4>
                     <p class="artDesc">
                         {{ substr($ordi->desc, 0, 40)." ..."    }}
                     </p>
                </a>
            </div>
            @endforeach
            @endif
        </div>

        <div class="alert alert-success" role="alert">
            <strong><i class="icon-th-4" style="font-size: 25px;"></i></strong> <a href="{{ route('software.index') }}" style="font-size: 15px;text-align: center;color: black;">Commander un logiciel ou un site web sur-mesure adapté à votre besoin spécifique en un clic !</a>
        </div>

    </div>


<div class="container" id="extraArticleContainer2">

    <div class="row">
            @if ($randomComputer->count() > 0)
            @foreach ($randomComputer as $computer)
            <div id="" class="col-lg-4 col-md-6 col-sm-6 col-xs-6 extraArtcile">
                <a class="box_topic" href="article/{{ $computer->id }}">
                    <span>
                        <img src="./uploadedFiles/{{  $computer->picture_1 }}"
                                alt="" style="height: 150px;">
                    </span>

                    <h4 class="arTitle">{{  $computer->tag    }}</h4>
                     <p class="artDesc">
                         {{ substr($computer->desc, 0, 40)." ..."    }}
                     </p>
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </div>

			<!-- /container -->
		</div>


        <div class="container" id="mcsapp">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>McsApp bientôt diponible</h2>
				<p>Votre partenaire business depuis votre smartphone.</p>
			</div>
			<div class="row justify-content-center text-center">
				<div class="col-md-6">
					<img src="img/mobile.svg" alt="" class="img-fluid add_bottom_45">
					<div class="app_icons">
						<a href="#0" class="pr-lg-2"><img src="{{   asset("img/app_android.svg")    }}" alt=""></a>
						<a href="#0" class="pl-lg-2"><img src="{{   asset("img/app_apple.svg")    }}" alt=""></a>
					</div>
					<div class="add_bottom_15"><small>* A télécharger depuis appstore ou google store.</small></div>
				</div>
			</div>

            <div class="alert alert-info" role="alert">
                <strong><i class="icon-graduation-cap" style="font-size: 25px;"></i></strong> <a href="{{ route('training.index') }}" style="font-size: 15px;text-align: center;color: black;">Inscrivez-vous à nos formations professionnelles sur demande et par sessions périodiques. Découvrez ce que vous pourriez apprendre !</a>.
            </div>
		</div>

        <div class="container-fluid" id="autres_articles">

                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Collection spéciale pour vous !</h2>
                    <p style="font-size: 18px;">L'univers de vos besoins</p>
                </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <ul class="menu_list">

                        @if ($someArticles->count() > 0)
                        @foreach ($someArticles as $article)

                        <a href="article/{{ $article->id }}">
                        <li>

                             <div class="thumb">
                                <img src="{{  asset("uploadedFiles/$article->picture_1") }}" alt="">

                                </div>

                            <a href="article/{{ $article->id }}">
                            <h6>{{$article->tag}} <span>{{$article->price}} $</span></h6>
                             </a>

                             <a href="article/{{ $article->id }}">

                             <p>
                                <?php echo substr($article->desc, 0, 80)." ...";  ?>
                             </p>
                             </a>
                        </li>
                    </a>
                        @endforeach

                        @endif
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <ul class="menu_list">

                        @if ($otherArticles->count() > 0)
                        @foreach ($otherArticles as $article)


                        <li>
                             <div class="thumb">
                                <a href="article/{{ $article->id }}">
                               <img src="{{  asset("uploadedFiles/$article->picture_1") }}" alt="">
                                </a>
                            </div>
                            <a href="article/{{ $article->id }}">
                            <h6>{{$article->tag}} <span>{{$article->price}} $</span></h6>
                            </a>
                            <a href="article/{{ $article->id }}">

                            <p>
                                <?php echo substr($article->desc, 0, 80)." ...";  ?>

                            </p>
                            </a>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <ul class="menu_list">

                        @if ($otherArticles->count() > 0)
                        @foreach ($otherArticles as $article)

                        <li>
                             <div class="thumb">
                                <a href="article/{{ $article->id }}">
                                <img src="{{  asset("uploadedFiles/$article->picture_2") }}" alt="">
                                </a>
                            </div>
                            <a href="article/{{ $article->id }}">
                            <h6>{{$article->tag}} <span>{{$article->price}} $</span></h6>
                            </a>
                            <a href="article/{{ $article->id }}">
                            <p>
                                <?php echo substr($article->desc, 0, 80)." ...";  ?>

                            </p>
                            </a>
                        </li>
                        @endforeach

                        {{ $otherArticles->links() }}
                        @endif

                    </ul>
                </div>

            </div>
            <!-- /row -->
        </div>
<br>


<img src="{{ asset("image/poles.PNG")   }}" class="img-thumbnail" alt="" id="mcsGraph">
<br><br>
        <div class="call_section pattern">
			<div class="wrapper">
				<div class="container margin_80_55">
					<div class="main_title_2">
                        <span><em></em></span>
						<h2>McsGroupe</h2>
						<p>Nous sommes une société multi-services pour l'univers de vos besoins.</p>

                        <p style="color: #eec855;">
                            Que faisons-nous grosso modo ?
                        </p>
					</div>
					<div class="row">

						<div class="col-md-4">
							<div class="box_how">
								<i class="icon-basket-1 fa-2x"></i>
								<h3>Ventes des produits</h3>
								<p>
                                    Achetez des matériels informatiques (Ordinateurs, accessoires etc.);
                                    Visitez notre maison d'habillement en ligne pour décrocher la tenue qui vous capte.
                                </p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="icon-cog-alt"></i>
								<h3>Services digitaux</h3>
								<p>
                                    A vous de tenter notre professionalisme sur :
                                       La production audio-visuelle et graphique; la conception des applications sur-mesure; la couverture des événements par des prises des vues.

                                </p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="icon-network"></i>
								<h3>Accompagnement numérique</h3>
								<p style="text-align: center;">
                                    Nous vous proposons des formations professionnelles dans les domaines informatiques d'actualités (marketing digital, réseaux, bureautique à tous les niveaux, formations sur demande, programmations etc.), le consulting ainsi que d'autres.
                                </p>
							</div>
						</div>
					</div>
					<!-- /row -->
					<p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="{{  route("user.authenticate")  }}" class="btn_1 rounded">Rejoignez-nous</a></p>
				</div>
			</div>
			<!-- /wrapper -->
		</div>



		<!--/call_section-->


		<!-- /container -->
	</main>

    @component('components.footer')
    @endcomponent

    <div id="toTop"></div><!-- Back to top button -->
</div>


@endsection
