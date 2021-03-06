@extends('layouts.app', ['title' => 'Sessie - beoordeel de huidige gezamenlijke aanpak'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Beoordeel de huidige gezamenlijke aanpak</h1>
	                
	            </div>
	        </div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="card card__question">
                    <div class="card-body">

                        <span class="card-text card-text__question"> 
			                <h5>Beoordeel de huidige gezamenlijke aanpak</h5>
			                <p>Kun je een algemene indruk geven van hoe goed jouw gemeente het volgens jou doet als het gaat om het gezamenlijk voorkomen van schulden.</p>
		            	</span>
						<countdown date="60"></countdown>
                        @php
                        	$loggedin = Auth::guest() ? 0 : 1;
                        @endphp
                        <algemeenbeeld 
                        	:workscan=" {{ $scan }} " 
                        	:loggedin=" {{ $loggedin }} "
                        >
                        </algemeenbeeld>
                        
                    </div>
                    <div class="card-footer">
	                    <p>Geef met een cijfer aan in hoeverre de stelling van toepassing is.</p>
                    </div>
				</div>



			</div>
		</div>
	</div>
@stop

@section('prevnext')
	<div class="row row__prevnext justify-content-between">
		<div class="col-md-4">
			<a href=" {{ route('scan.kennismaken', $scan) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
		</div>
		<div class="col-md-4">
			<a href=" {{ route('scan.algemeenbeeldresultaten', $scan) }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
		</div>
	</div>
@stop

@section('additional-scripts')
@endsection
