<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table ='options';
    protected $fillable = [
        "id",
        "referencia",
        "value",
        "datapoint_id",
        "product_id"
    ];

    
    
    public function images() {
        return $this->hasMany('App\Image');
    }
}

