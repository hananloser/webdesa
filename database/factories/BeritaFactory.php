<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Berita;
use Faker\Generator as Faker;

$factory->define(Berita::class, function (Faker $faker) {
    return [
        'judul_berita' => $faker->sentence(6 , true),
        'desc'         => $faker->sentence(200 , true),
        'foto'         => 'avatar.png'
    ];
});
