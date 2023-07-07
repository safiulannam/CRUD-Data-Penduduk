<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM tbl_penduduk WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Terjadi kesalahan saat menghapus : " . $conn->error;
}

$conn->close();
?>
