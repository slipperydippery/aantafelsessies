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
                <h2 class="subtitle">Vestibulum volutpat pretium libero. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</h2>
                <div class="mainbutton--container">
                    <a href=" {{ route('partners') }} " class="btn btn-primary btn-lg">Start de Sessie</a> <br>
                    <a href="/pdf/handleiding_participatiescan.pdf"><span class="fineprint fineprint--welcome">hoe werkt een sessie?</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row card-group">
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="/img/temp.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Titel</h5>
                        <p class="card-text">Morbi ac felis. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris.</p>
                        <a href=" # " class="btn btn-outline-primary">volg de link</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="/img/temp.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Titel</h5>
                        <p class="card-text">Morbi ac felis. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris.</p>
                        <a href="#" class="btn btn-outline-primary">volg de link</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="/img/temp.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Titel</h5>
                        <p class="card-text">Morbi ac felis. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris.</p>
                        <a href="#" class="btn btn-outline-primary">volg de link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


{{-- @section('additional-scripts')
@endsection --}}