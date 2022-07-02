@component('mail::message')
# {{  $details['title']  }}

@component('mail::panel')
    {{$details['body']}}
{{  $details['description']  }}
@endcomponent

Votre partenaire business,<br>
{{ config('app.name') }}
@endcomponent
