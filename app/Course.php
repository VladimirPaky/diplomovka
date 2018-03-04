<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
    	    'title',
            'description',
            'type',
            'city',
            'teacher',
            'price',
            'certificate',
            'additional_info',
    ];
}
