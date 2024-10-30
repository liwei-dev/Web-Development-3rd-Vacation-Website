<?php
include "include/config.php";
if(isset($_GET['hapusfoto']))
{
    $kodefoto = $_GET["hapusfoto"];
    mysqli_query($connection, "DELETE from travel where travelKODE = '$kodefoto'");
    echo "<script> alert ('DATA BERHASIL DIHAPUS'); document.location='travel.php' </script>";
}
?>