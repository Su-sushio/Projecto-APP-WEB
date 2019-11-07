<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adubo extends Model
{
    protected $table ='adubo';
    protected $fillable = [
        "nome_comercial",
        "distribuidor_id",
        "tipo_produto",
        "formulacao",
        "modo_accao"
    ];

    public function empresa(){
    	return $this->belongsTo('App\Empresa')->orderBy('id');;
    }    
   
}
