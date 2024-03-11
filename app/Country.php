<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function currency()
    {
        return $this->hasOne(Currency::class,'country_id','id');
    }
}
