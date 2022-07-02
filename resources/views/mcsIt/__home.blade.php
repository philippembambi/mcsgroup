@extends('mcsIt.app')

@section('content')

<style>
    .section {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    #category_img{
        width: 80px;
        height: 80px;
    }
    #category_img img{
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
    @media (max-width: 767px)  {
        .article-body h3 a{
            font-size: 15px;
        }
        .article-body p{
            font-size: 12px;
        }
        .article .add-to-cart button{
            width: 20%;
            font-size: 9px;
        }
        .article-btns{
            display: inline;
        }
        .article-btns i{
            font-size: 15px;
        }
        .new{
            display: none;
        }
        #hair{
            visibility: hidden;
        }
        .item{
            margin-top: -23%;
            margin-left: 4%;
        }
        .tab-head{
            margin-bottom: 30%;
        }
        .main-slider{
            display: none;
        }
        }

        @media (max-width: 338px)  {
        .item{
            left: -4%;
            width: 80px;
        }
        .item img{
            width: 70%;
        }

        #category_img{
        width: 60px;
        height: 60px;
            }
        #category_img img{
        object-fit: cover;
        height: 100%;
        width: 100%;
            }
        }

        @media (max-width: 405px)  {
        #category_img{
        width: 90px;
        height: 90px;
            }
        #category_img img{
        object-fit: cover;
        height: 100%;
        width: 100%;
            }
            .article-body h3 a{
            font-size: 12px;
        }
        .article-body p{
            font-size: 12px;
        }
        }
</style>
    @component('mcsIt.components.header')
    @endcomponent

    <div id="content" class="col-sm-12">
        <div class="content-top" style="background-color: rgba(0, 0, 0, 0.1);">
            <div class="container">
                <div class="row">
                    <div class="category_list_carousel">

                        @foreach ($ads as $item)

                        <div class="category_list box">
                            <div class="category_img" id="category_img">
                                <a href="#" title="banner1">
                                    <img class="cat_image{{   $item->id    }}" src="{{ asset("uploadedFiles/$item->image_1") }}" alt="">
                                </a>
                            </div>
                            <div class="category_list_inner">
                                <a href="#">{{ substr($item->tag, 0, 20) }}</a>

                            </div>
                        </div>
                    @endforeach


                    </div>
                </div>
            </div>

        </div>


        @component('mcsIt.components.poles')
        @endcomponent

        @component('mcsIt.components.desc')
        @endcomponent
