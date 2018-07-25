<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Definition extends Model
{
    public function definable()
    {
    	return $this->morphTo();
    }
}
