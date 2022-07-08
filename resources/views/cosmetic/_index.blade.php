@extends('cosmetic._app')

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
    @component('cosmetic.components._header')
    @endcomponent

    <div id="content" class="col-sm-12">
        <div class="content-top" style="background-color: rgb(24, 21, 21);">
            <div class="container">
                <div class="row">
                    <div class="category_list_carousel">

                        <div class="category_list box">
                            <div class="category_img" id="category_img">
                                <a href="#" title="banner1">
                                    <img class="cat_image" src="{{ asset("cosmetic/image/images34.jpg") }}" alt="">
                                </a>
                            </div>
                            <div class="category_list_inner">
                                <a style="color: white;" href="#">Lorem ipsum dolor sit</a>

                            </div>
                        </div>

                        <div class="category_list box">
                            <div class="category_img" id="category_img">
                                <a href="#" title="banner1">
                                    <img class="cat_image" src="{{ asset("cosmetic/image/images32.jpg") }}" alt="">
                                </a>
                            </div>
                            <div class="category_list_inner">
                                <a style="color: white;" href="#">Lorem ipsum dolor sit</a>

                            </div>
                        </div>

                        <div class="category_list box">
                            <div class="category_img" id="category_img">
                                <a href="#" title="banner1">
                                    <img class="cat_image" src="{{ asset("cosmetic/image/images46.jpg") }}" alt="">
                                </a>
                            </div>
                            <div class="category_list_inner">
                                <a style="color: white;" href="#">Lorem ipsum dolor sit</a>

                            </div>
                        </div>

                        <div class="category_list box">
                            <div class="category_img" id="category_img">
                                <a href="#" title="banner1">
                                    <img class="cat_image" src="{{ asset("cosmetic/image/images30.jpg") }}" alt="">
                                </a>
                            </div>
                            <div class="category_list_inner">
                                <a style="color: white;" href="#">Lorem ipsum dolor sit</a>

                            </div>
                        </div>
                        
                        <div class="category_list box">
                            <div class="category_img" id="category_img">
                                <a href="#" title="banner1">
                                    <img class="cat_image" src="{{ asset("cosmetic/image/images39.jpg") }}" alt="">
                                </a>
                            </div>
                            <div class="category_list_inner">
                                <a style="color: white;" href="#">Lorem ipsum dolor sit</a>

                            </div>
                        </div>
                        
                        <div class="category_list box">
                            <div class="category_img" id="category_img">
                                <a href="#" title="banner1">
                                    <img class="cat_image" src="{{ asset("cosmetic/image/images12.jpg") }}" alt="">
                                </a>
                            </div>
                            <div class="category_list_inner">
                                <a style="color: white;" href="#">Lorem ipsum dolor sit</a>

                            </div>
                        </div>
                        
                        <div class="category_list box">
                            <div class="category_img" id="category_img">
                                <a href="#" title="banner1">
                                    <img class="cat_image" src="{{ asset("cosmetic/image/images29.jpg") }}" alt="">
                                </a>
                            </div>
                            <div class="category_list_inner">
                                <a style="color: white;" href="#">Lorem ipsum dolor sit</a>

                            </div>
                        </div>
                        
                        <div class="category_list box">
                            <div class="category_img" id="category_img">
                                <a href="#" title="banner1">
                                    <img class="cat_image" src="{{ asset("cosmetic/image/images35.jpg") }}" alt="">
                                </a>
                            </div>
                            <div class="category_list_inner">
                                <a style="color: white;" href="#">Lorem ipsum dolor sit</a>

                            </div>
                        </div>


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
								<img src="{{    asset("cosmetic/image/images35.jpg")    }}" style="height: 250px;" alt="">
							</div>
							<div class="shop-body">
								<h3 style="color: white;">Tresses<br>de cheveux</h3>
								<a href="#" class="cta-btn">Plus de détails <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-12">
						<div class="shop">
							<div class="shop-img">
								<img src="{{    asset("cosmetic/image/images34.jpg") }}" style="height: 250px;" alt="">
							</div>
							<div class="shop-body">
								<h3 style="color: white;">Soins<br>de visage</h3>
								<a href="#" class="cta-btn">Plus de détails <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-12">
						<div class="shop">
							<div class="shop-img">
								<img src="{{    asset("cosmetic/image/images21.jpg") }}" style="height: 250px;" alt="">
							</div>
							<div class="shop-body">
								<h3 style="color: white;">Pédicure &<br>Manicure</h3>
								<a href="#" class="cta-btn">Plus de détails <i class="fa fa-arrow-circle-right"></i></a>
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

        @component('cosmetic.components._product')
        @endcomponent


        @component('cosmetic.components._desc')
        @endcomponent


        <div class="section" id="hair">

            <div id="product-tab">
				<!-- product tab nav -->
				<ul class="tab-nav">
					<li><a data-toggle="tab" href="#tab2">&nbsp;</a></li>
				</ul>
			</div>

        </div>

    <div class="container">
        <div class="row">
            <div id="wdcmstopbanner" class="bottom-to-top hb-animate-element">
                <div class="wdcmstopbanner">

                    <div class="one-third topbanner-part3">
                        <div class="wdtopbanner-img3 wdtopbanner">
                            <div class="wdright-banner-content">
                                <a href="{{ url("article/category/2") }}">
                                    <img class="image" title="topbanner-03" src="{{  asset("cosmetic/image/images12.jpg")  }}" style="height: 225px;width: 400px;" alt="topbanner-03">
                                </a>
                                <div class="wdtopbanner-content left">
                                    <div class="label" style="color: white;background-color: black;">Mèches</div>
                                    <div class="toptitle" style="color: white;">Les cheveux à mille éclats</div>
                                    <div class="offer">
                                        <a href="{{ url("article/category/2") }}" class="btn-primary">Découvrir</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="one-third topbanner-part1">
                        <div class="wdtopbanner-img1 wdtopbanner ">
                            <div class="wdright-banner-content"><a href="#"> <img class="image" title="topbanner-01" src="{{  asset("cosmetic/image/images12.jpg")  }}" style="height: 225px;width: 400px;" alt="topbanner-01"> </a>
                                <div class="wdtopbanner-content left">
                                    <div class="label" style="background-color: black;">Mèches</div>
                                    <div class="title">10% de réduction</div>
                                    <div class="toptitle">Smart Mèches</div>
                                    <div class="offer"><a href="#" class="btn-primary">Découvrir</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="one-third topbanner-part2">
                        <div class="wdtopbanner-img2 wdtopbanner">
                            <div class="wdright-banner-content"><a href="#"> <img class="image" title="topbanner-02" src="{{  asset("cosmetic/image/images12.jpg")  }}" style="height: 225px;width: 400px;" alt="topbanner-02"> </a>
                                <div class="wdtopbanner-content left">
                                    <div class="label" style="color: white;background-color: black;">Mèches</div>
                                    <div class="title" style="color: white;">2% de réduction</div>
                                    <div class="toptitle" style="color: white;">Mèches articles</div>
                                    <div class="offer"><a href="#" class="btn-primary" style="background-color: white;color: black;">Découvrir</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @component('cosmetic.components._footer')
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
