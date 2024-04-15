<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = ['device_type','device_id','morph_id' , 'morph_type'];

    public function morph(){
        return $this->morphTo();
    }
}
