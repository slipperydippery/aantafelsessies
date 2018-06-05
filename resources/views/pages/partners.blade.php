@extends('layouts.app')

@section('content')
	<div class="container container--page">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Partners</h1>
	                <h2>Geef per partij aan of er op dit moment al een samenwerking bestaat.</h2>
	            </div>
	        </div>
		</div>
		@foreach($instantietypes as $instantietype)	
			<div class="row">
				<div class="col-md-12">
					<div class="section__panel">
						<div class="section__panel--title">
							<h5> {{ $instantietype->name }} </h5> 
							<h4> {{ $instantietype->description }} </h4>
						</div>
						<div class="row row__cards">
							@foreach($instantietype->instanties as $instantie)
							    <div class="col-md-4">
						            <div class="card ">
						                <div class="card-body">
						                    <h5 class="card-title"> {{ $instantie->name }} </h5>
						                    <img src="/img/choice.jpg" alt="">
						                </div>
						            </div>
							    </div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@stop

@section('additional-scripts')
@endsection