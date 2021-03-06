<?php

namespace App\Http\Controllers;

use App\Instantietype;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function start()
	{
		return view('pages.start');
	}

    public function partners()
    {
    	$instantietypes = Instantietype::with('instanties')->get();
    	return view('pages.partners', compact('instantietypes'));
    }

    public function vraag()
    {
    	return view('pages.vraag');
    }

    public function cookies()
    {
        return view('pages.cookies');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function introductiefilm()
    {
        return view('pages.introductiefilm');
    }

    public function animatiefilm()
    {
        return view('pages.animatiefilm');
    }
}
