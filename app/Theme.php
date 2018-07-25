<?php

namespace App;

use App\Definition;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    public function questions()
    {
        return $this->hasMany(\App\Question::class);
    }

    public function scanmodels()
    {
        return $this->belongsTo(\App\Scanmodel::class);
    }

    public function definitions()
    {
    	return $this->morphMany(Definition::class, 'definable');
    }
}
