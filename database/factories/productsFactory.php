<?php

use Faker\Generator as Faker;

$factory->define(App\products::class, function (Faker $faker) {
    $userid = App\User::pluck('id')->toArray();
    return [
        //
        'pro_name' => $faker->text(100),
        'price' => $faker->integer(10),
        'stat' => 0,
        'foruser' => $faker->randomElement($userid);
        'fordepart' => $faker->unique()->numberBetween(1, App\Depart::count());
        'forpart' => $faker->unique()->numberBetween(1, App\Depart::count());
    ];
});
