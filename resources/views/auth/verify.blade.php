@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header" style="text-align:center;">{{ __('Verifieer je e-mailadres') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Er is een nieuwe verificatielink verzonden naar jouw e-mailadres.') }}
                        </div>
                    @endif

                    {{ __('Controleer voordat je doorgaat jouw e-mail voor een verificatielink.') }}
                    {{ __('Als je de e-mail niet hebt ontvangen') }}, <a href="{{ route('verification.resend') }}">{{ __('klik hier om een andere te vragen') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
