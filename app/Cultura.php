<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cultura extends Model
{
    protected $table ='culturas';
    protected $fillable = [
        "nome",
        "nome_cientifico"
    ];

    
    
    public function variedade(){
        return $this->hasMany('App\Variedade');
    }
}

