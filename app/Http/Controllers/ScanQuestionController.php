<?php

namespace App\Http\Controllers;

use App\Scan;
use App\Theme;
use App\Question;
use Illuminate\Http\Request;

class ScanQuestionController extends Controller
{
    public function intro(Scan $scan, Theme $theme)
    {
    	$previous = '/sessie/' . $scan->id . '/theme/' . ($theme->id - 1) . '/measures';
    	if($theme->id == Theme::get()->first()->id){
    		$previous = '/sessie/' . $scan->id . '/algemeenbeeldresultaten';
    	}

    	$next = '/sessie/' . $scan->id . '/thema/' . $theme->id . '/vraag/' . $theme->questions()->first()->id;

    	return view('scanquestions.themeintro', compact('scan', 'theme', 'previous', 'next'));
    }

    public function show(Scan $scan, Theme $theme, Question $question)
    {
    	if($question->theme->id != $theme->id) {
    		return redirect()->route('scanquestions.show', [$scan, $question->theme, $question]);
    	}

    	$answer = $scan->answers->where('question_id', $question->id)->first();

    	$previous = '/sessie/' . $scan->id . '/thema/' . $theme->id . '/vraag/' . ($question->id - 1);
    	if($question->id == $theme->questions->first()->id){
    		$previous = '/sessie/' . $scan->id . '/thema/' . $theme->id . '/introductie';
    	}

    	$next = '/sessie/' . $scan->id . '/thema/' . $theme->id . '/vraag/' . ($question->id + 1);
    	if($question->id == $theme->questions->last()->id){
    		$next = '/sessie/' . $scan->id . '/thema/' . $theme->id . '/resultaten';
    	}

    	return view('scanquestions.show', compact('scan', 'theme', 'question', 'previous', 'next', 'answer'));
    }

    public function results(Scan $scan, Theme $theme)
    {
    	$previous = '/sessie/' . $scan->id . '/thema/' . $theme->id . '/vraag/' . $theme->questions->last()->id;
    	$next = '/sessie/' . $scan->id . '/thema/' . $theme->id . '/acties';
    	return view('scanquestions.results', compact('scan', 'theme', 'previous', 'next'));
    }

    public function measures(Scan $scan, Theme $theme)
    {
    	$previous = '/sessie/' . $scan->id . '/thema/' . $theme->id . '/resultaten';
    	$next = '/sessie/' . $scan->id . '/thema/' . ($theme->id + 1) . '/introductie';
    	if($theme->id == Theme::get()->last()->id) {
    		$next = '/sessie/' . $scan->id . '/thema/' . Theme::get()->first()->id . '/actiesuitwerken';
    	}
    	return view('scanquestions.measures', compact('scan', 'theme', 'previous', 'next'));
    }

    public function bigmeasures(Scan $scan, Theme $theme)
    {
        $previous = '/sessie/' . $scan->id . '/thema/' . ($theme->id - 1) . '/actiesuitwerken';
        if($theme->id == Theme::get()->first()->id){
            $previous = '/sessie/' . $scan->id . '/thema/' . Theme::get()->last()->id . '/acties';
        }        
        $next = '/sessie/' . $scan->id . '/thema/' . ($theme->id + 1) . '/actiesuitwerken';
        if($theme->id == Theme::get()->last()->id) {
            $next = '/sessie/' . $scan->id . '/vervolgafspraak';
        }
        return view('scanquestions.bigmeasures', compact('scan', 'theme', 'previous', 'next'));
    }

    public function dateplanner(Scan $scan)
    {
        
    }
}
