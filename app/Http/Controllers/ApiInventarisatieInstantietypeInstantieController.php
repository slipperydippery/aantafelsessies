<?php

namespace App\Http\Controllers;

use App\Instantietype;
use App\Inventarisatie;
use Illuminate\Http\Request;

class ApiInventarisatieInstantietypeInstantieController extends Controller
{
    public function index(Inventarisatie $inventarisatie, Instantietype $instantietype)
    {
    	$partners = [];
    	foreach($inventarisatie->partners as $partner) {
    		if($partner->instantie->instantietype->id == $instantietype->id){
    			$partners[] = $partner;
    		}
    	}
    	return $partners;
    }
}
