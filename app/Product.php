<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      "name",
      "notes",
      "brand",
      "model",
      "link",
      "price"
  ];

   
}