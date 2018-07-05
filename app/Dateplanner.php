<?php

namespace App;

use Auth;
use App\Group;
use App\Dateoption;
use Illuminate\Database\Eloquent\Model;

class Dateplanner extends Model
{
	protected $guarded = [];

    public function group()
    {
    	return $this->belongsTo(Group::class);
    }

    public function dateoptions()
    {
    	return $this->hasMany(Dateoption::class)->orderBy('datetime');
    }

    public function authscan()
    {
    	foreach( $this->group->scans as $scan ){
    		if( $scan->user->id == Auth::user()->id ){
    			return $scan;
    		}
    	}
    	return null;
    }
}
