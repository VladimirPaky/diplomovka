<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    //

    protected $fillable = [
    	'result'
    ];



	public function course(){
        return Course::find($this->course_id);
    }

    public function user(){
        return User::find($this->user_id);
    }
}
