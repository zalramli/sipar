<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="frontend/templates/css/bootstrap.min.css" >

    <link rel="stylesheet" href="frontend/templates/css/style.css" media="screen">
    <link rel="stylesheet" href="frontend/templates/css/cardslider.css" media="screen">
    <link href="backend/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="frontend/templates/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/templates/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/templates/css/animate.css">

    <title>Pariwisata</title>
  </head>
  <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-custom">
          <div class="container">
          <a class="navbar-brand" href="#">
            <img src="asset/img/logo.png" width="140" height="50" class="d-inline-block align-top" alt="">
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Wisata
            </a>
            <div class="dropdown-menu cust-drop" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Alam</a>
              <a class="dropdown-item" href="#">Buatan</a>
              <a class="dropdown-item" href="#">Religi</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Event</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kuliner
            </a>
            <div class="dropdown-menu cust-drop" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="?halaman=kuliner">Cafe</a>
              <a class="dropdown-item" href="#">Warung</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?halaman=kuliner">Cindramata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?halaman=kuliner">Paket Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bantuan</a>
          </li>

          <li class="mx-5">
            <a href="login.php" class=""><button class="btn btn-dark">Login</button> </a>
          </li>
        </ul>
      </div>
      </div>
    </nav><br><br><br>

    <a onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></a>

    <?php if(!isset($_GET['halaman'])){
      ?>
    <!-- Caraousel -->
    <style type="text/css">
      .#satu .item img{
       width: 100%  !important;
       height: 100% !important;
      }
    </style>
    <div class="owl-carousel owl-theme" id="satu">
        <div class="item"><img src="asset/img/slider/1.jpg" alt=""></div>
        <div class="item"><img src="asset/img/slider/2.jpg" alt=""></div>
        <div class="item"><img src="asset/img/slider/3.jpg" alt=""></div>
    </div>


    <section id="about" class="about pt-3 pb-5">
      <div class="container">
        <div class="row mb-4 pt-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur vel fugit blanditiis delectus illo accusantium dolorum, voluptas incidunt sit. Officiis libero iste quae possimus totam sequi, repellendus consequatur animi distinctio.</p>
          </div>
          <div class="col-md-4 text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur vel fugit blanditiis delectus illo accusantium dolorum, voluptas incidunt sit. Officiis libero iste quae possimus totam sequi, repellendus consequatur animi distinctio.</p>
          </div>
          <div class="col-md-4 text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur vel fugit blanditiis delectus illo accusantium dolorum, voluptas incidunt sit. Officiis libero iste quae possimus totam sequi, repellendus consequatur animi distinctio.</p>
          </div>
        </div>
      </div>
    </section>

    <section style="background: linear-gradient(10deg,white,#0984e3);">
    <div class="container">
      <div class="row mb-4 pt-4">
          <div class="col text-center">
            <h2 class="putih">Destinasi Wisata Pilihan</h2>
          </div>
        </div>
    <div class="owl-carousel owl-theme" id="dua">

        <div class="item">
          <div class="card">
                <div class="card-img-top card-img-top-250">
                  <img class="img-fluid" src="asset/img/img (131).jpg" alt="Carousel 1">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Bunga</h3>
                  <hr>
                  <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.
                  </div><br>
                  <a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i class="fa fa-angle-double-right"></i></h5></a>
                </div>
              </div>

        </div>
        <div class="item">
          <div class="card">
                <div class="card-img-top card-img-top-250">
                  <img class="img-fluid" src="asset/img/img (131).jpg" alt="Carousel 1">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Bunga</h3>
                  <hr>
                  <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.
                  </div><br>
                  <a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i class="fa fa-angle-double-right"></i></h5></a>
                </div>
              </div>
        </div>
        <div class="item">
          <div class="card">
                <div class="card-img-top card-img-top-250">
                  <img class="img-fluid" src="asset/img/img (131).jpg" alt="Carousel 1">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Bunga</h3>
                  <hr>
                  <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.
                  </div><br>
                  <a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i class="fa fa-angle-double-right"></i></h5></a>
                </div>
              </div>
        </div>
        <div class="item">
          <div class="card">
                <div class="card-img-top card-img-top-250">
                  <img class="img-fluid" src="asset/img/img (131).jpg" alt="Carousel 1">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Bunga</h3>
                  <hr>
                  <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.
                  </div><br>
                  <a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i class="fa fa-angle-double-right"></i></h5></a>
                </div>
              </div>
        </div>
        <div class="item">
          <div class="card">
                <div class="card-img-top card-img-top-250">
                  <img class="img-fluid" src="asset/img/img (131).jpg" alt="Carousel 1">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Bunga</h3>
                  <hr>
                  <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.
                  </div><br>
                  <a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i class="fa fa-angle-double-right"></i></h5></a>
                </div>
              </div>
        </div>
        <div class="item">
          <div class="card">
                <div class="card-img-top card-img-top-250">
                  <img class="img-fluid" src="asset/img/img (131).jpg" alt="Carousel 1">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Bunga</h3>
                  <hr>
                  <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.
                  </div><br>
                  <a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i class="fa fa-angle-double-right"></i></h5></a>
                </div>
              </div>
        </div> 
