<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM categories WHERE category_id='$id'");

    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menghapus kategori!";
    }
} else {
    header("Location: index.php");
    exit;
}
?>