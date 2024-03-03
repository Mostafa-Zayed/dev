<?php

namespace Modules\Website\Entities;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class WebsiteTemplate extends Model
{
    use HasFactory,HasTranslations,UploadTrait;
    const IMAGEPATH = 'templates' ;

    protected $fillable = [
        'name',
        'image',
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
            $this->attributes['image'] = $this->uploadAllTyps($value, 'templates');
        }
    }

    public function scopeActive($query)
    {
        $query->where('status',1);
    }
    
    protected static function newFactory()
    {
        return \Modules\Website\Database\factories\WebsiteDemoFactory::new();
    }
}
