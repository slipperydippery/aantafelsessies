<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Dashmessage extends Model
{
	protected $guarded = [];

    public function dashmessageable()
    {
    	return $this->morphTo();
    }
}
