@extends('master')
@section('content')
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">
<body>
  <br><br> 
  <section class="page-section bg-light">
        <font><h1 align="center">FORM TAMBAH DATA</h1></font>
        <br/>
        <form action="/baru/create" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama">
                    <br/>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga">
                    <br/>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                    <br/>
                </div>
                <button type="submit" name="add" class="btn btn-success"><i class="fas fa-save"></i> Tambah Data</button>
                <a class="btn btn-success" href="{{url('/baru')}}"><i class="fas fa-arrow-left"></i> Kembali</a>
            </form>
        </section>
        <br><br>
</body>
@endsection