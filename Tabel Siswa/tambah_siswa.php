<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>TAMBAH SISWA</h1>

  <form action="" method="post">
   <input type="text" name="nama_siswa" placeholder="nama_siswa" id="nama_siswa">
   <input type="number" placeholder="umur" name="umur" id="umur">
   <input type="email" placeholder="email" name="email" id="email">
    <button type="submit" name="tambah">Tambah</button>
  </form>

  <?php
//isset = menegecek apakah variabel sudah ada atau belum dengan name yang sesuai
   if (isset($_POST['tambah'])) {
    $nama= $_POST['nama_siswa'];
    $umur= $_POST['umur'];
    $email= $_POST['email'];
    require_once('koneksi.php');

    $result= mysqli_query($koneksi, "INSERT INTO tabel_siswa VALUES ('','$nama','$umur', '$email')") or die(mysqli_error($koneksi));

    if($result) {
      echo "<script>window.alert('Data berhasil ditambahkan');
      window.location.href='data_siswa.php';</script>;";
    }
  }
  ?>
</body>
</html>