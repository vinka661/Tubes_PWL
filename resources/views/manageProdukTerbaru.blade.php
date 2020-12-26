@extends('master')
@section('content')
<body>
  <br><br> 
  <section class="page-section bg-light center">
  <div class="container">
    <div class="tombol float-left">
        <a href="baru/add" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="baru/cetak_pdf" class="btn btn-success" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a>
    </div>
    <br>
    <br>
    <table class="table-bordered">
        <thead>
            <tr>
                <th width="300">Nama</th>
                <th width="200">Harga</th>
                <th width="400">Gambar</th>
                <th width="200">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($baru as $b)
		    <tr>
                <td>{{$b->nama}}</td>
                <td>{{$b->harga}}</td>
                <td><img width="150px" src="{{asset('storage/'.$b->gambar)}}"></td>
                <td>
                    <h5><a href="baru/edit/{{ $b->id }}" class="badge badge-warning"><i class="fas fa-edit"></i> Edit</a>
                    <a href="baru/delete/{{ $b->id }}" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a></h5>
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