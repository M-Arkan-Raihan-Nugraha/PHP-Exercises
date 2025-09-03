<?php
require_once('koneksi.php');
if (isset($_GET['id'])) {
$id = $_GET['id'];
$QUERY = mysqli_query($koneksi, "DELETE FROM tabel_siswa WHERE id='".$id."'");
}else {
  echo "<script>alert('Data id tidak ada.');
  window.location.href='data_siswa.php';</script>";
}

if ($QUERY) {
  echo "<script>alert('Data berhasil dihapus.');
  window.location.href='data_siswa.php';</script>";
} else {
  echo "<script>alert('Data gagal dihapus.');
  window.location.href='data_siswa.php';</script>";
}
?>