<br>
        <div id="wdservicecmsblock" class="bottom-to-top hb-animate-element">
            <div class="service_container container">
                <div class="service-area-carousel">

                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                        <div class="service-fourth service1">
                            <div class="service-icon icon1"></div>
                            <div class="service-content">
                            <div class="service-heading">Livraison à domicile</div>
                            <div class="service-description">Rapide &amp; à temps</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                        <div class="service-fourth service2">
                            <div class="service-icon icon2"></div>
                            <div class="service-content">
                            <div class="service-heading">Paiement électronique</div>
                            <div class="service-description">Simple et &amp; Sécurisé</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                        <div class="service-fourth service3">
                            <div class="service-icon icon3"></div>
                            <div class="service-content">
                            <div class="service-heading">Service d'urgence</div>
                            <div class="service-description">24 h / 24 &amp; 7 jours / 7</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                        <div class="service-fourth service4">
                            <div class="service-icon icon4"></div>
                            <div class="service-content">
                            <div class="service-heading">Achat via Mcs App</div>
                            <div class="service-description">Télécharger notre application</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="section" id="hair">

            <div id="product-tab">
				<!-- product tab nav -->
				<ul class="tab-nav">
					<li><a data-toggle="tab" href="#tab2">&nbsp;</a></li>
				</ul>
			</div>

            <div class="container">
                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="articles-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="articles-slick" data-nav="#slick-nav-1">

                                    @foreach ($arts as $article)
                                    <div class="article col-lg-3 col-xs-6 col-sm-6 col-md-3">
                                        <div class="article-img">
                                            <img src="{{  asset("uploadedFiles/$article->picture_1") }}" class="imghair" style="height: 150px;" alt="">
                                            <div class="article-label">
                                                <span class="sale">-30%</span>
                                                <span class="new">En vente</span>
                                            </div>
                                        </div>
                                        <div class="article-body">
                                            <p class="article-category">{{ substr($article->processor, 0, 20) }}</p>
                                            <h3 class="article-name"><a href="./article/details/{{   $article->id    }}">{{ substr($article->tag, 0, 16) }}</a></h3>
                                            <h4 class="article-price">{{ (int) $article->price }} $</h4>
                                            <div class="article-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="article-btns">
                                                <button class="add-to-wishlist" onclick="wishlist.add(2)"><i class="fa fa-shopping-bag fa-2x"></i><span class="tooltipp">Ajouter au panier</span></button>
                                               <a class="quick-view" href="./article/details/{{   $article->id    }}">
                                                    <i class="fa fa-eye fa-2x"></i><span class="tooltipp"></span>
                                               </a>

                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-bag"></i> Acheter</button>
                                        </div>
                                    </div>

                                    @endforeach
                                    <!-- /product -->
                                    {{ $arts->links() }}
                                </div>
                                <div id="slick-nav-1" class="articles-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
        </div>

        <div class="hometab box bottom-to-top hb-animate-element">
            <div class="container">
                <div class="row">

                    <div class="tab-head">
                        <div class="hometab-heading box-heading">Meilleure collection</div>
                            <div id="tabs" class="htabs">
                                <ul class='etabs'>
                                    <li class='tab'>
                                        <a href="#tab-latest">Les plus réçents</a>
                                    </li>
                                    <li class='tab'>
                                        <a href="#tab-bestseller">Les plus commandés</a>
                                    </li>
                                    <li class='tab'>
                                        <a href="#tab-special"></a>
                                    </li>
                                </ul>

                            </div>
                    </div>

                    <div class="product-column">
                        <div class="tab-content">
                            <div class="box">
                                <div class="box-content">

                                    <div class="customNavigation">
                                        <a class="fa prev fa-arrow-left">&nbsp;</a>
                                        <a class="fa next fa-arrow-right">&nbsp;</a>
                                    </div>

                                    @if ($bestCollection->count() > 0)
                                        @foreach ($bestCollection as $article)

                                    <div class="slider-item col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image ">
                                                    <a href="./article/details/{{   $article->id    }}">
                                                        <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('32 ');"></button>
                                                        <img style="height: 200px;" src="{{  asset("uploadedFiles/$article->picture_2") }}" title="Samsung 10,000 mAh USB-C Battery Pack" alt="Samsung 10,000 mAh USB-C Battery Pack" class="img-responsive reg-image"/>
                                                        <div class="image_content">
                                                        <img class="img-responsive hover-image" src="{{  asset("uploadedFiles/$article->picture_1") }}" title="Samsung 10,000 mAh USB-C Battery Pack" alt="Samsung 10,000 mAh USB-C Battery Pack"/></div>
                                                    </a>
                                                    <span class="special-tag">40%</span>
                                                </div>
                                                <div class="product-details">
                                                <div class="caption">

                                                    <h4><a href="./article/details/{{   $article->id    }}">{{ substr($article->tag, 0, 13)  }} <p>{{ substr($article->desc, 0, 50)  }}</p></a></h4>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                            &nbsp;<span style="cursor:pointer;" class="total-review32">{{ substr($article->pouce, 0, 10)  }}</span>
                                                    </div>
                                                    <p class="price">
                                                        <span class="price-new">{{ (int) $article->price  }} $</span>
                                                        <span class="price-old">{{ (int) $article->price + 50  }} $</span>
                                                    </p>

                                                        <div class="action">

                                                            <form action="{{ route("basket.add") }}" method="POST" name="">
                                                                @csrf
                                                                <button type="button" class="btn btn-primary btn-lg"><i class="fa fa-shopping-basket"></i></button>

                                                            </form>



                                                        </div>

                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                        @endforeach

                                    @endif

                                </div>
                            </div>
                        </div>


                    </div>

                    <p>
                        {{ $bestCollection->links() }}
                    </p>
                </div>
            </div>

            <div class="container">
                <div id="wdcmssubbanner" class="bottom-to-top hb-animate-element">
                    <div class="wdcmssubbanner">
                    <div class="wdsubbanner-img1 wdsubbanner">
                        <div class="wdright-wdsubbanner-content">
                            <a href="#">
                                <img class="image" title="subbanner-01" src="{{ asset("image/ecommerce2.jpg")  }}" alt="subbanner-01">
                            </a>
                            <div class="subbanner-content left">
                            <div class="title" style="color: black;font-weight: bolder;">Faites vos achats en toute sécurité et</div>
                            <div class="desc" style="color: black;font-weight: bolder;">Obtenez des livraisons depuis chez vous</div>
                            <div class="shop-now btn"><a href="#tabs" class="btn-secondary">Acheter maintenant</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </div>



    <div class="container">
        <div class="row">
            <div id="wdcmstopbanner" class="bottom-to-top hb-animate-element">
                <div class="wdcmstopbanner">

                    <div class="one-third topbanner-part3">
                        <div class="wdtopbanner-img3 wdtopbanner">
                            <div class="wdright-banner-content"><a href="#">
                                <img class="image" title="topbanner-03" src="{{  asset("image/businessman-3300891_1920.jpg")  }}" style="height: 225px;" alt="topbanner-03"> </a>
                                <div class="wdtopbanner-content left">
                                    <div class="label" style="color: black;">PC</div>
                                    <div class="title" style="color: black;">5% de réduction</div>
                                    <div class="toptitle" style="color: black;">Ordinateurs</div>
                                    <div class="offer"><a href="#" class="btn-primary">Découvrir</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="one-third topbanner-part1">
                        <div class="wdtopbanner-img1 wdtopbanner ">
                            <div class="wdright-banner-content"><a href="#"> <img class="image" title="topbanner-01" src="{{  asset("image/Main-banner-1.jpg")  }}" style="height: 225px;" alt="topbanner-01"> </a>
                                <div class="wdtopbanner-content left">
                                    <div class="label">Phones</div>
                                    <div class="title">10% de réduction</div>
                                    <div class="toptitle">Smart Phones</div>
                                    <div class="offer"><a href="#" class="btn-primary">Découvrir</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="one-third topbanner-part2">
                        <div class="wdtopbanner-img2 wdtopbanner">
                            <div class="wdright-banner-content"><a href="#"> <img class="image" title="topbanner-02" src="{{  asset("image/bottombanner-02.jpg")  }}" style="height: 225px;" alt="topbanner-02"> </a>
                                <div class="wdtopbanner-content left">
                                    <div class="label" style="color: white;">Autres</div>
                                    <div class="title" style="color: white;">2% de réduction</div>
                                    <div class="toptitle" style="color: white;">Autres articles</div>
                                    <div class="offer"><a href="#" class="btn-primary" style="background-color: white;color: black;">Découvrir</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @component('mcsIt.components.footer')
    @endcomponent

    </div>

    <script>

