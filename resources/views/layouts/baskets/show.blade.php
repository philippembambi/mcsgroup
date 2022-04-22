@extends('layouts.app', ['title' => "Group-mcs : Mon panier"])

@section('content')
<style>
 .basket {
      margin-top: 12%;
    }
    @media (max-width: 767px) {
    .basket {
      margin-top: 47%;
    }
  }
</style>

<div id="page">
    @component('components.fixed-header')
    @endcomponent
    <main>

        <div class="container" >
            <div class="basket">

                <div class="main_categories">
                        <ul class="clearfix">
                            <li style="width: 50%;">
                                <a href="{{ route("basket.show") }}">
                                    <i class="fa fa-shopping-basket"></i>
                                    <h6>Mon panier</h6>
                                </a>
                            </li>
                            <li style="width: 50%;">
                                <a href="{{ route("basket.purchases") }}">
                                    <i class="fa fa-shopping-bag"></i>
                                    <h6>Mes achats</h6>
                                </a>
                            </li>

                        </ul>
                </div>

            <div class="main_title_3">
				<span></span>
				<h2>Mon panier</h2>
				<p>Mes articles sauvegardés.</p>
			</div>
			<div class="row add_bottom_30">
@if ($savedart->count() > 0)

    @foreach ($savedart as $article)

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
            <a class="box_topic" href="../article/{{ $article->article_id }}">
                <span>
                    <img src="../uploadedFiles/{{  $article->picture_1 }}"
                            alt="" style="height: 100px;">
                </span>
                <h3>{{  $article->tag    }}</h3>
                <p><?php echo substr($article->desc, 0, 50)." ..."; ?></p>
            </a>
        </div>

    @endforeach
        {{  $savedart->links()  }}
@endif


			</div>
			<!-- /row -->


		</div>
        </div>
    </main>

    @component('components.footer')
    @endcomponent

    <div id="toTop"></div><!-- Back to top button -->
</div>

@endsection
