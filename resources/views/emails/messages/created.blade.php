@component('mail::message')
# Mail de confirmation

@auth
    Salut, {{$name}}. Veillez confirmer l'adresse email
    {{$email}}
@endauth

@component('mail::panel')
    {{$msg}}
@endcomponent

@component('mail::button', ['url' => '', 'color'=>'blue'])
Confirmer
@endcomponent

Thanks,<br>
Depuis Mcs Group{{-- config('app.name') --}}
@endcomponent
