<?php 
	include'db.php';
	session_start();

	$id = $_GET['id'];

	$cek = mysqli_query($conn, "UPDATE tb_pemesanan set status_pembayaran=1 where id_pesanan='".$id."'");

	if($cek){
		echo '<script>window.location="pay-ad.php"</script>';
	}else{
		echo '<script>alert("maaf data blm masuk")</script>';
		echo '<script>window.location="pay-ad.php"</script>';
	}
 ?>