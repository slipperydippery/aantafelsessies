@extends('layouts.app', ['title' => 'Groep aangemaakt'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page--title">
                    <h1 class="pagetitle">Je hebt succesvol een sessie aangemaakt</h1>
                    <p>Nodig nu jouw gesprekspartners uit per mail en voeg deze link toe: </p>
                    
                    <p><strong>{{ Request::root() }}/group/{{ $group->id }}/createscan/{{ $group->code }}</strong> <i class="material-icons"> file_copy </i> </p>
                    <p>Deze link geeft de deelnemers direct toegang tot de sessie die je zojuist hebt aangemaakt</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row row__cards">
                    <div class="col-md-4">
                        <a href="#" data-toggle="modal" data-target="#voorbeeldmail">
                            <div class="card card__dashboard">
                                <div class="card-body">
                                    <h5 class="card-title">Bekijk een voorbeeld email</h5>
                                    <img src="/img/scan.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    @if ($group->owner->inventarisatie)
                        <div class="col-md-4">
                            <a href="#" data-toggle="modal" data-target="#gesprekspartners">
                                <div class="card card__dashboard">
                                    <div class="card-body">
                                        <h5 class="card-title">Bekijk je geselecteerde gesprekspartners</h5>
                                        <img src="/img/scan.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                    <div class="col-md-4">
                        <a href="#" data-toggle="modal" data-target="#overtuigingsprincipes">
                            <div class="card card__dashboard">
                                <div class="card-body">
                                    <h5 class="card-title">Bekijk principes om je netwerkpartners te overtuigen</h5>
                                    <img src="/img/scan.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>  
        <div class="row row__prevnext justify-content-end">
            <div class="col-md-4">
                <a href=" {{ route('home') }} " class="btn btn-primary btn-block btn__prevnext">Naar het dashboard </a>
            </div>
        </div>      
    </div>

        
        <!-- Modal -->
        <div class="modal fade" id="overtuigingsprincipes" tabindex="-1" role="dialog" aria-labelledby="overtuigingsprincipesLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="overtuigingsprincipesLabel">Tips &amp; tricks: overtuigingsprincipes in de praktijk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ol>
                            <li>
                                <strong>Wederkerigheid</strong>
                                <p><em>Wederkerigheid komt neer op wat we vaak ‘een kwestie van geven en nemen’ noemen. Jij geeft iets aan een andere persoon, waardoor deze persoon zich geneigd voelt om iets voor jou terug te doen of jou iets terug te geven.</em> </p>
                                <p><strong>Gemeente:</strong> Het kost commerciële partijen als corporaties, zorgverzekeraars, energieleveranciers, incassobureaus, werkgevers en banken veel geld als klanten/werknemers betalingsachterstanden/schulden hebben. Zo heeft het Nibud (2017) onderzocht wat de kosten zijn voor werkgevers wanneer werknemers betalingsachterstanden/schulden hebben: </p>
                                <ul>
                                    <li>20 procent minder concentratie en arbeidsproductiviteit (slechter functioneren); </li>
                                    <li>7 extra dagen ziekteverzuim per jaar als gevolg van de financiële problemen; </li>
                                    <li>3 uur afhandeling per loonbeslag. </li>
                                </ul> <br>
                                <p>Haak als gemeente in op de kosten die partijen besparen als ze hun klanten met betalingsachterstanden vroegtijdig bereiken, en signalen doorgeven aan de gemeente. Voor partijen als corporaties, zorgverzekeraars, energieleveranciers, incassobureaus, werkgevers en banken leidt dit tot het voorkomen van hogere betalingsachterstanden bij klanten én zorgt het ervoor dat ze eerder betalen. Specifiek voor incassobureaus betekent dit; het opbouwen van een goede naam voor potentiële opdrachtgevers.</p>
                            </li>
                            <li>
                                <strong>Commitment en consistentie</strong>
                                <p><em>Als een persoon een bepaalde beslissing genomen heeft, dan blijft deze er vaak consistent mee, of dat nu zo verstandig is of niet. Mensen zijn namelijk niet graag inconsistent in de ogen van andere mensen. Over het algemeen wordt inconsistentie niet gewaardeerd, als onheilzaam gezien en het vermoeilijkt het beslissingsproces. Uit angst om inconsistent te lijken gebeurt het dus vaak dat mensen een onwijze beslissing consistent blijven doorzetten. Dit principe kun je zelf toepassen door een toezegging van iemand te krijgen, of ze een bepaald standpunt in te laten nemen. </em></p>
                                <p><strong>Gemeente:</strong> Vertel als gemeente over het grote belang van vroegtijdig signaleren van mensen met betalingsachterstanden. Start met te vertellen dat veel mensen kampen met schulden en wat voor effect dat heeft op het welzijn van mensen, namelijk mentaal vol zitten, en niet meer in staat zijn om op prikkels te reageren. Daarnaast overheersen gevoelens van acute stress, schaamte en armoede, iemands gedachten. Speel in op het inlevingsvermogen van partijen en creëer bij hen het gevoel dat er echt iets aan gedaan moet worden. Zorg ervoor dat ze het hiermee eens zijn. Begin vervolgens over hun rol in deze aanpak en wat zij kunnen doen in de vroegsignalering om uiteindelijk schulden te voorkomen.</p>
                            </li>
                            <li>
                                <strong>Sociale bewijskracht</strong>
                                <p>Het derde overtuigingsprincipe is sociale bewijskracht. Wat doe je vaak voordat je een duur product aan gaat schaffen? Juist, je kijkt even op internet naar de meningen en ervaringen die andere mensen hebben m.b.t. dit product. Hoe meer mensen positief zijn over dat product, hoe meer overtuigd je raakt. Kortom, je zoekt naar sociale bewijskracht of social proofom een stuk onzekerheid weg te halen en om te kijken wat mensen zoals jij in een zelfde soort situatie doen.</p>
                                <p><strong>Gemeente:</strong> Vertel als gemeenten over de positieve ervaringen van partijen die al deelnemen. Hier moet uit naar voren komen dat ze positief zijn over het feit dat ze meedoen, wat ze eraan hebben gehad, en waarom ze mee blijven doen. Mocht je als gemeente nog met geen enkele partij samenwerken, vertel over mooie voorbeelden in andere gemeenten. Voorbeeld is de gemeente Amsterdam die al mooie resultaten hebben bereikt met hun aanpak in het kader van de vroegsignalering.</p>
                            </li>
                            <li>
                                <strong>Sympathie</strong>
                                <p>Heb jij ooit een lelijke, chagrijnige verkoper gezien? Als dat zo is dan is de kans klein dat diegene nu nog diezelfde baan heeft. Het is namelijk zo dat fysieke aantrekkelijkheid een grote rol speelt tijdens sociale interactie. Mensen schrijven een aantrekkelijk persoon automatisch allerlei positieve eigenschappen toe die ze helemaal niet per se bezitten. Resultaat levert het hoe dan ook op: aantrekkelijke mensen overtuigen anderen makkelijker. </p>
                                <p><strong>Gemeente:</strong> Zorg er als gemeente voor dat je een face-to-face afspraak maakt met de juiste persoon binnen een partij, of ga op een ongevraagd moment langs. Mocht je een grotere gemeente zijn, en (een groter) budget tot de beschikking hebben voor het opzetten van een communicatiecampagne, is dit ook een goed idee. Hierbij is het vanzelfsprekend van belang dat de materialen en teksten aansprekend en overtuigend zijn.</p>
                            </li>
                            <li>
                                <strong>Autoriteit</strong>
                                <p>In de Verenigde Staten zijn er tamelijk radicale onderzoeken gedaan naar autoriteit en blinde onderwerping. Het experiment van Milgram en het Stanford-gevangenisexperiment zijn de twee meest bekende. Natuurlijk kan het ook erg goed van pas om op een positieve manier autoriteit uit te stralen.</p>
                                <p> <strong>Gemeente:</strong> Voor veel partijen is het nuttig om een goede verstandshouding te hebben met de gemeente om bepaalde zaken voor elkaar te krijgen zoals het krijgen van vergunningen, subsidies etc. Het is belangrijk om als gemeente in te spelen op het belang dat veel partijen hebben bij een goede band met de gemeente. Een gemeente heeft een bepaalde autoriteit en kan deze inzetten voor partijen waarmee de gemeente graag wil samenwerken. Gebruik dit.</p>
                            </li>
                            <li>
                                <strong>Schaarste</strong>
                                <p>De laatste, maar zeker niet de minste van de overtuigingsprincipes: schaarste. Zaken die moeilijk verkrijgbaar zijn zien we over het algemeen als waardevoller en als een verlies van onze vrijheid. We willen de vrijheid om het product te kunnen bezitten niet verliezen, dus zijn we eerder geneigd om het product te kopen</p>
                                <p> <strong>Gemeente:</strong> Hierbij kan worden ingespeeld op het goede imago dat partijen creëren als zij maatschappelijk verantwoord ondernemen. Speel als gemeente in op de naamsbekendheid die een commerciële partij krijgt wanneer zij innovatief is door koploper te zijn in het vroegsignaleren van mensen met betalingsachterstanden. Leg de nadruk op: als jij niet meedoet, doet een andere partij dit. Dan is je kans verkeken.</p>
                            </li>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Sluit</button>
                    </div>
                </div>
            </div>
        </div>

        
    <!-- Modal -->
    <div class="modal fade" id="voorbeeldmail" tabindex="-1" role="dialog" aria-labelledby="voorbeeldmailLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="voorbeeldmailLabel">Voorbeeld Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><span><em>Hieronder zie je een voorbeeld van een e-mail die je kunt kopiëren en plakken. Als je de link ook meestuurt, kunnen jouw netwerkpartners zich direct aanmelden bij jouw sessie.</em></span></p>
                    
                    <p>Beste netwerkpartner,</p>

                    <p>Graag wil ik u uitnodigen om mee te doen aan een gesprekssessie om samen schulden te voorkomen. Voorkom schulden samen is een digtale gesprekshulp ontwikkeld om samen schulden te signaleren en te informeren en actie te ondernemen. De digitale gesprekshulp helpt ons om aan tafel samen inzicht te krijgen in noodzakelijke verbeteracties om schulden van inwoners in de gemeente te voorkomen.</p>

                    <p>Samen bereiken we meer dan alleen, dus ik hoop op jouw deelname aan deze sessie. De sessie duurt ongeveer 2 uur.</p>

                    <p>Klik op deze link om aan deze scan mee te doen. {{ Request::root() }}/group/{{ $group->id }}/createscan/{{ $group->code }}</p>

                    <p>Ik neem binnenkort contact op voor een afspraak zodat we de scan gezamenlijk kunnen uitvoeren.</p>

                    <p>Met vriendelijke groeten,</p>

                    <p>(Afzender)</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Sluit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
        <!-- Modal -->
        @if ($group->inventarisatie)
            <div class="modal fade" id="gesprekspartners" tabindex="-1" role="dialog" aria-labelledby="gesprekspartnersLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="gesprekspartnersLabel">Bekijk je gesprekspartners</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                @foreach ($instantietypes as $instantietype)
                                    @foreach ($inventarisatie->partners->where('invitable', true) as $partner)
                                        @if ($partner->instantie->instantietype->id == $instantietype->id)
                                            <div class="col-sm-3">
                                                <div class="card card__2 card--partner clickable instantietype-{{ $instantietype->id }}">
                                                    <div class="card-icons">
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Sluit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
@endsection


