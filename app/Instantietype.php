<?php

namespace App;

use App\Instantie;
use App\Definition;
use Illuminate\Database\Eloquent\Model;

class Instantietype extends Model
{
    public function instanties()
    {
    	return $this->hasMany(Instantie::class);
    }
}
