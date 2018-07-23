<?php

namespace App;

use Auth;
use App\Dateplanner;
use App\Availability;
use Illuminate\Database\Eloquent\Model;

class Dateoption extends Model
{
    protected $guarded = [];

    public function dateplanner()
    {
        return $this->belongsTo(Dateplanner::class);
    }

    public function availabilities()
    {
        return $this->hasMany(Availability::class);
    }

    public function authavailability()
    {
        return $this->authscan()->availabilities->where('dateoption_id', $this->id)->first();
    }

    public function authscan()
    {
        foreach ($this->dateplanner->group->scans as $scan) {
            if ($scan->user->id == Auth::user()->id) {
                return $scan;
            }
        }
        return null;
    }

    public function guaranteeAvailabilities()
    {
        foreach ($this->dateplanner->group->scans as $scan) {
            if (! $this->availabilities->where('scan_id', $scan->id)->count()) {
                Availability::create([
                    'scan_id' => $scan->id,
                    'dateoption_id' => $this->id
                ]);
            }
        }
    }
}
