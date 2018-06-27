<?php

namespace App\Http\Controllers;

use Auth;
use App\Scan;
use App\Group;
use App\Inventarisatie;
use Illuminate\Http\Request;

class ApiGroupController extends Controller
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
        request()->validate([
            'title' => 'required|min:3|max:255',
            'instantie_id' => 'required|integer',
        ]);


        $user = Auth::user();
        $scan = Scan::register($user, $request->all());

        $code = str_random(10);
        $group = new Group([
            'title' => $request->title,
            'code' => $code,
            'user_id' => $user->id,
            'scan_id' => $scan->id,
            'scanmodel_id' => $scan->scanmodel->id,
        ]);
        $group->save();

        if($request->inventarisatie_id){
            $inventarisatie = Inventarisatie::find($request->inventarisatie_id);
            $inventarisatie->group()->associate($group);
            $inventarisatie->save();
        }
        $group->scans()->save($scan);

        return $group;
    }

    public function storescan(Group $group, Request $request)
    {
        request()->validate([
            'instantie_id' => 'required|integer',
        ]);

        $user = Auth::user();
        $scan = Scan::registerWithGroup($user, $group, $request->all());
        $group->scans()->save($scan);
        
        return $scan;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        return Group::with('scans.user', 'scans.answers', 'scans.instantie.instantietype', 'owner')->where('id', $group->id)->get()->first();
        // return Group::with('scans.user', 'scans.answers', 'scans.instantie', 'owner.measures.users')->where('id', $group->id)->get()->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
