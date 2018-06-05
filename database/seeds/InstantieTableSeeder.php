<?php

use App\Instantie;
use App\Instantietype;
use Illuminate\Database\Seeder;

class InstantieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instantie_type_vastelasten = Instantietype::where('name', 'Vaste lasten')->first();
        $instantie_type_beginnendeschulden = Instantietype::where('name', 'Beginnende schulden')->first();
        $instantie_type_beginnendeschulden_gemeente =   Instantietype::where('name', 'Beginnende schulden - gemeente')->first();
        $instantie_type_scholen_werkgevers = Instantietype::where('name', 'Scholen en werkgevers')->first();

        $instantie_zorgverzekeraar = new Instantie();
        $instantie_zorgverzekeraar->name = 'Zorgverzekeraar';
        $instantie_zorgverzekeraar->description = 'Zorgverzekeraar die de collectieve zorgverzekering voor minima in de gemeente aanbiedt.';
        $instantie_zorgverzekeraar->contactpersoon = 'Bestaande contactpersoon voor de collectieve zorgverzekering voor minima.';
        $instantie_zorgverzekeraar->scanmodel_id = 1;
        $instantie_zorgverzekeraar->save();
        $instantie_type_vastelasten->instanties()->save($instantie_zorgverzekeraar);

        $instantie_woningcorporatie = new Instantie();
        $instantie_woningcorporatie->name = 'Woningcorporatie';
        $instantie_woningcorporatie->description = 'Woningcorporatie.';
        $instantie_woningcorporatie->contactpersoon = 'Beleidsmedewerker';
        $instantie_woningcorporatie->scanmodel_id = 1;
        $instantie_woningcorporatie->save();
        $instantie_type_vastelasten->instanties()->save($instantie_woningcorporatie);

        $instantie_energieleveranciers = new Instantie();
        $instantie_energieleveranciers->name = 'Energieleveranciers';
        $instantie_energieleveranciers->description = 'Energieleveranciers.';
        $instantie_energieleveranciers->contactpersoon = 'Directeur Customer Care.';
        $instantie_energieleveranciers->scanmodel_id = 1;
        $instantie_energieleveranciers->save();
        $instantie_type_vastelasten->instanties()->save($instantie_energieleveranciers);

        $instantie_bank = new Instantie();
        $instantie_bank->name = 'Bank';
        $instantie_bank->description = 'Bank (hypotheekverstrekker)';
        $instantie_bank->contactpersoon = 'Beleidsmedewerker bijzonder beheer.';
        $instantie_bank->scanmodel_id = 1;
        $instantie_bank->save();
        $instantie_type_vastelasten->instanties()->save($instantie_bank);

        $instantie_waterbedrijf = new Instantie();
        $instantie_waterbedrijf->name = 'Waterbedrijf';
        $instantie_waterbedrijf->description = 'Waterbedrijf.';
        $instantie_waterbedrijf->contactpersoon = '';
        $instantie_waterbedrijf->scanmodel_id = 1;
        $instantie_waterbedrijf->save();
        $instantie_type_vastelasten->instanties()->save($instantie_waterbedrijf);

        $instantie_incassobureau = new Instantie();
        $instantie_incassobureau->name = 'Incassobureau';
        $instantie_incassobureau->description = 'Incassobureau.';
        $instantie_incassobureau->contactpersoon = '';
        $instantie_incassobureau->scanmodel_id = 1;
        $instantie_incassobureau->save();
        $instantie_type_vastelasten->instanties()->save($instantie_incassobureau);
    }
}
