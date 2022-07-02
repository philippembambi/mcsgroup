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

<script>
    function PrintDiv() {
        var divToPrint = document.getElementById('billet');
        var popupWin = window.open('', '_blank', 'width=1500,height=1500');
        popupWin.document.open();
        popupWin.document.write('<html><head><link rel="stylesheet" href="css/bootstrap.min.css"><link rel="stylesheet" href="./css/style.css"><link rel="stylesheet" href="./css/vendors.css"><link rel="stylesheet" href="./css/custom.css"> </head><body onload="window.print()">' +
        divToPrint.innerHTML + '</body></html>');
        popupWin.document.close();
        }

</script>

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
               <h3 style="welcome_message">Commande en cours de validation <i class="icon-hourglass-1"></i> !</h3>
                @if ($article->modePaiement == "carteCredit")
                <p class="text-center" style="text-align: justify;">
                    Vous devez payer la facture de la commande pour la valider, au cas contraire, votre commande sera annulée dans les 24h qui suivent.
                </p>

                <form action="{{ url('paypal/charge') }}" method="post" name="formulaire">
                    {{ csrf_field() }}

                    <input type="hidden" name="amount" value="{{ (int) $article->qte * (int) $article->prixUnitaire }}">
                    <input type="hidden" name="article_tag" value="{{  $article->tag  }}">
                    <input type="hidden" name="article_code" value="{{  $code  }}">

                    <p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5">
                        <a href="#" onclick="document.formulaire.submit()" class="btn_1 rounded">
                            <i class="fa fa-exchange"></i>
                            Payer la facture
                        </a>
                    </p>
                </form>
                @else
                <p class="text-center" style="text-align: justify;">
                    Vous avez choisi le mode paiement <strong>"En Espèce"</strong>. Pour ce faire, vous devez passer dans l'une de nos adresses affichées dans le détail pour payer la facture de la commande afin de la valider, au cas contraire, votre commande sera annulée dans les 48h qui suivent.
                </p>
                    <p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5">
                        <a href="{{ route("basket.purchases")   }}" class="btn_1 rounded">
                            <i class="fa fa-shopping-bag"></i>
                            Revenir à mes commandes
                        </a>
                    </p>
                @endif
               </div>
           </div>

           <div id="billet" class="col-lg-5 col-md-5">
            <div class="step last">
                <h3>Bon de commande</h3>

            <div class="box_general summary">
                <ul id="printable">
                    <li>Code de la commande <span class="float-right">{{    $code   }}</span></li>
                    <li>Produit <span class="float-right">{{    $article->tag   }}</span></li>

                    <li>Prix unitaire <span class="float-right">{{  $article->prixUnitaire    }} $</span></li>

                    <li>Quantité <span class="float-right">{{ $article->qte }}</span></li>

                    <li>Prix total <span class="float-right">{{ $article->qte * $article->prixUnitaire }} $</span></li>

                    <li>Date <span class="float-right"><?php echo date("d-m-Y", time()); ?></span></li>

                    @if ($article->modeLivraison == "pointDeVente")
                    <strong>Nos adresses</strong>
                    @foreach ($adresses as $adresse)
                            <li>{{    $adresse->nom_adr    }}</li>
                        @endforeach
                    @endif
                </ul>
                <div class="form-group">
                        <label class="container_check">Imprimer le bon de commande
                          <input type="checkbox" onclick="PrintDiv()">
                          <span class="checkmark"></span>
                        </label>
                    </div>

                        <img src="qr-codes/{{ $code }}.svg" alt="" style="height: 80px;margin-left: 35%;">
                      <br><br>
                        <p>
                            <a href="qr-codes/{{ $code }}.svg" download="qr-codes/{{ $code }}.svg" class="btn_1 full-width cart"><i class="fa fa-cloud-download"></i> Télécharger le code QR</a>
                        </p>

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
