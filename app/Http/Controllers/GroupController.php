<?php

namespace App\Http\Controllers;

use Auth;
use App\Group;
use App\District;
use App\Instantie;
use App\Instantietype;
use Illuminate\Http\Request;

class GroupController extends Controller
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
        $inventarisatie = Auth::user()->inventarisaties->where('group_id', null)->first();
        $instantietypes = Instantietype::with('instanties')->get();
        $districts = District::get();
        return view('group.create', compact('instantietypes', 'districts', 'inventarisatie'));
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
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        return view('group.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }

    public function created(Group $group)
    {
        $inventarisatie = $group->inventarisatie;
        $instantietypes = Instantietype::with('instanties')->get();
        return view('group.created', compact('group', 'inventarisatie', 'instantietypes'));
    }

    public function createscan(Group $group, $code)
    {
        if ($code == $group->code) {
            $instanties = Instantie::get();
            return view('group.createscan', compact('group', 'instanties'));
        }
        return view('welcome');
    }
}
