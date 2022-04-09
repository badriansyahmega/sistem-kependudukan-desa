<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_meninggal = htmlspecialchars($_GET['id_meninggal']);

// delete database
$query = "DELETE FROM meninggal WHERE id_meninggal = $id_meninggal";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../meninggal'</script>";
} else {
  echo "<script>window.alert('Data meninggal gagal dihapus!'); window.location.href='../meninggal'</script>";
}
