<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->city,
        'description' =>$faker->word(10),
        'image' => 'https://picsum.photos/200/300',
        'price' => $faker->numberBetween(100,5000),
        'category_id' => $faker->numberBetween(1, 3),
    ];
});
