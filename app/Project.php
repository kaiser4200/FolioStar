<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $guarded = [];


    // Relation with User 
    public function user(){
        return $this->belongsTo('App\User');
    }

    // Relation with Category
    public function project_category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    // Relation with Image
    public function images(){
        return $this->hasMany('App\Image', 'project_id', 'id');
    }


}