</div>
</div>
</section>

            <section class="container-fluid p-t-3 pb-5">
              <div class="row mb-4 pt-4">
                <div class="col text-center">
                  <h2>Kuliner Khas Jember</h2>
                </div>
              </div>
          <div class="d-flex flex-row flex-wrap justify-content-center">
              <div class="d-flex flex-column">
                  <img src="asset/img/khas_jember/1.jpeg" alt="250x200" class="img-fluid">
                  
                  <img src="asset/img/khas_jember/2.jpeg" alt="350x500" class="img-fluid">
              </div>
              
              <div class="d-flex flex-column">
                  <img src="asset/img/khas_jember/3.jpeg" alt="200x350" class="img-fluid">
                  
                  <img src="asset/img/khas_jember/4.jpeg" alt="250x200">
              </div>
              
              <div class="d-flex flex-column">
                  <img src="asset/img/khas_jember/5.jpeg" class="img-fluid scale mb-2">
                  <img src="asset/img/khas_jember/6.jpeg"  class="img-fluid">
              </div>
              
              <div class="d-flex flex-column">
                  <img src="asset/img/khas_jember/7.jpeg" class="img-fluid m-1 p-1">
                    <img src="asset/img/khas_jember/8.jpeg" class="img-fluid image m-1 p-1">
              </div>
              <div class="d-flex flex-column">
                  <img src="asset/img/khas_jember/1.jpeg" alt="250x200" class="img-fluid">
                  
                  <img src="asset/img/khas_jember/2.jpeg" alt="350x500" class="img-fluid">
              </div>
              
          </div>
        </div>
            </section>

            <!--   <section>
              <div class="footer-atas">
                  <div class="container">
                    <div class="row py-4">
                      <div class="col-md-12 text-center">
                      <h2 class="putih">FORM LOGIN</h2>
                      <form>
                        <div class="form-row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Isikan Username">
                          </div>
                          <div class="col">
                            <input type="password" class="form-control" placeholder="Isikan Password">
                          </div>
                        </div><br>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </form>
                    </div>

                    </div>

                  </div>
                </div>
              </section> -->
