<?php

namespace Modules\Website\Entities;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class WebsiteFeature extends Model
{
    use HasFactory,HasTranslations,UploadTrait;

    const IMAGEPATH = 'features' ;
    
    protected $fillable = [
        'website_template_id',
        'description',
        'name',
        'image',
        'icon',
        'external_link',
        'status',
        'is_home'
    ];

    
    public $translatable = ['name','description'];

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
            $this->attributes['image'] = $this->uploadAllTyps($value, 'features');
        }
    }

    public function websiteTemplate()
    {
        return $this->belongsTo(WebsiteTemplate::class, 'website_template_id', 'id');
    }
    protected static function newFactory()
    {
        return \Modules\Website\Database\factories\WebsiteFeatureFactory::new();
    }
}
