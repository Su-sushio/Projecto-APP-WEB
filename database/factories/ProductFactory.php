<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [

            "name"=>"Televisão LG",
            "notes"=>"32 polegadas",
            "link"=>"",
            "price"=>"500"
            
        ];
    });
        //
    ];
});
