@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Bekijk de scan</h1>
	                <p>Zonder in te loggen kun je vrijblijvend deze tool bekijken. De resultaten worden niet opgeslagen, </p>
	            </div>
	        </div>
		</div>
		<div class="row row__cards">
		    <div class="col-md-6">
		        <a href=" {{ route('gesprekspartners.start') }} " title="">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Bepaal je gesprekspartners</h5>
		                    <img src="/img/feather.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
		    <div class="col-md-6">
		        <div class="card card__dashboard">
		            <div class="card-body">
		                <h5 class="card-title">Bekijk de sessie</h5>
                        <img src="/img/group.jpg" alt="">
		            </div>
		        </div>
		    </div>

		</div>
	</div>
@stop

@section('additional-scripts')
@endsection