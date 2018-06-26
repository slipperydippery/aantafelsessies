<?php

namespace App;

use App\Scan;
use App\User;
use App\Inventarisatie;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'title', 'scan_id', 'user_id', 'code'
    ];

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
}
