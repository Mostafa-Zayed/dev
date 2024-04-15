<?php

namespace Modules\Website\Entities;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class WebsiteReview extends Model
{
    use HasFactory,HasTranslations,UploadTrait;
    const IMAGEPATH = 'reviews' ;
    protected $fillable = [
        'description',
        'name',
        'rate',
        'job',
        'status',
        'is_home',
        'image',
        'user_id'
    ];

    public $translatable = ['name','description','job'];

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
            $this->attributes['image'] = $this->uploadeImage($value, 'partners');
        }
    }

    public function webisteDemos()
    {
        return $this->hasMany(WebsiteDemo::class,'website_review_id','id');
    }
    protected static function newFactory()
    {
        return \Modules\Website\Database\factories\WebsiteReviewFactory::new();
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
