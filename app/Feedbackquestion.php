<?php

namespace App;

use App\Feedbackanswer;
use Illuminate\Database\Eloquent\Model;

class Feedbackquestion extends Model
{
	protected $guarded = [];
	
    public function feedbackanswers()
    {
    	return $this->hasMany(Feedbackanswer::class);
    }
}
