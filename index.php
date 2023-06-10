<?php 
    include'db.php';
    session_start();

    if($_SESSION['status-login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

    $id = $_GET['user'];

    $list_data=mysqli_query($conn, "SELECT * FROM tb_user where id_user='".$id."'");
    $a=mysqli_fetch_object($list_data);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/stt.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <title>Beranda - Rima Arhyan</title>
</head>
<body class="bg-light">
    <img class="img-uns"src="https://i.ibb.co/mHFWQQz/logo-uns-food.jpg">
    <small class="txt-label">UNS Food/<a href="index.php">Home</a></small>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-website shadow-sm">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand active" href="./">Rhima Arhyan</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="./">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kategori.html">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produk.html">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pemesanan.html">Pemesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testimoni.html">Testimoni</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="notifikasi.html">
                        <i class="fa fa-bell fa-1-5x"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="keranjang.html">
                        <i class="fa fa-shopping-basket fa-1-5x"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle fa-1-5x"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="login.html">Login</a>
                        <a class="dropdown-item" href="mendaftar.html">Mendaftar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="profil.html">Profil</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav> -->
    <div class="vertical-menu">
        <a class="active" href="index.php?user=<?php echo $id?>">Home</a>
        <a href="menu.php?user=<?php echo $id?>">Menu</a>
        <a href="order.php?user=<?php echo $id?>" onclick="alert('Anda belum memilih pesanan, silahkan pesan dahulu'); return false">Order</a>
        <a href="logout.php?user=<?php echo $id?>" onclick="return confirm('Apakah anda ingin keluar, data pesanan anda akan dihapus otomatis');">Log out</a>
    </div>
    <div style="padding:180px 0 0 250px;" class="container">
        <div>
            <h4>Selamat Datang <?php echo $a->username ?>, Mau pesan apa hari ini..?</h4>
            <br>
        </div>
        <div id="cec" class="carousel slide carousel-fade shadow-sm" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#cec" data-slide-to="0" class="active"></li>
                <li data-target="#cec" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/carousel/13.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/carousel/12.jpg" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#cec" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#cec" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-sm-12 col-lg-3 mb-3">
                <a href="produk-detail.html" class="hvnb">
                    <div class="list-group shadow-sm">
                        <div class="list-group-item gambar-produk" style="background: url(assets/img/produk/1.jpg);">
                        </div>
                        <div class="list-group-item">
                            <div class="mb-2">
                                <span class="active text-website">Rp150.000</span>
                                <span class="float-right text-muted">Terjual: 100pcs</span>
                            </div>
                            <p class="card-text text-dark">Talisa Dress Women's Casual Short-Sleeve Premium Dress</p>
                        </div>
                        <div class="list-group-item btn-outline-success pl-3">
                            Detail Produk
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-lg-3 mb-3">
                <a href="produk-detail.html" class="hvnb">
                    <div class="list-group shadow-sm">
                        <div class="list-group-item gambar-produk" style="background: url(assets/img/produk/2.jpg);">
                        </div>
                        <div class="list-group-item">
                            <div class="mb-2">
                                <span class="active text-website">Rp150.000</span>
                                <span class="float-right text-muted">Terjual: 100pcs</span>
                            </div>
                            <p class="card-text text-dark">Talisa Dress Women's Casual Short-Sleeve Premium Dress</p>
                        </div>
                        <div class="list-group-item btn-outline-success pl-3">
                            Detail Produk
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-lg-3 mb-3">
                <a href="produk-detail.html" class="hvnb">
                    <div class="list-group shadow-sm">
                        <div class="list-group-item gambar-produk" style="background: url(assets/img/produk/3.jpg);">
                        </div>
                        <div class="list-group-item">
                            <div class="mb-2">
                                <span class="active text-website">Rp150.000</span>
                                <span class="float-right text-muted">Terjual: 100pcs</span>
                            </div>
                            <p class="card-text text-dark">Talisa Dress Women's Casual Short-Sleeve Premium Dress</p>
                        </div>
                        <div class="list-group-item btn-outline-success pl-3">
                            Detail Produk
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-lg-3 mb-3">
                <a href="produk-detail.html" class="hvnb">
                    <div class="list-group shadow-sm">
                        <div class="list-group-item gambar-produk" style="background: url(assets/img/produk/4.jpg);">
                        </div>
                        <div class="list-group-item">
                            <div class="mb-2">
                                <span class="active text-website">Rp150.000</span>
                                <span class="float-right text-muted">Terjual: 100pcs</span>
                            </div>
                            <p class="card-text text-dark">Talisa Dress Women's Casual Short-Sleeve Premium Dress</p>
                        </div>
                        <div class="list-group-item btn-outline-success pl-3">
                            Detail Produk
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <nav class="d-flex justify-content-center">
            <ul class="pagination shadow-sm">
                <li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div> -->

    <!-- <div class="bg-website mt-5 p-2">
        <div class="container pt-4">
            <div class="row text-white">
                <div class="col-sm-12 col-lg-3">
                    <h5>Informasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-angle-right"></i> Kontak</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Syarat dan Ketentuan</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Kebijakan Pengguna</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Lokasi Kami</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <h5>Belanja</h5>
                    <ul class="list-unstyled">
                        <li><a href="produk.html"><i class="fa fa-angle-right"></i> Semua Produk</a></li>
                        <li><a href="produk.html"><i class="fa fa-angle-right"></i> Produk Baru</a></li>
                        <li><a href="produk.html"><i class="fa fa-angle-right"></i> Produk Spesial</a></li>
                        <li><a href="kategori.html"><i class="fa fa-angle-right"></i> Semua Kategori</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Customer Care</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <h5>Tentang Kami</h5>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-map-marker-alt"></i> Jalan Thamrin No.100, Medan Kota, Kota Medan, Indonesia.</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i> customer@rima.arhyan.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <h5>Media Sosial</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://www.facebook.com/rima.arhyan"><i class="fa fa-angle-right"></i> Facebook</a></li>
                        <li><a href="https://twitter.com/rima.arhyan"><i class="fa fa-angle-right"></i> Twitter</a></li>
                        <li><a href="https://www.instagram.com/rima.arhyan"><i class="fa fa-angle-right"></i> Instagram</a></li>
                        <li><a href="https://line.me/@rima.arhyan"><i class="fa fa-angle-right"></i> Line Chat</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
