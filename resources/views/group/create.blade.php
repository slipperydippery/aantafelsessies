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
		<div class="row">
			<div class="col-md-12">
				<create-group
					:instantietypes=" {{ $instantietypes }} "
					:alldistricts=" {{ $districts }} "
					:inventarisatie_id=" {{ $inventarisatie ? $inventarisatie->id : 0 }} "
				>
				</create-group>
			</div>
		</div>
	</div>
@stop

@section('additional-scripts')
@endsection