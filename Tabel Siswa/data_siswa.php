<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan tabel PHP</title>
</head>
<body>
  <h1 align="center">DATA SISWA</h1>
  <a href="tambah_siswa.php"><h3 align="center">Tambah Siswa</h3></a>
  <table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Email</th>
      <th>Aksi</th>
    </tr>
    <?php
    // memanggil data tabel dari database
    require_once('koneksi.php');
    $data = mysqli_query($koneksi, "SELECT * FROM tabel_siswa");

    //menampilkan data
    $i = 1;
    while ($siswa = mysqli_fetch_array($data)) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?=  $siswa['nama_siswa']; ?></td>
        <td><?=  $siswa['umur']; ?></td>
        <td><?=  $siswa['email']; ?></td>
        <td><a href="edit_siswa.php?id=<?= $siswa['id']?>">UPDATE</a> | <a href="hapus_siswa.php?id=<?= $siswa['id']?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">DELETE</a></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>