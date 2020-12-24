<?php

use Illuminate\Database\Seeder;

class BaruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Baru::insert([
            [
              'nama' => 'Kaos Dreambirds Artwear',
              'harga' =>  '200000',
              'gambar' => url("img/terbaru1.jpg")
            ],
        ]);
    }
}