<?php } ?>

                    <?php
                    error_reporting(0);
                    if($_GET['halaman']){
                    include 'frontend/'.$_GET['halaman'].'.php';
                    }
                    ?>





        <footer class="page-footer font-small indigo">
          <div class="container text-center text-md-left">
            <div class="row">
              <div class="col-md-3 mx-auto">
                <h6 class="font-weight-bold text-uppercase mt-3 mb-4 putih">Company</h6>
                <hr class="mb-4 mt-0 d-inline-block" style="background-color: white; width: 130px">
                <p>Politeknik Negeri Jember sebagai perguruan tinggi vokasional mempunyai amanah untuk menyiapkan SDM yang  terampil, unggul, cerdas.</p>
              </div>
              <div class="col-md-3 mx-auto">
                <h6 class="font-weight-bold text-uppercase mt-3 mb-4 putih">Team</h6>
                <hr class="mb-4 mt-0 d-inline-block" style="background-color: white; width: 130px">
                <p>
                  <a class="putih">Owl</a>
                </p>
                <p>
                  <a class="putih">Monkey</a>
                </p>
                <p>
                  <a class="putih">Snake</a>
                </p>
                <p>
                  <a class="putih">Lion</a>
                </p>
              </div>
              <!-- Grid column -->
              <div class="col-md-3 mx-auto">
                <h6 class="font-weight-bold text-uppercase mt-3 mb-4 putih">Contact</h6>
                <hr class="mb-4 mt-0 d-inline-block" style="background-color: white; width: 130px">
                <p>
                <i class="fa fa-home mr-3"></i> Politeknik negeri jember</p>
                <p>
                <i class="fa fa-envelope mr-3"></i> ali_iyek@gmail.com</p>
                <p>
                <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                <p>
                <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
              </div>
              <?php 
              include 'koneksi/koneksi.php';
              $ip = $_SERVER['REMOTE_ADDR'];
              $tgl = date('Ymd');
              $waktu = time();

               $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
               $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
               $waktu   = time(); //
                
               // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini
               $s = mysqli_query($koneksi,"SELECT * FROM statistik_pengunjung WHERE ip='$ip' AND tanggal='$tanggal'");
               
               // Kalau belum ada, simpan data user tersebut ke database
               if(mysqli_num_rows($s) == 0){
                   mysqli_query($koneksi,"INSERT INTO statistik_pengunjung(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
               }
               // Jika sudah ada, update
               else{
                   mysqli_query($koneksi,"UPDATE statistik_pengunjung SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
               }
               
               $pengunjung       = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM statistik_pengunjung WHERE tanggal='$tanggal' GROUP BY ip")); // Hitung jumlah pengunjung
               $totalpengunjung  = mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(hits) AS total FROM statistik_pengunjung WHERE tanggal='$tanggal'")); // hitung total pengunjung
               $bataswaktu       = time() - 300;
               $pengunjungonline = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM statistik_pengunjung WHERE online > '$bataswaktu'")); // hitung pengunjung online
              ?>
              <div class="col-md-3 mx-auto">
                <h6 class="font-weight-bold text-uppercase mt-3 mb-4 putih">Pengunjung</h6>
                <hr class="mb-4 mt-0 d-inline-block" style="background-color: white; width: 130px">
                <p style="color: white">Pengunjung Hari Ini : <?php echo $pengunjung ?></p>
                <p style="color: white">Total  : <?php echo $totalpengunjung['total'] ?></p>
                <p style="color: white">Pengunjung Online  : <?php echo $pengunjungonline ?></p>
                
              </div>
            </div>
            <!-- Grid row -->
          </div>
          <!-- Footer Links -->
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3 putih">© 2018 Copyright
          </div>
          <!-- Copyright -->
        </footer>
  <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="frontend/templates/js/jquery-3.2.1.slim.min.js"></script>
    <script src="frontend/templates/js/umd/popper.min.js"></script>
    <script src="frontend/templates/js/bootstrap.min.js"></script>
    <script src="frontend/templates/js/jquery.min.js"></script> 
    <script src="frontend/templates/js/owl.carousel.min.js"></script>
    <script>
      $(document).ready(function(){
        var owl = $('#satu');
        owl.owlCarousel({
          autoplay: true,
        autoplayTimeout: 7000,
          loop:true,
          animateIn: 'fadeIn',
          dots:false,
          items:1
        })
      })
    </script>
    <script>
    $(document).ready(function() {
      var owl = $("#dua");
      owl.owlCarousel({
        rtl:true,
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2 
            },
            1000:{
                items:4
            }
        }
      });
    });


    </script>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
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

