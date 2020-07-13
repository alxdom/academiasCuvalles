<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Carrera;
use Faker\Generator as Faker;

$factory->define(Carrera::class, function (Faker $faker) {
    return [
        'carreras' => $faker->word,
        'departamento_id' => $faker->numberBetween($min = 1, $max = 5)
    ];
});
