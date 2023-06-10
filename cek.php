<?php 
	include'db.php';
	session_start();

	$id = $_GET['user'];
	$record = $_GET['rec'];


	$delete = mysqli_query($conn, "DELETE FROM tb_rec_pesan WHERE id_user='".$id."' AND id_rec='".$rec."'");

	if($delete){
		echo '<script>alert("data sudah masuk")</script>';
		echo '<script>window.location="index.php?user='.$id.'"</script>';
	}else{
		echo '<script>alert("maaf data blm masuk")</script>';
	}
 ?>