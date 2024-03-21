<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VariationTemplate extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the attributes for the variation.
     */
    public function values()
    {
        return $this->hasMany(\App\VariationValueTemplate::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
