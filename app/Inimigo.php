<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inimigo extends Model
{
    protected $table ='inimigo';
    protected $fillable = [
        "nome",
        "tipo_inimigo"
    ];

    
   
}

