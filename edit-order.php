<?php 
	include'db.php';
	session_start();

	$id = $_GET['user'];
    $menu = $_GET['menu'];
	$jumlah = $_GET['jml'];

	$cek = mysqli_query($conn, "SELECT * FROM tb_paket where id_paket='".$menu."'");
	$a = mysqli_fetch_object($cek);
	$total = $jumlah*$a->harga;

	$delete = mysqli_query($conn, "UPDATE tb_rec_pesan SET jml='".$jumlah."', total='".$total."' WHERE id_user='".$id."'");

	if($delete){
		echo '<script>window.location="order.php?user='.$id.'&menu='.$menu.'"</script>';
	}else{
		echo '<script>alert("maaf data blm masuk")</script>';
		echo '<script>window.location="menu.php?user='.$id.'"</script>';
	}
 ?>