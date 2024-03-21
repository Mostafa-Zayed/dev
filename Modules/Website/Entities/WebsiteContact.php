<?php

namespace Modules\Website\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WebsiteContact extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','phone','subject','message','status'];
    
    protected static function newFactory()
    {
        return \Modules\Website\Database\factories\WebsiteContactFactory::new();
    }
}
