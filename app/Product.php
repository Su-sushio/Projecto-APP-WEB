<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      "name",
      "notes",
      "state",
    ];

    public function  datapoints(){
      return $this->hasMany('App\DataPoint')->orderBy('id');

    }

    public function  options(){
      return $this->hasMany('App\Option')->orderBy('id');

    }
   
}