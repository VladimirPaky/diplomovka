<?php

namespace App;
use Url;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    

	protected $uploads =  '/images/';

	protected $fillable = ['file'];


	public function getFileAttribute($photo){
		return url('/') . $this->uploads . $photo;
	}

}
