<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $table = 'applies';

    public function company()
    {
        return $this->belongsTo('App\Companies', 'opportunity_id');

    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');

    }
}
