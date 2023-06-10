<?php 
	include'db.php';
	$id = $_GET['user'];

	$delete = mysqli_query($conn, "DELETE FROM tb_rec_pesan WHERE id_user='".$id."'");
	
	if($delete){
		session_start();
		$_SESSION['status-login'] = false;
		echo '<script>window.location="login.php"</script>';
	}else{
		echo '<script>alert("maaf data blm masuk")</script>';
		echo '<script>window.location="asda.php?user='.$id.'"</script>';
	}


 ?>