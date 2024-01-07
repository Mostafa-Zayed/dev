<?php

namespace Modules\Website\Entities;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class WebsiteDemo extends Model
{
    use HasFactory,HasTranslations,UploadTrait;
    const IMAGEPATH = 'website/templates' ;

    protected $fillable = [
        'name',
        'website_slider_id',
        'website_feature_id',
        'website_work_id',
        'website_question_id',
        'website_screenshot_id',
        'website_review_id',
        'website_partner_id',
        'status',
    ];
    
    public $translatable = ['name'];

    public function getImageAttribute()
    {
        if ($this->attributes['image']) {
            $image = $this->getImage($this->attributes['image'], self::IMAGEPATH);
        } else {
            $image = $this->defaultImage('users');
        }
        return $image;
    }

    public function setImageAttribute($value)
    {
        if (null != $value && is_file($value)) {
            isset($this->attributes['image']) ? $this->deleteFile($this->attributes['image'], self::IMAGEPATH) : '';
            $this->attributes['image'] = $this->uploadAllTyps($value, 'users');
        }
    }

    public function scopeActive($query)
    {
        $query->where('status',1);
    }
    public function websiteSlider()
    {
        return $this->belongsTo(WebsiteSlider::class,'website_slider_id','id');
    }

    public function websiteFeature()
    {
        return $this->belongsTo(WebsiteFeature::class,'website_feature_id','id');
    }
    protected static function newFactory()
    {
        return \Modules\Website\Database\factories\WebsiteDemoFactory::new();
    }
}
