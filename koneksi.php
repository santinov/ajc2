<?php
    $host     = "172.20.0.2";
    $username = "root";
    $password = "";
    $database = "ajc2";
    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if (! $koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
