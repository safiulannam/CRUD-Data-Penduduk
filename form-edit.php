<?php
include 'koneksi.php';

$id = $_GET['id'];

// Fetch record from database
$sql = "SELECT * FROM tbl_penduduk WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Edit Data Penduduk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h2>Edit Data Penduduk</h2>
        <form action="proses-edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="no_ktp">No KTP</label>
                <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?php echo $row['no_ktp']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nm_identitas">Nama Lengkap</label>
                <input type="text" class="form-control" id="nm_identitas" name="nm_identitas" value="<?php echo $row['nm_identitas']; ?>" required>
            </div>
            <div class="form-group">
                <label for="ttl">Tempat Tanggal Lahir</label>
                <input type="text" class="form-control" id="ttl" name="ttl" value="<?php echo $row['ttl']; ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamain</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>" required>
            </div>
            <button type="submit" class="btn btn-danger"><a href="tampil.php" style="color: white; text-decoration: none;">Kembali</a></button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>