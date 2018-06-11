<?php

namespace App\Http\Controllers;

use Auth;
use App\Partner;
use App\Instantietype;
use Illuminate\Http\Request;

class GesprekspartnersController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Instantietype  $instantietype
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group, Instantietype $instantietype)
    {
    	$user = Auth::user();
        $previous = Instantietype::where('id', '<', $instantietype->id)->orderBy('id', 'desc')->first();
        $next = Instantietype::where('id', '>', $instantietype->id)->first();

        Partner::guaranteeRelationship($group, $instantietype);
        $instanties = $user->partners

        return view('gesprekspartners.show', compact('user', 'instantietype', 'previous', 'next'));
    }

    public function results()
    {
    	return view('gesprekspartners.results');
    }    
}
