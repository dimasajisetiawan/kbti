@component('mail::message')
{{ $data['title'] }}

{{ $data['isi'] }}

Terimakasih, Salam Rahayu<br>
{{ config('app.name') }}
@endcomponent
