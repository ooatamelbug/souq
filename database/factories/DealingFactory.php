<?php

use Faker\Generator as Faker;

$factory->define(App\Dealing::class, function (Faker $faker) {
    return [
      'from_pro' => $faker->unique()->numberBetween(1, App\products::count()),
      'to_pro' => $faker->unique()->numberBetween(1, App\products::count()),
      'cash' => $faker->numberBetween(100, 10000),
      'stat' => $faker->numberBetween( 0, 4)
    ];
});
