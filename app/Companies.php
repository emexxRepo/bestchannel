<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Companies extends Model
{
    protected $table = 'companies';
    use HasApiTokens;

    public function sector(){
        return $this->belongsTo('App\Sector','sector_id');

    }
    public function applies(){
        return $this->hasMany('App\Apply','opportunity_id');

    }
    public function oppurunity(){
        return $this->belongsTo('App\Opportunity','opportunity_id');

    }

}
