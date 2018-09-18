@extends('layouts.app', ['title' => 'Beheer de sessie'])

@section('content')

    @if ($scan->isOwner())
        @foreach ($scan->group->dashmessages as $dashmessage)
            @include('partials.dashmessage')
        @endforeach
    @endif

    @foreach ($scan->dashmessages as $dashmessage)
        @include('partials.dashmessage')
    @endforeach

	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <div class="page--title">
                    <h1 class="pagetitle">
                        @if ($scan->isComplete())
                        	De sessie is afgerond! - {{ $scan->title }} 
                        @else
                            Sessie overzicht - {{ $scan->title }} 
                        @endif
                    </h1>
                    @if ($scan->isOwner())
                        <p class="page-highlight">
                            <span id="groupcode">{{ Request::root() }}/group/{{ $scan->group->id }}/createscan/{{ $scan->group->code }}</span> 
                            <copy-icon
                                copy_content=" {{ Request::root() }}/group/{{ $scan->group->id }}/createscan/{{ $scan->group->code }} "
                            >
                            </copy-icon>
                        </p>
                    @endif
                </div>
            </div>
		</div>

		<div class="row row__cards">
            @if($scan->isComplete())
                <div class="col-md-6">
                    <a href=" {{ route('scan.kennismaken', $scan) }} " title="">
                        <div class="card card__dashboard">
                            <div class="card-body">
                                <h5 class="card-title">Doe de sessie opnieuw</h5>
                                <img src="/img/refresh.jpg" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            @else
                <div class="col-md-6">
                    <a href=" {{ route('scan.kennismaken', $scan) }} " title="">
                        <div class="card card__dashboard">
                            <div class="card-body">
                                <h5 class="card-title">Start de sessie</h5>
                                <img src="/img/feather.jpg" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            @endif
            <div class="col-md-6">
                <a href=" # " title="" data-toggle="modal" data-target="#deleteModal">
                    <div class="card card__dashboard">
                        <div class="card-body">
                            <h5 class="card-title">Verwijder deze sessie</h5>
                            <img src="/img/delete3.jpg" alt="">
                        </div>
                    </div>
                </a>
            </div>

            @if ($scan->isComplete())
                <div class="col-md-6">
                    <a href=" {{ route('scan.measures', $scan) }} " title="">
                        <div class="card card__dashboard">
                            <div class="card-body">
                                <h5 class="card-title">Bekijk de actiepunten</h5>
                                <img src="/img/running.jpg" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href=" {{ route('scan.results', $scan) }} " title="">
                        <div class="card card__dashboard">
                            <div class="card-body">
                                <h5 class="card-title">Bekijk de resultaten</h5>
                                <img src="/img/resultaten.jpg" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href=" {{ route('scan.mailmeasures', $scan) }} " title="">
                        <div class="card card__dashboard">
                            <div class="card-body">
                                <h5 class="card-title">Email mij de actiepunten</h5>
                                <img src="/img/letter.jpg" alt="">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    @if ($scan->group->dateplanner)
                        <a href=" {{ route('dateplanner.show', $scan->group->dateplanner) }} " title="">
                            <div class="card card__dashboard">
                                <div class="card-body">
                                    <h5 class="card-title">Datumprikker</h5>
                                    <img src="/img/dateplanner.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    @elseif($scan->isOwner())
                        <div class="card card__dashboard">
                            <div class="card-body">
                                <h5 class="card-title">Datumprikker</h5>
                                <form action="{{ route('dateplanner.store') }}" method="post" accept-charset="utf-8">
                                    {{ csrf_field() }}
                                    <input type="hidden" id="group_id" name="group_id" value="{{ $scan->group->id }}">
                                    <input type="submit" value=" Maak een Datumprikker aan " class="btn btn-primary " />
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
            @endif


		    @if ($scan->isOwner())
                
                    <div class="col-md-6">
                        <a href="#" data-toggle="modal" data-target="#voorbeeldmail">
                            <div class="card card__dashboard">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="material-icons" data-toggle="tooltip" data-placement="top" title="Je beheert deze sessie"> star </i>
                                        Email om deelnemers uit te nodigen
                                    </h5>
                                    <img src="/img/letter.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" data-toggle="modal" data-target="#voorbeeldmail">
                            <div class="card card__dashboard">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="material-icons"> star </i>
                                        Stuur reminder naar alle deelnemers
                                    </h5>
                                    <img src="/img/letter_alert.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" data-toggle="modal" data-target="#tipsvoorcontact">
                            <div class="card card__dashboard">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="material-icons" data-toggle="tooltip" data-placement="top" title="Je beheert deze sessie"> star </i>
                                        Tips voor het contact maken
                                    </h5>
                                    <img src="/img/contacttips.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" data-toggle="modal" data-target="#overtuigingsprincipes">
                            <div class="card card__dashboard">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="material-icons" data-toggle="tooltip" data-placement="top" title="Je beheert deze sessie"> star </i>
                                        Argumenten om partijen over te halen
                                    </h5>
                                    <img src="/img/overtuiging.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
					@if($scan->group->inventarisatie)
	                    <div class="col-md-6">
	                        <a href="#" data-toggle="modal" data-target="#gesprekspartners">
	                            <div class="card card__dashboard">
	                                <div class="card-body">
	                                    <h5 class="card-title">
	                                    	<i class="material-icons" data-toggle="tooltip" data-placement="top" title="Je beheert deze sessie"> star </i>
		                                    Bekijk je geselecteerde gesprekspartners
		                                </h5>
	                                    <img src="/img/group.jpg" alt="">
	                                </div>
	                            </div>
	                        </a>
	                    </div>
                    @endif
                    <div class="col-md-6">
                        <a href=" {{ route('group.participant.index', $scan->group) }} ">
                            <div class="card card__dashboard">
                                <div class="card-body">
                                    <h5 class="card-title">
                                    	<i class="material-icons" data-toggle="tooltip" data-placement="top" title="Je beheert deze sessie"> star </i>
	                                    Beheer deelnemers van de sessie
	                                </h5>
                                    <img src="/img/group.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
		    @endif
	</div>

	<!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Verwijder deze sessie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Hiermee wordt deze sessie en alle invoer permanent verwijderd.</p>
                    <p>Weet je het zeker?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleer</button>
                    <form action="{{ route('scan.destroy', $scan) }}" method="post" accept-charset="utf-8">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                    	<!-- Add Submit Field -->
                	    <input type="submit" value="Verwijder sessie" class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>


        <!-- Modal -->
        <div class="modal fade" id="overtuigingsprincipes" tabindex="-1" role="dialog" aria-labelledby="overtuigingsprincipesLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="overtuigingsprincipesLabel">Argumenten om partijen over te halen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <a href="/img/Argumenten om partijen over te halen.jpg" target="_blank">
                            <img src="/img/Argumenten om partijen over te halen.jpg" alt="">
                        </a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Sluit</button>
                    </div>
                </div>
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
    <div class="modal fade" id="voorbeeldmail" tabindex="-1" role="dialog" aria-labelledby="voorbeeldmailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            @include('partials.emailmodal')
        </div>
    </div>

        
    <!-- Modal -->
	@if($scan->group->inventarisatie)
	    <div class="modal fade" id="gesprekspartners" tabindex="-1" role="dialog" aria-labelledby="gesprekspartnersLabel" aria-hidden="true">
	        <div class="modal-dialog modal-lg" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="modal-title" id="gesprekspartnersLabel">Bekijk je gesprekspartners</h5>
	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <div class="modal-body">
	                    <div class="row">
	                        @foreach ($scan->scanmodel->instantietypes as $instantietype)
	                            @foreach ($scan->group->inventarisatie->partners->where('invitable', true) as $partner)
	                                @if ($partner->instantie->instantietype->id == $instantietype->id)
	                                    <div class="col-sm-3">
	                                        <div class="card card__2 card--partner clickable instantietype-{{ $instantietype->id }}">
	                                            <div class="card-icons">
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
	                    <div class="modal-footer">
	                        <button type="button" class="btn btn-primary" data-dismiss="modal">Sluit</button>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
    @endif
@stop

@section('additional-scripts')
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
              $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
@endsection