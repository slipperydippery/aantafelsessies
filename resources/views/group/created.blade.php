@extends('layouts.app', ['title' => 'Groep aangemaakt'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page--title">
                    <h1 class="pagetitle">Je hebt succesvol een sessie aangemaakt</h1>
                    <p>Nodig nu jouw gesprekspartners uit per mail. Deze link geeft de deelnemers direct toegang tot de sessie die je zojuist hebt aangemaakt:</p>
                    <p class="page-highlight">
                        <span id="groupcode">{{ Request::root() }}/group/{{ $group->id }}/createscan/{{ $group->code }} </span>
                        <copy-icon
                            copy_content=" {{ Request::root() }}/group/{{ $group->id }}/createscan/{{ $group->code }} "
                        >
                        </copy-icon>
                    </p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row row__cards row__cards__doubletitle">
                    <div class="col-md-6">
                        <a href="#" data-toggle="modal" data-target="#voorbeeldmail">
                            <div class="card card__dashboard">
                                <div class="card-body">
                                    <h5 class="card-title">Bekijk een voorbeeld email</h5>
                                    <img src="/img/letter.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" data-toggle="modal" data-target="#tipsvoorcontact">
                            <div class="card card__dashboard">
                                <div class="card-body">
                                    <h5 class="card-title">Tips voor het contact maken</h5>
                                    <img src="/img/contacttips.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" data-toggle="modal" data-target="#argumenten">
                            <div class="card card__dashboard">
                                <div class="card-body">
                                    <h5 class="card-title">Argumenten om partijen uit te nodigen</h5>
                                    <img src="/img/overtuiging.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" data-toggle="modal" data-target="#tipsvoorgesprek">
                            <div class="card card__dashboard">
                                <div class="card-body">
                                    <h5 class="card-title">Tips voor het gesprek</h5>
                                    <img src="/img/overtuiging.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>  
        <br><br>

        <div class="row">
            <div class="col-md-12">
                <div class="section__panel">
                    <div class="section__panel--title">
                        <label >
                            Dit is de samenstelling van jouw gesprekspartners:
                            

                        </label>
                    </div>
                    <div class="row">
                        @foreach ($instantietypes as $instantietype)
                            @foreach ($inventarisatie->partners->where('invitable', true) as $partner)
                                @if ($partner->instantie->instantietype->id == $instantietype->id)
                                    <div class="col-sm-2">
                                        <div class="card card__2 card--partner clickable instantietype-{{ $instantietype->id }}">
                                            <div class="card-icons">
                                                <span class="card-closeicon">
                                                    <i class="material-icons"> close </i>
                                                </span>
                                            </div>
                                            <img src="/img/user.svg" alt="">
                                            <div class="card-footer">
                                                {{ $partner->instantie->name }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
                <a href=" {{ route('inventarisatie.show', $inventarisatie) }} " class="btn btn-primary">Selectie bewerken</a> 
            </div>
        </div>

        <div class="row row__prevnext justify-content-end">
            <div class="col-md-4">
                <a href=" {{ route('home') }} " class="btn btn-primary btn-block btn__prevnext">Naar het dashboard </a>

            </div>
        </div>      
    </div>

        
    <!-- Modal -->
    <div class="modal fade" id="argumenten" tabindex="-1" role="dialog" aria-labelledby="overtuigingsprincipesLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="overtuigingsprincipesLabel">Argumenten om partijen uit te nodigen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="/img/Argumenten om partijen uit te nodigen.jpg" target="_blank">
                        <img src="/img/Argumenten om partijen uit te nodigen.jpg" alt="">
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Sluit</button>
                </div>
            </div>
        </div>
    </div>

        
    <!-- Modal -->
    <div class="modal fade" id="voorbeeldmail" tabindex="-1" role="dialog" aria-labelledby="voorbeeldmailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            @include('partials.emailmodal')
        </div>
    </div>

        
    <!-- Modal -->
    <div class="modal fade" id="tipsvoorcontact" tabindex="-1" role="dialog" aria-labelledby="gesprekspartnersLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="gesprekspartnersLabel">Tips voor het contact maken</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="/img/Tips voor het contact maken.jpg" target="_blank">
                        <img src="/img/Tips voor het contact maken.jpg" alt="">
                    </a>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Sluit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="tipsvoorgesprek" tabindex="-1" role="dialog" aria-labelledby="gesprekspartnersLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="gesprekspartnersLabel">Tips voor het gesprek</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="/img/Tips voor het gesprek.jpg" target="_blank">
                        <img src="/img/Tips voor het gesprek.jpg" alt="">
                    </a>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Sluit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


