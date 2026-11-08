<?php
include '../db.php';

$query = mysqli_query($conn, "SELECT * FROM categories ORDER BY category_id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kategori Sepatus</title>
    <style>
        body {
            font-family: Arial;
            background: #f8f4f4;
            padding: 30px;
        }
        h2 { color: #333; }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #222;
            color: white;
        }
        a {
            text-decoration: none;
            padding: 7px 12px;
            border-radius: 5px;
        }
        .tambah { background: #222; color: white; }
        .edit { background: #e6b85c; color: black; }
        .hapus { background: #d9534f; color: white; }
    </style>
</head>
<body>

<h2>Data Kategori Produk Se</h2>

<a class="tambah" href="tambah.php">+ Tambah Kategori</a>
<br><br>

<table>
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
            <a class="edit" href="edit.php?id=<?= $data['category_id']; ?>">Edit</a>
            <a class="hapus"
               href="hapus.php?id=<?= $data['category_id']; ?>"
               onclick="return confirm('Yakin ingin menghapus kategori?')">
               Hapus
            </a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>