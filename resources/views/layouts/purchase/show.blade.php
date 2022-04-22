@extends('layouts.app', ['title' => "Mcs Group - Détails sur ".$article[0]->libelle])

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
        <div class="row">
           <div class="col-lg-7 col-md-7">
            <br>
               <div id="confirm">
                   <div class="icon icon--order-success svg add_bottom_15">
                       <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                           <g fill="none" stroke="{{ $purchase->state=="Validé" ? "#8EC343":"rgb(197, 6, 6)" }}" stroke-width="2">
                               <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                               <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                           </g>
                       </svg>
                   </div>
               <h3 style="welcome_message">{{ $purchase->state=="Validé" ? "Commande validé !":"Commande en attente !" }}</h3>
               <p>{{ $purchase->state=="Validé" ? "Votre achat a été validé":"Votre achat est en cours de validation. Vous recevrez une notification via email ou SMS confirmant la validation de votre achat." }}</p>

               <span class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="#" class="btn_1 rounded" style="background-color: {{ $purchase->state=="Validé" ? "#8EC343":"rgb(197, 6, 6)" }}"><i class="{{ $purchase->state=="Validé" ? "icon-check-3":"icon-hourglass-1" }}"></i> {{  $purchase->state    }}</a></span>

            </div>

            @if ($purchase->state=="Validé")

             <div class="reviews-container">

                <div class="review-box clearfix">
                    <div class="rev-content">
                        <div class="rev-info" style="color:rgb(197, 6, 6);">
                            Date de validation : {{ $purchase->updated_at->format("d-m-Y")   }}
                        </div>

                        @if ($purchase->delivery_mode == "Adomicile")

                            <div class="rev-text">
                                <p>
                                    <strong>Votre commande vous sera expédiée dans les 72 h qui suivent. Merci de patienter !</strong>
                                    <br>
                                    <ul>
                                        <li>Kinshasa-Gombe: <span class="float-right" style="font-weight: bold;">Huilleries</span></li>
                                        <li>Kinshasa-Limete: <span class="float-right" style="font-weight: bold;">12 ième rue Limete</span></li>
                                        <li>Kinshasa-Lemba: <span class="float-right" style="font-weight: bold;">Intedance Générale</span></li>
                                    </ul>
                                </p>
                            </div>

                        @else
                            <div class="rev-text">
                                <p>
                                    <strong>Prière de passer dans un <span style="color:rgb(197, 6, 6);">délai de 72 h</span> dans l'une de nos agences ci-dessous pour retirer votre produit acheté.</strong>
                                    <br>
                                    <ul>
                                        <li>Kinshasa-Gombe: <span class="float-right" style="font-weight: bold;">Huilleries</span></li>
                                        <li>Kinshasa-Limete: <span class="float-right" style="font-weight: bold;">12 ième rue Limete</span></li>
                                        <li>Kinshasa-Lemba: <span class="float-right" style="font-weight: bold;">Intedance Générale</span></li>
                                    </ul>
                                </p>
                            </div>
                        @endif


                    </div>
                </div>
             </div>
             @else
            @endif

           </div>

           <div id="billet" class="col-lg-5 col-md-5">
            <div class="step last">
                <h3>Bon de commande</h3>

            <div class="box_general summary">
                @if ($purchase->state=="Validé")
                    <div class="follow_us">
                        <ul style="text-align: center;">
                            <li><a href="#0"><i class="icon-qrcode-1" style="font-size: 24px;"></i> <span style="font-size: 14px;">Code Qr de la commande</span></a></li>
                        </ul>
                        <hr>
                    </div>
                @else

                <form action="{{ route('purchase.destroy', $purchase) }}" method="post">
                    @method('delete')
					@csrf
                    <button type="submit" class="btn_1 full-width cart">
                        <i class="fa fa-trash" style="font-size: 22px;"></i>&nbsp;&nbsp;&nbsp; Annuler la commande
                    </button>
                </form>
                @endif


                <ul>
                    <li>Produit <span class="float-right">{{    $article[0]->libelle   }}</span></li>

                    <li>Quantité <span class="float-right">{{ $purchase->quantity }}</span></li>

                    <li>Prix total <span class="float-right">{{ $purchase->total_price }} $</span></li>

                    <li>Date <span class="float-right">{{   $purchase->created_at}}</span></li>
                </ul>
                <textarea class="form-control add_bottom_15" placeholder="Joindre une notice..." style="height: 100px;"></textarea>
                <div class="form-group">
                        <label class="container_check">Recevoir des messages de confirmation.
                          <input type="checkbox" checked>
                          <span class="checkmark"></span>
                        </label>
                    </div>

                <a href="#sign-in-dialog" id="sign-in" class="btn_1 full-width cart"><i class="icon-gmail"></i> Envoyer le commentaire</a>
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


@endsection
