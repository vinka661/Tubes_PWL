<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Women;
use PDF;

class WomenController extends Controller
{
    public function women()
    {
        $women = Women::all();
        return view ('manageProdukWomen', ['women' => $women]);

        $value = Cache::remember('womens', $seconds, function () {
            return DB::table('womens')->get();
        });
    }
    //halaman tambah data
    public function add()
    {
        return view('addWomen');
    }
    //proses penambahan data
    public function create(Request $request)
    {
        if($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('images','public');
        }

        Women::create([
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'ukuran' => $request->ukuran,
            'stok' => $request->stok,
            'gambar' => $image_name,
        ]);
        return redirect('/women');
    }
    //halaman edit data
    public function edit($id)
    {
        $women= Women::find($id);
        return view('editWomen',['women'=>$women]);
    }
    //proses update data
    public function update($id, Request $request)
    {
        $women = Women::find($id);
        $women->nama_produk = $request->nama_produk;
        $women->keterangan = $request->keterangan;
        $women->harga = $request->harga;
        $women->ukuran = $request->ukuran;
        $women->stok = $request->stok;
        
        if($women->gambar && file_exists(storage_path('app/public/' . $women->gambar)))
        {
            \Storage::delete('public/'.$women->gambar);
        }
        $image_name = $request->file('gambar')->store('images', 'public');
        $women->gambar = $image_name;

        $women->save();
        return redirect('/women');
    }
    //proses hapus data
    public function delete($id)
    {
        $women = Women::find($id);
        $women->delete();
        return redirect('/women');
    }
    //cetak pdf
    public function cetak_pdf() {
        $women = Women::all();
        $pdf = PDF::loadview('womens_pdf',['women'=>$women]);
        return $pdf->stream();
    }
}
