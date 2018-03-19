<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminCourseApplication extends Model
{
    //

    protected $fillable = [
    	'user_id',
    	'course_id',
    	'payment',
    	'access'
    ];

     public function course(){
        return $this->hasMany('App\Course');
    }


     public function user(){
        return $this->hasMany('App\User');
    }

}
