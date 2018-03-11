<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //

	public function course(){
        return $this->belongsTo('App\Course');
    }

    public function lesson(){
        return $this->belongsTo('App\Lesson');
    }

    public function question(){
    	return $this->belongsTo('App\TestQuestion');
    }

    // public function answers(){
    //     return $this->hasManyThrough('App\TestQuestionAnswers');
    // }

    
}
