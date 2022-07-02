@extends('layouts.app', ['title' => "Détails sur ".$article->tag])

@section('content')
<style>
    #carousel_in .owl-dots {
  position: absolute;
  bottom: 10px;
  width: 100%;
  text-align: center;
  z-index: 5;
  visibility: visible;
}
.border-red-500 {
        border-color: red;
    }
    .text-red-500 {
        text-align: center;
        color: red;
        font-weight: 500;
    }
    .text-red{
        color: red;
    }

</style>

<div id="page" class="theia-exception">
    @component('components.fixed-header')
    @endcomponent

    <main class="pattern" id="main">
<br><br>

		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-8">

                    <div id="carousel_in" class="owl-carousel owl-theme owl-dots add_bottom_30">

                        <div class="item" id="{{ $article->id }}">
                            <div>
                                <div>
                                    <img src="{{ asset("uploadedFiles/$article->picture_3") }}" style="height: 250px;">
                                </div>

                            </div>
                        </div>

                        <div class="item" id="{{ $article->id }}">
                            <div>
                                <div>
                                    <img src="{{ asset("uploadedFiles/$article->picture_2") }}" style="height: 250px;">
                                </div>

                            </div>
                        </div>


                        <div class="item" id="{{ $article->id }}">
                            <div style="">
                                <div>
                                    <img src="{{ asset("uploadedFiles/$article->picture_1") }}" style="height: 250px;">
                                </div>

                            </div>
                        </div>

                    </div>

					<div class="singlepost">
						<figure>
                            <div class="detail_title_1">

                                <h2 class="text-center">{{  $article->tag  }}</h2>
                            </div>
						<!-- /post meta -->
						<div class="post-content">
							<div class="dropcaps">
							    <p>{{   $article->desc  }}</p>

                            </div>
                    	</div>
						<!-- /post -->
					</div>
					<!-- /single-post -->

                    <div class="opening">
                        <div class="ribbon">
                            <span class="open">Nouveauté</span>
                        </div>
                        <i class="icon-cart"></i>
                        <h4>Caractéristiques</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>

                                    <li>Modèle <span style="font-weight: bold;">{{ $article->model }}</span></li>
                                    <li>RAM <span style="font-weight: bold;">{{ $article->ram }}</span></li>
                                    <li>Disque dur <span style="font-weight: bold;">{{ $article->disk }}</span></li>
                                    <li>Processeur <span style="font-weight: bold;">{{ $article->processor }}</span></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Prix <span style="font-weight: bold;">{{ $article->price }} $</span></li>
                                    <li>Date de cerfication <span style="font-weight: bold;">{{ $article->created_at }}</span></li>

                                </ul>
                            </div>
                        </div>
                    </div>

				</div>
				<!-- /col -->

				<aside class="col-lg-4" id="sidebar">


                    <div class="box_detail booking">
                        <div class="price">
                        <i class="fa fa-shopping-bag" style="font-size: 30px;color: green;"></i>    <span style="text-align: center; margin-left: 20%; font-size: 20px;">Acheter</span>
                        </div>

                        @if (session('status'))
                        <div class="text-red-500">
                            <p>
                              **  <strong>{{ session('status') }}</strong> **
                            </p>
                        </div>
                        @endif

                        <form action="{{  route("article.buy") }}" method="post">
                            @csrf

                        <div class="form-group">
                            <label for="qte" style="font-weight: bold;">* Quantité (nombre d'exemplaires)</label>
                            <input type="number" class="form-control @error('qte') border-red-500 @enderror" name="qte" id="" required>
                            @error('qte') <div class="text-red">{{ $message }}</div> @enderror

                        </div>

                        <div class="form-group clearfix">
                            <div class="custom-select-form">
                                <label for="modeLivraison" style="font-weight: bold;">* Mode de livraison</label>
                                <select class="wide" name="modeLivraison">
                                    <option value="Adomicile">&Agrave; domicile</option>
                                    <option value="pointDeVente">Via nos points de vente</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <div class="custom-select-form">
                                <label for="modePaiement" style="font-weight: bold;">* Mode de paiement</label>
                                <select class="wide" name="modePaiement">
                                    <option value="espece">En espèce</option>
                                    <option value="carteCredit">Par carte de crédit / débit</option>
                                </select>
                            </div>
                        </div>

                        <input type="hidden" name="articleId" value="{{  $article->id   }}">
                        <input type="hidden" name="prixUnitaire" value="{{  $article->price   }}">
                        <input type="hidden" name="tag" value="{{ $article->tag }}">
                        @auth
                        <input type="submit" value="Commander" class=" add_top_30 btn_1 full-width purchase">
                        @endauth

                        @guest
                        <div class="alert alert-danger" role="alert">
                            <strong><i class="fa fa-warning"></i></strong> Authentifiez-vous pour acheter ce produit.
                        </div>

                        <a href="{{ route("user.authenticate")  }}" class="btn_1 full-width outline wishlist"><i class="icon-login-2"></i> S'authentifier</a>
                        @endguest
                     </form>

                     @auth
                     <form action="{{ route("basket.add") }}" method="POST" name="">
                         @csrf
                          <input type="hidden" id="art_id" name="art_id" value="{{ $article->id }}">
                         <button class="btn_1 full-width outline wishlist"><i class="icon-cart"></i> Ajouter au panier</button>
                     </form>
                     @endauth

                    </div>





                    <ul class="share-buttons">
                        <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Partager</a></li>
                        <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Partager</a></li>
                        <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Partager</a></li>
                    </ul>
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

<script src="{{ asset("js/input_qty.js")    }}"></script>

@endsection
