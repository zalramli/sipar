<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Tampil Jadwal transportasi</li>
</ol>
<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Jadwal trasnportasi</div>
            <div class="card-body">
              <a href="?/=jadwal_transportasiInput"><button class="btn btn-success"><i class="fa fa-plus"> Tambah</i></button></a>
              <div class="table-responsive"><br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="text-align: center;">
                      <th>No</th>
                      <th>Nama kendaraan</th>
                      <th>dari</th>
                      <th>sampai</th>
                      <th>aksi</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM jadwal_transportasi"); 
                    foreach ($query as $data) {
                     ?>                
                    
                    <tr>
                      <td width=""><?php echo $data['id_jadwal']; ?></td>
                      <td width=""><?php echo $data['nama_kendaraan']; ?></td>
                      <td width=""><?php echo $data['dari']; ?></td>
                      <td width=""><?php echo $data['sampai']; ?></td>
                      <td style="text-align: center;" width="">
                        <a href="backend.php?/=jadwalEdit&id=<?php echo $data['id_jadwal']; ?>" class="btn btn-primary" href=""><i class="fa fa-edit">Edit</i></a>
                        <a style="margin-top: 5px;" class="btn btn-danger" href="backend.php?/=jadwalHapus&id=<?php echo $data['id_jadwal']; ?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div> 
