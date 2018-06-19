@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	            	@guest
		                <h1 class="pagetitle">Bekijk de digitale gesprekshulp</h1>
		                <p>Zonder in te loggen kun je vrijblijvend deze tool bekijken. De resultaten worden niet opgeslagen, </p>
            		@else 
		                <h1 class="pagetitle">Start een sessie</h1>
		                <p>Zonder in te loggen kun je vrijblijvend deze tool bekijken. De resultaten worden niet opgeslagen, </p>
	            	@endguest
	            </div>
	        </div>
		</div>
		<div class="row row__cards">
		    <div class="col-md-6">
		        <a href=" {{ route('gesprekspartners.start') }} " title="">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Selectiehulp gesprekspartners</h5>
							@guest
				                <h6>zonder account</h6>
			                @endguest
		                    <img src="/img/feather.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
		    <div class="col-md-6">
		        <a href=" {{ route('gesprekspartners.start') }} " title="">
			        <div class="card card__dashboard">
			            <div class="card-body">
			                @guest
				                <h5 class="card-title">Bekijk de sessie</h5>
				                <h6>zonder account</h6>
			                @else
				                <h5 class="card-title">Start gesprekssessie</h5>
			                @endguest
	                        <img src="/img/group.jpg" alt="">
			            </div>
			        </div>
			    </a>
		    </div>
		</div>
		@guest
			<div class="row">
				<div class="col-sm-12">
					<br><br>
					<a href=" route('register') " class="btn btn-primary btn-block">Maak een account aan</a>
					<p class="text-center"><em>Of maak een account aan om de resultaten op te slaan.</em></p>
				</div>
			</div>
		@endguest
	</div>
@stop

@section('additional-scripts')
@endsection