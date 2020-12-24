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
            <h5>Laporan Data Produk Terbaru</h5>
        </center>
        <br>

        <table class="table-bordered table-striped">
            <thead>
                <tr class="table-secondary">
                    <th width="50">No</th>
                    <th width="180">Nama</th>
                    <th width="90">Harga</th>
                    <th width="200">Gambar</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($baru as $b)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->harga}}</td>
                    <td><img width="200" src="{{'storage/'.$b->gambar}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
