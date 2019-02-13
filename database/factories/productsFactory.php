<?php

use Faker\Generator as Faker;

$factory->define(App\products::class, function (Faker $faker) {
    return [
        //
        'pro_name' => $faker->text(100),
        'price' => $faker->text(50),
    ];
});
