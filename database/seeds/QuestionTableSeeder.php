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
                'title'						=> 'Wegnemen gevoelens van schaamte',
                'body'                      => 'Mijn organisatie biedt oplossingen voor het wegnemen van gevoelens van 

                    <span class="definition" 
                        data-toggle="tooltip" 
                        data-placement="top" 
                        title="Schaamtegevoelens door gevoel van falen."
                    >
                        schaamte
                    </span>
                    bij inwoners/werknemers/klanten met beginnende schulden.',
                'weergave_succesfactor'     => '',
                'theme_id' => 1,
            ],
            [
                'title'                     => 'Wegnemen gevoelens van schaarste',
                'body'                      => 'Mijn organisatie biedt oplossingen voor het wegnemen van gevoelens van
                    <span class="definition" 
                        data-toggle="tooltip" 
                        data-placement="top" 
                        title="Schaarste is een gevoel van gebrek aan geld waardoor mensen een tunnelvisie ontwikkelen en vaker beslissingen nemen gericht op de korte termijn. Bron: Sociale vraagstukken (Omlo, 2014). Schaarste: hoe gebrek aan tijd en geld ons gedrag bepalen."
                    >
                        schaarste
                    </span>
                      bij inwoners/werknemers/klanten met beginnende schulden. ',
                'weergave_succesfactor'     => '',
                'theme_id' => 1,
            ],
            [
                'title'                     => 'Vinden van juiste hulp',
                'body'              		=> 'Mijn organisatie biedt handvatten aan inwoners/werknemers/klanten met beginnende schulden bij het vinden van de juiste hulp en het krijgen van overzicht over de eigen financiële situatie.',
                'weergave_succesfactor'     => '',
                'theme_id' => 1,
            ],
            [
                'title'                     => 'Bespreekbaar maken financiële problemen',
                'body'              		=> 'Mijn organisatie is 
                    <span class="definition" 
                        data-toggle="tooltip" 
                        data-placement="top" 
                        title="Bijvoorbeeld doordat financiën een onderwerp is in functioneringsgesprekken, oudergesprekken, gesprekken met klanten en burgers."
                    >
                        actief
                    </span>
                     in het bespreekbaar maken van financiële problemen.',
                'weergave_succesfactor'     => '',
                'theme_id' => 2,
            ],
            [
                'title'                     => 'Hulp is makkelijk vindbaar',
                'body'              		=> 'Mijn organisatie biedt hulp bij het op orde krijgen van de financiële situatie en deze hulp is
                    <span class="definition" 
                        data-toggle="tooltip" 
                        data-placement="top" 
                        title="Bijvoorbeeld: telefoonnummer staat duidelijk op de website, in teksten wordt taalniveau B1 gehanteerd, er is één centraal contactpersoon."
                    >
                         toegankelijk en makkelijk vindbaar
                    </span>
                    voor alle inwoners. <i>Als jouw organisatie zelf geen dienstverlening aanbiedt, vink dan ‘niet van toepassing’ aan.</i>',
                'weergave_succesfactor'     => '',
                'theme_id' => 2,
            ],
            [
                'title'                     => 'Communicatie aangepast op doelgroepen',
                'body'              		=> 'Mijn organisatie past haar communicatie aan op verschillende doelgroepen inwoners/medewerkers/klanten met beginnende schulden. Hierbij denkend aan jongeren, mensen met een uitkering, oudere mensen, alleenstaande ouders, werkenden, ZZP’ers, laaggeletterden etc.',
                'weergave_succesfactor'     => '',
                'theme_id' => 2,
            ],
            [
                'title'                     => 'Communiceert op eenvoudige wijze',
                'body'              		=> 'Inwoners/medewerkers/klanten lopen risico op het ontwikkelen van een schuldsituatie na een life-event (zoals echtscheiding, ontslag en ziekte) als zij niet tijdig uitgaven aanpassen aan het nieuwe inkomen. Mijn organisatie houdt rekening met life-events in de timing van de communicatie. ',
                'weergave_succesfactor'     => '',
                'theme_id' => 2,
            ],
            [
                'title'                     => 'Signalen in beleid vastgelegd',
                'body'              		=> 'Mijn organisatie heeft in beleid vastgelegd wat 
                    <span class="definition" 
                        data-toggle="tooltip" 
                        data-placement="top" 
                        title="Bijvoorbeeld kinderen die zonder ontbijt op school verschijnen, stress verschijnselen bij mensen, afwezigheid op werk, klanten die rekeningen te laat betalen. "
                    >
                         signalen
                    </span>
                    zijn van beginnende schulden bij inwoners/medewerkers/klanten en hoe hiermee wordt omgegaan. ',
                'weergave_succesfactor'     => '',
                'theme_id' => 3,
            ],
            [
                'title'                     => 'Beleid over wijze informeren',
                'body'              		=> 'Mijn organisatie heeft in beleid vastgelegd hoe inwoners/medewerkers/klanten met beginnende schulden worden geïnformeerd over de hulp die er is om financiën op orde te krijgen.',
                'weergave_succesfactor'     => '',
                'theme_id' => 3,
            ],
            [
                'title'                     => 'Beleid aanmelden',
                'body'              		=> 'Mijn organisatie heeft in beleid vastgelegd in welke gevallen een inwoner/medewerker/klant met beginnende schulden wordt 
                    <span class="definition" 
                        data-toggle="tooltip" 
                        data-placement="top" 
                        title="Houdt hierbij rekening met het uitwisselen van persoonsgegevens en privacy. Regel met een formulier dat de inwoner/medewerker/klant toestemming geeft om gegevens uit te wisselen tussen organisaties en informeer de inwoner/medewerker/klant hierover. "
                    >
                         aangemeld
                    </span>
                     bij een hulpverlenende partij.',
                'weergave_succesfactor'     => '',
                'theme_id' => 3,
            ],
            [
                'title'                     => 'Effectieve samenwerking alle partijen',
                'body'              		=> 'Alle partijen aan tafel staan open om te komen tot een effectieve samenwerking om inwoners/medewerkers/klanten met beginnende schulden te signaleren, te informeren en door te verwijzen naar passende ondersteuning. ',
                'weergave_succesfactor'     => '',
                'theme_id' => 3,
            ],
            [
                'title'                     => 'Professionaliteit om te signaleren',
                'body'              		=> 'In mijn organisatie is de professionaliteit (<span class="definition"
                        data-toggle="tooltip" 
                        data-placement="top" 
                        title="o.a. gespreksvaardigheden om signalen te herkennen en bespreekbaar te maken. "
                    >
                         noodzakelijke competenties en vaardigheden
                    </span>) van de medewerkers voldoende geborgd om inwoners/medewerkers/klanten met beginnende schulden te signaleren. ',
                'weergave_succesfactor'     => '',
                'theme_id' => 4,
            ],
            [
                'title'                     => 'Professionaliteit om te informeren',
                'body'              		=> 'In mijn organisatie is de professionaliteit (<span class="definition"
                        data-toggle="tooltip" 
                        data-placement="top" 
                        title="o.a. kennis over welke hulpkanalen er zijn en hoe daarmee in contact te komen. "
                    >
                         noodzakelijke competenties en vaardigheden
                    </span>) van de medewerkers voldoende geborgd om inwoners/medewerkers/klanten met beginnende schulden te informeren over het hulpaanbod.',
                'weergave_succesfactor'     => '',
                'theme_id' => 4,
            ],
            [
                'title'                     => 'Professionaliteit om aan te melden',
                'body'              		=> 'In mijn organisatie hebben medewerkers voldoende professionaliteit (<span class="definition"
                        data-toggle="tooltip" 
                        data-placement="top" 
                        title="kennis over uitwisselen van persoonsgegevens en wat hierin wel/niet is toegestaan."
                    >
                         noodzakelijke competenties en vaardigheden
                    </span>) om inwoners/medewerkers/klanten met beginnende schulden aan te melden bij een hulpverlenende partij.  ',
                'weergave_succesfactor'     => '',
                'theme_id' => 4,
            ],
            [
                'title'                     => 'Kennis over signaleren, informeren en doorverwijzen',
                'body'              		=> 'De medewerkers van alle partijen aan tafel hebben samen voldoende professionaliteit om inwoners/medewerkers/klanten met beginnende schulden te signaleren, informeren en door te verwijzen naar de juiste ondersteuning.',
                'weergave_succesfactor'     => '',
                'theme_id' => 4,
            ],
        ];

        DB::table('questions')->insert($questions);
    }
}
