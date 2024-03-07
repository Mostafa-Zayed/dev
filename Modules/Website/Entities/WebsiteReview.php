<?php

namespace Modules\Website\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class WebsiteReview extends Model
{
    use HasFactory,HasTranslations;

    protected $fillable = [
        'description',
        'name',
        'status',
        'is_home',
        'user_id'
    ];

    public $translatable = ['name','description'];
    
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
