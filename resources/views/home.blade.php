@extends('layouts.app')

@section('content')

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
                                <img src="{{ asset("image/$item->image_1") }}" style="height: 500px;">
                            </div>
                            <div style="position: absolute;top: 18%;z-index: 2;width: 100%;">

                               <div class="main_categories">
                                    <ul class="clearfix" style="width: 300px;height: 50px;">
                                        <li>
                                            <a href="ads/{{ $item->id }}">
                                                <i class="fa fa-tag fa-1x"></i>
                                            </a>
                                        </li>

                                        <a href="ads/{{ $item->id }}" style="color: black;">
                                            <p style="text-align: justify;">
                                                <?php  echo substr($item->tag, 0, 31)."...";  ?>
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
		<div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Pôles MCS</h2>
				<p>Les meilleurs services de votre choix</p>
			</div>
			<div class="row">

                <div class="col-lg-6">
                    <div class="strip list_view">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <figure>
                                    <a href="#">
                                        <img
                                                src="image/presentation.png"
                                                class="img-fluid" alt="">
                                                <div class="read_more"><span>Plus d'informations</span>
                                                </div></a>
                                    <small>High-tech</small>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="#0" class="wish_bt">
                                        <i class="icon-windows" style="font-size: 18px;"></i></a>
                                    <h3><a href="#">MCS IT</a></h3>
                                    <p>
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
                                                src="img/post_h_2.jpg"
                                                class="img-fluid" alt="">
                                                <div class="read_more"><span>Plus d'informations</span>
                                                </div></a>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="#0" class="wish_bt">
                                        <i class="icon-videocam-5" style="font-size: 18px;"></i></a>
                                    <h3><a href="#">MCS PROD</a></h3>
                                    <p>
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
                                                src="image/ecommerce.jpg"
                                                class="img-fluid" alt="">
                                                <div class="read_more"><span>Plus d'informations</span>
                                                </div></a>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="#0" class="wish_bt">
                                        <i class="icon-shop" style="font-size: 18px;"></i></a>
                                    <h3><a href="#">MCS SHOP</a></h3>
                                    <p>
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
                                                class="img-fluid" alt="">
                                                <div class="read_more"><span>Plus d'informations</span>
                                                </div></a>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <a href="#0" class="wish_bt">
                                        <i class="icon-globe-1" style="font-size: 18px;"></i></a>
                                    <h3><a href="#">MCS POINT COM</a></h3>
                                    <p>
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

		<div class="call_section pattern">
			<div class="wrapper">
				<div class="container margin_80_55">
					<div class="main_title_2">
						<span><em></em></span>
						<h2>Group Mcs</h2>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
					<div class="row">

						<div class="col-md-4">
							<div class="box_how">
								<i class="fa fa-home fa-2x"></i>
								<h3>Kinshasa</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="fa fa-bank"></i>
								<h3>Paris</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="fa fa-globe"></i>
								<h3>Partout ailleurs</h3>
								<p>A Lubumbashi, Goma Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
							</div>
						</div>
					</div>
					<!-- /row -->
					<p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="./account.html" class="btn_1 rounded">Rejoignez-nous</a></p>
				</div>
			</div>
			<!-- /wrapper -->
		</div>

		<div class="container-fluid margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Découvrez plus des produits</h2>
				<p>Faites défiler la bande passante de nos services d'actualité</p>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">

				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="#" class="wish_bt"></a>
							<a href="#">
								<img src="image/IMG-20211109-WA0026.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Voir plus</span></div></a>
							<small>Produits informatiques</small>
						</figure>
						<div class="wrapper">
							<h3><a href="#">Mcs IT</a></h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="">Voir plus</a>
						</div>
						<ul>
							<li><span class="loc_open">En cours</span></li>
							<li><div class="score"><strong>8.9</strong></div></li>
						</ul>
					</div>
				</div>

				<!-- /item -->
				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="detail-restaurant.html" class="wish_bt"></a>
							<a href="detail-restaurant.html"><img src="img/blog1_2.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Voir plus</span></div></a>
							<small>Mcs Prod</small>
						</figure>
						<div class="wrapper">
							<h3><a href="detail-restaurant.html">Production visuelle</a></h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="">Voir plus</a>
						</div>
						<ul>
							<li><span class="loc_closed">Suspendu</span></li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="" class="wish_bt"></a>
							<a href=""><img src="img/hh.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Voir plus</span></div></a>
							<small>Mcs Prod</small>
						</figure>
						<div class="wrapper">
							<h3><a href="">Montez vos vidéos</a></h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_open">En cours</span></li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="#" class="wish_bt"></a>
							<a href="#"><img src="image/iastragan_internet.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Voir plus</span></div></a>
							<small>Mcs IT</small>
						</figure>
						<div class="wrapper">
							<h3><a href="detail-restaurant.html">IT Network</a></h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_open">En cours</span></li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
				</div>

				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="detail-restaurant.html" class="wish_bt"></a>
							<a href="detail-restaurant.html"><img src="image/iastragan_internet.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Voir plus</span></div></a>
							<small>Produits informatiques</small>
						</figure>
						<div class="wrapper">
							<h3><a href="detail-restaurant.html">Mcs IT</a></h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_open">En cours</span></li>
							<li><div class="score"><strong>8.9</strong></div></li>
						</ul>
					</div>
				</div>

			</div>
			<!-- /carousel -->
			<div class="container">
				<div class="btn_home_align"><a href="#" class="btn_1 rounded">Afficher plus</a></div>
			</div>
			<!-- /container -->
		</div>

		<!--/call_section-->


		<div class="main_categories" style="">
			<div class="container">
				<ul class="clearfix">
					<li>
						<a href="#">
							<i class="fa fa-desktop"></i>
							<h3>Mcs IT</h3>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-home"></i>
							<h3>Shop Mcs</h3>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-th-large"></i>
							<h3>Point Com Mcs</h3>
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-tags"></i>
							<h3>Mcs Prod</h3>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-dot-3"></i>
							<h3>Voir plus</h3>
						</a>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /container -->
	</main>

    @component('components.footer')
    @endcomponent

    <div id="toTop"></div><!-- Back to top button -->
</div>

@endsection
