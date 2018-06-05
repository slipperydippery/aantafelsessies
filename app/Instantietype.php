<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instantietype extends Model
{
    public function instanties()
    {
    	return $this->hasMany(Instantie::class);
    }
}
