<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }
}
