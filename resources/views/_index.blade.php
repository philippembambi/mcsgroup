@extends('layouts.app', ['title' => "Mcs Group - Page d'acceuil"])

@section('content')

<style>
      .arTitle{
        font-size: 22px;
    }
    @media (max-width: 576px)  {
        #mcsicon{
            font-size: 12px;
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
    @media (max-width: 767px)  {
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
    .advertimage{
        height: 300px;
        object-fit: cover;

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

    <main class="pattern">

		<div id="carousel_in" class="owl-carousel owl-theme">

            @if ($ads->count() > 0)
                @foreach ($ads as $item)
                    <div class="item">

                        <div style="position: relative; height: 500px;">
                            <div style="position: absolute; z-index: 1;">
                                <a href="ads/{{ $item->id }}">
                                <img class="advertimage" src="{{ asset("uploadedFiles/$item->image_1") }}" style="height: 440px;" >
                                </a>
                            </div>
                            <div style="position: absolute;top: 22%;z-index: 2;width: 100%;">

                               <div class="main_categories">
                                    <ul class="clearfix" style="height: 60px;">
                                        <li>
                                            <a href="ads/{{ $item->id }}">
                                                <i id="mcsicon" class="{{    $item->icon }}"></i>
                                            </a>
                                        </li>

                                        <a href="ads/{{ $item->id }}" style="color: black;font-family:costafont;">
                                            <p style="text-align: center;">
                                                <?php  echo substr($item->tag, 0, 40)."...";  ?>
                                            </p>
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
				<p>Les meilleurs services de votre choix que vous offrent Mcs Groupe</p>
			</div>
			<div class="row">

                <div class="col-lg-6">
                    <div class="strip list_view">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <figure>
                                    <a href="{{ route("mcsIt.index") }}">
                                        <img
                                                src="image/businessman-3300891_1920.jpg"
                                                class="pole" alt="" style="">
                                                <div class="read_more"><span>Plus d'informations</span>
                                                </div></a>
                                    <small>High-tech</small>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="{{ route("mcsIt.index") }}" class="wish_bt">
                                        <i class="icon-windows" style="font-size: 18px;"></i></a>
                                    <h3><a href="{{ route("mcsIt.index") }}" style="font-family: costafont;">MCS IT</a></h3>
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
                                    <a href="#">
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
                                    <a href="#0" class="wish_bt">
                                        <i class="icon-videocam-5" style="font-size: 18px;"></i></a>
                                    <h3><a href="#" style="font-family: costafont;">MCS PROD</a></h3>
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
                                    <a href="#">
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
                                    <a href="#0" class="wish_bt">
                                        <i class="icon-shop" style="font-size: 18px;"></i></a>
                                    <h3><a href="#" style="font-family: costafont;">MCS SHOP</a></h3>
                                    <p>
                                        <i class="icon_info_alt"></i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet recusandae, iste exercitationem doloribus inventore saepe
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
                                    <a href="#">
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
                                    <a href="#0" class="wish_bt">
                                        <i class="icon-globe-1" style="font-size: 18px;"></i></a>
                                    <h3><a href="#" style="font-family: costafont;">MCS POINT COM</a></h3>
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

        <div class="container-fluid margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Collection promotionnelle</h2>
				<p style="font-size: 18px;">Profitez de nos prix promotionnels pour ce mois !</p>
			</div>

			<div id="reccomended" class="owl-carousel owl-theme">


                @if ($articles->count() > 0)
			    @foreach ($articles as $article)

				<div class="item">
					<div class="strip grid">
                        <div class="magnific-gallery">

						<figure>
							 <div class="caption-content">
                                <a href="{{  asset("uploadedFiles/$article->picture_1") }}" data-effect="mfp-zoom-in" class="wish_bt"></a>

							<a href="{{  asset("uploadedFiles/$article->picture_1") }}" data-effect="mfp-zoom-in">
								<img src="{{  asset("uploadedFiles/$article->picture_1") }}" style="object-fit:cover;" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Zoom</span></div>
                            </a>
                            </div>
							<small> {{$article->tag}}</small>
						</figure>

                        <div class="moreArticleDetails wrapper">
                            <h3><a href="detail-restaurant.html">{{$article->tag}}</a></h3>
                            <p>{{   substr($article->desc, 0, 100).'...'  }}</p>
                            <a class="address" href="article/{{ $article->id }}">Plus de détails</a>
                        </div>
                        <ul class="moreArticleDetails">
                            <li><a href="article/{{ $article->id }}"><span class="loc_open">Détails</span></a></li>
                            <li><div class="score"><strong>{{ $article->price }} $</strong></div></li>
                        </ul>

                    </div>
                    	<ul class="lessArticleDetails">
<li></li>
                            <li><a class="address" href="article/{{ $article->id }}"><span class="loc_open">Ouvrir</span></a></li>


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
    </div>


<div class="container" id="extraArticleContainer2">

    <div class="main_title_2">
        <span><em></em></span>
        <h2>{{ $randomComputer[0]->name }}</h2>
        <p style="font-size: 18px;">Que dites vous des {{ $randomComputer[0]->name }} ?</p>
    </div>

    <div class="row">
            @if ($randomComputer->count() > 0)
            @foreach ($randomComputer as $computer)
            <div id="" class="col-lg-4 col-md-6 col-sm-6 col-xs-6 extraArtcile">
                <a class="box_topic" href="article/{{ $ordi->id }}">
                    <span>
                        <img src="./uploadedFiles/{{  $ordi->picture_1 }}"
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
		</div>

        <div class="container" id="autres_articles">

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

        <div class="call_section pattern">
			<div class="wrapper">
				<div class="container margin_80_55">
					<div class="main_title_2">
                        <span><em></em></span>
						<h2>Mcs Groupe</h2>
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
