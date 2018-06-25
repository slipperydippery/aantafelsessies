@extends('layouts.app', ['title' => 'Maak een groep aan'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Start je eigen gesprekssessie</h1>
	            </div>
	        </div>
		</div>
		@if(! $inventarisatie)
            <p>Wil je bepalen met wie je de sessie het beste kunt uitvoeren? <a href="#">Doe de selectiehulp</a> </p>
		@else
			<div class="row">
				<div class="col-md-12">
					<p>Dit is de samenstelling van gesprekspartners die je eerder hebt gemaakt</p>
					{{ $inventarisatie->title }} <br/>
					<a href="#" class="btn btn-primary">Selectie behouden</a> 
					<a href="#" class="btn btn-primary">Nieuwe selectie maken</a>
				</div>
			</div>
		@endif
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