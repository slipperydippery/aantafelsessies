@component('mail::message')
# Nieuwe Feedback
{{ $feedback->scan->user->name }} heeft zojuist feedback ingevuld. Bekijk hier de nieuwe feedback:

@component('mail::button', ['url' => $url ])
Bekijk de nieuwe feedback
@endcomponent

<a href="{{ $urlall }}">of bekijk alle feedback</a>



Succes!<br>
{{ config('app.name') }}
@endcomponent
