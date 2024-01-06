<?php

namespace Modules\Website\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class WebsiteScreenshot extends Model
{
    use HasFactory,HasTranslations;

    const IMAGEPATH = 'website/screen-shots';

    protected $fillable = [
        'description',
        'name',
        'status',
        'is_home'
    ];

    public $translatable = ['name','description'];
    
    public function webisteDemos()
    {
        return $this->hasMany(WebsiteDemo::class,'website_screenshots_id','id');
    }


    protected static function newFactory()
    {
        return \Modules\Website\Database\factories\WebsiteScreenshotFactory::new();
    }
}
