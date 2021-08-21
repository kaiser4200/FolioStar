<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';
    protected $guarded = [];


    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
