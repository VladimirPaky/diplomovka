<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserCourseApplication;
use App\Lesson;

use Auth;

class UserCourseLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        //

        $lessons = $course->lessons()->get();

        $applications = UserCourseApplication::all();

        // $user_has_this_course = ($course->users()->where('user_id', $user->id)->get()->isEmpty() ? 0 :1);

        $data = array(
            'lessons' => $lessons,
            'course' => $course,
           // 'user_has_this_course' => $user_has_this_course

        );

        return view('course.lessons.index', $data);
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
        $user = Auth::user();
        $lesson = Lesson::find($id);

        if($lesson->course->users()->where('user_id', $user->id)->get()->isEmpty()){
            // todo flash with errors
            return redirect()->back();
        }

    
        return view('course.lesson.lesson', compact('lesson', 'course'));
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
