<!DOCTYPE html>
<html>
    <!--tambahin ini-->
    <?php
    include "admin/include/config.php";
    $destinasi = mysqli_query($connection, "SELECT * FROM destinasi");
    $destinasid = mysqli_query($connection, "SELECT * FROM destinasi");
    $destinasi3 = mysqli_query($connection, "SELECT * FROM destinasi");
    $hotel = mysqli_query($connection, "SELECT * FROM hotel");
    $hoteld = mysqli_query($connection, "SELECT * FROM hotel");
    $kategori = mysqli_query($connection, "SELECT * FROM kategoriwisata");
    $kategori3 = mysqli_query($connection, "SELECT * FROM kategoriwisata");
    $kategorid = mysqli_query($connection, "SELECT * FROM kategoriwisata");
    $berita = mysqli_query($connection, "SELECT * FROM berita");
    $beritad = mysqli_query($connection, "SELECT * FROM berita");
    $pusatoleholeh = mysqli_query($connection, "SELECT * FROM pusatoleholeh");
    $pusatoleholehd = mysqli_query($connection, "SELECT * FROM pusatoleholeh");
    $restaurant = mysqli_query($connection, "SELECT * FROM restaurant");
    $restaurantd = mysqli_query($connection, "SELECT * FROM restaurant");
    $travel = mysqli_query($connection, "SELECT * FROM travel");
    $traveld = mysqli_query($connection, "SELECT * FROM travel");
    $filmliwei = mysqli_query($connection, "SELECT * FROM filmliwei");
    $filmliweid = mysqli_query($connection, "SELECT * FROM filmliwei");
    $liwei = mysqli_query($connection, "SELECT * FROM liwei");
    $liweid = mysqli_query($connection, "SELECT * FROM liwei");
?>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid bg-secondary">
            <!-- nav bar-->
            <div class="container bg-secondary"> <!-- membuat border warna -->
            <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Web Li Wei</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Kategori Wisata
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              if (mysqli_num_rows($kategorid)>0)
              {
                while($row=mysqli_fetch_array($kategorid))
                {?>
                  <li><a class="dropdown-item" href="#">
                    <?php echo $row["kategoriNAMA"];?></a></li>
                <?php }}?>
          </ul>
        </li>
                        <!-- tambahin ini, copy aja buat nambahin dropdown -->
                        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Destinasi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              if (mysqli_num_rows($destinasid)>0)
              {
                while($row=mysqli_fetch_array($destinasid))
                {?>
                  <li><a class="dropdown-item" href="#">
                    <?php echo $row["destinasiNAMA"];?></a></li>
                <?php }}?>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          UAS3 LIWEI
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              if (mysqli_num_rows($liweid)>0)
              {
                while($row=mysqli_fetch_array($liweid))
                {?>
                  <li><a class="dropdown-item" href="#">
                    <?php echo $row["liweiKOTA"];?></a></li>
                <?php }}?>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Hotel
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              if (mysqli_num_rows($hoteld)>0)
              {
                while($row=mysqli_fetch_array($hoteld))
                {?>
                  <li><a class="dropdown-item" href="#">
                    <?php echo $row["hotelNAMA"];?></a></li>
                <?php }}?>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Pusat Oleh Oleh
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              if (mysqli_num_rows($pusatoleholehd)>0)
              {
                while($row=mysqli_fetch_array($pusatoleholehd))
                {?>
                  <li><a class="dropdown-item" href="#">
                    <?php echo $row["pusatoleholehNAMA"];?></a></li>
                <?php }}?>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Film Liwei
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              if (mysqli_num_rows($filmliweid)>0)
              {
                while($row=mysqli_fetch_array($filmliweid))
                {?>
                  <li><a class="dropdown-item" href="#">
                    <?php echo $row["filmliweiNAMA"];?></a></li>
                <?php }}?>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Restaurant
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              if (mysqli_num_rows($restaurantd)>0)
              {
                while($row=mysqli_fetch_array($restaurantd))
                {?>
                  <li><a class="dropdown-item" href="#">
                    <?php echo $row["restaurantNAMA"];?></a></li>
                <?php }}?>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Travel
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              if (mysqli_num_rows($traveld)>0)
              {
                while($row=mysqli_fetch_array($traveld))
                {?>
                  <li><a class="dropdown-item" href="#">
                    <?php echo $row["travelNAMA"];?></a></li>
                <?php }}?>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Berita
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              if (mysqli_num_rows($beritad)>0)
              {
                while($row=mysqli_fetch_array($beritad))
                {?>
                  <li><a class="dropdown-item" href="#">
                    <?php echo $row["beritaNAMA"];?></a></li>
                <?php }}?>
          </ul>
        </li>

                        <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
                </div>
                </div>
                </div>
            </nav> <!--end nav-->

        
            <!--image slide-->
            <div class="container bg-secondary"> <!-- membuat border warna -->
            <div class="row">
            <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                    <img src="admin/images/pantai anyer.jpeg" class="d-block w-100" alt="Foto tidak ada">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pantai Anyer</h5>
                        <p>Pantai merupakan objek wisata terbaik untuk liburan karena Grameds bisa melihat luasnya lautan biru sejauh mata memandang.</p>
                    </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                    <img src="admin/images/museum fatahillah.jpg" class="d-block w-100" alt="Foto tidak ada">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Museum Fatahillah</h5>
                        <p>Museum adalah lembaga yang berfungsi melindungi, mengembangkan, memanfaatkan koleksi, dan mengomunikasikannya kepada masyarakat.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="admin/images/bromo.jpeg" class="d-block w-100" alt="Foto tidak ada">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Gunung Bromo</h5>
                        <p>Gunung adalah bagian kerak bumi yang lebih tinggi dari area di sekitarnya.</p>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
                </div>
            </div> <!--end image slide-->
            
            <div class="container bg-secondary"> <!-- membuat border warna -->
              <div class="row">
                    <div class="p-3 mb-2 bg-secondary">
            
                  <p class="text-center fs-3">Wisata Favorite Tourist</p>
                  <p class="text-center 1h-lg">wisata memiliki beberapa pengertian. Menurut Kamus Besar Bahasa Indonesia (KBBI), wisata artinya sebuah aktivitas bepergian bersama-sama (untuk memperluas pengetahuan, bersenang-senang, dan sebagainya). 
