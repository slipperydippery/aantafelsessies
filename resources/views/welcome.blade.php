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
                <h2 class="subtitle">Samen aan tafel voor vroegsignalering van schulden.</h2>
                <div class="mainbutton--container">
                    <a href=" {{ route('loggless.start') }} " class="btn btn-primary btn-lg">Start de Sessie</a> <br>
                    <a href="/pdf/handleiding_participatiescan.pdf"><span class="fineprint fineprint--welcome">hoe werkt een sessie?</span></a>
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

@endsection


{{-- @section('additional-scripts')
@endsection --}}