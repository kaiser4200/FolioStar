<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    protected $table = 'bios';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
