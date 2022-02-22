@extends('layouts.app', ['title' => $ads->tag])

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
<br>
<br>
	<main>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-8">
					<div class="singlepost">
						<figure>
                            <img alt="" class="img-fluid" style="width: 100%;"
                                 src="{{ asset("uploadedFiles/$ads->image_1") }}"></figure>
						<h1>{{  $ads->tag  }}</h1>

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
                        <p>Faites des achats aux prix du grand marché</p>
                    </div>
                        <div class="row">
                            @if ($articles->count() > 0)
                                @foreach ($articles as $article)
                                <div class="col-lg-12">
                                    <div class="strip list_view">
                                        <div class="row no-gutters">
                                            <div class="col-lg-5">
                                                <figure>
                                                    <a href="../article/{{ $article->id }}">
                                                        <img
                                                                src="{{  asset("uploadedFiles/$article->picture_1") }}"
                                                                class="img-fluid" alt=""
                                                                style="height: 250px;width: 100%;">
                                                                <div class="read_more"><span>Plus d'informations</span>
                                                                </div></a>
                                                    <small><i class="fa fa-tag"></i></small>
                                                </figure>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="wrapper">
                                                    <a href="../article/{{ $article->id }}" class="wish_bt">
                                                        <i class="fa fa-shopping-basket" style="font-size: 18px;"></i></a>
                                                    <h3><a href="../article/{{ $article->id }}">{{  $article->tag    }}</a></h3>
                                                    <small>Infographie</small>
                                                    <p>
                                                        <?php echo substr($article->desc, 0, 80)." ...";  ?>
                                                    </p>

                                                    <ul>
                                                        <li><div class="score">
                                                            <strong>{{$article->price}} $</strong></div></li>
                                                    </ul>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif

                        </div>
                        <!-- /row -->

				</div>
				<!-- /col -->

				<aside class="col-lg-4">
        	<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Catégpries</h4>
						</div>
						<div class="tags">
                            @if ($categories->count() > 0)
                                @foreach ($categories as $category)
                                <a href="category/{{  $category->id   }}">{{  $category->label   }}</a>
                                @endforeach
                            @endif

						</div>

                    <ul class="menu_list">

                                        @if ($otherArticles->count() > 0)
                                        @foreach ($otherArticles as $article)

                                        <li>
                                            <a href="../article/{{ $article->id }}">
                                             <div class="thumb">
                                                <img src="{{  asset("uploadedFiles/$article->picture_1") }}" alt="">
                                            </div>
                                            </a>
                                            <a href="../article/{{ $article->id }}">
                                            <h6>{{$article->tag}} <span>{{$article->price}}</span></h6>
                                            </a>

                                            <a href="../article/{{ $article->id }}">
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
