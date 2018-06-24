<?php

use Illuminate\Database\Seeder;

class ThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->delete();

        $themes = [
            [
                'id' => '1',
                'name' => 'Drempels voor het vragen van hulp',
                'short' => '',
                'body' => '<p>Uit het onderzoeksrapport afgelost=opgelost blijkt dat inwoners met beginnende schulden drempels ervaren tot het zoeken van contact1. Hierdoor ontwikkelen beginnende schulden zich tot problematische schulden. Daarom is het noodzakelijk om deze drempels te verlagen/weg te nemen. Naar aanleiding hiervan zijn de volgende stellingen ter discussie opgenomen.</p>',
                'scanmodel_id' => '1'
            ],
            [
                'id' => '2',
                'name' => 'Communicatiestrategieën',
                'short' => '',
                'body' => '<p>Om bovenstaande drempels tot het zoeken van hulp te overkomen, zijn er een aantal randvoorwaarden voor communicatie die kunnen worden toegepast, zoals het bespreekbaar maken van financiële problematiek. </p>
                    <p>Daarnaast is het ook belangrijk om dienstverlening rond het krijgen van overzicht van financiën actief aan te bieden en de toon van de communicatie aan te passen op verschillende doelgroepen met beginnende schulden. </p>
                    <p>Verder is het belangrijk om de informatievoorziening over eventuele betalingsregelingen, financiële hulp etc. duidelijk en eenvoudig te communiceren naar inwoners met beginnende schulden op papier, telefonisch en in persoon (afhankelijk van de doelgroep). Hierbij is het belangrijk om rekening te houden met wanneer, welke informatie aan wie moet worden gecommuniceerd . </p>',
                'scanmodel_id' => '1'
            ],
            [
                'id' => '3',
                'name' => 'Effectieve samenwerking',
                'short' => '',
                'body' => '<p>Het is belangrijk om met de partijen aan tafel tot een eenduidig en gedragen beeld van de doelgroep te komen en te inventariseren welke specifieke kennis of methodiek nodig is om deze groep goed te kunnen helpen. Ook is het belangrijk om te bepalen wie daarin welke rol vervult .</p>',
                'scanmodel_id' => '1'
            ],
            [
                'id' => '4',
                'name' => 'Professionaliteit van de uitvoering',
                'short' => '',
                'body' => '<p>Tot slot is het belangrijk om ook te spreken over professionaliteit van de uitvoering:</p>',
                'scanmodel_id' => '1'
            ],
        ];

        DB::table('themes')->insert($themes);
    }
}
