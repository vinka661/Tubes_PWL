@extends('master')
@section('content')
<body>
  <br><br> 
  <section class="page-section bg-light center">
  <div class="container">
    <div class="tombol float-left">
        <a href="women/add" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="women/cetak_pdf" class="btn btn-success" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a>
    </div>
    <br>
    <br>
    <table class="table-bordered">
        <thead>
            <tr>
                <th width="200">Nama Produk</th>
                <th width="400">Keterangan</th>
                <th width="200">Harga</th>
                <th width="200">Jenis</th>
                <th width="200">Ukuran</th>
                <th width="200">Stok</th>
                <th width="200">Gambar</th>
                <th width="200">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($women as $w)
		    <tr>
                <td>{{$w->nama_produk}}</td>
                <td>{{$w->keterangan}}</td>
                <td>{{$w->harga}}</td>
                <td>{{$w->jenis}}</td>
                <td>{{$w->ukuran}}</td>
                <td>{{$w->stok}}</td>
                <td><img width="150px" src="{{asset('storage/'.$w->gambar)}}"></td>
                <td>
                    <h5><a href="women/edit/{{ $w->id }}" class="badge badge-warning"><i class="fas fa-edit"></i> Edit</a>
                    <a href="women/delete/{{ $w->id }}" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a></h5>
                </td>
            </tr>
	        @endforeach
        </tbody>
    </table>
    </div>
    </section>
    <br><br>
</body>
@endsection