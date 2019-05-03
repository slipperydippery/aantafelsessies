<?php

namespace App\Http\Controllers;

use App\Scan;
use App\Feedback;
use App\Feedbackanswer;
use App\Feedbackquestion;
use Illuminate\Http\Request;

class FeedbackPagesController extends Controller
{
    public function start(Scan $scan)
    {
    	Feedback::guaranteeFeedback($scan);
    	Feedbackanswer::guaranteeAnswers($scan);
    	return redirect()->route('feedback.showquestion', [$scan, 1]);
    }

    public function showquestion(Scan $scan, $order)
    {
    	$feedbackquestion = Feedbackquestion::where('order', $order)->where('scanmodel_id', $scan->scanmodel_id)->first();
    	$feedbackanswer = Feedbackanswer::where('feedbackquestion_id', $feedbackquestion->id)->where('scan_id', $scan->id)->first();
    	return view('feedback.show', compact('scan', 'feedbackquestion', 'feedbackanswer'));
    }
}
