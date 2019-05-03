@extends('layouts.app', ['title' => 'Feedback'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Bedankt!</h1>
	            </div>
	        </div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
                <span class="card-text card-text__question"> 
	                <h5> We hebben je feedback opgeslagen </h5>
	                <p> Heel erg bedankt voor je input, we gaan er mee aan de slag! </p>
            	</span>

            	<a href=" {{ route('home') }} " class="btn btn-primary "> Naar je dashboard </a>
			</div>
		</div>
	</div>
@stop

@section('prevnext')
	
@stop

@section('additional-scripts')
@endsection
	