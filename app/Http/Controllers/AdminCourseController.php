<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;
use App\Test;
use App\CourseCategory;
use App\Region; 
use App\Photo; 

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
        $courseRegions = Region::pluck('region', 'id')->all();

        return view('admin.courses.create', compact('courseCategories', 'courseRegions'));
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

        $input = $request->all();

        if($file = $request->file('photo_id')){
            $name = time() . "_" . $file->getClientOriginalName();
            $file -> move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }

        $course = Course::create($input);

        $test = new Test();
        $test->course_id = $course->id;
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

        $courseRegions = Region::pluck('region', 'id')->all();

        return view('admin.courses.edit', compact('course', 'courseCategories', 'courseRegions'));
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

        // $input = $request->all();

        // spravit refaktoring
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] =$photo->id;
        }

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
