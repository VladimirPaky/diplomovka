<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestQuestionAnswer extends Model
{
    //


     protected $fillable = [
		'id',
		'test_question_id',
		'answer',
		'right_answer',
    ];

	public function question(){
    	return $this->belongsTo('App\TestQuestion');
    }



}
