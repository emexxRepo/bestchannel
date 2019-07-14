<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $table = 'opportunities';

    public function company()
    {
        return $this->belongsTo('App\Company', 'company_id');

    }
}
