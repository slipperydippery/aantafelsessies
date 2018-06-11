<?php

namespace App\Http\Controllers;

use App\Instantietype;
use Illuminate\Http\Request;

class InstantietypeController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instantietype  $instantietype
     * @return \Illuminate\Http\Response
     */
    public function show(Instantietype $instantietype)
    {
        // $previous = Instantietype::where('id', '<', $instantietype->id)->orderBy('id', 'desc')->first();
        // $next = Instantietype::where('id', '>', $instantietype->id)->first();

        // return view('instantietype.show', compact('instantietype', 'previous', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instantietype  $instantietype
     * @return \Illuminate\Http\Response
     */
    public function edit(Instantietype $instantietype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instantietype  $instantietype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instantietype $instantietype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instantietype  $instantietype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instantietype $instantietype)
    {
        //
    }
}
