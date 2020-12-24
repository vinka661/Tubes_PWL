<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Women;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nama_produk' => $faker->sentence(),
        'keterangan' => $faker->realText(2000),
        'harga' => $faker->integer(),
        'ukuran' => $faker->sentence(),
        'stok' => $faker->integer(),
        'gambar' => $faker->gambar('public/img', 400, 300, null, false)
    ];
});
