@extends('layouts.app')

@section('content')
	<div class="container container--page">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Gesprekspartner inspiratie</h1>
	                <p>Hieronder volgen de resultaten...</p>
	            </div>
	        </div>
		</div>
		@guest
			<div class="alert alert-info container-fluid" role="alert">
				<div class="container">
					U bent niet ingelogd, <a href=" {{ route('login') }} ">log in</a> of <a href=" {{ route('register') }} ">maak een account</a> aan om deze resultaten meteen op te slaan.
				 </div>
			</div>
		@endguest
		<div class="row">	
			<div class="col-md-12">	
				<div class="section__panel">
					<div class="section__panel--title">
						<h5>U bent al in contact met:</h5> 
					</div>
					<div class="row ">
					    <div class="col-md-4">
					    	@foreach($partners->where('collaboration', 'yes') as $partner)
						    	<p><strong> {{ $partner->instantie->name }} </strong></p>
					    	@endforeach
					    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">	
			<div class="col-md-12">	
				<div class="section__panel section__panel__table">
					<div class="section__panel--title">
						<h5>U zou de volgende instanties ook aan tafel kunnen uitnodigen:</h5> 
					</div>
			    	@foreach($partners->where('collaboration', 'no') as $partner)
						<div class="row">
						    <div class="col-md-4">
						    	<p><strong> {{ $partner->instantie->name }} </strong></p>
						    </div>
						    <div class="col-md-4">
						    	<p> {{ $partner->instantie->reason }} </p>
						    </div>
						    <div class="col-md-4">
						    	<p> {{ $partner->instantie->contactpersoon }} </p>
						    </div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		<div class="row row__prevnext justify-content-between">
			<div class="col-md-4">
				<a href=" {{ route('gesprekspartners.show', 4) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
			</div>
		</div>

	
		<div class="row">
			<div class="col-sm-12">
				<div class="section__panel">
					<form action="{{ route('inventarisatie.update', session('inventarisatie')) }}" method="post" accept-charset="utf-8">
					    {{ csrf_field() }}
						@include('inventarisatie.partials.form', ['submittext' => 'sla gesprekspartners op'])
					</form>
				</div>
			</div>
		</div>
	</div>
@stop

@section('additional-scripts')
@endsection