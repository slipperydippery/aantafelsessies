@extends('layouts.app', ['title' => 'Sessie - plan vervolgafspraak'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Plan een Vervolgafspraak</h1>
	                <p>Je hebt alle vragen al beantwoord. We adviseren om nu alvast een vervolgafspraak te maken om de uitgevoerde actiepunten om te zetten naar een werkagenda. De beheerder kan op de kalender een datum prikken zodat deze afspraak naar alle deelnemers van de groep kan worden gemaild.</p>
					@if($scan->followup)
					    <p  class="scandate page-highlight">Er is een vervolgafspraak gepland op: {{ $scan->followup->datetime }}.</p>
					@else
					    <p  class="scandate page-highlight">Er is nog geen vervolgafspraak gepland</p>
					@endif
	            </div>
	        </div>
		</div>
		@if($scan->id == $scan->group->owner->id)
			<div class="row">
				<div class="col-md-12">
					<div class="section__panel">
						<div class="section__panel--title">
							@if($scan->followup)
								<h5>Wijzig vervolgaspraak</h5>
							@else
								<h5>Plan een vervolgaspraak</h5>
							@endif
			                <span><em></em></span>
						</div>

						<set-followup
							:group_id=" {{ $scan->group->id }} "
							:beheerder=" {{ ( $scan->group->owner->id == $scan->id) ? 1 : 0  }} "
						>
						</set-followup>

					</div>
				</div>
			</div>
		@endif
	</div>
@stop

@section('prevnext')
	<div class="row row__prevnext justify-content-between">
		<div class="col-md-4">
			<a href=" {{ url($previous) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
		</div>
		<div class="col-md-4">
			<a href=" {{ url($next) }} " class="btn btn-primary btn-block btn__prevnext">Rond de sessie af <i class="material-icons"> navigate_next </i></a>
		</div>
	</div>
@stop

@section('additional-scripts')    


<script>
</script>

@stop