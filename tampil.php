<?php
include 'koneksi.php';

$sql = "SELECT * FROM tbl_penduduk";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Data Penduduk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h2>Data Penduduk</h2>
        <table class="table">
            <tr>
                <th>No</th>
                <th>No. KTP</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['no_ktp']."</td>";
                    echo "<td>".$row['nm_identitas']."</td>";
                    echo "<td>".$row['ttl']."</td>";
                    echo "<td>".$row['alamat']."</td>";
                    echo "<td>".$row['jenis_kelamin']."</td>";
                    echo "<td><a href='form-edit.php?id=".$row['id']."' class='btn btn-primary'>Edit</a> 
                          <a href='hapus.php?id=".$row['id']."' class='btn btn-danger'>Hapus</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Tidak ada data ditemukan.</td></tr>";
            }
            ?>
        </table>
        <button type="submit" class="btn btn-danger"><a href="index.php" style="color: white; text-decoration: none;">Kembali</a></button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>