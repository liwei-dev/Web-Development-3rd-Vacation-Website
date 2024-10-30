<!doctype html>

<?php
include "include/configberita.php";
if (isset($_POST['Simpan']))

        {
            $kategoriberitaKODE = $_POST['inputKategoriKode'];
            $kategoriberitaNAMA = $_POST['inputKategoriNama'];
            $kategoriberitaKET= $_POST['inputKategoriKet'];

            mysqli_query($connection, "insert into kategoriberita values ('$kategoriberitaKODE', '$kategoriberitaNAMA',
           '$kategoriberitaKET')");
            header ("location:inputberita.php");
        }
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Berita</title>
  </head>
  <body>
    <div class="alert alert-secondary" role="alert">
    ENTRI DATA KATEGORI BERITA
    </div>
    <!-- <h1>Hello, world!</h1> -->

    <!--ini bagian kerja saya 
            for berhubungan dengan id 
        class buat ngatur kolom -->
        <div class="col-sm-2">
    
        </div>
 
    </div>
    
    <div class="col-sm-10">
    <form method="POST">
  <div class="form-group row">
    <label for="kategorikode" class="col-sm-3 col-form-label">Kode Kategori Berita</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategorikode" name="inputKategoriKode" placeholder="Kode Kategori Berita">
    </div>
  </div>

  <div class="form-group row">
    <label for="kategorinama" class="col-sm-3 col-form-label">Nama Kategori Berita</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategorinama" name="inputKategoriNama" placeholder="Nama Kategori Berita">
    </div>
  </div>

  <div class="form-group row">
    <label for="kategoriket" class="col-sm-3 col-form-label">Keterangan Kategori Berita</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategoriket" name="inputKategoriKet" placeholder="Keterangan Kategori Berita">
    </div>
  </div>

  <div class="col-sm-3">

 </div>

    <div class="col-sm-7">
    <button type="submit" class="btn btn-primary" value = "Simpan" name = "Simpan" > Simpan</button>
    <button type="button" class="btn btn-info">Batal</button>   
    </div> 
   

    </form>
    </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>