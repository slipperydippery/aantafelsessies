<?php

namespace App\Http\Controllers;

use Auth;
use App\Scan;
use App\Group;
use App\Dashmessage;
use App\Inventarisatie;
use Illuminate\Http\Request;
use App\Notifications\GroupCreated;
use App\Notifications\GroupscanCreated;

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

        $user->notify(new GroupCreated($group));

        return $group;
    }

    public function storescan(Group $group, Request $request)
    {
        $user = Auth::user();
        foreach($group->scans as $scan){
            if($scan->user->id == Auth::user()->id){
                $dashmessage = new Dashmessage([
                    'type' => 'danger',
                    'message' => 'U neemt al deel aan de sessie ' . $group->title
                ]);
                $user->dashmessages()->save($dashmessage);
                return ;
            }
        }
        request()->validate([
            'instantie_id' => 'required|integer',
        ]);

        $scan = Scan::registerWithGroup($user, $group, $request->all());
        $group->scans()->save($scan);

        $dashmessage = new Dashmessage([
            'type' => 'success',
            'message' => $user->name . ' heeft zich aangemeld voor de groepssessie ' . $group->title
        ]);
        $group->dashmessages()->save($dashmessage);

        // $dashmessage = Dashmessage::create([
        //     'message' => $user->name . ' heeft zich aangemeld voor de groepssessie ' . $group->title,
        //     'user_id' => $group->owner->user->id,
        // ]);
        // 
        $user->notify(new GroupscanCreated($group, $scan));

        return $dashmessage;
        
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
