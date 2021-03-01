<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Medecin;
use App\Rendezvous;
use Faker\Generator as Faker;

$factory->define(Rendezvous::class, function (Faker $faker) {
    return [
        'medecins_id' => factory(Medecin::class),
        'libelle' => $faker->sentence(5, true),
        'date' => $faker->date,
        
    ];
});
