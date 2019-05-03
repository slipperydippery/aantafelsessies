@extends('layouts.app', ['title' => 'Feedback'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Laat ons weten wat je van de Digitale Gesprekshulp vond!</h1>
	                
	            </div>
	        </div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="card card__question">
                    <div class="card-body">

                        <span class="card-text card-text__question"> 
			                <h5> {{ $feedbackquestion->title }} </h5>
			                <p> {{ $feedbackquestion->body }} </p>
		            	</span>
                        @php
                        	$loggedin = Auth::guest() ? 0 : 1;
                        @endphp
                        <feedback
                        	:workscan=" {{ $scan }} "
                        	:workfeedbackanswer=" {{ $feedbackanswer }} "
                        ></feedback>
                        
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
		@if ($feedbackquestion->order > 1)
			<div class="col-md-4 ">
				<a href=" {{ route('scan.kennismaken', $scan) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
			</div>
		@endif
		<div class="col-md-4 ml-auto">
			<a href=" {{ route('scan.algemeenbeeldresultaten', $scan) }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
		</div>
	</div>
@stop

@section('additional-scripts')
@endsection
	