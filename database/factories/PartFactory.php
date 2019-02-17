<?php

use Faker\Generator as Faker;

$factory->define(App\Part::class, function (Faker $faker) {
    return [
      'title' => $faker->text(20)
    ];
});
