<?php

namespace App;

use Cache;
use App\Scan;
use App\Group;
use App\Dashmessage;
use App\Inventarisatie;
use App\Notifications\VerifyEmail;
use App\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
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

    public function dashmessages()
    {
        return $this->morphMany(Dashmessage::class, 'dashmessageable');
    }

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }    

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    public function sendPasswordResetNotification($token)
    {
       $this->notify(new ResetPassword($token));
    }
}
