
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Tampil Wisata</li>
</ol>
<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Wisata</div>
            <div class="card-body">
              <a href="?/=kategoriWisata_input"><button class="btn btn-secondary"><i class="fa fa-plus"> Tambah</i></button></a>
              <div class="table-responsive"><br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="text-align: center;">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM kategori_wisata");
                    foreach ($query as $data) {
                      
                  
                    ?>
                    <tr>
                      <td width=""> <?php echo $data['id_kategoriWisata']?> </td>
                      <td width=""> <?php echo $data['nama_kategori']?> </td>
                      <td style="text-align: center;" width="">
                        <a href="backend.php?/=kategoriWisata_edit&id=<?php echo $data['id_kategoriWisata']?> " class="btn btn-primary" href=""><i class="fa fa-edit"></i></a>
                        <a onclick="return confirm('Anda Yakin Ingin menghapus Data?')" class="btn btn-danger" href=backend.php?/=kategoriWisata_hapus&id=<?php echo $data['id_kategoriWisata']?> "><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div> 

