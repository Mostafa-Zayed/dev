<?php

namespace Modules\Website\Entities;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class WebsiteSlider extends Model
{
    use UploadTrait,HasTranslations;
    const IMAGEPATH = 'sliders' ;
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
            $this->attributes['image'] = $this->uploadeImage($value, 'sliders');
        }
    }

    public function webisteDemos()
    {
        return $this->hasMany(WebsiteDemo::class,'website_slider_id','id');
    }
    protected static function newFactory()
    {
        return \Modules\Website\Database\factories\WebsiteSliderFactory::new();
    }
}
