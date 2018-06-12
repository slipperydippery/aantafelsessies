<?php

namespace App;

use App\Scan;
use App\Partner;
use App\Instantietype;
use Illuminate\Database\Eloquent\Model;

class Instantie extends Model
{
    protected $fillable = [
        'scanmodel_id', 'title', 'description'
    ];

    public function instantietype()
    {
        return $this->belongsTo(Instantietype::class);
    }

    public function scans()
    {
        return $this->hasMany(Scan::class);
    }

    public function scanmodel()
    {
        return $this->belongsTo(Scan::class);
    }

    public function partners()
    {
        return $this->hasMany(Partner::class);
    }
}
