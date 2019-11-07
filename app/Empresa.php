<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table ='empresas';
    protected $fillable = [
        "nome"
    ];  
   
    public function adubos() {
    	return $this->hasMany('App\Adubo');
    }
}
