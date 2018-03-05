<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //

    protected $fillable = [
    	'title',
    	'content',
    	'description',
    	'course_id',
    	'test_id',
    ];

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function test(){
        return $this->hasOne('App\Test');
    }
}
