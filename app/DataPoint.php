<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPoint extends Model
{
    protected $fillable = [
        "id",
        "nome",
        "tipo",
        "id_produto"
    ];
}
