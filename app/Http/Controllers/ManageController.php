<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baru;
use App\Women;
use PDF;

class ManageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function tampilTerbaru()
    {
        $baru = Baru::all();
        return view ('home', ['baru' => $baru]);

        $value = Cache::remember('barus', $seconds, function () {
            return DB::table('barus')->get();
        });
    }

    public function baru()
    {
        $baru = Baru::all();
        return view ('manageProdukTerbaru', ['baru' => $baru]);

        $value = Cache::remember('barus', $seconds, function () {
            return DB::table('barus')->get();
        });
    }
    //halaman tambah data
    public function addTerbaru()
    {
        return view('addBaru');
    }
    //proses penambahan data
    public function createTerbaru(Request $request)
    {
        if($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('images','public');
        }

        Baru::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'gambar' => $image_name,
        ]);
        return redirect('/baru');
    }
    //halaman edit data
    public function editTerbaru($id)
    {
        $baru = Baru::find($id);
        return view('editBaru',['baru'=>$baru]);
    }
    //proses update data
    public function updateTerbaru($id, Request $request)
    {
        $baru = Baru::find($id);
        $baru->nama = $request->nama;
        $baru->harga = $request->harga;
        
        if($baru->gambar && file_exists(storage_path('app/public/' . $baru->gambar)))
        {
            \Storage::delete('public/'.$baru->gambar);
        }
        $image_name = $request->file('gambar')->store('images', 'public');
        $baru->gambar = $image_name;

        $baru->save();
        return redirect('/baru');
    }
    //proses hapus data
    public function deleteTerbaru($id)
    {
        $baru = Baru::find($id);
        $baru->delete();
        return redirect('/baru');
    }
    //cetak pdf
    public function cetakTerbaru() {
        $baru = Baru::all();
        $pdf = PDF::loadview('barus_pdf',['baru'=>$baru]);
        return $pdf->stream();
    }

    public function women()
    {
        $women = Women::all();
        return view ('manageProdukWomen', ['women' => $women]);

        $value = Cache::remember('womens', $seconds, function () {
            return DB::table('womens')->get();
        });
    }
    //halaman tambah data
    public function addWomen()
    {
        return view('addWomen');
    }
    //proses penambahan data
    public function createWomen(Request $request)
    {
        //$inputValue = $request->all();
        if($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('images','public');
        }

        Women::create([
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'jenis' => $request->jenis,
            $arrayToString = implode(',',$request->input('ukuran')),
            'ukuran' => $arrayToString,
            'stok' => $request->stok,
            'gambar' => $image_name,
        ]);
        return redirect('/women');
    }
    //halaman edit data
    public function editWomen($id)
    {
        $women= Women::find($id);
        return view('editWomen',['women'=>$women]);
    }
    //proses update data
    public function updateWomen($id, Request $request)
    {
        $women = Women::find($id);
        $women->nama_produk = $request->nama_produk;
        $women->keterangan = $request->keterangan;
        $women->harga = $request->harga;
        $women->jenis = $request->jenis;
        $arrayToString = implode(',',$request->input('ukuran'));
        $women->ukuran = $arrayToString;
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
    public function deleteWomen($id)
    {
        $women = Women::find($id);
        $women->delete();
        return redirect('/women');
    }
    //cetak pdf
    public function cetakWomen() {
        $women = Women::all();
        $pdf = PDF::loadview('womens_pdf',['women'=>$women]);
        return $pdf->stream();
    }
}
