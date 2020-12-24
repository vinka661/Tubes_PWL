<?php

use Illuminate\Database\Seeder;

class WomenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Women::insert([
            [
              'nama_produk' => 'Kaos Herschel',
              'keterangan' =>  'Bahannya sangat berkualitas dan nyaman dipakai',
              'harga' => '500000',
              'ukuran' => 'S',
              'stok' => '100',
              'gambar' => url("img/terbaru4.jpg")
            ],
        ]);
    }
}
