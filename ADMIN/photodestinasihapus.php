<?php
include "include/config.php";
if(isset($_GET['hapusfoto']))
{
    $kodefoto = $_GET["hapusfoto"];
    mysqli_query($connection, "DELETE from fotodestinasi where fotodestinasiKODE = '$kodefoto'");
    echo "<script> alert ('DATA BERHASIL DIHAPUS'); document.location='photodestinasi.php' </script>";
}
?>