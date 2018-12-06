<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM wisata JOIN kategori_wisata ON wisata.id_kategoriWisata = kategori_wisata.id_kategoriWisata WHERE id_wisata='$id'");
$data = mysqli_fetch_array($query);
if (isset($_POST['simpan'])) {
$rating = $_POST['rate'];
$query2 = mysqli_query($koneksi,"INSERT INTO rating_wisata VALUES ('','$id','$rating')");
if ($query2) {
echo "<script>window.location = '?halaman=wisata_detail&id=$id'</script>";
}
}
?>
<div class="container-fluid jarak-section">
  <div class="row">
    <div class="col-md-12">
      <div class="container-gambar">
        <img src="1.jpg" class="img-fluid" alt="Responsive image">
        <div class="text-block">
          <h4>Cafe Kalong</h4>
          <p>What a beautiful sunrise</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid jarak-section">
  <div class="row">
    <div class="col-md-12">
      <a style="color:gray;" href="index.php">Home</a> <b> > </b> <a style="color: gray" href="?halaman=wisata_<?php echo strtolower($data['nama_kategori']) ?>">Wisata <?php echo $data['nama_kategori'] ?></a> <b> > </b> <a style="color: black" href=""><?php echo $data['nama'] ?></a>
    </div>
  </div>
</div>
<div class="container-fluid jarak-event">
  <div class="row">
    <div class="col-md-8">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" role="tab" data-toggle="tab" href="#home">Detail</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" role="tab" data-toggle="tab" href="#akomodasi">Akomodasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" role="tab" data-toggle="tab" href="#rating">Review & Rating</a>
        </li>
      </ul>
      <div class="tab-content">
        <div role="tab-panel" class="tab-pane active" id="home">
          <p class="isi-artikel pt-3 pr-3 pl-3 pb-3"><?php echo $data['deskripsi'] ?></p>
        </div>
        <div role="tab-panel" class="tab-pane" id="akomodasi">
          <div class="container">
            <div class="row">
                <div class="col-md-6 form-group">
              <label for="inputNama"></label>
              <select name="" id="" class="form-control">
                <option value="">Terminal</option>
                <option value="">Stasiun</option>
                <option value="">Bandara</option>
              </select>
            </div>
            </div>
          </div>
          <?php
          $query_akomodasi = mysqli_query($koneksi,"SELECT * FROM akomodasi WHERE id_wisata='$id'");
          foreach ($query_akomodasi as $data2) {
          ?>
          <p class="pt-3 pr-3 pl-3 pb-3"><?php echo $data2['titik_awal'] ?></p>
        <?php } ?>
        </div>
        <div role="tab-panel" class="tab-pane" id="rating">
          <div class="isi-artikel pt-3 pr-3 pl-3 pb-3">
            <form action="" method="post">
              <?php 
                  $query_review = mysqli_query($koneksi,"SELECT * FROM rating_wisata WHERE id_wisata='$id'");
                  $jumlah_row = mysqli_num_rows($query_review); 
                  echo "<h5>Telah di review oleh $jumlah_row Orang</h5>"; 
                  ?>
              <div class="rate">
                <div class="star">
                  <input id="rate1-star5" type="radio" name="rate" value="5" />
                  <label for="rate1-star5" title="Excellent">5</label>
                  <input id="rate1-star4" type="radio" name="rate" value="4" />
                  <label for="rate1-star4" title="Good">4</label>
                  <input id="rate1-star3" type="radio" name="rate" value="3" />
                  <label for="rate1-star3" title="Satisfactory">3</label>
                  <input id="rate1-star2" type="radio" name="rate" value="2" />
                  <label for="rate1-star2" title="Bad">2</label>
                  <input id="rate1-star1" type="radio" name="rate" value="1" />
                  <label for="rate1-star1" title="Very bad">1</label>
                </div>
              </div>
              <div class="form-group">
                <label for="inputnama">Nama*</label>
                <input type="text" class="form-control" name="nama" id="inputnama" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="inputemail">Email*</label>
                <input type="email" class="form-control" name="email" id="inputemail" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="textarea">Pesan*</label>
                <textarea class="form-control" id="textarea" name="pesan" rows="6"></textarea>
              </div>
              <button type="submit" name="simpan" class="btn btn-secondary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-4 pt-2">
      <h4 class="text-center">Gallery</h4>
      <div class="gallery-detail">
        <div class="transisi-galery">
          <div class="row">
            <?php
            $images=$data['detail_gambar'];
            $temp = explode(',',$images);
            for($i=0;$i<count($temp);$i++)
            {
            echo '
            <div class="col-md-4 text-center">
              <a href="asset/img/gdetail_wisata/'.$temp[$i].'"><img class="img-fluid image" src="asset/img/gdetail_wisata/'.$temp[$i].'"></a>
            </div>
            ';
            }
            ?>
          </div>
          <div class="row">
            <div class="col-md-4">
              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>