<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminCourseApplication extends Model
{
    //

     public function applications(){
    	return $this->belongsTo('App\User');
    }
}
