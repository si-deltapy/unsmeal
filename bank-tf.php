<?php 
   include 'db.php';
    session_start();

    $id = $_GET['user'];
    $record = $_GET['rec'];
    

    if(isset($_POST['masuk'])){

        $dir = "berkas/";
        $tmp_file = $_FILES['nmfile']['tmp_name'];
        $file_name = $_FILES['nmfile']['name'];

        $cek = mysqli_query($conn, "SELECT * FROM tb_rec_pesan tr join tb_paket tp on tp.id_paket=tr.id_pesanan where id_rec='".$record."'");
        $a = mysqli_fetch_object($cek);

        $insert = mysqli_query($conn, "INSERT INTO tb_pemesanan VALUES (
                0,
                '".$a->id_paket."',
                '".$_POST['alamat']."',
                '".$a->jml."',
                CURRENT_TIME(),
                '".$_POST['tanggal']."',
                '".$_POST['tf-bank']."',
                0,
                '".$id."',
                '".$file_name."')");
        $upp = move_uploaded_file($tmp_file, $dir.$file_name);

        if($insert){
            if($upp){
                echo '<script>alert("Pembayaran Sukses !")</script>';
                echo '<script>window.location="cek.php?user='.$id.'&rec='.$record.'"</script>';
            }else{
                echo '<script>alert("Pembayaran error, File terlalu besar harap tidak melebihi 2MB")</script>';
            }
        }else{
            mysqli_error_list($conn);
            echo '<script>alert("Pembayaran gagal pastikan jaringan anda stabil, Hubungi Admin")</script>';
        }
    }
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

    <title>Sign Up - UNS Food</title>
</head>
<body class="bg-light">
    
    
    <div class="container my-5">
        <img class="logo align-middle justify-content-center" src="https://i.ibb.co/mHFWQQz/logo-uns-food.jpg">
        <br>
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-lg-6">
                <div class="card card-body shadow-sm">
                    <center class="mb-4">
                        <h4>Konfirmasi Pembayaran</h4>
                    </center>
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12 col-lg-7 mb-4">
                            <form method="post" action="" enctype="multipart/form-data">
                                <label for="ban">Pilih Bank Tujuan</label>
                                <select class="input-control" id="bank" name="tf-bank" required>
                                    <option value="">--Pilih--</option>
                                    <option value="1">Transfer BCA</option>
                                    <option value="2">Transfer BRI</option>
                                    <option value="3">Transfer BNI</option>
                                    <option value="4">Transfer BSI</option>
                                    <option value="5">Transfer BTN</option>
                                </select>
                                <label for="bank">Alamat Pengiriman: </label>
                                <input type="text" id="alamat" name="alamat" class="form-control mb-4" placeholder="contoh: FMIPA Gd.C lt.4">
                                <label for="bank">Pilih Tanggal Pengiriman</label>
                                <input type="date" id="date" name="tanggal" class="form-control mb-4" placeholder="tanggal">
                                <label for="bank">Upload Bukti: </label>
                                <input type="file" id="nmfile" name="nmfile" class="form-control mb-4">
                                <input type="submit" value="Bayar" name="masuk" style="background: linear-gradient(104.49deg, #0154A4 8.26%, #689CCE 104.79%);" class="btn text-white btn-block mb-3">
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
