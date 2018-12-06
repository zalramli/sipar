<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Blank Page</title>

    <!-- Bootstrap core CSS-->
    <link href="backend/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="backend/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="backend/template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="backend/template/css/sb-admin.css" rel="stylesheet">
    <link href="backend/template/css/bootstrap-imageupload.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">Start Bootstrap</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="?/=dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?/=wisata_tampil">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Wisata</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?/=kuliner_tampil">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Kuliner</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?/=event_tampil">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Event</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?/=jadwal_transportasiTampil">
            <i class="fas fa-fw fa-table"></i>
            <span>Jadwal Transportasi</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Kategori</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="?/=kategoriWisata_tampil">Kategori Wisata</a>
            <a class="dropdown-item" href="">Kategori Kuliner</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?/=tentang_tampil">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Tentang</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?/=kategori_wisatax">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>XKategori</span></a>
        </li>
        
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">
          <?php
                   error_reporting(0);
                   include 'koneksi/koneksi.php';
                    if($_GET['/']){
                    include 'backend/'.$_GET['/'].'.php';
                    include 'backend/wisata/'.$_GET['/'].'.php';
                    include 'backend/kuliner/'.$_GET['/'].'.php';
                    include 'backend/event/'.$_GET['/'].'.php';
                    include 'backend/jadwal_transportasi/'.$_GET['/'].'.php';
                    include 'backend/kategori_wisata/'.$_GET['/'].'.php';
                    include 'backend/tentang/'.$_GET['/'].'.php';
                    include 'backend/xmodal_kategori/'.$_GET['/'].'.php';
                    }
                  ?>

        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="backend/template/vendor/jquery/jquery.min.js"></script>
    <script src="backend/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="backend/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="backend/template/js/sb-admin.min.js"></script>

    <script src="backend/template/vendor/datatables/jquery.dataTables.js"></script>
    <script src="backend/template/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="backend/template/js/demo/datatables-demo.js"></script>

  </body>

</html>
<!-- $query = mysqli_query($koneksi,"INSERT INTO wisata (id,id_kategoriWisata,nama,lokasi,gambar_profil) VALUES(NULL,'$kategori','$nama','$lokasi', '$gambar_profil')"); -->
