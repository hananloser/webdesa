<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Syrat;
use Faker\Generator as Faker;

$factory->define(Syrat::class, function (Faker $faker) {
    return [
        'syrat' => $faker->name(),
        'layanan_id' => rand(1 , 10)
    ];
});
