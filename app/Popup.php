<?php

namespace App;

use App\Question;
use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    public function question()
    {
    	return $this->belongsTo(Question::class);
    }
}