Dari pengertian tersebut, dapat disederhanakan, jika wisata merujuk pada kegiatan melakukan perjalanan ke tujuan tertentu dengan tujuan untuk memperluas pengetahuan ataupun bersenang-senang.
Sementara, menurut World Tourism Organization (WTO), wisata berarti melakukan sebuah perjalanan dan tinggal sementara waktu di suatu tempat yang bukan tempat tinggalnya. Meski tidak diberi penjelasan tentang tujuan perjalanan tersebut, pengertian wisata menurut WTO lebih memiliki makna untuk bersenang-senang.</p>
                  <p class="text-center fst-italic fs-5">Wisata Updated</p>
                    </div>
                </div>
            </div> <!-- akhir text -->
          
            <!--buat hotel-->
            <div class="container bg-secondary">
                <div class="row">
                    <div class="col-sm-9 p-3 mb-2 bg-secondary text-blue">
                      <h2> Referensi Hotel </h2>
                        <!-- tambahin ini -->
                        <?php 
                            if (mysqli_num_rows($hotel)>0){
                                while($row=mysqli_fetch_array($hotel)){ ?>

                                <div class="d-flex">
                                    <div class="flex-shrink-0 mt-3">
                                        <img style="width:300px; height: 100%;" src="admin/images/<?php echo$row["hotelFILE"]; ?>" alt="No Image">
                                    </div>
                                    <div class="flex-grow-1 mt-3">
                                        <h5> <?php echo $row["hotelNAMA"]; ?> <small class="text-muted">
                                            <i> <?php echo$row["destinasiKODE"]; ?> </i></small> </h5>
                                        <p> <?php echo$row["hotelKET"]; ?> </p>
                                        <a href="#" class="btn btn-secondary">Read More</a>
                                    </div>
                                </div>
                        <?php }
                            }
                        ?>
                    </div> <!--end col sm 9 -->
                    <div class="col-sm-3">
                        <div class="card" style="width: 40;">
                            <div class="card-body bg-secondary">
                                <h2 class="card-title bg-secondary">Video Youtube</h2>
                                <iframe width="270px" height="300" src="https://www.youtube.com/embed/CHRNR6PTicA?si=A4uqKbNYg3UOAWSU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <iframe width="270px" height="300" src="https://www.youtube.com/embed/mAV1N7fHd8k?si=3fPNXC2i-UheCd6O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div> <!--end col sm 3-->

                </div> <!--end row-->


            </div> <!-- end container-->
            <!-- end berita -->

            <!--galeri-->
            <!-- Carousel wrapper -->
                <div class = "container bg-secondary">
                <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
                    <!-- Controls -->
                    <div class="d-flex justify-content-center mb-4">
                        <button
                        class="carousel-control-prev position-relative"
                        type="button"
                        data-mdb-target="#carouselMultiItemExample"
                        data-mdb-slide="prev"
                        >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                        class="carousel-control-next position-relative"
                        type="button"
                        data-mdb-target="#carouselMultiItemExample"
                        data-mdb-slide="next"
                        >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                                </div>
                    <!-- Inner -->
                    <div class="carousel-inner py-4">
                        <!-- Single item -->
                        <div class="carousel-item active">
                        <div class="container bg-secondary">
                            <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                
                                <div class="card-body bg-secondary">
                                    <h5 class="card-title">Referensi Restaurant</h5>
                                    <?php 
                            if (mysqli_num_rows($restaurant)>0){
                                while($row=mysqli_fetch_array($restaurant)){ ?>

                                <div class="d-flex">
                                    <div class="flex-shrink-0 mt-3">
                                        <img style="width:300px; height: 100%;" src="admin/images/<?php echo$row["restaurantFILE"]; ?>" alt="No Image">
                                    </div>
                                    <div class="flex-grow-1 mt-3">
                                        <h5> <?php echo $row["restaurantNAMA"]; ?> <small class="text-muted">
                                            <i> <?php echo$row["restaurantKODE"]; ?> </i></small> </h5>
                                        <p> <?php echo$row["destinasiKODE"]; ?> </p>
                                        <a href="#" class="btn btn-secondary">Read More</a>
                                    </div>
                                </div>
                        <?php }
                            }
                        ?>
                                    
                                    <a href="#!" class="btn btn-primary mt-1">Button</a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                
                                <div class="card-body bg-secondary">
                                    <h5 class="card-title">Referensi Travel</h5>
                                    <?php 
                            if (mysqli_num_rows($travel)>0){
                                while($row=mysqli_fetch_array($travel)){ ?>

                                <div class="d-flex">
                                    <div class="flex-shrink-0 mt-3 mb-2">
                                        <img style="width:300px; height: 100%;" src="admin/images/<?php echo$row["travelFILE"]; ?>" alt="No Image">
                                    </div>
                                    <div class="flex-grow-1 mt-3">
                                        <h5> <?php echo $row["travelNAMA"]; ?> <small class="text-muted">
                                            <i> <?php echo$row["travelKODE"]; ?> </i></small> </h5>
                                        <p> <?php echo$row["destinasiKODE"]; ?> </p>
                                        <a href="#" class="btn btn-secondary">Read More</a>
                                    </div>
                                </div>
                        <?php }
                            }
                        ?>
                                    
                                    <a href="#!" class="btn btn-primary">Button</a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                
                                <div class="card-body bg-secondary">
                                    <h5 class="card-title">Referensi Pusat Oleh Oleh</h5> 
                                    <?php 
                            if (mysqli_num_rows($pusatoleholeh)>0){
                                while($row=mysqli_fetch_array($pusatoleholeh)){ ?>

                                <div class="d-flex">
                                    <div class="flex-shrink-0 mt-3">
                                        <img style="width:300px; height: 100%;" src="admin/images/<?php echo$row["pusatoleholehFILE"]; ?>" alt="No Image">
                                    </div>
                                    <div class="flex-grow-1 mt-3">
                                        <h5> <?php echo $row["pusatoleholehNAMA"]; ?> <small class="text-muted">
                                            <i> <?php echo$row["pusatoleholehKODE"]; ?> </i></small> </h5>
                                        <p> <?php echo$row["destinasiKODE"]; ?> </p>
                                        <a href="#" class="btn btn-secondary">Read More</a>
                                    </div>
                                </div>
                        <?php }
                            }
                        ?>
                                    
                                    <a href="#!" class="btn btn-primary mt-1">Button</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        
                    <!-- Inner -->
                </div>
                <!-- Carousel wrapper -->
                <!-- end -- galeri-->
        </div>
    </body>
    <!--script menu-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="container bg-secondary">
    <div class="row">
    <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Kategori Wisata</h5>
    <?php 
                            if (mysqli_num_rows($kategori)>0){
                                while($row=mysqli_fetch_array($kategori)){ ?>

                                <div class="d-flex">
                                    
                                    <div class="flex-grow-1 mt-3">
                                        <h5> <?php echo $row["kategoriNAMA"]; ?> <small class="text-muted">
                                            <i> <?php echo$row["kategoriKODE"]; ?> </i></small> </h5>
                                        <p> <?php echo$row["kategoriKET"]; ?> </p>
                                        <a href="#" class="btn btn-secondary">Read More</a>
                                    </div>
                                </div>
                        <?php }
                            }
                        ?>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Telusuri Wisata</a>
  </div>
  <div class="card-footer text-body-primary">
    2 days ago
  </div>
