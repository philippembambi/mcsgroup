@component('mail::message')
{{$details['title']}}

@component('mail::panel')
    {{$details['body']}}
@endcomponent

@component('mail::button', ['url' => 'https://www.group-mcs', 'color'=>'blue'])
Découvrir nos produits
@endcomponent

Votre partenaire business,<br>
{{ config('app.name') }}
@endcomponent
