@extends('layouts.app', ['title' => 'Sessie - beoordeel de huidige gezamenlijke aanpak'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Beoordeel de huidige gezamenlijke aanpak</h1>
	                <p>Kunt u een algemene indruk geven van hoe goed uw regio het volgens u doet als het gaat om het gezamenlijk goed begeleiden van jongeren in een kwetsbare positie van school naar werk. Nul is ‘heel slecht’  en tien is ‘perfect’</p>
	            </div>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-12">
				@php
					$loggedin = Auth::guest() ? 0 : 1;
				@endphp
				<algemeenbeeld 
					:workscan=" {{ $scan }} " 
					:loggedin=" {{ $loggedin }} "
				>
				</algemeenbeeld>
			</div>
		</div>
		<div class="row row__prevnext justify-content-between">
			<div class="col-md-4">
				<a href=" {{ route('scan.kennismaken', $scan) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
			</div>
			<div class="col-md-4">
				<a href=" {{ route('scan.algemeenbeeldresultaten', $scan) }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
			</div>
		</div>
	</div>
@stop

@section('additional-scripts')
@endsection
