@extends('layouts.app', ['title' => 'Sessie - vraag ' . $question->id])

@section('content')
	<div class="container container--page">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Groepssessie: {{ $scan->group->title }} </h1>
	            </div>
	        </div>
		</div>
		<div class="row">	
			<div class="col-md-12">	
				<div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vraag {{ $question->id }} </h5>
                        <h6 class="card-title">THEMA: {{ $theme->name }} </h6>
                        <p class="card-text"> {{ $question->body }} </p>

                        <scan-slider
                        	:answer_id=" {{ $answer->id }} "
                        >
                        </scan-slider>
                        
                    </div>
				</div>
			</div>
		</div>
		<div class="row row__prevnext justify-content-between">
			<div class="col-md-4">
				<a href=" {{ url($previous) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
			</div>
			<div class="col-md-4">
				<a href=" {{ url($next) }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
			</div>
		</div>
	
	</div>
@stop

@section('additional-scripts')
@endsection