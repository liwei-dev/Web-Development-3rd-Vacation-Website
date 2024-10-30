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
	<title>POSTER FILM</title>
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<?php 
	include "include/config.php";
?>

<body>

<div class="row">
<div class="col-sm-1"></div>

<div class="col-sm-1"></div>
</div>

<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Daftar FILM</h1>
			</div>
		</div>

        <!-- SEARCH BAR -->
		<form method="POST">
                <div class="form-group row mb-2">
                <label for="search" class="col-sm-3">Nama Film</label>

                <div class="col-sm-6">
                    <input type="text" name="search" class="form-control" id="search" 
                    value="<?php if(isset($_POST["search"])) {echo $_POST["search"];}?>"
                        placeholder = "Cari Film">

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
				<th>Nama Destinasi</th> 
				<th>Photo Destinasi</th>
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
	$query = mysqli_query($connection,"select * from filmliwei, destinasi where filmliwei.destinasiKODE = destinasi.destinasiKODE 
	AND filmliweiNAMA like '%".$search."%' limit $mulaitampilan, $jumlahtampilan");
// --------------------- PAGING -- MEMBUAT GANTI HALAMAN ---------------- 
//	pada bagian ini tambhan --- limit $mulaitampilan, $jumlahtampilan ---	

}else
    {
        $query = mysqli_query($connection, "select *  from filmliwei, destinasi where filmliwei.destinasiKODE = destinasi.destinasiKODE limit $mulaitampilan, $jumlahtampilan");
    }
//	pada bagian ini tambhan --- limit $mulaitampilan, $jumlahtampilan ---	


	$nomor = 1;
	while($row = mysqli_fetch_array($query))
	{
  ?>
				<tr>
					<td><?php echo $mulaitampilan + $nomor; ?></td> 
					<!-- pad bagian ini ganti dengan $mulaitampilan + $nomor -->
					<!-- ----------------- AKHIR PAGING -- MEMBUAT GANTI HALAMAN -------------- -->    
					<td><?php echo $row['filmliweiKODE'];?></td>
					<td><?php echo $row['filmliweiNAMA'];?></td>
					<td><?php echo $row['destinasiNAMA'];?></td>  
                    <td>
						<?php if(is_file("images/".$row['filmliweiFILE']))
						{ ?>
							<img src="images/<?php echo $row['filmliweiFILE']?>" width="80">
						<?php } else
							echo "<img src='images/noimage.png' width='80'>"
						?>
					</td> 
				</tr>
			<?php $nomor = $nomor + 1;?>
			<?php }	?>
		</tbody>
		
	</table>
	<!--------------------- PAGING -- MEMBUAT GANTI HALAMAN ---------------->
	<?php 
    $query = mysqli_query($connection, "SELECT * FROM filmliwei");
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