<?php 
    include'db.php';
    session_start();

    $id = $_GET['user'];

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
    <link rel="stylesheet" href="assets/css/navi.css">
    <link rel="stylesheet" href="assets/css/baru.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <title>Beranda - Rima Arhyan</title>
</head>
<body class="bg-light">
    <img class="img-uns"src="https://i.ibb.co/mHFWQQz/logo-uns-food.jpg">
    <small class="txt-label">UNS Food/<a style="color: blue; text-decoration: none;" href="menu.php">Menu</a></small>

    <div class="vertical-menu">
        <a href="index.php?user=<?php echo $id?>" onclick="alert('Selesaikan pesanan anda'); return false">Home</a>
        <a class="active" href="menu.php?user=<?php echo $id?>">Menu</a>
        <a href="order.php?user=<?php echo $id?>" onclick="alert('Anda belum memilih pesanan, silahkan pesan dahulu'); return false">Order</a>
        <a href="logout.php?user=<?php echo $id?>" onclick="return confirm('Apakah anda ingin keluar, data pesanan anda akan dihapus otomatis');">Log out</a>
    </div>
    <div class="row">
        <div class="col-2">
            <div class="tbl-menu">
                <img class="img-banner" src="https://i.ibb.co/M7f7BDS/Untitled-design-7.png" border="0">
                <h6 class="text-order">Paket 1</h6>
                <a style="text-decoration: none;" class="btn-order" href="insert.php?user=<?php echo $id?>&menu=1">Order Now</a>
            </div>
        </div>
        <div class="col-2">
            <div class="tbl-menu">
                <img class="img-banner" src="https://i.ibb.co/ygfTddS/Untitled-design-6.png" border="0">
                <h6 class="text-order">Paket 2</h6>
                <a style="text-decoration: none;" class="btn-order" href="insert.php?user=<?php echo $id?>&menu=2">Order Now</a>
            </div>
        </div>
        <div class="col-2">
            <div class="tbl-menu">
                <img class="img-banner" src="https://i.ibb.co/Px35zYp/Untitled-design-8.png" border="0">
                <h6 class="text-order">Paket 3</h6>
                <a style="text-decoration: none;" class="btn-order" href="insert.php?user=<?php echo $id?>&menu=3">Order Now</a>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
