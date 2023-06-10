<?php 
	include 'db.php';
		if(isset($_POST['masuk'])){

			$cek = mysqli_query($conn, "SELECT * FROM tb_user
				WHERE email = '".$_POST['user']."' AND password = '".$_POST['pass']."' ");			

			if(mysqli_num_rows($cek) > 0){
				$a = mysqli_fetch_object($cek);
					session_start();
					$_SESSION['status-login']=true;
					echo '<script>window.location="index.php?user='.$a->id_user.'"</script>';
			}else{
				echo '<script>alert("user atau pass salah")</script>';
				echo '<script>window.location="login.php"</script>';
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

	<title>Login - UNS Food</title>
</head>
<body class="bg-light">
	
	
	<div class="container my-5">
		<img class="logo align-middle justify-content-center" src="https://i.ibb.co/mHFWQQz/logo-uns-food.jpg">
		<br>
		<div class="row d-flex justify-content-center">
			<div class="col-sm-12 col-lg-6">
				<div class="card card-body shadow-sm">
					<center class="mb-4">
						<h4>Login</h4>
					</center>
					<div class="row d-flex justify-content-center">
						<div class="col-sm-12 col-lg-7 mb-4">
							<form method="post" action="">
								<input type="text" name="user" class="form-control mb-4" placeholder="Email">
								<input type="password" name="pass" class="form-control mb-4" placeholder="Password">
								<input type="submit" value="login" name="masuk" style="background: linear-gradient(104.49deg, #0154A4 8.26%, #689CCE 104.79%);" class="btn text-white btn-block mb-3">
							</form>
							
							<a style="text-decoration: none;" href="signup.php" class="float-right">Belum punya akun?</a>
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
