@extends('layouts.app', ['title' => 'Scan - afgerond!'])

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">De sessie is afgerond!</h1>
	                <p>Je hebt alle vragen al beantwoord. Je kunt jezelf een overzicht van de actiepunten mailen, of naar een overzicht van alle resultaten gaan.</p>
	            </div>
	        </div>
		</div>
		<div class="row row__cards">
		    <div class="col-md-6">
		        <a href=" {{ route('scan.introductie', $scan) }} " title="">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Bekijk de actiepunten</h5>
		                    <img src="/img/running.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
		    <div class="col-md-6">
		        <a href=" {{ route('scan.introductie', $scan) }} " title="">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Bekijk de resultaten</h5>
		                    <img src="/img/resultaten.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
		    <div class="col-md-6">
		        <a href=" {{ route('scan.introductie', $scan) }} " title="">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Email mij de actiepunten</h5>
		                    <img src="/img/letter.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>
		    <div class="col-md-6">
		        <a href=" {{ route('scan.introductie', $scan) }} " title="">
		            <div class="card card__dashboard">
		                <div class="card-body">
		                    <h5 class="card-title">Doe de sessie opnieuw</h5>
		                    <img src="/img/refresh.jpg" alt="">
		                </div>
		            </div>
		        </a>
		    </div>

		</div>

		<div class="row row__prevnext justify-content-between">
			<div class="col-md-4">
				<a href=" {{ route('scanquestions.followup', $scan) }} " class="btn btn-primary btn-block btn__prevnext"><i class="material-icons"> navigate_before </i> vorige</a>
			</div>
			<div class="col-md-4">
				<a href=" {{ route('home') }} " class="btn btn-primary btn-block btn__prevnext">naar het dashboard </a>
			</div>
		</div>
	</div>
@stop

@section('additional-scripts')
@endsection