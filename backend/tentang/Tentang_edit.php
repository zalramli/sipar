<?php 
$id=$_GET['id'];	
$query=mysqli_query($koneksi,"SELECT * FROM tentang WHERE id_tentang='$id'");
$data=mysqli_fetch_array($query);

if (isset($_POST['update'])) {

	$tentang = $_POST['tentang'];
	$deskrip= $_POST['deskrip'];

	$query2 = mysqli_query($koneksi,"UPDATE tentang SET nama_tentang='$tentang',deskripsi='$deskrip' WHERE id_tentang='$id'");
	if($query2){
        echo "<script>window.location = 'backend.php?/=Tentang_tampil'</script>";
        }
}



  ?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Edit Tentang</li>
</ol>  
<a href="?/=Tentang_tampil"><button class="btn btn-secondary"><i class="fa fa-arrow-circle-left"> Kembali</i></button></a>

<form action="" method="post"><br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText"><b>Nama</b></label>
      <input type="text" name="tentang" class="form-control" id="inputText" value="<?=  $data['nama_tentang']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputText"><b>Tentang</b></label>
      <input type="text" name="deskrip" class="form-control" id="inputText" value="<?= $data['deskripsi']?>" placeholder="Masukan">
    </div>
  </div>
    
 
  <button type="submit" name="update" class="btn btn-primary">Update</button>
</form>

    <script src="backend/template/js/jquery-1.12.4.min.js"></script>
    <script src="backend/template/js/bootstrap.min.js"></script>
    <script src="backend/template/js/bootstrap-imageupload.js"></script>








