<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;
use App\Test;
use App\CourseCategory;

class AdminCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $courses = Course::all();

        //->paginate(1);

        return view('admin.courses.index', compact('courses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $courseCategories = CourseCategory::pluck('name', 'id')->all();
        return view('admin.courses.create', compact('courseCategories'));
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

        $course = Course::create(request()->all());

        $test = new Test();
        $test->id_course = $course->id;
        $test->final_exam = true;

        $test->save();



        return redirect()->back();
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

        $course = Course::findOrFail($id);

        $courseCategories = CourseCategory::pluck('name', 'id')->all();

        return view('admin.courses.edit', compact('course', 'courseCategories'));
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

        $input = Course::findOrFail($id);

        $input->update($request->all());

        return redirect('/admin/courses');

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

        $course = Course::findOrFail($id)->delete();

        return redirect()->back();

    }
}
