<?php 
    
    include 'db.php';
    $id = $_GET['user'];
    $menu = $_GET['menu'];

    session_start();

    if(isset($_POST['masuk'])){

        $jumlah=$_POST['jumlah'];
        if($jumlah>=50){
            echo '<script>window.location="edit-order.php?user='.$id.'&menu='.$menu.'&jml='.$jumlah.'"</script>';
        }else{
            echo '<script>alert("mohon maaf anda melewati batas minimal order")</script>';
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

    <title>Beranda - Rima Arhyan</title>
</head>
<body class="bg-light">
    <img class="img-uns"src="https://i.ibb.co/mHFWQQz/logo-uns-food.jpg">
    <div class="vertical-menu">
        <a href="index.php?user=<?php echo $id?>" onclick="alert('Harap selesaikan pesanan anda dahulu'); return false">Home</a>
        <a href="ganti.php?user=<?php echo $id?>" onclick="return confirm('Apakah anda ingin mengganti pesanan?');">Menu</a>
        <a class="active" href="order.php?user=<?php echo $id?>">Order</a>
        <a href="logout.php?user=<?php echo $id?>" onclick="return confirm('Apakah anda ingin mengganti pesanan?');">Log out</a>
    </div>
    <div class="">
        <div class="tbl-order-admin">
            <table class="table align-items-center mb-0" style="border-collapse: collapse;">
                <tbody>
                    <th class="align-middle text-center text-sm">Jumlah</th>
                    <th>Nama Produk</th>
                    <th class="align-middle text-left text-sm">Harga</th>
                    <th>Opsi</th>
                    <?php 
                        $list_data = mysqli_query($conn, "SELECT * FROM tb_paket tp join tb_rec_pesan tr on tr.id_pesanan=tp.id_paket where id_user='".$id."' ");
                             while($row = mysqli_fetch_array($list_data)){
                     ?>
                    <form method="post">
                    <tr>
                        <td class="align-middle text-center text-sm">
                            
                                <input type="text" value="<?php echo $row['jml'] ?>" name="jumlah" size="1">
                        </td>
                        <td style="font-weight: 600;" class="align-middle text-left text-sm"><?php echo $row['nm_paket']?></td>
                        <td class="align-middle text-left text-sm">Rp<?php echo $row['harga']?></td>
                        <td><a class="btn-pay" href=""><input type="submit" value="edit" name="masuk"></a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <?php 
                        $list_data = mysqli_query($conn, "SELECT * FROM tb_paket tp join tb_rec_pesan tr on tr.id_pesanan=tp.id_paket where id_user='".$id."' ");
                        $a=mysqli_fetch_object($list_data);
                        $tot=$a->jml*$a->harga;
                         ?>
                        <td></td>
                        <td class="align-middle text-right text-sm">Total Harga: </td>
                        <td class="align-middle text-left text-sm">Rp<?php echo $tot ?></td>
                    </tr>
                    <tr>
                        <?php 
                            $cek = mysqli_query($conn, "SELECT * FROM tb_rec_pesan where id_user='".$id."'");
                            $a = mysqli_fetch_object($cek); 
                         ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a class="btn-pay" href="pay.php?user=<?php echo $id?>&rec=<?php echo $a->id_rec?>">Bayar</a></td>
                    </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
