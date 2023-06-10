<?php 
    include 'db.php';
	// SELECT *,tu.username user FROM tb_pemesanan tp join tb_user tu on tu.id_user=tp.nm_user; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/stt.css">
    <link rel="stylesheet" href="../assets/css/navi.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">

    <title>Beranda - Rima Arhyan</title>
</head>
<body class="bg-light">
    <img class="img-uns"src="https://i.ibb.co/mHFWQQz/logo-uns-food.jpg">
    <small class="txt-label">UNS Food/<a href="index.php">Order</a></small>
    
    <div class="vertical-menu">
        <a class="active" href="order-ad.php">Order</a>
        <a href="pay-ad.php">Payment</a>
        <a href="logout-ad.php">Log out</a>
    </div>
    <div class="">
    	<div class="tbl-order-admin">
	    	<table class="table align-items-center mb-0">
	    		<tbody>
	    			<?php 
	    				$list_data = mysqli_query($conn, "SELECT *,tu.username user FROM tb_pemesanan tp join tb_user tu on tu.id_user=tp.nm_user join tb_status_pembayaran tsp on tp.status_pembayaran=tsp.id_status order by tp.id_pesanan");
	    					 while($row = mysqli_fetch_array($list_data)){
	    			 ?>
	    			<tr>
		    			<td class="align-middle text-center text-sm"><?php echo $row['id_pesanan'] ?></td>
		    			<td style="font-weight: 600;" class="align-middle text-left text-sm"><?php echo $row['user']?> - <?php echo $row['lokasi']?> <small class="text-sm">/ order on <?php echo $row['tgl_pesan'] ?></small></td>
		    			<td class="align-middle text-right text-sm"><?php echo $row['nm_status'] ?></td>
		    		</tr>
		    		<?php } ?>
	    		</tbody>
	    	</table>
	    </div>
    </div>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
