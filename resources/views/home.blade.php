@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')

@foreach ($user->dashmessages as $dashmessage)
    @include('partials.dashmessage')
@endforeach

<div class="container container--page">
    <div class="row">
        <div class="col-md-12">
            <div class="page--title">
                <h1 class="pagetitle">Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="row row__cards">
        <div class="col-md-4">
            <div class="card card__dashboard">
                <div class="card-body">
                    <h5 class="card-title">Mijn gespreks&#8203sessies</h5>
                    <p class="card-text">
                        @foreach ($user->scans as $scan)
                            <a href=" {{ route('scan.show', $scan) }} "> 
                                @if($scan->group->owner->id == $scan->id)
                                    <i class="material-icons" data-toggle="tooltip" data-placement="top" title="Je beheert deze sessie"> star </i> 
                                @endif
                                {{ $scan->title }}
                            </a>
                            <br>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href=" {{ route('introductiefilm') }} " title="">
                <div class="card card__dashboard">
                    <div class="card-body">
                        <h5 class="card-title">Instructiefilm</h5>
                        <img src="/img/films.jpg" alt="">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="http://www.kennisbundel.nl/" target="_blank">
                <div class="card card__dashboard">
                    <div class="card-body">
                        <h5 class="card-title disabled">Kennisbank</h5>
                        <img src="/img/book.jpg" alt="">
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row row__cards">
        <div class="col-md-4">
            <a href=" {{ route('inventarisatie.store') }} " title="">
                <div class="card card__dashboard">
                    <div class="card-body">
                        <h5 class="card-title"> <i class="material-icons"> star </i> Start je eigen sessie  </h5>
                        <img src="/img/group.jpg" alt="">
                    </div>
                </div>
            </a>
        </div>
    </div>
        
</div>
@endsection

@section('additional-scripts')
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
              $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
@endsection