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
	<title>HOTEL</title>
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<?php 
	include "include/config.php";
	if(isset($_POST['Simpan']))
	{
		$kategorikode = $_POST["kategorikode"];
        $kategorinama = $_POST["kategorinama"];
        $kategoriket= $_POST["kategoriket"];
        $kategorireference = $_POST["kategorireference"];

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		{
			mysqli_query($connection, "insert into kategoriwisata values ('$kategorikode', '$kategorinama', '$kategoriket', '$kategorireference')");
		}

	}
?>


<body>

<div class="row">
<div class="col-sm-1"></div>

<div class="col-sm-10">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">KATEGORI WISATA</h1>
		</div>
	</div>

	<form method="POST" enctype="multipart/form-data">
	<div class="form-group row">
    <label for="kategorikode" class="col-sm-3 col-form-label">Kategori Kode</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategorikode" name="kategorikode" placeholder="Input Kategori Kode">
    </div>
  </div>

  <div class="form-group row">
    <label for="kategorinama" class="col-sm-3 col-form-label">Nama Kategori</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategorinama" name="kategorinama" placeholder="Input Kategori Nama">
    </div>
  </div>

  <div class="form-group row">
    <label for="kategoriket" class="col-sm-3 col-form-label">Keterangan Kategori</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategoriket" name="kategoriket" placeholder="Input Keterangan Kategori">
    </div>
  </div>

  <div class="form-group row">
    <label for="kategorireference" class="col-sm-3 col-form-label">Referensi Kategori</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategorireference" name="kategorireference" placeholder="Input Referensi Kategori">
    </div>
  </div>

  <div class="form-group row">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<input type="submit" name="Simpan" class="btn btn-primary" value="Simpan">
				<input type="submit" name="Batal" class="btn btn-secondary" value="Batal">

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
				<h1 class="display-4">DAFTAR KATEGORI WISATA</h1>
			</div>
		</div>

		<form method="POST">
                
                <div class="form-group row mb-2">
                <label for="search" class="col-sm-3">Nama Kategori</label>

                <div class="col-sm-6">
                    <input type="text" name="search" class="form-control" id="search" 
                    value="<?php if(isset($_POST["search"])) {echo $_POST["search"];}?>"
                        placeholder = "Cari kategori">

                </div>
                <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Search">
                
                </div>

            </form>


	<table class="table table-hover table-danger">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Kode Wisata</th>
				<th>Nama Wisata</th>
				<th>Keterangan Wisata</th> 
				<th>Ref Wisata</th>
				<th colspan="2" style="text-align: center">Action</th>
			</tr>			
		</thead>

		<tbody>
		<?php 
// --------------------- PAGING -- MEMBUAT GANTI HALAMAN ---------------- >
    $jumlahtampilan = 3;
    $halaman = (isset($_GET['page']))? $_GET['page'] : 1;
    $mulaitampilan = ($halaman - 1) * $jumlahtampilan;

// ----------------- AKHIR PAGING -- MEMBUAT GANTI HALAMAN ---------------- >


  
//	$query = mysqli_query($connection, "select destinasi.* 
//	from destinasi");
	if(isset($_POST["kirim"]))
	{
		$search = $_POST["search"];
		$query = mysqli_query($connection, "select kategoriwisata.* 
			from kategoriwisata where kategoriNAMA like '%".$search."%' limit $mulaitampilan, $jumlahtampilan");
// --------------------- PAGING -- MEMBUAT GANTI HALAMAN ---------------- 
//	pada bagian ini tambhan --- limit $mulaitampilan, $jumlahtampilan ---	

	}else
		{
			$query = mysqli_query($connection, "select kategoriwisata.*  from kategoriwisata limit $mulaitampilan, $jumlahtampilan");
		}
//	pada bagian ini tambhan --- limit $mulaitampilan, $jumlahtampilan ---	


	$nomor = 1;
	while($row = mysqli_fetch_array($query))
	{
  ?>
				<tr>
				<td><?php echo $nomor;?></td>
					<td><?php echo $mulaitampilan + $nomor; ?></td> 
					<!-- pad bagian ini ganti dengan $mulaitampilan + $nomor -->
					<!-- ----------------- AKHIR PAGING -- MEMBUAT GANTI HALAMAN -------------- -->    
					<td><?php echo $row['kategoriKODE'];?></td>
					<td><?php echo $row['kategoriNAMA'];?></td>
					<td><?php echo $row['kategoriKET'];?></td>  
					<td><?php echo $row['kategoriREFERENCE'];?></td> 
					</td>

					<td>
						<a href="kategoriwisataubah.php?ubahfoto=<?php echo $row['kategoriKODE']?>" class="btn btn-success btn-sm" title="EDIT">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
						</a>
					</td>

					<td>
						<a href="kategoriwisatahapus.php?hapusfoto=<?php echo $row['kategoriKODE']?>" class="btn btn-danger btn-sm" title="DELETE">
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
	<!--------------------- PAGING -- MEMBUAT GANTI HALAMAN ---------------->
	<?php 
    $query = mysqli_query($connection, "SELECT * FROM kategoriwisata");
    $jumlahrecord = mysqli_num_rows($query);
    $jumlahpage = ceil($jumlahrecord/$jumlahtampilan);
  	?>

	<!-- TAMPILAN PADA HALAMAN PAGINATION INI DAPAT DIAMBIL DARI BOOTSTRAP 5 
			PADA BAGIAN components -> pagination 
	-->
	<nav aria-label="Page navigation example">
	<ul class="pagination">
		<li class="page-item"><a class="page-link" href="?page=<?php $nomorhal=1; echo $nomorhal?>">PERTAMA</a></li>
		<?php for($nomorhal=1; $nomorhal<=$jumlahpage; $nomorhal++)
		{ ?>
		<li class="page-item">
		<?php 
		if($nomorhal!=$halaman)
		{ ?>  
		<a class="page-link" href="?page=<?php echo $nomorhal?>"><?php echo $nomorhal?></a>
		<?php }
		else { ?>
		<a class="page-link" href="?page=<?php echo $nomorhal?>"><?php echo $nomorhal?></a>
		<?php } ?>
		</li>
		<?php } ?>
		<li class="page-item"><a class="page-link" href="?page=<?php echo $nomorhal-1?>">TERAKHIR</a></li>
	</ul>
	</nav>

	<!----------------- AKHIR PAGING -- MEMBUAT GANTI HALAMAN ---------------->
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