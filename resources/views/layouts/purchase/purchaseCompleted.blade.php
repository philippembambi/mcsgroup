@extends('layouts.app', ['title' => "Transaction ".$payment_id])

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
               <h3 style="welcome_message">Commande validée !</h3>
                <p class="text-center" style="text-align: justify;">
                    Votre commande a été validée avec succès.
                    <br>
                    Elle vous sera expédiée dans les 24 ou 48 h qui suivent au cas où votre aviez choisi la livraison à domicile. Au cas contraire, veillez passer dans l'une de nos adresses affichées ci-dessus pour rétirer votre commande.
                </p>

               </div>
           </div>

           <div id="billet" class="col-lg-5 col-md-5">
            <div class="step last">
                <h3>Facture</h3>

            <div class="box_general summary">
                <ul id="printable">
                    <li>Code du l'article <span class="float-right">{{    $article_tag   }}</span></li>
                    <li>Nom de l'article <span class="float-right">{{    $article_code   }}</span></li>

                    <li>ID de paiement <span class="float-right">{{  $payment_id    }}</span></li>

                    <li>ID du payeur <span class="float-right">{{ $payer_id }}</span></li>

                    <li>Email du payeur <span class="float-right">{{ $payer_email }}</span></li>

                    <li>Montant TTC <span class="float-right">{{    $amount  }}</span></li>
                    <li>Devise <span class="float-right">{{    $currency  }}</span></li>
                    <li>Status du paiement <span class="float-right">{{    $payment_status=="approved"?"Approuvé":$payment_status  }}</span></li>
                    <strong>Nos adresses</strong>
                    @foreach ($adresses as $adresse)
                            <li>{{    $adresse->nom_adr    }}</li>
                        @endforeach
                </ul>
                <div class="form-group">
                        <label class="container_check">Imprimer la facture
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
