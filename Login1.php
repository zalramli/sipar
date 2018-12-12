<?php 

session_start();

include 'koneksi.php';
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = mysqli_query($koneksi, "SELECT password FROM user WHERE username='$username'");
	$data = mysqli_fetch_array($query);
	if (password_verify($password,$data['password'])) {
		echo "Anda Berhasil Bos";
		$_SESSION['username'] = $username;
		header("location:backend.php");
	}else{
		echo "Sing Genah Bos";
	}
	
}
// $username = $_POST['username'];
// $password = $_POST['password'];
//  $data = mysql_query($koneksi, "SELECT PASSWORD FROM user where username='$username'");
//   $cek = mysqli_num_rows($data);
//   if ($cek > 0) {
//   	$_SESSION['username'] = $username;
//   	$_SESSION['status'] = "login";

//   	# code...
//   }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="customs.css">
	 <link href="backend/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			<form method="POST" action="#">
			<div class="form_input">
			<input type="text" name="username" placeholder="masukan"/>	
			</div>
			<div class="form_input">
			<input type="password" name="password" placeholder="masukan"/>	
			</div>
			<input type="submit" value="login" name="login" class="btn-primary" class="form-control">
			</form>
			</div>
		</div>
	</div>


</body>
</html>
