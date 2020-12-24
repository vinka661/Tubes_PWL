<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baru;
use PDF;

class BaruController extends Controller
{
    public function baru()
    {
        $baru = Baru::all();
        return view ('manageProdukTerbaru', ['baru' => $baru]);

        $value = Cache::remember('barus', $seconds, function () {
            return DB::table('barus')->get();
        });
    }
    //halaman tambah data
    public function add()
    {
        return view('addBaru');
    }
    //proses penambahan data
    public function create(Request $request)
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
    public function edit($id)
    {
        $baru = Baru::find($id);
        return view('editBaru',['baru'=>$baru]);
    }
    //proses update data
    public function update($id, Request $request)
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
    public function delete($id)
    {
        $baru = Baru::find($id);
        $baru->delete();
        return redirect('/baru');
    }
    //cetak pdf
    public function cetak_pdf() {
        $baru = Baru::all();
        $pdf = PDF::loadview('barus_pdf',['baru'=>$baru]);
        return $pdf->stream();
    }
}
