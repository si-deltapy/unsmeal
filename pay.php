<?php 
    include 'db.php';
    session_start();

    $id = $_GET['user'];
    $record = $_GET['rec'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
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
    <small class="txt-label">UNS Food/<span style="color: blue;">Payment</span></small>

    <div class="vertical-menu">
        <a href="index.php">Home</a>
        <a class="active" href="pay.php">Payment</a>
        <a href="logout.php?user=<?php echo $id?>" onclick="return confirm('Apakah anda ingin keluar, data pesanan anda akan dihapus otomatis');">Log out</a>
    </div>
    <div class="">
        <div class="tbl-order-admin">
            <table class="table align-items-center mb-0" style="border-collapse: collapse;">
                <tbody>
                    <tr>
                        <th style="font-size: 30px">Bank Transfer <br></th>
                    </tr>
                    <tr>
                        <td class="align-middle text-left text-sm">
                            <img style="height: 15px; width: 35px"src="https://i.ibb.co/PmP9G1N/Untitled.png"> - Bank Central Asia .Tbk</td>
                        <td>0011555510</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-left text-sm">
                            <img style="height: 30px; width: 33px"src="https://i.ibb.co/NrQsMgL/Logo-BRI-Bank-Rakyat-Indonesia-PNG-Terbaru.webp"> - Bank Rakyat Indonesia .Tbk</td>
                        <td>7632-01-007520-53-0</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-left text-sm">
                            <img style="height: 14px; width: 35px"src="https://i.ibb.co/jz3V71D/2560px-BNI-logo-svg.png"> - Bank Negara Indonesia .Tbk</td>
                        <td>097763889917</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-left text-sm">
                            <img style="height: 30px; width: 30px"src="https://i.ibb.co/zVKyjC9/logo-bsi.png"> - Bank Syariah Indonesia .Tbk</td>
                        <td>10101333213</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-left text-sm">
                            <img style="height: 30px; width: 35px"src="https://i.ibb.co/9wNTBfW/Untitled.jpg"> - Bank Tabungan Negara .Tbk</td>
                        <td>08110881992</td>
                    </tr>
                </tbody>
            </table>
            <?php 
                $cek = mysqli_query($conn, "SELECT * FROM tb_rec_pesan tr join tb_paket tp on tp.id_paket=tr.id_pesanan where id_rec='".$record."'");
                $a = mysqli_fetch_object($cek);
             ?>
            <br><br>
            <h6 class="text-p-h6">Sub Total:  Rp<?php echo $a->total ?><br><small style="font-size: 11px; width: 27px;"><?php echo $a->jml ?> - <?php echo $a->nm_paket; ?></small></h6>
            <p class="text-p">*Jika ada keterlambatan dalam verivikasi payment, bisa dilakukan secara manual melalui chat admin kami dengan menuliskan INVOICE - 1900<?php echo $a->id_rec?><br>
                <a href="https:///wa.me/6285742770972" target="_blank">chat admin</a></p>
            <a class="txt-opt" href="bank-tf.php?user=<?php echo $id?>&rec=<?php echo $a->id_rec?>">Checkout</a><br><br>
        </div> 
    </div>
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
