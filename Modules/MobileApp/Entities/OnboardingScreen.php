<?php

namespace Modules\MobileApp\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OnboardingScreen extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\MobileApp\Database\factories\OnboardingScreenFactory::new();
    }
}
