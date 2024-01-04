<?php

namespace Modules\Website\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WebsiteSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'description',
        'heading',
        'title',
        'image',
        'app_store_link',
        'google_play_link',
        'external_link',
        'video_link',
        'status',
        'is_home'
    ];

    public $translatable = [
        'description',
        'heading',
        'title'
    ];
    protected static function newFactory()
    {
        return \Modules\Website\Database\factories\WebsiteSliderFactory::new();
    }
}
