<?php

namespace App;
use Url;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    

	protected $uploads =  '/images/';

	protected $fillable = ['file'];


	public function getFileUrl(){
		return url('/') . $this->uploads . "/" . $this->file;
	}

	public function getFileName(){
		return $this->file;
	}

}
