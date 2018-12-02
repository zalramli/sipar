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
    <link rel="stylesheet" href="custom.css" media="screen">
	<title>Visit-in Jmber</title>
</head>
<body>
  
	<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
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
        <a class="nav-link" href="?halaman=wisata">Wisata</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?halaman=event">Event</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?halaman=kuliner">Kuliner</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?halaman">Transportasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?halaman=bantuan">Bantuan</a>
      </li>      
    </ul>
  </div>
</nav>

<!-- Tutup Navbar -->
    <a onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></a>

<?php if(!isset($_GET['halaman'])){
?>
<!-- Slider Image OWl -->
      <div id="main" role="main">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="asset/img/slider/1.jpg" />
              <p class="flex-caption">Adventurer Cheesecake Brownie</p>
            </li>
            <li>
              <img src="asset/img/slider/2.jpg" />
              
              <p class="flex-caption">Adventurer Lemon</p>
            </li>
            <li>
              <img src="asset/img/slider/3.jpg" />
              
              <p class="flex-caption">Adventurer Donut</p>
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
				<div class="card">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, praesentium velit facere aliquam similique, dolore doloribus, hic incidunt quia id placeat suscipit magnam dolor delectus! Totam dicta veritatis vel explicabo.</p>    
        </div>
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
    <div class="transisi-galery">
          <div class="row">
              <div class="col-md-6 col-lg-4">
                  <div id="sr" class="card border-0 transform-on-hover">
                    <a class="lightbox" href="img/image1.jpg">
                      <img src="img/image1.jpg" alt="Card Image" class="card-img-top">
                    </a>
                      <div class="card-body">
                          <h6><a href="#">Lorem Ipsum</a></h6>
                          <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <div id="sr" class="card border-0 transform-on-hover">
            <a class="lightbox" href="img/image2.jpg">
                      <img src="img/image2.jpg" alt="Card Image" class="card-img-top">
                    </a>
                      <div class="card-body">
                          <h6><a href="#">Lorem Ipsum</a></h6>
                          <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <div id="sr" class="card border-0 transform-on-hover">
                    <a class="lightbox" href="img/image3.jpg">
                      <img src="img/image3.jpg" alt="Card Image" class="card-img-top">
                    </a>
                      <div class="card-body">
                          <h6><a href="#">Lorem Ipsum</a></h6>
                          <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <div id="sr" class="card border-0 transform-on-hover">
                    <a class="lightbox" href="img/image4.jpg">
                      <img src="img/image4.jpg" alt="Card Image" class="card-img-top">
                    </a>
                      <div class="card-body">
                          <h6><a href="#">Lorem Ipsum</a></h6>
                          <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <div id="sr" class="card border-0 transform-on-hover">
                    <a class="lightbox" href="img/image5.jpg">
                      <img src="img/image5.jpg" alt="Card Image" class="card-img-top">
                    </a>
                      <div class="card-body">
                          <h6><a href="#">Lorem Ipsum</a></h6>
                          <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <div id="sr" class="card border-0 transform-on-hover">
                    <a class="lightbox" href="img/image6.jpg">
                      <img src="img/image6.jpg" alt="Card Image" class="card-img-top">
                    </a>
                      <div class="card-body">
                          <h6><a href="#">Lorem Ipsum</a></h6>
                          <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>
<!-- tutup destinasi -->
<div class="cust1">  
  <div class="jumbotron">     
    <h2 class="text-center"></h2>
    <div class="container text-center">
    <div class="row">
    <div class="col-lg-4">
      <div class="parallax-img">
      <img src="parallax/gojek.png" alt="">
    </div>
    </div>
    <div class="col-lg-4">
      <div class="parallax-img">
      <img src="parallax/gojek.png" alt="">
    </div>
    </div>
    <div class="col-lg-4">
      <div class="parallax-img">
      <img src="parallax/gojek.png" alt="">
    </div>
    </div>
  </div>
  </div>
</div>
</div>


<section class="gallery-block compact-gallery jarak-content">
        <div class="container">
            <div class="judul">
                <h2 id="sr">Kuliner Khas Jember</h2>
            </div>
        <div class="transisi-galery">
            <div class="row no-gutters">
                <div id="sr" class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image1.jpg">
                        <img class="img-fluid image" src="img/image1.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div id="sr" class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image2.jpg">
                        <img class="img-fluid image" src="img/image2.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div id="sr" class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image3.jpg">
                        <img class="img-fluid image" src="img/image3.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div id="sr" class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image4.jpg">
                        <img class="img-fluid image" src="img/image4.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                        </a>
                    </div>
                <div id="sr" class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image5.jpg">
                        <img class="img-fluid image" src="img/image5.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div id="sr" class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image6.jpg">
                        <img class="img-fluid image" src="img/image6.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div id="sr" class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image7.jpg">
                        <img class="img-fluid image" src="img/image7.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div id="sr" class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image8.jpg">
                        <img class="img-fluid image" src="img/image8.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div id="sr" class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image9.jpg">
                        <img class="img-fluid image" src="img/image9.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
            </div>
          </div>
        </div>
    </section>

<section class="gallery-block destinasi-wisata jarak-content">
      <div class="container">
          <div class="judul">
            <h2 id="sr">Paket Wisata</h2>
          </div>
    <div class="transisi-galery">
          <div class="row">
              <div class="col-md-6 col-lg">
                  <div id="sr" class="card border-0 transform-on-hover">
                    <a class="lightbox" href="img/image1.jpg">
                      <div class="foto-paket">
                      <img src="img/image1.jpg" alt="Card Image" class="card-img-top">
                      </div>
                    </a>
                      <div class="card-body">
                          <h6><a href="#">Lorem Ipsum</a></h6>
                          <p class="text-muted card-text ">Mulai dari </p>
                      </div>
                      <div class="card-footer text-center text-white">
                          <a href="asd" class="book-now btn-block">Booking Detail</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg">
                  <div id="sr" class="card border-0 transform-on-hover">
                  <a class="lightbox" href="img/image2.jpg">
                      <div class="foto-paket">
                      <img src="img/image2.jpg" alt="Card Image" class="card-img-top">
                      </div>
                    </a>
                      <div class="card-body">
                          <h6><a href="#">Lorem Ipsum</a></h6>
                          <p class="text-muted card-text">Mulai dari</p>
                      </div>
                      <div class="card-footer text-center text-white">
                          <a href="asd" class="book-now btn-block">Booking Detail</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg">
                  <div id="sr" class="card border-0 transform-on-hover">
                    <a class="lightbox" href="img/image3.jpg">
                      <div class="foto-paket">
                      <img src="img/image3.jpg" alt="Card Image" class="card-img-top">
                      </div>
                    </a>
                      <div class="card-body">
                          <h6><a href="#">Lorem Ipsum</a></h6>
                          <p class="text-muted card-text">Mulai dari</p>
                      </div>
                      <div class="card-footer text-center text-white">
                          <a href="asd" class="book-now btn-block">Booking Detail</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg">
                  <div id="sr" class="card border-0 transform-on-hover">
                    <a class="lightbox" href="img/image4.jpg">
                      <div class="foto-paket">
                      <img src="img/image4.jpg" alt="Card Image" class="card-img-top">
                      </div>
                    </a>
                      <div class="card-body">
                          <h6><a href="#">Lorem Ipsum</a></h6>
                          <p class="text-muted card-text">Mulai dari</p>
                      </div>
                      <div class="card-footer text-center text-white">
                          <a href="asd" class="book-now btn-block">Booking Detail</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="ml-auto">
                <a href="">Paket Wisata Detail <i class="fas fa-arrow-right"></i></a>
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
    <script>
      var sr = ScrollReveal({

      });
      sr.reveal('#sr', { 
        duration: 3000 
      });
    </script>
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