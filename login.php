<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="backend/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="font-awesome/fontawesome-all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="backend/template/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-light">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputText" class="form-control" placeholder="Masukan Username" required="required" autofocus="autofocus">
                <label for="inputText">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="backend.php">Login</a>
            <a class="btn btn-danger btn-block" href="index.php"><i class="fa fa-undo-alt"></i> Kembali</a>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="backend/template/vendor/jquery/jquery.min.js"></script>
    <script src="backend/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="backend/template/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>
</html>
<!-- 
<?php
if (isset($_POST['simpan'])) {
  $nama = ucwords($_POST['nama']); // awal kata huruf kapital
  $kategori = $_POST['kategori'];
  $lokasi = ucwords($_POST['lokasi']);
  $deskripsi = $_POST['deskripsi'];

  //gambar profil
  $ekstensi_diperbolehkan = array('png','jpg');
  $gambar_profil = $_FILES['gprofil']['name'];
  $x = explode('.', $gambar_profil);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['gprofil']['size'];
  $file_tmp = $_FILES['gprofil']['tmp_name'];  

  //gambar_detail
   $total = count($_FILES['upload']['name']);

    // Loop through each file
    for($i=0; $i<$total; $i++) {
      //Get the temp file path
      $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

      //Make sure we have a filepath
      if ($tmpFilePath != ""){
        //Setup our new file path
        $filename[] = $_FILES['upload']['name'][$i];
        $newFilePath = "asset/img/gdetail_wisata/".$_FILES['upload']['name'][$i];
        //Upload the file into the temp dir
        move_uploaded_file($tmpFilePath, $newFilePath);
      }
    }
    $images = implode(",",$filename);
 
      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){      
          move_uploaded_file($file_tmp, "asset/img/gprofil_wisata/".$gambar_profil);
          $query = mysqli_query($koneksi,"INSERT INTO wisata (id_kategoriWisata,nama,lokasi,gambar_profil,detail_gambar,deskripsi) VALUES('$kategori','$nama','$lokasi','$gambar_profil','$images','$deskripsi')");
          if($query){
          echo "<script>window.location = 'backend.php?/=wisata_tampil'</script>";
          }else{
            echo 'GAGAL MENGUPLOAD GAMBAR';
          }
        }else{
          echo 'UKURAN FILE TERLALU BESAR';
        }
      }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
      }

    }
  ?> -->