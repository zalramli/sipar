<?php
if (isset($_POST['simpan'])) {
$ide = $_POST['ide'];
$daris = $_POST['daris'];
$sampai = $_POST['sampai'];
$query = mysqli_query($koneksi,"INSERT INTO jadwal_transportasi VALUES ('','$ide','$daris','$sampai')");
 if($query){
        echo "<script>window.location = 'backend.php?/=jadwal_transportasiTampil'</script>";
        }
}

?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Input Jadwal Transportasi</li>
</ol>  
<a href="?/=jadwal_transportasiTampil"><button class="btn btn-secondary"><i class="fa fa-arrow-circle-left"> Kembali</i></button></a>

<form action="" method="post"><br>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputText"><b>Nama Kendaraan</b></label>
      <input type="text" name="ide" class="form-control" id="inputText" placeholder="Masukan nama kendaraan">
    </div>
    <div class="form-group col-md-4">
      <label for="inputText"><b>Dari</b></label>
      <input type="text" name="daris" class="form-control" id="inputText" placeholder="">
    </div>
        <div class="form-group col-md-4">
      <label for="inputText"><b>sampai</b></label>
      <input type="text" name="sampai" class="form-control" id="inputText" placeholder="">
    </div>
  </div>
    
 
  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</form>





    <script src="backend/template/js/jquery-1.12.4.min.js"></script>
    <script src="backend/template/js/bootstrap.min.js"></script>
    <script src="backend/template/js/bootstrap-imageupload.js"></script>
