<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Medecin;
use Faker\Generator as Faker;

$factory->define(Medecin::class, function (Faker $faker) {
    return [
        'nom' => $faker->sentence(3,true),
        'prenom' => $faker->sentence(3,true),
        'email' => $faker->unique()->safeEmail,
        'adresse' => $faker->sentence(5,true),
        'telephone' => $faker->sentence(7,true),

    ];
});
        