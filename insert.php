<?php 
	include'db.php';
	session_start();

	$id = $_GET['user'];
	$menu = $_GET['menu'];

	$cek = mysqli_query($conn, "SELECT * FROM tb_paket where id_paket='".$menu."'");
	$a = mysqli_fetch_object($cek);
	$total = 50*$a->harga;
	$insert = mysqli_query($conn, "INSERT INTO tb_rec_pesan VALUES (
			0,
			'".$menu."',
			'".$id."',
			50,
			'".$total."')");

	if($insert){
		echo '<script>window.location="order.php?user='.$id.'&menu='.$menu.'"</script>';
	}else{
		echo '<script>alert("maaf data blm masuk")</script>';
		echo '<script>window.location="menu.php?user='.$id.'"</script>';
	}
 ?>