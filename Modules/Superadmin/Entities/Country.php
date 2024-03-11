<?php

namespace Modules\Superadmin\Entities;

use App\Currency;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Superadmin\Database\factories\CountryFactory::new();
    }

    public function currency()
    {
        return $this->hasOne(Currency::class,'country_id','id');
    }
}
