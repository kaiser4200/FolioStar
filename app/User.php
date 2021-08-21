<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // User has one of the following

    public function bio(){
        return $this->hasOne('App\Bio', 'user_id', 'id');
    } 

    public function profile_pic(){
        return $this->hasOne('App\Image', 'user_id', 'id');
    }

    // User has many of the followings

    public function educations(){
        return $this->hasMany('App\Education', 'user_id', 'id');
    }

    public function certifications(){
        return $this->hasMany('App\Certification', 'user_id', 'id');
    }

    public function skills(){
        return $this->hasMany('App\Skill', 'user_id', 'id');
    }

    public function experiences(){
        return $this->hasMany('App\Experience', 'user_id', 'id');
    }

    public function categories(){
        return $this->hasMany('App\Category', 'user_id', 'id');
    }
    
    public function projects(){
        return $this->hasMany('App\Project', 'user_id', 'id');
    }

    public function notes(){
        return $this->hasMany('App\Note', 'user_id', 'id');
    }

}
