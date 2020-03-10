<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Layanan;
use Faker\Generator as Faker;

$factory->define(Layanan::class, function (Faker $faker) {
    return [
        'layanan' => $faker->name()
    ];
});
