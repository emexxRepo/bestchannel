<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'socials';
    protected $fillable = [
        'facebook','user_id','twitter','instagram','youtube'
    ];


    public function user(){
        return $this->belongsTo('App\User','user_id');

    }
}
