<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $table = 'opportunities';
    public function companies(){
        return $this->hasMany('App\Company','company_id');

    }
}
