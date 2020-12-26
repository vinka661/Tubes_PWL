<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Online Shop || E-Commerce</title>

  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

    <center>
            <h5>Laporan Data Produk Women</h5>
        </center>
        <br>

        <table class="table-bordered table-striped">
            <thead>
                <tr class="table-secondary">
                    <th width="20">No</th>
                    <th width="70">Nama</th>
                    <th width="100">Keterangan</th>
                    <th width="50">Harga</th>
                    <th width="30">Ukuran</th>
                    <th width="30">Stok</th>
                    <th width="100">Gambar</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($women as $w)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$w->nama_produk}}</td>
                    <td>{{$w->keterangan}}</td>
                    <td>{{$w->harga}}</td>
                    <td>{{$w->ukuran}}</td>
                    <td>{{$w->stok}}</td>
                    <td><img width="200" src="{{'storage/'.$w->gambar}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
