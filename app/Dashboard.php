<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    //

    public function users(){
    	$this->hasMany('App/User');
    }
}
