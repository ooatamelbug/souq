<?php

use Faker\Generator as Faker;

$factory->define(App\Routdeal::class, function (Faker $faker) {
    return [
        //
        'stat' =>$faker->numberBetween( 0, 5),
        'fordeal' => $faker->unique()->numberBetween(1, App\Dealing::count())
    ];
});
