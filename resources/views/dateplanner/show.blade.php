@extends('layouts.app', ['title' => 'Datumprikker'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Datumprikker</h1>
	                <p>Tijd om een datum te prikken</p>
	            </div>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h5>Prik een datum</h5>
				<dateplanner
					:dateplanner_id = {{ $dateplanner->id }}
					:authscan_id = {{ $dateplanner->authscan()->id }}
					:is-admin = {{ $dateplanner->authscan()->isOwner() ? 1 : 0 }}
				>
				</dateplanner>

			</div>
		</div>
		<div class="row row__prevnext justify-content-between">
			<div class="col-md-4">
				<a href=" {{ route('scan.show', $dateplanner->authscan()) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> Terug naar Sessie overzicht</a>
			</div>
		</div>
	</div>
@stop

@section('additional-scripts')
@endsection