</div>
</div>
</div>


    <div class="container bg-secondary">
    <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body bg-secondary">
        <h5 class="card-title">Destinasi Wisata</h5>
        <?php 
                            if (mysqli_num_rows($destinasi)>0){
                                while($row=mysqli_fetch_array($destinasi)){ ?>

                                <div class="d-flex">
                                    <div class="flex-shrink-0 mt-3">
                                        <img style="width:300px; height: 100%;" src="admin/images/<?php echo$row["destinasiFILE"]; ?>" alt="No Image">
                                    </div>
                                    <div class="flex-grow-1 mt-3">
                                        <h5> <?php echo $row["destinasiNAMA"]; ?> <small class="text-muted">
                                            <i> <?php echo$row["destinasiKODE"]; ?> </i></small> </h5>
                                        <p> <?php echo$row["kategoriKODE"]; ?> </p>
                                        <a href="#" class="btn btn-secondary">Read More</a>
                                    </div>
                                </div>
                        <?php }
                            }
                        ?>

        
        <a href="#" class="btn btn-primary mt-2">Telusuri Destinasi</a>
      </div>
    </div>
  </div>

  
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body bg-secondary">
        <h5 class="card-title">Berita</h5>
        <?php 
                            if (mysqli_num_rows($berita)>0){
                                while($row=mysqli_fetch_array($berita)){ ?>

                                <div class="d-flex">
                                    <div class="flex-shrink-0 mt-4 mb-4">
                                        <img style="width:300px; height: 100%;" src="admin/images/<?php echo$row["beritaFILE"]; ?>" alt="No Image">
                                    </div>
                                    <div class="flex-grow-1 mt-3">
                                        <h5> <?php echo $row["beritaNAMA"]; ?> <small class="text-muted">
                                            <i> <?php echo$row["beritaKODE"]; ?> </i></small> </h5>
                                        <p> <?php echo$row["destinasiKODE"]; ?> </p>
                                        <a href="#" class="btn btn-secondary">Read More</a>
                                    </div>
                                </div>
                        <?php }
                            }
                        ?>
        
        <a href="#" class="btn btn-primary">Telusuri Berita</a>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container bg-secondary">
