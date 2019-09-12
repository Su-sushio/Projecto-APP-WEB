<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=["path", "option_id"];

    public function option(){
        return $this->belongsTo('App\Option');
    }
}


