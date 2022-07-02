@extends('layouts.app', ['title' => "Group Mcs pub - ".$ads->tag])

@section('content')

<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
<style>
    .arTitle{
            font-size: 22px;
        }
    @media (max-width: 576px)  {

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

</style>
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
	<main id="main">
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-8">
					<div class="singlepost">
						<figure>
                            <img alt="" class="img-fluid" style="width: 100%;object-fit: cover;"
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

                    <div class="container" id="extraArticleContainer">

                        <div class="main_title_2">
                            <span><em></em></span>
                            <h2>Produits en promotion</h2>
                            <p style="font-size: 18px;">Acheter aux prix du grand marché</p>
                        </div>

                        <div class="row">
                                @if ($articles->count() > 0)
                                @foreach ($articles as $ordi)
                                <div id="" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 extraArtcile">
                                    <a class="box_topic" href="article/{{ $ordi->id }}">
                                        <span>
                                            <img src="../uploadedFiles/{{  $ordi->picture_1 }}"
                                                    alt="" style="height: 150px;">
                                        </span>

                                        <h5 class="arTitle">{{  substr($ordi->tag, 0, 21)    }}</h5>
                                         <p class="artDesc">
                                             {{ substr($ordi->desc, 0, 40)." ..."    }}
                                         </p>
                                    </a>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>


                    <!--
                    -->

				</div>
				<!-- /col -->

				<aside class="col-lg-4">
        	<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Catégories</h4>
						</div>
						<div class="tags">
                            @if ($categories->count() > 0)
                                @foreach ($categories as $category)
                                <a href="../article/category/{{  $category->id   }}">{{  $category->label   }}</a>
                                @endforeach
                            @endif

						</div>

                    <ul class="menu_list">

                                        @if ($otherArticles->count() > 0)
                                        @foreach ($otherArticles as $articles)

                                        <li>
                                            <a href="../article/{{ $articles->id }}">
                                             <div class="thumb">
                                                <img src="{{  asset("uploadedFiles/$articles->picture_1") }}" alt="">
                                            </div>
                                            </a>
                                            <a href="../article/{{ $articles->id }}">
                                            <h6>{{$articles->tag}} <span>{{$articles->price}}</span></h6>
                                            </a>

                                            <a href="../article/{{ $articles->id }}">
                                            <p>
                                                <?php echo substr($articles->desc, 0, 80)." ...";  ?>

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
