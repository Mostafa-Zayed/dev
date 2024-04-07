<?php

namespace Modules\Website\Entities;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class WebsiteSetting extends Model
{
    use HasFactory,HasTranslations,SoftDeletes,UploadTrait;

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
        'section_packages_description',
        'section_reviews_title',
        'section_reviews_description',
        'section_questions_title',
        'section_questions_description',
        'section_questions_image',
        'section_posts_title',
        'section_posts_description',
        'section_feature_link',
        'newsletter_description',
        'footer_description',
        'facbook_link',
        'twitter_link',
        'instagram_link',
        'pinterest_link',
        'location_address',
        'support_email',
        'sales_email'
    ];
    
    public $translatable = [
        'section_features_title',
        'section_features_description',
        'section_work_title',
        'section_work_description',
        'section_screenshot_title',
        'section_screenshot_description',
        'section_packages_title',
        'section_packages_description',
        'section_reviews_title',
        'section_reviews_description',
        'section_questions_title',
        'section_questions_description',
        'section_posts_title',
        'section_posts_description',
        'newsletter_description',
        'footer_description',
        'location_address'
    ];


    public function getSectionFeaturesImageAttribute()
    {
        if ($this->attributes['section_features_image']) {
            $image = $this->getImage($this->attributes['section_features_image'], 'settings');
        } else {
            $image = $this->defaultImage('settings');
        }
        return $image;
    }

    public function setSectionFeaturesImageAttribute($value)
    {
        if (null != $value && is_file($value)) {
            isset($this->attributes['section_features_image']) ? $this->deleteFile($this->attributes['section_features_image'], 'settings') : '';
            $this->attributes['section_features_image'] = $this->uploadeImage($value, 'settings');
        }
    }

    public function getSectionWorkImageAttribute()
    {
        if ($this->attributes['section_work_image']) {
            $image = $this->getImage($this->attributes['section_work_image'], 'settings');
        } else {
            $image = $this->defaultImage('settings');
        }
        return $image;
    }

    public function setSectionWorkImageAttribute($value)
    {
        if (null != $value && is_file($value)) {
            isset($this->attributes['section_work_image']) ? $this->deleteFile($this->attributes['section_work_image'], 'settings') : '';
            $this->attributes['section_work_image'] = $this->uploadeImage($value, 'settings');
        }
    }

    public function getSectionQuestionsImageAttribute()
    {
        if ($this->attributes['section_questions_image']) {
            $image = $this->getImage($this->attributes['section_questions_image'], 'settings');
        } else {
            $image = $this->defaultImage('settings');
        }
        return $image;
    }

    public function setSectionQuestionsImageAttribute($value)
    {
        if (null != $value && is_file($value)) {
            isset($this->attributes['section_questions_image']) ? $this->deleteFile($this->attributes['section_questions_image'], 'settings') : '';
            $this->attributes['section_questions_image'] = $this->uploadeImage($value, 'settings');
        }
    }
    protected static function newFactory()
    {
        return \Modules\Website\Database\factories\WebsiteSettingFactory::new();
    }
}
