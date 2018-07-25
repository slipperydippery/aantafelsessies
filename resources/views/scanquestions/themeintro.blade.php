@extends('layouts.app', ['title' => 'Sessie - thema ' . $theme->id . ' introductie'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Thema {{ $theme->id }}: </h1>
	                <p></p>
	            </div>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-12">

                <div class="themeintro">
                	<h1 class="display-1">
                		{{ $theme->name }}
                		@if ($theme->info)
                			<i class="material-icons clickable muted display-1" data-toggle="tooltip" data-placement="top" title=" {{ $theme->info }} "> info </i>
                		@endif
                	</h1>
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