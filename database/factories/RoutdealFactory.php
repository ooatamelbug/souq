<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'stat' => mt_rand( [0, 5]),
        'fordeal' => $faker->unique()->numberBetween(1, App\Dealing::count());
    ];
});