var wishlist = {
	'add': function(product_id) {
		$.ajax({
			url: 'mcsIt.article.addToWishes',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {
				if (json['success']) {
                    alert("Hello ajax")
					$.notify({
						message: json['success'],
						target: '_blank'
					},{
						// settings
						element: 'body',
						position: null,
						type: "info",
						allow_dismiss: true,
						newest_on_top: false,
						placement: {
							from: "top",
							align: "center"
						},
						offset: 0,
						spacing: 10,
						z_index: 2031,
						delay: 5000,
						timer: 1000,
						url_target: '_blank',
						mouse_over: null,
						animate: {
							enter: 'animated fadeInDown',
							exit: 'animated fadeOutUp'
						},
						onShow: null,
						onShown: null,
						onClose: null,
						onClosed: null,
						icon_type: 'class',
						template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +
							'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&nbsp;&times;</button>' +
							'<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +
							'<div class="progress" data-notify="progressbar">' +
								'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
							'</div>' +
							'<a href="{3}" target="{4}" data-notify="url"></a>' +
						'</div>'
					});
				}

				if (json['info']) {
					$.notify({
						message: json['info'],
						target: '_blank'
					},{
						// settings
						element: 'body',
						position: null,
						type: "info",
						allow_dismiss: true,
						newest_on_top: false,
						placement: {
							from: "top",
							align: "center"
						},
						offset: 0,
						spacing: 10,
						z_index: 2031,
						delay: 5000,
						timer: 1000,
						url_target: '_blank',
						mouse_over: null,
						animate: {
							enter: 'animated fadeInDown',
							exit: 'animated fadeOutUp'
						},
						onShow: null,
						onShown: null,
						onClose: null,
						onClosed: null,
						icon_type: 'class',
						template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-info" role="alert">' +
							'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&nbsp;&times;</button>' +
							'<span data-notify="message"><i class="fa fa-info"></i>&nbsp; {2}</span>' +
							'<div class="progress" data-notify="progressbar">' +
								'<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
							'</div>' +
							'<a href="{3}" target="{4}" data-notify="url"></a>' +
						'</div>'
					});
				}

				$('#wishlist-total > span').html(json['total']);
			}
		});
	}
}
    </script>
@endsection
