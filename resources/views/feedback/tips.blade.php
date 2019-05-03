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
			                <h5> Heb je verder nog tips voor ons? </h5>
		            	</span>
                        
                        <feedback-tips
                        	:workfeedback=" {{ $scan->feedback }} "
                        >
                        </feedback-tips>
                        
                    </div>
				</div>



			</div>
		</div>
	</div>
	<div class="container">
		<div class="row row__prevnext justify-content-between">
			<div class="col-md-4 ">
				<a href=" {{ route('feedback.showquestion', [$scan, ($scan->scanmodel->feedbackquestions->count())]) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
			</div>
			
			<div class="col-md-4 ml-auto">
				<a href=" {{ route('feedback.thanks', $scan) }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
			</div>
			
		</div>
	</div>
@stop


@section('additional-scripts')
@endsection
	