<?php

namespace App;

use App\Scan;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'answer', 'scan_id', 'question_id'
    ];

    public function scan()
    {
    	return $this->belongsTo(Scan::class);
    }
}
