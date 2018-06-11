<?php

namespace App;

use App\Instantie;
use Illuminate\Database\Eloquent\Model;

class Scanmodel extends Model
{
    public function scans()
    {
        return $this->hasMany(Scan::class);
    }

    public function themes()
    {
        return $this->hasMany(Theme::class);
    }

    public function instanties()
    {
        return $this->hasMany(Instantie::class);
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
