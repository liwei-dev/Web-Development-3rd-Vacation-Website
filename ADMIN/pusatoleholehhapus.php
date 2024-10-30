<?php
include "include/config.php";
if(isset($_GET['hapusfoto']))
{
    $kodefoto = $_GET["hapusfoto"];
    mysqli_query($connection, "DELETE from pusatoleholeh where pusatoleholehKODE = '$kodefoto'");
    echo "<script> alert ('DATA BERHASIL DIHAPUS'); document.location='pusatoleholeh.php' </script>";
}
?>