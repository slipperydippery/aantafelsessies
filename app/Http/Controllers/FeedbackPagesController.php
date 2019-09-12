<?php

namespace App\Http\Controllers;

use App\Scan;
use App\User;
use App\Feedback;
use App\Feedbackanswer;
use App\Feedbackquestion;
use Illuminate\Http\Request;
use App\Notifications\FeedbackReceived;

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

    public function tips(Scan $scan)
    {
        return view('feedback.tips', compact('scan'));
    }

    public function thanks(Scan $scan)
    {
        // $admin = User::where('email', 'annejet.kerckhaert@ecorys.com')->first();
        $admin = User::where('email', 'maartendejager@gmail.com')->first();
        $admin->notify(new FeedbackReceived($scan->feedback));
        return view('feedback.thanks', compact('scan'));
    }
}
