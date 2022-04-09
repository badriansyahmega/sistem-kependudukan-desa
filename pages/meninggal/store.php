<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nik_meninggal = htmlspecialchars($_POST['nik_meninggal']);
$nama_meninggal = htmlspecialchars($_POST['nama_meninggal']);
$tempat_lahir_meninggal = htmlspecialchars($_POST['tempat_lahir_meninggal']);
$tanggal_lahir_meninggal = htmlspecialchars($_POST['tanggal_lahir_meninggal']);
$jenis_kelamin_meninggal = htmlspecialchars($_POST['jenis_kelamin_meninggal']);

$alamat_ktp_meninggal = htmlspecialchars($_POST['alamat_ktp_meninggal']);
$alamat_meninggal = htmlspecialchars($_POST['alamat_meninggal']);
$desa_kelurahan_meninggal = htmlspecialchars($_POST['desa_kelurahan_meninggal']);
$kecamatan_meninggal = htmlspecialchars($_POST['kecamatan_meninggal']);
$kabupaten_kota_meninggal = htmlspecialchars($_POST['kabupaten_kota_meninggal']);
$provinsi_meninggal = htmlspecialchars($_POST['provinsi_meninggal']);
$negara_meninggal = htmlspecialchars($_POST['negara_meninggal']);
$rt_meninggal = htmlspecialchars($_POST['rt_meninggal']);
$rw_meninggal = htmlspecialchars($_POST['rw_meninggal']);

$agama_meninggal = htmlspecialchars($_POST['agama_meninggal']);
$pendidikan_terakhir_meninggal = htmlspecialchars($_POST['pendidikan_terakhir_meninggal']);
$pekerjaan_meninggal = htmlspecialchars($_POST['pekerjaan_meninggal']);
$status_perkawinan_meninggal = htmlspecialchars($_POST['status_perkawinan_meninggal']);
$status_meninggal = htmlspecialchars($_POST['status_meninggal']);
$id_warga = htmlspecialchars($_POST['id_warga']);
$id_user = $_SESSION['user']['id_user'];
$tgl_meninggal = htmlspecialchars($_POST['tgl_meninggal']);

// masukkan ke database

$query = "INSERT INTO meninggal (id_meninggal, nik_meninggal, nama_meninggal, tempat_lahir_meninggal, tanggal_lahir_meninggal, jenis_kelamin_meninggal, alamat_ktp_meninggal, alamat_meninggal, desa_kelurahan_meninggal, kecamatan_meninggal, kabupaten_kota_meninggal, provinsi_meninggal, negara_meninggal, rt_meninggal, rw_meninggal, agama_meninggal, pendidikan_terakhir_meninggal, pekerjaan_meninggal, status_perkawinan_meninggal, status_meninggal, id_user, created_at, tgl_meninggal, updated_at) VALUES (NULL, '$nik_meninggal', '$nama_meninggal', '$tempat_lahir_meninggal', '$tanggal_lahir_meninggal', '$jenis_kelamin_meninggal', '$alamat_ktp_meninggal', '$alamat_meninggal', '$desa_kelurahan_meninggal', '$kecamatan_meninggal', '$kabupaten_kota_meninggal', '$provinsi_meninggal', '$negara_meninggal', '$rt_meninggal', '$rw_meninggal', '$agama_meninggal', '$pendidikan_terakhir_meninggal', '$pekerjaan_meninggal', '$status_perkawinan_meninggal', '$status_meninggal', '$id_user', '$tgl_meninggal', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// delete data warga yang sudah dimeninggal
if ($hasil == true) {
  # jika sudah berhasil meninggal maka hapus
  $query_delete = "DELETE FROM warga WHERE id_warga = $id_warga";

  $hasil_delete = mysqli_query($db, $query_delete);
}

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('meninggal warga berhasil'); window.location.href='../meninggal/'</script>";
} else {
  echo "<script>window.alert('meninggal warga gagal!'); window.location.href='../meninggal/create.php?id_warga=".$id_warga."'</script>";
}
