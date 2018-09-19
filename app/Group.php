<?php

namespace App;

use App\Scan;
use App\User;
use App\Dateplanner;
use App\Inventarisatie;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'title', 'scan_id', 'user_id', 'code', 'uuid'
    ];

    // public function getRouteKeyName()
    // {
    //     return 'uuid';
    // }

    public function scans()
    {
    	return $this->hasMany(Scan::class);
    }

    public function owner()
    {
        return $this->belongsTo(Scan::class, 'scan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function inventarisatie()
    {
        return $this->hasOne(Inventarisatie::class);
    }

    public function dateplanner()
    {
        return $this->hasOne(Dateplanner::class);
    }

    public function dashmessages()
    {
        return $this->morphMany(Dashmessage::class, 'dashmessageable');
    }
}
