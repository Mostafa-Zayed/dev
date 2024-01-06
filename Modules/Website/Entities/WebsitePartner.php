<?php

namespace Modules\Website\Entities;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class WebsitePartner extends Model
{
    use HasFactory,HasTranslations,UploadTrait;

    const IMAGEPATH = 'website/partners' ;

    protected $fillable = ['name','image'];

    public $translatable  = ['name'];
    
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

    public function webisteDemos()
    {
        return $this->hasMany(WebsiteDemo::class,'website_partner_id','id');
    }
    
    protected static function newFactory()
    {
        return \Modules\Website\Database\factories\WebsitePartnerFactory::new();
    }
}
