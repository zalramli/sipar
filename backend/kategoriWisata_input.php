<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Input Wisata</li>
</ol>  
<a href="?/=wisata_tampil"><button class="btn btn-success"><i class="fa fa-arrow-circle-left"> Kembali</i></button></a>

<form action="" method="post"><br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText"><b>Nama</b></label>
      <input type="text" name="nama" class="form-control" id="inputText" value="<?php echo autogenerate('id_kategoriWisata','kategori_wisata',3,'KTW')?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputText"><b>Kategori Wisata</b></label>
      <input type="text" name="lokasi" class="form-control" id="inputText" placeholder="Masukan kategori wisata">
    </div>
  </div>
    
 
  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</form>





    <script src="backend/template/js/jquery-1.12.4.min.js"></script>
    <script src="backend/template/js/bootstrap.min.js"></script>
    <script src="backend/template/js/bootstrap-imageupload.js"></script>

   
