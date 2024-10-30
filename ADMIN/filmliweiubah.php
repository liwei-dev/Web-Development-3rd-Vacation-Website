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
	<title>FILM LIWEI</title>
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<?php 
	include "include/config.php";
	if(isset($_POST['edit']))
	{
		$kodefilmliwei = $_POST['inputkode'];
		$namafilmliwei = $_POST['inputnama'];
		$kodedestinasi = $_POST['kodedestinasi'];

		$namafile = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];

		$ekstensifile = pathinfo($namafile, PATHINFO_EXTENSION);

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "jpg") or ($ekstensifile == "JPG") or ($ekstensifile == "jpeg") or ($ekstensifile == "JPEG"))
		{
			move_uploaded_file($file_tmp, 'images/'.$namafile); //unggah file ke folder images
			mysqli_query($connection, "update filmliwei set filmliweiNAMA = '$namafilmliwei', filmliweiFILE = '$namafile', destinasiKODE = '$kodedestinasi' where filmliweiKODE = '$kodefilmliwei'");

		}
        mysqli_query($connection, "update filmliwei set filmliweiNAMA = '$namafilmliwei', destinasiKODE = '$kodedestinasi' where filmliweiKODE = '$kodefilmliwei'");
		

	}

	$datadestinasi = mysqli_query($connection, "select * from destinasi");
    $inputkode = $_GET['ubahfoto'];
    $editfoto= mysqli_query($connection,"select * from filmliwei where filmliweiKODE = '$inputkode'");
    $rowedit = mysqli_fetch_array($editfoto);
    $editkode = mysqli_query($connection,"select * from filmliwei, destinasi where filmliweiKODE = '$inputkode' and filmliwei.destinasiKODE = destinasi.destinasiKODE");
    $rowedit1 = mysqli_fetch_array($editkode);
?>


<body>

<div class="row">
<div class="col-sm-1"></div>

<div class="col-sm-10">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Input Poster Film</h1>
		</div>
	</div>

	<form method="POST" enctype="multipart/form-data">
		<div class="mb-3 row">
			<label for="kodefilmliwei" class="col-sm-2 col-form-label">Kode Film</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="kodefilmliwei" name="inputkode" placeholder="kodefilmliwei" maxlength="4" value="<?php echo $rowedit["filmliweiKODE"]?>" readonly>
			</div>
		</div>

		<div class="mb-3 row">
			<label for="namafilmliwei" class="col-sm-2 col-form-label">Nama Film</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="namafilmliwei" name="inputnama" placeholder="namafilmliwei" value="<?php echo $rowedit["filmliweiNAMA"]?>">
			</div>
		</div>

		<div class="mb-3 row">
			<label for="kodedestinasi" class="col-sm-2 col-form-label">Kode Destinasi</label>
			<div class="col-sm-10">
			<select class="form-control" id="kodedestinasi" name="kodedestinasi">
                    <option value="<?php echo $rowedit["destinasiKODE"]?>">
						<?php echo $rowedit["destinasiKODE"]?>
						<?php echo $rowedit1["destinasiNAMA"]?>
					</option>
				<?php while($row = mysqli_fetch_array($datadestinasi))
				{ ?>
					<option value="<?php echo $row["destinasiKODE"]?>">
						<?php echo $row["destinasiKODE"]?>
						<?php echo $row["destinasiNAMA"]?>
					</option>
				<?php } ?>				

			</select>
			</div>
		</div>


		<div class="mb-3 row">
			<label for="file" class="col-sm-2 col-form-label">Poster Film</label>
			<div class="col-sm-10">
				<input type="file" id="file" name="file" value="<?php echo $rowedit["filmliweiFILE"]?>">
				<p class="help-block">Field ini digunakan untuk unggah file</p>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<input type="submit" name="edit" class="btn btn-primary" value="Edit">
				<input type="submit" name="Batal" class="btn btn-secondary" value="Batal">

			</div>
			
		</div>

		
	</form>

</div>

<div class="col-sm-1"></div>
</div>

<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Daftar Film</h1>
			</div>
		</div>

        <form method="POST">
                
                <div class="form-group row mb-2">
                <label for="search" class="col-sm-3">Nama Film</label>

                <div class="col-sm-6">
                    <input type="text" name="search" class="form-control" id="search" 
                    value="<?php if(isset($_POST["search"])) {echo $_POST["search"];}?>"
                        placeholder = "Cari hotel">

                </div>
                <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Search">
                
                </div>

            </form>


	<table class="table table-hover table-danger">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Kode Film</th>
				<th>Nama Film</th>
				<th>Kode Destinasi</th> 
				<th>Photo Destinasi</th>
				<th colspan="2" style="text-align: center">Action</th>
			</tr>			
		</thead>

		<tbody>
                <?php
				//TAMBAHAN UNTUK TAMBAH SEARCH BAR
				if(isset($_POST["kirim"])){
				$search = $_POST["search"];
				$query = mysqli_query($connection, "select filmliwei.* from filmliwei where filmliweiNAMA like '%".$search."%'"); }
				else{
					$query = mysqli_query($connection, "select filmliwei.* from filmliwei");
				}
				$nomor = 1;
				while($row = mysqli_fetch_array($query))
				{
				?>
				<tr>
					<td><?php echo $nomor;?></td>
					<td><?php echo $row['filmliweiKODE'];?></td>
					<td><?php echo $row['filmliweiNAMA'];?></td>
					<td><?php echo $row['destinasiKODE'];?></td>  
					<td>
						<?php if(is_file("images/".$row['filmliweiFILE']))
						{ ?>
							<img src="images/<?php echo $row['filmliweiFILE']?>" width="80">
						<?php } else
							echo "<img src='images/noimage.png' width='80'>"
						?>
					</td>

					<td>
						<a href="filmliweiubah.php?ubahfoto=<?php echo $row['filmliweiKODE']?>" class="btn btn-success btn-sm" title="EDIT">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
						</a>
					</td>

					<td>
						<a href="filmliweihapus.php?hapusfoto=<?php echo $row['filmliweiKODE']?>" class="btn btn-danger btn-sm" title="DELETE">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>
						</a>
						
					</td>

				</tr>
			<?php $nomor = $nomor + 1;?>
			<?php }	?>
		</tbody>
		
	</table>
	</div>

	<div class="col-sm-1"></div>

	
</div>


</body>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    </div>
                </main>
                <?php include "include/footer.php";?>
            </div>
        </div>
        <?php include "include/jssscript.php";?>
    </body>
</html>
</html>