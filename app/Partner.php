<?php

namespace App;

use App\User;
use App\Group;
use App\Instantietype;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
	protected $guarded = [];

    public function group()
    {
    	return $this->belongsTo(Group::class);
    }

    public static function guaranteeRelationship(Group $group, Instantietype $instantietype)
    {
    	foreach ($instantietype->instanties as $instantie) {
    		if ( ! $instantie->partners->where('group_id', $group->id)->count() ) {
    			Partner::create([
    				'instantie_id' => $instantie->id,
    				'group_id' => $group->id
    			]);
    		}
    	}
    }
}
