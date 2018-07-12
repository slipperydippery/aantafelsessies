@extends('layouts.app', ['title' => 'Sessie - introductie van de sessie'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page--title">
                    <h1 class="pagetitle">Film Voorkom Schulden Samen</h1>
                    <p>Bekijk de film over het samen voorkomen van schulden of ga door naar het volgende scherm. We adviseren de film op een gezamenlijk scherm te bekijken. Klik <a href="https://www.youtube.com/watch?v=0nEFHtUxbuc">hier</a> als de video niet verschijnt.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0nEFHtUxbuc" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>
@stop

@section('prevnext')
    <div class="row row__prevnext justify-content-between">
        <div class="col-md-4">
            <a href=" {{ route('scan.algemeenbeeldresultaten', $scan) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
        </div>
        <div class="col-md-4">
            <a href=" {{ route('scanquestions.intro', [$scan, 1]) }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
        </div>
    </div>
@stop

@section('additional-scripts')
@endsection