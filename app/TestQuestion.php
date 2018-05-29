<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    //
    protected $fillable = [
    	'test_id',
    	'question',
    	'type',
    	'show_correct_answers_count',
    	'position',
    	'position_random',
    ];


    public function test(){
    	return $this->belongsTo('App\Test');
    }

    public function answers(){
        return $this->hasMany('App\TestQuestionAnswer');
    }

    public function questions(){
        return $this->hasMany('App\TestQuestions');
    }

    public function countRightAnswers(){
        return $this->answers()->where('right_answer', 1)->count();
    }
}
