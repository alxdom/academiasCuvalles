<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Academia;
use Faker\Generator as Faker;

$factory->define(Academia::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'id' => $faker->numberBetween($min = 1, $max = 2000), // 8567
  
    ];
});
