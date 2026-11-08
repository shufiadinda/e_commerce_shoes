<?php
$koneksi = mysqli_connect("localhost", "root", "", "e_commerce_shoes");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

echo "Koneksi database berhasil!";
?>