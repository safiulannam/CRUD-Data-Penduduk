<?php
include 'koneksi.php';

$id = $_POST['id'];
$no_ktp = $_POST['no_ktp'];
$nm_identitas = $_POST['nm_identitas'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$sql = "UPDATE tbl_penduduk SET no_ktp = '$no_ktp', nm_identitas = '$nm_identitas', ttl = '$ttl', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
