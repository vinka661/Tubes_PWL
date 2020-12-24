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
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">

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
