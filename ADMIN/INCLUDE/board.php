<?php
include "config.php";
$sql = mysqli_query($connection, "SELECT * FROM kategoriwisata");
$jumlah = mysqli_num_rows($sql);

$sql1 = mysqli_query($connection, "SELECT * FROM destinasi");
$jumlah1 = mysqli_num_rows($sql1);

$sql2 = mysqli_query($connection, "SELECT * FROM hotel");
$jumlah2 = mysqli_num_rows($sql2);

$sql3 = mysqli_query($connection, "SELECT * FROM pusatoleholeh");
$jumlah3 = mysqli_num_rows($sql3);

$sql4 = mysqli_query($connection, "SELECT * FROM fotodestinasi");
$jumlah4 = mysqli_num_rows($sql4);

$sql5 = mysqli_query($connection, "SELECT * FROM filmliwei");
$jumlah5 = mysqli_num_rows($sql5);

$sql6 = mysqli_query($connection, "SELECT * FROM restaurant");
$jumlah6 = mysqli_num_rows($sql6);

$sql7 = mysqli_query($connection, "SELECT * FROM travel");
$jumlah7 = mysqli_num_rows($sql7);

$sql8 = mysqli_query($connection, "SELECT * FROM berita");
$jumlah8 = mysqli_num_rows($sql8);
?>

<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Jumlah Kategori Wisata: <?php echo $jumlah?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftarkategoriwisata.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Jumlah Destinasi Wisata: <?php echo $jumlah1?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftardestinasi.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Jumlah Hotel: <?php echo $jumlah2?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftarhotel.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Jumlah Pusat Oleh Oleh: <?php echo $jumlah3?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftarpusatoleholeh.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Jumlah Foto Destinasi: <?php echo $jumlah4?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftarphotodestinasi.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Jumlah Film Liwei: <?php echo $jumlah5?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftarfilmliwei.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Jumlah Restaurant: <?php echo $jumlah6?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftarrestaurant.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Jumlah Travel: <?php echo $jumlah7?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftartravel.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Jumlah Berita: <?php echo $jumlah8?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftarberita.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>