<div class="row bg-secondary">
<div class="card mb-3 bg-secondary" style="max-width: 540px; bg-secondary">
  <div class="row g-0 bg-secondary">
  <div class="col-md-8 bg-secondary">
      <div class="card-body bg-secondary">
        <h5 class="card-title bg-secondary">Film Li Wei</h5>
    <div class="col-md-4 bg-secondary">
    <?php 
                            if (mysqli_num_rows($filmliwei)>0){
                                while($row=mysqli_fetch_array($filmliwei)){ ?>

                                <div class="d-flex bg-secondary">
                                    <div class="flex-shrink-0 mt-3 bg-secondary">
                                        <img style="width:300px; height: 100%; bg-secondary" src="admin/images/<?php echo$row["filmliweiFILE"]; ?>" alt="No Image">
                                    </div>
                                    <div class="flex-grow-1 mt-3 bg-secondary">
                                        <h5> <?php echo $row["filmliweiNAMA"]; ?> 
                                             </h5>
                                        
                                        
                                    </div>
                                </div>
                        <?php }
                            }
                        ?>
    </div>
    <div class="col-md-8 bg-secondary">
      <div class="card-body bg-secondary">
        <p class="card-text bg-secondary"><small class="text-body-primary bg-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

                        <div class="col-sm-3">
                        
                            <div class="card-body bg-secondary" style="width: 200;">
                                <h2 class="card-title bg-secondary">Video Youtube</h2>
                                <iframe width="670px" height="315" src="https://www.youtube.com/embed/CHRNR6PTicA?si=A4uqKbNYg3UOAWSU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <iframe width="670px" height="315" src="https://www.youtube.com/embed/mAV1N7fHd8k?si=3fPNXC2i-UheCd6O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <iframe width="670px" height="315" src="https://www.youtube.com/embed/Lps5fLfurcg?si=EewMhcrZvlU4fwHD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <iframe width="670px" height="315" src="https://www.youtube.com/embed/wZl1czh8UYg?si=IqA5p4CrnBTgKo2B" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>

