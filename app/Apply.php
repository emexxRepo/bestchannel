<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $table = 'applies';

    public function companies(){
        return $this->belongsTo('App\Companies','opportunity_id');

    }
    public function users(){
        return $this->belongsTo('App\User','user_id');

    }
}
