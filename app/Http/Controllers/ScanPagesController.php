<?php

namespace App\Http\Controllers;

use Auth;
use App\Scan;
use App\User;
use App\Group;
use Illuminate\Http\Request;
use App\Events\AlgemeenbeeldUpdated;

class ScanPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('owner', ['except' => ['loggless', 'measureresults']]);
        $this->middleware('verified');
    }  

    public function introductie(Scan $scan)
    {
        return view('scan.introductie', compact('scan'));
    }

    public function kennismaken(Scan $scan)
    {
        $group = $scan->group;
        if (Auth::check() && $scan->group) {
            return view('scan.kennismaken', compact('scan', 'group'));
        } else {
            return redirect()->route('scan.regioincijfers', $scan);
        }
    }

    public function algemeenbeeld(Scan $scan)
    {
        return view('scan.algemeenbeeld', compact('scan'));
    }

    public function algemeenbeeldresultaten(Scan $scan)
    {
        $scanmodel = $scan->scanmodel->with('themes.questions')->first();
        if ($scan->group_id) {
            AlgemeenbeeldUpdated::dispatch($scan->group_id);
        }
        return view('scan.algemeenbeeldresultaten', compact('scan', 'scanmodel'));
    }

    public function sessieintro(Scan $scan)
    {
        return view('scan.sessieintro', compact('scan'));
    }
}
