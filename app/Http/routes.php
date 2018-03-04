<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index')->middleware('author');


Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);




Route::group(['middleware'=>'admin'], function() {

	Route::get('/admin', function() {
    return view('admin.index');	
	});
    //
    Route::resource('admin/users', 'AdminUsersController');

    Route::resource('admin/posts', 'AdminPostsController');
    
    Route::resource('admin/post-categories', 'AdminPostCategoriesController');

    Route::resource('admin/media', 'AdminMediaController');

    Route::resource('admin/course', 'AdminCourseController');

    Route::resource('admin/course-categories', 'AdminCourseCategoriesController');

    Route::resource('admin/course.test.question', 'AdminTestQuestionsController');

    // Route::get('amdin/media/upload', ['as'=>'admin.media.upload', 'uses'=>'AdminMediaController@store']);
    //Route::post('admin/media/upload', ['as'=>'admin.media.upload', 'uses'=>'AdminMediaController@store']);

    Route::resource('admin/comments', 'PostCommentsController');

    Route::resource('admin/comments/replies', 'CommentRepliesController');




});	