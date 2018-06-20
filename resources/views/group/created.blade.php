@extends('layouts.app', ['title' => 'Groep aangemaakt'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page--title">
                    <h1 class="pagetitle">Groep aangemaakt</h1>
                    <p>Je hebt succesvol een groep aangemaakt. Dit is de naam van jouw groep: {{ $group->title }}</p>
                    <p>Het is nu belangrijk dat je deelnemers uitnodigt om aan jouw groep mee te doen. Stuur jouw netwerkpartners daarom een email en een voorstel voor een datum om gezamenlijk aan tafel te gaan.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section__panel section__panel__toptabs">
                    <div class="section__panel--title">
                        <h5>Verstuur een email</h5>
                        <span><em>Hieronder zie je een voorbeeld van een e-mail die je kunt kopiëren en plakken. Als je de link ook meestuurt, kunnen jouw netwerkpartners zich direct aanmelden bij jouw groep.</em></span>
                    </div>
                    <div class="">
                            <p>Beste netwerkpartner,</p>

                            <p>Graag wil ik u uitnodigen om mee te doen aan een groepsscan van de participatiescan. De participatiescan is een analyse- en actietool voor heldere regionale afspraken over effectieve samenwerking en begeleiding ten behoeve van jongeren in een kwetsbare positie. Deze tool helpt om gezamenlijk de sterktes en zwaktes in de huidige aanpak en noodzakelijke verbeteracties te bepalen.</p>

                            <p>Daarmee kunnen we met meerdere partijen in de regio in gesprek gaan over het vergroten van kansen op de arbeidsmarkt voor jongeren in een kwetsbare positie.</p>

                            <p>Klik op deze link om aan deze scan mee te doen. http://aantafelsessies.test/group/{{ $group->id }}/createscan/{{ $group->code }}</p>

                            <p>Ik neem binnenkort contact op voor een afspraak zodat we de scan gezamenlijk kunnen uitvoeren.</p>

                            <p>Met vriendelijke groeten,</p>

                            <p>(Afzender)</p>
                        </div>
                        <p>Veel succes! </p>
                    </div>
                    <a href=" {{ route('home') }} " class="btn btn-primary ">Naar dashboard</a>
                </div>
            </div>
        </div>

        
    </div>
@endsection


