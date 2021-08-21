<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $guarded = [];

    public function user(){ // User Profile Pic
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    public function note(){
        return $this->belongsTo('App\Note', 'note_id', 'id');
    }

    public function project(){
        return $this->belongsTo('App\Project', 'project_id', 'id');
    }

}
