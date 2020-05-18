@component('mail::message')
# Olá, Meu nome é {{ $nome }}!
 
<p>{{ $mensagem }}</p>
 
Att,<br>
{{ $email }}<br>
{{ config('app.name') }}
@endcomponent