<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

	protected $fillable = [
		'post_id',
		'author',
		'email',
		'body',
		'is_activ'
	];

	public function replies(){
		$this->hasMany('App\CommentReply');
	}
}
