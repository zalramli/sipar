<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="frontend/templates/css/bootstrap.min.css" >
    <link href="backend/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="frontend/templates/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/templates/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/templates/css/animate.css">
    <link rel="stylesheet" href="frontend/templates/css/baguetteBox.min.css">
    <link rel="stylesheet" href="frontend/templates/css/flexslider.css" type="text/css" media="screen" />
    <link href="frontend/templates/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="custom.css" media="screen">
    <title>Visit-in Jmber</title>
  </head>
  <body>
    
    <!-- Navbar -->
    <div class="jarak-nav"> 
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <a class="navbar-brand ml-5" href="index.php">
        <img src="asset/img/logo.png" width="140" height="50" class="d-inline-block align-top" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-5">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?halaman=wisata_alam">Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?halaman=event">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?halaman=kuliner_cafe">Kuliner</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?halaman=cindramata">Cindramata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?halaman=paket_wisata">Paket Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?halaman=bantuan">Bantuan</a>
          </li>
        </ul>
      </div>
    </nav>
    </div>
    <!-- Tutup Navbar -->
    <a onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></a>
    <?php if(!isset($_GET['halaman'])){
    ?>
    <!-- Slider Image OWl -->
    <div id="main" role="main" class="jarak-section">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="asset/img/slider/1.jpg" />
            </li>
            <li>
              <img src="asset/img/slider/2.jpg" />
            </li>
            <li>
              <img src="asset/img/slider/3.jpg" />
            </li>
          </ul>
        </div>
      </section>
    </div>
    <!-- Tutup Slider -->
    <!-- Section Tentang -->
    <section class=jarak-content">
      <div class="container">
        <div class="judul">
          <h2 id="sr">Tentang Jember</h2>
        </div>
        <div class="row">
          <div id="sr" class="col-md-4 text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, praesentium velit facere aliquam similique, dolore doloribus, hic incidunt quia id placeat suscipit magnam dolor delectus! Totam dicta veritatis vel explicabo.</p>
          </div>
          <div id="sr" class="col-md-4 text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium molestiae quis modi debitis minus iusto itaque, dolor voluptas quidem molestias, sed voluptate nihil maxime, exercitationem illum. Sapiente incidunt ullam repudiandae!</p>
            
          </div>
          <div id="sr" class="col-md-4 text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium molestiae quis modi debitis minus iusto itaque, dolor voluptas quidem molestias, sed voluptate nihil maxime, exercitationem illum. Sapiente incidunt ullam repudiandae!</p>
            
          </div>
        </div>
      </div>
    </section>
    <!-- Tutup Section tentang -->
    <!-- Destinasi Pilihan -->
    <section class="gallery-block destinasi-wisata jarak-content">
      <div class="container">
        <div class="judul">
          <h2 id="sr">Destinasi Wisata</h2>
        </div>
        <div class="row">
          <?php
          $koneksi3 = mysqli_connect("localhost","root","","db_wisata");
          $query = mysqli_query($koneksi3,"SELECT wisata.nama,wisata.lokasi,wisata.gambar_profil,wisata.id_wisata,kategori_wisata.nama_kategori,wisata.deskripsi, ROUND(AVG(rating_wisata.rating)) AS ratings FROM wisata  JOIN kategori_wisata ON wisata.id_kategoriWisata=kategori_wisata.id_kategoriWisata LEFT JOIN rating_wisata ON wisata.id_wisata = rating_wisata.id_wisata GROUP BY wisata.id_wisata HAVING ROUND(AVG(rating_wisata.rating)) <= 5 limit 9");
          foreach ($query as $data) {
          ?>
          <div class="col-md-6 col-lg-4">
            <a href="?halaman=wisata_detail&id=<?php echo $data['id_wisata'] ?>"">
              <div id="sr" class="card border-0 transform-on-hover">
                <img src="asset/img/gprofil_wisata/<?php echo $data['gambar_profil'] ?>" alt="Card Image" class="img-wisatapilihan">
                <div class="card-body">
                  <h6 style="text-align: center;" class="mb-3"><a href="?halaman=wisata_detail&id=<?php echo $data['id_wisata'] ?>""><?php echo $data['nama'] ?></a></h6>
                  <p class="text-muted card-text"><?php echo substr($data['deskripsi'],0,70) ?></p>
                  <div class="float-right mt-2">
                    <a style="color:#D5347D" href="?halaman=wisata_detail&id=<?php echo $data['id_wisata'] ?>"">Read More <i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- tutup destinasi -->
    <section class="gallery-block compact-gallery jarak-content">
      <div class="container">
        <div class="judul">
          <h2 id="sr">Kuliner Khas Jember</h2>
        </div>
        <div class="transisi-galery">
          <div class="row no-gutters">
            <?php 
            $query2 = mysqli_query($koneksi3,"SELECT tempat_kuliner.nama,tempat_kuliner.lokasi,tempat_kuliner.gambar_profil,tempat_kuliner.id_tempat,kategori_kuliner.nama_kategori,tempat_kuliner.deskripsi, ROUND(AVG(rating_kuliner.rating)) AS ratings FROM tempat_kuliner JOIN kategori_kuliner ON tempat_kuliner.id_kategoriKuliner=kategori_kuliner.id_kategoriKuliner LEFT JOIN rating_kuliner ON tempat_kuliner.id_tempat = rating_kuliner.id_tempat GROUP BY tempat_kuliner.id_tempat HAVING ROUND(AVG(rating_kuliner.rating)) <= 5 limit 9");
            foreach ($query2 as $data2) {
             ?>
            <div id="sr" class="col-md-6 col-lg-4 item zoom-on-hover">
              <a class="lightbox" href="img/image1.jpg">
                <img class="img-fluid image" src="asset/img/gprofil_kuliner/<?php echo $data2['gambar_profil'] ?>">
                <span class="description">
                  <span class="description-heading"><?php echo $data2['nama'] ?></span>
                  <span class="description-body"><?php echo substr($data2['deskripsi'],0,100) ?></span>
                </span>
              </a>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <section class="paket-wisata jarak-content">
      <div class="container">
        <div class="judul">
          <h2 id="sr">Paket Wisata</h2>
        </div>
        <div class="transisi-galery">
          <?php   
            $paket_wisata = mysqli_query($koneksi3,"SELECT * FROM paket_wisata");
            foreach ($paket_wisata as $key_paket) {
           ?>
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div id="sr" class="card border-0 transform-on-hover">
                <a class="lightbox" href="img/image1.jpg">
                  <div class="foto-paket">
                    <img src="img/image1.jpg" alt="Card Image" class="card-img-top">
                  </div>
                </a>
                <div class="card-body">
                  <h6><a href="#"><?php echo $key_paket['nama'] ?></a></h6>
                  <span class="text-muted card-text ">Mulai dari </span>
                  <span class="float-right"><?php echo $key_paket['harga']; ?></span>
                </div>
                <div class="card-footer text-center text-white">
                  <a href="asd" class="book-now btn-block">Booking Detail</a>
                </div>
              </div>
            </div>
          </div>
        <?php   } ?>
          <div class="container">
            <div class="row">
              <div class="ml-auto mt-3">
                <a href="?halaman=paket_wisata">Paket Wisata Detail <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php } ?>
    <?php
    include "koneksi/koneksi.php";
    error_reporting(0);
    if($_GET['halaman']){
    include 'frontend/'.$_GET['halaman'].'.php';
    include 'frontend/wisata/'.$_GET['halaman'].'.php';
    include 'frontend/kuliner/'.$_GET['halaman'].'.php';
    }
    ?>
    <!-- footer -->
    <footer>
      <div class="container text-center text-md-left">
        <div class="row">
          <div class="col-md-3 mx-auto">
            <h6 class="text-white">COMPANY</h6>
            <hr class="d-inline-block">
            <p class="text-footer">Politeknik Negeri Jember adalah Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro nisi molestiae accusamus laudantium!</p>
          </div>
          <div class="col-md-3 mx-auto">
            <h6 class="text-white">TEAM</h6>
            <hr class="d-inline-block">
            <p>Iyek</p>
            <p>Iyek</p>
            <p>Iyek</p>
            <p>Iyek</p>
          </div>
          <div class="col-md-3 mx-auto">
            <h6 class="text-white">CONTACT</h6>
            <hr class="d-inline-block">
            <p><i class="fa fa-home mr-3"></i> Politeknik negeri jember</p>
            <p><i class="fa fa-envelope mr-3"></i> ali_iyek@gmail.com</p>
            <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <div class="col-md-3 mx-auto">
            <h6 class="text-white">PENGUNJUNG</h6>
            <hr class="d-inline-block">
          </div>
        </div>
      </div>
      <div class="sosmed">
        <div class="text-center text-white">
          <h6 class="pt-3">@POLIJE 2018</h6>
        </div>
      </div>
    </footer>
    <!-- tutup footer -->
    <script src="frontend/templates/js/jquery-3.2.1.slim.min.js"></script>
    <!-- <script src="frontend/templates/js/umd/popper.min.js"></script> -->
    <script src="frontend/templates/js/bootstrap.min.js"></script>
    <script src="frontend/templates/js/jquery.min.js"></script>
    <script src="frontend/templates/js/owl.carousel.min.js"></script>
    <script src="frontend/templates/js/baguetteBox.min.js"></script>
    <script src="frontend/templates/js/scrollreveal.js"></script>
    <script src="frontend/templates/js/jquery.flexslider.js"></script>
    <script>
    $(document).ready()
    $(window).load(function() {
    $('.flexslider').flexslider({
    animation: "slide"
    });
    });
    </script>
    <!--     <script>
    var sr = ScrollReveal({
    });
    sr.reveal('#sr', {
    duration: 200
    });
    </script> -->
    <script>
    baguetteBox.run('.transisi-galery');
    </script>
    <script>
    $(document).ready(function() {
    var owldua = $("#dua");
    var owltgl = $("#tgl");
    owldua.owlCarousel({
    margin:20,
    nav:false,
    dots:true,
    loop:true,
    responsive:{
    0:{
    items:1
    },
    400:{
    items:2
    },
    700:{
    items:3
    },
    1000:{
    items:4
    }
    }
    });
    owltgl.owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    responsiveClass:true,
    responsive:{
    0:{
    items:2,
    nav:true
    },
    600:{
    items:3,
    nav:true
    },
    1000:{
    items:5,
    nav:true,
    loop:false
    }
    }
    });
    });
    </script>
    <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
    if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250)   {
    document.getElementById("myBtn").style.display = "block";
    } else {
    document.getElementById("myBtn").style.display = "none";
    }
    }
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    currentYOffset = self.pageYOffset;
    initYOffset = currentYOffset;
    var intervalId = setInterval(function(){
    currentYOffset -= initYOffset*0.1 ;
    document.body.scrollTop = currentYOffset ;
    document.documentElement.scrollTop = currentYOffset;
    if(self.pageYOffset == 0){
    clearInterval(intervalId);
    }
    }, 30);
    }
    </script>
    
  </body>
</html>