<?php
include 'koneksi.php';

$no_ktp = $_POST['no_ktp'];
$nm_identitas = $_POST['nm_identitas'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$sql = "INSERT INTO tbl_penduduk (no_ktp, nm_identitas, ttl, alamat, jenis_kelamin) VALUES ('$no_ktp', '$nm_identitas', '$ttl', '$alamat', '$jenis_kelamin')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
