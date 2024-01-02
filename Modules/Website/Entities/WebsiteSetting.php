<?php

namespace Modules\Website\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class WebsiteSetting extends Model
{
    use HasFactory,HasTranslations,SoftDeletes;

    public $table = 'website_settings';

    protected $fillable = [
        'section_features_title',
        'section_features_description',
        'section_features_image',
        'section_work_title',
        'section_work_description',
        'section_work_image',
        'section_screenshot_title',
        'section_screenshot_description',
        'section_packages_title',
        'section_packages_description'
    ];
    
    public $translatable = [
        'section_features_title',
        'section_features_description',
        'section_work_title',
        'section_work_description',
        'section_screenshot_title',
        'section_screenshot_description',
        'section_packages_title',
        'section_packages_description'
    ];

    protected static function newFactory()
    {
        return \Modules\Website\Database\factories\WebsiteSettingFactory::new();
    }
}
