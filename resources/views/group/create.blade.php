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
		@if(! $inventarisatie)
            <p class="page-highlight">Wil je bepalen met wie je de sessie het beste kunt uitvoeren? <a href=" {{ route('inventarisatie.store') }} ">Doe de selectiehulp</a> </p>
		@else
			<div class="row">
				<div class="col-md-12">
					<div class="section__panel">
						<div class="section__panel--title">
							<p>Dit is de samenstelling van jouw gesprekspartners:</p>
						</div>
						<div class="row">
							@foreach ($instantietypes as $instantietype)
								@foreach ($inventarisatie->partners->where('invitable', true) as $partner)
									@if ($partner->instantie->instantietype->id == $instantietype->id)
										<div class="col-sm-2">
											<div class="card card__2 card--partner clickable instantietype-{{ $instantietype->id }}">
						                        <div class="card-icons">
													<span class="card-closeicon">
														<i class="material-icons"> close </i>
													</span>
												</div>
												<img src="/img/user.svg" alt="">
												<div class="card-footer">
													{{ $partner->instantie->name }}
												</div>
											</div>
										</div>
									@endif
								@endforeach
							@endforeach
						</div>
					</div>
					<a href=" {{ route('inventarisatie.show', $inventarisatie) }} " class="btn btn-primary">Selectie bewerken</a> 
					<a href="#" class="btn btn-primary">Nieuwe selectie maken</a>
				</div>
			</div>
		@endif
	</div>
@stop

@section('additional-scripts')
@endsection