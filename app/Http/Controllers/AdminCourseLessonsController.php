<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Lesson;
use App\Course;

class AdminCourseLessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($course_id)
    {
        //
        $lessons = Course::find($course_id)->lessons()->get();

        return view('admin.lessons.index', compact('lessons'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($course_id)
    {
        //
        $data = array(
            'course_id' => $course_id,
        );

        return view('admin.lessons.create', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $course_id)
    {
        //
        $lesson = Lesson::create($request->all() + ['course_id' => $course_id]);

        return redirect('admin/courses/' . $course_id . '/lessons');

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

        $lesson = Lesson::findOrFail($id);

        return view('admin.lessons.edit', compact('lesson'));
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

        $input = Lesson::findOrFail($id);

        $input->update($request->all());

        return redirect('/admin/lessons');
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

        $lesson = Lesson::findOrFail($id)->delete();

        return redirect()->back();
    }
}
