@extends('layouts.app')

@section('hintsmodal')
    <?php 
        $loggedin = Auth::guest() ? 0 : Auth::user();
    ?>

    <hintsmodal
        :active=" {{ $loggedin ? $loggedin->hints : false }} "
        :messages=" [
            'Dit is jouw persoonlijke dashboard. Als je een nieuwe scan aanmaakt, kun je deze meteen of later uitvoeren. Heb je de scan gemaakt? Dan kun je jouw resultaten altijd via het dashboard bekijken of vergelijken met anderen die de scan hebben gemaakt.',

            'Wil je de scan gezamenlijk met netwerkpartners doen? Maak dan een groepsscan aan. Als je de groepsscan hebt aangemaakt, kunnen andere deelnemers hun eigen scan aan jouw groepsscan koppelen. Je krijgt daarvan bericht op het dashboard. Je kunt deelnemers accepteren of verwijderen. Alleen de deelnemers die je accepteert, kunnen meedoen aan jouw groepsscan.',

            'Via dit dashboard heb je altijd toegang tot de kennisbank; een bibliotheek vol links en praktijkvoorbeelden.', 

            'Via dit dashboard heb je altijd actuele cijfers uit jouw regio over jongeren in een kwetsbare positie. Deze cijfers zijn handig bij het ontwikkelen van beleid of voor het direct ontwikkelen van acties voor een bepaalde doelgroep.'

        ] "
        :loggedin=" {{ $loggedin }} "
    >
    </hintsmodal>
@endsection

@section('content')
<div class="container container--page">
    <div class="row">
        <div class="col-md-12">
            <div class="page--title">
                <h1 class="pagetitle">Dashboard</h1>
            </div>
        </div>
    </div>
        <dashmessages :user="user"></dashmessages>
    <div class="row row__cards">
        <div class="col-md-4">
            <a href=" # " title="">
                <div class="card card__dashboard">
                    <div class="card-body">
                        <h5 class="card-title">Nieuwe sessie</h5>
                        <img src="/img/feather.jpg" alt="">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <div class="card card__dashboard">
                <div class="card-body">
                    <h5 class="card-title">Mijn sessies</h5>
                    <p class="card-text">
                        <a href=" {{ route('vraag') }} ">Sessie 1</a><br>
                        <a href="#">Sessie 2</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href=" # " title="">
                <div class="card card__dashboard">
                    <div class="card-body">
                        <h5 class="card-title">Instructiefilms</h5>
                        <img src="/img/films.jpg" alt="">
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row row__cards">
        <div class="col-md-4">
            <a href=" # " title="">
                <div class="card card__dashboard">
                    <div class="card-body">
                        <h5 class="card-title">Nieuwe groep</h5>
                        <img src="/img/group.jpg" alt="">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <div class="card card__dashboard">
                <div class="card-body">
                    <h5 class="card-title">Mijn groepen</h5>
                    <p class="card-text"><a href="#">Region Amsterdam</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href=" # " title="">
                <div class="card card__dashboard">
                    <div class="card-body">
                        <h5 class="card-title">Kennisbank</h5>
                        <img src="/img/book.jpg" alt="">
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
