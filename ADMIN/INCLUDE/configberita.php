<?php
    //ini koneksi ke database//
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pesonajawa";

    //membuat koneksinya//
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    if (!$connection){
        die("Connection Failed : ".mysqli_connect_error());
    }
?>