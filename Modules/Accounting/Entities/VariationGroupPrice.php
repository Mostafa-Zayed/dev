<?php

namespace Modules\Accounting\Entities;

use Illuminate\Database\Eloquent\Model;

class VariationGroupPrice extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
