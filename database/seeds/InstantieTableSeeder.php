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
        $instantie_type_maatschappelijkeorganisaties = Instantietype::where('name', 'Maatschappelijke organisaties')->first();
        $instantie_type_werkinkomen = Instantietype::where('name', 'Werk / Inkomen')->first();
        $instantie_type_scholen_werkgevers = Instantietype::where('name', 'Scholen en werkgevers')->first();

        $instantie_zorgverzekeraar = new Instantie();
        $instantie_zorgverzekeraar->name = 'Zorgverzekeraar';
        $instantie_zorgverzekeraar->description = 'Zorgverzekeraar die de collectieve zorgverzekering voor minima in de gemeente aanbiedt.';
        $instantie_zorgverzekeraar->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_zorgverzekeraar->contactpersoon = 'Bestaande contactpersoon voor de collectieve zorgverzekering voor minima.';
        $instantie_zorgverzekeraar->scanmodel_id = 1;
        $instantie_zorgverzekeraar->save();
        $instantie_type_vastelasten->instanties()->save($instantie_zorgverzekeraar);

        $instantie_woningcorporatie = new Instantie();
        $instantie_woningcorporatie->name = 'Woningcorporatie';
        $instantie_woningcorporatie->description = 'Woningcorporatie.';
        $instantie_woningcorporatie->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_woningcorporatie->contactpersoon = 'Beleidsmedewerker';
        $instantie_woningcorporatie->scanmodel_id = 1;
        $instantie_woningcorporatie->save();
        $instantie_type_vastelasten->instanties()->save($instantie_woningcorporatie);

        $instantie_energieleveranciers = new Instantie();
        $instantie_energieleveranciers->name = 'Energieleveranciers';
        $instantie_energieleveranciers->description = 'Energieleveranciers.';
        $instantie_energieleveranciers->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_energieleveranciers->contactpersoon = 'Directeur Customer Care.';
        $instantie_energieleveranciers->scanmodel_id = 1;
        $instantie_energieleveranciers->save();
        $instantie_type_vastelasten->instanties()->save($instantie_energieleveranciers);

        $instantie_bank = new Instantie();
        $instantie_bank->name = 'Hypotheekverstrekker';
        $instantie_bank->description = 'Hypotheekverstrekker.';
        $instantie_bank->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_bank->contactpersoon = 'Beleidsmedewerker bijzonder beheer.';
        $instantie_bank->scanmodel_id = 1;
        $instantie_bank->save();
        $instantie_type_vastelasten->instanties()->save($instantie_bank);

        $instantie_waterbedrijf = new Instantie();
        $instantie_waterbedrijf->name = 'Waterbedrijf';
        $instantie_waterbedrijf->description = 'Waterbedrijf.';
        $instantie_waterbedrijf->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_waterbedrijf->contactpersoon = '';
        $instantie_waterbedrijf->scanmodel_id = 1;
        $instantie_waterbedrijf->save();
        $instantie_type_vastelasten->instanties()->save($instantie_waterbedrijf);

        $instantie_waterbedrijf = new Instantie();
        $instantie_waterbedrijf->name = 'Telecomaanbieder';
        $instantie_waterbedrijf->description = 'Telecomaanbieder.';
        $instantie_waterbedrijf->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_waterbedrijf->contactpersoon = '';
        $instantie_waterbedrijf->scanmodel_id = 1;
        $instantie_waterbedrijf->save();
        $instantie_type_vastelasten->instanties()->save($instantie_waterbedrijf);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Zorg';
        $instantie_next->description = 'Zoals vrijwilligers thuisadministratie en maatjesprojecten. ';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_maatschappelijkeorganisaties->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Vrijwilligersorganisatie';
        $instantie_next->description = 'Zoals vrijwilligers thuisadministratie en maatjesprojecten.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_maatschappelijkeorganisaties->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Sociale initiatieven';
        $instantie_next->description = 'Zoals wijkinitiatieven gericht op versterken eigen kracht inwoners.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_maatschappelijkeorganisaties->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Voedselbank';
        $instantie_next->description = 'Voedselbank.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_maatschappelijkeorganisaties->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Sportverenigingen';
        $instantie_next->description = 'Sportverenigingen.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_maatschappelijkeorganisaties->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Belastingzaken';
        $instantie_next->description = 'Beleidsmedewerker dienst belastingen gemeente.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_werkinkomen->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Cliëntenraad';
        $instantie_next->description = 'Cliëntenraad.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_werkinkomen->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Sociaal Wijkteam';
        $instantie_next->description = 'Sociaal Wijkteam.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_werkinkomen->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Sociale dienst';
        $instantie_next->description = 'Sociale dienst.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_werkinkomen->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Welzijn / Wmo';
        $instantie_next->description = 'Welzijn / Wmo.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_werkinkomen->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Onderwijs / Leerplicht';
        $instantie_next->description = 'Onderwijs / Leerplicht.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_werkinkomen->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Economie / Ondernemerschap';
        $instantie_next->description = 'Economie / Ondernemerscha.p';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_werkinkomen->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Werkgevers';
        $instantie_next->description = 'Werkgevers.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_scholen_werkgevers->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Basisschool';
        $instantie_next->description = 'Basisschool.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_scholen_werkgevers->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Middelbare school';
        $instantie_next->description = 'Middelbare school.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_scholen_werkgevers->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'MBO-instelling';
        $instantie_next->description = 'MBO-instelling.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_scholen_werkgevers->instanties()->save($instantie_next);

        $instantie_next = new Instantie();
        $instantie_next->name = 'Voorschoolse opvang';
        $instantie_next->description = 'Zoals kinderopvang en peuterspeelzaal.';
        $instantie_next->reason = 'Het is verstandige om met deze partij samen te werken want...';
        $instantie_next->contactpersoon = '';
        $instantie_next->scanmodel_id = 1;
        $instantie_next->save();
        $instantie_type_scholen_werkgevers->instanties()->save($instantie_next);
    }
}
