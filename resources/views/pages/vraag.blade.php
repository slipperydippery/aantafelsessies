@extends('layouts.app')

@section('content')
	<div class="container container--page">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Groepssessie: Gemeente Amsterdam</h1>
	            </div>
	        </div>
		</div>
		<div class="row">	
			<div class="col-md-12">	
				<div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vraag 1</h5>
                        <h6 class="card-title">THEMA: lOREM ET LABORUM</h6>
                        <p class="card-text">Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Aenean ut eros et nisl sagittis vestibulum.?</p>
                        <div class="rangeslider--container" >
                            <input type="range" 
                                min="0" max="10"
                                step="0.1"
                            >
                            <span class="question--answer question--answer__preanswer">5</span>

                        </div>
                    </div>
				</div>
			</div>
		</div>
		<div class="row row__prevnext justify-content-between">
			<div class="col-md-4">
				<a href="#" class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
			</div>
			<div class="col-md-4">
				<a href=" {{ route('home') }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
			</div>
		</div>
	
	</div>
@stop

@section('additional-scripts')
@endsection