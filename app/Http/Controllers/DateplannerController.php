<?php

namespace App\Http\Controllers;

use Auth;
use App\Dateplanner;
use App\Availability;
use Illuminate\Http\Request;

class DateplannerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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
        $dateplanner = new Dateplanner([
            'group_id' => $request->group_id,
        ]);
        $dateplanner->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dateplanner  $dateplanner
     * @return \Illuminate\Http\Response
     */
    public function show(Dateplanner $dateplanner)
    {
        foreach($dateplanner->dateoptions as $dateoption){
            if( ! $dateoption->availabilities->where('scan_id', $dateplanner->authscan()->id)->count() ) {
                $availability = new Availability([
                    'scan_id' => $dateplanner->authscan()->id,
                    'dateoption_id' => $dateoption->id
                ]);
                $availability->save();
            }
        }
        return view('dateplanner.show', compact('dateplanner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dateplanner  $dateplanner
     * @return \Illuminate\Http\Response
     */
    public function edit(Dateplanner $dateplanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dateplanner  $dateplanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dateplanner $dateplanner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dateplanner  $dateplanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dateplanner $dateplanner)
    {
        //
    }
}
