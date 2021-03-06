<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'is_active','photo_id', 'phone_number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function photo(){

        return $this->belongsTo('App\Photo');
    }

    public function isAuthor(){

        return ($this->role_id == 2 ? true : false);
    }

    public function setPasswordAttributes($password){

        if (!empty($password)) {
            $this->attributes['password'] = bcrypt($password);
        }
    }

    public function isAdmin(){

      return($this->role_id == 1 && $this->is_active == 1 ? true : false);

    }

    public function posts(){

        return $this->hasMany('App\Post');
    }


    public function courses(){

        return $this->belongsToMany('App\Course', 'user_course_applications', 'user_id', 'course_id')->withTimestamps();
    }
}
