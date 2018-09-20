<?php

namespace App\Http\Controllers;

use App\Scanmodel;
use Illuminate\Http\Request;

class AdminFunctionController extends Controller
{
    public function fillallanswers()
    {
    	foreach (Scanmodel::find(1)->scans as $scan) {
    		foreach ($scan->answers as $answer) {
    			$answer->answer = round((rand(1, 10) + rand(1, 10)) / 2);
    			$answer->save();
    		}
    	}
    	return 'done';
    }
}
