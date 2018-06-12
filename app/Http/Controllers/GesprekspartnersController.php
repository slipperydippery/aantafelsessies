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
 	public function store()
 	{
 		
 	}

    public function show(Instantietype $instantietype)
    {
    	if ( ! Session::has('inventarisatie')){
    		return redirect()->route('welcome');
    	}

    	$inventarisatie = Inventarisatie::find(session('inventarisatie'));

		Partner::guaranteeRelationship($inventarisatie, $instantietype);


        $previous = Instantietype::where('id', '<', $instantietype->id)->orderBy('id', 'desc')->first();
        $next = Instantietype::where('id', '>', $instantietype->id)->first();

        return view('gesprekspartners.show', compact('instantietype', 'previous', 'next', 'inventarisatie'));
    }

    public function results()
    {
    	return view('gesprekspartners.results');
    }    
}
