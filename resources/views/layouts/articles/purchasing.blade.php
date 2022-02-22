@extends('layouts.app', ['title' => "Bon de commande de ".$article->tag])

@section('content')

<style>

    @media(min-width: 360px) {
    .welcome_message {
        float: right;
        width: 130px;
    }
    }

    @media(min-width: 768px) {
    #billet {
        margin-top: 5%;
    }
    }
</style>

<div id="page">
    @component('components.fixed-header')
    @endcomponent

    <div class="container margin_60">
        <div class="row justify-content-center">
           <div class="col-lg-5 col-md-5">
            <br>
               <div id="confirm">
                   <div class="icon icon--order-success svg add_bottom_15">
                       <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                           <g fill="none" stroke="#8EC343" stroke-width="2">
                               <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                               <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                           </g>
                       </svg>
                   </div>
               <h3 style="welcome_message">Commande effectuée avec succès !</h3>
               <p>Votre achat est en cours de validation. <i class="icon-hourglass-1"></i></p>

               <p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="{{   route("basket.purchases") }}" class="btn_1 rounded"><i class="fa fa-shopping-bag"></i> Mes achats effectués</a></p>
               </div>
           </div>

           <div id="billet" class="col-lg-5 col-md-5">
            <div class="step last">
                <h3>Bon de commande</h3>

            <div class="box_general summary">
                <ul>
                    <li>Produit <span class="float-right">{{    $article->tag   }}</span></li>

                    <li>Prix unitaire <span class="float-right">{{  $article->prixUnitaire    }} $</span></li>

                    <li>Quantité <span class="float-right">{{ $article->qte }}</span></li>

                    <li>Prix total <span class="float-right">{{ $article->qte * $article->prixUnitaire }} $</span></li>

                    <li>Date <span class="float-right"><?php echo date("d-m-Y", time()); ?></span></li>
                </ul>
                <textarea class="form-control add_bottom_15" placeholder="Joindre une notice..." style="height: 100px;"></textarea>
                <div class="form-group">
                        <label class="container_check">Recevoir des messages de confirmation.
                          <input type="checkbox" checked>
                          <span class="checkmark"></span>
                        </label>
                    </div>

                <a href="#" class="btn_1 full-width cart">Envoyer le commentaire</a>
            </div>
            <!-- /box_general -->
            </div>

           </div>
       </div>
       <!-- /row -->
   </div>
   <!-- /container -->

    @component('components.footer')
    @endcomponent

            <div id="toTop"></div><!-- Back to top button -->

</div>
@endsection
