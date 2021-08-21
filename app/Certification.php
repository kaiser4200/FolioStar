<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $table = 'certifications';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
