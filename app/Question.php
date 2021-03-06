<?php

namespace App;

use App\Popup;
use App\Measure;
use App\Definition;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title', 'body', 'weergave_succesfactor', 'norm', 'them_id'
    ];

    public function theme()
    {
        return $this->belongsTo(\App\Theme::class);
    }

    public function answers()
    {
        return $this->hasMany(\App\Answer::class);
    }
    
    public function measures()
    {
    	return $this->hasMany(Measure::class);
    }

    public function popup()
    {
        return $this->hasOne(Popup::class);
    }

    public function definitions()
    {
        return $this->morphMany(Definition::class, 'definable');
    }
}
