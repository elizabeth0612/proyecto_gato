<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Gato;
use Faker\Generator as Faker;

$factory->define(Gato::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name(),
        'raza'=>$faker->randomElement(['pitbull', 'peluchin']),
        'fecha_nacimiento'=>'2022-05-06',
    ];
});
