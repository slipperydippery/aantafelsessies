<?php

namespace App;

use App\Scan;
use App\Feedback;
use App\Feedbackanswer;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
	protected $guarded = [];

    public function scan()
    {
        return $this->belongsTo(Scan::class);
    }

    public function feedbackanswers()
    {
        return $this->hasMany(Feedbackanswer::class);
    }

    public function answers()
    {
        return $this->scan->feedbackanswers;
    }

    public static function guaranteeFeedback(Scan $scan)
    {
    	if(! $scan->feedback()->exists()) {
    		Feedback::create([
    			'scan_id' => $scan->id,
    		]);
    	}
    }
}
