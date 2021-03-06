<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use ErrorException;

use Auth;
use App\Test;
use App\TestResult;

class UserTestController extends Controller
{
    //

	public function startTest($test_id){

		$user = Auth::user();
		

		try{

			$test = Test::find($test_id);

			if($test->course->users()->where('user_id', $user->id)->first()){

			$data = array(
				'questions' => $test->questions()->with('answers')->get(),
				'test_id' => $test_id,
			);

			return view('user.test.start', $data);

			}else{

				session()->flash('err', 'You do not have premmisions to start this test!');

				return redirect('/portal');
			}


		}catch(ErrorException $e){
			session()->flash('err', 'Oooops, something went wrong.');

				return redirect('/portal');
		}

	}

	public function submitTest($test_id){

		$test = Test::find($test_id);

		$results = $test->validateAnswers(request()->input('answers'));

		$user = Auth::user();


		$test = new TestResult();
		$test->user_id = $user->id;
		$test->course_id = $test_id; 
		//dorobit

		$test->result = $results;

		$test->save();


		// var_dump($results);
		// exit();

		// $res = Result::

		// return redirect

		
	}


}
