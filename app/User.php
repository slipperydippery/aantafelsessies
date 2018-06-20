<?php

namespace App;

use App\Scan;
use App\Group;
use App\Inventarisatie;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    public function scans()
    {
        return $this->hasMany(Scan::class);
    }

    public function inventarisaties()
    {
        return $this->hasMany(Inventarisatie::class);
    }
    
    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }    
}
