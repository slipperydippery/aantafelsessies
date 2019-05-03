<?php

namespace App;

use App\Scan;
use App\Feedback;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
	protected $guarded = [];

    public static function guaranteeFeedback(Scan $scan)
    {
    	if(! $scan->feedback()->exists()) {
    		Feedback::create([
    			'scan_id' => $scan->id,
    		]);
    	}
    }

    public function scan()
    {
    	return $this->belongsTo(Scan::class);
    }
}
