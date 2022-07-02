@component('mail::message')
{{$details['title']}}

@component('mail::panel')
Bon d'achat du {{ $details['purchase_date'] }}
<br>
    <ul>
        <li>
            Article:  <span><strong style="float: right;">{{ $details['article_name'] }}</strong></span>
        </li>
        <li>
            Quantité acheté:  <span><strong style="float: right;">{{ $details['purchase_qte'] }}</strong></span>
        </li>
        <li>
            ID de la transaction:  <span><strong style="float: right;">{{ $details['id_payement'] }}</strong></span>
        </li>
        <li>
            Montant total:  <span><strong style="float: right;">{{ $details['amount'].' '.$details['currency'] }}</strong></span>
        </li>
    </ul>
@endcomponent

@component('mail::button', ['url' => 'https://www.group-mcs/basket/purchases', 'color'=>'blue'])
Revoir la commande
@endcomponent

Votre partenaire business,<br>
{{ config('app.name') }}
@endcomponent
