<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'from_pro' => $faker->unique()->numberBetween(1, App\products::count()),
      'to_pro' => $faker->unique()->numberBetween(1, App\products::count()),
      'cash' => mt_rand([100, 10000]),
      'status' => mt_rand( [0, 4])
    ];
});
