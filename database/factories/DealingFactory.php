<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'from_pro' => ,
      'to_pro' => ,
      'cash' => mt_rand([100, 10000]);
    ];
});
