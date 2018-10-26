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

        <p>Graag wil ik u uitnodigen om mee te doen aan een gesprekssessie om samen schulden te voorkomen. </p>

        <p><strong>De sessie vindt plaats op: (zelf invullen) locatie (zelf invullen)</strong></p>

        <p>De digitale gesprekshulp is ontwikkeld om samen schulden te signaleren, en actie te ondernemen. De digitale gesprekshulp helpt ons om aan tafel samen inzicht te krijgen in noodzakelijke verbeteracties om schulden van inwoners in de gemeente te voorkomen.</p>

        <p>Samen bereiken we meer dan alleen, dus ik hoop op jouw deelname aan deze sessie. De sessie duurt 2 uur.</p>
<strong>
        <p>We gaan in gesprek over de volgende thema’s:</p>

        <ol>
             <li>Drempels voor het vragen van hulp </li>
             <li>Communicatiestrategieën</li>
             <li>Effectieve samenwerking</li>
             <li>Professionaliteit van de uitvoering</li>
         </ol>

        <p>We nodigen de volgende organisaties uit:</p>
        (zelf invullen)
         
        <p>Klik hier om een indruk te krijgen van de sessie: (filmpje)</p>

        <p>Meedoen bestaat uit twee stappen:</p>
        <ol>
            <li>
                <p><a href="{{ Request::root() }}/register">Maak een account aan</a> bij de Digitale Gesprekshulp.</p>
            </li>
            <li>
                 @if (isset($scan))
                    <p>Klik op de volgende link om je aan te melden voor de sessie: <a href="{{ Request::root() }}/group/{{ $scan->group->id }}/createscan/{{ $scan->group->code }}">{{ Request::root() }}/group/{{ $scan->group->id }}/createscan/{{ $scan->group->code }}</a></p>
                @elseif (isset($group))
                    <p>Klik op de volgende link om je aan te melden voor de sessie: <a href="{{ Request::root() }}/group/{{ $group->id }}/createscan/{{ $group->code }}">{{ Request::root() }}/group/{{ $group->id }}/createscan/{{ $group->code }}</a></p>
                 @endif
                
            </li>
        </ol>
         

         </strong>
        <p>Met vriendelijke groeten,</p>
        <p>(Afzender)</p>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Sluit</button>
        </div>
    </div>
</div>