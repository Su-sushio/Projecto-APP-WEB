<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rel_inimigo_cultura extends Model
{
    protected $table ='rel_inimigo_cultura';
    protected $fillable = [
        "cultura_id",
        "inimigo_id",
        "nome_cientifico_inimigo"
    ];
 
    
}