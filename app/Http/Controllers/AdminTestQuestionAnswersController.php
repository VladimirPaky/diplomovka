<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TestQuestionAnswer;
use App\TestQuestion;
use App\Course;
use App\Test;

use View;

class AdminTestQuestionAnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($course_id, $test_id, $question_id)
    {
        //
        $course = Course::find($course_id);
        
        $questions = $course->questions()->get();

        $answers = $course->answers()->get();

        $view = View::make('admin.answers.index', compact('course','questions', 'test_id', 'answers'));

        if(request()->ajax()) {
            $sections = $view->renderSections(); 
            return $sections; 
        }

       return $view;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function editAnswerText($answer_id)
    {
        $answer = TestQuestionAnswer::findOrFail($answer_id);
        $answer->answer = request()->new_answer;

        $answer->save();

        return response()->json([
            'status' => '200',
        ]);
    }


}




