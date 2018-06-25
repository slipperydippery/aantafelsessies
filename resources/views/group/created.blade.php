@extends('layouts.app', ['title' => 'Groep aangemaakt'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page--title">
                    <h1 class="pagetitle">Je hebt succesvol een sessie aangemaakt</h1>
                    <p>Nodig nu jouw gesprekspartners uit per mail en voeg deze link toe: </p>
                	<p><strong>http://aantafelsessies.test/group/{{ $group->id }}/createscan/{{ $group->code }}</strong> <i class="material-icons"> file_copy </i> </p>
                    <p>Deze link geeft de deelnemers direct toegang tot de sessie die je zojuist hebt aangemaakt</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            	<div class="row row__cards">
            	    <div class="col-md-4">
            	        <a href=" # " title="">
            	            <div class="card card__dashboard">
            	                <div class="card-body">
            	                    <h5 class="card-title">Bekijk een voorbeeld email</h5>
            	                    <img src="/img/scan.jpg" alt="">
            	                </div>
            	            </div>
            	        </a>
            	    </div>
            	    <div class="col-md-4">
            	        <a href=" # " title="">
            	            <div class="card card__dashboard">
            	                <div class="card-body">
            	                    <h5 class="card-title">Bekijk je geselecteerde gesprekspartners</h5>
            	                    <img src="/img/scan.jpg" alt="">
            	                </div>
            	            </div>
            	        </a>
            	    </div>
            	    <div class="col-md-4">
            	        <a href=" # " title="">
            	            <div class="card card__dashboard">
            	                <div class="card-body">
            	                    <h5 class="card-title">Bekijk principes om je netwerkpartners te overtuigen</h5>
            	                    <img src="/img/scan.jpg" alt="">
            	                </div>
            	            </div>
            	        </a>
            	    </div>
            	</div>
                <div class="section__panel section__panel__toptabs">
                    <div class="section__panel--title">
                        <h5>Voorbeeld email</h5>
                        <span><em>Hieronder zie je een voorbeeld van een e-mail die je kunt kopiëren en plakken. Als je de link ook meestuurt, kunnen jouw netwerkpartners zich direct aanmelden bij jouw sessie.</em></span>
                    </div>
                    <div class="">
                            <p>Beste netwerkpartner,</p>

                            <p>Graag wil ik u uitnodigen om mee te doen aan een gesprekssessie om samen schulden te voorkomen. Voorkom schulden samen is een digtale gesprekshulp ontwikkeld om samen schulden te signaleren en te informeren en actie te ondernemen. De digitale gesprekshulp helpt ons om aan tafel samen inzicht te krijgen in noodzakelijke verbeteracties om schulden van inwoners in de gemeente te voorkomen.</p>

                            <p>Samen bereiken we meer dan alleen, dus ik hoop op jouw deelname aan deze sessie. De sessie duurt ongeveer 2 uur.</p>

                            <p>Klik op deze link om aan deze scan mee te doen. http://aantafelsessies.test/group/{{ $group->id }}/createscan/{{ $group->code }}</p>

                            <p>Ik neem binnenkort contact op voor een afspraak zodat we de scan gezamenlijk kunnen uitvoeren.</p>

                            <p>Met vriendelijke groeten,</p>

                            <p>(Afzender)</p>
                        </div>
                    </div>
                    <a href=" {{ route('home') }} " class="btn btn-primary ">Naar dashboard</a>
                </div>
            </div>
        </div>

        
    </div>
@endsection


