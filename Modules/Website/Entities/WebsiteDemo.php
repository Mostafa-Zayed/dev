<?php

namespace Modules\Website\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WebsiteDemo extends Model
{
    use HasFactory;

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
