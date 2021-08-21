<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function projects(){
        return $this->hasMany('App\Project', 'category_id', 'id');
    }

    public function notes(){
        return $this->hasMany('App\Note', 'category_id', 'id');
    }
}
