<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Women extends Model
{
    protected $fillable = ['nama_produk','keterangan','harga','ukuran','stok','gambar'];
}
