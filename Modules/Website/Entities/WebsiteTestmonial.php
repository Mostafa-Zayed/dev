<?php

namespace Modules\Website\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WebsiteTestmonial extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Website\Database\factories\WebsiteTestmonialFactory::new();
    }
}
