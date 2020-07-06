<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Materia;
use Faker\Generator as Faker;

$factory->define(Materia::class, function (Faker $faker) {
    return [
        
        'clave' => $faker->numberBetween($min = 1000, $max = 2000), // 8567
        'nombre' => $faker->word,
    ];
});
