@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/blog.css') }}">

<style>

   @media (max-width: 767px) {
    .singlepost {
      margin-top: 5%;
    }
  }

   @media (max-width: 767px) {
    .img-fluid {
      height: 250px;
    }
  }

  @media (min-width: 767px) {
    .img-fluid {
      height: 400px;
    }
  }

</style>

<div id="page">
    @component('components.fixed-header')
    @endcomponent
<br>
	<main>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-9">
					<div class="singlepost">
						<figure>
                            <img alt="" class="img-fluid" style="width: 100%;"
                                 src="{{ asset("image/$ads->image_1") }}"></figure>
						<h1>{{  $ads->tag  }}</h1>
						<div class="postmeta">
							<ul>
								<li><a href="#"><i class="fa fa-tag"></i>  {{ $ads->category  }}</a></li>
							</ul>
						</div>
						<!-- /post meta -->
						<div class="post-content">
							<div class="dropcaps">
							    <p>{{   $ads->desc  }}</p>

                            </div>
	</div>
						<!-- /post -->
					</div>
					<!-- /single-post -->

                    <div class="main_title_2">
                        <span><em></em></span>
                        <h2>Produits en vente</h2>
                        <p>Faites des achats aux prix abordables</p>
                    </div>
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="strip list_view">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5">
                                            <figure>
                                                <a href="#">
                                                    <img
                                                            src="{{ asset("image/$ads->image_1") }}"
                                                            class="img-fluid" alt=""
                                                            style="height: 250px;">
                                                            <div class="read_more"><span>Plus d'informations</span>
                                                            </div></a>
                                                <small>Audio-visuel</small>
                                            </figure>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="wrapper">
                                                <a href="#0" class="wish_bt">
                                                    <i class="fa fa-shopping-basket" style="font-size: 18px;"></i></a>
                                                <h3><a href="#">MCS PROD</a></h3>
                                                <small>Infographie</small>
                                                <p>
                                                Production audio-visuel et prise des vues post-production (montage vidéo et sonore)
                                                </p>

                                                <a class="address" href="#">Plus d'informations</a>

                                                <ul>
                                                    <li><span class="loc_open">Acheter</span></li>
                                                    <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>300$</strong></div></li>
                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /row -->

					<hr>

					<h5>Ecrivez-nous</h5>

                    @guest
                    <div class="row">

                        <div class="col-lg-4">
							<div class="form-group">
								<input type="text" name="name" id="name2" class="form-control" placeholder="Nom & prénom">
							</div>
						</div>

						<div class="col-lg-4">
							<div class="form-group">
								<input type="text" name="email" id="email2" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<input type="text" name="email" id="website3" class="form-control" placeholder="Téléphone">
							</div>
						</div>
					</div>
                    @endguest

					<div class="form-group">
						<textarea class="form-control" name="comments" id="comments2" rows="6" placeholder=""></textarea>
					</div>
					<div class="form-group">
						<button type="submit" id="submit2" class="btn_1 add_bottom_15">Envoyer</button>
					</div>

				</div>
				<!-- /col -->

				<aside class="col-lg-3">
					<div class="widget search_blog">
						<div class="form-group">
							<input type="text" name="search" id="search" class="form-control" placeholder="Search..">
							<span><input type="submit" value="Search"></span>
						</div>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Latest Post</h4>
						</div>
						<ul class="comments-list">
							<li>
								<div class="alignleft">
									<a href="#0"><img src="img/blog-5.jpg" alt=""></a>
								</div>
								<small>Category - 11.08.2016</small>
								<h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
							</li>
							<li>
								<div class="alignleft">
									<a href="#0"><img src="img/blog-6.jpg" alt=""></a>
								</div>
								<small>Category - 11.08.2016</small>
								<h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
							</li>
							<li>
								<div class="alignleft">
									<a href="#0"><img src="img/blog-4.jpg" alt=""></a>
								</div>
								<small>Category - 11.08.2016</small>
								<h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
							</li>
						</ul>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Categories</h4>
						</div>
						<ul class="cats">
							<li><a href="#">Food <span>(12)</span></a></li>
							<li><a href="#">Places to visit <span>(21)</span></a></li>
							<li><a href="#">New Places <span>(44)</span></a></li>
							<li><a href="#">Suggestions and guides <span>(31)</span></a></li>
						</ul>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Popular Tags</h4>
						</div>
						<div class="tags">
							<a href="#">Food</a>
							<a href="#">Bars</a>
							<a href="#">Cooktails</a>
							<a href="#">Shops</a>
							<a href="#">Best Offers</a>
							<a href="#">Transports</a>
							<a href="#">Restaurants</a>
						</div>
					</div>
					<!-- /widget -->
				</aside>
				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->

    @component('components.footer')
    @endcomponent

    <div id="toTop"></div><!-- Back to top button -->
</div>

<script>
	$(function() {
	  $('input[name="dates"]').daterangepicker({
		  autoUpdateInput: false,
		  parentEl:'#input-dates',
		  opens: 'left',
		  locale: {
			  cancelLabel: 'Clear'
		  }
	  });
	  $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
		  $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
	  });
	  $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
		  $(this).val('');
	  });
	});
	</script>
@endsection
