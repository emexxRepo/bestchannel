<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table = 'sectors';

    public function companies()
    {
        return $this->hasMany('App\Company', 'sector_id');

    }
}
