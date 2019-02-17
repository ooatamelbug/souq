<?php

use Faker\Generator as Faker;

$factory->define(App\Details::class, function (Faker $faker) {
    return [
        'forprod' => $faker->unique()->numberBetween(1,App\products::count()),
        'size' =>$faker->numberBetween(10,250),
        'heigth' =>$faker->numberBetween(10,100),
        'weigth' =>$faker->numberBetween(10,250),
        'desc' => $faker->text(300)
    ];
});
