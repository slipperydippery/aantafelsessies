<?php

namespace App;

use App\Scan;
use App\Feedbackquestion;
use Illuminate\Database\Eloquent\Model;

class Feedbackanswer extends Model
{
	protected $guarded = [];

    public function feedbackquestion()
    {
    	return $this->belongsTo(Feedbackquestion::class);
    }

    public function scan()
    {
    	return $this->belongsTo(Scan::class);
    }

    public static function guaranteeAnswers(Scan $scan)
    {
    	foreach ($scan->scanmodel->feedbackquestions as $question) {
    		if (! $scan->feedbackanswers->where('feedbackquestion_id', $question->id)->count()) {
    			Feedbackanswer::create([
    				'scan_id' => $scan->id,
    				'feedbackquestion_id' => $question->id,
    			]);
    		}
    	}
    }
}
