<?php

namespace App;

use App\TestQuestion;

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

    public function questions(){
    	return $this->hasMany('App\TestQuestion');
    }

    public function answers(){
        return $this->hasManyThrough('App\TestQuestionAnswer', 'App\TestQuestion', 'test_id', 'test_question_id', 'id');
    }

    public function validateAnswers($questions){

        $right_answers = 0;
        $wrong_answers = 0;

        foreach ($questions as $question_key => $answers) {


            $test_question = TestQuestion::find($question_key);
            $temp_right_answers = $test_question->countRightAnswers();

            $right_answers_for_question = 0;
            $wrong_answers_for_question = 0;


            foreach ($answers as $answer_key => $answer) {
                if($this->answers()->where('test_question_answers.id', $answer_key)->first()->right_answer == 1){
                    $right_answers_for_question++;
                }else{
                    $wrong_answers_for_question++;
                }
            }

            $right_answers += (1 / $temp_right_answers) * $right_answers_for_question;
            $wrong_answers += (1 / $temp_right_answers) * $wrong_answers_for_question;

        }

        // return array(
        //     'right_answers' => $right_answers,
        //     'wrong_answers' => $wrong_answers
        // );


        return $right_answers;
    }

    
}
