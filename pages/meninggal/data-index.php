<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT *, TIMESTAMPDIFF(YEAR, `tanggal_lahir_meninggal`, CURDATE()) AS usia_meninggal FROM meninggal";

$hasil = mysqli_query($db, $query);

$data_meninggal = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_meninggal[] = $row;
}
