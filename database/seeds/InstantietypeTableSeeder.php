<?php

use App\Instantietype;
use Illuminate\Database\Seeder;

class InstantietypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instantie_type_vastelasten = new Instantietype();
        $instantie_type_vastelasten->name = 'Vaste lasten';
        $instantie_type_vastelasten->description = 'Partijen vaste lasten op wonen, zorg en nutsvoorzieningen.';
        $instantie_type_vastelasten->save();

        $instantie_type_beginnendeschulden = new Instantietype();
        $instantie_type_beginnendeschulden->name = 'Beginnende schulden';
        $instantie_type_beginnendeschulden->description = 'Andere partijen die beginnende schulden kunnen signaleren.';
        $instantie_type_beginnendeschulden->save();

        $instantie_type_beginnendeschulden_gemeente = new Instantietype();
        $instantie_type_beginnendeschulden_gemeente->name = 'Beginnende schulden - gemeente';
        $instantie_type_beginnendeschulden_gemeente->description = 'Afdelingen binnen de gemeente die beginnende schulden kunnen signaleren.';
        $instantie_type_beginnendeschulden_gemeente->save();

        $instantie_type_scholen_werkgevers = new Instantietype();
        $instantie_type_scholen_werkgevers->name = 'Scholen en werkgevers';
        $instantie_type_scholen_werkgevers->description = 'Scholen en werkgevers.';
        $instantie_type_scholen_werkgevers->save();
    }
}
