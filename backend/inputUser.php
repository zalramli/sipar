<?php 
if (isset($_POST['simpan'])) {
$user1 = $_POST['user1'];
$psw = password_hash($_POST['psw'],PASSWORD_DEFAULT);
$query = mysqli_query($koneksi,"INSERT INTO user VALUES ('','$user1','$psw')");
 if($query){
        echo "<script>window.location = 'backend.php?/=userTampil'</script>";
        }
}





 ?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Input User</li>
</ol>  
<a href="?/=userTampil"><button class="btn btn-success"><i class="fa fa-arrow-circle-left"> Kembali</i></button></a>

<form action="" method="post"><br>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputText"><b>Username</b></label>
      <input type="text" name="user1" class="form-control" id="inputText" placeholder="masukan nama kendaraan" required >
    </div>
    <div class="form-group col-md-4">
      <label for="inputText"><b>Password</b></label>
      <input type="password" name="psw" class="form-control" id="inputText" placeholder="" required >
    </div>
  </div>
    
 
  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</form>

