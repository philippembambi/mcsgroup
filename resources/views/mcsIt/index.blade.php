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


                		<!-- SECTION -->
		<div class="section">
			
			<!-- container -->
			<div class="container">
			
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-12">
						<div class="shop">
							<div class="shop-img">
								<img src="{{    asset("image/ads1.jpg")    }}" style="height: 250px;" alt="">
							</div>
							<div class="shop-body">
                                <a href="{{ url("home") }}">
								<h3 style="color: white;">MCS IT</h3>
                                </a>
								<a href="{{ url("home") }}" class="cta-btn">OUVRIR <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-12">
						<div class="shop">
							<div class="shop-img">
								<img src="{{    asset("image/woman-1446557_1920.jpg") }}" style="height: 250px;" alt="">
							</div>
							<div class="shop-body">
                                <a href="{{ url("mcsprod/index") }}">
								<h3 style="color: white;">MCS PROD</h3>
                                </a>
								<a href="{{ url("mcsprod/index") }}" class="cta-btn">OUVRIR <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-12">
						<div class="shop">
							<div class="shop-img">
								<img src="{{    asset("image/online-6404937_1920.jpg") }}" style="height: 250px;" alt="">
							</div>
							<div class="shop-body">
                                <a href="{{ url('feedback/index') }}">
								<h3 style="color: white;">MCS SHOP</h3>
                            </a>
								<a href="{{ url('feedback/index') }}" class="cta-btn">OUVRIR <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


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
            <br>
        </div>


    <div class="container">
      
        <div class="fillter_l_p_inner">
            <div class="row isotope_l_p_inner">

                @foreach ($arts as $article)    
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img    class="img-fluid" 
                                    src="{{  asset("uploadedFiles/$article->picture_1") }}" alt="" 
                                    style="height: 200px;"
                                    data-pagespeed-url-hash="2787798105" 
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <h5 class="new" style="display: block;">{{ substr($article->processor, 0, 15) }}</h5>
                            </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="{{ url("article/$article->id") }}" title="acheter"><i style="color: #293544;" class="fa fa-shopping-bag"></i></a></li>
                                <li><a class="add_cart_btn" href="{{ url("article/$article->id") }}">Détails</a></li>
                                <li class="p_icon"><a href="{{ url("article/$article->id") }}" title="ajouter au panier"><i style="color: #293544;" class="fa fa-heart"></i></a></li>
                            </ul>
                            <h4>{{ substr($article->tag, 0, 16) }}</h4>
                            <h5><del>{{ (int) $article->price + 35 }} $</del> <span style="color: #F9BF39;">{{ (int) $article->price }} $</span></h5>
                        </div>
                    </div>
                
                </div>
                @endforeach
                <!-- /product -->
                {{ $arts->links() }}
                

            </div>
        </div>

    </div>
    
    
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


<script type="text/javascript">
    $('#button-cart').on('click', function() {
      $.ajax({
        url: 'index.php?route=checkout/cart/add',
        type: 'post',
        data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
        dataType: 'json',
        beforeSend: function() {
          $('#button-cart').button('loading');
        },
        complete: function() {
          $('#button-cart').button('reset');
        },
        success: function(json) {
          $('.alert-dismissible, .text-danger').remove();
          $('.form-group').removeClass('has-error');
    
          if (json['error']) {
            if (json['error']['option']) {
              for (i in json['error']['option']) {
                var element = $('#input-option' + i.replace('_', '-'));
    
                if (element.parent().hasClass('input-group')) {
                  element.parent().before('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                } else {
                  element.before('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                }
              }
            }
    
            if (json['error']['recurring']) {
              $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
            }
    
            // Highlight any found errors
            $('.text-danger').parent().addClass('has-error');
          }
    
          if (json['success']) {
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
    
            $('#cart > button').html('<div class="cart_detail"><div class="cart_image"></div><span id="cart-total"> ' + json['total'] + '</span>'  + '</div>');
    
            //$('html, body').animate({ scrollTop: 0 }, 'slow');
    
            $('#cart > ul').load('index.php?route=common/cart/info ul li');
          }
        },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
      });
    });
    </script> 

@endsection
