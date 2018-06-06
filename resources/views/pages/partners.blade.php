@extends('layouts.app')

@section('content')
	<div class="container container--page">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Bepaal je gesprekspartners</h1>
	                <p>We weten uit de literatuur dat er een aantal belangrijke partijen zijn bij het oplossen van schuldenproblematiek. De eerste stap van een geslaagde sessie is daarom ook om te onderzoeken wie de geschikte gesprekspartners zijn om uit te nodigen voor een sessie. Hier volgen 4 categoriën met partijen. Geef per partij aan of er al een samenwerking bestaat, nog niet bestaat, of dat deze partij niet van toepassing is.</p>
	            </div>
	        </div>
		</div>
		@foreach($instantietypes as $instantietype)	
			<div class="row">
				<div class="col-md-12">
					<div class="section__panel">
						<div class="section__panel--title">
							<h5>Partijen: {{ $instantietype->name }} </h5> 
							<h4> {{ $instantietype->description }} </h4>
			                <p><em>Geef per partij aan of er op dit moment al een samenwerking bestaat.</em></p>
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
						<div class="row row__prevnext justify-content-between">
							<div class="col-md-4">
								<a href="#" class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
							</div>
							<div class="col-md-4">
								<a href=" {{ route('partnersresultaten') }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@stop

@section('additional-scripts')
@endsection