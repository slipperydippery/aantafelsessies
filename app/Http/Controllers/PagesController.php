<?php

namespace App\Http\Controllers;

use App\Instantietype;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function partners()
    {
    	$instantietypes = Instantietype::with('instanties')->get();
    	return view('pages.partners', compact('instantietypes'));
    }

    public function vraag()
    {
    	return view('pages.vraag');
    }
}
