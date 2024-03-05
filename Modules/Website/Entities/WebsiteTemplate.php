<?php

namespace Modules\Website\Entities;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
class WebsiteTemplate extends Model
{
    use HasFactory,HasTranslations,UploadTrait;
    const IMAGEPATH = 'templates' ;

    protected $fillable = [
        'name',
        'image',
        'status',
        'number' 
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

    public function websiteSlider()
    {
        return $this->hasOne(WebsiteSlider::class,'website_template_id','id');
    }

    public function websiteFeatures()
    {
        return $this->hasMany(WebsiteFeature::class,'website_template_id','id');
    }

    /**
     * Category Dropdown
     *
     * @param  int  $business_id
     * @param  string  $type category type
     * @return array
     */
    public static function forDropdown()
    {
        $local = App::getLocale();
        $templates = WebsiteTemplate::select(DB::raw("JSON_VALUE(website_templates.name,'$.$local') as name_test"),'id')
                        ->orderBy('name', 'asc')
                        ->get();
        $dropdown = $templates->pluck('name_test', 'id');

        return $dropdown;
    }
}
