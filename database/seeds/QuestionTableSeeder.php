<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->delete();

        $questions = [
            [
                'title'                     => 'Werkend leren',
                'body'              => 'Werkend leren centraal, ook op school: jongeren met LVB leren het meest en best via learning by doing. Niet schools en simulatie, maar – ‘zo reëel en realistisch mogelijk’ – praktijk centraal: oefenen, (liefst gecertificeerde) werkervaring en vaardigheden opdoen, ontdekken, groeien door iets kunnen en steeds meer (blijken te) kunnen.',
                'weergave_succesfactor'     => '<ul>
    <li>Learning by doing</li>
    <li>De praktijk centraal</li>
    <li>Zo reëel en realistisch mogelijk</li>
    <li>(Gecertificeerde) vaardigheden en werkervaring opdoen</li>
</ul>
',
                'norm'                      => 'School werkt volgens het principe: Learning by doing. Het werkend leren, zo reëel en realistisch mogelijk, staat centraal. ',
                'theme_id' => 1,
            ],
            [
                'title'                     => 'Professionele relatie met werkgevers',
                'body'              => 'Samenwerking met werkgevers niet als secundaire activiteit (‘erbij’), maar professioneel, door te investeren in kennis en relatie. Goed aansluiten op de context, belangen en taal van bedrijven) en zakelijk (open en eerlijk vooraf, goede begeleiding tijdens, goede evaluatie).',
                'weergave_succesfactor'     => '<ul>
  <li>School investeert in relaties</li>
  <li>Schoolt heeft kennis van de zakelijke context en belangen van werkgevers</li>
  <li>School spreekt de taal van bedrijven </li>
  <li>School stelt zich zakelijk op in de relatie
  <ul>
    <li>School geeft een open en eerlijk beeld van leerlingen</li>
    <li>Er worden duidelijke afspraken gemaakt</li>
    <li>Jongeren worden goed begeleid</li>
    <li>Er vindt monitoring en evaluatie plaats</li>
  </ul>
  </li>
</ul>',
                'norm'                      => 'Onze scholen hanteren in het algemeen een professionele aanpak in de relatie met werkgevers. En spreken dus de taal en kennen de context en belangen van bedrijven.',
                'theme_id' => 1,
            ],
            [
                'title'                     => 'Proactieve samenwerking bij arbeidstoeleiding',
                'body'              => 'Proactief samenwerken met andere organisaties/intermediairs (werkgeversservicepunt, SBB, scholen onderling etc) voor het maximaal zien en pakken van kansen.',
                'weergave_succesfactor'     => '<ul>
  <li>School werkt naar werkgevers toe proactief samen met organisaties/intermediairs, zoals
    <ul>
    <li>Werkgeversservicepunt</li>
      <li>SBB</li>
      <li>Andere scholen</li>
    </ul>
  </li>
</ul>',
                'norm'                      => 'Onze scholen werken proactief samen met intermediairs op het vlak van arbeidstoeleiding.
',
                'theme_id' => 1,
            ],
            [
                'title'                     => 'Professioneel ontzorgen van werkgevers',
                'body'              => 'Kennis van en vaardigheden voor professioneel ontzorgen en op maat inzet van instrumenten bij werkgevers: administratief, begeleiding, compensatie lagere productiviteit, proefperiode etc. Waar nodig inclusief een rol van arbeidstoeleidingsbedrijven.',
                'weergave_succesfactor'     => '<ul>
  <li>School ontzorgt werkgevers op het vlak van:
    <ul>
      <li>Administratie</li>
      <li>Begeleiding</li>
      <li>Financiële regelingen </li>
      <li>Wet- en regelgeving</li>
    </ul>
  </li>
</ul>',
                'norm'                      => 'Onze scholen en gemeenten ontzorgen (zelf of in samenwerking met partners) werkgevers goed bij stages, werkervaringsplaatsen en arbeidstoeleiding.',
                'theme_id' => 1,
            ],
            [
                'title'                     => 'Voldoende geschikte bedrijven',
                'body'              => 'Beschikbaarheid van voldoende werkgevers om jongeren met LVB passende werkervaring te laten opdoen en kansen te geven.',
                'weergave_succesfactor'     => '<ul>
    <li>School heeft een voldoende groot netwerk voor  stages</li>
    <li>School heeft een voldoende groot netwerk voor plaatsingen na afronding school</li>
    <li>Het netwerk van bedrijven is divers en omvat een groot aantal branches en sectoren</li>
</ul>',
                'norm'                      => 'Onze scholen en gemeenten hebben een voldoende groot en divers netwerk van geschikte bedrijven voor stages en plaatsingskansen voor jongeren in een kwetsbare positie.',
                'theme_id' => 1,
            ],
            [
                'title'                     => 'Jongeren worden gestimuleerd en empowered',
                'body'              => 'Benadering (bejegening) van jongeren niet ‘schools’ of ‘beschermend’, maar stimuleren en empoweren. Jongeren zoveel mogelijk zelf laten ontdekken en ervaren wat werk inhoudt en wat daarbij komt kijken, met coaching die gericht is op het leren van eigen ervaringen.',
                'weergave_succesfactor'     => '<ul>
    <li>Geen overbeschermde benadering</li>
    <li>Geen ‘schoolse’ benadering</li>
    <li>Jongeren ontdekken en ervaren zelf</li>
    <li>Coaching richt zich op leren door eigen ervaringen (learning by doing)</li>
</ul>',
                'norm'                      => 'Jongeren worden door onze scholen en gemeenten gestimuleerd en empowered, niet gepamperd of ‘schools’ benaderd.',
                'theme_id' => 2,
            ],
            [
                'title'                     => 'Begeleiding van de jongere',
                'body'              => 'De impact van begeleiding staat of valt met daadwerkelijke aandacht. Er echt zijn voor de jongere, die dat ook zo voelt. Vertrouwen. In selectie, caseload, toerusting en organisatie zijn de waarborgen voor deze echte ‘presentie’ gewaarborgd.',
                'weergave_succesfactor'     => '<ul>
  <li>Een ruime mate van stabiele persoonlijke aandacht </li>
  <li>Opbouwen van een vertrouwensband </li>
  <li>Effectieve begeleiding, ‘presentie’ door:
    <ul>
      <li>Handelbare caseload </li>
      <li>Begeleider heeft op de jongere afgestemde competenties</li>
      <li>Toerusting en ondersteuning vanuit de organisatie</li>
    </ul>
  </li>
</ul>',
                'norm'                      => 'Docenten en begeleiders zijn in staat om jongeren goed te begeleiden, vertrouwen te geven en zo te laten groeien. Ze beschikken namelijk daartoe over een niet te hoge caseload, goede competenties en empowerende persoonlijkheid.',
                'theme_id' => 2,
            ],
            [
                'title'                     => 'Signalering en diagnose',
                'body'              => 'Vroegtijdige signalering en diagnose: – eventueel m.b.v. diagnostisch onderzoek - ervoor zorgen dat wensen en mogelijkheden goed in beeld zijn en dat zo vroeg mogelijk onderkend wordt welke factoren de school- en werkloopbaan kunnen belemmeren, zodat de begeleiding daarop kan worden afgestemd.',
                'weergave_succesfactor'     => '<ul>
    <li>School heeft vroegtijdig inzicht in wensen en voorkeuren</li>
    <li>School heeft vroegtijdig inzicht in competenties en mogelijkheden</li>
    <li>School heeft vroegtijdig inzicht in mogelijk belemmerende factoren voor school- en werkloopbaan</li>
</ul>',
                'norm'                      => 'We zorgen ervoor dat docenten vroegtijdig zicht hebben op belemmeringen, mogelijkheden en loopbaanwensen van de jongeren, zodat jongeren steeds goed worden begeleid in een richting die bij hen past.',
                'theme_id' => 2,
            ],
            [
                'title'                     => 'Betrokkenheid ouders',
                'body'              => 'De rol van ouders is zowel groot, als vaak onderbenut. Ouders steeds actief betrekken, informeren en vooral committeren en stimuleren (rol in de begeleiding).',
                'weergave_succesfactor'     => '<ul>
  <li>School betrekt ouders actief  bij de schoolloopbaan van de leerling door ze actief  te:
    <ul>
      <li>Informeren</li>
      <li>Stimuleren</li>
      <li>Committeren (doel en aanpak)</li>
    </ul>
  </li>
</ul>',
                'norm'                      => 'De impact van ouders wordt benut door hen echt te betrekken en stimulerende bondgenoot te maken.',
                'theme_id' => 2,
            ],
            [
                'title'                     => 'Continuïteit in begeleiding',
                'body'              => 'Continuïteit in begeleiding bij het verlaten van de school (tijdige, warme overdracht school – gemeente, nazorg school). ',
                'weergave_succesfactor'     => '<ul>
    <li>Tijdige, warme overdracht van school naar werk/ vervolgopleiding/ gemeente. </li>
    <li>Niet aansluitend, maar overlappend</li>
    <li>School verzorgt goede nazorg</li>
</ul>',
                'norm'                      => 'Bij ons wordt het estafettestokje goed en tijdig overgedragen van school naar gemeente: tijdige, warme overdracht, met vroegtijdige rol van de gemeente en nazorg door de school.',
                'theme_id' => 2,
            ],
        ];

        DB::table('questions')->insert($questions);
    }
}
