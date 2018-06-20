<?php

namespace App\Http\Controllers;

use Auth;
use App\Scan;
use App\User;
use App\Group;
use Illuminate\Http\Request;

class ScanPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('owner', ['except' => ['loggless', 'measureresults']]);
    }  

    public function kennismaken(Scan $scan)
    {
        $group = $scan->group;
        return $group->user;
        return $group->owner;
        if (Auth::check() && $scan->group) {
            return view('scan.kennismaken', compact('scan', 'group'));
        } else {
            return redirect()->route('scan.regioincijfers', $scan);
        }
    	
    }
}