<div class="container bg-primary">
  <div class="row">
        <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
  
      <div class="card-body">
        <h5 class="card-title">UAS 3 LIWEI</h5>
        <?php 
          if (mysqli_num_rows($liwei)>0){
          while($row=mysqli_fetch_array($destinasi3)) { ?>

          <div class="d-flex">
          <div class="flex-shrink-0 mt-3">
          <img style="width:300px; height: 100%;" src="admin/images/<?php echo$row["destinasiFILE"]; ?>" alt="No Image">
          </div>
          <div class="flex-grow-1 mt-3">
          <h5> <?php echo $row["destinasiKET"]; ?> <small class="text-muted">
          <i> <?php echo$row["destinasiNAMA"]; ?> </i></small> </h5>
          <p> <?php echo$row["destinasiKODE"]; ?> </p>
          <a href="#" class="btn btn-secondary">Read More</a>
          </div>
          </div>
          <?php }
          }
          ?>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mt-5 mb-5 ">UAS 3 LIWEI</h5>
        <?php 
          if (mysqli_num_rows($liwei)>0){
          while($row=mysqli_fetch_array($liwei)) { ?>

          <div class="d-flex">
          
          <div class="flex-grow-1 mt-5 mb-5">
          <h5> <?php echo $row["liweiKOTA"]; ?> <small class="text-muted">
          
          <p> <?php echo$row["liweiID"]; ?> </p>
          <a href="#" class="btn btn-secondary">Kota Asal</a>
          </div>
          </div>
          <?php }
          }
          ?>
       
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mt-5 mb-5 ">UAS 3 LIWEI</h5>
        <?php 
                            if (mysqli_num_rows($liwei)>0){
                                while($row=mysqli_fetch_array($kategori3)){ ?>

                                <div class="d-flex">
                                    
                                    <div class="flex-grow-1 mt-3">
                                        <h5> <?php echo $row["kategoriNAMA"]; ?> <small class="text-muted">
                                            <i> <?php echo$row["kategoriKODE"]; ?> </i></small> </h5>
                                        <p> <?php echo$row["kategoriKET"]; ?> </p>
                                        <a href="#" class="btn btn-secondary">Read More</a>
                                    </div>
                                </div>
                        <?php }
                            }
                        ?>
        
      </div>
    </div>
  </div>
  </div>
  </div>
          
    <!--footer-->
    <div class="container bg-secondary">
  <footer class="py-5">
    <div class=" row row-cols-1 row-cols-sm-1 row-cols-md-5 py-5 my-5 border-top">
      <div class="col-12 col-md-1 mb-3">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>
<br><br>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
<br><br>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
</svg>
      </div>



      <div class="col-12 col-md-5 mb-3">
        <h6> Jl. Letjen S. Parman No.1, RT.6/RW.16, Tomang, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11440</h6>
        <h6>(021) 5671747</h6>
        <br><h6>liwei.825220054@stu.untar.ac.id</h6>

      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-2 my-2 border-top">
      <p>© 2023 Company, Inc. All rights reserved. Made by Li Wei.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </div>
  </footer>
</div>

</html>