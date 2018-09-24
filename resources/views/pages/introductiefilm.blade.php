@extends('layouts.app')

@section('content')
	<div class="container container--page">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Introductiefilm</h1>
	            </div>
	        </div>
		</div>
		<div class="row">	
			<div class="col-md-12">	

		        <h4>Bekijk de introductiefilm over de Digitale Gesprekshulp. In de introductiefilm zie je waarvoor de Digitale Gesprekshulp is gemaakt, en hoe je hem kunt gebruiken</h4>
		        <div class="embed-responsive embed-responsive-16by9">
		          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dIxZWO0Fohk?rel=0" allowfullscreen></iframe>
		        </div>
		        <a href="https://www.youtube.com/watch?v=dIxZWO0Fohk">bekijk de video op youtube</a>				
			</div>
		</div>
	
	</div>
@stop

@section('additional-scripts')
@endsection