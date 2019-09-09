<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPoint extends Model
{
    protected $table ='datapoint';
    protected $fillable = [
        "id",
        "name",
        "type",
        "product_id"
    ];
}


