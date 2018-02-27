<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PostCreateRequest;
use Illuminate\Support\Facades\Auth;

use App\Post;
use App\Photo;
use App\PostCategory;


class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        $postCategory = PostCategory::lists('name','id')->all();

        return view('admin.posts.create', compact('postCategory'));


        // return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
        //
        $input = $request->all();

        $user = Auth::user();

        if($file = $request->file('photo_id')){
            $name = time() . "_" . $file->getClientOriginalName();
            $file -> move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }

        $user->posts()->create($input);

        // Post::create($input);

        // return $request->all();
        return redirect('/admin/posts');
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



        return view('admin.posts.create');
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

        $post = Post::findOrFail($id);

        $postCategory = PostCategory::lists('name', 'id')->all();

        return view('admin.posts.edit', compact('post', 'postCategory'));
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
        $input = $request->all();


        // spravit refaktoring
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }
        // ./ spravit refaktoring


        //logovany user, userov post, hlada id od posta, len prvy lebo editujeem len 1
        Auth::user()->posts()->whereId($id)->first()->update($input);


        return redirect('/admin/posts');
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
        // $post = Post::findOrFail($id);
        // // unlink($post->photo->file);

        // $post->delete();
    
        return redirect('/admin/posts');
    }

    public function post($id){
        
        $post = Post::findOrFail($id);

        return view('post', compact('post'));
    }
}
//1519575282