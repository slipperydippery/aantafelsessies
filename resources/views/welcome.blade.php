@extends('layouts.app', ['title' => 'Home'])

@section('content')
    <div class="banner">
        <div class="container container--banner">
        </div>
    </div>

    <div class="welcome">
        <div class="container container__welcome">
            <div class="row">
                <div class="col-12">
                    <h2 class="subtitle">Samen aan tafel om samen schulden te voorkomen</h2>
                    <p>Samen bereik je meer dan alleen. Zeker als het gaat om het voorkomen van schulden. Daarom heeft Schouders Eronder deze digtale gesprekshulp ontwikkeld om samen schulden te signaleren en actie te ondernemen. </p>
                    <div class="mainbutton--container">
                        <a href="  {{ route('inventarisatie.store') }}  " class="btn btn-primary btn-lg">Start gesprekssessie</a> <br>
                        <a href="/pdf/handleiding_participatiescan.pdf" data-toggle="modal" data-target="#exampleModal"><span class="fineprint fineprint--welcome">hoe werkt een sessie?</span></a>
                    </div>
                </div>
                <div class="col-12">
                    <p style="display:none">
                        Deze applicatie werkt het beste met Google Chrome, Firefoox, Safari, en Edge. Internet Explorer wordt niet meer onderhouden en is geen veilige browser. Wij adviseren u daarom om gebruik te maken van een andere browser. 
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row card-group">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Instructiefilm</h5>
                        <img class="card-img-top" src="/img/flims_lg.jpg" alt="Card image cap">
                        <p class="card-text card-text__welcome">Bekijk de instructiefilm om te zien hoe de digitale gesprekshulp werkt.</p>
                        <a href=" {{ route('introductiefilm') }} " class="btn btn-outline-primary">Bekijk de film</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Animatiefilm</h5>
                        <img class="card-img-top" src="/img/flims_lg.jpg" alt="Card image cap">
                        <p class="card-text card-text__welcome">
                            Schulden voorkomen? <br>
                            Hoe kunnen we dat samen doen?
                        </p>
                        <a href=" {{ route('animatiefilm') }} " class="btn btn-outline-primary">Bekijk de film</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kennisbank</h5>
                        <img class="card-img-top" src="/img/book_lg.jpg" alt="Card image cap">
                        <p class="card-text card-text__welcome">De kennisbank is nog in ontwikkeling.</p>
                        <a href="#" class="btn btn-outline-primary disabled" >In ontwikkeling</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="hoeWerktHetModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hoeWerktHetModal">Hoe werkt het?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Deze gesprekshulp ondersteunt gemeenten bij het opzetten van een samenwerking tussen publieke en private partijen. Uit literatuur blijkt dat de volgende thema’s belangrijk zijn bij het voorkomen van schulden onder burgers:</p>
                    <ul>
                        <li>Drempels voor vragen van hulp</li>
                        <li>Communicatiestrategieën</li>
                        <li>Effectieve samenwerking</li>
                        <li>Professionaliteit van de uitvoering</li>
                    </ul>
                    <p>Op basis van deze thema’s zijn 17 stellingen ontwikkeld om samen het gesprek over te voeren.</p>
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