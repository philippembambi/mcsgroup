@extends('layouts.app', ['title' => "Mcs Group - Résultat de recherche pour % $searchText %"])

@section('content')

    <style>
        #search_bar{
            margin-top: 7%;
            margin-bottom: -5%;
        }
        .search{
            margin-top: 10%;
        }

        @media (max-width: 767px)  {
        .search{
            margin-top: 35%;
        }
        #search_bar{
            margin-bottom: -20%;
        }
        }
    </style>

<div id="page">
    @component('components.fixed-header')
    @endcomponent

    <div class="container" id="search_bar">
        @component('components.search-bar')
        @endcomponent
    </div>

    <main class="pattern" id="main">

		<div class="container">
          <div class="search">
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
					<div id="filters_col">
						<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filtres </a>
						<div class="collapse show" id="collapseFilters">
							<div class="filter_type">
								<h6>Résultats pour <span style="font-weight: bold;color:rgb(197, 6, 6);">{{$searchText}}</span></h6>

							</div>
							<div class="filter_type">
                                <div class="distance"> Nombre des résultats <span></span></div>
								<input type="range" max="100" step="5" value="{{ (int) $results->count() + (int) $result2->count() }}" data-orientation="horizontal">
                            </div>

						</div>
						<!--/collapse -->
					</div>
					<!--/filters col-->
				</aside>
				<!-- /aside -->

				<div class="col-lg-9">
                        <div class="row">

                            @if ($results->count() > 0)
                            @foreach ($results as $article)

                            <div class="col-lg-6 col-md-6">
                                <ul class="menu_list">


                                    <li>
                                         <div class="thumb">
                                            <a href="../article/{{ $article->id }}">
                                             <img src="{{  asset("uploadedFiles/$article->picture_1") }}" alt="">
                                            </a>
                                            </div>
                                        <a href="../article/{{ $article->id }}">
                                        <h6>{{$article->tag}} <span>{{$article->price}} $</span></h6>
                                    </a>
                                     <a href="../article/{{ $article->id }}">
                                        <p>
                                            <?php echo substr($article->desc, 0, 80)." ...";  ?>

                                        </p>
                                     </a>
                                    </li>
                                </ul>
                            </div>

                            @endforeach

                            @foreach ($result2 as $article)

                            <div class="col-lg-6 col-md-6">
                                <ul class="menu_list">


                                    <li>
                                         <div class="thumb">
                                            <a href="../article/{{ $article->id }}">
                                             <img src="{{  asset("uploadedFiles/$article->picture_2") }}" alt="">
                                            </a>
                                            </div>
                                        <a href="../article/{{ $article->id }}">
                                        <h6>{{$article->tag}} <span>{{$article->price}} $</span></h6>
                                    </a>
                                     <a href="../article/{{ $article->id }}">
                                        <p>
                                            <?php echo substr($article->desc, 0, 80)." ...";  ?>

                                        </p>
                                     </a>
                                    </li>
                                </ul>
                            </div>

                            @endforeach
                            @else
                                <div class="col-lg-12 col-md-12">
                                    <h4 style="text-align: center;">Désolé, aucun résultat n'a été trouvé pour <span style="color:rgb(197, 6, 6);">{{  $searchText  }}</span></h4>
                                    <i class="pe pe-7s-refresh-cloud" style="font-size: 120px;margin-left: 35%;"></i>
                                </div>
                            @endif

                            {{  $results->links()    }}
                        </div>
                        <!-- /row -->


				</div>
				<!-- /col -->
			</div>
		  </div>
        </div>
		<!-- /container -->

	</main>
    @component('components.footer')
    @endcomponent
    <div id="toTop"></div><!-- Back to top button -->
</div>

@endsection
