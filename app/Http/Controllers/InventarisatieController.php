<?php

namespace App\Http\Controllers;

use Auth;
use App\Inventarisatie;
use Illuminate\Http\Request;

class InventarisatieController extends Controller
{
    /**
     * Enforce middleware.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
        $this->middleware('verified');
    }
    
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
        $count = Auth::user()->inventarisaties->count();
        $inventarisatie->title = 'Selectie gesprekspartners - ' . ($count + 1);
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
        session(['inventarisatie' => $inventarisatie->id]);
        return redirect()->route('gesprekspartners.show', 1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventarisatie  $inventarisatie
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventarisatie $inventarisatie)
    {
        session(['inventarisatie' => $inventarisatie->id]);
        return redirect()->route('gesprekspartners.results', $inventarisatie);
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
        request()->validate([
            'title' => 'required|min:3|max:255',
        ]);

        $inventarisatie->title = $request->title;
        $inventarisatie->save();
        Auth::user()->inventarisaties()->save($inventarisatie);

        return redirect()->route('home');
    }

    public function updateuser(Inventarisatie $inventarisatie)
    {
        Auth::user()->inventarisaties()->save($inventarisatie);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventarisatie  $inventarisatie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventarisatie $inventarisatie)
    {
        $inventarisatie->delete();
        session()->forget('inventarisatie');

        return redirect()->route('home');
    }
}
