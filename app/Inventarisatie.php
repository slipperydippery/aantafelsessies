<?php

namespace App;

use App\User;
use App\Group;
use App\Partner;
use Illuminate\Database\Eloquent\Model;

class Inventarisatie extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function partners()
    {
        return $this->hasMany(Partner::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
