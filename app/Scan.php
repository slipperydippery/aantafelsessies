<?php

namespace App;

use App\User;
use App\Group;
use App\Answer;
use App\Measure;
use App\District;
use App\Instantie;
use App\Scanmodel;
use Illuminate\Database\Eloquent\Model;

class Scan extends Model
{
    protected $fillable = [
        'title', 'description', 'algemeenbeeld', 'user_id', 'group_id', 'instantie_id', 'scanmodel_id'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function scanmodel()
    {
    	return $this->belongsTo(Scanmodel::class);
    }

    public function owns()
    {
    	return $this->hasOne(Group::class);
    }

    public function answers()
    {
    	return $this->hasMany(Answer::class);
    }

    public function group()
    {
    	return $this->belongsTo(Group::class);
    }

    public function instantie()
    {
    	return $this->belongsTo(Instantie::class);
    }

    public function districts()
    {
    	return $this->belongsToMany(District::class);
    }

    public function measures()
    {
    	return $this->hasMany(Measure::class);
    }

    public static function registerWithGroup(User $user, Group $group, $attributes)
    {
        $scan = new Scan($attributes);
        $scan->title = $group->title;
        $user->scans()->save($scan);

        $scan->save();

        $scan->generateQuestions($scan);

        return $scan;
    }

    public static function register(User $user, $attributes)
    {
    	$scan = new Scan($attributes);
    	$user->scans()->save($scan);

    	foreach ($attributes['districts'] as $district) {
    	    $district = District::find($district['id']);
    	    $scan->districts()->attach($district);
    	}
    	$scan->save();

    	$scan->generateQuestions($scan);

    	return $scan;
    }

    public function generateQuestions(Scan $scan)
    {
    	foreach($scan->scanmodel->themes as $theme) {
    		foreach ($theme->questions as $question) {
    			Answer::create([
    				'scan_id' => $scan->id,
    				'question_id' => $question->id
    			]);

    			Measure::create([
    			    'scan_id' => $scan->id,
    			    'question_id' => $question->id
    			]);
    		}
    	}
    }

}
