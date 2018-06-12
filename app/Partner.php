<?php

namespace App;

use App\User;
use App\Instantie;
use App\Instantietype;
use App\Inventarisatie;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
	protected $guarded = [];

    public function inventarisatie()
    {
    	return $this->belongsTo(Inventarisatie::class);
    }

    public function instantie()
    {
    	return $this->belongsTo(Instantie::class);
    }

    public function instantietype()
    {
    	return $this->instantie->instantietype;
    }

    public static function guaranteeRelationship(Inventarisatie $inventarisatie, Instantietype $instantietype)
    {
    	foreach ($instantietype->instanties as $instantie) {
    		if ( ! $instantie->partners->where('inventarisatie_id', $inventarisatie->id)->count() ) {
    			Partner::create([
    				'instantie_id' => $instantie->id,
    				'inventarisatie_id' => $inventarisatie->id
    			]);
    		}
    	}
    }
}
