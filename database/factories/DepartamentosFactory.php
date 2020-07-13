<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Departamento;
use Faker\Generator as Faker;

$factory->define(Departamento::class, function (Faker $faker) {
    return [
        'departamento' => $faker->word,
        'clave' => $faker->numberBetween($min = 100, $max = 1000),
    ];
});
