@extends('layouts.app', ['title' => 'Sessie - plan vervolgafspraak'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Plan een Vervolgafspraak</h1>
	                <p>Je hebt alle vragen al beantwoord. We adviseren om nu alvast een vervolgafspraak te maken om de uitgevoerde actiepunten om te zetten naar een werkagenda. De beheerder kan op de kalender een datum prikken zodat deze afspraak naar alle deelnemers van de groep kan worden gemaild.</p>
	            </div>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="section__panel">
					<div class="section__panel--title">
						<h5></h5>
		                <span><em></em></span>
					</div>
					@if($scan->followup)
					    <p  class="scandate">Er is een vervolgafspraak gepland op: {{ $scan->followup->date }} om {{ $scan->followup->time }}.</p>
					@else
					    <p  class="scandate">Er is nog geen vervolgafspraak gepland</p>
					@endif
				</div>
			</div>
		</div>
		<div class="row row__prevnext justify-content-between">
			<div class="col-md-4">
				<a href=" {{ url($previous) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
			</div>
			<div class="col-md-4">
				<a href=" {{ url($next) }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
			</div>
		</div>
	</div>
@stop

@section('additional-scripts')
@endsection