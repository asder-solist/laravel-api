<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Manufacturer;
use Faker\Generator as Faker;

$factory->define(Manufacturer::class, function (Faker $faker) {
    return [
        'name'=>$faker->company,
        'numberOfProductsPerYear'=>$faker->numberBetween(1000, 3000),
        'timeOnMarket'=>$faker->numberBetween(1, 30),
    ];
});

