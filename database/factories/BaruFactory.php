<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Baru;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nama' => $faker->sentence(),
        'harga' =>$faker->integer(),
        'gambar' => $faker->gambar('public/img', 400, 300, null, false)
    ];
});
