@extends('layouts.app', ['title' => 'Scan - resultaten beoordeling huidige aanpak'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page--title">
                    <h1 class="pagetitle">Resultaten beoordeling huidige aanpak</h1>
                    <p>Dit zijn de antwoorden van de deelnemers die aan deze sessie meedoen. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <algemeenbeeldresultaten
                    :workscan=" {{ $scan }} "
                    :scanmodel=" {{ $scanmodel }} "
                    :loggedin=" {{ Auth::guest() ? 0 : Auth::user() }} "
                >
                </algemeenbeeldresultaten>

            </div>
        </div>
    </div>
@stop

@section('prevnext')
    <div class="row row__prevnext justify-content-between">
        <div class="col-md-4">
            <a href=" {{ route('scan.algemeenbeeld', $scan) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
        </div>
        <div class="col-md-4">
            <a href=" {{ route('scan.sessieintro', $scan) }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
        </div>
    </div>
@stop

@section('additional-scripts')
@endsection
