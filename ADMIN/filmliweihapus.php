<?php
include "include/config.php";
if(isset($_GET['hapusfoto']))
{
    $kodefoto = $_GET["hapusfoto"];
    mysqli_query($connection, "DELETE from filmliwei where filmliweiKODE = '$kodefoto'");
    echo "<script> alert ('DATA BERHASIL DIHAPUS'); document.location='filmliwei.php' </script>";
}
?>