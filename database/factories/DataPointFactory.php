<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DataPoint;
use Faker\Generator as Faker;

$factory->define(DataPoint::class, function (Faker $faker) {
    return [
        "id"=>"",
        "nome"=>"",
        "id_produto"=>"",
                  
    ];
});
