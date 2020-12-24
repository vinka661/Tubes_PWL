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

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">E-COMMERCE</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Men
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                    <a class="dropdown-item" href="portfolio-1-col.html">Kaos Lengan Pendek</a>
                    <a class="dropdown-item" href="portfolio-2-col.html">Kaos Lengan Panjang</a>
                    <a class="dropdown-item" href="portfolio-3-col.html">Sweater</a>
                    <a class="dropdown-item" href="portfolio-4-col.html">Jacket</a>
                </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Women
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="portfolio-1-col.html">Kaos Lengan Pendek</a>
                <a class="dropdown-item" href="portfolio-2-col.html">Kaos Lengan Panjang</a>
                <a class="dropdown-item" href="portfolio-3-col.html">Sweater</a>
                <a class="dropdown-item" href="portfolio-4-col.html">Jacket</a>
                <a class="dropdown-item" href="portfolio-4-col.html">Gamis</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kids
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
                <a class="dropdown-item" href="portfolio-1-col.html">Kaos Lengan Pendek</a>
                <a class="dropdown-item" href="portfolio-2-col.html">Kaos Lengan Panjang</a>
                <a class="dropdown-item" href="portfolio-3-col.html">Sweater</a>
                <a class="dropdown-item" href="portfolio-4-col.html">Jacket</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">Sale</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">How to Buy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/baru')}}">Manage Produk Terbaru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/women')}}">Manage Produk Women</a>
          </li>
          <li class="nav-item">
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
             </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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

  <!-- Footer -->
  <br><br>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>