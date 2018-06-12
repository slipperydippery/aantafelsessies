<?php

namespace App\Http\Controllers;

use Auth;
use App\Inventarisatie;
use Illuminate\Http\Request;

class InventarisatieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventarisatie = new Inventarisatie;
        if($user = Auth::user()) {
            $user->inventarisaties()->save($inventarisatie);    
        }
        $inventarisatie->save();
        session(['inventarisatie' => $inventarisatie->id]);

        return redirect()->route('gesprekspartners.show', 1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventarisatie  $inventarisatie
     * @return \Illuminate\Http\Response
     */
    public function show(Inventarisatie $inventarisatie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventarisatie  $inventarisatie
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventarisatie $inventarisatie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventarisatie  $inventarisatie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventarisatie $inventarisatie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventarisatie  $inventarisatie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventarisatie $inventarisatie)
    {
        //
    }
}
