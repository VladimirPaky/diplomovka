<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
    	    'title',
            'description',
            'category_id',
            'type',
            'city',
            'teacher',
            'price',
            'certificate',
            'additional_info',
    ];


    public function category(){
        return $this->belongsTo('App\CourseCategory');
    }

    public function lessons(){
        return $this->hasMany('App\Lesson');
    }

    public function tests(){
        return $this->hasMany('App\Test');
    }
}
