<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use ErrorException;

use Auth;
use App\Test;

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

		var_dump($results);
		exit();

		// $points;

		// if($test->questions->answers('answer_id', $answer_id)->where('right_answer', 1)){
		// 	$points++;
		// }
		
		// $testData = array(
		// 	'points' => $points,
		// 	'user' => $user_id,
		// 	'tets' => $test_id
		// );
	
		// $results = Results::create($request->all() + $testData);

		

		// return view('/course/test', $data);

	}


}
