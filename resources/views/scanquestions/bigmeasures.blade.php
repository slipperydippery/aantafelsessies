@extends('layouts.app', ['title' => 'Sessie - actiepunten uitwerken thema ' . $theme->id])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Actiepunten uitwerken thema {{ $theme->id }}: {{ $theme->name }}  </h1>
	                <p>Hieronder zie je de verbeterpunten die tijdens de sessie door de deelnemers zijn geselecteerd. Je kunt per verbeterpunt een duidelijk omschrijving maken van de acties die je neemt, en je kunt aangeven wie de trekker is. Als je aan een groepsscan meedoet, kan alleen de beheer actiepunten aanvinken en een actie omschrijven</p>
	            </div>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="section__panel">
					@foreach ($scan->group->owner->measures->where('active', true) as $measure)
					@if($measure->question->theme->id == $theme->id)
						<div class="section__panel--title">
							{{ $measure->question->title }}
						</div>
						<div class="row">
							<div class="col-sm-3">
								Actie omschrijving:
							</div>
							<div class="col-sm-9 form-group">
								<big-measure
									:measure_id = {{ $measure->id }}
									:is_manager=" {{ $is_manager = $scan->group->owner->id == $scan->id ? 1 : 0 }} "
								>
								</big-measure>
								
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								Trekker:
							</div>
							<div class="col-sm-9">
								<frontrunner
									:measure_id = {{ $measure->id }}
									:group_id = {{ $measure->scan->group->id }}
									:is_manager=" {{ $is_manager = $scan->group->owner->id == $scan->id ? 1 : 0 }} "
								>
								</frontrunner>
							</div>
						</div>
					@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
@stop

@section('prevnext')
	<div class="row row__prevnext justify-content-between">
		<div class="col-md-4">
			<a href=" {{ url($previous) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
		</div>
		<div class="col-md-4">
			<a href=" {{ url($next) }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
		</div>
	</div>
@stop

@section('additional-scripts')
@endsection