<?php
include '../db.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM categories WHERE category_id='$id'");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['update'])) {
    $nama_kategori = $_POST['nama_kategori'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($conn, "UPDATE categories SET
        nama_kategori='$nama_kategori',
        deskripsi='$deskripsi'
        WHERE category_id='$id'");

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kategori Sepatu</title>
</head>
<body>

<h2>Edit Kategori Sepatu</h2>

<form method="POST">
    <label>Nama Kategori</label><br>
    <input type="text" name="nama_kategori"
    value="<?= htmlspecialchars($data['nama_kategori']) ?>" required>
    <br><br>

    <label>Deskripsi</label><br>
    <textarea name="deskripsi" required><?= htmlspecialchars($data['deskripsi']) ?></textarea>
    <br><br>

    <button type="submit" name="update">Update</button>
</form>

</body>
</html>