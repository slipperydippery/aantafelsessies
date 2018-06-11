<?php

namespace App;

use App\Scan;
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
}
