<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php";?>
    <body class="sb-nav-fixed">
        <?php include "include/menunav.php";?>
        <div id="layoutSidenav">
            <?php include "include/menu.php";?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FOTO DESTINASI WISATA</title>
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<?php
include "include/config.php";
if (isset($_POST['Simpan']))

        {
            $kategoriKODE = $_POST["inputKategoriKode"];
            $kategoriNAMA = $_POST["inputKategoriNama"];
            $kategoriKET= $_POST["inputKategoriKet"];
            $kategoriREFERENCE = $_POST["inputKategoriRef"];

            mysqli_query($connection, "insert into kategoriwisata values ('$kategoriKODE', '$kategoriNAMA',
            '$kategoriKET',  '$kategoriREFERENCE')");
            header ("location:inputkategori.php");
        }
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Wisata</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->

    <!--ini bagian kerja saya 
            for berhubungan dengan id 
        class buat ngatur kolom -->
        <div class="col-sm-2">

    </div>
    
    <div class="col-sm-10">
    <form method="POST">
  <div class="form-group row">
    <label for="kategorikode" class="col-sm-3 col-form-label">Kategori Kode</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategorikode" name="inputKategoriKode" placeholder="Input Kategori Kode">
    </div>
  </div>

  <div class="form-group row">
    <label for="kategorinama" class="col-sm-3 col-form-label">Nama Kategori</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategorinama" name="inputKategoriNama" placeholder="Input Kategori Nama">
    </div>
  </div>

  <div class="form-group row">
    <label for="kategoriket" class="col-sm-3 col-form-label">Keterangan Kategori</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategoriket" name="inputKategoriKet" placeholder="Input Keterangan Kategori">
    </div>
  </div>

  <div class="form-group row">
    <label for="kategoriref" class="col-sm-3 col-form-label">Referensi Kategori</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategoriref" name="inputKategoriRef" placeholder="Input Referensi Kategori">
    </div>
  </div>


        <button type="submit" class="btn btn-secondary" value="Simpan" name = "Simpan">Simpan</button>    
  
        <input type="reset" class="btn btn-success" value="Batal" name = "Batal">

    </form>
    </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>