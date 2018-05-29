<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Pagination\Paginator;




use App\Course;
use App\Post;
use App\CourseCategory;

class PortalHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $courses = Course::take(8)->get();   
        $posts = Post::take(8)->get();

        // $data = array(
        //     $courses => 'courses',
        //     $posts => 'posts'
        // );

        return view('portal', compact('course_id','courses', 'posts'));
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

    public function allCourses(){

        if($filter = request()->input('category_id')){
            $courses = Course::where('category_id', $filter)->orderBy('created_at', 'desc')->paginate(12);
        }else{
            $courses = Course::orderBy('created_at', 'desc')->paginate(16);
        }

        $courseCategories = CourseCategory::pluck('name', 'id')->all();

        return view('courses', compact('courses', 'courseCategories'));
    }

    public function blog(){
         if($filter = request()->input('category_id')){
            $posts = Course::where('category_id', $filter)->orderBy('created_at', 'desc')->paginate(12);
        }else{
            $posts = Course::orderBy('created_at', 'desc')->paginate(16);
        }

        $courseCategories = CourseCategory::pluck('name', 'id')->all();

        return view('blog', compact('posts', 'courseCategories'));
    }

     public function blogPost($id){
        $posts = Post::where('id', $id)->get();

        return view('blog-post', compact('posts'));
    }



}
