<?php

namespace Modules\MobileApp\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SplashScreen extends Model
{
    use HasFactory;

    protected $fillable = ['image','status'];
    
    protected static function newFactory()
    {
        return \Modules\MobileApp\Database\factories\SplashScreenFactory::new();
    }
}
