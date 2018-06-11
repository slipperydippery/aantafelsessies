@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Maak een group aan</h1>
	                <p>We weten uit de literatuur dat er een aantal belangrijke partijen zijn bij het oplossen van schuldenproblematiek. De eerste stap van een geslaagde sessie is daarom ook om te onderzoeken wie de geschikte gesprekspartners zijn om uit te nodigen voor een sessie. Hier volgen 4 categoriën met partijen. Geef per partij aan of er al een samenwerking bestaat, nog niet bestaat, of dat deze partij niet van toepassing is.</p>
	            </div>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<create-group
					:instantietypes=" {{ $instantietypes }} "
					:alldistricts=" {{ $districts }} "
				>
				</create-group>
			</div>
		</div>
	</div>
@stop

@section('additional-scripts')
@endsection