@extends('layouts.app', ['title' => 'Sessie - introductie'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page--title">
                    <h1 class="pagetitle">Introductiefilm</h1>
                    <p>Bekijk de introductiefilm over het samen voorkomen van schulden of ga door naar het volgende scherm. We adviseren de film op een gezamenlijk scherm te bekijken. Klik <a href="https://www.youtube.com/watch?v=0nEFHtUxbuc">hier</a> als de video niet verschijnt.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0nEFHtUxbuc" allowfullscreen></iframe>
                </div>

                <div class="row row__prevnext justify-content-between">
                    <div class="col-md-4">
                        <a href=" {{ route('scan.show', $scan) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
                    </div>
                    <div class="col-md-4">
                        <a href=" {{ route('scan.kennismaken', $scan) }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('additional-scripts')
@endsection