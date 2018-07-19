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
                'title'                     => 'Wegnemen gevoelens van schaamte',
                'body'                      => 'Mijn organisatie biedt oplossingen voor het wegnemen van gevoelens van schaamte bij inwoners met beginnende schulden. ',
                'weergave_succesfactor'     => '',
                'norm'                      => 'Mijn organisatie biedt oplossingen voor het wegnemen van gevoelens van schaamte bij inwoners met beginnende schulden. ',
                'theme_id' => 1,
            ],
            [
                'title'                     => 'Wegnemen gevoelens van schaarste',
                'body'                      => 'Mijn organisatie biedt oplossingen voor het wegnemen van gevoelens van schaarste  bij inwoners met beginnende schulden. ',
                'weergave_succesfactor'     => '',
                'norm'                      => 'Mijn organisatie biedt oplossingen voor het wegnemen van gevoelens van schaarste  bij inwoners met beginnende schulden. ',
                'theme_id' => 1,
            ],
            [
                'title'                     => 'Vinden van juiste hulp',
                'body'                      => 'Mijn organisatie biedt handvatten aan inwoners met beginnende schulden bij het vinden van de juiste hulp en het krijgen van overzicht over de eigen financiële situatie.',
                'weergave_succesfactor'     => '',
                'norm'                      => 'Mijn organisatie biedt handvatten aan inwoners met beginnende schulden bij het vinden van de juiste hulp en het krijgen van overzicht over de eigen financiële situatie. ',
                'theme_id' => 1,
            ],
            [
                'title'                     => 'Bespreekbaar maken financiële problemen',
                'body'                      => 'Mijn organisatie is actief in het bespreekbaar maken van financiële problemen.',
                'weergave_succesfactor'     => '',
                'norm'                      => 'Mijn organisatie is actief in het bespreekbaar maken van financiële problemen.',
                'theme_id' => 2,
            ],
            [
                'title'                     => 'Hulp is makkelijk vindbaar',
                'body'                      => 'Mijn organisatie biedt hulp bij het op orde krijgen van de financiële situatie en deze hulp is toegankelijk en makkelijk vindbaar voor alle inwoners. Als uw organisatie zelf geen dienstverlening aanbiedt, vink dan "niet voor mij toepassing" aan.',
                'weergave_succesfactor'     => '',
                'norm'                      => 'Mijn organisatie biedt hulp bij het op orde krijgen van de financiële situatie en deze hulp is toegankelijk en makkelijk vindbaar voor alle inwoners. Als uw organisatie zelf geen dienstverlening aanbiedt, vink dan "niet voor mij toepassing" aan.',
                'theme_id' => 2,
            ],
            [
                'title'                     => 'Communicatie aangepast op doelgroepen',
                'body'                      => 'Mijn organisatie past haar communicatie aan op verschillende doelgroepen inwoners met beginnende schulden. Hierbij denkend aan jongeren, mensen met een uitkering, oudere mensen, alleenstaande ouders, werkenden, ZZP’ers, laaggeletterden etc. ',
                'weergave_succesfactor'     => '',
                'norm'                      => 'Mijn organisatie past haar communicatie aan op verschillende doelgroepen inwoners met beginnende schulden. Hierbij denkend aan jongeren, mensen met een uitkering, oudere mensen, alleenstaande ouders, werkenden, ZZP’ers, laaggeletterden etc. ',
                'theme_id' => 2,
            ],
            [
                'title'                     => 'Communiceert op eenvoudige wijze',
                'body'                      => 'Mijn organisatie communiceert op eenvoudige wijze richting inwoners met beginnende schulden.',
                'weergave_succesfactor'     => '',
                'norm'                      => 'Mijn organisatie communiceert op eenvoudige wijze richting inwoners met beginnende schulden.',
                'theme_id' => 2,
            ],
            [
                'title'                     => 'Rekening houden met life-events',
                'body'                      => 'Mijn organisatie houdt rekening met life-events in de timing van de communicatie. Inwoners lopen risico op het ontwikkelen van een schuldsituatie na een life-event (zoals echtscheiding, ontslag, kinderen krijgen, ziekte) als zij niet tijdig uitgaven aanpassen aan nieuw inkomen.',
                'weergave_succesfactor'     => '',
                'norm'                      => 'Mijn organisatie houdt rekening met life-events in de timing van de communicatie. Inwoners lopen risico op het ontwikkelen van een schuldsituatie na een life-event (zoals echtscheiding, ontslag, kinderen krijgen, ziekte) als zij niet tijdig uitgaven aanpassen aan nieuw inkomen.',
                'theme_id' => 2,
            ],
            [
                'title'                     => 'Signalen in beleid vastgelegd',
                'body'                      => 'Mijn organisatie heeft in beleid vastgelegd wat signalen zijn van beginnende schulden bij inwoners en hoe hiermee wordt omgegaan.',
                'weergave_succesfactor'     => '',
                'norm'                      => 'Mijn organisatie heeft in beleid vastgelegd wat signalen zijn van beginnende schulden bij inwoners en hoe hiermee wordt omgegaan.',
                'theme_id' => 3,
            ],
            [
                'title'                     => 'Beleid over wijze informeren',
                'body'                      => 'Mijn organisatie heeft in beleid vastgelegd hoe inwoners met beginnende schulden worden geïnformeerd over de hulp die er is om financiën op orde te krijgen. ',
                'weergave_succesfactor'     => '',
                'norm'                      => 'Mijn organisatie heeft in beleid vastgelegd hoe inwoners met beginnende schulden worden geïnformeerd over de hulp die er is om financiën op orde te krijgen. ',
                'theme_id' => 3,
            ],
            [
                'title'                     => 'Beleid aanmelden',
                'body'                      => 'Mijn organisatie heeft in beleid vastgelegd in welke gevallen een inwoner met beginnende schulden wordt aangemeld bij een hulpverlenende partij. Hierbij is het belangrijk om rekening te houden met het uitwisselen van persoonsgegevens en privacy. Regel met een formulier dat de cliënt toestemming geeft om gegevens uit te wisselen tussen organisaties en informeer de cliënt hierover. ',
                'weergave_succesfactor'     => '',
                'norm'                      => 'Mijn organisatie heeft in beleid vastgelegd in welke gevallen een inwoner met beginnende schulden wordt aangemeld bij een hulpverlenende partij. Hierbij is het belangrijk om rekening te houden met het uitwisselen van persoonsgegevens en privacy. Regel met een formulier dat de cliënt toestemming geeft om gegevens uit te wisselen tussen organisaties en informeer de cliënt hierover. ',
                'theme_id' => 3,
            ],
            [
                'title'                     => 'Effectieve samenwerking alle partijen',
                'body'                      => 'Alle partijen aan tafel werken effectief samen om inwoners met beginnende schulden te signaleren, te informeren en door te verwijzen naar passende ondersteuning. ',
                'weergave_succesfactor'     => '',
                'norm'                      => 'Alle partijen aan tafel werken effectief samen om inwoners met beginnende schulden te signaleren, te informeren en door te verwijzen naar passende ondersteuning.  ',
                'theme_id' => 3,
            ],
            [
                'title'                     => 'Professionaliteit om te signaleren',
                'body'                      => 'In mijn organisatie is de professionaliteit (noodzakelijke competenties en vaardigheden) van de medewerkers voldoende geborgd om inwoners met beginnende schulden te signaleren. Denk hierbij aan het sensibiliseren van de medewerkers.',
                'weergave_succesfactor'     => '',
                'norm'                      => 'In mijn organisatie is de professionaliteit (noodzakelijke competenties en vaardigheden) van de medewerkers voldoende geborgd om inwoners met beginnende schulden te signaleren. Denk hierbij aan het sensibiliseren van de medewerkers. ',
                'theme_id' => 4,
            ],
            [
                'title'                     => 'Professionaliteit om te informeren',
                'body'                      => 'In mijn organisatie is de professionaliteit (noodzakelijke competenties en vaardigheden) van de medewerkers voldoende geborgd om mensen met beginnende schulden te informeren over het hulpaanbod.',
                'weergave_succesfactor'     => '',
                'norm'                      => 'In mijn organisatie is de professionaliteit (noodzakelijke competenties en vaardigheden) van de medewerkers voldoende geborgd om mensen met beginnende schulden te informeren over het hulpaanbod. ',
                'theme_id' => 4,
            ],
            [
                'title'                     => 'Professionaliteit om aan te melden',
                'body'                      => 'In mijn organisatie hebben medewerkers voldoende professionaliteit (noodzakelijke competenties en vaardigheden) om inwoners met beginnende schulden aan te melden bij een hulpverlenende partij.',
                'weergave_succesfactor'     => '',
                'norm'                      => 'In mijn organisatie hebben medewerkers voldoende professionaliteit (noodzakelijke competenties en vaardigheden) om inwoners met beginnende schulden aan te melden bij een hulpverlenende partij. ',
                'theme_id' => 4,
            ],
            [
                'title'                     => 'Kennis over signaleren, informeren en doorverwijzen',
                'body'                      => 'In mijn organisatie is bekend welke professionele kennis voor het signaleren, informeren en doorverwijzen van inwoners met beginnende schulden ontbreekt en waar deze te halen is.',
                'weergave_succesfactor'     => '',
                'norm'                      => 'In mijn organisatie is bekend welke professionele kennis voor het signaleren, informeren en doorverwijzen van inwoners met beginnende schulden ontbreekt en waar deze te halen is. ',
                'theme_id' => 4,
            ],
            [
                'title'                     => 'Professionaliteit van alle partijen',
                'body'                      => 'De medewerkers van alle partijen aan tafel hebben samen voldoende professionaliteit om inwoners met beginnende schulden te signaleren, informeren en door te verwijzen naar de juiste ondersteuning.',
                'weergave_succesfactor'     => '',
                'norm'                      => 'De medewerkers van alle partijen aan tafel hebben samen voldoende professionaliteit om inwoners met beginnende schulden te signaleren, informeren en door te verwijzen naar de juiste ondersteuning. ',
                'theme_id' => 4,
            ],
        ];

        DB::table('questions')->insert($questions);
    }
}
