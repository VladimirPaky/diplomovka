<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestQuestionAnswer extends Model
{
    //

	public function question(){
    	return $this->belongsTo('App\TestQuestion');
    }

}
