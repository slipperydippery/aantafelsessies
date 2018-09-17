@extends('layouts.app', ['title' => 'Beheer deelnemers'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Beheer deelnemers van  {{ $group->title }} </h1>
	                <p>Hieronder kun je de zien welke gesprekspartners je hebt geslecteerd tijdens het aanmaken van dese sessie, en welke deelnemers daadwerkelijk mee doen.</p>
	                <p>Je kunt de gesprekspartners bijwerken, en deelnemers verwijderen uit de sessie.</p>
	            </div>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="section__panel">
					<div class="section__panel--title">
						<h5>Overzicht van je deelenemers</h5>
						<p> <a href=" {{ route('inventarisatie.edit', $group->inventarisatie) }} ">Bewerk je gesprekspartners</a> </p>
		                @foreach ($instanties as $instantie)
		                	@if ($group->inventarisatie->partners->where('invitable', true)->contains('instantie', $instantie) || $group->scans->where('instantie_id', $instantie->id)->count())
				                @php
				                	$active = $group->inventarisatie->partners->where('invitable', true)->contains('instantie', $instantie) ? '' : 'inactive';
				                @endphp
								<div class="row">
		            				<div class="col-sm-2">
		            					<div class="card card__2 card--partner clickable instantietype-{{ $instantie->instantietype->id }} {{ $active }} ">
		                                    <div class="card-icons">
		            						</div>
		            						<img src="/img/user.svg" alt="">
		            						<div class="card-footer">
		            							{{ $instantie->name }}
		            						</div>
		            					</div>
		            				</div>
		            				<div class="col-sm-10">
		            					@if ($group->scans->where('instantie_id', $instantie->id)->count())
					                		@foreach ($group->scans->where('instantie_id', $instantie->id) as $scan)
					                			{{ $scan->user->name }} 
					                			<span data-toggle="tooltip" data-placement="top" title="Verwijder deze deelnemer van de sessie">
					                			    <i class="material-icons clickable" data-toggle="modal" data-target="#deleteUserModal-{{ $scan->id }}"> close </i>
					                			</span>
					                			<br>

					                			<!-- Modal -->
					                			<div class="modal fade" id="deleteUserModal-{{ $scan->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
					                			    <div class="modal-dialog" role="document">
					                			        <div class="modal-content">
					                			            <div class="modal-header">
					                			                <h5 class="modal-title" id="deleteUserModalLabel">Verwijder {{ $scan->user->name }}</h5>
					                			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                			                <span aria-hidden="true">&times;</span>
					                			                </button>
					                			            </div>
					                			            <div class="modal-body">
					                			                <p>Weet je zeker dat je <strong>{{ $scan->user->name }}</strong> van <strong>{{ $scan->instantie->name }}</strong> uit de sessie wilt verwijderen?</p>
					                			            </div>
					                			            <div class="modal-footer">
					                			                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleer</button>
					                			                    <form action="{{ route('scan.destroy', $scan) }}" method="post" accept-charset="utf-8">
					                			                        <input type="hidden" name="_method" value="DELETE">
					                			                        {{ csrf_field() }}
					                			                       <!-- Add Submit Field -->
					                			                       <input type="submit" value="Verwijder deelnemer" class="btn btn-primary" />
					                			                    </form>
					                			            </div>
					                			        </div>
					                			    </div>
					                			</div>
					                		@endforeach
		            					@else
		            						<em>Nog geen deelnemers in deze categorie, <a href="#" data-toggle="modal" data-target="#voorbeeldmail">nodig iemand uit</a></em>
		            					@endif
		            				</div>
	            				</div>
		                	@endif
		                @endforeach

					</div>
					<div class="row row__prevnext justify-content-between">
						<div class="col-md-4">
							<a href=" # " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
						</div>
						<div class="col-md-4">
							<a href=" # " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
						</div>
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
@stop

@section('additional-scripts')
@endsection