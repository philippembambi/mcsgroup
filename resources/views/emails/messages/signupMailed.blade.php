@component('mail::message')
{{$details['title']}}

@component('mail::panel')
    {{$details['body']}}
@endcomponent

@component('mail::button', ['url' => 'https://www.mcsgroupe.com', 'color'=>'blue'])
Découvrir plus de produits
@endcomponent

Votre partenaire business,<br>
{{ config('app.name') }}
@endcomponent
