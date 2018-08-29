<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Partner;
use App\Instantietype;
use App\Inventarisatie;
use Illuminate\Http\Request;

class GesprekspartnersController extends Controller
{
 	public function start()
 	{
        if ( ! Session::has('inventarisatie')){
            return redirect()->route('inventarisatie.store');
        }

        return redirect()->route('gesprekspartners.show', 1);
 		
 	}

    public function show(Instantietype $instantietype)
    {
    	if ( ! Session::has('inventarisatie')){
    		return redirect()->route('welcome');
    	}

        $instantietypes = Instantietype::get();
    	$inventarisatie = Inventarisatie::find(session('inventarisatie'));

        foreach(Instantietype::get() as $thisinstantietype) {
    		Partner::guaranteeRelationship($inventarisatie, $thisinstantietype);
        }



        $previous = Instantietype::where('id', '<', $instantietype->id)->orderBy('id', 'desc')->first();
        $next = Instantietype::where('id', '>', $instantietype->id)->first();

        return view('gesprekspartners.show', compact('instantietype', 'previous', 'next', 'inventarisatie', 'instantietypes'));
    }

    public function results()
    {
        if ( ! Session::has('inventarisatie')){
            return redirect()->route('welcome');
        }

	    $inventarisatie = Inventarisatie::find(session('inventarisatie'));
        $partners = $inventarisatie->partners;
        
        $instantietypes = Instantietype::get();

    	return view('gesprekspartners.results', compact('inventarisatie', 'partners', 'instantietypes'));
    }  

}
