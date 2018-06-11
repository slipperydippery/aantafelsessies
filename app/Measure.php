<?php

namespace App;

use App\Scan;
use App\User;
use App\Question;
use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    protected $fillable = [
        'measure', 'active', 'scan_id', 'question_id'
    ];

    public function scan()
    {
        return $this->belongsTo(Scan::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
