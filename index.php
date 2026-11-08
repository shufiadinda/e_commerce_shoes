<?php
include '../db.php';

$query = mysqli_query($conn, "SELECT * FROM categories");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
</head>
<body>

<h2>Dashboard Admin E-Commerce Shoes</h2>

<h3>Data Kategori Produk</h3>

<a href="../categories/tambah.php">
    Tambah Kategori
</a>

<table border="1" cellpadding="10">
<tr>
    <th>No</th>
    <th>Nama Kategori</th>
    <th>Deskripsi</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
while ($data = mysqli_fetch_assoc($query)) {
?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= htmlspecialchars($data['nama_kategori']); ?></td>
    <td><?= htmlspecialchars($data['deskripsi']); ?></td>
    <td>
        <a href="../categories/edit.php?id=<?= $data['category_id']; ?>">Edit</a>
        |
        <a href="../categories/hapus.php?id=<?= $data['category_id']; ?>"
        onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>