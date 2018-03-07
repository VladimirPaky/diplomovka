<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::auth();

// Route::get('/home', 'HomeController@index')->middleware('author');  


Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);




Route::group(['middleware'=>'admin', 'prefix' => 'admin'], function() {

	Route::get('/', 'HomeController@index');
    //
    Route::resource('users', 'AdminUsersController');

    Route::resource('posts', 'AdminPostsController');
    
    Route::resource('post-categories', 'AdminPostCategoriesController');

    Route::resource('media', 'AdminMediaController');

    Route::resource('courses', 'AdminCourseController');
    
    Route::resource('courses.lessons', 'AdminCourseLessonsController');

    Route::resource('course-categories', 'AdminCourseCategoriesController');

    Route::resource('courses.tests.questions', 'AdminTestQuestionsController');

    // Route::get('amdin/media/upload', ['as'=>'admin.media.upload', 'uses'=>'AdminMediaController@store']);
    //Route::post('admin/media/upload', ['as'=>'admin.media.upload', 'uses'=>'AdminMediaController@store']);

    Route::resource('comments', 'PostCommentsController');

    Route::resource('comments.replies', 'CommentRepliesController');




});	

Route::post('/update-questoin-answer/{answer_id}', 'AdminTestQuestionAnswersController@editAnswerText');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
