<?php

namespace Modules\Website\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WebsiteSubscribe extends Model
{
    use HasFactory;

    protected $fillable = ['email','status'];
    
    protected static function newFactory()
    {
        return \Modules\Website\Database\factories\WebsiteSubscribeFactory::new();
    }
}
