<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Course;

class AdminCourseApplication extends Model
{
    //

    protected $table = 'user_course_applications';

    protected $fillable = [
    	'user_id',
    	'course_id',
    	'payment',
    	'access'
    ];

     public function course(){
        return Course::find($this->course_id);
    }

    public function user(){
        return User::find($this->user_id);
    }



}
