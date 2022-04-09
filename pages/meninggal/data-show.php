<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_meninggal = $_GET['id_meninggal'];

// ambil dari database
$query = "SELECT * FROM meninggal WHERE id_meninggal = $get_id_meninggal";

$hasil = mysqli_query($db, $query);

$data_meninggal = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_meninggal[] = $row;
}
