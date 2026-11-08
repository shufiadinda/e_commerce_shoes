<?php
include '../db.php';

if (isset($_POST['simpan'])) {
    $nama_kategori = $_POST['nama_kategori'];
    $deskripsi = $_POST['deskripsi'];

    $query = mysqli_query($conn, "INSERT INTO categories 
        (nama_kategori, deskripsi) 
        VALUES ('$nama_kategori', '$deskripsi')");

    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menambahkan kategori!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kategori Sepatu</title>
</head>
<body>

<h2>Tambah Kategori Sepatu</h2>

<form method="POST">
    <label>Nama Kategori</label><br>
    <input type="text" name="nama_kategori" required>
    <br><br>

    <label>Deskripsi</label><br>
    <textarea name="deskripsi" required></textarea>
    <br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

</body>
</html>