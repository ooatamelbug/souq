<?php

use Faker\Generator as Faker;

$factory->define(App\products::class, function (Faker $faker) {
    $userid = App\User::pluck('id')->toArray();
    return [
        //
        'pro_name' => $faker->text(100),
        'price' => $faker->numberBetween(100,10000),
        'stat' => 0,
        'foruser' => $faker->randomElement($userid),
        'fordepart' => $faker->unique(true)->numberBetween(1, App\Depart::count()),
        'forpart' => $faker->unique(true)->numberBetween(1, App\Depart::count())
    ];
});
