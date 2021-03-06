<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;
use App\Lesson;

use Auth;

class UserCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        //

        // $course = Course::find($course_id);


        if(Auth::user()){
            $user = Auth::user();

            $lessons = $course->lessons()->get();

            $user_has_this_course = !($course->users()->where('user_id', $user->id)->get()->isEmpty());

            return view('course.index', compact('lessons', 'course', 'user_has_this_course'));
        }else{
            return redirect('portal');
        }
        
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
    public function show(Course $course, $id)
    {
        //

        $lessons = $course->lessons()->get();

        return view('course.lesson.lesson', compact('lessons', 'course'));
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
