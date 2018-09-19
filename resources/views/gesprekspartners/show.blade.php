@extends('layouts.app', ['title' => 'Bepaal je gesprekspartners: ' . $instantietype->name])

@section('content')
	@guest
		<div class="alert alert-info container-fluid" role="alert">
			<div class="container">
				Je bent niet ingelogd, <a href=" {{ route('login') }} ">log in</a> of <a href=" {{ route('register') }} ">maak een account</a> aan om deze resultaten meteen op te slaan.
			 </div>
		</div>
	@endguest
	<div class="container container--page">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Bepaal je gesprekspartners</h1>
	                <p>We weten uit de literatuur dat er een aantal belangrijke partijen zijn bij het signaleren en aanpakken van schuldenproblematiek. De eerste stap van een geslaagde sessie is daarom ook om te onderzoeken wie de geschikte gesprekspartners zijn om uit te nodigen voor een sessie. Hier volgen 4 categorieën met partijen. Geef per partij aan of er al een samenwerking bestaat, nog niet bestaat, of dat deze partij niet van toepassing is.</p>

	                <p>Na het doorlopen van alle categorieën verschijnt een overzicht van samenwerkende partijen. Deze geven we weer als “poppetjes” met daaronder de naam van de instantie.</p>
	            </div>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-tabs nav-tabs__prepanel">
					@foreach ($instantietypes as $thisinstantietype)
						<li class="nav-item">
							<a class="nav-link <?= ($thisinstantietype->id == $instantietype->id) ? 'active' : '' ?>" href=" {{ route('gesprekspartners.show', $thisinstantietype->id) }} "> {{ $thisinstantietype->name }} </a>
						</li>
					@endforeach
					<li class="nav-item">
						<a class="nav-link" href=" {{ route('gesprekspartners.results') }} "> Resultaat </a>
					</li>
				</ul>
				<div class="section__panel section__panel__toptabs">
					<div class="section__panel--title">
						<h5>{{ $instantietype->description }} </h5>
		                <span><em> Geef per partij aan of er op dit moment al een samenwerking bestaat, een samenwerking niet van toepassing is, of dat er geen samenwerking is.</span></em>
					</div>

					<partner-cluster
		            	:instantietype_id = {{ $instantietype->id }}
		            	:inventarisatie_id = {{ $inventarisatie->id }}
					>
					</partner-cluster>

					<div class="row row__prevnext justify-content-between">
						<div class="col-md-4">
							@if ($previous)
								<a href=" {{ route('gesprekspartners.show', $previous) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
							@else
							@endif
						</div>
						<div class="col-md-4">
							@if($next)
								<a href=" {{ route('gesprekspartners.show', $next) }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
							@else
								<a href=" {{ route('gesprekspartners.results') }} " class="btn btn-primary btn-block btn__prevnext">volgende <i class="material-icons"> navigate_next </i></a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('additional-scripts')
@endsection