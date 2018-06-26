<?php

namespace App;

use App\Scan;
use App\Instantie;
use App\Instantietype;
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

    public function instantietypes()
    {
        return $this->hasMany(Instantietype::class);
    }
}
