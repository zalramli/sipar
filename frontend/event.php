<div class="container-fluid jarak-section">
  <div class="row">
    <div class="col-md-12">
      <img src="event2.png" class="img-fluid" alt="Responsive image">
    </div>
  </div>
</div>
<div class="container jarak-event text-center">
  <div class="judul">
    <h2>Event</h2>
    <?php
    $bulan = ["","Jan","Feb","Mar","Apr","Mei","Jun","Jul","Aug","Sept","Okt","Nov","Des"];
    
    echo "<h3>".$bulan[date("m")]." ".date("Y")."</h3>";
    ?>
  </div>
  <!-- <div class="row">
    <div class="col-md-12 bungkus-tgl">
      <div id="tgl" class="owl-carousel owl-theme owl-tgl">
        <?php
        $bln = [1,2,3,4,5,6,7,8,9,10,11,12];
        for($i=1;$i<=count($bln);$i++){
        $active = ($i." ".date("Y")==date("m Y")) ? "class='active'" : "";
        echo "<div class='item'><a $active href=''>$bulan[$i] ".date("Y")."</a></div>";
        }
        ?>
      </div>
    </div>
  </div> -->
  <div class="container">
    <div class="row bungkus-tgl">
      <?php
      $bln = [1,2,3,4,5,6,7,8,9,10,11,12];
      for($i=1;$i<=count($bln);$i++){
      $active = ($i." ".date("Y")==date("m Y")) ? "class='active'" : "";
      echo "<div class='col-lg-1'><a $active href='?halaman=event&$bulan[$i]'>$bulan[$i]</a></div>";
      if (isset($GET[$bulan[$i]])) {
        
      }

      }
      ?>
    </div>
  </div>
  <div class="container">
    <div class="row bungkus-tgl">
      <div class="col-lg-1">
        <a href="?halaman=event&jan">1</a>
      </div>
      <div class="col-lg-1">
        <a href="?halaman=event&feb">2</a>
      </div>
      <div class="col-lg-1">
        <a href="?halaman=event&mar">3</a>
      </div>
    </div>
  </div>
  <?php if (isset($_GET['jan'])) {
    echo "Januari";
  } 
  else if (isset($_GET['feb'])) {
    echo "Februari";
  } 
   ?>
</div>
<div class="container jarak-mb5 card-event">
  <div class="transisi-galery">
    <div class="row">
      <div class="col-md-4 jarak-section">
        <div class="card">
          <a class="lightbox" href="event.jpg">
            <img src="event.jpg" alt="Card Image" class="card-img-top">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center">Go Ride</h5>
            <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum reprehenderit perspiciatis molestias aut rerum, libero, inventore corrupti labore at nam!</p> -->
          </div>
        </div>
        
      </div>
      <div class="col-md-4 jarak-section">
        
        <div class="card">
          <a class="lightbox" href="event.jpg">
            <img src="event.jpg" alt="Card Image" class="card-img-top">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center">Go Ride</h5>
            <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum reprehenderit perspiciatis molestias aut rerum, libero, inventore corrupti labore at nam!</p> -->
          </div>
        </div>
        
      </div>
      <div class="col-md-4 jarak-section">
        
        <div class="card">
          <a class="lightbox" href="event.jpg">
            <img src="event.jpg" alt="Card Image" class="card-img-top">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center">Go Ride</h5>
            <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum reprehenderit perspiciatis molestias aut rerum, libero, inventore corrupti labore at nam!</p> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 jarak-section">
        
        <div class="card">
          <a class="lightbox" href="event.jpg">
            <img src="event.jpg" alt="Card Image" class="card-img-top">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center">Go Ride</h5>
            <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum reprehenderit perspiciatis molestias aut rerum, libero, inventore corrupti labore at nam!</p> -->
          </div>
        </div>
        
      </div>
      <div class="col-md-4 jarak-section">
        
        <div class="card">
          <a class="lightbox" href="event.jpg">
            <img src="event.jpg" alt="Card Image" class="card-img-top">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center">Go Ride</h5>
            <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum reprehenderit perspiciatis molestias aut rerum, libero, inventore corrupti labore at nam!</p> -->
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>