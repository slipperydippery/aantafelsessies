<?php

use App\Popup;
use Illuminate\Database\Seeder;

class PopupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $popup_one = new Popup();
        $popup_one->title = '';
        $popup_one->body = 'Uit het onderzoeksrapport afgelost=opgelost blijkt dat inwoners met beginnende schulden drempels ervaren tot het zoeken van contact . Hierdoor ontwikkelen beginnende schulden zich tot problematische schulden. Daarom is het noodzakelijk om deze drempels te verlagen/weg te nemen. Naar aanleiding hiervan zijn de volgende stellingen ter discussie opgenomen';
        $popup_one->question_id = 1;
        $popup_one->save();
        
        $popup_two = new Popup();
        $popup_two->title = '';
        $popup_two->body = 'Om voorgaande drempels tot het zoeken van hulp te overkomen, zijn er een aantal randvoorwaarden voor communicatie die kunnen worden toegepast, zoals het bespreekbaar maken van financiële problematiek.';
        $popup_two->question_id = 4;
        $popup_two->save();
        
        $popup_three = new Popup();
        $popup_three->title = '';
        $popup_three->body = 'Daarnaast is het ook belangrijk om dienstverlening rond het krijgen van overzicht van financiën actief aan te bieden en de toon van de communicatie aan te passen op verschillende doelgroepen met beginnende schulden.';
        $popup_three->question_id = 5;
        $popup_three->save();
        
        $popup_four = new Popup();
        $popup_four->title = '';
        $popup_four->body = 'Verder is het belangrijk om de informatievoorziening over eventuele betalingsregelingen, financiële hulp etc. duidelijk en eenvoudig te communiceren naar inwoners met beginnende schulden op papier, telefonisch en in persoon (afhankelijk van de doelgroep). Hierbij is het belangrijk om rekening te houden met wanneer, welke informatie aan wie moet worden gecommuniceerd.';
        $popup_four->question_id = 7;
        $popup_four->save();
        
        $popup_five = new Popup();
        $popup_five->title = '';
        $popup_five->body = 'Het is belangrijk om met de partijen aan tafel tot een eenduidig en gedragen beeld van de doelgroep te komen en te inventariseren welke specifieke kennis of methodiek nodig is om deze groep goed te kunnen helpen. Ook is het belangrijk om te bepalen wie daarin welke rol vervult.';
        $popup_five->question_id = 9;
        $popup_five->save();
        
        $popup_six = new Popup();
        $popup_six->title = '';
        $popup_six->body = 'Tot slot is het belangrijk om ook te spreken over professionaliteit van de uitvoering.';
        $popup_six->question_id = 13;
        $popup_six->save();

    }
}
