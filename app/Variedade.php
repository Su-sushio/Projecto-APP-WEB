<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variedade extends Model
{
    protected $table ='variedade';
    protected $fillable = [
        "nome",
        "tipo",
        "cultura_id"
    ];
   
    
   
    public function cultura(){
    	return $this->belongsTo('App\Cultura');
    }

}

