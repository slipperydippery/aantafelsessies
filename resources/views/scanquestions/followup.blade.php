@extends('layouts.app', ['title' => 'Sessie - plan vervolgafspraak'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Plan een Vervolgafspraak</h1>
	                <p>Je hebt alle vragen al beantwoord. We adviseren om nu alvast een vervolgafspraak te maken om de uitgevoerde actiepunten om te zetten naar een werkagenda. De beheerder kan op de kalender een datum prikken zodat deze afspraak naar alle deelnemers van de groep kan worden gemaild.</p>
					@if($scan->followup)
					    <p  class="scandate">Er is een vervolgafspraak gepland op: {{ $scan->followup->date }} om {{ $scan->followup->time }}.</p>
					@else
					    <p  class="scandate">Er is nog geen vervolgafspraak gepland</p>
					@endif
	            </div>
	        </div>
		</div>
		@if($scan->id == $scan->group->owner->id)
			<div class="row">
				<div class="col-md-12">
					<div class="section__panel">
						<div class="section__panel--title">
							<h5></h5>
			                <span><em></em></span>
						</div>

							<form action="{{ route('scanquestions.commitdatetime', $scan) }}" method="post" accept-charset="utf-8">
							    {{ csrf_field() }}
						        <div class="row date__container">
						            <div class="col-sm-12 ">
						                @if($scan->followup)
						                   <label for="datepicker"><h4> Kies een andere daum: </h4></label>
						               @else
						                   <label for="datepicker"><h4> Plan een vervolgdatum voor het maken van de werkagenda. </h4></label>
						               @endif
						           </div>
						        
						            <div class="col-sm-4 ">
						                @if ($errors->has('date'))
						                     <div class="alert alert-danger">
						                        <strong> Incompleet: </strong>Datum is verplicht
						                     </div>
						                @endif
									    <input id="date" type="text" class="hidden" name="date" value="{{ old('date', request('date') ?? $scan->followup->date ?? null) }}">
						            </div>
						            <div class="col-sm-4 ">
						               @if ($errors->has('time'))
						                    <div class="alert alert-danger">
						                       <strong> Incompleet: </strong>Tijd is verplicht
						                    </div>
						               @endif
						                <div class="form-group">
										    <input id="time" type="text" class="hidden" name="time" value="{{ old('time', request('time') ?? $scan->followup->time ?? null) }}">
						                </div>
						            </div>

						        </div>


						        <div class="col-sm-12 thema-submit-container">
						            <div class="form-group">
							            <input type="submit" value=" Datum opslaan " class="btn btn-primary " />
						                @if($scan->followup)
						                    <a href=" {{ route('scanquestions.complete', $scan) }}"  class="btn btn-secondary" > Geen nieuwe datum opslaan</a>
						               @else
						                    <a href=" {{ route('scanquestions.complete', $scan) }}"  class="btn btn-secondary" > Geen datum opslaan</a>
						               @endif
						            </div>
						        </div>  
							</form>

					</div>
				</div>
			</div>
		@endif
		<div class="row row__prevnext justify-content-between">
			<div class="col-md-4">
				<a href=" {{ url($previous) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
			</div>
			<div class="col-md-4">
				<a href=" {{ url($next) }} " class="btn btn-primary btn-block btn__prevnext">Rond de sessie af <i class="material-icons"> navigate_next </i></a>
			</div>
		</div>
	</div>
@stop

@section('additional-scripts')    
    <script src="{{ URL::asset('/js/picker.js') }}"></script>
    <script src="{{ URL::asset('/js/picker.date.js') }}"></script>
    <script src="{{ URL::asset('/js/picker.time.js') }}"></script>

    <script>
      $(function() {
        // Enable Pickadate on an input field
        $('#time').pickatime({
            formatSubmit: 'HH:i',
            hiddenName: true
        });
        $('#date').pickadate({
            monthsFull: [ 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december' ],
            monthsShort: [ 'jan', 'feb', 'maa', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec' ],
            weekdaysFull: [ 'zondag', 'maandag', 'dinsdag', 'woensdag', 'donderdag', 'vrijdag', 'zaterdag' ],
            weekdaysShort: [ 'zo', 'ma', 'di', 'wo', 'do', 'vr', 'za' ],
            formatSubmit: 'yyyy/mm/dd',
            hiddenName: true,
            close: '',
        });
      });   
    </script>
    <script>
        function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = 0;
            }
        }, 1000);
    }

    window.onload = function () {
        var fifteenMinutes = 60 * 15,
            display = document.querySelector('#time');
        startTimer(fifteenMinutes, display);
    };
    </script>

@stop