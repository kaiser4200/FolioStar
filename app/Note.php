<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';
    protected $guarded = [];


    // Relation with User 
    public function user(){
        return $this->belongsTo('App\User');
    }

    // Relation with Category
    public function note_category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    // Relation with Image
    public function images(){
        return $this->hasMany('App\Image', 'note_id', 'id');
    }


}
