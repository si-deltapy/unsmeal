<?php 
	include'db.php';
	session_start();

	$id = $_GET['user'];
	$menu = $_GET['menu'];

	$delete = mysqli_query($conn, "DELETE FROM tb_rec_pesan WHERE id_user='".$id."'");

	if($delete){
		echo '<script>window.location="menu.php?user='.$id.'"</script>';
	}else{
		echo '<script>alert("maaf data blm masuk")</script>';
		echo '<script>window.location="menu.php?user='.$id.'"</script>';
	}
 ?>