<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Followup extends Model
{
    protected $fillable = [
    	'date', 'time', 'scan_id'
    ];
}
