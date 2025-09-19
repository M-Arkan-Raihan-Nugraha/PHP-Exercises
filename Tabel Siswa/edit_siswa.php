<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Siswa</title>
</head>
<body>
  <h1>Edit SISWA</h1>

  <?php
    require_once('koneksi.php');
    $data = mysqli_query($koneksi, "SELECT * FROM tabel_siswa WHERE id='".$_GET['id']."'");
    $data_siswa = mysqli_fetch_assoc($data);
  ?>

  <form action="" method="post">
   <input type="text" name="nama_siswa" value="<?= $data_siswa['nama_siswa']?>" id="nama_siswa">
   <input type="number" value="<?= $data_siswa['umur']?>" name="umur" id="umur">
   <input type="email" value="<?= $data_siswa['email']?>" name="email" id="email">
    <button type="submit" name="tambah">Tambah</button>
  </form>

  <?php
   if (isset($_POST['tambah'])) {
    $nama= $_POST['nama_siswa'];
    $umur= $_POST['umur'];
    $email= $_POST['email'];
    require_once('koneksi.php');

    $result= mysqli_query($koneksi, "UPDATE tabel_siswa SET nama_siswa='$nama',umur='$umur',email='$email' WHERE id='".$_GET['id']."'") or die(mysqli_error($koneksi));

    if($result) {
      echo "<script>window.alert('Data berhasil diganti');</script>";
    }
  }
  ?>
</body>
</html>