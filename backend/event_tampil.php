<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Tampil Event</li>
</ol>
<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Event</div>
            <div class="card-body">
              <a href="?/=event_input"><button class="btn btn-outline-success"><i class="fa fa-plus"> Tambah</i></button></a>
              <div class="table-responsive"><br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="text-align: center;">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Lokasi</th>
                      <th>gambar</th>
                      <th>Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    $query = mysqli_query($koneksi,"SELECT * FROM event");
                    foreach ($query as $data ) {
                     ?>
                    
                    <tr>
                      <td width="2%"><?php echo $no++."." ?></td>
                      <td width="10%"><?php echo $data['nama']; ?></td>
                      <td width="10%"><?php echo $data['tgl_event']; ?></td>
                      <td width="13%"><?php echo $data['lokasi']; ?></td>
                      <td style="text-align: center;" width="20%"><img style="max-height: 100px; max-width: 100px"; src="asset/img/event/<?php echo $data['gambar']; ?>" alt=""></td>
                      <td width="25%"><?php echo substr($data['deskripsi'],0,40)." ..."; ?></td>
                      <td style="text-align: center;" width="20%">
                        <a class="btn btn-outline-secondary" href=""><i class="fa fa-eye"></i></a>
                        <a href="?/=wisata_edit&id=<?php echo $data['id_wisata']; ?>" class="btn btn-outline-primary" href=""><i class="fa fa-edit"></i></a>
                        <a style="margin-top: 5px;" class="btn btn-outline-danger" href=""><i class="fa fa-trash"></i></a>
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

<!--           <?php
          $sql=mysqli_query($koneksi,"SELECT * FROM wisata WHERE id_wisata='1'");
          $data=mysqli_fetch_array($sql);
          $images=$data['detail_gambar'];
          $temp = explode(',',$images);
          for($i=0;$i<count($temp);$i++)
          {
            echo '<img style="margin:10px;" src="asset/img/gdetail_wisata/'.$temp[$i].'" height="160" width="210">&nbsp';
          }
          ?>
 -->
