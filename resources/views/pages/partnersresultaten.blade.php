@extends('layouts.app')

@section('content')
	<div class="container container--page">
		<div class="row">
	        <div class="col-md-12">
	            <div class="page--title">
	                <h1 class="pagetitle">Gesprekspartner inspiratie</h1>
	                <p>We weten uit de literatuur dat er een aantal belangrijke partijen zijn bij het oplossen van schuldenproblematiek. De eerste stap van een geslaagde sessie is daarom ook om te onderzoeken wie de geschikte gesprekspartners zijn om uit te nodigen voor een sessie. Hier volgen 4 categoriën met partijen. Geef per partij aan of er al een samenwerking bestaat, nog niet bestaat, of dat deze partij niet van toepassing is.</p>
	            </div>
	        </div>
		</div>
		<div class="row">	
			<div class="col-md-12">	
				<div class="section__panel">
					<div class="section__panel--title">
						<h5>U bent al in contact met:</h5> 
					</div>
					<div class="row ">
					    <div class="col-md-4">
					    	<p><strong>Zorgverzekeraar</strong></p>
					    	<p><strong>Waterbedrijf</strong></p>
					    	<p><strong>Incassobureau</strong></p>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">	
			<div class="col-md-12">	
				<div class="section__panel">
					<div class="section__panel--title">
						<h5>Denk er aan om in contact te comen met:</h5> 
					</div>
					<div class="row ">
					    <div class="col-md-4">
					    	<p><strong>Woningcorporatie</strong></p>
					    </div>
					    <div class="col-md-4">
					    	<p>Het is verstandig om in contact te komen met deze partij omdat Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Praesent egestas tristique nibh. In ut quam vitae odio lacinia tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					    </div>
					    <div class="col-md-4">
					    	<p>De beste manier om met deze partij in contact te komen is door Suspendisse eu ligula. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Nullam tincidunt adipiscing enim.</p>
					    	<p><a href="#">Contactpersoon</a></p>
					    	<p><a href="#">Contactpersoon</a></p>
					    </div>
					</div>
					<div class="row ">
					    <div class="col-md-4">
					    	<p><strong>Energieleveranciers</strong></p>
					    </div>
					    <div class="col-md-4">
					    	<p>Het is verstandig om in contact te komen met deze partij omdat Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Praesent egestas tristique nibh. In ut quam vitae odio lacinia tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					    </div>
					    <div class="col-md-4">
					    	<p>De beste manier om met deze partij in contact te komen is door Suspendisse eu ligula. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Nullam tincidunt adipiscing enim.</p>
					    	<p><a href="#">Contactpersoon</a></p>
					    </div>
					</div>
					<div class="row ">
					    <div class="col-md-4">
					    	<p><strong>Bank (hypotheekverstrekker)</strong></p>
					    </div>
					    <div class="col-md-4">
					    	<p>Het is verstandig om in contact te komen met deze partij omdat Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Praesent egestas tristique nibh. In ut quam vitae odio lacinia tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					    </div>
					    <div class="col-md-4">
					    	<p>De beste manier om met deze partij in contact te komen is door Suspendisse eu ligula. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Nullam tincidunt adipiscing enim.</p>
					    	<p><a href="#">Contactpersoon</a></p>
					    	<p><a href="#">Contactpersoon</a></p>
					    </div>
					</div>
				</div>
			</div>
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
@stop

@section('additional-scripts')
@endsection