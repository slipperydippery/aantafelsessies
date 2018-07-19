<?php

namespace App;

use App\Scan;
use App\Dateoption;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    protected $guarded = [];

    public function dateoption()
    {
        return $this->belongsTo(Dateoption::class);
    }

    public function scan()
    {
        return $this->belongsTo(Scan::class);
    }
}
