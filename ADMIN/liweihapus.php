<?php
include "include/config.php";
if(isset($_GET['hapusfoto']))
{
    $kodefoto = $_GET["hapusfoto"];
    mysqli_query($connection, "DELETE from liwei where liweiID = '$kodefoto'");
    echo "<script> alert ('DATA BERHASIL DIHAPUS'); document.location='liwei.php' </script>";
}
?>