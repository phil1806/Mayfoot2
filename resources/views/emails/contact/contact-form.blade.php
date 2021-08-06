@component('mail::message')
# Bonjour

Vous avez reçu un mail de la part de <span class="fw-bold">{{ $data['name'] }}</span>

Email expéditeur : {{ $data['email'] }}

# Message:
{{ $data['message'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
