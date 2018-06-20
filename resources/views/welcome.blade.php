@extends('layouts.app')

@section('content')
    <div class="banner">
        <div class="container container--banner">
            <div class="curve"></div>
            <div class="siteinfo">
                <img class="printlogo" src="/img/logo.svg">
            </div>
        </div>
    </div>

    <div class="container container__welcome">
        <div class="row">
            <div class="col-12">
                <h2 class="subtitle">Samen aan tafel om samen schulden te voorkomen.</h2>
                <p>Samen bereik je meer dan alleen. Zeker als het gaat om het voorkomen van schulden. Daarom heeft Schouders Eronder deze digtale gesprekshulp ontwikkeld om samen schulden te signaleren en te informeren en actie te ondernemen. </p>
                <div class="mainbutton--container">
                    <a href=" {{ route('loggless.start') }} " class="btn btn-primary btn-lg">Start gesprekssessie</a> <br>
                    <a href="/pdf/handleiding_participatiescan.pdf" data-toggle="modal" data-target="#exampleModal"><span class="fineprint fineprint--welcome">hoe werkt een sessie?</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row card-group">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Films</h5>
                        <img class="card-img-top" src="/img/flims_lg.jpg" alt="Card image cap">
                        <p class="card-text">Morbi ac felis. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris.</p>
                        <a href=" # " class="btn btn-outline-primary">Bekijk de films</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ideeën</h5>
                        <img class="card-img-top" src="/img/idea_lg.jpg" alt="Card image cap">
                        <p class="card-text">Morbi ac felis. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris.</p>
                        <a href="#" class="btn btn-outline-primary">Doe inspiratie op</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kennisbank</h5>
                        <img class="card-img-top" src="/img/book_lg.jpg" alt="Card image cap">
                        <p class="card-text">Morbi ac felis. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris.</p>
                        <a href="#" class="btn btn-outline-primary">Naar de kennisbank</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hoe werkt het?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Uit onderzoek blijkt dat schuld kan worden voorkomen als publieke en private partijen samenwerken en inzicht hebben in: </p>
                    <ul>
                        <li>Drempels voor vragen van hulp</li>
                        <li>Communicatiestrategieën </li>
                        <li>Effectieve samenwerking </li>
                        <li>Professionaliteit van de uitvoering</li>
                    </ul>
                    <p>Deze gesprekshulp geeft jou en je geprekspartners inzicht in verbeterpunten ten aanzien van deze thema’s en geeft gerichte handvatten om schulden vroegtijdig te signaleren</p>
                    <p><strong>Stap 1:</strong></p>
                    <p>Bepaal met wie je het beste kunt samenwerken.</p>
                    <p>De “selectiehulp gesprekspartners” geeft je inzicht in de partijen met welke partijen uit jouw regio je dit gesprek kunt voeren.</p>
                    <p><strong>Stap 2:</strong></p>
                    <p>Nodig jouw gesprekspartners uit en ontdek samen aan de hand van deze gesprekshulp hoe je schulden in jouw regio vroegtijdig kunt voorkomen.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluit</button>
                </div>
            </div>
        </div>
    </div>

@endsection


{{-- @section('additional-scripts')
@endsection --}}