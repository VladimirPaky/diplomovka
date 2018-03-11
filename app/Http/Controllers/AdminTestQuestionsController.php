<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TestQuestion;
use App\Course;
use App\Test;

use View;


class AdminTestQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($test_question_id)
    {
        //

        $course = Course::find($course_id);
        
        $questions = $course->questions()->get();


        $view = View::make('admin.questions.index', compact('course','questions', 'test_id'));

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
    public function create($course_id, $test_id)
    {
        //

        $data = array(
            'course_id' => $course_id,
            'test_id' => $test_id,
        );

        return view('admin.questions.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $course_id, $test_id)
    {
        //

        $additionData = array(
            'test_id' => $test_id,
            'course_id' => $course_id,
        );

        $question = TestQuestion::create($request->all() + $additionData);

        // return redirect()->back();

        return redirect('admin/courses/'. $course_id . '/tests/'. $test_id . '/questions/'. $question->id);

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
}
