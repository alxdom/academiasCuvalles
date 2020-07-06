<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Academia;
use Faker\Generator as Faker;

$factory->define(Academia::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        //'clave' => $faker->numberBetween($min = 1000, $max = 2000), // 8567
        //'materia' => $faker->word,
    ];
});
