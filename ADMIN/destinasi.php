<!DOCTYPE html>

<?php
    include "include/config.php";
    if (isset($_POST['Simpan']))
    {
        $destinasiKODE = $_POST['kodedestinasi'];
        $destinasiNAMA = $_POST['namadestinasi'];
        $kategoriKODE = $_POST['kodekategori'];

        mysqli_query($connection, "insert into destinasi values ('$destinasiKODE', 
        '$destinasiNAMA', '$kategoriKODE')");
        header ("location:destinasi.php");
    }
    $datakategori = mysqli_query($connection, "select * from kategoriwisata");
?>

<head>
    <title>DESTINASI</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="row"> <!--pembuka row -->
        <div class="col-sm-1">  <!--pembuka col-sm-1 -->

        </div> <!--penutup col-sm-1 -->

        <div class="col-sm-10">

      
    
<form method="POST">
    <div class="mb-3 row">
    <label for="kodedestinasi" class="col-sm-2 col-form-label">Kode Destinasi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="kodedestinasi" id="kodedestinasi">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="namadestinasi" class="col-sm-2 col-form-label">Nama Destinasi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="namadestinasi" id="namadestinasi">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="kodedestinasi" class="col-sm-2 col-form-label">Kategori Wisata</label>
    <div class="col-sm-10">
        <select class="form-control" name="kodekategori" id="kodekategori">
            <option>Kategori Wisata</option>
            <?php while($row = mysqli_fetch_array($datakategori)) 
            { ?>
                <option value="<?php echo $row["kategoriKODE"]?>">
                <?php echo $row["kategoriKODE"]?>
                
            </option>
            <?php } ?>
        </select>
    </div>
  </div>

<div class="form-group row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-10">



  <div class="tombol">
        <button type="submit" class="btn btn-secondary" value="Simpan" name = "Simpan">Simpan</button>    
  
        <input type="reset" class="btn btn-success" value="Batal" name = "Batal">

    </div>
    </div> <!--penutup col sm 10-->
    </div><!--penutup form-group-->
</form>

<div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Destinasi Wisata</h1>
                </div>
            </div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Destinasi</th>
      <th scope="col">Nama Destinasi</th>
      <th scope="col">Kode Kategori</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $query = mysqli_query($connection, "select destinasi.* from destinasi");
    //query untuk membaca data
    //row untuk menghitung data yang ingin dicetak

    $nomor = 1;
    while($row = mysqli_fetch_array($query))
    {
    ?>
    <tr>
      <td><?php echo $nomor; ?></td>
      <td><?php echo $row['destinasiKODE']; ?></td>
      <td><?php echo $row['destinasiNAMA']; ?></td>
      <td><?php echo $row['kategoriKODE']; ?></td>
    </tr>
    <tr>
        <?php $nomor = $nomor + 1; ?>
      <?php } ?> <!--penutup php supaya mau looping phpnya -->
  </tbody>
</table>
</div> <!--penutup col sm 10 -->
</div> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document) .ready(function()
        {
            $('$kodekategori') .select2(
                {
                    closeOnSelect: true,
                    allowClear: true,
                    placeholder: 'Pilih Kategori Wisata'
                })
                })
    </script>

</body>
</html>