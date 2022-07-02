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
    .imghair{
        height: 220px;
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
                                <a href="{{ url("ads/$item->id") }}" title="banner1">
                                    <img class="cat_image{{   $item->id    }}" src="{{ asset("uploadedFiles/$item->image_1") }}" alt="">
                                </a>
                            </div>
                            <div class="category_list_inner">
                                <a href="{{ url("ads/$item->id") }}">{{ substr($item->tag, 0, 20) }}</a>

                            </div>
                        </div>
                    @endforeach


                    </div>
                </div>
            </div>

        </div>

    <iframe src="{{ route("mcsIt.poles") }}" frameborder="0" style="margin-bottom: -6%;width: 100%; height: 800px;"></iframe>

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
                                        <a href="{{ url("article/$article->id") }}">
                                        <div class="article-img">
                                            <img src="{{  asset("uploadedFiles/$article->picture_1") }}" class="imghair" alt="">
                                            <div class="article-label">
                                                <span class="sale">-30%</span>
                                                <span class="new">En vente</span>
                                            </div>
                                        </div>
                                        </a>
                                        <div class="article-body">
                                            <p class="article-category">{{ substr($article->processor, 0, 20) }}</p>
                                            <h3 class="article-name"><a href="{{ url("article/$article->id") }}">{{ substr($article->tag, 0, 16) }}</a></h3>
                                            <h4 class="article-price">{{ (int) $article->price }} $</h4>
                                            <div class="article-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="article-btns">
                                                <button class="add-to-wishlist" onclick="wishlist.add(2)"><i class="fa fa-shopping-bag fa-2x"></i><span class="tooltipp">Ajouter au panier</span></button>
                                               <a class="quick-view" href="{{ url("article/$article->id") }}">
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


        <link rel="stylesheet" href="{{ asset('cosmetic/css/stylesheet.css') }}">
<style>
    .new {
        background-color: #1d3b5f;
    }
    .add_cart_btn{
        background-color: #1d3b5f;
    }
</style>

<section class="fillter_latest_product">
    <div class="container">
        <div class="single_c_title">
            <h2 style="color: #F9BF39;">Produits promotionnels</h2>
        </div>
        <div class="fillter_l_p_inner">
            <ul class="fillter_l_p">
                <li class="active" data-filter="*"><a href="#">Plantes</a></li>
                <li data-filter=".woman"><a href="#">Lait de beauté</a></li>
                <li data-filter=".acc"><a href="#">Make-up</a></li>
            </ul>
            <div class="row isotope_l_p_inner">
                <div class="col-lg-3 col-md-4 col-sm-6 woman bags">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img    class="img-fluid" 
                                    src="{{ asset("cosmetic/image/img-12.png") }}" alt="" 
                                    style="height: 250px;"
                                    data-pagespeed-url-hash="2787798105" 
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <h5 class="new">New</h5>
                            </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#" title="acheter"><i style="color: #293544;" class="fa fa-shopping-bag"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Détails</a></li>
                                <li class="p_icon"><a href="#" title="ajouter au panier"><i style="color: #293544;" class="fa fa-heart"></i></a></li>
                            </ul>
                            <h4>Womens Libero</h4>
                            <h5><del>$65</del> <span style="color: #F9BF39;">50$</span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 acc shoes">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img    class="img-fluid" 
                                    style="height: 250px;"
                                    src="{{ asset("cosmetic/image/images21.jpg") }}" alt="" 
                                    data-pagespeed-url-hash="3082298026" 
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <h5 class="new">New</h5>
                        </div>

                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-shopping-bag"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Détails</a></li>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-heart"></i></a></li>
                            </ul>
                            <h4>Womens Libero</h4>
                            <h5><del>$65</del> <span style="color: #F9BF39;">50$</span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 acc shoes">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img    class="img-fluid" 
                                    style="height: 250px;"
                                    src="{{ asset("cosmetic/image/img-3.png") }}" alt="" 
                                    data-pagespeed-url-hash="3082298026" 
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <h5 class="new">New</h5>
                        </div>

                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-shopping-bag"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Détails</a></li>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-heart"></i></a></li>
                            </ul>
                            <h4>Womens Libero</h4>
                            <h5><del>$65</del> <span style="color: #F9BF39;">50$</span></h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6 acc shoes">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img    class="img-fluid" 
                                    style="height: 250px;"
                                    src="{{ asset("cosmetic/image/img-1.png") }}" alt="" 
                                    data-pagespeed-url-hash="3082298026" 
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <h5 class="new">New</h5>
                        </div>

                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-shopping-bag"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Détails</a></li>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-heart"></i></a></li>
                            </ul>
                            <h4>Womens Libero</h4>
                            <h5><del>$65</del> <span style="color: #F9BF39;">50$</span></h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6 acc shoes">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img    class="img-fluid" 
                                    style="height: 250px;"
                                    src="{{ asset("cosmetic/image/images14.jpg") }}" alt="" 
                                    data-pagespeed-url-hash="3082298026" 
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <h5 class="new">New</h5>
                        </div>

                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-shopping-bag"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Détails</a></li>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-heart"></i></a></li>
                            </ul>
                            <h4>Womens Libero</h4>
                            <h5><del>$65</del> <span style="color: #F9BF39;">50$</span></h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6 acc shoes">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img    class="img-fluid" 
                                    style="height: 250px;"
                                    src="{{ asset("cosmetic/image/images25.jpg") }}" alt="" 
                                    data-pagespeed-url-hash="3082298026" 
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <h5 class="new">New</h5>
                        </div>

                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-shopping-bag"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Détails</a></li>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-heart"></i></a></li>
                            </ul>
                            <h4>Womens Libero</h4>
                            <h5><del>$65</del> <span style="color: #F9BF39;">50$</span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 acc shoes">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img    class="img-fluid" 
                                    style="height: 250px;"
                                    src="{{ asset("cosmetic/image/img-5.png") }}" alt="" 
                                    data-pagespeed-url-hash="3082298026" 
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <h5 class="new">New</h5>
                        </div>

                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-shopping-bag"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Détails</a></li>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-heart"></i></a></li>
                            </ul>
                            <h4>Womens Libero</h4>
                            <h5><del>$65</del> <span style="color: #F9BF39;">50$</span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 acc shoes">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img    class="img-fluid" 
                                    style="height: 250px;"
                                    src="{{ asset("cosmetic/image/img-7.png") }}" alt="" 
                                    data-pagespeed-url-hash="3082298026" 
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <h5 class="new">New</h5>
                        </div>

                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-shopping-bag"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Détails</a></li>
                                <li class="p_icon"><a href="#"><i style="color: #293544;" class="fa fa-heart"></i></a></li>
                            </ul>
                            <h4>Womens Libero</h4>
                            <h5><del>$65</del> <span style="color: #F9BF39;">50$</span></h5>
                        </div>
                    </div>

                    <nav aria-label="Page navigation example" class="pagination_area">
                        <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </nav>

                </div>

                

            </div>
        </div>


        <div class="single_c_title">
            <h2 style="color: #F9BF39;">Live beauty Streaming</h2>
        </div>
    </div>
    
</section>
    
<script src="{{ asset('cosmetic/js/vendor.js') }}"></script>


    <div class="container">
        <div class="row">
            <div id="wdcmstopbanner" class="bottom-to-top hb-animate-element">
                <div class="wdcmstopbanner">

                    <div class="one-third topbanner-part3">
                        <div class="wdtopbanner-img3 wdtopbanner">
                            <div class="wdright-banner-content">
                                <a href="{{ url("article/category/2") }}">
                                    <img class="image" title="topbanner-03" src="{{  asset("image/businessman-3300891_1920.jpg")  }}" style="height: 225px;" alt="topbanner-03">
                                </a>
                                <div class="wdtopbanner-content left">
                                    <div class="label" style="color: white;">PC</div>
                                    <div class="title" style="color: white;">5% de réduction</div>
                                    <div class="toptitle" style="color: white;">Ordinateurs</div>
                                    <div class="offer">
                                        <a href="{{ url("article/category/2") }}" class="btn-primary">Découvrir</a></div>
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
