<?php
require 'functions.php';

//ambil id dari url
$id = $_GET['id'];

// select mahasiswa berdasrakan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h2>Detail Mahasiswa</h2>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>" alt=""></li>
    <li>NIM : <?= $m['nim']; ?></li>
    <li>Email : <?= $m['email']; ?></li>
    <li>Jurusan : <?= $m['jurusan']; ?></li>
    <li><a href="ubah.php?id=<?= $m['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm ('apakah anda yakin?')">hapus</a></li>
    <li><a href="index.php">Kembali ke daftar Mahasiswa</a></li>
  </ul>
</body>

</html>