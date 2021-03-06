<?php

namespace App\Http\Controllers;

use App\Scan;
use Illuminate\Http\Request;
use App\Notifications\ScanCompleted;

class ScanController extends Controller
{
    /**
     * Enforce middleware.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware('owner', ['except' => ['index', 'create', 'store']]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scan  $scan
     * @return \Illuminate\Http\Response
     */
    public function show(Scan $scan)
    {
        if($scan->complete && ! $scan->feedback) $scan->user->notify(new ScanCompleted($scan));
        return view('scan.show', compact('scan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scan  $scan
     * @return \Illuminate\Http\Response
     */
    public function edit(Scan $scan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scan  $scan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scan $scan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scan  $scan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scan $scan)
    {
        $scan->districts()->detach();
        $scan->delete();
        return redirect()->route('home');
    }
}
