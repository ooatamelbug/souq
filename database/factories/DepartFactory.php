<?php

use Faker\Generator as Faker;

$factory->define(App\Depart::class, function (Faker $faker) {
    return [
        'title' => $faker->text(10)
    ];
});
