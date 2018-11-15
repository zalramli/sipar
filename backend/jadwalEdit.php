<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM jadwal_transportasi WHERE id_jadwal='$id'");
$data = mysqli_fetch_array($query);

if (isset($_POST['update'])) {
    $ide = $_POST['ide'];
    $daris = $_POST['daris'];
    $sampai = $_POST['sampai'];

    $query3= mysqli_query($koneksi,"UPDATE jadwal_transportasi SET id_jadwal ='$id', nama_kendaraan ='$ide', dari='$daris', sampai='$sampai' WHERE id_jadwal ='$id'");
    if($query3){
        echo "<script>window.location = 'backend.php?/=jadwal_transportasiTampil'</script>";
        } 
  }

 ?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Edit Jadwal Transportasi</li>
</ol>  
<a href="?/=jadwal_transportasiTampil"><button class="btn btn-success"><i class="fa fa-arrow-circle-left"> Kembali</i></button></a>

<form action="" method="post"><br>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputText"><b>Nama Kendaraan</b></label>
      <input type="text" name="ide" class="form-control" id="inputText" placeholder="masukan nama kendaraan" value="<?php echo $data['nama_kendaraan']; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputText"><b>Dari</b></label>
      <input type="text" name="daris" class="form-control" id="inputText" value="<?php echo $data['dari']; ?>">
    </div>
        <div class="form-group col-md-4">
      <label for="inputText"><b>sampai</b></label>
      <input type="text" name="sampai" class="form-control" id="inputText" value="<?php echo $data['sampai']; ?>">
    </div>
  </div>
    
 
  <button type="submit" name="update" class="btn btn-primary">Update</button>
</form>





    <script src="backend/template/js/jquery-1.12.4.min.js"></script>
    <script src="backend/template/js/bootstrap.min.js"></script>
    <script src="backend/template/js/bootstrap-imageupload.js"></script>
